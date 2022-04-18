# CompWright\ServiceTitan\WebBookingAttributionsApi

All URIs are relative to https://api-integration.servicetitan.io/marketingads/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webBookingAttributionsCreate()**](WebBookingAttributionsApi.md#webBookingAttributionsCreate) | **POST** /tenant/{tenant}/web-booking-attributions | Attributes a web booking to a web session.


## `webBookingAttributionsCreate()`

```php
webBookingAttributionsCreate($tenant, $marketing_ads_v2_create_web_booking_attribution_request)
```

Attributes a web booking to a web session.

Attributes a web booking to a web session.

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


$apiInstance = new CompWright\ServiceTitan\Api\WebBookingAttributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$marketing_ads_v2_create_web_booking_attribution_request = {"bookingId":0,"webSessionData":{"landingPageUrl":"string","referrerUrl":"string","gclid":"string","fbclid":"string","msclkid":"string","utmSource":"string","utmMedium":"string","utmCampaign":"string","utmAdgroup":"string","utmTerm":"string","utmContent":"string","googleAnalyticsClientId":"string"}}; // \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest

try {
    $apiInstance->webBookingAttributionsCreate($tenant, $marketing_ads_v2_create_web_booking_attribution_request);
} catch (Exception $e) {
    echo 'Exception when calling WebBookingAttributionsApi->webBookingAttributionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **marketing_ads_v2_create_web_booking_attribution_request** | [**\CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest**](../Model/MarketingAdsV2CreateWebBookingAttributionRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
