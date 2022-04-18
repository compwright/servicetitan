# CompWright\ServiceTitan\PurchaseOrdersApi

All URIs are relative to https://api-integration.servicetitan.io/inventory/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrdersCreate()**](PurchaseOrdersApi.md#purchaseOrdersCreate) | **POST** /tenant/{tenant}/purchase-orders | Create a new purchase order
[**purchaseOrdersGetById()**](PurchaseOrdersApi.md#purchaseOrdersGetById) | **GET** /tenant/{tenant}/purchase-orders/{id} | Get purchase order by Id
[**purchaseOrdersGetList()**](PurchaseOrdersApi.md#purchaseOrdersGetList) | **GET** /tenant/{tenant}/purchase-orders | Get a list of purchase orders
[**purchaseOrdersUpdate()**](PurchaseOrdersApi.md#purchaseOrdersUpdate) | **PATCH** /tenant/{tenant}/purchase-orders/{id} | Update an existing purchase order


## `purchaseOrdersCreate()`

```php
purchaseOrdersCreate($tenant, $inventory_v2_create_purchase_order_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Create a new purchase order

Create a new purchase order

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


$apiInstance = new CompWright\ServiceTitan\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$inventory_v2_create_purchase_order_request = {"vendorId":0,"typeId":0,"businessUnitId":0,"inventoryLocationId":0,"jobId":0,"technicianId":0,"projectId":0,"shipTo":{"description":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"}},"vendorInvoiceNumber":"string","impactsTechnicianPayroll":true,"memo":"string","date":"string","requiredOn":"string","tax":0,"shipping":0,"items":[{"skuId":0,"description":"string","vendorPartNumber":"string","quantity":0,"cost":0}]}; // \CompWright\ServiceTitan\Model\InventoryV2CreatePurchaseOrderRequest

try {
    $result = $apiInstance->purchaseOrdersCreate($tenant, $inventory_v2_create_purchase_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **inventory_v2_create_purchase_order_request** | [**\CompWright\ServiceTitan\Model\InventoryV2CreatePurchaseOrderRequest**](../Model/InventoryV2CreatePurchaseOrderRequest.md)|  | [optional]

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

## `purchaseOrdersGetById()`

```php
purchaseOrdersGetById($id, $tenant): \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderResponse
```

Get purchase order by Id

Get purchase order by Id

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


$apiInstance = new CompWright\ServiceTitan\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->purchaseOrdersGetById($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderResponse**](../Model/InventoryV2PurchaseOrderResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrdersGetList()`

```php
purchaseOrdersGetList($tenant, $ids, $status, $number, $job_id, $technician_id, $project_id, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $date_on_or_after, $date_before, $sent_on_or_after, $sent_before, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2PurchaseOrderResponse
```

Get a list of purchase orders

Get a list of purchase orders

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


$apiInstance = new CompWright\ServiceTitan\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$status = 'status_example'; // string | Filters by PO status
$number = 'number_example'; // string | Filters by PO number
$job_id = 56; // int | Format - int64. Filters by JobId associated with PO
$technician_id = 56; // int | Format - int64. Filter by TechnicianId associated with PO
$project_id = 56; // int | Format - int64. Filter by ProjectId associated with PO
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$date_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return POs with date on or after certain date/time
$date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return POs with date before certain date/time
$sent_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return POs sent on or after certain date/time
$sent_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Return POs sent before certain date/time
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->purchaseOrdersGetList($tenant, $ids, $status, $number, $job_id, $technician_id, $project_id, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $date_on_or_after, $date_before, $sent_on_or_after, $sent_before, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional]
 **status** | **string**| Filters by PO status | [optional]
 **number** | **string**| Filters by PO number | [optional]
 **job_id** | **int**| Format - int64. Filters by JobId associated with PO | [optional]
 **technician_id** | **int**| Format - int64. Filter by TechnicianId associated with PO | [optional]
 **project_id** | **int**| Format - int64. Filter by ProjectId associated with PO | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional]
 **date_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return POs with date on or after certain date/time | [optional]
 **date_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return POs with date before certain date/time | [optional]
 **sent_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return POs sent on or after certain date/time | [optional]
 **sent_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return POs sent before certain date/time | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2PurchaseOrderResponse**](../Model/PaginatedResponseOfInventoryV2PurchaseOrderResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrdersUpdate()`

```php
purchaseOrdersUpdate($id, $tenant, $inventory_v2_update_purchase_order_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Update an existing purchase order

Update an existing purchase order

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


$apiInstance = new CompWright\ServiceTitan\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$inventory_v2_update_purchase_order_request = {"vendorId":0,"typeId":0,"businessUnitId":0,"inventoryLocationId":0,"jobId":0,"technicianId":0,"projectId":0,"shipTo":{"description":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"}},"vendorInvoiceNumber":"string","impactsTechnicianPayroll":true,"memo":"string","date":"string","requiredOn":"string","tax":0,"shipping":0,"items":[{"id":0,"skuId":0,"description":"string","vendorPartNumber":"string","quantity":0,"cost":0}]}; // \CompWright\ServiceTitan\Model\InventoryV2UpdatePurchaseOrderRequest

try {
    $result = $apiInstance->purchaseOrdersUpdate($id, $tenant, $inventory_v2_update_purchase_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **inventory_v2_update_purchase_order_request** | [**\CompWright\ServiceTitan\Model\InventoryV2UpdatePurchaseOrderRequest**](../Model/InventoryV2UpdatePurchaseOrderRequest.md)|  | [optional]

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
