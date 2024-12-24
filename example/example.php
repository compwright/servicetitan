<?php

namespace CompWright\ServiceTitan;

use Compwright\OAuth2_Servicetitan\SandboxProvider;
use GuzzleHttp\Client;
use Symfony\Component\Dotenv\Dotenv;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$appKey = $_ENV['SERVICETITAN_APP_KEY'];
$tenantId = $_ENV['SERVICETITAN_TENANT_ID'];
$clientId = $_ENV['SERVICETITAN_CLIENT_ID'];
$secret = $_ENV['SERVICETITAN_CLIENT_SECRET'];

$oauth = new SandboxProvider([
    'clientId' => $clientId,
    'clientSecret' => $secret,
    'redirectUri' => '',
]);

$customersApi = new Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Client(),
    Configuration::getDefaultConfiguration()->setAccessToken(
        $oauth->getAccessToken('client_credentials')->getToken()
    )
);

$response = $customersApi->customersGetList($tenantId);
$data = $response->getData();

print_r($data);
