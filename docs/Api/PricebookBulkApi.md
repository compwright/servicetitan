# CompWright\ServiceTitan\PricebookBulkApi

All URIs are relative to https://api.servicetitan.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pricebookBulkCreate()**](PricebookBulkApi.md#pricebookBulkCreate) | **POST** /pricebook/v2/tenant/{tenant}/pricebook | PricebookBulk_Create |
| [**pricebookBulkUpdate()**](PricebookBulkApi.md#pricebookBulkUpdate) | **PATCH** /pricebook/v2/tenant/{tenant}/pricebook | PricebookBulk_Update |


## `pricebookBulkCreate()`

```php
pricebookBulkCreate($tenant, $pricebook_v2_pricebook_bulk_create_request): \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse
```

PricebookBulk_Create

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


$apiInstance = new CompWright\ServiceTitan\Api\PricebookBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_pricebook_bulk_create_request = {"services":[{"serviceMaterials":[{"skuId":0,"customId":"string","quantity":0}],"serviceEquipment":[{"skuId":0,"customId":"string","quantity":0}],"recommendations":[{"skuId":0,"customId":"string"}],"upgrades":[{"skuId":0,"customId":"string"}],"code":"string","displayName":"string","description":"string","warranty":{"duration":0,"description":"string"},"categories":[0],"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"taxable":true,"account":"string","hours":0,"isLabor":true,"assets":[{"type":{},"alias":"string","url":"string"}],"active":true,"crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"customId":"string"}],"equipment":[{"equipmentMaterials":[{"skuId":0,"customId":"string","quantity":0}],"recommendations":[{"skuId":0,"customId":"string","type":"Service"}],"upgrades":[{"skuId":0,"customId":"string"}],"code":"string","displayName":"string","description":"string","price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"active":true,"manufacturer":"string","model":"string","manufacturerWarranty":{"duration":0,"description":"string"},"serviceProviderWarranty":{"duration":0,"description":"string"},"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"account":"string","costOfSaleAccount":"string","assetAccount":"string","crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"hours":0,"taxable":true,"cost":0,"unitOfMeasure":"string","isInventory":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"customId":"string"}],"materials":[{"code":"string","displayName":"string","description":"string","cost":0,"active":true,"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"hours":0,"commissionBonus":0,"paysCommission":true,"deductAsJobCost":true,"unitOfMeasure":"string","isInventory":true,"account":"string","costOfSaleAccount":"string","assetAccount":"string","taxable":true,"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"customId":"string"}],"discountAndFees":[{"type":{},"code":"string","displayName":"string","description":"string","amountType":{},"amount":0,"limit":0,"taxable":true,"categories":[0],"hours":0,"assets":[{"type":{},"alias":"string","url":"string"}],"account":"string","crossSaleGroup":"string","active":true,"bonus":0,"commissionBonus":0,"paysCommission":true,"excludeFromPayroll":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"customId":"string"}]}; // \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest

try {
    $result = $apiInstance->pricebookBulkCreate($tenant, $pricebook_v2_pricebook_bulk_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricebookBulkApi->pricebookBulkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_pricebook_bulk_create_request** | [**\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest**](../Model/PricebookV2PricebookBulkCreateRequest.md)|  | [optional] |

### Return type

[**\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse**](../Model/PricebookV2PricebookBulkCreateResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pricebookBulkUpdate()`

```php
pricebookBulkUpdate($tenant, $pricebook_v2_pricebook_bulk_update_request)
```

PricebookBulk_Update

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


$apiInstance = new CompWright\ServiceTitan\Api\PricebookBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$pricebook_v2_pricebook_bulk_update_request = {"services":[{"code":"string","displayName":"string","description":"string","warranty":{"duration":0,"description":"string"},"categories":[0],"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"taxable":true,"account":"string","hours":0,"isLabor":true,"recommendations":[0],"upgrades":[0],"assets":[{"type":{},"alias":"string","url":"string"}],"serviceMaterials":[{"skuId":0,"quantity":0}],"serviceEquipment":[{"skuId":0,"quantity":0}],"active":true,"crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"id":0}],"equipment":[{"code":"string","displayName":"string","description":"string","price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"active":true,"manufacturer":"string","model":"string","manufacturerWarranty":{"duration":0,"description":"string"},"serviceProviderWarranty":{"duration":0,"description":"string"},"assets":[{"type":{},"alias":"string","url":"string"}],"recommendations":[{"skuId":0,"type":"Service"}],"upgrades":[0],"equipmentMaterials":[{"skuId":0,"quantity":0}],"categories":[0],"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"account":"string","costOfSaleAccount":"string","assetAccount":"string","crossSaleGroup":"string","paysCommission":true,"commissionBonus":0,"hours":0,"taxable":true,"cost":0,"unitOfMeasure":"string","isInventory":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"id":0}],"materials":[{"code":"string","displayName":"string","description":"string","cost":0,"active":true,"price":0,"memberPrice":0,"addOnPrice":0,"addOnMemberPrice":0,"hours":0,"commissionBonus":0,"paysCommission":true,"deductAsJobCost":true,"unitOfMeasure":"string","isInventory":true,"account":"string","costOfSaleAccount":"string","assetAccount":"string","taxable":true,"primaryVendor":{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]},"otherVendors":[{"vendorId":0,"memo":"string","vendorPart":"string","cost":0,"active":true,"primarySubAccount":{"cost":0,"accountName":"string"},"otherSubAccounts":[{"cost":0,"accountName":"string"}]}],"assets":[{"type":{},"alias":"string","url":"string"}],"categories":[0],"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"id":0}],"discountAndFees":[{"type":{},"code":"string","displayName":"string","description":"string","amountType":{},"amount":0,"limit":0,"taxable":true,"categories":[0],"hours":0,"assets":[{"type":{},"alias":"string","url":"string"}],"account":"string","crossSaleGroup":"string","active":true,"bonus":0,"commissionBonus":0,"paysCommission":true,"excludeFromPayroll":true,"externalData":{"applicationGuid":"string","externalData":[{"key":"string","value":"string"}]},"id":0}]}; // \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest

try {
    $apiInstance->pricebookBulkUpdate($tenant, $pricebook_v2_pricebook_bulk_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PricebookBulkApi->pricebookBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | **int**| Tenant ID | |
| **pricebook_v2_pricebook_bulk_update_request** | [**\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest**](../Model/PricebookV2PricebookBulkUpdateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken), [appKey](../../README.md#appKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
