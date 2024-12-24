# CompWright\ServiceTitan\PayrollAdjustmentsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**payrollAdjustmentsCreate()**](PayrollAdjustmentsApi.md#payrollAdjustmentsCreate) | **POST** /payroll/v2/tenant/{tenant}/payroll-adjustments | Creates new payroll adjustment |
| [**payrollAdjustmentsGet()**](PayrollAdjustmentsApi.md#payrollAdjustmentsGet) | **GET** /payroll/v2/tenant/{tenant}/payroll-adjustments/{id} | Gets payroll adjustment specified by ID |
| [**payrollAdjustmentsGetList()**](PayrollAdjustmentsApi.md#payrollAdjustmentsGetList) | **GET** /payroll/v2/tenant/{tenant}/payroll-adjustments | Gets a list of payroll adjustments |


## `payrollAdjustmentsCreate()`

```php
payrollAdjustmentsCreate($tenant, $payroll_v2_payroll_adjustments_payroll_adjustment_create_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Creates new payroll adjustment

Creates new payroll adjustment

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$payroll_v2_payroll_adjustments_payroll_adjustment_create_request = {"employeeType":{},"employeeId":0,"postedOn":"string","amount":0,"memo":"string","activityCodeId":0,"hours":0,"rate":0}; // \CompWright\ServiceTitan\Model\PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest | The payroll adjustment model to create

try {
    $result = $apiInstance->payrollAdjustmentsCreate($tenant, $payroll_v2_payroll_adjustments_payroll_adjustment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAdjustmentsApi->payrollAdjustmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **payroll_v2_payroll_adjustments_payroll_adjustment_create_request** | [**\CompWright\ServiceTitan\Model\PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest**](../Model/PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest.md)| The payroll adjustment model to create | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\ModificationResponse**](../Model/ModificationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollAdjustmentsGet()`

```php
payrollAdjustmentsGet($id, $tenant, $employee_type): \CompWright\ServiceTitan\Model\PayrollV2PayrollAdjustmentsPayrollAdjustmentResponse
```

Gets payroll adjustment specified by ID

Gets payroll adjustment specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The ID of payroll adjustment
$tenant = 56; // int | Tenant ID
$employee_type = new \CompWright\ServiceTitan\Model\\CompWright\ServiceTitan\Model\PayrollV2EmployeeType(); // \CompWright\ServiceTitan\Model\PayrollV2EmployeeType | The employee type\\ Values: [Technician, Employee]

try {
    $result = $apiInstance->payrollAdjustmentsGet($id, $tenant, $employee_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAdjustmentsApi->payrollAdjustmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. The ID of payroll adjustment | |
| **tenant** | **int**| Tenant ID | |
| **employee_type** | [**\CompWright\ServiceTitan\Model\PayrollV2EmployeeType**](../Model/.md)| The employee type\\ Values: [Technician, Employee] | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PayrollV2PayrollAdjustmentsPayrollAdjustmentResponse**](../Model/PayrollV2PayrollAdjustmentsPayrollAdjustmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollAdjustmentsGetList()`

```php
payrollAdjustmentsGetList($tenant, $page, $page_size, $include_total, $employee_ids, $posted_on_or_after, $posted_on_or_before): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollAdjustmentsPayrollAdjustmentResponse
```

Gets a list of payroll adjustments

Gets a list of payroll adjustments

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


$apiInstance = new CompWright\ServiceTitan\Api\PayrollAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$employee_ids = 'employee_ids_example'; // string | The comma separated list of employee IDs
$posted_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or after certain date/time (in UTC)
$posted_on_or_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or before certain date/time (in UTC)

try {
    $result = $apiInstance->payrollAdjustmentsGetList($tenant, $page, $page_size, $include_total, $employee_ids, $posted_on_or_after, $posted_on_or_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollAdjustmentsApi->payrollAdjustmentsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **employee_ids** | **string**| The comma separated list of employee IDs | [optional] |
| **posted_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or after certain date/time (in UTC) | [optional] |
| **posted_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or before certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollAdjustmentsPayrollAdjustmentResponse**](../Model/PaginatedResponseOfPayrollV2PayrollAdjustmentsPayrollAdjustmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
