# CompWright\ServiceTitan\CategoriesApi

All URIs are relative to https://api-integration.servicetitan.io/pricebook/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesCreate()**](CategoriesApi.md#categoriesCreate) | **POST** /tenant/{tenant}/categories | Post to add a new category to your pricebook
[**categoriesDelete()**](CategoriesApi.md#categoriesDelete) | **DELETE** /tenant/{tenant}/categories/{id} | Deletes an existing category from your pricebook
[**categoriesGet()**](CategoriesApi.md#categoriesGet) | **GET** /tenant/{tenant}/categories/{id} | Gets category details
[**categoriesGetList()**](CategoriesApi.md#categoriesGetList) | **GET** /tenant/{tenant}/categories | GET the categories in your pricebook
[**categoriesUpdate()**](CategoriesApi.md#categoriesUpdate) | **PATCH** /tenant/{tenant}/categories/{id} | Edits an existing category in your pricebook


## `categoriesCreate()`

```php
categoriesCreate($tenant, $pricebook_v2_category_create_request): \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse
```

Post to add a new category to your pricebook

Post to add a new category to your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_category_create_request = {"name":"string","active":true,"description":"string","parentId":0,"position":0,"image":"string","categoryType":{},"businessUnitIds":[0],"skuImages":["string"],"skuVideos":["string"]}; // \CompWright\ServiceTitan\Model\PricebookV2CategoryCreateRequest

try {
    $result = $apiInstance->categoriesCreate($tenant, $pricebook_v2_category_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **pricebook_v2_category_create_request** | [**\CompWright\ServiceTitan\Model\PricebookV2CategoryCreateRequest**](../Model/PricebookV2CategoryCreateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2CategoryResponse**](../Model/PricebookV2CategoryResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesDelete()`

```php
categoriesDelete($id, $tenant)
```

Deletes an existing category from your pricebook

Deletes an existing category from your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Id of the SKU you are deleting
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->categoriesDelete($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesDelete: ', $e->getMessage(), PHP_EOL;
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

## `categoriesGet()`

```php
categoriesGet($id, $tenant): \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse
```

Gets category details

Gets category details

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


$apiInstance = new CompWright\ServiceTitan\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. The id of the service you are requesting
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->categoriesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. The id of the service you are requesting |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2CategoryResponse**](../Model/PricebookV2CategoryResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGetList()`

```php
categoriesGetList($tenant, $page, $page_size, $include_total, $sort, $category_type): \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2CategoryResponse
```

GET the categories in your pricebook

GET the categories in your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned
$sort = 'sort_example'; // string | Applies sorting by specified fields
$category_type = 'category_type_example'; // OneOfPricebookV2CategoryType | Values: [Services, Materials]

try {
    $result = $apiInstance->categoriesGetList($tenant, $page, $page_size, $include_total, $sort, $category_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]
 **sort** | **string**| Applies sorting by specified fields | [optional]
 **category_type** | **OneOfPricebookV2CategoryType**| Values: [Services, Materials] | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2CategoryResponse**](../Model/PaginatedResponseOfPricebookV2CategoryResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesUpdate()`

```php
categoriesUpdate($id, $tenant, $pricebook_v2_category_update_request): \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse
```

Edits an existing category in your pricebook

Edits an existing category in your pricebook

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


$apiInstance = new CompWright\ServiceTitan\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Unique id for the SKU is modified
$tenant = 56; // int | Tenant ID
$pricebook_v2_category_update_request = {"name":"string","active":true,"description":"string","parentId":0,"position":0,"image":"string","categoryType":{},"businessUnitIds":[0],"skuImages":["string"],"skuVideos":["string"]}; // \CompWright\ServiceTitan\Model\PricebookV2CategoryUpdateRequest

try {
    $result = $apiInstance->categoriesUpdate($id, $tenant, $pricebook_v2_category_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Unique id for the SKU is modified |
 **tenant** | **int**| Tenant ID |
 **pricebook_v2_category_update_request** | [**\CompWright\ServiceTitan\Model\PricebookV2CategoryUpdateRequest**](../Model/PricebookV2CategoryUpdateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2CategoryResponse**](../Model/PricebookV2CategoryResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
