Country List (by EVDW)
======================

This library allow you to get countries names and ISO codes in all languages for php usage.

## Installing

``` sh
$ composer require evdw/country-list
```

## Using

Get a country names list in a specific language:
``` php
use EVDW\CountriesFactory;

$countriesFactory = new CountriesFactory;
$countriesFactory->getCountries('fr'); // Return a countries array in french

```

Get a country iso code, by specifying the language in which the country is written:
``` php
use EVDW\CountriesFactory;

$countriesFactory = new CountriesFactory;
$countriesFactory->getIsoCode('fr', 'france'); // Return the french ISO code
```

If the locale or the country name do not exist, no errors are throw, it returns null or empty array.
