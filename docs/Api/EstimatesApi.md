# CompWright\ServiceTitan\EstimatesApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimatesCreate()**](EstimatesApi.md#estimatesCreate) | **POST** /sales/v2/tenant/{tenant}/estimates | Estimates_Create |
| [**estimatesDeleteItem()**](EstimatesApi.md#estimatesDeleteItem) | **DELETE** /sales/v2/tenant/{tenant}/estimates/{id}/items/{itemId} | Estimates_DeleteItem |
| [**estimatesDismiss()**](EstimatesApi.md#estimatesDismiss) | **PUT** /sales/v2/tenant/{tenant}/estimates/{id}/dismiss | Estimates_Dismiss |
| [**estimatesGet()**](EstimatesApi.md#estimatesGet) | **GET** /sales/v2/tenant/{tenant}/estimates/{id} | Estimates_Get |
| [**estimatesGetItems()**](EstimatesApi.md#estimatesGetItems) | **GET** /sales/v2/tenant/{tenant}/estimates/items | Estimates_GetItems |
| [**estimatesGetList()**](EstimatesApi.md#estimatesGetList) | **GET** /sales/v2/tenant/{tenant}/estimates | Estimates_GetList |
| [**estimatesPutItem()**](EstimatesApi.md#estimatesPutItem) | **PUT** /sales/v2/tenant/{tenant}/estimates/{id}/items | Estimates_PutItem |
| [**estimatesSell()**](EstimatesApi.md#estimatesSell) | **PUT** /sales/v2/tenant/{tenant}/estimates/{id}/sell | Estimates_Sell |
| [**estimatesUnsell()**](EstimatesApi.md#estimatesUnsell) | **PUT** /sales/v2/tenant/{tenant}/estimates/{id}/unsell | Estimates_Unsell |
| [**estimatesUpdate()**](EstimatesApi.md#estimatesUpdate) | **PUT** /sales/v2/tenant/{tenant}/estimates/{id} | Estimates_Update |


## `estimatesCreate()`

```php
estimatesCreate($tenant, $estimates_v2_create_estimate_request): \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse
```

Estimates_Create

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$estimates_v2_create_estimate_request = {"name":"string","summary":"string","tax":0,"items":[{"id":0,"skuId":0,"skuName":"string","parentItemId":0,"description":"string","isAddOn":true,"quantity":0,"unitPrice":0,"skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0}],"externalLinks":[{"name":"string","url":"string"}],"jobId":0}; // \CompWright\ServiceTitan\Model\EstimatesV2CreateEstimateRequest

try {
    $result = $apiInstance->estimatesCreate($tenant, $estimates_v2_create_estimate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **estimates_v2_create_estimate_request** | [**\CompWright\ServiceTitan\Model\EstimatesV2CreateEstimateRequest**](../Model/EstimatesV2CreateEstimateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse**](../Model/EstimatesV2EstimateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesDeleteItem()`

```php
estimatesDeleteItem($id, $item_id, $tenant)
```

Estimates_DeleteItem

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$item_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->estimatesDeleteItem($id, $item_id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesDeleteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **item_id** | **int**| Format - int64. | |
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

## `estimatesDismiss()`

```php
estimatesDismiss($id, $tenant)
```

Estimates_Dismiss

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->estimatesDismiss($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesDismiss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
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

## `estimatesGet()`

```php
estimatesGet($id, $tenant): \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse
```

Estimates_Get

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->estimatesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse**](../Model/EstimatesV2EstimateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesGetItems()`

```php
estimatesGetItems($tenant, $estimate_id, $ids, $active, $created_before, $created_on_or_after, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfEstimatesV2EstimateItemResponse
```

Estimates_GetItems

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$estimate_id = 56; // int | Format - int64.
$ids = 'ids_example'; // string
$active = 'active_example'; // string | Values: [True, Any, False]
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool

try {
    $result = $apiInstance->estimatesGetItems($tenant, $estimate_id, $ids, $active, $created_before, $created_on_or_after, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesGetItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **estimate_id** | **int**| Format - int64. | [optional] |
| **ids** | **string**|  | [optional] |
| **active** | **string**| Values: [True, Any, False] | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **include_total** | **bool**|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfEstimatesV2EstimateItemResponse**](../Model/PaginatedResponseOfEstimatesV2EstimateItemResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesGetList()`

```php
estimatesGetList($tenant, $job_id, $project_id, $job_number, $total_greater, $total_less, $sold_by_id, $sold_by_employee_id, $ids, $page, $page_size, $include_total, $sold_after, $sold_before, $status, $active, $order_by, $order_by_direction, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfEstimatesV2EstimateResponse
```

Estimates_GetList

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$job_id = 56; // int | Format - int64.
$project_id = 56; // int | Format - int64.
$job_number = 'job_number_example'; // string
$total_greater = 3.4; // float | Format - decimal.
$total_less = 3.4; // float | Format - decimal.
$sold_by_id = 56; // int | Format - int64.
$sold_by_employee_id = 56; // int | Format - int64.
$ids = 'ids_example'; // string
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool
$sold_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$sold_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$status = 'status_example'; // string
$active = 'active_example'; // string | Values: [True, Any, False]
$order_by = 'order_by_example'; // string
$order_by_direction = 'order_by_direction_example'; // string
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->estimatesGetList($tenant, $job_id, $project_id, $job_number, $total_greater, $total_less, $sold_by_id, $sold_by_employee_id, $ids, $page, $page_size, $include_total, $sold_after, $sold_before, $status, $active, $order_by, $order_by_direction, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **job_id** | **int**| Format - int64. | [optional] |
| **project_id** | **int**| Format - int64. | [optional] |
| **job_number** | **string**|  | [optional] |
| **total_greater** | **float**| Format - decimal. | [optional] |
| **total_less** | **float**| Format - decimal. | [optional] |
| **sold_by_id** | **int**| Format - int64. | [optional] |
| **sold_by_employee_id** | **int**| Format - int64. | [optional] |
| **ids** | **string**|  | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **include_total** | **bool**|  | [optional] |
| **sold_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **sold_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **status** | **string**|  | [optional] |
| **active** | **string**| Values: [True, Any, False] | [optional] |
| **order_by** | **string**|  | [optional] |
| **order_by_direction** | **string**|  | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfEstimatesV2EstimateResponse**](../Model/PaginatedResponseOfEstimatesV2EstimateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesPutItem()`

```php
estimatesPutItem($id, $tenant, $estimates_v2_estimate_item_create_update_request): \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse
```

Estimates_PutItem

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$estimates_v2_estimate_item_create_update_request = {"id":0,"skuId":0,"skuName":"string","parentItemId":0,"description":"string","isAddOn":true,"quantity":0,"unitPrice":0,"skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0}; // \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest

try {
    $result = $apiInstance->estimatesPutItem($id, $tenant, $estimates_v2_estimate_item_create_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesPutItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **estimates_v2_estimate_item_create_update_request** | [**\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest**](../Model/EstimatesV2EstimateItemCreateUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse**](../Model/EstimatesV2EstimateItemUpdateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesSell()`

```php
estimatesSell($id, $tenant, $estimates_v2_sell_request): \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse
```

Estimates_Sell

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$estimates_v2_sell_request = {"soldBy":0}; // \CompWright\ServiceTitan\Model\EstimatesV2SellRequest

try {
    $result = $apiInstance->estimatesSell($id, $tenant, $estimates_v2_sell_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesSell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **estimates_v2_sell_request** | [**\CompWright\ServiceTitan\Model\EstimatesV2SellRequest**](../Model/EstimatesV2SellRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse**](../Model/EstimatesV2EstimateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimatesUnsell()`

```php
estimatesUnsell($id, $tenant)
```

Estimates_Unsell

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->estimatesUnsell($id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesUnsell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
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

## `estimatesUpdate()`

```php
estimatesUpdate($id, $tenant, $estimates_v2_update_estimate_request): \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse
```

Estimates_Update

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


$apiInstance = new CompWright\ServiceTitan\Api\EstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$estimates_v2_update_estimate_request = {"name":"string","summary":"string","tax":0,"items":[{"id":0,"skuId":0,"skuName":"string","parentItemId":0,"description":"string","isAddOn":true,"quantity":0,"unitPrice":0,"skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0}],"externalLinks":[{"name":"string","url":"string"}]}; // \CompWright\ServiceTitan\Model\EstimatesV2UpdateEstimateRequest

try {
    $result = $apiInstance->estimatesUpdate($id, $tenant, $estimates_v2_update_estimate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimatesApi->estimatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **estimates_v2_update_estimate_request** | [**\CompWright\ServiceTitan\Model\EstimatesV2UpdateEstimateRequest**](../Model/EstimatesV2UpdateEstimateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EstimatesV2EstimateResponse**](../Model/EstimatesV2EstimateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
