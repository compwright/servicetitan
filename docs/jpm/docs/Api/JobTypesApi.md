# CompWright\ServiceTitan\JobTypesApi

All URIs are relative to https://api-integration.servicetitan.io/jpm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobTypesCreate()**](JobTypesApi.md#jobTypesCreate) | **POST** /tenant/{tenant}/job-types | Creates a job type
[**jobTypesGet()**](JobTypesApi.md#jobTypesGet) | **GET** /tenant/{tenant}/job-types/{id} | Gets a job type by ID
[**jobTypesGetList()**](JobTypesApi.md#jobTypesGetList) | **GET** /tenant/{tenant}/job-types | Gets a list of job types
[**jobTypesUpdate()**](JobTypesApi.md#jobTypesUpdate) | **PATCH** /tenant/{tenant}/job-types/{id} | Creates a job type


## `jobTypesCreate()`

```php
jobTypesCreate($tenant, $crm_v2_create_job_type_request): \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse
```

Creates a job type

Creates a job type

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


$apiInstance = new CompWright\ServiceTitan\Api\JobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_create_job_type_request = {"name":"string","externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\CrmV2CreateJobTypeRequest

try {
    $result = $apiInstance->jobTypesCreate($tenant, $crm_v2_create_job_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypesApi->jobTypesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_create_job_type_request** | [**\CompWright\ServiceTitan\Model\CrmV2CreateJobTypeRequest**](../Model/CrmV2CreateJobTypeRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobTypeResponse**](../Model/CrmV2JobTypeResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobTypesGet()`

```php
jobTypesGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse
```

Gets a job type by ID

Gets a job type by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\JobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.

try {
    $result = $apiInstance->jobTypesGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypesApi->jobTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobTypeResponse**](../Model/CrmV2JobTypeResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobTypesGetList()`

```php
jobTypesGetList($tenant, $name, $ids, $page, $page_size, $include_total, $active, $order_by, $order_by_direction, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobTypeResponse
```

Gets a list of job types

Gets a list of job types

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


$apiInstance = new CompWright\ServiceTitan\Api\JobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$name = 'name_example'; // string | Filters by job type name
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$order_by = 'order_by_example'; // string | Orders results by a field. Supported fields are \"id\", \"modifiedOn\", and \"createdOn\"
$order_by_direction = 'order_by_direction_example'; // string | Specifies order direction of results. Supported values are \"asc\"/\"ascending\" and \"desc\"/\"descending\"
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.

try {
    $result = $apiInstance->jobTypesGetList($tenant, $name, $ids, $page, $page_size, $include_total, $active, $order_by, $order_by_direction, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypesApi->jobTypesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **name** | **string**| Filters by job type name | [optional]
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **order_by** | **string**| Orders results by a field. Supported fields are \&quot;id\&quot;, \&quot;modifiedOn\&quot;, and \&quot;createdOn\&quot; | [optional]
 **order_by_direction** | **string**| Specifies order direction of results. Supported values are \&quot;asc\&quot;/\&quot;ascending\&quot; and \&quot;desc\&quot;/\&quot;descending\&quot; | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobTypeResponse**](../Model/PaginatedResponseOfCrmV2JobTypeResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobTypesUpdate()`

```php
jobTypesUpdate($id, $tenant, $crm_v2_update_job_type_request): \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse
```

Creates a job type

Creates a job type

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


$apiInstance = new CompWright\ServiceTitan\Api\JobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_update_job_type_request = {"name":"string","externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\CrmV2UpdateJobTypeRequest

try {
    $result = $apiInstance->jobTypesUpdate($id, $tenant, $crm_v2_update_job_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypesApi->jobTypesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_update_job_type_request** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateJobTypeRequest**](../Model/CrmV2UpdateJobTypeRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2JobTypeResponse**](../Model/CrmV2JobTypeResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
