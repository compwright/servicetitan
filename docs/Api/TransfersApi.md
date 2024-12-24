# CompWright\ServiceTitan\TransfersApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transfersGet()**](TransfersApi.md#transfersGet) | **GET** /inventory/v2/tenant/{tenant}/transfers | Get a list of transfers |
| [**transfersUpdateCustomFields()**](TransfersApi.md#transfersUpdateCustomFields) | **PATCH** /inventory/v2/tenant/{tenant}/transfers/custom-fields | Update custom fields on transfers |


## `transfersGet()`

```php
transfersGet($tenant, $ids, $statuses, $number, $reference_number, $batch_id, $transfer_type_ids, $from_location_ids, $to_location_ids, $sync_statuses, $custom_fields_fields, $custom_fields_operator, $date_on_or_after, $date_before, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2InventoryTransferResponse
```

Get a list of transfers

Get a list of transfers

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


$apiInstance = new CompWright\ServiceTitan\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)
$statuses = 'statuses_example'; // string | Filter by a collection of statuses
$number = 'number_example'; // string | Number filter
$reference_number = 'reference_number_example'; // string | Reference number filter
$batch_id = 56; // int | Format - int64. Batch filter
$transfer_type_ids = 'transfer_type_ids_example'; // string | Filter by a collection of transfer types
$from_location_ids = 'from_location_ids_example'; // string | Filter by a collection of From field locations
$to_location_ids = 'to_location_ids_example'; // string | Filter by a collection of To field locations
$sync_statuses = 'sync_statuses_example'; // string | Filter by a collection of sync statuses
$custom_fields_fields = array('key' => 'custom_fields_fields_example'); // array<string,string> | Collection of custom field pairs (name, value) to filter by
$custom_fields_operator = 'custom_fields_operator_example'; // string | Can be \"Or\" or \"And\"\\ Values: [And, Or]
$date_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return transfers with date on or after certain date/time
$date_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return transfers with date before certain date/time
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->transfersGet($tenant, $ids, $statuses, $number, $reference_number, $batch_id, $transfer_type_ids, $from_location_ids, $to_location_ids, $sync_statuses, $custom_fields_fields, $custom_fields_operator, $date_on_or_after, $date_before, $created_on_or_after, $created_before, $modified_on_or_after, $modified_before, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**| Perform lookup by multiple IDs (maximum 50) | [optional] |
| **statuses** | **string**| Filter by a collection of statuses | [optional] |
| **number** | **string**| Number filter | [optional] |
| **reference_number** | **string**| Reference number filter | [optional] |
| **batch_id** | **int**| Format - int64. Batch filter | [optional] |
| **transfer_type_ids** | **string**| Filter by a collection of transfer types | [optional] |
| **from_location_ids** | **string**| Filter by a collection of From field locations | [optional] |
| **to_location_ids** | **string**| Filter by a collection of To field locations | [optional] |
| **sync_statuses** | **string**| Filter by a collection of sync statuses | [optional] |
| **custom_fields_fields** | [**array<string,string>**](../Model/string.md)| Collection of custom field pairs (name, value) to filter by | [optional] |
| **custom_fields_operator** | **string**| Can be \&quot;Or\&quot; or \&quot;And\&quot;\\ Values: [And, Or] | [optional] |
| **date_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return transfers with date on or after certain date/time | [optional] |
| **date_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return transfers with date before certain date/time | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC) | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC) | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC) | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC) | [optional] |
| **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional] |
| **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional] |
| **include_total** | **bool**| Whether total count should be returned | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2InventoryTransferResponse**](../Model/PaginatedResponseOfInventoryV2InventoryTransferResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfersUpdateCustomFields()`

```php
transfersUpdateCustomFields($tenant, $inventory_v2_custom_field_update_request)
```

Update custom fields on transfers

Update custom fields on transfers

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


$apiInstance = new CompWright\ServiceTitan\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$inventory_v2_custom_field_update_request = {"operations":[{"objectId":0,"customFields":[{"name":"string","value":"string"}]}]}; // \CompWright\ServiceTitan\Model\InventoryV2CustomFieldUpdateRequest

try {
    $apiInstance->transfersUpdateCustomFields($tenant, $inventory_v2_custom_field_update_request);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
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
