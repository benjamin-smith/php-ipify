# php-ipify

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/benjamin-smith/php-ipify/master.svg?style=flat-square)](https://travis-ci.org/benjamin-smith/php-ipify)
[![Quality Score](https://img.shields.io/scrutinizer/g/benjamin-smith/php-ipify.svg?style=flat-square)](https://scrutinizer-ci.com/g/benjamin-smith/php-ipify)
[![Total Downloads](https://img.shields.io/packagist/dt/benjamin-smith/php-ipify.svg?style=flat-square)](https://packagist.org/packages/benjamin-smith/php-ipify)

This library will retrieve your public IP address from [ipify's API service](https://www.ipify.org/), and return it as a string.

This library also has some other nice features you might care about:

* This library handles exceptions properly, and usage examples below show you how to deal with errors in a foolproof way.
* This library only makes API requests over HTTPS.

## Install

Via Composer

``` bash
$ composer require benjamin-smith/php-ipify
```

## Usage

``` php
echo Ipify\Ip::get();
```

Or, if your inclined to catch any errors:

```php
try {
    $ip = Ipify\Ip::get();    
} catch (ConnectionError $e) {
    // If you get here, it means you were unable to reach the ipify service,
    // most likely because of a network error on your end.
} catch (ServiceError $e) {
    // If you get here, it means ipify is having issues, so the request
    // couldn't be completed :(
} catch (Exception $e) {
    // Something else happened (non-ipify related).
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email ben@benjaminsmith.com instead of using the issue tracker.

## Credits

- [Benjamin Smith](https://github.com/benjaminsmith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
