# CompWright\ServiceTitan\JobCancelReasonsApi

All URIs are relative to https://api-integration.servicetitan.io/jpm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobCancelReasonsGetList()**](JobCancelReasonsApi.md#jobCancelReasonsGetList) | **GET** /tenant/{tenant}/job-cancel-reasons | Gets a list of job cancel reasons


## `jobCancelReasonsGetList()`

```php
jobCancelReasonsGetList($tenant, $page, $page_size, $include_total, $active): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse
```

Gets a list of job cancel reasons

Gets a list of job cancel reasons

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


$apiInstance = new CompWright\ServiceTitan\Api\JobCancelReasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False]

try {
    $result = $apiInstance->jobCancelReasonsGetList($tenant, $page, $page_size, $include_total, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobCancelReasonsApi->jobCancelReasonsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse**](../Model/PaginatedResponseOfCrmV2JobCancelReasonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
