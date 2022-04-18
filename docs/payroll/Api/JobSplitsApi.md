# CompWright\ServiceTitan\JobSplitsApi

All URIs are relative to https://api-integration.servicetitan.io/payroll/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobSplitsGetList()**](JobSplitsApi.md#jobSplitsGetList) | **GET** /tenant/{tenant}/jobs/{job}/splits | Gets a list of job splits


## `jobSplitsGetList()`

```php
jobSplitsGetList($job, $tenant): \CompWright\ServiceTitan\Model\PayrollV2JobSplitsJobSplitResponse[]
```

Gets a list of job splits

Gets a list of job splits

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


$apiInstance = new CompWright\ServiceTitan\Api\JobSplitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 56; // int | Format - int64. The job ID
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->jobSplitsGetList($job, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobSplitsApi->jobSplitsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job** | **int**| Format - int64. The job ID |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\PayrollV2JobSplitsJobSplitResponse[]**](../Model/PayrollV2JobSplitsJobSplitResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
