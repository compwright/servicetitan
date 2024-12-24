# CompWright\ServiceTitan\TimesheetCodesApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**timesheetCodesGet()**](TimesheetCodesApi.md#timesheetCodesGet) | **GET** /payroll/v2/tenant/{tenant}/timesheet-codes/{id} | Gets timesheet code specified by ID |
| [**timesheetCodesGetList()**](TimesheetCodesApi.md#timesheetCodesGetList) | **GET** /payroll/v2/tenant/{tenant}/timesheet-codes | Gets a list of timesheet codes |


## `timesheetCodesGet()`

```php
timesheetCodesGet($id, $tenant): \CompWright\ServiceTitan\Model\PayrollV2TimesheetCodesTimesheetCodeResponse
```

Gets timesheet code specified by ID

Gets timesheet code specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\TimesheetCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The timesheet code ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->timesheetCodesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetCodesApi->timesheetCodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. The timesheet code ID | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\PayrollV2TimesheetCodesTimesheetCodeResponse**](../Model/PayrollV2TimesheetCodesTimesheetCodeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetCodesGetList()`

```php
timesheetCodesGetList($tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2TimesheetCodesTimesheetCodeResponse
```

Gets a list of timesheet codes

Gets a list of timesheet codes

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


$apiInstance = new CompWright\ServiceTitan\Api\TimesheetCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->timesheetCodesGetList($tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetCodesApi->timesheetCodesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2TimesheetCodesTimesheetCodeResponse**](../Model/PaginatedResponseOfPayrollV2TimesheetCodesTimesheetCodeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
