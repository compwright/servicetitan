# CompWright\ServiceTitan\CampaignsApi

All URIs are relative to https://api-integration.servicetitan.io/marketing/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsCreate()**](CampaignsApi.md#campaignsCreate) | **POST** /tenant/{tenant}/campaigns | Creates new campaign
[**campaignsGet()**](CampaignsApi.md#campaignsGet) | **GET** /tenant/{tenant}/campaigns/{id} | Gets campaign specified by ID
[**campaignsGetCosts()**](CampaignsApi.md#campaignsGetCosts) | **GET** /tenant/{tenant}/campaigns/{id}/costs | Gets a paginated list of campaign costs
[**campaignsGetList()**](CampaignsApi.md#campaignsGetList) | **GET** /tenant/{tenant}/campaigns | Gets a paginated list of campaigns
[**campaignsUpdate()**](CampaignsApi.md#campaignsUpdate) | **PATCH** /tenant/{tenant}/campaigns/{id} | Updates specified campaign in \&quot;patch\&quot; mode


## `campaignsCreate()`

```php
campaignsCreate($tenant, $marketing_v2_campaign_upsert_request): \CompWright\ServiceTitan\Model\MarketingV2CampaignResponse
```

Creates new campaign

Creates new campaign

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$marketing_v2_campaign_upsert_request = {"name":"string","businessUnitId":0,"dnis":"string","categoryId":0,"active":true}; // \CompWright\ServiceTitan\Model\MarketingV2CampaignUpsertRequest

try {
    $result = $apiInstance->campaignsCreate($tenant, $marketing_v2_campaign_upsert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **marketing_v2_campaign_upsert_request** | [**\CompWright\ServiceTitan\Model\MarketingV2CampaignUpsertRequest**](../Model/MarketingV2CampaignUpsertRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\MarketingV2CampaignResponse**](../Model/MarketingV2CampaignResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsGet()`

```php
campaignsGet($id, $tenant): \CompWright\ServiceTitan\Model\MarketingV2CampaignResponse
```

Gets campaign specified by ID

Gets campaign specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->campaignsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\MarketingV2CampaignResponse**](../Model/MarketingV2CampaignResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsGetCosts()`

```php
campaignsGetCosts($id, $tenant, $page, $page_size, $include_total, $year, $month): \CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignCostResponse
```

Gets a paginated list of campaign costs

Gets a paginated list of campaign costs

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$year = 56; // int | Format - int32.
$month = 56; // int | Format - int32.

try {
    $result = $apiInstance->campaignsGetCosts($id, $tenant, $page, $page_size, $include_total, $year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGetCosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **year** | **int**| Format - int32. | [optional]
 **month** | **int**| Format - int32. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignCostResponse**](../Model/PaginatedResponseOfMarketingV2CampaignCostResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsGetList()`

```php
campaignsGetList($tenant, $page, $page_size, $include_total, $modified_before, $modified_on_or_after, $active, $ids, $name): \CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignResponse
```

Gets a paginated list of campaigns

Gets a paginated list of campaigns

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$name = 'name_example'; // string | Filters records by name (case-insensitive \"contains\" operation)

try {
    $result = $apiInstance->campaignsGetList($tenant, $page, $page_size, $include_total, $modified_before, $modified_on_or_after, $active, $ids, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **name** | **string**| Filters records by name (case-insensitive \&quot;contains\&quot; operation) | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignResponse**](../Model/PaginatedResponseOfMarketingV2CampaignResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsUpdate()`

```php
campaignsUpdate($id, $tenant, $marketing_v2_campaign_upsert_request): \CompWright\ServiceTitan\Model\MarketingV2CampaignResponse
```

Updates specified campaign in \"patch\" mode

Updates specified campaign in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$marketing_v2_campaign_upsert_request = {"name":"string","businessUnitId":0,"dnis":"string","categoryId":0,"active":true}; // \CompWright\ServiceTitan\Model\MarketingV2CampaignUpsertRequest

try {
    $result = $apiInstance->campaignsUpdate($id, $tenant, $marketing_v2_campaign_upsert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **marketing_v2_campaign_upsert_request** | [**\CompWright\ServiceTitan\Model\MarketingV2CampaignUpsertRequest**](../Model/MarketingV2CampaignUpsertRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\MarketingV2CampaignResponse**](../Model/MarketingV2CampaignResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
