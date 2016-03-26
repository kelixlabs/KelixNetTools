# KeLixNetTools

[![Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

PHP Library for Networking Tools (IPv4 and IPv6)
Use for Laravel 5

## Install

#### Via Composer

``` bash
$ composer require kelixlabs/kelix-net-tools
```

#### Via edit `composer.json`
	
	"require": {
		"kelixlabs/kelix-net-tools": "dev-master"
	}

Next, update Composer from the Terminal:

``` bash
$ composer update
```

#### Add to laravel config
Once this operation completes, the final step is to add the service provider. Open `config/app.php`, and add a new item to the providers array.

```php
'aliases' => array(
    .....
    kelixlabs\kelixNetTools\kelixNetToolsServiceProvider::class,
);
```

Now add the alias.

```php
'aliases' => array(
    ......
    'NetTools' => kelixlabs\kelixNetTools\Facade\NetTools::class,
);
```


## Usage

``` php
// Generate network object
$network = new NetTools;
// The default IP set to 127.0.0.1 and Netmask 255.255.255.0

// Set the IP and Netmask
$network::setIP('10.3.30.179');
$network::setNetmask('255.255.255.0');

// Get the IP and Netmask
$ip = $network::getIP();
$netmask = $network::getNetmask();

// Get Ping latency from current IP set
$latency = $network::ping()->ping();

// Get Ping latency from given ip
$latency = $network::ping('192.168.1.123')->ping();

// Get Network info from current IP set
$network = $network::network()->info;

// Get Network info from given IP and Netmask
$network = $network::network('192.168.1.123','255.255.255.0')->info;

// Get individual Network info
$CIDR = Network::network()->CIDR;
$broadcast = (string)Network::network()->broadcast;

// Get MAC address from target's IP
$mac = $network::network()->mac;

// Bonus Wake On Lan
// NetTools::WakeOnLan('Mac Address','Broadcast Address')->WakeUp();
$wakeOnLan = $network::WakeOnLan('74-27-ea-5e-74-59','10.3.30.255')->WakeUp();

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
