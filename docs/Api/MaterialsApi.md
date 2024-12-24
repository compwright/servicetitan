# CompWright\ServiceTitan\MaterialsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**materialsCreate()**](MaterialsApi.md#materialsCreate) | **POST** /pricebook/v2/tenant/{tenant}/materials | Add a new Materials to your pricebook |
| [**materialsDelete()**](MaterialsApi.md#materialsDelete) | **DELETE** /pricebook/v2/tenant/{tenant}/materials/{id} | Deletes a material from your pricebook |
| [**materialsGet()**](MaterialsApi.md#materialsGet) | **GET** /pricebook/v2/tenant/{tenant}/materials/{id} | Get details on a material in the pricebook. |
| [**materialsGetList()**](MaterialsApi.md#materialsGetList) | **GET** /pricebook/v2/tenant/{tenant}/materials | Get details on materials in the pricebook. |
| [**materialsUpdate()**](MaterialsApi.md#materialsUpdate) | **PATCH** /pricebook/v2/tenant/{tenant}/materials/{id} | Edit an existing item in your pricebook |


## `materialsCreate()`

```php
materialsCreate($tenant, $pricebook_v2_material_create_request): \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse
```

Add a new Materials to your pricebook

Add a new Materials to your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_material_create_request = {"code":"string","displayName":"string","description":"string","cost":0,"active":true,"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"hours":0,"commissionBonus":0,"paysCommission":true,"deductAsJobCost":true,"unitOfMeasure":"string","isInventory":true,"account":"string","costOfSaleAccount":"string","assetAccount":"string","taxable":true,"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2MaterialCreateRequest

try {
    $result = $apiInstance->materialsCreate($tenant, $pricebook_v2_material_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_material_create_request** | [**\CompWright\ServiceTitan\Model\PricebookV2MaterialCreateRequest**](../Model/PricebookV2MaterialCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2MaterialResponse**](../Model/PricebookV2MaterialResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `materialsDelete()`

```php
materialsDelete($id, $tenant)
```

Deletes a material from your pricebook

Deletes a material from your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Id of the SKU you are deleting
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->materialsDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. Id of the SKU you are deleting | |
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

## `materialsGet()`

```php
materialsGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse
```

Get details on a material in the pricebook.

Get details on a material in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The id of the material you are requesting
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided.

try {
    $result = $apiInstance->materialsGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. The id of the material you are requesting | |
| **tenant** | **int**| Tenant ID | |
| **external_data_application_guid** | **string**| Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2MaterialResponse**](../Model/PricebookV2MaterialResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `materialsGetList()`

```php
materialsGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2MaterialResponse
```

Get details on materials in the pricebook.

Get details on materials in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\MaterialsApi(
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
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$active = 'active_example'; // string | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided

try {
    $result = $apiInstance->materialsGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |
| **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, Code, DisplayName, CreatedOn, ModifiedOn, Price, MemberPrice, AddOnPrice, AddOnMemberPrice, MaterialsCost, PrimaryVendor, Cost, Manufacturer, Priority. | [optional] |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional] |
| **active** | **string**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional] |
| **external_data_application_guid** | **string**| Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2MaterialResponse**](../Model/PaginatedResponseOfPricebookV2MaterialResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `materialsUpdate()`

```php
materialsUpdate($id, $tenant, $pricebook_v2_material_update_request): \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse
```

Edit an existing item in your pricebook

Edit an existing item in your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Unique id for the SKU is modified
$tenant = 56; // int | Tenant ID
$pricebook_v2_material_update_request = {"code":"string","displayName":"string","description":"string","cost":0,"active":true,"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"hours":0,"commissionBonus":0,"paysCommission":true,"deductAsJobCost":true,"unitOfMeasure":"string","isInventory":true,"account":"string","costOfSaleAccount":"string","assetAccount":"string","taxable":true,"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2MaterialUpdateRequest

try {
    $result = $apiInstance->materialsUpdate($id, $tenant, $pricebook_v2_material_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. Unique id for the SKU is modified | |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_material_update_request** | [**\CompWright\ServiceTitan\Model\PricebookV2MaterialUpdateRequest**](../Model/PricebookV2MaterialUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2MaterialResponse**](../Model/PricebookV2MaterialResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
