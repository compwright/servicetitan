# CompWright\ServiceTitan\InvoiceTemplatesApi

All URIs are relative to https://api-integration.servicetitan.io/memberships/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceTemplatesCreate()**](InvoiceTemplatesApi.md#invoiceTemplatesCreate) | **POST** /tenant/{tenant}/invoice-templates | Creates new invoice template
[**invoiceTemplatesGet()**](InvoiceTemplatesApi.md#invoiceTemplatesGet) | **GET** /tenant/{tenant}/invoice-templates/{id} | Gets invoice template specified by ID
[**invoiceTemplatesGetList()**](InvoiceTemplatesApi.md#invoiceTemplatesGetList) | **GET** /tenant/{tenant}/invoice-templates | Gets a list of invoice templates by given IDs
[**invoiceTemplatesUpdate()**](InvoiceTemplatesApi.md#invoiceTemplatesUpdate) | **PATCH** /tenant/{tenant}/invoice-templates/{id} | Updates specified invoice template in \&quot;patch\&quot; mode


## `invoiceTemplatesCreate()`

```php
invoiceTemplatesCreate($tenant, $memberships_v2_invoice_template_create_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Creates new invoice template

Creates new invoice template

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoiceTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$memberships_v2_invoice_template_create_request = {"name":"string","items":[{"skuId":0,"quantity":0,"unitPrice":0,"isAddOn":true,"workflowActionItemId":0,"description":"string","cost":0,"hours":0}]}; // \CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateCreateRequest

try {
    $result = $apiInstance->invoiceTemplatesCreate($tenant, $memberships_v2_invoice_template_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTemplatesApi->invoiceTemplatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **memberships_v2_invoice_template_create_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateCreateRequest**](../Model/MembershipsV2InvoiceTemplateCreateRequest.md)|  | [optional]

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

## `invoiceTemplatesGet()`

```php
invoiceTemplatesGet($id, $tenant): \CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateResponse
```

Gets invoice template specified by ID

Gets invoice template specified by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoiceTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Invoice template ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->invoiceTemplatesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTemplatesApi->invoiceTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Invoice template ID |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateResponse**](../Model/MembershipsV2InvoiceTemplateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTemplatesGetList()`

```php
invoiceTemplatesGetList($tenant, $ids): \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2InvoiceTemplateResponse
```

Gets a list of invoice templates by given IDs

Please note this endpoint does not allow to enumerate all invoice templates. Use the Customer Membership endpoint (for billing template) or Recurring Service endpoint (for invoice template) to get invoice template IDs.

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoiceTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Perform lookup by multiple IDs (maximum 50)

try {
    $result = $apiInstance->invoiceTemplatesGetList($tenant, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTemplatesApi->invoiceTemplatesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Perform lookup by multiple IDs (maximum 50) |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2InvoiceTemplateResponse**](../Model/PaginatedResponseOfMembershipsV2InvoiceTemplateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTemplatesUpdate()`

```php
invoiceTemplatesUpdate($id, $tenant, $memberships_v2_invoice_template_update_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Updates specified invoice template in \"patch\" mode

Updates specified invoice template in \"patch\" mode

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


$apiInstance = new CompWright\ServiceTitan\Api\InvoiceTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Invoice template ID
$tenant = 56; // int | Tenant ID
$memberships_v2_invoice_template_update_request = {"name":"string","createdOn":"string","createdById":0,"active":true,"items":[{"id":0,"skuId":0,"quantity":0,"unitPrice":0,"isAddOn":true,"description":"string","cost":0,"hours":0}]}; // \CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateUpdateRequest | Invoice template update request

try {
    $result = $apiInstance->invoiceTemplatesUpdate($id, $tenant, $memberships_v2_invoice_template_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTemplatesApi->invoiceTemplatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Invoice template ID |
 **tenant** | **int**| Tenant ID |
 **memberships_v2_invoice_template_update_request** | [**\CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateUpdateRequest**](../Model/MembershipsV2InvoiceTemplateUpdateRequest.md)| Invoice template update request | [optional]

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
