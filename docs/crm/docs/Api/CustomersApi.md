# CompWright\ServiceTitan\CustomersApi

All URIs are relative to https://api-integration.servicetitan.io/crm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCreate()**](CustomersApi.md#customersCreate) | **POST** /tenant/{tenant}/customers | Creates a New Customer
[**customersCreateContact()**](CustomersApi.md#customersCreateContact) | **POST** /tenant/{tenant}/customers/{id}/contacts | Creates a contact on the customer
[**customersCreateNote()**](CustomersApi.md#customersCreateNote) | **POST** /tenant/{tenant}/customers/{id}/notes | Creates a New Note
[**customersDeleteContact()**](CustomersApi.md#customersDeleteContact) | **DELETE** /tenant/{tenant}/customers/{id}/contacts/{contactId} | Removes a contact from a customer
[**customersGet()**](CustomersApi.md#customersGet) | **GET** /tenant/{tenant}/customers/{id} | Gets a Customer specified by ID
[**customersGetContactsList()**](CustomersApi.md#customersGetContactsList) | **GET** /tenant/{tenant}/customers/{id}/contacts | Gets a list of contacts for the specified customer
[**customersGetList()**](CustomersApi.md#customersGetList) | **GET** /tenant/{tenant}/customers | Gets a list of Customers
[**customersGetModifiedContactsList()**](CustomersApi.md#customersGetModifiedContactsList) | **GET** /tenant/{tenant}/customers/contacts | Gets a list of contacts and customers for a specific modified-on date range. Either modifiedOn or modifiedOnOrAfter parameter must be specified
[**customersGetNotes()**](CustomersApi.md#customersGetNotes) | **GET** /tenant/{tenant}/customers/{id}/notes | Gets a list of notes for a customer
[**customersUpdate()**](CustomersApi.md#customersUpdate) | **PATCH** /tenant/{tenant}/customers/{id} | Update a customer
[**customersUpdateContact()**](CustomersApi.md#customersUpdateContact) | **PATCH** /tenant/{tenant}/customers/{id}/contacts/{contactId} | Updates a contact on the customer


## `customersCreate()`

```php
customersCreate($tenant, $crm_v2_customers_create_customer_request): \CompWright\ServiceTitan\Model\CrmV2CustomersCreatedCustomerResponse
```

Creates a New Customer

Creates a New Customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_customers_create_customer_request = {"name":"string","type":{},"doNotMail":true,"doNotService":true,"locations":[{"name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string","latitude":0,"longitude":0},"contacts":[{"type":{},"value":"string","memo":"string"}],"customFields":[{"typeId":0,"value":"string"}]}],"address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string","latitude":0,"longitude":0},"contacts":[{"type":{},"value":"string","memo":"string"}],"customFields":[{"typeId":0,"value":"string"}]}; // \CompWright\ServiceTitan\Model\CrmV2CustomersCreateCustomerRequest

try {
    $result = $apiInstance->customersCreate($tenant, $crm_v2_customers_create_customer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **crm_v2_customers_create_customer_request** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCreateCustomerRequest**](../Model/CrmV2CustomersCreateCustomerRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2CustomersCreatedCustomerResponse**](../Model/CrmV2CustomersCreatedCustomerResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCreateContact()`

```php
customersCreateContact($id, $tenant, $crm_v2_customers_create_customer_contact_request): \CompWright\ServiceTitan\Model\CrmV2CustomersCustomerContactWithModifiedOnResponse
```

Creates a contact on the customer

Creates a contact on the customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_customers_create_customer_contact_request = {"type":{},"value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CustomersCreateCustomerContactRequest

try {
    $result = $apiInstance->customersCreateContact($id, $tenant, $crm_v2_customers_create_customer_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCreateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_customers_create_customer_contact_request** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersCreateCustomerContactRequest**](../Model/CrmV2CustomersCreateCustomerContactRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerContactWithModifiedOnResponse**](../Model/CrmV2CustomersCustomerContactWithModifiedOnResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCreateNote()`

```php
customersCreateNote($id, $tenant, $crm_v2_create_customer_note_request): \CompWright\ServiceTitan\Model\CrmV2NoteResponse
```

Creates a New Note

Creates a New Note

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_create_customer_note_request = {"text":"string","pinToTop":true,"addToLocations":true}; // \CompWright\ServiceTitan\Model\CrmV2CreateCustomerNoteRequest

try {
    $result = $apiInstance->customersCreateNote($id, $tenant, $crm_v2_create_customer_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCreateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_create_customer_note_request** | [**\CompWright\ServiceTitan\Model\CrmV2CreateCustomerNoteRequest**](../Model/CrmV2CreateCustomerNoteRequest.md)|  | [optional]

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

## `customersDeleteContact()`

```php
customersDeleteContact($id, $contact_id, $tenant)
```

Removes a contact from a customer

Removes a contact from a customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->customersDeleteContact($id, $contact_id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersDeleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **contact_id** | **int**| Format - int64. |
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

## `customersGet()`

```php
customersGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponse
```

Gets a Customer specified by ID

Gets a Customer specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->customersGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponse**](../Model/CrmV2CustomersCustomerResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetContactsList()`

```php
customersGetContactsList($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnResponse
```

Gets a list of contacts for the specified customer

Gets a list of contacts for the specified customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool

try {
    $result = $apiInstance->customersGetContactsList($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetContactsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. | [optional]
 **page_size** | **int**| Format - int32. | [optional]
 **include_total** | **bool**|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnResponse**](../Model/PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetList()`

```php
customersGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $name, $street, $unit, $city, $state, $zip, $country, $latitude, $longitude, $phone, $active): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerResponse
```

Gets a list of Customers

Gets a list of Customers

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.
$ids = 'ids_example'; // string | Returns specific customer records by customer ID.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customer records created before the requested date (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customer records created on or after the requested date (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customer records modified before the requested date (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Returns customer records modified after the requested date (in UTC)
$name = 'name_example'; // string | Returns customer records by name.
$street = 'street_example'; // string | Returns customer records by street.
$unit = 'unit_example'; // string | Returns customer records by unit.
$city = 'city_example'; // string | Returns customer records by city.
$state = 'state_example'; // string | Returns customer records by state.
$zip = 'zip_example'; // string | Returns customer records by zip.
$country = 'country_example'; // string | Returns customer records by country.
$latitude = 3.4; // double | Format - double. Returns customer records by latitude.
$longitude = 3.4; // double | Format - double. Returns customer records by longitude.
$phone = 'phone_example'; // string | Returns customer records by phone number of contacts.
$active = 'active_example'; // OneOfActiveQueryFilter | Returns customer records by active status. only active items will be returned by default.\\ Values: [True, Any, False]

try {
    $result = $apiInstance->customersGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $name, $street, $unit, $city, $state, $zip, $country, $latitude, $longitude, $phone, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional]
 **ids** | **string**| Returns specific customer records by customer ID. | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customer records created before the requested date (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customer records created on or after the requested date (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customer records modified before the requested date (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Returns customer records modified after the requested date (in UTC) | [optional]
 **name** | **string**| Returns customer records by name. | [optional]
 **street** | **string**| Returns customer records by street. | [optional]
 **unit** | **string**| Returns customer records by unit. | [optional]
 **city** | **string**| Returns customer records by city. | [optional]
 **state** | **string**| Returns customer records by state. | [optional]
 **zip** | **string**| Returns customer records by zip. | [optional]
 **country** | **string**| Returns customer records by country. | [optional]
 **latitude** | **double**| Format - double. Returns customer records by latitude. | [optional]
 **longitude** | **double**| Format - double. Returns customer records by longitude. | [optional]
 **phone** | **string**| Returns customer records by phone number of contacts. | [optional]
 **active** | **OneOfActiveQueryFilter**| Returns customer records by active status. only active items will be returned by default.\\ Values: [True, Any, False] | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerResponse**](../Model/PaginatedResponseOfCrmV2CustomersCustomerResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetModifiedContactsList()`

```php
customersGetModifiedContactsList($tenant, $page, $page_size, $include_total, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse
```

Gets a list of contacts and customers for a specific modified-on date range. Either modifiedOn or modifiedOnOrAfter parameter must be specified

Gets a list of contacts and customers for a specific modified-on date range. Either modifiedOn or modifiedOnOrAfter parameter must be specified

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on/after certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified

try {
    $result = $apiInstance->customersGetModifiedContactsList($tenant, $page, $page_size, $include_total, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetModifiedContactsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on/after certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse**](../Model/PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersGetNotes()`

```php
customersGetNotes($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse
```

Gets a list of notes for a customer

Gets a list of notes for a customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
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
    $result = $apiInstance->customersGetNotes($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGetNotes: ', $e->getMessage(), PHP_EOL;
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

## `customersUpdate()`

```php
customersUpdate($id, $tenant, $crm_v2_customers_update_customer_request): \CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponse
```

Update a customer

Update a customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_customers_update_customer_request = {"name":"string","type":{},"address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string","latitude":0,"longitude":0},"customFields":[{"typeId":0,"value":"string"}],"doNotMail":true,"doNotService":true,"active":true}; // \CompWright\ServiceTitan\Model\CrmV2CustomersUpdateCustomerRequest

try {
    $result = $apiInstance->customersUpdate($id, $tenant, $crm_v2_customers_update_customer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_customers_update_customer_request** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersUpdateCustomerRequest**](../Model/CrmV2CustomersUpdateCustomerRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerResponse**](../Model/CrmV2CustomersCustomerResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersUpdateContact()`

```php
customersUpdateContact($id, $contact_id, $tenant, $crm_v2_customers_update_customer_contact_request): \CompWright\ServiceTitan\Model\CrmV2CustomersCustomerContactWithModifiedOnResponse
```

Updates a contact on the customer

Updates a contact on the customer

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


$apiInstance = new CompWright\ServiceTitan\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_customers_update_customer_contact_request = {"type":{},"value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CustomersUpdateCustomerContactRequest

try {
    $result = $apiInstance->customersUpdateContact($id, $contact_id, $tenant, $crm_v2_customers_update_customer_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersUpdateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **contact_id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_customers_update_customer_contact_request** | [**\CompWright\ServiceTitan\Model\CrmV2CustomersUpdateCustomerContactRequest**](../Model/CrmV2CustomersUpdateCustomerContactRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2CustomersCustomerContactWithModifiedOnResponse**](../Model/CrmV2CustomersCustomerContactWithModifiedOnResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
