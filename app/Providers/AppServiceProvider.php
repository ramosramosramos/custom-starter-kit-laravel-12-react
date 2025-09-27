<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enum\PermissionEnum;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        collect(PermissionEnum::cases())->each(function ($permission): void {
            Gate::define($permission->value, fn (User $user) => $user->hasPermissionTo($permission->value) ? Response::allow() : Response::denyAsNotFound());
        });
        $this->setupCommandsSafely();
        $this->tuneModelBehavior();
        $this->enforceSecureUrls();
        $this->optimizeViteSettings();
        $this->logViewerRule();
    }

    /**
     * Prevent destructive commands in production.
     */
    private function setupCommandsSafely(): void
    {
        DB::prohibitDestructiveCommands($this->app->isProduction());
    }

    /**
     * Fine-tune Eloquent model behavior.
     */
    private function tuneModelBehavior(): void
    {
        Model::shouldBeStrict();
        Model::unguard();
        Model::automaticallyEagerLoadRelationships();
    }

    /**
     * Force HTTPS in non-local environments.
     */
    private function enforceSecureUrls(): void
    {
        if (! $this->app->environment('local')) {
            URL::forceScheme('https');
        }
    }

    /**
     * Optimize Vite asset loading strategy.
     */
    private function optimizeViteSettings(): void
    {
        Vite::usePrefetchStrategy('aggressive');
    }

    private function logViewerRule(): void
    {
        LogViewer::auth(fn ($request): bool => true);

        Gate::define('viewLogViewer', fn (?User $user): bool => true);
    }
}
