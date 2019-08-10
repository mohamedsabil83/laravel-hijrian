<?php

namespace Mohamedsabil83\LaravelHijrian;

use Illuminate\Support\ServiceProvider;

class LaravelHijrianServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(LaravelHijrian::class, function () {
            return new LaravelHijrian;
        });

        $this->app->alias(LaravelHijrian::class, 'hijrian');
    }
}
