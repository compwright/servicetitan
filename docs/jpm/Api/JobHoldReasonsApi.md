# CompWright\ServiceTitan\JobHoldReasonsApi

All URIs are relative to https://api-integration.servicetitan.io/jpm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobHoldReasonsGet()**](JobHoldReasonsApi.md#jobHoldReasonsGet) | **GET** /tenant/{tenant}/job-hold-reasons | Gets a list of job hold reasons


## `jobHoldReasonsGet()`

```php
jobHoldReasonsGet($tenant, $page, $page_size, $include_total, $active): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobHoldReasonResponse
```

Gets a list of job hold reasons

Gets a list of job hold reasons

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


$apiInstance = new CompWright\ServiceTitan\Api\JobHoldReasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. Result page to load
$page_size = 56; // int | Format - int32. Number of results per page
$include_total = True; // bool | Include total count in the response
$active = 'active_example'; // OneOfActiveQueryFilter | Filter by status.  Acceptable values are true, false, any.\\ Values: [True, Any, False]

try {
    $result = $apiInstance->jobHoldReasonsGet($tenant, $page, $page_size, $include_total, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobHoldReasonsApi->jobHoldReasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. Result page to load | [optional]
 **page_size** | **int**| Format - int32. Number of results per page | [optional]
 **include_total** | **bool**| Include total count in the response | [optional]
 **active** | **OneOfActiveQueryFilter**| Filter by status.  Acceptable values are true, false, any.\\ Values: [True, Any, False] | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobHoldReasonResponse**](../Model/PaginatedResponseOfCrmV2JobHoldReasonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
