# CompWright\ServiceTitan\AppointmentAssignmentsApi

All URIs are relative to https://api-integration.servicetitan.io/dispatch/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentAssignmentsAssignTechnicians()**](AppointmentAssignmentsApi.md#appointmentAssignmentsAssignTechnicians) | **POST** /tenant/{tenant}/appointment-assignments/assign-technicians | Assigns the list of technicians to the appointment
[**appointmentAssignmentsGetList()**](AppointmentAssignmentsApi.md#appointmentAssignmentsGetList) | **GET** /tenant/{tenant}/appointment-assignments | Gets a list of appointment assignments
[**appointmentAssignmentsUnassignTechnicians()**](AppointmentAssignmentsApi.md#appointmentAssignmentsUnassignTechnicians) | **POST** /tenant/{tenant}/appointment-assignments/unassign-technicians | Unassigns the list of technicians from the appointment


## `appointmentAssignmentsAssignTechnicians()`

```php
appointmentAssignmentsAssignTechnicians($tenant, $crm_v2_assign_technicians_request): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Assigns the list of technicians to the appointment

Assigns the list of technicians to the appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_assign_technicians_request = {"jobAppointmentId":0,"technicianIds":[0]}; // \CompWright\ServiceTitan\Model\CrmV2AssignTechniciansRequest

try {
    $result = $apiInstance->appointmentAssignmentsAssignTechnicians($tenant, $crm_v2_assign_technicians_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentAssignmentsApi->appointmentAssignmentsAssignTechnicians: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_assign_technicians_request** | [**\CompWright\ServiceTitan\Model\CrmV2AssignTechniciansRequest**](../Model/CrmV2AssignTechniciansRequest.md)|  | [optional]

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

## `appointmentAssignmentsGetList()`

```php
appointmentAssignmentsGetList($tenant, $page, $page_size, $include_total, $ids, $appointment_ids, $job_id): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentAssignmentResponse
```

Gets a list of appointment assignments

Gets a list of appointment assignments

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$appointment_ids = 'appointment_ids_example'; // string | Return appointment assignments for one or more appointments
$job_id = 56; // int | Format - int64. Return appointment assignments for a single job

try {
    $result = $apiInstance->appointmentAssignmentsGetList($tenant, $page, $page_size, $include_total, $ids, $appointment_ids, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentAssignmentsApi->appointmentAssignmentsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **appointment_ids** | **string**| Return appointment assignments for one or more appointments | [optional]
 **job_id** | **int**| Format - int64. Return appointment assignments for a single job | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentAssignmentResponse**](../Model/PaginatedResponseOfCrmV2AppointmentAssignmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentAssignmentsUnassignTechnicians()`

```php
appointmentAssignmentsUnassignTechnicians($tenant, $crm_v2_unassign_technicians_request): \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse
```

Unassigns the list of technicians from the appointment

Unassigns the list of technicians from the appointment

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


$apiInstance = new CompWright\ServiceTitan\Api\AppointmentAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_unassign_technicians_request = {"jobAppointmentId":0,"technicianIds":[0]}; // \CompWright\ServiceTitan\Model\CrmV2UnassignTechniciansRequest

try {
    $result = $apiInstance->appointmentAssignmentsUnassignTechnicians($tenant, $crm_v2_unassign_technicians_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentAssignmentsApi->appointmentAssignmentsUnassignTechnicians: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_unassign_technicians_request** | [**\CompWright\ServiceTitan\Model\CrmV2UnassignTechniciansRequest**](../Model/CrmV2UnassignTechniciansRequest.md)|  | [optional]

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
