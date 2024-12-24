# CompWright\ServiceTitan\ReceiptsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receiptsGet()**](ReceiptsApi.md#receiptsGet) | **GET** /inventory/v2/tenant/{tenant}/receipts | Get a list of receipts |
| [**receiptsUpdateCustomFields()**](ReceiptsApi.md#receiptsUpdateCustomFields) | **PATCH** /inventory/v2/tenant/{tenant}/receipts/custom-fields | Update custom fields on receipts |


## `receiptsGet()`

```php
receiptsGet($tenant, $ids, $active, $number, $vendor_invoice_number, $bill_id, $batch_id, $vendor_ids, $business_unit_ids, $inventory_location_ids, $purchase_order_ids, $sync_statuses, $custom_fields_fields, $custom_fields_operator, $received_on_or_after, $received_before, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2InventoryReceiptResponse
```

Get a list of receipts

Get a list of receipts

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


$apiInstance = new CompWright\ServiceTitan\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$active = 'active_example'; // string | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$number = 'number_example'; // string | Number filter
$vendor_invoice_number = 'vendor_invoice_number_example'; // string | Vendor invoice number filter
$bill_id = 56; // int | Format - int64. BillId filter
$batch_id = 56; // int | Format - int64. BatchId filter
$vendor_ids = 'vendor_ids_example'; // string | Filter by a collection of vendors
$business_unit_ids = 'business_unit_ids_example'; // string | Filter by a collection of business units
$inventory_location_ids = 'inventory_location_ids_example'; // string | Filter by a collection of inventory locations
$purchase_order_ids = 'purchase_order_ids_example'; // string | Filter by a collection of purchase orders
$sync_statuses = 'sync_statuses_example'; // string | Filter by a collection of sync statuses
$custom_fields_fields = array('key' => 'custom_fields_fields_example'); // array<string,string> | Collection of custom field pairs (name, value) to filter by
$custom_fields_operator = 'custom_fields_operator_example'; // string | Can be \"Or\" or \"And\"\\ Values: [And, Or]
$received_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return receipts with received date on or after certain date/time
$received_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return receipts with received date before certain date/time
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->receiptsGet($tenant, $ids, $active, $number, $vendor_invoice_number, $bill_id, $batch_id, $vendor_ids, $business_unit_ids, $inventory_location_ids, $purchase_order_ids, $sync_statuses, $custom_fields_fields, $custom_fields_operator, $received_on_or_after, $received_before, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->receiptsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **active** | **string**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional] |
| **number** | **string**| Number filter | [optional] |
| **vendor_invoice_number** | **string**| Vendor invoice number filter | [optional] |
| **bill_id** | **int**| Format - int64. BillId filter | [optional] |
| **batch_id** | **int**| Format - int64. BatchId filter | [optional] |
| **vendor_ids** | **string**| Filter by a collection of vendors | [optional] |
| **business_unit_ids** | **string**| Filter by a collection of business units | [optional] |
| **inventory_location_ids** | **string**| Filter by a collection of inventory locations | [optional] |
| **purchase_order_ids** | **string**| Filter by a collection of purchase orders | [optional] |
| **sync_statuses** | **string**| Filter by a collection of sync statuses | [optional] |
| **custom_fields_fields** | [**array<string,string>**](../Model/string.md)| Collection of custom field pairs (name, value) to filter by | [optional] |
| **custom_fields_operator** | **string**| Can be \&quot;Or\&quot; or \&quot;And\&quot;\\ Values: [And, Or] | [optional] |
| **received_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return receipts with received date on or after certain date/time | [optional] |
| **received_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return receipts with received date before certain date/time | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2InventoryReceiptResponse**](../Model/PaginatedResponseOfInventoryV2InventoryReceiptResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiptsUpdateCustomFields()`

```php
receiptsUpdateCustomFields($tenant, $inventory_v2_custom_field_update_request)
```

Update custom fields on receipts

Update custom fields on receipts

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


$apiInstance = new CompWright\ServiceTitan\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$inventory_v2_custom_field_update_request = {"operations":[{"objectId":0,"customFields":[{"name":"string","value":"string"}]}]}; // \CompWright\ServiceTitan\Model\InventoryV2CustomFieldUpdateRequest

try {
    $apiInstance->receiptsUpdateCustomFields($tenant, $inventory_v2_custom_field_update_request);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->receiptsUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **inventory_v2_custom_field_update_request** | [**\CompWright\ServiceTitan\Model\InventoryV2CustomFieldUpdateRequest**](../Model/InventoryV2CustomFieldUpdateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
