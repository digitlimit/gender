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
    }
}
