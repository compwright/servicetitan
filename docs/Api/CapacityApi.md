# CompWright\ServiceTitan\CapacityApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**capacityGetList()**](CapacityApi.md#capacityGetList) | **POST** /dispatch/v2/tenant/{tenant}/capacity | Capacity_GetList |


## `capacityGetList()`

```php
capacityGetList($tenant, $dispatch_v2_capacity_query_filter): \CompWright\ServiceTitan\Model\DispatchV2CapacityResponse
```

Capacity_GetList

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


$apiInstance = new CompWright\ServiceTitan\Api\CapacityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$dispatch_v2_capacity_query_filter = {"startsOnOrAfter":"string","endsOnOrBefore":"string","businessUnitIds":[0],"jobTypeId":0,"skillBasedAvailability":true}; // \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter

try {
    $result = $apiInstance->capacityGetList($tenant, $dispatch_v2_capacity_query_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacityApi->capacityGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **dispatch_v2_capacity_query_filter** | [**\CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter**](../Model/DispatchV2CapacityQueryFilter.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2CapacityResponse**](../Model/DispatchV2CapacityResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
