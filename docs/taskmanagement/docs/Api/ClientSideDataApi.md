# CompWright\ServiceTitan\ClientSideDataApi

All URIs are relative to https://api-integration.servicetitan.io/taskmanagement/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientSideDataGet()**](ClientSideDataApi.md#clientSideDataGet) | **GET** /tenant/{tenant}/data | ClientSideData_Get


## `clientSideDataGet()`

```php
clientSideDataGet($tenant): \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideDataResponse
```

ClientSideData_Get

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


$apiInstance = new CompWright\ServiceTitan\Api\ClientSideDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->clientSideDataGet($tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideDataApi->clientSideDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideDataResponse**](../Model/TaskManagementV2ClientSideDataResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
