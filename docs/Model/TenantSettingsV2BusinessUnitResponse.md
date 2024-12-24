# # TenantSettingsV2BusinessUnitResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**active** | **bool** |  |
**name** | **string** |  |
**official_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**invoice_header** | **string** |  | [optional]
**invoice_message** | **string** |  | [optional]
**default_tax_rate** | **float** |  | [optional]
**authorization_paragraph** | **string** |  | [optional]
**acknowledgement_paragraph** | **string** |  | [optional]
**address** | [**\CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponseAddress**](TenantSettingsV2BusinessUnitResponseAddress.md) |  | [optional]
**material_sku** | **string** |  | [optional]
**quickbooks_class** | **string** |  | [optional]
**account_code** | **string** |  | [optional]
**franchise_id** | **string** |  | [optional]
**concept_code** | **string** |  | [optional]
**corporate_contract_number** | **string** |  | [optional]
**tenant** | [**\CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponseTenant**](TenantSettingsV2BusinessUnitResponseTenant.md) |  | [optional]
**created_on** | **\DateTime** |  |
**modified_on** | **\DateTime** |  |
**external_data** | [**\CompWright\ServiceTitan\Model\TenantSettingsV2ExternalDataModel[]**](TenantSettingsV2ExternalDataModel.md) | Optional model that contains a list of external data items that should be attached to this job. that should be attached to this vendor. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
