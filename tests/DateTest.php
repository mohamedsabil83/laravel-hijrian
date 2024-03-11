<?php

use Carbon\Carbon;
use Mohamedsabil83\LaravelHijrian\Facades\Hijrian;

beforeEach(function () {
    $this->gregory = '2019-08-09';
    $this->hijri = '1440-12-08';
});

it('Convert Gregory To Hijri', function () {
    expect(Hijrian::hijri($this->gregory)->format('Y-m-d'))->toEqual($this->hijri);
});

it('Convert Hijri To Gregory', function () {
    expect(Hijrian::gregory($this->hijri)->format('Y-m-d'))->toEqual($this->gregory);
});

it('Return A Grogory Date', function () {
    expect(Hijrian::gregory())->toBeInstanceOf(Carbon::class);
});

it('Return A Hijri Date', function () {
    expect(Hijrian::hijri())->toBeInstanceOf(Carbon::class);
});
