# KeLixNetTools

[![Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
<!-- [![Build Status][ico-travis]][link-travis] -->
[![Total Downloads][ico-downloads]][link-downloads]

PHP Library for Networking Tools (IPv4 and IPv6)
Use for Laravel 5

## Install

Via Composer

``` bash
$ composer require kelixlabs/kelix-net-tools
```

## Usage

``` php
$netTools = new kelixlabs\KelixNetTools\NetTools();
// The default IP set to 127.0.0.1 and Netmask 255.255.255.0

echo $netTools->ping('10.0.2.2')->ping();

echo $netTools->ping('10.0.2.2')->getMac();

echo (string)$netTools->network('10.0.2.2','255.255.255.0')->broadcast;

echo $netTools->ip('10.0.2.2')->version;
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [kelixlabs][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/kelixlabs/kelix-net-tools.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kelixlabs/kelix-net-tools/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kelixlabs/kelix-net-tools.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/kelixlabs/kelix-net-tools
[link-travis]: https://travis-ci.org/kelixlabs/KeLixNetTools
[link-downloads]: https://packagist.org/packages/kelixlabs/kelix-net-tools
[link-author]: https://github.com/kelixlabs
[link-contributors]: ../../contributors
