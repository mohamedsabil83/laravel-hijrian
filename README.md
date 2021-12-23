# Hijri-Gregorian date converter for Laravel

<img src="https://preview.dragon-code.pro/mohamedsabil83/Laravel-Hijrian.svg?brand=laravel" alt="MohamedSabil83"/>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohamedsabil83/laravel-hijrian.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-hijrian)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mohamedsabil83/laravel-hijrian/run-tests?label=tests)](https://github.com/mohamedsabil83/laravel-hijrian/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mohamedsabil83/laravel-hijrian/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mohamedsabil83/laravel-hijrian/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mohamedsabil83/laravel-hijrian.svg?style=flat-square)](https://packagist.org/packages/mohamedsabil83/laravel-hijrian)

This is a Hijri-Gregory date converter for Laravel 5.8+. It's return a date instance of **carbon**, so, you can make any process related to it.

## Installation

You can install the package via composer:

```bash
composer require mohamedsabil83/laravel-hijrian
```

## Usage

Don't forget to add **`use Hijrian;`** at the top of your file.

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

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [MohamedSabil83](https://github.com/mohamedsabil83)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
