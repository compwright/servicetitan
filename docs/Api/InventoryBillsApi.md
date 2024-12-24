# CompWright\ServiceTitan\InventoryBillsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inventoryBillsGetList()**](InventoryBillsApi.md#inventoryBillsGetList) | **GET** /accounting/v2/tenant/{tenant}/inventory-bills | InventoryBills_GetList |
| [**inventoryBillsUpdateCustomFields()**](InventoryBillsApi.md#inventoryBillsUpdateCustomFields) | **PATCH** /accounting/v2/tenant/{tenant}/inventory-bills/custom-fields | InventoryBills_UpdateCustomFields |


## `inventoryBillsGetList()`

```php
inventoryBillsGetList($tenant, $ids, $batch_id, $batch_number, $bill_number, $business_unit_ids, $custom_field_fields, $custom_field_operator, $date_from, $date_to, $job_number, $purchase_order_number, $purchase_order_types, $sync_statuses, $min_cost, $max_cost, $page, $page_size, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $include_total): \CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponse[]
```

InventoryBills_GetList

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


$apiInstance = new CompWright\ServiceTitan\Api\InventoryBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$batch_id = 56; // int | Format - int64.
$batch_number = 56; // int | Format - int32.
$bill_number = 'bill_number_example'; // string
$business_unit_ids = 'business_unit_ids_example'; // string
$custom_field_fields = array('key' => 'custom_field_fields_example'); // array<string,string> | Name, value
$custom_field_operator = 'custom_field_operator_example'; // string | Can be \"or\" or \"null\" or \"and\"\\ Values: [And, Or]
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$job_number = 'job_number_example'; // string
$purchase_order_number = 'purchase_order_number_example'; // string
$purchase_order_types = 'purchase_order_types_example'; // string
$sync_statuses = array(new \CompWright\ServiceTitan\Model\\CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus()); // \CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus[]
$min_cost = 3.4; // float | Format - decimal.
$max_cost = 3.4; // float | Format - decimal.
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$include_total = True; // bool

try {
    $result = $apiInstance->inventoryBillsGetList($tenant, $ids, $batch_id, $batch_number, $bill_number, $business_unit_ids, $custom_field_fields, $custom_field_operator, $date_from, $date_to, $job_number, $purchase_order_number, $purchase_order_types, $sync_statuses, $min_cost, $max_cost, $page, $page_size, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBillsApi->inventoryBillsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**|  | [optional] |
| **batch_id** | **int**| Format - int64. | [optional] |
| **batch_number** | **int**| Format - int32. | [optional] |
| **bill_number** | **string**|  | [optional] |
| **business_unit_ids** | **string**|  | [optional] |
| **custom_field_fields** | [**array<string,string>**](../Model/string.md)| Name, value | [optional] |
| **custom_field_operator** | **string**| Can be \&quot;or\&quot; or \&quot;null\&quot; or \&quot;and\&quot;\\ Values: [And, Or] | [optional] |
| **date_from** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **date_to** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **job_number** | **string**|  | [optional] |
| **purchase_order_number** | **string**|  | [optional] |
| **purchase_order_types** | **string**|  | [optional] |
| **sync_statuses** | [**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus[]**](../Model/\CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus.md)|  | [optional] |
| **min_cost** | **float**| Format - decimal. | [optional] |
| **max_cost** | **float**| Format - decimal. | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **include_total** | **bool**|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponse[]**](../Model/AccountingV2InventoryBillResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBillsUpdateCustomFields()`

```php
inventoryBillsUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request)
```

InventoryBills_UpdateCustomFields

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


$apiInstance = new CompWright\ServiceTitan\Api\InventoryBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_custom_field_update_request = {"operations":[{"objectId":0,"customFields":[{"name":"string","value":"string"}]}]}; // \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest

try {
    $apiInstance->inventoryBillsUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBillsApi->inventoryBillsUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **accounting_v2_custom_field_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest**](../Model/AccountingV2CustomFieldUpdateRequest.md)|  | [optional] |

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
