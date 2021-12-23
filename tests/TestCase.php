<?php

namespace Mohamedsabil83\LaravelHijrian\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Mohamedsabil83\LaravelHijrian\LaravelHijrianServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelHijrianServiceProvider::class,
        ];
    }
}
