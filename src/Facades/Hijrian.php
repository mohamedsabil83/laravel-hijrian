<?php

namespace Mohamedsabil83\LaravelHijrian\Facades;

use Illuminate\Support\Facades\Facade;
use Mohamedsabil83\LaravelHijrian\LaravelHijrian;

/**
 * @see \Mohamedsabil83\LaravelHijrian\LaravelHijrian
 */
class Hijrian extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaravelHijrian::class;
    }
}
