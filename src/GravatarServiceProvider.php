<?php

namespace Wavey\LaravelGravatar;

use Illuminate\Support\ServiceProvider;

class GravatarServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gravatar.php', 'gravatar');
        $this->app->singleton('gravatar', function () {
            return new Gravatar();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePublishing();
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/gravatar.php' => config_path('gravatar.php'),
        ], 'gravatar-config');
    }
}
