# Font Awesome Pro

[![Latest Version on Packagist](https://img.shields.io/packagist/v/preemstudio/blade-icons-font-awesome-pro.svg?style=flat-square)](https://packagist.org/packages/preemstudio/blade-icons-font-awesome-pro)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/blade-icons-font-awesome-pro/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/preemstudio/blade-icons-font-awesome-pro/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/blade-icons-font-awesome-pro/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/preemstudio/blade-icons-font-awesome-pro/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/preemstudio/blade-icons-font-awesome-pro.svg?style=flat-square)](https://packagist.org/packages/preemstudio/blade-icons-font-awesome-pro)

A package to easily make use of [Font Awesome Pro](https://fontawesome.com/) with Laravel Blade Icons.

## Installation

You can install the package via composer:

```bash
composer require preemstudio/blade-icons-font-awesome-pro
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=blade-icons-font-awesome-pro-config
```

## Usage

This package utilizes Blade Icons under the hood. For additional functionality, please refer to the [Blade Icons README](https://github.com/PreemStudio/blade-icons). The prefix for all icons in this package is `font-awesome-pro`, with specific sets available as `font-awesome-pro-brands`, `font-awesome-pro-duotone`, `font-awesome-pro-light`, `font-awesome-pro-regular`, `font-awesome-pro-sharp-light`, `font-awesome-pro-sharp-regular`, `font-awesome-pro-sharp-solid`, `font-awesome-pro-solid` and `font-awesome-pro-thin`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you've found a bug regarding security please mail [security@preem.studio](mailto:security@preem.studio) instead of using the issue tracker.

## Credits

- [Preem Studio](https://github.com/PreemStudio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
