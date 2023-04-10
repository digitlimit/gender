<?php

namespace Digitlimit\Gender;

use Illuminate\Support\ServiceProvider;

class GenderServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'digitlimit');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'digitlimit');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('gender', function ($app) {
            return new Gender;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gender'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../migrations' => database_path('migrations'),
        ], 'gender.migrations');

        $this->publishes([
            __DIR__.'/../seeders' => database_path('seeders'),
        ], 'gender.seeders');

        // Publishing the configuration file.
        /*$this->publishes([
            __DIR__.'/../config/gender.php' => config_path('gender.php'),
        ], 'gender.config');*/

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/digitlimit'),
        ], 'gender.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/digitlimit'),
        ], 'gender.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/digitlimit'),
        ], 'gender.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
