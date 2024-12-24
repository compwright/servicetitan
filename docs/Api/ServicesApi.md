# CompWright\ServiceTitan\ServicesApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesCreate()**](ServicesApi.md#servicesCreate) | **POST** /pricebook/v2/tenant/{tenant}/services | Post to add a new service to your pricebook |
| [**servicesDelete()**](ServicesApi.md#servicesDelete) | **DELETE** /pricebook/v2/tenant/{tenant}/services/{id} | Deletes a service from your pricebook |
| [**servicesGet()**](ServicesApi.md#servicesGet) | **GET** /pricebook/v2/tenant/{tenant}/services/{id} | Get details a service in the pricebook. |
| [**servicesGetList()**](ServicesApi.md#servicesGetList) | **GET** /pricebook/v2/tenant/{tenant}/services | Get data on all of the services in the pricebook. |
| [**servicesUpdate()**](ServicesApi.md#servicesUpdate) | **PATCH** /pricebook/v2/tenant/{tenant}/services/{id} | Edit an existing item in your pricebook |


## `servicesCreate()`

```php
servicesCreate($tenant, $pricebook_v2_service_create_request): \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse
```

Post to add a new service to your pricebook

Post to add a new service to your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_service_create_request = {"serviceMaterials":[{"skuId":0,"quantity":0}],"serviceEquipment":[{"skuId":0,"quantity":0}],"recommendations":[0],"upgrades":[0],"code":"string","displayName":"string","description":"string","warranty":{"duration":0,"description":"string"},"categories":[0],"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"taxable":true,"account":"string","hours":0,"isLabor":true,"assets":[{"type":{},"alias":"string","url":"string"}],"active":true,"crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2ServiceCreateRequest

try {
    $result = $apiInstance->servicesCreate($tenant, $pricebook_v2_service_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_service_create_request** | [**\CompWright\ServiceTitan\Model\PricebookV2ServiceCreateRequest**](../Model/PricebookV2ServiceCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2ServiceResponse**](../Model/PricebookV2ServiceResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesDelete()`

```php
servicesDelete($id, $tenant)
```

Deletes a service from your pricebook

Deletes a service from your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Id of the SKU you are deleting
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->servicesDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDelete: ', $e->getMessage(), PHP_EOL;
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

## `servicesGet()`

```php
servicesGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse
```

Get details a service in the pricebook.

Get details a service in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The id of the service you are requesting
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided.

try {
    $result = $apiInstance->servicesGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. The id of the service you are requesting | |
| **tenant** | **int**| Tenant ID | |
| **external_data_application_guid** | **string**| Format - guid. Items that are created with a specific guid, could be fetched/updated/removed only when the same application guid is provided. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2ServiceResponse**](../Model/PricebookV2ServiceResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesGetList()`

```php
servicesGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2ServiceResponse
```

Get data on all of the services in the pricebook.

Get data on all of the services in the pricebook.

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


$apiInstance = new CompWright\ServiceTitan\Api\ServicesApi(
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
    $result = $apiInstance->servicesGetList($tenant, $page, $page_size, $include_total, $sort, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $active, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesGetList: ', $e->getMessage(), PHP_EOL;
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

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2ServiceResponse**](../Model/PaginatedResponseOfPricebookV2ServiceResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesUpdate()`

```php
servicesUpdate($id, $tenant, $pricebook_v2_service_update_request): \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse
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


$apiInstance = new CompWright\ServiceTitan\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Unique id for the SKU is modified
$tenant = 56; // int | Tenant ID
$pricebook_v2_service_update_request = {"code":"string","displayName":"string","description":"string","warranty":{"duration":0,"description":"string"},"categories":[0],"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"taxable":true,"account":"string","hours":0,"isLabor":true,"recommendations":[0],"upgrades":[0],"assets":[{"type":{},"alias":"string","url":"string"}],"serviceMaterials":[{"skuId":0,"quantity":0}],"serviceEquipment":[{"skuId":0,"quantity":0}],"active":true,"crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\PricebookV2ServiceUpdateRequest

try {
    $result = $apiInstance->servicesUpdate($id, $tenant, $pricebook_v2_service_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. Unique id for the SKU is modified | |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_service_update_request** | [**\CompWright\ServiceTitan\Model\PricebookV2ServiceUpdateRequest**](../Model/PricebookV2ServiceUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2ServiceResponse**](../Model/PricebookV2ServiceResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
