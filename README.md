# Laravel Hijrian

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohamedsabil83/laravel-hijrian.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-hijrian)
[![Build Status](https://img.shields.io/travis/mohamedsabil83/laravel-hijrian/master.svg?style=flat-square)](https://travis-ci.org/mohamedsabil83/laravel-hijrian)
[![Quality Score](https://img.shields.io/scrutinizer/g/mohamedsabil83/laravel-hijrian.svg?style=flat-square)](https://scrutinizer-ci.com/g/mohamedsabil83/laravel-hijrian)
[![Total Downloads](https://img.shields.io/packagist/dt/mohamedsabil83/laravel-hijrian.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-hijrian)

This is a Hijri-Gregory date converter. It's return a date instance of **carbon**, so, you can make any process related to it.

## Installation

You can install the package via composer:

```bash
composer require mohamedsabil83/laravel-hijrian
```

## Usage

> Don't forget to add **`use Hijrian;`** at the top of your file.

### Get Hijri date

```php
Hijrian::hijri()
```

### Get Gregory date

```php
Hijrian::gregory()
```

### Convert to Hijri

```php
Hijrian::hijri($gregory_date)
```

### Convert to Gregory

```php
Hijrian::gregory($hijri_date)
```

<!-- ### Testing

``` bash
composer test
``` -->

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@mohamedsabil83.com instead of using the issue tracker.

## Credits

- [Mohamed Sabil](https://github.com/mohamedsabil83)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).