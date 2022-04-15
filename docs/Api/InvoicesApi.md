# CompWright\ServiceTitan\InvoicesApi

All URIs are relative to https://api-integration.servicetitan.io/accounting/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesCreateAdjustmentInvoice()**](InvoicesApi.md#invoicesCreateAdjustmentInvoice) | **POST** /tenant/{tenant}/invoices | create adjustment invoice
[**invoicesDeleteInvoiceItem()**](InvoicesApi.md#invoicesDeleteInvoiceItem) | **DELETE** /tenant/{tenant}/invoices/{invoiceId}/items/{itemId} | delete invoice item
[**invoicesGetList()**](InvoicesApi.md#invoicesGetList) | **GET** /tenant/{tenant}/invoices | Gets a list of invoices
[**invoicesMarkAsExported()**](InvoicesApi.md#invoicesMarkAsExported) | **POST** /tenant/{tenant}/invoices/markasexported | mark invoice as exported. Id &#x3D; invoiceId
[**invoicesUpdateCustomFields()**](InvoicesApi.md#invoicesUpdateCustomFields) | **PATCH** /tenant/{tenant}/invoices/custom-fields | Updates custom fields for specified invoices
[**invoicesUpdateInvoice()**](InvoicesApi.md#invoicesUpdateInvoice) | **PATCH** /tenant/{tenant}/invoices/{id} | update invoice
[**invoicesUpdateInvoiceItems()**](InvoicesApi.md#invoicesUpdateInvoiceItems) | **PATCH** /tenant/{tenant}/invoices/{invoiceId}/items | update invoice items


## `invoicesCreateAdjustmentInvoice()`

```php
invoicesCreateAdjustmentInvoice($tenant, $accounting_v2_adjustment_invoice_create_request): int
```

create adjustment invoice

create adjustment invoice

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_adjustment_invoice_create_request = {"number":"string","typeId":0,"invoicedOn":"string","subtotal":0,"tax":0,"summary":"string","royaltyStatus":{},"royaltyDate":"string","royaltySentOn":"string","royaltyMemo":"string","exportId":"string","items":[{"skuId":0,"skuName":"string","technicianId":0,"description":"string","quantity":0,"unitPrice":0,"cost":0,"isAddOn":true,"signature":"string","technicianAcknowledgementSignature":"string","installedOn":"string","inventoryWarehouseName":"string","skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0,"id":0}],"payments":[{"id":0,"settlementStatus":{},"settlementDate":"string"}],"adjustmentToId":0}; // \CompWright\ServiceTitan\Model\AccountingV2AdjustmentInvoiceCreateRequest

try {
    $result = $apiInstance->invoicesCreateAdjustmentInvoice($tenant, $accounting_v2_adjustment_invoice_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesCreateAdjustmentInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **accounting_v2_adjustment_invoice_create_request** | [**\CompWright\ServiceTitan\Model\AccountingV2AdjustmentInvoiceCreateRequest**](../Model/AccountingV2AdjustmentInvoiceCreateRequest.md)|  | [optional]

### Return type

**int**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesDeleteInvoiceItem()`

```php
invoicesDeleteInvoiceItem($invoice_id, $item_id, $tenant)
```

delete invoice item

delete invoice item

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | Format - int64.
$item_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $apiInstance->invoicesDeleteInvoiceItem($invoice_id, $item_id, $tenant);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDeleteInvoiceItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| Format - int64. |
 **item_id** | **int**| Format - int64. |
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

## `invoicesGetList()`

```php
invoicesGetList($tenant, $ids, $modified_before, $modified_on_or_after, $statuses, $batch_id, $batch_number, $page, $page_size, $custom_field_fields, $custom_field_operator, $include_total, $job_id, $job_number, $business_unit_id, $customer_id, $invoiced_on_or_after, $invoiced_on_before, $adjustment_to_id, $number, $created_on_or_after, $created_before, $total_greater, $total_less, $order_by, $order_by_direction): \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2InvoiceResponse
```

Gets a list of invoices

Gets a list of invoices

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$statuses = array(new \CompWright\ServiceTitan\Model\\CompWright\ServiceTitan\Model\AccountingV2TransactionStatus()); // \CompWright\ServiceTitan\Model\AccountingV2TransactionStatus[]
$batch_id = 56; // int | Format - int64.
$batch_number = 56; // int | Format - int32.
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$custom_field_fields = array('key' => 'custom_field_fields_example'); // array<string,string> | Name, value
$custom_field_operator = 'custom_field_operator_example'; // OneOfAccountingV2LogicalOperator | Can be \"or\" or \"null\" or \"and\"\\ Values: [And, Or]
$include_total = True; // bool
$job_id = 56; // int | Format - int64.
$job_number = 'job_number_example'; // string
$business_unit_id = 56; // int | Format - int64.
$customer_id = 56; // int | Format - int64.
$invoiced_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$invoiced_on_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$adjustment_to_id = 56; // int | Format - int64.
$number = 'number_example'; // string
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$total_greater = 3.4; // float | Format - decimal.
$total_less = 3.4; // float | Format - decimal.
$order_by = 'order_by_example'; // string
$order_by_direction = 'order_by_direction_example'; // string

try {
    $result = $apiInstance->invoicesGetList($tenant, $ids, $modified_before, $modified_on_or_after, $statuses, $batch_id, $batch_number, $page, $page_size, $custom_field_fields, $custom_field_operator, $include_total, $job_id, $job_number, $business_unit_id, $customer_id, $invoiced_on_or_after, $invoiced_on_before, $adjustment_to_id, $number, $created_on_or_after, $created_before, $total_greater, $total_less, $order_by, $order_by_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**|  | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **statuses** | [**\CompWright\ServiceTitan\Model\AccountingV2TransactionStatus[]**](../Model/\CompWright\ServiceTitan\Model\AccountingV2TransactionStatus.md)|  | [optional]
 **batch_id** | **int**| Format - int64. | [optional]
 **batch_number** | **int**| Format - int32. | [optional]
 **page** | **int**| Format - int32. | [optional]
 **page_size** | **int**| Format - int32. | [optional]
 **custom_field_fields** | [**array<string,string>**](../Model/string.md)| Name, value | [optional]
 **custom_field_operator** | **OneOfAccountingV2LogicalOperator**| Can be \&quot;or\&quot; or \&quot;null\&quot; or \&quot;and\&quot;\\ Values: [And, Or] | [optional]
 **include_total** | **bool**|  | [optional]
 **job_id** | **int**| Format - int64. | [optional]
 **job_number** | **string**|  | [optional]
 **business_unit_id** | **int**| Format - int64. | [optional]
 **customer_id** | **int**| Format - int64. | [optional]
 **invoiced_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **invoiced_on_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **adjustment_to_id** | **int**| Format - int64. | [optional]
 **number** | **string**|  | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **total_greater** | **float**| Format - decimal. | [optional]
 **total_less** | **float**| Format - decimal. | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_direction** | **string**|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2InvoiceResponse**](../Model/PaginatedResponseOfAccountingV2InvoiceResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesMarkAsExported()`

```php
invoicesMarkAsExported($tenant, $accounting_v2_mark_invoice_as_exported_update_request): \CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateResponse[]
```

mark invoice as exported. Id = invoiceId

mark invoice as exported. Id = invoiceId

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_mark_invoice_as_exported_update_request = [{"invoiceId":0,"externalId":"string","externalMessage":"string"}]; // \CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateRequest[]

try {
    $result = $apiInstance->invoicesMarkAsExported($tenant, $accounting_v2_mark_invoice_as_exported_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesMarkAsExported: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **accounting_v2_mark_invoice_as_exported_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateRequest[]**](../Model/AccountingV2MarkInvoiceAsExportedUpdateRequest.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateResponse[]**](../Model/AccountingV2MarkInvoiceAsExportedUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesUpdateCustomFields()`

```php
invoicesUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request)
```

Updates custom fields for specified invoices

Updates custom fields for specified invoices

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_custom_field_update_request = {"operations":[{"objectId":0,"customFields":[{"name":"string","value":"string"}]}]}; // \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest

try {
    $apiInstance->invoicesUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **accounting_v2_custom_field_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest**](../Model/AccountingV2CustomFieldUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesUpdateInvoice()`

```php
invoicesUpdateInvoice($id, $tenant, $accounting_v2_invoice_update_request)
```

update invoice

update invoice

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$accounting_v2_invoice_update_request = {"number":"string","typeId":0,"invoicedOn":"string","subtotal":0,"tax":0,"summary":"string","royaltyStatus":{},"royaltyDate":"string","royaltySentOn":"string","royaltyMemo":"string","exportId":"string","items":[{"skuId":0,"skuName":"string","technicianId":0,"description":"string","quantity":0,"unitPrice":0,"cost":0,"isAddOn":true,"signature":"string","technicianAcknowledgementSignature":"string","installedOn":"string","inventoryWarehouseName":"string","skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0,"id":0}],"payments":[{"id":0,"settlementStatus":{},"settlementDate":"string"}]}; // \CompWright\ServiceTitan\Model\AccountingV2InvoiceUpdateRequest

try {
    $apiInstance->invoicesUpdateInvoice($id, $tenant, $accounting_v2_invoice_update_request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUpdateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **accounting_v2_invoice_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceUpdateRequest**](../Model/AccountingV2InvoiceUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesUpdateInvoiceItems()`

```php
invoicesUpdateInvoiceItems($invoice_id, $tenant, $accounting_v2_invoice_item_update_request)
```

update invoice items

update invoice items

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$accounting_v2_invoice_item_update_request = {"skuId":0,"skuName":"string","technicianId":0,"description":"string","quantity":0,"unitPrice":0,"cost":0,"isAddOn":true,"signature":"string","technicianAcknowledgementSignature":"string","installedOn":"string","inventoryWarehouseName":"string","skipUpdatingMembershipPrices":true,"itemGroupName":"string","itemGroupRootId":0,"id":0}; // \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemUpdateRequest

try {
    $apiInstance->invoicesUpdateInvoiceItems($invoice_id, $tenant, $accounting_v2_invoice_item_update_request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUpdateInvoiceItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **accounting_v2_invoice_item_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemUpdateRequest**](../Model/AccountingV2InvoiceItemUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
