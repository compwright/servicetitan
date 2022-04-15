# CompWright\ServiceTitan\LeadsApi

All URIs are relative to https://api-integration.servicetitan.io/crm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsCreate()**](LeadsApi.md#leadsCreate) | **POST** /tenant/{tenant}/leads | Creates a lead
[**leadsCreateFollowUp()**](LeadsApi.md#leadsCreateFollowUp) | **POST** /tenant/{tenant}/leads/{id}/follow-up | Leads_CreateFollowUp
[**leadsCreateNote()**](LeadsApi.md#leadsCreateNote) | **POST** /tenant/{tenant}/leads/{id}/notes | Creates a note on the specified lead
[**leadsDismiss()**](LeadsApi.md#leadsDismiss) | **POST** /tenant/{tenant}/leads/{id}/dismiss | Dismisses a lead specified by ID
[**leadsGet()**](LeadsApi.md#leadsGet) | **GET** /tenant/{tenant}/leads/{id} | Gets a lead specified by ID
[**leadsGetList()**](LeadsApi.md#leadsGetList) | **GET** /tenant/{tenant}/leads | Gets a list of leads
[**leadsGetNotes()**](LeadsApi.md#leadsGetNotes) | **GET** /tenant/{tenant}/leads/{id}/notes | Gets notes for a lead
[**leadsUpdate()**](LeadsApi.md#leadsUpdate) | **PATCH** /tenant/{tenant}/leads/{id} | Updates a lead


## `leadsCreate()`

```php
leadsCreate($tenant, $crm_v2_lead_create_request): \CompWright\ServiceTitan\Model\CrmV2LeadResponse
```

Creates a lead

Creates a lead

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_lead_create_request = {"customerId":0,"locationId":0,"campaignId":0,"businessUnitId":0,"jobTypeId":0,"summary":"string","tagTypeIds":[0],"priority":{},"callReasonId":0,"followUpDate":"string"}; // \CompWright\ServiceTitan\Model\CrmV2LeadCreateRequest

try {
    $result = $apiInstance->leadsCreate($tenant, $crm_v2_lead_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_lead_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2LeadCreateRequest**](../Model/CrmV2LeadCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LeadResponse**](../Model/CrmV2LeadResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsCreateFollowUp()`

```php
leadsCreateFollowUp($id, $tenant, $crm_v2_create_follow_up_request): \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse
```

Leads_CreateFollowUp

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_create_follow_up_request = {"followUpDate":"string","text":"string","pinToTop":true}; // \CompWright\ServiceTitan\Model\CrmV2CreateFollowUpRequest

try {
    $result = $apiInstance->leadsCreateFollowUp($id, $tenant, $crm_v2_create_follow_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCreateFollowUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_create_follow_up_request** | [**\CompWright\ServiceTitan\Model\CrmV2CreateFollowUpRequest**](../Model/CrmV2CreateFollowUpRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2FollowUpResponse**](../Model/CrmV2FollowUpResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsCreateNote()`

```php
leadsCreateNote($id, $tenant, $crm_v2_lead_note_create_request): \CompWright\ServiceTitan\Model\CrmV2NoteResponse
```

Creates a note on the specified lead

Creates a note on the specified lead

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_lead_note_create_request = {"text":"string","pinToTop":true}; // \CompWright\ServiceTitan\Model\CrmV2LeadNoteCreateRequest

try {
    $result = $apiInstance->leadsCreateNote($id, $tenant, $crm_v2_lead_note_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCreateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_lead_note_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2LeadNoteCreateRequest**](../Model/CrmV2LeadNoteCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2NoteResponse**](../Model/CrmV2NoteResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsDismiss()`

```php
leadsDismiss($id, $tenant, $crm_v2_dismiss_lead_request)
```

Dismisses a lead specified by ID

Dismisses a lead specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_dismiss_lead_request = {"dismissingReasonId":0}; // \CompWright\ServiceTitan\Model\CrmV2DismissLeadRequest

try {
    $apiInstance->leadsDismiss($id, $tenant, $crm_v2_dismiss_lead_request);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsDismiss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_dismiss_lead_request** | [**\CompWright\ServiceTitan\Model\CrmV2DismissLeadRequest**](../Model/CrmV2DismissLeadRequest.md)|  | [optional]

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

## `leadsGet()`

```php
leadsGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2LeadResponse
```

Gets a lead specified by ID

Gets a lead specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->leadsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LeadResponse**](../Model/CrmV2LeadResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsGetList()`

```php
leadsGetList($tenant, $page, $page_size, $include_total, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $customer_id, $is_prospect, $without_customer, $status, $customer_city, $customer_state, $customer_zip, $customer_created_on_or_after, $customer_created_before, $customer_modified_on_or_after, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LeadResponse
```

Gets a list of leads

Gets a list of leads

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
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
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$customer_id = 56; // int | Format - int64. Filters by associated customer
$is_prospect = True; // bool | Allows to filter leads where the customer doesn't have a job, or there is no customer. Possible values are: null (return all leads); true (return leads without customer/jobs); false (return leads with customer and job)
$without_customer = True; // bool | Allows to filter leads that don't have a customer or location record associated to it. Possible values are: null (return all leads); true (return leads without customers or locations only); false (return leads with customers and locations only)
$status = 'status_example'; // OneOfCrmV2LeadStatus | Filters by status\\ Values: [Open, Dismissed, Converted]
$customer_city = 'customer_city_example'; // string | Filters by customer city
$customer_state = 'customer_state_example'; // string | Filters by customer state
$customer_zip = 'customer_zip_example'; // string | Filters by customer zip
$customer_created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customers who were created on or before a certain date/time (in UTC)
$customer_created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customers who were created after a certain date/time (in UTC)
$customer_modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customers who were modified on or before a certain date/time (in UTC)
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.

try {
    $result = $apiInstance->leadsGetList($tenant, $page, $page_size, $include_total, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $customer_id, $is_prospect, $without_customer, $status, $customer_city, $customer_state, $customer_zip, $customer_created_on_or_after, $customer_created_before, $customer_modified_on_or_after, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGetList: ', $e->getMessage(), PHP_EOL;
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
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **customer_id** | **int**| Format - int64. Filters by associated customer | [optional]
 **is_prospect** | **bool**| Allows to filter leads where the customer doesn&#39;t have a job, or there is no customer. Possible values are: null (return all leads); true (return leads without customer/jobs); false (return leads with customer and job) | [optional]
 **without_customer** | **bool**| Allows to filter leads that don&#39;t have a customer or location record associated to it. Possible values are: null (return all leads); true (return leads without customers or locations only); false (return leads with customers and locations only) | [optional]
 **status** | **OneOfCrmV2LeadStatus**| Filters by status\\ Values: [Open, Dismissed, Converted] | [optional]
 **customer_city** | **string**| Filters by customer city | [optional]
 **customer_state** | **string**| Filters by customer state | [optional]
 **customer_zip** | **string**| Filters by customer zip | [optional]
 **customer_created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customers who were created on or before a certain date/time (in UTC) | [optional]
 **customer_created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customers who were created after a certain date/time (in UTC) | [optional]
 **customer_modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customers who were modified on or before a certain date/time (in UTC) | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LeadResponse**](../Model/PaginatedResponseOfCrmV2LeadResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsGetNotes()`

```php
leadsGetNotes($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse
```

Gets notes for a lead

Gets notes for a lead

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
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
    $result = $apiInstance->leadsGetNotes($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGetNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse**](../Model/PaginatedResponseOfCrmV2NoteResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsUpdate()`

```php
leadsUpdate($id, $tenant, $crm_v2_lead_update_request): \CompWright\ServiceTitan\Model\CrmV2LeadResponse
```

Updates a lead

Updates a lead

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


$apiInstance = new CompWright\ServiceTitan\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_lead_update_request = {"campaignId":0,"priority":{},"businessUnitId":0,"jobTypeId":0}; // \CompWright\ServiceTitan\Model\CrmV2LeadUpdateRequest

try {
    $result = $apiInstance->leadsUpdate($id, $tenant, $crm_v2_lead_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_lead_update_request** | [**\CompWright\ServiceTitan\Model\CrmV2LeadUpdateRequest**](../Model/CrmV2LeadUpdateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LeadResponse**](../Model/CrmV2LeadResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
