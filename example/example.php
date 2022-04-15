<?php

use Compwright\OAuth2_Servicetitan\SandboxProvider;
use CompWright\ServiceTitan\Api\CustomersApi;
use CompWright\ServiceTitan\Configuration;
use GuzzleHttp\Client as GuzzleHttp;
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

$token = $oauth->getAccessToken('client_credentials');

$httpClient = new GuzzleHttp([
    'headers' => [
        'Authorization' => 'Bearer ' . $token->getToken(),
        'ST-App-Key' => $appKey,
    ]
]);

$config = (new Configuration())->setApiKey('ST-App-Key', $appKey);

$client = new CustomersApi($httpClient, $config);

$customers = $client->customersGetList($tenantId);
print_r($customers);
