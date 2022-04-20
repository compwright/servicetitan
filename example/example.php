<?php

use Compwright\OAuth2_Servicetitan\SandboxProvider;
use CompWright\ServiceTitan\Authentication\AppKeyAuthentication;
use CompWright\ServiceTitan\Authentication\BearerTokenAuthentication;
use CompWright\ServiceTitan\CrmClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
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
    new AddHostPlugin(
        $urlFactory->createUri('https://api-integration.servicetitan.io'),
        ['replace' => true]
    ),
    new AuthenticationRegistry([
        new AppKeyAuthentication($appKey),
        new BearerTokenAuthentication($token->getToken())
    ]),
];

$crmClient = CrmClient::create(null, $plugins);

$response = $crmClient->customersGetList($tenantId, [], CrmClient::FETCH_RESPONSE);
$data = json_decode($response->getBody()->getContents());

print_r($data);
