# CompWright\ServiceTitan\EmployeesApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeesGet()**](EmployeesApi.md#employeesGet) | **GET** /settings/v2/tenant/{tenant}/employees/{id} | Gets a employee by ID |
| [**employeesGetList()**](EmployeesApi.md#employeesGetList) | **GET** /settings/v2/tenant/{tenant}/employees | Gets a list of employees |


## `employeesGet()`

```php
employeesGet($id, $tenant): \CompWright\ServiceTitan\Model\TenantSettingsV2EmployeeResponse
```

Gets a employee by ID

Gets a employee by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->employeesGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\TenantSettingsV2EmployeeResponse**](../Model/TenantSettingsV2EmployeeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesGetList()`

```php
employeesGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after): \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2EmployeeResponse
```

Gets a list of employees

Gets a list of employees

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


$apiInstance = new CompWright\ServiceTitan\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$name = 'name_example'; // string
$active = 'active_example'; // string | Values: [True, Any, False]
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->employeesGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **ids** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **active** | **string**| Values: [True, Any, False] | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **include_total** | **bool**|  | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2EmployeeResponse**](../Model/PaginatedResponseOfTenantSettingsV2EmployeeResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
