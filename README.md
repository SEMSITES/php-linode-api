```
 _     _                 _       ___  ______ _____
| |   (_)               | |     / _ \ | ___ \_   _|
| |    _ _ __   ___   __| | ___/ /_\ \| |_/ / | |
| |   | | '_ \ / _ \ / _` |/ _ \  _  ||  __/  | |
| |___| | | | | (_) | (_| |  __/ | | || |    _| |_
\_____/_|_| |_|\___/ \__,_|\___\_| |_/\_|    \___/

```

The v4.01 Linode API for PHP [BETA].

![#f03c15](https://placehold.it/15/f03c15/000000?text=+) Definately a work in progress. Do not use.

[![Latest Stable Version](https://poser.pugx.org/hnhdigital-os/php-linode-api/v/stable.svg)](https://packagist.org/packages/hnhdigital-os/php-linode-api) [![Total Downloads](https://poser.pugx.org/hnhdigital-os/php-linode-api/downloads.svg)](https://packagist.org/packages/hnhdigital-os/php-linode-api) [![Latest Unstable Version](https://poser.pugx.org/hnhdigital-os/php-linode-api/v/unstable.svg)](https://packagist.org/packages/hnhdigital-os/php-linode-api) [![License](https://poser.pugx.org/hnhdigital-os/php-linode-api/license.svg)](https://packagist.org/packages/hnhdigital-os/php-linode-api) [![Donate to this project using Patreon](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://patreon.com/RoccoHoward)

[![Build Status](https://travis-ci.org/hnhdigital-os/php-linode-api.svg?branch=master)](https://travis-ci.org/hnhdigital-os/php-linode-api) [![StyleCI](https://styleci.io/repos/119234618/shield?branch=master)](https://styleci.io/repos/119234618) [![Test Coverage](https://codeclimate.com/github/hnhdigital-os/php-linode-api/badges/coverage.svg)](https://codeclimate.com/github/hnhdigital-os/php-linode-api/coverage) [![Issue Count](https://codeclimate.com/github/hnhdigital-os/php-linode-api/badges/issue_count.svg)](https://codeclimate.com/github/hnhdigital-os/php-linode-api) [![Code Climate](https://codeclimate.com/github/hnhdigital-os/php-linode-api/badges/gpa.svg)](https://codeclimate.com/github/hnhdigital-os/php-linode-api)

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

This package is built automatically using the OpenAPI specification for the Linode v4 API.

## Documentation

* [Requirements](#requirements)
* [Installation](#install)
* [Examples](#examples)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Requirements

* PHP 7.1+

## Install

Via composer:

`$ composer require hnhdigital-os/php-linode-api dev-master`

## Examples

### Regions

Results returned from any search based endpoint are provided as an instance of that type. This allows you to call any endpoints immediately.

Results from the `get` method are returned as an object that implements `Iterator` and `Countable`, allowing you to use this in a `foreach` and to use `count`. Linode limits search results to 25 records per page - this is overcome by automatically requesting the next page of records when the last record is reached in the current page.

```php
foreach ((new Regions())->get() as $region) {
    // Do something with the region data (returned as an instance of Region)
}
```

Calling the `all` method automatically loads every page of results.
```php
$regions = (new Regions())->get()->all();
```

### Region

You can get a specific record, simply by creating the object with the required parameters. This will automatically call the endpoint and return the object ready to use. The record will auto-load by setting the last parameter to true.

```php
$region = new Region('us-east-1a', true);

echo $region->id.' ('.$region->country.')';
```
```
us-east-1a (US)
```

Calling the `get` method directly on this same class will return an array of the values from the same endpoint. This will also auto-fill the object (the same as above, passing the true actually just calls the get method).

```php
$result = (new Region('us-east-1a'))->get();

print_r($result);
```
```
Array
(
    [id] => us-east-1a
    [country] => US
)
```

## Contributing

Please see [CONTRIBUTING](https://github.com/hnhdigital-os/php-linode-api/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/RoccoHoward)
* [All Contributors](https://github.com/hnhdigital-os/php-linode-api/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hnhdigital-os/php-linode-api/blob/master/LICENSE) for more information.
