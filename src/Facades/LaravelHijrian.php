<?php

namespace Mohamedsabil83\LaravelHijrian\Facades;

use Illuminate\Support\Facades\Facade;
use Mohamedsabil83\LaravelHijrian\LaravelHijrian as LH;

/**
 * @see \Mohamedsabil83\LaravelHijrian\LaravelHijrian
 */
class LaravelHijrian extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LH::class;
    }
}
