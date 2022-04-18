# CompWright\ServiceTitan\AppointmentsApi

All URIs are relative to https://api-integration.servicetitan.io/jpm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentsAdd()**](AppointmentsApi.md#appointmentsAdd) | **POST** /tenant/{tenant}/appointments | Adds a new appointment to an existing job
[**appointmentsDelete()**](AppointmentsApi.md#appointmentsDelete) | **DELETE** /tenant/{tenant}/appointments/{id} | Deletes appointment with specified id.
[**appointmentsGet()**](AppointmentsApi.md#appointmentsGet) | **GET** /tenant/{tenant}/appointments/{id} | Gets appointment specified by ID
[**appointmentsGetList()**](AppointmentsApi.md#appointmentsGetList) | **GET** /tenant/{tenant}/appointments | Gets a list of appointments
[**appointmentsHold()**](AppointmentsApi.md#appointmentsHold) | **PUT** /tenant/{tenant}/appointments/{id}/hold | Puts the appointment on hold
[**appointmentsRemoveHold()**](AppointmentsApi.md#appointmentsRemoveHold) | **DELETE** /tenant/{tenant}/appointments/{id}/hold | Removes hold from the appointment
[**appointmentsReschedule()**](AppointmentsApi.md#appointmentsReschedule) | **PATCH** /tenant/{tenant}/appointments/{id}/reschedule | Reschedule job appointment
[**appointmentsUpdateSpecialInstructions()**](AppointmentsApi.md#appointmentsUpdateSpecialInstructions) | **PUT** /tenant/{tenant}/appointments/{id}/special-instructions | Appointments_UpdateSpecialInstructions


## `appointmentsAdd()`

```php
appointmentsAdd($tenant, $crm_v2_appointment_add_request): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Adds a new appointment to an existing job

Adds a new appointment to an existing job

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_appointment_add_request = {"jobId":0,"start":"string","end":"string","arrivalWindowStart":"string","arrivalWindowEnd":"string","technicianIds":[0],"specialInstructions":"string"}; // \CompWright\ServiceTitan\Model\CrmV2AppointmentAddRequest

try {
    $result = $apiInstance->appointmentsAdd($tenant, $crm_v2_appointment_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_appointment_add_request** | [**\CompWright\ServiceTitan\Model\CrmV2AppointmentAddRequest**](../Model/CrmV2AppointmentAddRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2AppointmentResponse**](../Model/CrmV2AppointmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsDelete()`

```php
appointmentsDelete($id, $tenant)
```

Deletes appointment with specified id.

Deletes appointment with specified id.

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->appointmentsDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
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

## `appointmentsGet()`

```php
appointmentsGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Gets appointment specified by ID

Gets appointment specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->appointmentsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2AppointmentResponse**](../Model/CrmV2AppointmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsGetList()`

```php
appointmentsGetList($tenant, $ids, $job_id, $project_id, $number, $status, $starts_on_or_after, $starts_before, $technician_id, $modified_before, $modified_on_or_after, $created_on_or_after, $created_before, $page, $page_size, $include_total, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentResponse
```

Gets a list of appointments

Gets a list of appointments

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$job_id = 56; // int | Format - int64. Return all appointments for this job
$project_id = 56; // int | Format - int64. Return all appointments for jobs that are part of this project
$number = 'number_example'; // string | Return all appointments with this appointment number
$status = 'status_example'; // OneOfCrmV2AppointmentStatus | Return items with specified status AppointmentStatus\\ Values: [Scheduled, Dispatched, Working, Hold, Done, Canceled]
$starts_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments that start on or after the specified date/time (in UTC)
$starts_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments that start before the specified date/time (in UTC)
$technician_id = 56; // int | Format - int64. Return appointments this technician is assigned to
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments modified before a certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments modified on or after a certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments created on or after a certain date/time (in UTC)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return appointments created before a certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.

try {
    $result = $apiInstance->appointmentsGetList($tenant, $ids, $job_id, $project_id, $number, $status, $starts_on_or_after, $starts_before, $technician_id, $modified_before, $modified_on_or_after, $created_on_or_after, $created_before, $page, $page_size, $include_total, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **job_id** | **int**| Format - int64. Return all appointments for this job | [optional]
 **project_id** | **int**| Format - int64. Return all appointments for jobs that are part of this project | [optional]
 **number** | **string**| Return all appointments with this appointment number | [optional]
 **status** | **OneOfCrmV2AppointmentStatus**| Return items with specified status AppointmentStatus\\ Values: [Scheduled, Dispatched, Working, Hold, Done, Canceled] | [optional]
 **starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments that start on or after the specified date/time (in UTC) | [optional]
 **starts_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments that start before the specified date/time (in UTC) | [optional]
 **technician_id** | **int**| Format - int64. Return appointments this technician is assigned to | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments modified before a certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments modified on or after a certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments created on or after a certain date/time (in UTC) | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return appointments created before a certain date/time (in UTC) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentResponse**](../Model/PaginatedResponseOfCrmV2AppointmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsHold()`

```php
appointmentsHold($id, $tenant, $crm_v2_hold_appointment_request)
```

Puts the appointment on hold

Puts the appointment on hold

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_hold_appointment_request = {"reasonId":0,"memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2HoldAppointmentRequest

try {
    $apiInstance->appointmentsHold($id, $tenant, $crm_v2_hold_appointment_request);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_hold_appointment_request** | [**\CompWright\ServiceTitan\Model\CrmV2HoldAppointmentRequest**](../Model/CrmV2HoldAppointmentRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsRemoveHold()`

```php
appointmentsRemoveHold($id, $tenant)
```

Removes hold from the appointment

Removes hold from the appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->appointmentsRemoveHold($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsRemoveHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
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

## `appointmentsReschedule()`

```php
appointmentsReschedule($id, $tenant, $crm_v2_appointment_reschedule_request): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Reschedule job appointment

Reschedule job appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_appointment_reschedule_request = {"start":"string","end":"string","arrivalWindowStart":"string","arrivalWindowEnd":"string"}; // \CompWright\ServiceTitan\Model\CrmV2AppointmentRescheduleRequest

try {
    $result = $apiInstance->appointmentsReschedule($id, $tenant, $crm_v2_appointment_reschedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsReschedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_appointment_reschedule_request** | [**\CompWright\ServiceTitan\Model\CrmV2AppointmentRescheduleRequest**](../Model/CrmV2AppointmentRescheduleRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2AppointmentResponse**](../Model/CrmV2AppointmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsUpdateSpecialInstructions()`

```php
appointmentsUpdateSpecialInstructions($id, $tenant, $crm_v2_update_appointment_special_instructions_request): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Appointments_UpdateSpecialInstructions

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_update_appointment_special_instructions_request = {"specialInstructions":"string"}; // \CompWright\ServiceTitan\Model\CrmV2UpdateAppointmentSpecialInstructionsRequest

try {
    $result = $apiInstance->appointmentsUpdateSpecialInstructions($id, $tenant, $crm_v2_update_appointment_special_instructions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsUpdateSpecialInstructions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_update_appointment_special_instructions_request** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateAppointmentSpecialInstructionsRequest**](../Model/CrmV2UpdateAppointmentSpecialInstructionsRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2AppointmentResponse**](../Model/CrmV2AppointmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
