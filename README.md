# ServiceTitan v2 API client for PHP

ServiceTitan v2 API client for PHP

For more information, please visit [https://developer.servicetitan.io](https://developer.servicetitan.io).

## Requirements

PHP 7.3 and later. Should also work with PHP 8.0 but has not been tested.

## Installation

Install via Composer:

```
composer require compwright/servicetitan
```

## Getting Started

```php
<?php

use Compwright\OAuth2_Servicetitan\SandboxProvider;
use CompWright\ServiceTitan\CrmClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Symfony\Component\Dotenv\Dotenv;

require_once(__DIR__ . '/vendor/autoload.php');

$urlFactory = Psr17FactoryDiscovery::findUrlFactory();

$plugins = [
    new HeaderSetPlugin([
        'ST-App-Key' => $appKey,
        'Authorization' => 'Bearer ' . $oauthToken
    ]),
    new AddHostPlugin(
        $urlFactory->createUri('https://api-integration.servicetitan.io')
    )
];

$crmClient = CrmClient::create(null, $plugins);

$booking_provider = 56; // int | Format - int64.

$tenant = 56; // int | Tenant ID

$request = [
    "source" => "string",
    "name" => "string",
    "address" => [
        "street" => "string",
        "unit" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "country" => "string"
    ],
    "contacts" => [
        ["type" => "Phone", "value" => "string", "memo" => "string"]
    ],
    "customerType" => "string",
    "start" => "string",
    "summary" => "string",
    "campaignId" => 0,
    "businessUnitId" => 0,
    "jobTypeId" => 0,
    "priority" => [],
    "isFirstTimeClient" => true,
    "uploadedImages" => ["string"],
    "isSendConfirmationEmail" => true,
    "externalId" => "string",
];

$result = $crmClient->bookingsCreate($tenant, $booking_provider, $request);
print_r($result);
```

## Tests

To run the tests, use:

```bash
composer install
composer run test
```

## Author

Jonathon Hill, CompWright Enterprises LLC (https://compwright.com)
