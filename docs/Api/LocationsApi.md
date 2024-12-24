# CompWright\ServiceTitan\LocationsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**locationsCreate()**](LocationsApi.md#locationsCreate) | **POST** /crm/v2/tenant/{tenant}/locations | Creates a new location |
| [**locationsCreateContact()**](LocationsApi.md#locationsCreateContact) | **POST** /crm/v2/tenant/{tenant}/locations/{id}/contacts | Creates a contact on the location |
| [**locationsCreateNote()**](LocationsApi.md#locationsCreateNote) | **POST** /crm/v2/tenant/{tenant}/locations/{id}/notes | Creates a note on the specified location |
| [**locationsDeleteContact()**](LocationsApi.md#locationsDeleteContact) | **DELETE** /crm/v2/tenant/{tenant}/locations/{id}/contacts/{contactId} | Removes a contact from a location |
| [**locationsGet()**](LocationsApi.md#locationsGet) | **GET** /crm/v2/tenant/{tenant}/locations/{id} | Gets a location specified by ID |
| [**locationsGetContactsList()**](LocationsApi.md#locationsGetContactsList) | **GET** /crm/v2/tenant/{tenant}/locations/{id}/contacts | Gets a list of contacts for the specified location |
| [**locationsGetList()**](LocationsApi.md#locationsGetList) | **GET** /crm/v2/tenant/{tenant}/locations | Gets a list of locations |
| [**locationsGetLocationNotes()**](LocationsApi.md#locationsGetLocationNotes) | **GET** /crm/v2/tenant/{tenant}/locations/{id}/notes | Gets a list of notes on the specified location |
| [**locationsGetLocationsContactsList()**](LocationsApi.md#locationsGetLocationsContactsList) | **GET** /crm/v2/tenant/{tenant}/locations/contacts | Gets a list of contacts for locations. Either modifiedOn or modifiedOnOrAfter parameter must be specified |
| [**locationsUpdate()**](LocationsApi.md#locationsUpdate) | **PATCH** /crm/v2/tenant/{tenant}/locations/{id} | Updates a location |
| [**locationsUpdateContact()**](LocationsApi.md#locationsUpdateContact) | **PATCH** /crm/v2/tenant/{tenant}/locations/{id}/contacts/{contactId} | Updates a contact on the location |


## `locationsCreate()`

```php
locationsCreate($tenant, $crm_v2_locations_create_location_request): \CompWright\ServiceTitan\Model\CrmV2LocationsCreateLocationResponse
```

Creates a new location

Creates a new location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$crm_v2_locations_create_location_request = {"name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string","latitude":0,"longitude":0},"contacts":[{"type":{},"value":"string","memo":"string"}],"customFields":[{"typeId":0,"value":"string"}],"customerId":0}; // \CompWright\ServiceTitan\Model\CrmV2LocationsCreateLocationRequest

try {
    $result = $apiInstance->locationsCreate($tenant, $crm_v2_locations_create_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_locations_create_location_request** | [**\CompWright\ServiceTitan\Model\CrmV2LocationsCreateLocationRequest**](../Model/CrmV2LocationsCreateLocationRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LocationsCreateLocationResponse**](../Model/CrmV2LocationsCreateLocationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsCreateContact()`

```php
locationsCreateContact($id, $tenant, $crm_v2_location_contact_create_request): \CompWright\ServiceTitan\Model\CrmV2LocationContactResponse
```

Creates a contact on the location

Creates a contact on the location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_location_contact_create_request = {"type":{},"value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2LocationContactCreateRequest

try {
    $result = $apiInstance->locationsCreateContact($id, $tenant, $crm_v2_location_contact_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCreateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_location_contact_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2LocationContactCreateRequest**](../Model/CrmV2LocationContactCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LocationContactResponse**](../Model/CrmV2LocationContactResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsCreateNote()`

```php
locationsCreateNote($id, $tenant, $crm_v2_location_note_create_request): \CompWright\ServiceTitan\Model\CrmV2NoteResponse
```

Creates a note on the specified location

Creates a note on the specified location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_location_note_create_request = {"text":"string","pinToTop":true,"addToCustomer":true}; // \CompWright\ServiceTitan\Model\CrmV2LocationNoteCreateRequest

try {
    $result = $apiInstance->locationsCreateNote($id, $tenant, $crm_v2_location_note_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCreateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_location_note_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2LocationNoteCreateRequest**](../Model/CrmV2LocationNoteCreateRequest.md)|  | [optional] |

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

## `locationsDeleteContact()`

```php
locationsDeleteContact($id, $contact_id, $tenant)
```

Removes a contact from a location

Removes a contact from a location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->locationsDeleteContact($id, $contact_id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsDeleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **contact_id** | **int**| Format - int64. | |
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

## `locationsGet()`

```php
locationsGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2LocationsLocationResponse
```

Gets a location specified by ID

Gets a location specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->locationsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LocationsLocationResponse**](../Model/CrmV2LocationsLocationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsGetContactsList()`

```php
locationsGetContactsList($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationContactResponse
```

Gets a list of contacts for the specified location

Gets a list of contacts for the specified location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
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
    $result = $apiInstance->locationsGetContactsList($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGetContactsList: ', $e->getMessage(), PHP_EOL;
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

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationContactResponse**](../Model/PaginatedResponseOfCrmV2LocationContactResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsGetList()`

```php
locationsGetList($tenant, $ids, $name, $customer_id, $street, $unit, $city, $state, $zip, $country, $latitude, $longitude, $active, $page, $page_size, $include_total, $sort, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationsLocationResponse
```

Gets a list of locations

Gets a list of locations

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$name = 'name_example'; // string | Filters by customer's name
$customer_id = 56; // int | Format - int64. Filters by customer ID
$street = 'street_example'; // string | Filters by customer's street
$unit = 'unit_example'; // string | Filters by customer's unit
$city = 'city_example'; // string | Filters by customer's city
$state = 'state_example'; // string | Filters by customer's state
$zip = 'zip_example'; // string | Filters by customer's zip
$country = 'country_example'; // string | Filters by customer's country
$latitude = 3.4; // float | Format - double. Filters by customer's latitude
$longitude = 3.4; // float | Format - double. Filters by customer's longitude
$active = 'active_example'; // string | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)

try {
    $result = $apiInstance->locationsGetList($tenant, $ids, $name, $customer_id, $street, $unit, $city, $state, $zip, $country, $latitude, $longitude, $active, $page, $page_size, $include_total, $sort, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **name** | **string**| Filters by customer&#39;s name | [optional] |
| **customer_id** | **int**| Format - int64. Filters by customer ID | [optional] |
| **street** | **string**| Filters by customer&#39;s street | [optional] |
| **unit** | **string**| Filters by customer&#39;s unit | [optional] |
| **city** | **string**| Filters by customer&#39;s city | [optional] |
| **state** | **string**| Filters by customer&#39;s state | [optional] |
| **zip** | **string**| Filters by customer&#39;s zip | [optional] |
| **country** | **string**| Filters by customer&#39;s country | [optional] |
| **latitude** | **float**| Format - double. Filters by customer&#39;s latitude | [optional] |
| **longitude** | **float**| Format - double. Filters by customer&#39;s longitude | [optional] |
| **active** | **string**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationsLocationResponse**](../Model/PaginatedResponseOfCrmV2LocationsLocationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsGetLocationNotes()`

```php
locationsGetLocationNotes($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse
```

Gets a list of notes on the specified location

Gets a list of notes on the specified location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
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
    $result = $apiInstance->locationsGetLocationNotes($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGetLocationNotes: ', $e->getMessage(), PHP_EOL;
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

## `locationsGetLocationsContactsList()`

```php
locationsGetLocationsContactsList($tenant, $modified_before, $modified_on_or_after, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationsContactResponse
```

Gets a list of contacts for locations. Either modifiedOn or modifiedOnOrAfter parameter must be specified

Gets a list of contacts for locations. Either modifiedOn or modifiedOnOrAfter parameter must be specified

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on/after certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->locationsGetLocationsContactsList($tenant, $modified_before, $modified_on_or_after, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGetLocationsContactsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on/after certain date/time (in UTC). Either modifiedBefore or modifiedOnOrAfter parameter must be specified | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2LocationsContactResponse**](../Model/PaginatedResponseOfCrmV2LocationsContactResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsUpdate()`

```php
locationsUpdate($id, $tenant, $crm_v2_locations_update_location_request): \CompWright\ServiceTitan\Model\CrmV2LocationsLocationResponse
```

Updates a location

Updates a location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_locations_update_location_request = {"customerId":0,"name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string","latitude":0,"longitude":0},"active":true,"taxZoneId":0,"customFields":[{"typeId":0,"value":"string"}]}; // \CompWright\ServiceTitan\Model\CrmV2LocationsUpdateLocationRequest

try {
    $result = $apiInstance->locationsUpdate($id, $tenant, $crm_v2_locations_update_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_locations_update_location_request** | [**\CompWright\ServiceTitan\Model\CrmV2LocationsUpdateLocationRequest**](../Model/CrmV2LocationsUpdateLocationRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LocationsLocationResponse**](../Model/CrmV2LocationsLocationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationsUpdateContact()`

```php
locationsUpdateContact($id, $contact_id, $tenant, $crm_v2_location_contact_update_request): \CompWright\ServiceTitan\Model\CrmV2LocationContactResponse
```

Updates a contact on the location

Updates a contact on the location

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


$apiInstance = new CompWright\ServiceTitan\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_location_contact_update_request = {"type":{},"value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2LocationContactUpdateRequest

try {
    $result = $apiInstance->locationsUpdateContact($id, $contact_id, $tenant, $crm_v2_location_contact_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsUpdateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **contact_id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **crm_v2_location_contact_update_request** | [**\CompWright\ServiceTitan\Model\CrmV2LocationContactUpdateRequest**](../Model/CrmV2LocationContactUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2LocationContactResponse**](../Model/CrmV2LocationContactResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
