# CompWright\ServiceTitan\PaymentTermsApi

All URIs are relative to https://api-integration.servicetitan.io/accounting/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentTermsGetPaymentTermModel()**](PaymentTermsApi.md#paymentTermsGetPaymentTermModel) | **GET** /tenant/{tenant}/payment-terms/{customerId} | Gets customer’s default Payment Term


## `paymentTermsGetPaymentTermModel()`

```php
paymentTermsGetPaymentTermModel($customer_id, $tenant): \CompWright\ServiceTitan\Model\AccountingV2PaymentTermAPIModel
```

Gets customer’s default Payment Term

Gets customer’s default Payment Term

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


$apiInstance = new CompWright\ServiceTitan\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->paymentTermsGetPaymentTermModel($customer_id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->paymentTermsGetPaymentTermModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\AccountingV2PaymentTermAPIModel**](../Model/AccountingV2PaymentTermAPIModel.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
