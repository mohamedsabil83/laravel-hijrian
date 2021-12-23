<?php

use Carbon\Carbon;
use Mohamedsabil83\LaravelHijrian\Facades\LaravelHijrian;

beforeEach(function () {
    $this->gregory = '2019-08-09';
    $this->hijri = '1440-12-08';
});

it('Convert Gregory To Hijri', function () {
    expect(LaravelHijrian::hijri($this->gregory)->format('Y-m-d'))->toEqual($this->hijri);
});

it('Convert Hijri To Gregory', function () {
    expect(LaravelHijrian::gregory($this->hijri)->format('Y-m-d'))->toEqual($this->gregory);
});

it('Return A Grogory Date', function () {
    expect(LaravelHijrian::gregory())->toBeInstanceOf(Carbon::class);
});

it('Return A Hijri Date', function () {
    expect(LaravelHijrian::hijri())->toBeInstanceOf(Carbon::class);
});
