# CompWright\ServiceTitan\TaxZonesApi

All URIs are relative to https://api-integration.servicetitan.io/accounting/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxZonesGetList()**](TaxZonesApi.md#taxZonesGetList) | **GET** /tenant/{tenant}/tax-zones | Get a list of tax zones and their rates.


## `taxZonesGetList()`

```php
taxZonesGetList($tenant, $ids, $active, $page, $page_size, $include_total): \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2TaxZoneResponse
```

Get a list of tax zones and their rates.

Gets a list of tax zones and their rates based on the supplied filter. If no filter is supplied it returns all tax zones.

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


$apiInstance = new CompWright\ServiceTitan\Api\TaxZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string | Tax Zone Ids to pull tax zones for
$active = 'active_example'; // OneOfActiveQueryFilter | What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False]
$page = 56; // int | Format - int32. The logical number of page to return, starting from 1
$page_size = 56; // int | Format - int32. How many records to return (50 by default)
$include_total = True; // bool | Whether total count should be returned

try {
    $result = $apiInstance->taxZonesGetList($tenant, $ids, $active, $page, $page_size, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxZonesApi->taxZonesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant** | **int**| Tenant ID |
 **ids** | **string**| Tax Zone Ids to pull tax zones for | [optional]
 **active** | **OneOfActiveQueryFilter**| What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] | [optional]
 **page** | **int**| Format - int32. The logical number of page to return, starting from 1 | [optional]
 **page_size** | **int**| Format - int32. How many records to return (50 by default) | [optional]
 **include_total** | **bool**| Whether total count should be returned | [optional]

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2TaxZoneResponse**](../Model/PaginatedResponseOfAccountingV2TaxZoneResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
