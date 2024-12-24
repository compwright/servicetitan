# CompWright\ServiceTitan\CallReasonsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callReasonsGet()**](CallReasonsApi.md#callReasonsGet) | **GET** /jbce/v2/tenant/{tenant}/call-reasons | Gets a list of call reasons |


## `callReasonsGet()`

```php
callReasonsGet($tenant, $page, $page_size, $include_total, $active): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse
```

Gets a list of call reasons

Gets a list of call reasons

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


$apiInstance = new CompWright\ServiceTitan\Api\CallReasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$active = 'active_example'; // string | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]

try {
    $result = $apiInstance->callReasonsGet($tenant, $page, $page_size, $include_total, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallReasonsApi->callReasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **active** | **string**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse**](../Model/PaginatedResponseOfCrmV2CallReasonResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
