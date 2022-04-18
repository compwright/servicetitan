# CompWright\ServiceTitan\JobsApi

All URIs are relative to https://api-integration.servicetitan.io/forms/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobsCreateAttachment()**](JobsApi.md#jobsCreateAttachment) | **POST** /tenant/{tenant}/jobs/{id}/attachments | Creates a Attachment on the specified Job


## `jobsCreateAttachment()`

```php
jobsCreateAttachment($id, $tenant, $inline_object): \CompWright\ServiceTitan\Model\FormsV2AttachmentResponse
```

Creates a Attachment on the specified Job

Creates a Attachment on the specified Job

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


$apiInstance = new CompWright\ServiceTitan\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. Job Id
$tenant = 56; // int | Tenant ID
$inline_object = new \CompWright\ServiceTitan\Model\InlineObject(); // \CompWright\ServiceTitan\Model\InlineObject

try {
    $result = $apiInstance->jobsCreateAttachment($id, $tenant, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsCreateAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. Job Id |
 **tenant** | **int**| Tenant ID |
 **inline_object** | [**\CompWright\ServiceTitan\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\FormsV2AttachmentResponse**](../Model/FormsV2AttachmentResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
