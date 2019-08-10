<?php

namespace Mohamedsabil83\LaravelHijrian\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Mohamedsabil83\LaravelHijrian\LaravelHijrianFacade;
use Mohamedsabil83\LaravelHijrian\LaravelHijrianServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return LaravelHijrianServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LaravelHijrianServiceProvider::class];
    }

    /**
     * Load package alias
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Hijrian' => LaravelHijrianFacade::class,
        ];
    }
}
