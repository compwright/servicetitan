# CompWright\ServiceTitan\LocationRecurringServiceEventsApi

All URIs are relative to https://api-integration.servicetitan.io/memberships/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationRecurringServiceEventsGetList()**](LocationRecurringServiceEventsApi.md#locationRecurringServiceEventsGetList) | **GET** /tenant/{tenant}/recurring-service-events | Gets a list of recurring service events
[**locationRecurringServiceEventsMarkComplete()**](LocationRecurringServiceEventsApi.md#locationRecurringServiceEventsMarkComplete) | **POST** /tenant/{tenant}/recurring-service-events/{id}/mark-complete | Marks the specified recurring service event as complete
[**locationRecurringServiceEventsMarkIncomplete()**](LocationRecurringServiceEventsApi.md#locationRecurringServiceEventsMarkIncomplete) | **POST** /tenant/{tenant}/recurring-service-events/{id}/mark-incomplete | Marks the specified recurring service event as incomplete


## `locationRecurringServiceEventsGetList()`

```php
locationRecurringServiceEventsGetList($tenant, $ids, $location_id, $job_id, $status, $created_before, $created_on_or_after, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2LocationRecurringServiceEventResponse
```

Gets a list of recurring service events

Gets a list of recurring service events

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServiceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$location_id = 56; // int | Format - int64. Location ID
$job_id = 56; // int | Format - int64. Job ID
$status = 'status_example'; // OneOfMembershipsV2OpportunityStatus | Follow up status \\ Values: [NotAttempted, Unreachable, Contacted, Won, Dismissed]
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->locationRecurringServiceEventsGetList($tenant, $ids, $location_id, $job_id, $status, $created_before, $created_on_or_after, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServiceEventsApi->locationRecurringServiceEventsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **location_id** | **int**| Format - int64. Location ID | [optional]
 **job_id** | **int**| Format - int64. Job ID | [optional]
 **status** | **OneOfMembershipsV2OpportunityStatus**| Follow up status \\ Values: [NotAttempted, Unreachable, Contacted, Won, Dismissed] | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2LocationRecurringServiceEventResponse**](../Model/PaginatedResponseOfMembershipsV2LocationRecurringServiceEventResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationRecurringServiceEventsMarkComplete()`

```php
locationRecurringServiceEventsMarkComplete($id, $tenant, $memberships_v2_mark_event_completed_status_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Marks the specified recurring service event as complete

Marking an event as complete links the job with provided JobID to the given Location Recurring Service Event. It will also copy over invoice items to the Job Invoice corresponding to the Invoice Template of the Location Recurring Service the Event was generated from.

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServiceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Recurring service event ID
$tenant = 56; // int | Tenant ID
$memberships_v2_mark_event_completed_status_update_request = {"jobId":0}; // \CompWright\ServiceTitan\Model\MembershipsV2MarkEventCompletedStatusUpdateRequest | Recurring service event status update request

try {
    $result = $apiInstance->locationRecurringServiceEventsMarkComplete($id, $tenant, $memberships_v2_mark_event_completed_status_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServiceEventsApi->locationRecurringServiceEventsMarkComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Recurring service event ID |
 **tenant** | **int**| Tenant ID |
 **memberships_v2_mark_event_completed_status_update_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2MarkEventCompletedStatusUpdateRequest**](../Model/MembershipsV2MarkEventCompletedStatusUpdateRequest.md)| Recurring service event status update request | [optional]

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

## `locationRecurringServiceEventsMarkIncomplete()`

```php
locationRecurringServiceEventsMarkIncomplete($id, $tenant, $memberships_v2_mark_event_completed_status_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Marks the specified recurring service event as incomplete

Marking an event as incomplete unlinks the job with provided JobID to the given Location Recurring Service Event. It will also delete the invoice items that were copied over when the Location Recurring Service Event was marked as completed on the Job.

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServiceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Recurring service event ID
$tenant = 56; // int | Tenant ID
$memberships_v2_mark_event_completed_status_update_request = {"jobId":0}; // \CompWright\ServiceTitan\Model\MembershipsV2MarkEventCompletedStatusUpdateRequest | Recurring service event status update request

try {
    $result = $apiInstance->locationRecurringServiceEventsMarkIncomplete($id, $tenant, $memberships_v2_mark_event_completed_status_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServiceEventsApi->locationRecurringServiceEventsMarkIncomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Recurring service event ID |
 **tenant** | **int**| Tenant ID |
 **memberships_v2_mark_event_completed_status_update_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2MarkEventCompletedStatusUpdateRequest**](../Model/MembershipsV2MarkEventCompletedStatusUpdateRequest.md)| Recurring service event status update request | [optional]

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
