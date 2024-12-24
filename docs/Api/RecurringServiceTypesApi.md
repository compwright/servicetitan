# CompWright\ServiceTitan\RecurringServiceTypesApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recurringServiceTypesGet()**](RecurringServiceTypesApi.md#recurringServiceTypesGet) | **GET** /memberships/v2/tenant/{tenant}/recurring-service-types/{id} | Gets recurring service type specified by ID |
| [**recurringServiceTypesGetList()**](RecurringServiceTypesApi.md#recurringServiceTypesGetList) | **GET** /memberships/v2/tenant/{tenant}/recurring-service-types | Gets a list of recurring service types |


## `recurringServiceTypesGet()`

```php
recurringServiceTypesGet($id, $tenant): \CompWright\ServiceTitan\Model\MembershipsV2RecurringServiceTypeResponse
```

Gets recurring service type specified by ID

Gets recurring service type specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\RecurringServiceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Recurring service type ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->recurringServiceTypesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringServiceTypesApi->recurringServiceTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. Recurring service type ID | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\MembershipsV2RecurringServiceTypeResponse**](../Model/MembershipsV2RecurringServiceTypeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurringServiceTypesGetList()`

```php
recurringServiceTypesGetList($tenant, $ids, $membership_type_id, $active, $recurrence_type, $duration_type, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2RecurringServiceTypeResponse
```

Gets a list of recurring service types

Gets a list of recurring service types

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


$apiInstance = new CompWright\ServiceTitan\Api\RecurringServiceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$membership_type_id = 56; // int | Format - int64. Filters by membership type ID
$active = 'active_example'; // string | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$recurrence_type = 'recurrence_type_example'; // string | Filters by recurrence type\\ Values: [Weekly, Monthly, Seasonal, Daily, NthWeekdayOfMonth]
$duration_type = 'duration_type_example'; // string | Filters by duration type\\ Values: [Continuous, NumberOfVisits]
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->recurringServiceTypesGetList($tenant, $ids, $membership_type_id, $active, $recurrence_type, $duration_type, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringServiceTypesApi->recurringServiceTypesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **membership_type_id** | **int**| Format - int64. Filters by membership type ID | [optional] |
| **active** | **string**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional] |
| **recurrence_type** | **string**| Filters by recurrence type\\ Values: [Weekly, Monthly, Seasonal, Daily, NthWeekdayOfMonth] | [optional] |
| **duration_type** | **string**| Filters by duration type\\ Values: [Continuous, NumberOfVisits] | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2RecurringServiceTypeResponse**](../Model/PaginatedResponseOfMembershipsV2RecurringServiceTypeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
