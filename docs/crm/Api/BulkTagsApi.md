# CompWright\ServiceTitan\BulkTagsApi

All URIs are relative to https://api-integration.servicetitan.io/crm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTagsAddTags()**](BulkTagsApi.md#bulkTagsAddTags) | **PUT** /tenant/{tenant}/tags | Add multiple tags to more than 1 customer
[**bulkTagsRemoveTags()**](BulkTagsApi.md#bulkTagsRemoveTags) | **DELETE** /tenant/{tenant}/tags | Remove multiple tags to more than 1 customer


## `bulkTagsAddTags()`

```php
bulkTagsAddTags($tenant, $crm_v2_add_bulk_tags_request)
```

Add multiple tags to more than 1 customer

Add multiple tags to more than 1 customer

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


$apiInstance = new CompWright\ServiceTitan\Api\BulkTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_add_bulk_tags_request = {"customerIds":[0],"tagTypeIds":[0]}; // \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest

try {
    $apiInstance->bulkTagsAddTags($tenant, $crm_v2_add_bulk_tags_request);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagsApi->bulkTagsAddTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_add_bulk_tags_request** | [**\CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest**](../Model/CrmV2AddBulkTagsRequest.md)|  | [optional]

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

## `bulkTagsRemoveTags()`

```php
bulkTagsRemoveTags($tenant, $crm_v2_remove_bulk_tags_request)
```

Remove multiple tags to more than 1 customer

Remove multiple tags to more than 1 customer

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


$apiInstance = new CompWright\ServiceTitan\Api\BulkTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_remove_bulk_tags_request = {"customerIds":[0],"tagTypeIds":[0]}; // \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest

try {
    $apiInstance->bulkTagsRemoveTags($tenant, $crm_v2_remove_bulk_tags_request);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagsApi->bulkTagsRemoveTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_remove_bulk_tags_request** | [**\CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest**](../Model/CrmV2RemoveBulkTagsRequest.md)|  | [optional]

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
