# CompWright\ServiceTitan\JobsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**jobsCancel()**](JobsApi.md#jobsCancel) | **PUT** /jpm/v2/tenant/{tenant}/jobs/{id}/cancel | Cancels a job |
| [**jobsComplete()**](JobsApi.md#jobsComplete) | **PUT** /jpm/v2/tenant/{tenant}/jobs/{id}/complete | Completes a job |
| [**jobsCreate()**](JobsApi.md#jobsCreate) | **POST** /jpm/v2/tenant/{tenant}/jobs | Creates a job |
| [**jobsCreateNote()**](JobsApi.md#jobsCreateNote) | **POST** /jpm/v2/tenant/{tenant}/jobs/{id}/notes | Creates a note on the specified job |
| [**jobsGet()**](JobsApi.md#jobsGet) | **GET** /jpm/v2/tenant/{tenant}/jobs/{id} | Gets a job by ID |
| [**jobsGetCancelReasons()**](JobsApi.md#jobsGetCancelReasons) | **GET** /jpm/v2/tenant/{tenant}/jobs/cancel-reasons | Gets a list of cancel reasons for specific jobs |
| [**jobsGetHistory()**](JobsApi.md#jobsGetHistory) | **GET** /jpm/v2/tenant/{tenant}/jobs/{id}/history | Gets a list of history entries for the specified job |
| [**jobsGetList()**](JobsApi.md#jobsGetList) | **GET** /jpm/v2/tenant/{tenant}/jobs | Gets a list of jobs |
| [**jobsGetNotes()**](JobsApi.md#jobsGetNotes) | **GET** /jpm/v2/tenant/{tenant}/jobs/{id}/notes | Gets a list of notes on the specified job |
| [**jobsHold()**](JobsApi.md#jobsHold) | **PUT** /jpm/v2/tenant/{tenant}/jobs/{id}/hold | Puts a job on hold |
| [**jobsRemoveCancellation()**](JobsApi.md#jobsRemoveCancellation) | **PUT** /jpm/v2/tenant/{tenant}/jobs/{id}/remove-cancellation | Removes cancellation from a job |
| [**jobsUpdate()**](JobsApi.md#jobsUpdate) | **PATCH** /jpm/v2/tenant/{tenant}/jobs/{id} | Updates a job |


## `jobsCancel()`

```php
jobsCancel($id, $tenant, $crm_v2_cancel_job_request)
```

Cancels a job

Cancels a job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_cancel_job_request = {"reasonId":0,"memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CancelJobRequest

try {
    $apiInstance->jobsCancel($id, $tenant, $crm_v2_cancel_job_request);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_cancel_job_request** | [**\CompWright\ServiceTitan\Model\CrmV2CancelJobRequest**](../Model/CrmV2CancelJobRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsComplete()`

```php
jobsComplete($id, $tenant, $crm_v2_complete_job_request)
```

Completes a job

Completes a job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_complete_job_request = {"completedOn":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CompleteJobRequest

try {
    $apiInstance->jobsComplete($id, $tenant, $crm_v2_complete_job_request);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_complete_job_request** | [**\CompWright\ServiceTitan\Model\CrmV2CompleteJobRequest**](../Model/CrmV2CompleteJobRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsCreate()`

```php
jobsCreate($tenant, $crm_v2_job_create_request): \CompWright\ServiceTitan\Model\CrmV2JobResponse
```

Creates a job

Creates a job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_job_create_request = {"customerId":0,"locationId":0,"businessUnitId":0,"jobTypeId":0,"priority":"string","campaignId":0,"appointments":[{"start":"string","end":"string","arrivalWindowStart":"string","arrivalWindowEnd":"string","technicianIds":[0]}],"summary":"string","customFields":[{"typeId":0,"value":"string"}],"tagTypeIds":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\CrmV2JobCreateRequest

try {
    $result = $apiInstance->jobsCreate($tenant, $crm_v2_job_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_job_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2JobCreateRequest**](../Model/CrmV2JobCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobResponse**](../Model/CrmV2JobResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsCreateNote()`

```php
jobsCreateNote($id, $tenant, $crm_v2_job_note_create_request): \CompWright\ServiceTitan\Model\CrmV2NoteResponse
```

Creates a note on the specified job

Creates a note on the specified job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_job_note_create_request = {"text":"string","pinToTop":true}; // \CompWright\ServiceTitan\Model\CrmV2JobNoteCreateRequest

try {
    $result = $apiInstance->jobsCreateNote($id, $tenant, $crm_v2_job_note_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsCreateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_job_note_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2JobNoteCreateRequest**](../Model/CrmV2JobNoteCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2NoteResponse**](../Model/CrmV2NoteResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsGet()`

```php
jobsGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\CrmV2JobResponse
```

Gets a job by ID

Gets a job by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.

try {
    $result = $apiInstance->jobsGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobResponse**](../Model/CrmV2JobResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsGetCancelReasons()`

```php
jobsGetCancelReasons($tenant, $ids): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CancelReasonResponse
```

Gets a list of cancel reasons for specific jobs

Gets a list of cancel reasons for specific jobs

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)

try {
    $result = $apiInstance->jobsGetCancelReasons($tenant, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetCancelReasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CancelReasonResponse**](../Model/PaginatedResponseOfCrmV2CancelReasonResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsGetHistory()`

```php
jobsGetHistory($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2JobHistoryResponse
```

Gets a list of history entries for the specified job

Gets a list of history entries for the specified job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->jobsGetHistory($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobHistoryResponse**](../Model/CrmV2JobHistoryResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsGetList()`

```php
jobsGetList($tenant, $page, $page_size, $include_total, $ids, $number, $project_id, $booking_id, $job_status, $appointment_status, $first_appointment_starts_on_or_after, $first_appointment_starts_before, $appointment_starts_on_or_after, $appointment_starts_before, $technician_id, $customer_id, $location_id, $sold_by_id, $job_type_id, $campaign_id, $business_unit_id, $invoice_id, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $completed_on_or_after, $completed_before, $sort, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobResponse
```

Gets a list of jobs

Gets a list of jobs

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
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
$number = 'number_example'; // string | Filters by job number
$project_id = 56; // int | Format - int64. Filters by project ID
$booking_id = 56; // int | Format - int64. Filters by booking ID that resulted in this job
$job_status = 'job_status_example'; // string | Filters by job status. Supported statuses are \"Scheduled\", \"InProgress\", \"Hold\", \"Completed\", and \"Canceled\"
$appointment_status = 'appointment_status_example'; // string | Filters by appointment status. Return a job if it has any appointment with the specified status. Supported statues are \"Scheduled\", \"Dispatched\", \"Working\", \"Hold\", \"Done\", \"Canceled\", \"Unused\"
$first_appointment_starts_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts on or after date/time (in UTC). Use with \"firstAppointmentStartsBefore\" to find jobs whose first appointment is within the specified date range.
$first_appointment_starts_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts before date/time (in UTC)
$appointment_starts_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC)
$appointment_starts_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC)
$technician_id = 56; // int | Format - int64. Return jobs if technician is assigned to any appointment
$customer_id = 56; // int | Format - int64. Filters by job's customer ID
$location_id = 56; // int | Format - int64. Filters by job's location ID
$sold_by_id = 56; // int | Format - int64. Filters by the technician who sold the job
$job_type_id = 56; // int | Format - int64. Filters by job type ID
$campaign_id = 56; // int | Format - int64. Filters by job's campaign ID
$business_unit_id = 56; // int | Format - int64. Filters by job's business unit ID
$invoice_id = 56; // int | Format - int64. Filters by job's invoice ID
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$completed_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs that are completed after a certain date/time (in UTC)
$completed_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return jobs that are completed before a certain date/time (in UTC)
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.

try {
    $result = $apiInstance->jobsGetList($tenant, $page, $page_size, $include_total, $ids, $number, $project_id, $booking_id, $job_status, $appointment_status, $first_appointment_starts_on_or_after, $first_appointment_starts_before, $appointment_starts_on_or_after, $appointment_starts_before, $technician_id, $customer_id, $location_id, $sold_by_id, $job_type_id, $campaign_id, $business_unit_id, $invoice_id, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $completed_on_or_after, $completed_before, $sort, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **number** | **string**| Filters by job number | [optional] |
| **project_id** | **int**| Format - int64. Filters by project ID | [optional] |
| **booking_id** | **int**| Format - int64. Filters by booking ID that resulted in this job | [optional] |
| **job_status** | **string**| Filters by job status. Supported statuses are \&quot;Scheduled\&quot;, \&quot;InProgress\&quot;, \&quot;Hold\&quot;, \&quot;Completed\&quot;, and \&quot;Canceled\&quot; | [optional] |
| **appointment_status** | **string**| Filters by appointment status. Return a job if it has any appointment with the specified status. Supported statues are \&quot;Scheduled\&quot;, \&quot;Dispatched\&quot;, \&quot;Working\&quot;, \&quot;Hold\&quot;, \&quot;Done\&quot;, \&quot;Canceled\&quot;, \&quot;Unused\&quot; | [optional] |
| **first_appointment_starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts on or after date/time (in UTC). Use with \&quot;firstAppointmentStartsBefore\&quot; to find jobs whose first appointment is within the specified date range. | [optional] |
| **first_appointment_starts_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts before date/time (in UTC) | [optional] |
| **appointment_starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC) | [optional] |
| **appointment_starts_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC) | [optional] |
| **technician_id** | **int**| Format - int64. Return jobs if technician is assigned to any appointment | [optional] |
| **customer_id** | **int**| Format - int64. Filters by job&#39;s customer ID | [optional] |
| **location_id** | **int**| Format - int64. Filters by job&#39;s location ID | [optional] |
| **sold_by_id** | **int**| Format - int64. Filters by the technician who sold the job | [optional] |
| **job_type_id** | **int**| Format - int64. Filters by job type ID | [optional] |
| **campaign_id** | **int**| Format - int64. Filters by job&#39;s campaign ID | [optional] |
| **business_unit_id** | **int**| Format - int64. Filters by job&#39;s business unit ID | [optional] |
| **invoice_id** | **int**| Format - int64. Filters by job&#39;s invoice ID | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional] |
| **completed_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs that are completed after a certain date/time (in UTC) | [optional] |
| **completed_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return jobs that are completed before a certain date/time (in UTC) | [optional] |
| **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional] |
| **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobResponse**](../Model/PaginatedResponseOfCrmV2JobResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsGetNotes()`

```php
jobsGetNotes($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse
```

Gets a list of notes on the specified job

Gets a list of notes on the specified job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->jobsGetNotes($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse**](../Model/PaginatedResponseOfCrmV2NoteResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsHold()`

```php
jobsHold($id, $tenant, $crm_v2_hold_job_request)
```

Puts a job on hold

Puts a job on hold

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_hold_job_request = {"reasonId":0,"memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2HoldJobRequest

try {
    $apiInstance->jobsHold($id, $tenant, $crm_v2_hold_job_request);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_hold_job_request** | [**\CompWright\ServiceTitan\Model\CrmV2HoldJobRequest**](../Model/CrmV2HoldJobRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsRemoveCancellation()`

```php
jobsRemoveCancellation($id, $tenant)
```

Removes cancellation from a job

Removes cancellation from a job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->jobsRemoveCancellation($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsRemoveCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobsUpdate()`

```php
jobsUpdate($id, $tenant, $crm_v2_update_job_request): \CompWright\ServiceTitan\Model\CrmV2JobResponse
```

Updates a job

Updates a job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_update_job_request = {"customerId":0,"locationId":0,"businessUnitId":0,"jobTypeId":0,"priority":"string","campaignId":0,"summary":"string","shouldUpdateInvoiceItems":true,"customFields":[{"typeId":0,"value":"string"}],"tagTypeIds":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\CrmV2UpdateJobRequest

try {
    $result = $apiInstance->jobsUpdate($id, $tenant, $crm_v2_update_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_update_job_request** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateJobRequest**](../Model/CrmV2UpdateJobRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobResponse**](../Model/CrmV2JobResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
