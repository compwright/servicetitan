# CompWright\ServiceTitan\PayrollsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**payrollsGetEmployeePayrolls()**](PayrollsApi.md#payrollsGetEmployeePayrolls) | **GET** /payroll/v2/tenant/{tenant}/employees/{employee}/payrolls | Gets a list of employee payrolls |
| [**payrollsGetList()**](PayrollsApi.md#payrollsGetList) | **GET** /payroll/v2/tenant/{tenant}/payrolls | Gets a list of payrolls |
| [**payrollsGetTechnicianPayrolls()**](PayrollsApi.md#payrollsGetTechnicianPayrolls) | **GET** /payroll/v2/tenant/{tenant}/technicians/{technician}/payrolls | Gets a list of technician payrolls |


## `payrollsGetEmployeePayrolls()`

```php
payrollsGetEmployeePayrolls($employee, $tenant, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse
```

Gets a list of employee payrolls

Gets a list of employee payrolls

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 56; // int | Format - int64. The employee ID
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$started_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC)
$ended_on_or_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC)

try {
    $result = $apiInstance->payrollsGetEmployeePayrolls($employee, $tenant, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollsGetEmployeePayrolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **int**| Format - int64. The employee ID | |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **started_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC) | [optional] |
| **ended_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse**](../Model/PaginatedResponseOfPayrollV2PayrollsPayrollResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollsGetList()`

```php
payrollsGetList($tenant, $employee_type, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse
```

Gets a list of payrolls

Gets a list of payrolls

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$employee_type = 'employee_type_example'; // string | The type of employee\\ Values: [Technician, Employee]
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$started_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC)
$ended_on_or_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC)

try {
    $result = $apiInstance->payrollsGetList($tenant, $employee_type, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **employee_type** | **string**| The type of employee\\ Values: [Technician, Employee] | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **started_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC) | [optional] |
| **ended_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse**](../Model/PaginatedResponseOfPayrollV2PayrollsPayrollResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollsGetTechnicianPayrolls()`

```php
payrollsGetTechnicianPayrolls($technician, $tenant, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse
```

Gets a list of technician payrolls

Gets a list of technician payrolls

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$technician = 56; // int | Format - int64. The technician ID
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$started_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC)
$ended_on_or_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC)

try {
    $result = $apiInstance->payrollsGetTechnicianPayrolls($technician, $tenant, $page, $page_size, $include_total, $started_on_or_after, $ended_on_or_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollsGetTechnicianPayrolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **technician** | **int**| Format - int64. The technician ID | |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **started_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC) | [optional] |
| **ended_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse**](../Model/PaginatedResponseOfPayrollV2PayrollsPayrollResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
