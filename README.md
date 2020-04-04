# PHP SDK for the NameParse Service

A fast way to add the [www.nameparse.com](https://www.nameparse.com) service into your PHP projects.

## Installation

The recommended way to install the NameParse SDK is through Composer.

```shell script
composer require nameparse/nameparse-php-sdk
```

## Usage

```php
$np = new NameParse(['key'=>'your_name_parse_key_here']);
$results = $np->parse("Chris Schuld");

$f = $results->getFirst();
$l = $results->getLast();
```

## Tests

Tests are executed via PHPUnit.  You will need to use composer to install the dev 

```shell script
./vendor/bin/phpunit
```