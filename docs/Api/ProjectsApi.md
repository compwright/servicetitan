# CompWright\ServiceTitan\ProjectsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsGet()**](ProjectsApi.md#projectsGet) | **GET** /jpm/v2/tenant/{tenant}/projects/{id} | Gets a project by ID |
| [**projectsGetList()**](ProjectsApi.md#projectsGetList) | **GET** /jpm/v2/tenant/{tenant}/projects | Gets a list of projects |


## `projectsGet()`

```php
projectsGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2ProjectResponse
```

Gets a project by ID

Gets a project by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->projectsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2ProjectResponse**](../Model/CrmV2ProjectResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetList()`

```php
projectsGetList($tenant, $ids, $customer_id, $location_id, $invoice_id, $technician_id, $job_id, $appointment_id, $created_before, $created_on_or_after, $starts_before, $starts_on_or_after, $completed_before, $completed_on_or_after, $target_completion_date_before, $target_completion_date_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total, $status, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2ProjectResponse
```

Gets a list of projects

Gets a list of projects

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


$apiInstance = new CompWright\ServiceTitan\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$customer_id = 56; // int | Format - int64. Filters by customer ID
$location_id = 56; // int | Format - int64. Filters by location ID
$invoice_id = 56; // int | Format - int64. Return projects if it contains the specified invoice
$technician_id = 56; // int | Format - int64. Return project if technician is assigned to any appointments on any job in the project
$job_id = 56; // int | Format - int64. Return project if it contains the specified job
$appointment_id = 56; // int | Format - int64. Return project if it contains the specified appointment in the project's jobs
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$starts_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects that start before date
$starts_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects that start on or after date
$completed_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects that are completed before date
$completed_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects that are completed on or after date
$target_completion_date_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects whose target completion date is before date
$target_completion_date_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects whose target completion date is on or after date
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects whose last modification date is before date
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return projects whose last modification date is on or after date
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$status = 'status_example'; // string | Filters by status
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.

try {
    $result = $apiInstance->projectsGetList($tenant, $ids, $customer_id, $location_id, $invoice_id, $technician_id, $job_id, $appointment_id, $created_before, $created_on_or_after, $starts_before, $starts_on_or_after, $completed_before, $completed_on_or_after, $target_completion_date_before, $target_completion_date_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total, $status, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **customer_id** | **int**| Format - int64. Filters by customer ID | [optional] |
| **location_id** | **int**| Format - int64. Filters by location ID | [optional] |
| **invoice_id** | **int**| Format - int64. Return projects if it contains the specified invoice | [optional] |
| **technician_id** | **int**| Format - int64. Return project if technician is assigned to any appointments on any job in the project | [optional] |
| **job_id** | **int**| Format - int64. Return project if it contains the specified job | [optional] |
| **appointment_id** | **int**| Format - int64. Return project if it contains the specified appointment in the project&#39;s jobs | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **starts_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects that start before date | [optional] |
| **starts_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects that start on or after date | [optional] |
| **completed_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects that are completed before date | [optional] |
| **completed_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects that are completed on or after date | [optional] |
| **target_completion_date_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects whose target completion date is before date | [optional] |
| **target_completion_date_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects whose target completion date is on or after date | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects whose last modification date is before date | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return projects whose last modification date is on or after date | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **status** | **string**| Filters by status | [optional] |
| **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2ProjectResponse**](../Model/PaginatedResponseOfCrmV2ProjectResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
