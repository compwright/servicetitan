# CompWright\ServiceTitan\TechniciansApi

All URIs are relative to https://api-integration.servicetitan.io/settings/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**techniciansGet()**](TechniciansApi.md#techniciansGet) | **GET** /tenant/{tenant}/technicians/{id} | Gets a technician by ID
[**techniciansGetList()**](TechniciansApi.md#techniciansGetList) | **GET** /tenant/{tenant}/technicians | Gets a list of technicians


## `techniciansGet()`

```php
techniciansGet($id, $tenant): \CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianResponse
```

Gets a technician by ID

Gets a technician by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\TechniciansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->techniciansGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechniciansApi->techniciansGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |

### Return type

[**\CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianResponse**](../Model/TenantSettingsV2TechnicianResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `techniciansGetList()`

```php
techniciansGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2TechnicianResponse
```

Gets a list of technicians

Gets a list of technicians

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


$apiInstance = new CompWright\ServiceTitan\Api\TechniciansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$name = 'name_example'; // string
$active = 'active_example'; // OneOfActiveQueryFilter | Values: [True, Any, False]
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->techniciansGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechniciansApi->techniciansGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **active** | **OneOfActiveQueryFilter**| Values: [True, Any, False] | [optional]
 **page** | **int**| Format - int32. | [optional]
 **page_size** | **int**| Format - int32. | [optional]
 **include_total** | **bool**|  | [optional]
 **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]
 **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2TechnicianResponse**](../Model/PaginatedResponseOfTenantSettingsV2TechnicianResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
