# CompWright\ServiceTitan\PaymentsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentsCreate()**](PaymentsApi.md#paymentsCreate) | **POST** /accounting/v2/tenant/{tenant}/payments | Creates new payment |
| [**paymentsGetList()**](PaymentsApi.md#paymentsGetList) | **GET** /accounting/v2/tenant/{tenant}/payments | Gets a paginated list of payments |
| [**paymentsUpdate()**](PaymentsApi.md#paymentsUpdate) | **PATCH** /accounting/v2/tenant/{tenant}/payments/{id} | Updates specified payment in \&quot;patch\&quot; mode |
| [**paymentsUpdateCustomFields()**](PaymentsApi.md#paymentsUpdateCustomFields) | **PATCH** /accounting/v2/tenant/{tenant}/payments/custom-fields | Update custom fields for specified payments |
| [**paymentsUpdateStatus()**](PaymentsApi.md#paymentsUpdateStatus) | **POST** /accounting/v2/tenant/{tenant}/payments/status | Updates payment status |


## `paymentsCreate()`

```php
paymentsCreate($tenant, $accounting_v2_payment_create_request): \CompWright\ServiceTitan\Model\AccountingV2PaymentResponse
```

Creates new payment

Creates new payment

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_payment_create_request = {"typeId":0,"memo":"string","paidOn":"string","authCode":"string","checkNumber":"string","exportId":"string","transactionStatus":{},"status":{},"splits":[{"invoiceId":0,"amount":0}]}; // \CompWright\ServiceTitan\Model\AccountingV2PaymentCreateRequest

try {
    $result = $apiInstance->paymentsCreate($tenant, $accounting_v2_payment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **accounting_v2_payment_create_request** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentCreateRequest**](../Model/AccountingV2PaymentCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\AccountingV2PaymentResponse**](../Model/AccountingV2PaymentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsGetList()`

```php
paymentsGetList($tenant, $ids, $statuses, $paid_on_after, $paid_on_before, $business_unit_ids, $batch_number, $batch_id, $transaction_type, $customer_id, $page, $page_size, $include_total, $custom_field_fields, $custom_field_operator, $modified_before, $modified_on_or_after, $created_before, $created_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2DetailedPaymentResponse
```

Gets a paginated list of payments

Gets a paginated list of payments

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$statuses = 'statuses_example'; // string
$paid_on_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$paid_on_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$business_unit_ids = 'business_unit_ids_example'; // string
$batch_number = 56; // int | Format - int32.
$batch_id = 56; // int | Format - int64.
$transaction_type = 'transaction_type_example'; // string | Values: [Undefined, JournalEntry, ReceivePayment]
$customer_id = 56; // int | Format - int64.
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool
$custom_field_fields = array('key' => 'custom_field_fields_example'); // array<string,string> | Name, value
$custom_field_operator = 'custom_field_operator_example'; // string | Can be \"or\" or \"null\" or \"and\"\\ Values: [And, Or]
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->paymentsGetList($tenant, $ids, $statuses, $paid_on_after, $paid_on_before, $business_unit_ids, $batch_number, $batch_id, $transaction_type, $customer_id, $page, $page_size, $include_total, $custom_field_fields, $custom_field_operator, $modified_before, $modified_on_or_after, $created_before, $created_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**|  | [optional] |
| **statuses** | **string**|  | [optional] |
| **paid_on_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **paid_on_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **business_unit_ids** | **string**|  | [optional] |
| **batch_number** | **int**| Format - int32. | [optional] |
| **batch_id** | **int**| Format - int64. | [optional] |
| **transaction_type** | **string**| Values: [Undefined, JournalEntry, ReceivePayment] | [optional] |
| **customer_id** | **int**| Format - int64. | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **include_total** | **bool**|  | [optional] |
| **custom_field_fields** | [**array<string,string>**](../Model/string.md)| Name, value | [optional] |
| **custom_field_operator** | **string**| Can be \&quot;or\&quot; or \&quot;null\&quot; or \&quot;and\&quot;\\ Values: [And, Or] | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2DetailedPaymentResponse**](../Model/PaginatedResponseOfAccountingV2DetailedPaymentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsUpdate()`

```php
paymentsUpdate($id, $tenant, $accounting_v2_payment_update_request): \CompWright\ServiceTitan\Model\AccountingV2PaymentResponse
```

Updates specified payment in \"patch\" mode

Updates specified payment in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$accounting_v2_payment_update_request = {"typeId":0,"active":true,"memo":"string","paidOn":"string","authCode":"string","checkNumber":"string","exportId":"string","transactionStatus":{},"status":"Pending","splits":[{"invoiceId":0,"amount":0}]}; // \CompWright\ServiceTitan\Model\AccountingV2PaymentUpdateRequest

try {
    $result = $apiInstance->paymentsUpdate($id, $tenant, $accounting_v2_payment_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **accounting_v2_payment_update_request** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentUpdateRequest**](../Model/AccountingV2PaymentUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\AccountingV2PaymentResponse**](../Model/AccountingV2PaymentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsUpdateCustomFields()`

```php
paymentsUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request)
```

Update custom fields for specified payments

Update custom fields for specified payments

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_custom_field_update_request = {"operations":[{"objectId":0,"customFields":[{"name":"string","value":"string"}]}]}; // \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest

try {
    $apiInstance->paymentsUpdateCustomFields($tenant, $accounting_v2_custom_field_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
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

## `paymentsUpdateStatus()`

```php
paymentsUpdateStatus($tenant, $accounting_v2_payment_status_batch_request)
```

Updates payment status

Updates payment status

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$accounting_v2_payment_status_batch_request = {"status":"Pending","paymentIds":[0]}; // \CompWright\ServiceTitan\Model\AccountingV2PaymentStatusBatchRequest

try {
    $apiInstance->paymentsUpdateStatus($tenant, $accounting_v2_payment_status_batch_request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **accounting_v2_payment_status_batch_request** | [**\CompWright\ServiceTitan\Model\AccountingV2PaymentStatusBatchRequest**](../Model/AccountingV2PaymentStatusBatchRequest.md)|  | [optional] |

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
