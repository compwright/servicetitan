# CompWright\ServiceTitan\InstalledEquipmentApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**installedEquipmentCreate()**](InstalledEquipmentApi.md#installedEquipmentCreate) | **POST** /equipmentsystems/v2/tenant/{tenant}/installed-equipment | InstalledEquipment_Create |
| [**installedEquipmentGet()**](InstalledEquipmentApi.md#installedEquipmentGet) | **GET** /equipmentsystems/v2/tenant/{tenant}/installed-equipment/{id} | InstalledEquipment_Get |
| [**installedEquipmentGetList()**](InstalledEquipmentApi.md#installedEquipmentGetList) | **GET** /equipmentsystems/v2/tenant/{tenant}/installed-equipment | InstalledEquipment_GetList |
| [**installedEquipmentUpdate()**](InstalledEquipmentApi.md#installedEquipmentUpdate) | **PATCH** /equipmentsystems/v2/tenant/{tenant}/installed-equipment/{id} | InstalledEquipment_Update |


## `installedEquipmentCreate()`

```php
installedEquipmentCreate($tenant, $equipment_systems_v2_installed_equipment_create_request): \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse
```

InstalledEquipment_Create

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


$apiInstance = new CompWright\ServiceTitan\Api\InstalledEquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$equipment_systems_v2_installed_equipment_create_request = {"locationId":0,"name":"string","installedOn":"string","serialNumber":"string","memo":"string","manufacturer":"string","model":"string","cost":0,"manufacturerWarrantyStart":"string","manufacturerWarrantyEnd":"string","serviceProviderWarrantyStart":"string","serviceProviderWarrantyEnd":"string","customFields":[{"id":0,"typeId":0,"value":"string"}]}; // \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest

try {
    $result = $apiInstance->installedEquipmentCreate($tenant, $equipment_systems_v2_installed_equipment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledEquipmentApi->installedEquipmentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **equipment_systems_v2_installed_equipment_create_request** | [**\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest**](../Model/EquipmentSystemsV2InstalledEquipmentCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse**](../Model/EquipmentSystemsV2InstalledEquipmentDetailedResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installedEquipmentGet()`

```php
installedEquipmentGet($id, $tenant): \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse
```

InstalledEquipment_Get

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


$apiInstance = new CompWright\ServiceTitan\Api\InstalledEquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID

try {
    $result = $apiInstance->installedEquipmentGet($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledEquipmentApi->installedEquipmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |

### Return type

[**\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse**](../Model/EquipmentSystemsV2InstalledEquipmentDetailedResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installedEquipmentGetList()`

```php
installedEquipmentGetList($tenant, $location_ids, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total, $sort): \CompWright\ServiceTitan\Model\PaginatedResponseOfEquipmentSystemsV2InstalledEquipmentResponse
```

InstalledEquipment_GetList

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


$apiInstance = new CompWright\ServiceTitan\Api\InstalledEquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$location_ids = 'location_ids_example'; // string
$ids = 'ids_example'; // string
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339).
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$include_total = True; // bool
$sort = 'sort_example'; // string | Applies sorting by the specified field:\\ \"?sort=+FieldName\" for ascending order,\\ \"?sort=-FieldName\" for descending order.\\ \\ Available fields are: Id, CreatedOn, ModifiedOn.

try {
    $result = $apiInstance->installedEquipmentGetList($tenant, $location_ids, $ids, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $page, $page_size, $include_total, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledEquipmentApi->installedEquipmentGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **location_ids** | **string**|  | [optional] |
| **ids** | **string**|  | [optional] |
| **created_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **created_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_before** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **modified_on_or_after** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **page** | **int**| Format - int32. | [optional] |
| **page_size** | **int**| Format - int32. | [optional] |
| **include_total** | **bool**|  | [optional] |
| **sort** | **string**| Applies sorting by the specified field:\\ \&quot;?sort&#x3D;+FieldName\&quot; for ascending order,\\ \&quot;?sort&#x3D;-FieldName\&quot; for descending order.\\ \\ Available fields are: Id, CreatedOn, ModifiedOn. | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PaginatedResponseOfEquipmentSystemsV2InstalledEquipmentResponse**](../Model/PaginatedResponseOfEquipmentSystemsV2InstalledEquipmentResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installedEquipmentUpdate()`

```php
installedEquipmentUpdate($id, $tenant, $equipment_systems_v2_installed_equipment_update_request): \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse
```

InstalledEquipment_Update

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


$apiInstance = new CompWright\ServiceTitan\Api\InstalledEquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$equipment_systems_v2_installed_equipment_update_request = {"name":"string","installedOn":"string","serialNumber":"string","memo":"string","manufacturer":"string","model":"string","cost":0,"manufacturerWarrantyStart":"string","manufacturerWarrantyEnd":"string","serviceProviderWarrantyStart":"string","serviceProviderWarrantyEnd":"string","customFields":[{"id":0,"typeId":0,"value":"string"}]}; // \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentUpdateRequest

try {
    $result = $apiInstance->installedEquipmentUpdate($id, $tenant, $equipment_systems_v2_installed_equipment_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledEquipmentApi->installedEquipmentUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int64. | |
| **tenant** | **int**| Tenant ID | |
| **equipment_systems_v2_installed_equipment_update_request** | [**\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentUpdateRequest**](../Model/EquipmentSystemsV2InstalledEquipmentUpdateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse**](../Model/EquipmentSystemsV2InstalledEquipmentDetailedResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
