# CompWright\ServiceTitan\GrossPayItemsApi

All URIs are relative to https://api-integration.servicetitan.io/payroll/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**grossPayItemsCreate()**](GrossPayItemsApi.md#grossPayItemsCreate) | **POST** /tenant/{tenant}/gross-pay-items | Creates new gross pay item
[**grossPayItemsDelete()**](GrossPayItemsApi.md#grossPayItemsDelete) | **DELETE** /tenant/{tenant}/gross-pay-items/{id} | Delete specified gross pay item
[**grossPayItemsGetList()**](GrossPayItemsApi.md#grossPayItemsGetList) | **GET** /tenant/{tenant}/gross-pay-items | Gets a list of gross pay items
[**grossPayItemsUpdate()**](GrossPayItemsApi.md#grossPayItemsUpdate) | **PUT** /tenant/{tenant}/gross-pay-items/{id} | Update specified gross pay item


## `grossPayItemsCreate()`

```php
grossPayItemsCreate($tenant, $payroll_v2_gross_pay_items_gross_pay_item_create_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Creates new gross pay item

Creates new gross pay item

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


$apiInstance = new CompWright\ServiceTitan\Api\GrossPayItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$payroll_v2_gross_pay_items_gross_pay_item_create_request = {"payrollId":0,"amount":0,"activityCodeId":0,"date":"string","invoiceId":0}; // \CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemCreateRequest | The gross pay item model to create

try {
    $result = $apiInstance->grossPayItemsCreate($tenant, $payroll_v2_gross_pay_items_gross_pay_item_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrossPayItemsApi->grossPayItemsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **payroll_v2_gross_pay_items_gross_pay_item_create_request** | [**\CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemCreateRequest**](../Model/PayrollV2GrossPayItemsGrossPayItemCreateRequest.md)| The gross pay item model to create | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\ModificationResponse**](../Model/ModificationResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grossPayItemsDelete()`

```php
grossPayItemsDelete($id, $tenant)
```

Delete specified gross pay item

Delete specified gross pay item

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


$apiInstance = new CompWright\ServiceTitan\Api\GrossPayItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The gross pay item ID
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->grossPayItemsDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling GrossPayItemsApi->grossPayItemsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. The gross pay item ID |
 **tenant** | **int**| Tenant ID |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grossPayItemsGetList()`

```php
grossPayItemsGetList($tenant, $page, $page_size, $include_total, $employee_type, $employee_id, $payroll_ids, $date_on_or_after, $date_on_or_before): \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2GrossPayItemsGrossPayItemResponse
```

Gets a list of gross pay items

Gets a list of gross pay items

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


$apiInstance = new CompWright\ServiceTitan\Api\GrossPayItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$employee_type = 'employee_type_example'; // OneOfPayrollV2EmployeeType | The type of employee\\ Values: [Technician, Employee]
$employee_id = 56; // int | Format - int64. The Employee ID
$payroll_ids = 'payroll_ids_example'; // string | The payroll ID
$date_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having date after certain date/time (in UTC)
$date_on_or_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items having date before certain date/time (in UTC)

try {
    $result = $apiInstance->grossPayItemsGetList($tenant, $page, $page_size, $include_total, $employee_type, $employee_id, $payroll_ids, $date_on_or_after, $date_on_or_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrossPayItemsApi->grossPayItemsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **employee_type** | **OneOfPayrollV2EmployeeType**| The type of employee\\ Values: [Technician, Employee] | [optional]
 **employee_id** | **int**| Format - int64. The Employee ID | [optional]
 **payroll_ids** | **string**| The payroll ID | [optional]
 **date_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having date after certain date/time (in UTC) | [optional]
 **date_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items having date before certain date/time (in UTC) | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2GrossPayItemsGrossPayItemResponse**](../Model/PaginatedResponseOfPayrollV2GrossPayItemsGrossPayItemResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grossPayItemsUpdate()`

```php
grossPayItemsUpdate($id, $tenant, $payroll_v2_gross_pay_items_gross_pay_item_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Update specified gross pay item

Update specified gross pay item

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


$apiInstance = new CompWright\ServiceTitan\Api\GrossPayItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The gross pay item ID
$tenant = 56; // int | Tenant ID
$payroll_v2_gross_pay_items_gross_pay_item_update_request = {"payrollId":0,"amount":0,"activityCodeId":0,"date":"string","invoiceId":0}; // \CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemUpdateRequest | The gross pay item model to update

try {
    $result = $apiInstance->grossPayItemsUpdate($id, $tenant, $payroll_v2_gross_pay_items_gross_pay_item_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrossPayItemsApi->grossPayItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. The gross pay item ID |
 **tenant** | **int**| Tenant ID |
 **payroll_v2_gross_pay_items_gross_pay_item_update_request** | [**\CompWright\ServiceTitan\Model\PayrollV2GrossPayItemsGrossPayItemUpdateRequest**](../Model/PayrollV2GrossPayItemsGrossPayItemUpdateRequest.md)| The gross pay item model to update | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\ModificationResponse**](../Model/ModificationResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
