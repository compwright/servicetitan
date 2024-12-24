# CompWright\ServiceTitan\NonJobAppointmentsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nonJobAppointmentsCreate()**](NonJobAppointmentsApi.md#nonJobAppointmentsCreate) | **POST** /dispatch/v2/tenant/{tenant}/non-job-appointments | Create a new non-job appointment |
| [**nonJobAppointmentsGet()**](NonJobAppointmentsApi.md#nonJobAppointmentsGet) | **GET** /dispatch/v2/tenant/{tenant}/non-job-appointments/{id} | NonJobAppointments_Get |
| [**nonJobAppointmentsGetList()**](NonJobAppointmentsApi.md#nonJobAppointmentsGetList) | **GET** /dispatch/v2/tenant/{tenant}/non-job-appointments | Gets a list of non-job appointments |
| [**nonJobAppointmentsUpdate()**](NonJobAppointmentsApi.md#nonJobAppointmentsUpdate) | **PUT** /dispatch/v2/tenant/{tenant}/non-job-appointments/{id} | Update an existed non-job appointment |


## `nonJobAppointmentsCreate()`

```php
nonJobAppointmentsCreate($tenant, $dispatch_v2_non_job_appointment_create_request): \CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse
```

Create a new non-job appointment

Create a new non-job appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\NonJobAppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$dispatch_v2_non_job_appointment_create_request = {"technicianId":0,"start":"string","duration":"string","name":"string","timesheetCodeId":0,"summary":"string","clearDispatchBoard":true,"clearTechnicianView":true,"removeTechnicianFromCapacityPlanning":true}; // \CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentCreateRequest

try {
    $result = $apiInstance->nonJobAppointmentsCreate($tenant, $dispatch_v2_non_job_appointment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonJobAppointmentsApi->nonJobAppointmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **dispatch_v2_non_job_appointment_create_request** | [**\CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentCreateRequest**](../Model/DispatchV2NonJobAppointmentCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse**](../Model/DispatchV2GetNonJobAppointmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nonJobAppointmentsGet()`

```php
nonJobAppointmentsGet($id, $tenant): \CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse
```

NonJobAppointments_Get

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


$apiInstance = new CompWright\ServiceTitan\Api\NonJobAppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->nonJobAppointmentsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonJobAppointmentsApi->nonJobAppointmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse**](../Model/DispatchV2GetNonJobAppointmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nonJobAppointmentsGetList()`

```php
nonJobAppointmentsGetList($tenant, $technician_id, $starts_on_or_after, $starts_on_or_before, $timesheet_code_id, $active_only, $created_on_or_after, $created_before, $ids, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2NonJobAppointmentResponse
```

Gets a list of non-job appointments

Gets a list of non-job appointments

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


$apiInstance = new CompWright\ServiceTitan\Api\NonJobAppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$technician_id = 56; // int | Format - int64. Unique id of the technician this non-job appointment applies to
$starts_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). When the Start of non-job appointment should be at or after
$starts_on_or_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). When the Start of non-job appointment should be at or before
$timesheet_code_id = 56; // int | Format - int64. Unique Id of timesheet code must apply to
$active_only = True; // bool | Whether the result should contains only active non-job appointments
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->nonJobAppointmentsGetList($tenant, $technician_id, $starts_on_or_after, $starts_on_or_before, $timesheet_code_id, $active_only, $created_on_or_after, $created_before, $ids, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonJobAppointmentsApi->nonJobAppointmentsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **technician_id** | **int**| Format - int64. Unique id of the technician this non-job appointment applies to | [optional] |
| **starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). When the Start of non-job appointment should be at or after | [optional] |
| **starts_on_or_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). When the Start of non-job appointment should be at or before | [optional] |
| **timesheet_code_id** | **int**| Format - int64. Unique Id of timesheet code must apply to | [optional] |
| **active_only** | **bool**| Whether the result should contains only active non-job appointments | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2NonJobAppointmentResponse**](../Model/PaginatedResponseOfDispatchV2NonJobAppointmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nonJobAppointmentsUpdate()`

```php
nonJobAppointmentsUpdate($id, $tenant, $dispatch_v2_non_job_appointment_update_request): \CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse
```

Update an existed non-job appointment

Update an existed non-job appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\NonJobAppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$dispatch_v2_non_job_appointment_update_request = {"technicianId":0,"start":"string","duration":"string","name":"string","timesheetCodeId":0,"summary":"string","clearDispatchBoard":true,"clearTechnicianView":true,"removeTechnicianFromCapacityPlanning":true}; // \CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentUpdateRequest

try {
    $result = $apiInstance->nonJobAppointmentsUpdate($id, $tenant, $dispatch_v2_non_job_appointment_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonJobAppointmentsApi->nonJobAppointmentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **dispatch_v2_non_job_appointment_update_request** | [**\CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentUpdateRequest**](../Model/DispatchV2NonJobAppointmentUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\DispatchV2GetNonJobAppointmentResponse**](../Model/DispatchV2GetNonJobAppointmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
