# CompWright\ServiceTitan\BulkTagsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkTagsAddTags()**](BulkTagsApi.md#bulkTagsAddTags) | **PUT** /crm/v2/tenant/{tenant}/tags | Add multiple tags to more than 1 customer |
| [**bulkTagsRemoveTags()**](BulkTagsApi.md#bulkTagsRemoveTags) | **DELETE** /crm/v2/tenant/{tenant}/tags | Remove multiple tags to more than 1 customer |


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


// Configure Bearer authorization: bearerToken
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: appKey
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_add_bulk_tags_request** | [**\CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest**](../Model/CrmV2AddBulkTagsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

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


// Configure Bearer authorization: bearerToken
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: appKey
$config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKey('ST-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CompWright\ServiceTitan\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ST-App-Key', 'Bearer');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_remove_bulk_tags_request** | [**\CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest**](../Model/CrmV2RemoveBulkTagsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
