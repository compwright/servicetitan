# CompWright\ServiceTitan\CallsApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callsGetCalls()**](CallsApi.md#callsGetCalls) | **GET** /telecom/v2/tenant/{tenant}/calls | Calls_GetCalls |
| [**callsGetDetails()**](CallsApi.md#callsGetDetails) | **GET** /telecom/v2/tenant/{tenant}/calls/{id} | Calls_GetDetails |
| [**callsGetRecording()**](CallsApi.md#callsGetRecording) | **GET** /telecom/v2/tenant/{tenant}/calls/{id}/recording | Calls_GetRecording |
| [**callsGetVoiceMail()**](CallsApi.md#callsGetVoiceMail) | **GET** /telecom/v2/tenant/{tenant}/calls/{id}/voicemail | Calls_GetVoiceMail |
| [**callsUpdate()**](CallsApi.md#callsUpdate) | **PUT** /telecom/v2/tenant/{tenant}/calls/{id} | Calls_Update |


## `callsGetCalls()`

```php
callsGetCalls($tenant, $modified_after, $min_duration, $phone_number_called, $campaign_id, $agent_id, $agent_name, $agent_is_external, $agent_external_id, $order_by, $order_by_direction, $active_only, $created_after, $created_before, $ids, $page, $page_size): \CompWright\ServiceTitan\Model\CollectionResultOfModuleTelecomSharedBundleCallModel
```

Calls_GetCalls

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


$apiInstance = new CompWright\ServiceTitan\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$modified_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$min_duration = 56; // int | Format - int32.
$phone_number_called = 'phone_number_called_example'; // string
$campaign_id = 56; // int | Format - int64.
$agent_id = 56; // int | Format - int64.
$agent_name = 'agent_name_example'; // string
$agent_is_external = True; // bool
$agent_external_id = 56; // int | Format - int64.
$order_by = 'order_by_example'; // string
$order_by_direction = 'order_by_direction_example'; // string
$active_only = True; // bool
$created_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$ids = array(56); // int[]
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.

try {
    $result = $apiInstance->callsGetCalls($tenant, $modified_after, $min_duration, $phone_number_called, $campaign_id, $agent_id, $agent_name, $agent_is_external, $agent_external_id, $order_by, $order_by_direction, $active_only, $created_after, $created_before, $ids, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsGetCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **modified_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **min_duration** | **int**| Format - int32. | [optional] |
| **phone_number_called** | **string**|  | [optional] |
| **campaign_id** | **int**| Format - int64. | [optional] |
| **agent_id** | **int**| Format - int64. | [optional] |
| **agent_name** | **string**|  | [optional] |
| **agent_is_external** | **bool**|  | [optional] |
| **agent_external_id** | **int**| Format - int64. | [optional] |
| **order_by** | **string**|  | [optional] |
| **order_by_direction** | **string**|  | [optional] |
| **active_only** | **bool**|  | [optional] |
| **created_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\CollectionResultOfModuleTelecomSharedBundleCallModel**](../Model/CollectionResultOfModuleTelecomSharedBundleCallModel.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callsGetDetails()`

```php
callsGetDetails($id, $tenant): \CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedBundleCallModel
```

Calls_GetDetails

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


$apiInstance = new CompWright\ServiceTitan\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->callsGetDetails($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsGetDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedBundleCallModel**](../Model/ModuleTelecomSharedDetailedBundleCallModel.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callsGetRecording()`

```php
callsGetRecording($id, $tenant): \SplFileObject
```

Calls_GetRecording

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


$apiInstance = new CompWright\ServiceTitan\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->callsGetRecording($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsGetRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

**\SplFileObject**

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callsGetVoiceMail()`

```php
callsGetVoiceMail($id, $tenant): \SplFileObject
```

Calls_GetVoiceMail

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


$apiInstance = new CompWright\ServiceTitan\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->callsGetVoiceMail($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsGetVoiceMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

**\SplFileObject**

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callsUpdate()`

```php
callsUpdate($id, $tenant, $module_telecom_shared_call_in_update_model_v2): \CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedCallModel
```

Calls_Update

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


$apiInstance = new CompWright\ServiceTitan\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$module_telecom_shared_call_in_update_model_v2 = {"callId":0,"callType":{},"excuseMemo":"string","campaignId":0,"jobId":0,"agentId":0,"reason":{"name":"string","lead":true},"customer":{"id":0,"name":"string","address":{"street":"string","unit":"string","country":"string","city":"string","state":"string","zip":"string","latitude":0,"longitude":0},"contacts":[{"id":0,"type":"string","value":"string","memo":"string"}]},"location":{"id":0,"name":"string","address":{"street":"string","unit":"string","country":"string","city":"string","state":"string","zip":"string","latitude":0,"longitude":0},"contacts":[{"id":0,"type":"string","value":"string","memo":"string"}]}}; // \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2

try {
    $result = $apiInstance->callsUpdate($id, $tenant, $module_telecom_shared_call_in_update_model_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **module_telecom_shared_call_in_update_model_v2** | [**\CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2**](../Model/ModuleTelecomSharedCallInUpdateModelV2.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedCallModel**](../Model/ModuleTelecomSharedDetailedCallModel.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
