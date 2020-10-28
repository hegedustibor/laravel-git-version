# Get version of application from git

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hegedustibor/laravel-git-version.svg?style=flat-square)](https://packagist.org/packages/hegedustibor/laravel-git-version)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/hegedustibor/laravel-git-version/run-tests?label=tests)](https://github.com/hegedustibor/laravel-git-version/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/hegedustibor/laravel-git-version.svg?style=flat-square)](https://packagist.org/packages/hegedustibor/laravel-git-version)


Do you want to show version of your application from git? It is possible with this package.

## Installation

You can install the package via composer:

```bash
composer require hegedustibor/laravel-git-version
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TiborHegedus\GitVersion\GitVersionServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'file-name' => 'version',
];
```

## Usage

``` php
// Only from file
echo TiborHegedus\Facade\GitVersion::getVersionFromFile();

// Only from git
echo TiborHegedus\Facade\GitVersion::getVersionFromGit();

// Both solution
echo TiborHegedus\Facade\GitVersion::getVersion();
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tibor Hegedüs](https://github.com/hegedustibor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
