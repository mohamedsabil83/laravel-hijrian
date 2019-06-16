<?php

namespace Mohamedsabil83\LaravelHijrian;

use Illuminate\Support\ServiceProvider;

class LaravelHijrianServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'mohamedsabil83');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'mohamedsabil83');
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
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelhijrian.php', 'laravelhijrian');

        // Register the service the package provides.
        $this->app->singleton('laravelhijrian', function ($app) {
            return new LaravelHijrian;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelhijrian'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelhijrian.php' => config_path('laravelhijrian.php'),
        ], 'laravelhijrian.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/mohamedsabil83'),
        ], 'laravelhijrian.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/mohamedsabil83'),
        ], 'laravelhijrian.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mohamedsabil83'),
        ], 'laravelhijrian.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
