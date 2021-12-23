<?php

namespace Mohamedsabil83\LaravelHijrian\Tests;

use Mohamedsabil83\LaravelHijrian\LaravelHijrianServiceProvider;
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
