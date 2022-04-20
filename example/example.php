<?php

use Compwright\OAuth2_Servicetitan\SandboxProvider;
use CompWright\ServiceTitan\CrmClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
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

$urlFactory = Psr17FactoryDiscovery::findUrlFactory();

$plugins = [
    new HeaderSetPlugin([
        'ST-App-Key' => $appKey,
        'Authorization' => 'Bearer ' . $token->getToken()
    ]),
    new AddHostPlugin(
        $urlFactory->createUri('https://api-integration.servicetitan.io')
    )
];

$crmClient = CrmClient::create(null, $plugins);

$customers = $crmClient->customersGetList($tenantId);

if ($customers) {
    var_dump($customers->getData());
} else {
    var_dump($customers);
}
