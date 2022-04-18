# CompWright\ServiceTitan\VendorsApi

All URIs are relative to https://api-integration.servicetitan.io/inventory/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**vendorsCreate()**](VendorsApi.md#vendorsCreate) | **POST** /tenant/{tenant}/vendors | Create a new vendor
[**vendorsGetById()**](VendorsApi.md#vendorsGetById) | **GET** /tenant/{tenant}/vendors/{id} | Get vendor by Id
[**vendorsGetList()**](VendorsApi.md#vendorsGetList) | **GET** /tenant/{tenant}/vendors | Get a list of vendors
[**vendorsUpdate()**](VendorsApi.md#vendorsUpdate) | **PATCH** /tenant/{tenant}/vendors/{id} | Update an existing vendor


## `vendorsCreate()`

```php
vendorsCreate($tenant, $inventory_v2_create_vendor_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Create a new vendor

Create a new vendor

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


$apiInstance = new CompWright\ServiceTitan\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$inventory_v2_create_vendor_request = {"name":"string","active":true,"memo":"string","firstName":"string","lastName":"string","phone":"string","email":"string","fax":"string","isTruckReplenishment":true,"deliveryOption":{},"taxRate":0,"restrictedMobileCreation":true,"vendorQuickbooksItem":"string","paymentTermId":0,"remittanceVendorId":0,"address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"},"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"tags":[{"tagTypeId":0}],"vendorContacts":[{"name":"string","email":"string"}]}; // \CompWright\ServiceTitan\Model\InventoryV2CreateVendorRequest

try {
    $result = $apiInstance->vendorsCreate($tenant, $inventory_v2_create_vendor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **inventory_v2_create_vendor_request** | [**\CompWright\ServiceTitan\Model\InventoryV2CreateVendorRequest**](../Model/InventoryV2CreateVendorRequest.md)|  | [optional]

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

## `vendorsGetById()`

```php
vendorsGetById($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\InventoryV2VendorResponse
```

Get vendor by Id

Get vendor by Id

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


$apiInstance = new CompWright\ServiceTitan\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid.

try {
    $result = $apiInstance->vendorsGetById($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **external_data_application_guid** | **string**| Format - guid. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\InventoryV2VendorResponse**](../Model/InventoryV2VendorResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorsGetList()`

```php
vendorsGetList($tenant, $page, $page_size, $include_total, $id, $external_data_application_guid, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2VendorResponse
```

Get a list of vendors

Get a list of vendors

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


$apiInstance = new CompWright\ServiceTitan\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$id = 56; // int | Format - int64. Id to filter by
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)

try {
    $result = $apiInstance->vendorsGetList($tenant, $page, $page_size, $include_total, $id, $external_data_application_guid, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **id** | **int**| Format - int64. Id to filter by | [optional]
 **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2VendorResponse**](../Model/PaginatedResponseOfInventoryV2VendorResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorsUpdate()`

```php
vendorsUpdate($id, $tenant, $inventory_v2_update_vendor_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Update an existing vendor

Update an existing vendor

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


$apiInstance = new CompWright\ServiceTitan\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Vendor Id
$tenant = 56; // int | Tenant ID
$inventory_v2_update_vendor_request = {"name":"string","active":true,"memo":"string","firstName":"string","lastName":"string","phone":"string","email":"string","fax":"string","isTruckReplenishment":true,"deliveryOption":{},"taxRate":0,"restrictedMobileCreation":true,"vendorQuickbooksItem":"string","paymentTermId":0,"remittanceVendorId":0,"address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"},"tags":[{"tagTypeId":0}],"vendorContacts":[{"id":0,"name":"string","email":"string"}],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest | Update Vendor Request

try {
    $result = $apiInstance->vendorsUpdate($id, $tenant, $inventory_v2_update_vendor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Vendor Id |
 **tenant** | **int**| Tenant ID |
 **inventory_v2_update_vendor_request** | [**\CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest**](../Model/InventoryV2UpdateVendorRequest.md)| Update Vendor Request | [optional]

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
