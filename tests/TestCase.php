<?php

namespace MohamedSabil83\LaravelHijrian\Tests;

use MohamedSabil83\LaravelHijrian\LaravelHijrianServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelHijrianServiceProvider::class,
        ];
    }
}
