# # MembershipsV2MembershipTypeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Membership type name |
**active** | **bool** | Whether membership type is active |
**discount_mode** | [**OneOfMembershipsV2DiscountMode**](OneOfMembershipsV2DiscountMode.md) | Membership discount mode |
**location_target** | [**OneOfMembershipsV2MembershipLocationTarget**](OneOfMembershipsV2MembershipLocationTarget.md) | Membership location target |
**revenue_recognition_mode** | [**OneOfMembershipsV2RevenueRecognitionMode**](OneOfMembershipsV2RevenueRecognitionMode.md) | Membership revenue recognition mode |
**auto_calculate_invoice_templates** | **bool** | Whether invoice templates should be auto-calculated |
**use_membership_pricing_table** | **bool** | Whether membership pricing table should be used |
**show_membership_savings** | **bool** | Whether membership savings should be displayed |
**id** | **int** | Membership type ID |
**created_on** | **\DateTime** | When membership type was created |
**created_by_id** | **int** | ID of the user that created this membership type | [optional]
**modified_on** | **\DateTime** | When membership type was modified |
**import_id** | **string** | Internal import ID label | [optional]
**billing_template_id** | **int** | Billing template ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
