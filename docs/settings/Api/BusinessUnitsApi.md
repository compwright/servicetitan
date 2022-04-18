# CompWright\ServiceTitan\BusinessUnitsApi

All URIs are relative to https://api-integration.servicetitan.io/settings/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessUnitsGet()**](BusinessUnitsApi.md#businessUnitsGet) | **GET** /tenant/{tenant}/business-units/{id} | Gets a business unit by ID
[**businessUnitsGetList()**](BusinessUnitsApi.md#businessUnitsGetList) | **GET** /tenant/{tenant}/business-units | Gets a list of business units
[**businessUnitsUpdate()**](BusinessUnitsApi.md#businessUnitsUpdate) | **PATCH** /tenant/{tenant}/business-units/{id} | Update an existing BusinessUnit


## `businessUnitsGet()`

```php
businessUnitsGet($id, $tenant, $external_data_application_guid): \CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponse
```

Gets a business unit by ID

Gets a business unit by ID

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


$apiInstance = new CompWright\ServiceTitan\Api\BusinessUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid.

try {
    $result = $apiInstance->businessUnitsGet($id, $tenant, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitsApi->businessUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. |
 **tenant** | **int**| Tenant ID |
 **external_data_application_guid** | **string**| Format - guid. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponse**](../Model/TenantSettingsV2BusinessUnitResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessUnitsGetList()`

```php
businessUnitsGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_data_application_guid): \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2BusinessUnitResponse
```

Gets a list of business units

Gets a list of business units

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


$apiInstance = new CompWright\ServiceTitan\Api\BusinessUnitsApi(
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
$external_data_application_guid = 'external_data_application_guid_example'; // string | Format - guid. If this guid is provided, external data corresponding to this application guid will be returned.

try {
    $result = $apiInstance->businessUnitsGetList($tenant, $ids, $name, $active, $page, $page_size, $include_total, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $external_data_application_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitsApi->businessUnitsGetList: ', $e->getMessage(), PHP_EOL;
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
 **external_data_application_guid** | **string**| Format - guid. If this guid is provided, external data corresponding to this application guid will be returned. | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2BusinessUnitResponse**](../Model/PaginatedResponseOfTenantSettingsV2BusinessUnitResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessUnitsUpdate()`

```php
businessUnitsUpdate($id, $tenant, $tenant_settings_v2_update_business_unit_request): \CompWright\ServiceTitan\Model\ModificationResponse
```

Update an existing BusinessUnit

Update an existing BusinessUnit

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


$apiInstance = new CompWright\ServiceTitan\Api\BusinessUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64. BusinessUnit Id
$tenant = 56; // int | Tenant ID
$tenant_settings_v2_update_business_unit_request = {"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]}}; // \CompWright\ServiceTitan\Model\TenantSettingsV2UpdateBusinessUnitRequest | Update BusinessUnit Request

try {
    $result = $apiInstance->businessUnitsUpdate($id, $tenant, $tenant_settings_v2_update_business_unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitsApi->businessUnitsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Format - int64. BusinessUnit Id |
 **tenant** | **int**| Tenant ID |
 **tenant_settings_v2_update_business_unit_request** | [**\CompWright\ServiceTitan\Model\TenantSettingsV2UpdateBusinessUnitRequest**](../Model/TenantSettingsV2UpdateBusinessUnitRequest.md)| Update BusinessUnit Request | [optional]

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
