# CompWright\ServiceTitan\GpsApi

All URIs are relative to https://api-integration.servicetitan.io/dispatch/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**gpsCreate()**](GpsApi.md#gpsCreate) | **POST** /tenant/{tenant}/gps-provider/{gps_provider}/gps-pings | Creates new gps ping.


## `gpsCreate()`

```php
gpsCreate($gps_provider, $tenant, $dispatch_v2_gps_ping_create_request): \CompWright\ServiceTitan\Model\DispatchV2GpsPingResponse[]
```

Creates new gps ping.

Creates new gps ping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('servicetitanapplicationkey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('servicetitanapplicationkey', 'Bearer');


$apiInstance = new CompWright\ServiceTitan\Api\GpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gps_provider = 'gps_provider_example'; // string
$tenant = 56; // int | Tenant ID
$dispatch_v2_gps_ping_create_request = [{"unitId":"string","unitName":"string","eventTime":"string","latitude":0,"longitude":0,"speed":0,"street":"string","city":"string","region":"string","postalCode":"string","message":"string","externalId":"string","isNew":true,"statusMessage":"string"}]; // \CompWright\ServiceTitan\Model\DispatchV2GpsPingCreateRequest[]

try {
    $result = $apiInstance->gpsCreate($gps_provider, $tenant, $dispatch_v2_gps_ping_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GpsApi->gpsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gps_provider** | **string**|  |
 **tenant** | **int**| Tenant ID |
 **dispatch_v2_gps_ping_create_request** | [**\CompWright\ServiceTitan\Model\DispatchV2GpsPingCreateRequest[]**](../Model/DispatchV2GpsPingCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2GpsPingResponse[]**](../Model/DispatchV2GpsPingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
