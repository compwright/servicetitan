# CompWright\ServiceTitan\TechnicianShiftsApi

All URIs are relative to https://api-integration.servicetitan.io/dispatch/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**technicianShiftsGet()**](TechnicianShiftsApi.md#technicianShiftsGet) | **GET** /tenant/{tenant}/technician-shifts/{id} | Gets a specific technician shift
[**technicianShiftsGetList()**](TechnicianShiftsApi.md#technicianShiftsGetList) | **GET** /tenant/{tenant}/technician-shifts | Gets a list of technician shifts


## `technicianShiftsGet()`

```php
technicianShiftsGet($id, $tenant): \CompWright\ServiceTitan\Model\DispatchV2TechnicianShiftResponse
```

Gets a specific technician shift

Gets a specific technician shift

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


$apiInstance = new CompWright\ServiceTitan\Api\TechnicianShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->technicianShiftsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnicianShiftsApi->technicianShiftsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2TechnicianShiftResponse**](../Model/DispatchV2TechnicianShiftResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `technicianShiftsGetList()`

```php
technicianShiftsGetList($tenant, $starts_on_or_after, $ends_on_or_before, $shift_type, $technician_id, $title_contains, $note_contains, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2TechnicianShiftResponse
```

Gets a list of technician shifts

Gets a list of technician shifts

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


$apiInstance = new CompWright\ServiceTitan\Api\TechnicianShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$starts_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). When the Start of shift should be at or after
$ends_on_or_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). When the End of shift should be at or before
$shift_type = 'shift_type_example'; // OneOfDispatchV2ShiftType | Value to match ShiftType to\\ Values: [Normal, OnCall, TimeOff]
$technician_id = 56; // int | Format - int64. Unique Id of technician shift must apply to
$title_contains = 'title_contains_example'; // string | Text that must appear in the Title
$note_contains = 'note_contains_example'; // string | Text that must appear in the Note
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->technicianShiftsGetList($tenant, $starts_on_or_after, $ends_on_or_before, $shift_type, $technician_id, $title_contains, $note_contains, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnicianShiftsApi->technicianShiftsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). When the Start of shift should be at or after | [optional]
 **ends_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). When the End of shift should be at or before | [optional]
 **shift_type** | **OneOfDispatchV2ShiftType**| Value to match ShiftType to\\ Values: [Normal, OnCall, TimeOff] | [optional]
 **technician_id** | **int**| Format - int64. Unique Id of technician shift must apply to | [optional]
 **title_contains** | **string**| Text that must appear in the Title | [optional]
 **note_contains** | **string**| Text that must appear in the Note | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2TechnicianShiftResponse**](../Model/PaginatedResponseOfDispatchV2TechnicianShiftResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
