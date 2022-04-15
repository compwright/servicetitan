# CompWright\ServiceTitan\EquipmentApi

All URIs are relative to https://api-integration.servicetitan.io/pricebook/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**equipmentCreate()**](EquipmentApi.md#equipmentCreate) | **POST** /tenant/{tenant}/equipment | Post to add a new equipment to your pricebook
[**equipmentDelete()**](EquipmentApi.md#equipmentDelete) | **DELETE** /tenant/{tenant}/equipment/{id} | Deletes an equipment from your pricebook
[**equipmentGet()**](EquipmentApi.md#equipmentGet) | **GET** /tenant/{tenant}/equipment/{id} | Get details a equipment in the pricebook.
[**equipmentGetList()**](EquipmentApi.md#equipmentGetList) | **GET** /tenant/{tenant}/equipment | Get data on all of the equipment in the pricebook.
[**equipmentUpdate()**](EquipmentApi.md#equipmentUpdate) | **PATCH** /tenant/{tenant}/equipment/{id} | Edit an existing item in your pricebook


## `equipmentCreate()`

```php
equipmentCreate($tenant, $pricebook_v2_equipment_create_request): \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse
```

Post to add a new equipment to your pricebook

Post to add a new equipment to your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_equipment_create_request = {"equipmentMaterials":[{"skuId":0,"quantity":0}],"recommendations":[{"skuId":0,"type":"Service"}],"upgrades":[0],"code":"string","displayName":"string","description":"string","price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"active":true,"manufacturer":"string","model":"string","manufacturerWarranty":{"duration":0,"description":"string"},"serviceProviderWarranty":{"duration":0,"description":"string"},"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"account":"string","costOfSaleAccount":"string","assetAccount":"string","crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"hours":0,"taxable":true,"cost":0,"unitOfMeasure":"string","isInventory":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequest

try {
    $result = $apiInstance->equipmentCreate($tenant, $pricebook_v2_equipment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->equipmentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **pricebook_v2_equipment_create_request** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequest**](../Model/PricebookV2EquipmentCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse**](../Model/PricebookV2EquipmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equipmentDelete()`

```php
equipmentDelete($id, $tenant)
```

Deletes an equipment from your pricebook

Deletes an equipment from your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Id of the SKU you are deleting
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->equipmentDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->equipmentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Id of the SKU you are deleting |
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

## `equipmentGet()`

```php
equipmentGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse
```

Get details a equipment in the pricebook.

Get details a equipment in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The id of the equipment you are requesting
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided.

try {
    $result = $apiInstance->equipmentGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->equipmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. The id of the equipment you are requesting |
 **tenant** | **int**| Tenant ID |
 **external_data_application_guid** | **string**| Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse**](../Model/PricebookV2EquipmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equipmentGetList()`

```php
equipmentGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2EquipmentResponse
```

Get data on all of the equipment in the pricebook.

Get data on all of the equipment in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, Code, DisplayName, CreatedOn, ModifiedOn, Price, MemberPrice, AddOnPrice, AddOnMemberPrice, MaterialsCost, PrimaryVendor, Cost, Manufacturer, Priority.
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided

try {
    $result = $apiInstance->equipmentGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->equipmentGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, Code, DisplayName, CreatedOn, ModifiedOn, Price, MemberPrice, AddOnPrice, AddOnMemberPrice, MaterialsCost, PrimaryVendor, Cost, Manufacturer, Priority. | [optional]
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **external_data_application_guid** | **string**| Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2EquipmentResponse**](../Model/PaginatedResponseOfPricebookV2EquipmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equipmentUpdate()`

```php
equipmentUpdate($id, $tenant, $pricebook_v2_equipment_update_request): \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse
```

Edit an existing item in your pricebook

Edit an existing item in your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Unique id for the SKU is modified
$tenant = 56; // int | Tenant ID
$pricebook_v2_equipment_update_request = {"code":"string","displayName":"string","description":"string","price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"active":true,"manufacturer":"string","model":"string","manufacturerWarranty":{"duration":0,"description":"string"},"serviceProviderWarranty":{"duration":0,"description":"string"},"assets":[{"type":{},"alias":"string","url":"string"}],"recommendations":[{"skuId":0,"type":"Service"}],"upgrades":[0],"equipmentMaterials":[{"skuId":0,"quantity":0}],"categories":[0],"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"account":"string","costOfSaleAccount":"string","assetAccount":"string","crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"hours":0,"taxable":true,"cost":0,"unitOfMeasure":"string","isInventory":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequest

try {
    $result = $apiInstance->equipmentUpdate($id, $tenant, $pricebook_v2_equipment_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->equipmentUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Unique id for the SKU is modified |
 **tenant** | **int**| Tenant ID |
 **pricebook_v2_equipment_update_request** | [**\CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequest**](../Model/PricebookV2EquipmentUpdateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse**](../Model/PricebookV2EquipmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
