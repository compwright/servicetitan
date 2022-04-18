# CompWright\ServiceTitan\CampaignCostsApi

All URIs are relative to https://api-integration.servicetitan.io/marketing/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCostsCreate()**](CampaignCostsApi.md#campaignCostsCreate) | **POST** /tenant/{tenant}/costs | Creates new campaign cost
[**campaignCostsGet()**](CampaignCostsApi.md#campaignCostsGet) | **GET** /tenant/{tenant}/costs/{id} | Gets campaign cost specified by ID
[**campaignCostsUpdate()**](CampaignCostsApi.md#campaignCostsUpdate) | **PATCH** /tenant/{tenant}/costs/{id} | Updates specified campaign cost in \&quot;patch\&quot; mode


## `campaignCostsCreate()`

```php
campaignCostsCreate($tenant, $marketing_v2_create_campaign_cost_request): \CompWright\ServiceTitan\Model\MarketingV2CampaignCostResponse
```

Creates new campaign cost

Creates new campaign cost

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$marketing_v2_create_campaign_cost_request = {"campaignId":0,"year":0,"month":0,"dailyCost":0}; // \CompWright\ServiceTitan\Model\MarketingV2CreateCampaignCostRequest

try {
    $result = $apiInstance->campaignCostsCreate($tenant, $marketing_v2_create_campaign_cost_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCostsApi->campaignCostsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **marketing_v2_create_campaign_cost_request** | [**\CompWright\ServiceTitan\Model\MarketingV2CreateCampaignCostRequest**](../Model/MarketingV2CreateCampaignCostRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\MarketingV2CampaignCostResponse**](../Model/MarketingV2CampaignCostResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignCostsGet()`

```php
campaignCostsGet($id, $tenant): \CompWright\ServiceTitan\Model\MarketingV2CampaignCostResponse
```

Gets campaign cost specified by ID

Gets campaign cost specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->campaignCostsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCostsApi->campaignCostsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\MarketingV2CampaignCostResponse**](../Model/MarketingV2CampaignCostResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignCostsUpdate()`

```php
campaignCostsUpdate($id, $tenant, $marketing_v2_update_campaign_cost_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Updates specified campaign cost in \"patch\" mode

Updates specified campaign cost in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$marketing_v2_update_campaign_cost_request = {"dailyCost":0}; // \CompWright\ServiceTitan\Model\MarketingV2UpdateCampaignCostRequest

try {
    $result = $apiInstance->campaignCostsUpdate($id, $tenant, $marketing_v2_update_campaign_cost_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCostsApi->campaignCostsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **marketing_v2_update_campaign_cost_request** | [**\CompWright\ServiceTitan\Model\MarketingV2UpdateCampaignCostRequest**](../Model/MarketingV2UpdateCampaignCostRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\ModificationResponse**](../Model/ModificationResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
