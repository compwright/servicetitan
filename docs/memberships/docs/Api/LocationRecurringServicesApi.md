# CompWright\ServiceTitan\LocationRecurringServicesApi

All URIs are relative to https://api-integration.servicetitan.io/memberships/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationRecurringServicesGet()**](LocationRecurringServicesApi.md#locationRecurringServicesGet) | **GET** /tenant/{tenant}/recurring-services/{id} | Gets recurring service specified by ID
[**locationRecurringServicesGetList()**](LocationRecurringServicesApi.md#locationRecurringServicesGetList) | **GET** /tenant/{tenant}/recurring-services | Gets a list of recurring services
[**locationRecurringServicesUpdate()**](LocationRecurringServicesApi.md#locationRecurringServicesUpdate) | **PATCH** /tenant/{tenant}/recurring-services/{id} | Updates specified recurring service in \&quot;patch\&quot; mode


## `locationRecurringServicesGet()`

```php
locationRecurringServicesGet($id, $tenant): \CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponse
```

Gets recurring service specified by ID

Gets recurring service specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Recurring service ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->locationRecurringServicesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServicesApi->locationRecurringServicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Recurring service ID |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceResponse**](../Model/MembershipsV2LocationRecurringServiceResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationRecurringServicesGetList()`

```php
locationRecurringServicesGetList($tenant, $ids, $membership_ids, $location_ids, $active, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2LocationRecurringServiceResponse
```

Gets a list of recurring services

Gets a list of recurring services

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$membership_ids = 'membership_ids_example'; // string | Filters by customer membership IDs
$location_ids = 'location_ids_example'; // string | Filters by location IDs
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->locationRecurringServicesGetList($tenant, $ids, $membership_ids, $location_ids, $active, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServicesApi->locationRecurringServicesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **membership_ids** | **string**| Filters by customer membership IDs | [optional]
 **location_ids** | **string**| Filters by location IDs | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2LocationRecurringServiceResponse**](../Model/PaginatedResponseOfMembershipsV2LocationRecurringServiceResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationRecurringServicesUpdate()`

```php
locationRecurringServicesUpdate($id, $tenant, $memberships_v2_location_recurring_service_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Updates specified recurring service in \"patch\" mode

Updates specified recurring service in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationRecurringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Recurring service ID
$tenant = 56; // int | Tenant ID
$memberships_v2_location_recurring_service_update_request = {"name":"string","active":true,"recurringServiceTypeId":0,"durationType":{},"durationLength":0,"from":"string","memo":"string","invoiceTemplateId":0,"invoiceTemplateForFollowingYearsId":0,"businessUnitId":0,"jobTypeId":0,"campaignId":0,"priority":{},"jobSummary":"string","recurrenceType":{},"recurrenceInterval":0,"recurrenceMonths":["January"],"recurrenceDaysOfWeek":["Sunday"],"recurrenceWeek":{},"recurrenceDayOfNthWeek":{},"jobStartTime":"string","estimatedPayrollCost":0}; // \CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceUpdateRequest | Recurring service update request

try {
    $result = $apiInstance->locationRecurringServicesUpdate($id, $tenant, $memberships_v2_location_recurring_service_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationRecurringServicesApi->locationRecurringServicesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Recurring service ID |
 **tenant** | **int**| Tenant ID |
 **memberships_v2_location_recurring_service_update_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2LocationRecurringServiceUpdateRequest**](../Model/MembershipsV2LocationRecurringServiceUpdateRequest.md)| Recurring service update request | [optional]

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
