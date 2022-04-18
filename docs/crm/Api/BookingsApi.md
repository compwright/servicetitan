# CompWright\ServiceTitan\BookingsApi

All URIs are relative to https://api-integration.servicetitan.io/crm/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingsCreate()**](BookingsApi.md#bookingsCreate) | **POST** /tenant/{tenant}/booking-provider/{booking_provider}/bookings | Creates a booking for a booking provider
[**bookingsCreateContact()**](BookingsApi.md#bookingsCreateContact) | **POST** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts | Creates a contact on the specified booking for a booking provider
[**bookingsDeleteContact()**](BookingsApi.md#bookingsDeleteContact) | **DELETE** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts/{contactId} | Removes a contact from a booking for a booking provider
[**bookingsGet()**](BookingsApi.md#bookingsGet) | **GET** /tenant/{tenant}/bookings/{id} | Gets a booking by ID
[**bookingsGetContactList()**](BookingsApi.md#bookingsGetContactList) | **GET** /tenant/{tenant}/bookings/{id}/contacts | Get a list of contacts for a booking
[**bookingsGetContactList2()**](BookingsApi.md#bookingsGetContactList2) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts | Get a list of contacts for a booking for a booking provider
[**bookingsGetForProvider()**](BookingsApi.md#bookingsGetForProvider) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id} | Gets a booking by ID for a booking provider
[**bookingsGetList()**](BookingsApi.md#bookingsGetList) | **GET** /tenant/{tenant}/bookings | Gets a list of bookings
[**bookingsGetList2()**](BookingsApi.md#bookingsGetList2) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings | Gets a list of bookings for a booking provider
[**bookingsUpdate()**](BookingsApi.md#bookingsUpdate) | **PATCH** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id} | Updates a booking for a booking provider
[**bookingsUpdateBookingContact()**](BookingsApi.md#bookingsUpdateBookingContact) | **PATCH** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts/{contactId} | Updates a single booking contact for a booking provider


## `bookingsCreate()`

```php
bookingsCreate($booking_provider, $tenant, $crm_v2_create_booking_request): \CompWright\ServiceTitan\Model\CrmV2BookingResponse
```

Creates a booking for a booking provider

Creates a booking for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_create_booking_request = {"source":"string","name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"},"contacts":[{"type":"Phone","value":"string","memo":"string"}],"customerType":"string","start":"string","summary":"string","campaignId":0,"businessUnitId":0,"jobTypeId":0,"priority":{},"isFirstTimeClient":true,"uploadedImages":["string"],"isSendConfirmationEmail":true,"externalId":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest

try {
    $result = $apiInstance->bookingsCreate($booking_provider, $tenant, $crm_v2_create_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_create_booking_request** | [**\CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest**](../Model/CrmV2CreateBookingRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2BookingResponse**](../Model/CrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsCreateContact()`

```php
bookingsCreateContact($booking_provider, $id, $tenant, $crm_v2_contact_create_request): \CompWright\ServiceTitan\Model\CrmV2BookingContactResponse
```

Creates a contact on the specified booking for a booking provider

Creates a contact on the specified booking for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_contact_create_request = {"type":"string","value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2ContactCreateRequest

try {
    $result = $apiInstance->bookingsCreateContact($booking_provider, $id, $tenant, $crm_v2_contact_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsCreateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_contact_create_request** | [**\CompWright\ServiceTitan\Model\CrmV2ContactCreateRequest**](../Model/CrmV2ContactCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2BookingContactResponse**](../Model/CrmV2BookingContactResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsDeleteContact()`

```php
bookingsDeleteContact($booking_provider, $id, $contact_id, $tenant)
```

Removes a contact from a booking for a booking provider

Removes a contact from a booking for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->bookingsDeleteContact($booking_provider, $id, $contact_id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsDeleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
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

## `bookingsGet()`

```php
bookingsGet($id, $tenant): \CompWright\ServiceTitan\Model\CrmV2BookingResponse
```

Gets a booking by ID

Gets a booking by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->bookingsGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2BookingResponse**](../Model/CrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsGetContactList()`

```php
bookingsGetContactList($id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingContactResponse
```

Get a list of contacts for a booking

Get a list of contacts for a booking

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
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
    $result = $apiInstance->bookingsGetContactList($id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetContactList: ', $e->getMessage(), PHP_EOL;
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

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingContactResponse**](../Model/PaginatedResponseOfCrmV2BookingContactResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsGetContactList2()`

```php
bookingsGetContactList2($booking_provider, $id, $tenant, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingContactResponse
```

Get a list of contacts for a booking for a booking provider

Get a list of contacts for a booking for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->bookingsGetContactList2($booking_provider, $id, $tenant, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetContactList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingContactResponse**](../Model/PaginatedResponseOfCrmV2BookingContactResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsGetForProvider()`

```php
bookingsGetForProvider($booking_provider, $id, $tenant): \CompWright\ServiceTitan\Model\CrmV2BookingResponse
```

Gets a booking by ID for a booking provider

Gets a booking by ID for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->bookingsGetForProvider($booking_provider, $id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetForProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2BookingResponse**](../Model/CrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsGetList()`

```php
bookingsGetList($tenant, $ids, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_id, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse
```

Gets a list of bookings

Gets a list of bookings

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$external_id = 'external_id_example'; // string | Filters by booking's external ID
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.

try {
    $result = $apiInstance->bookingsGetList($tenant, $ids, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **external_id** | **string**| Filters by booking&#39;s external ID | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse**](../Model/PaginatedResponseOfCrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsGetList2()`

```php
bookingsGetList2($booking_provider, $tenant, $ids, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_id, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse
```

Gets a list of bookings for a booking provider

Gets a list of bookings for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$external_id = 'external_id_example'; // string | Filters by booking's external ID
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn.

try {
    $result = $apiInstance->bookingsGetList2($booking_provider, $tenant, $ids, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetList2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **external_id** | **string**| Filters by booking&#39;s external ID | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, ModifiedOn, CreatedOn. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse**](../Model/PaginatedResponseOfCrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsUpdate()`

```php
bookingsUpdate($booking_provider, $id, $tenant, $crm_v2_update_booking_request): \CompWright\ServiceTitan\Model\CrmV2BookingResponse
```

Updates a booking for a booking provider

Updates a booking for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_update_booking_request = {"source":"string","name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"},"customerType":{},"start":"string","summary":"string","campaignId":0,"businessUnitId":0,"jobTypeId":0,"priority":{},"isFirstTimeClient":true,"uploadedImages":["string"],"externalId":"string"}; // \CompWright\ServiceTitan\Model\CrmV2UpdateBookingRequest

try {
    $result = $apiInstance->bookingsUpdate($booking_provider, $id, $tenant, $crm_v2_update_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_update_booking_request** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateBookingRequest**](../Model/CrmV2UpdateBookingRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2BookingResponse**](../Model/CrmV2BookingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookingsUpdateBookingContact()`

```php
bookingsUpdateBookingContact($booking_provider, $id, $contact_id, $tenant, $crm_v2_update_booking_contact_request): \CompWright\ServiceTitan\Model\CrmV2UpdateBookingContactRequest
```

Updates a single booking contact for a booking provider

Updates a single booking contact for a booking provider

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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$id = 56; // int | Format - int64.
$contact_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_update_booking_contact_request = {"type":"Phone","value":"string","memo":"string"}; // \CompWright\ServiceTitan\Model\CrmV2UpdateBookingContactRequest

try {
    $result = $apiInstance->bookingsUpdateBookingContact($booking_provider, $id, $contact_id, $tenant, $crm_v2_update_booking_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsUpdateBookingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_provider** | **int**| Format - int64. |
 **id** | **int**| Format - int64. |
 **contact_id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **crm_v2_update_booking_contact_request** | [**\CompWright\ServiceTitan\Model\CrmV2UpdateBookingContactRequest**](../Model/CrmV2UpdateBookingContactRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\CrmV2UpdateBookingContactRequest**](../Model/CrmV2UpdateBookingContactRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
