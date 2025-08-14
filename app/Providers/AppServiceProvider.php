<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Events\NotificationFailed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Opcodes\LogViewer\Facades\LogViewer;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AppServiceProvider extends ServiceProvider
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
    }
    /**
     * Force HTTPS in non-local environments.
     */
    private function enforceSecureUrls(): void
    {
        if (!$this->app->environment('local')) {
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
        LogViewer::auth(function ($request): bool {
            return true;
        });

        Gate::define('viewLogViewer', function (?User $user): bool {
            return true;
        });
    }
}
