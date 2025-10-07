<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enum\PermissionEnum;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
        // for small apps, use aggressive strategy
        // Vite::usePrefetchStrategy('aggressive');

        // for large apps, use waterfall strategy
        Vite::prefetch(concurrency: 5);
    }

    private function logViewerRule(): void
    {

        LogViewer::auth(function (Request $request) {
            /**
             * @var User $user
             */
            $user = $request->user();

            return $user->hasPermissionTo(PermissionEnum::SYSTEM_LOG_VIEW->value);
        });

        Gate::define('viewLogViewer', fn (?User $user): bool => $user ? $user->hasPermissionTo(PermissionEnum::SYSTEM_LOG_VIEW->value) : false);
    }
}
