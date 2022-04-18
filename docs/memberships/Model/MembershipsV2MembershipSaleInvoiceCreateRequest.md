# # MembershipsV2MembershipSaleInvoiceCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **int** | ID of the customer you are creating the Membership Sale Invoice for |
**business_unit_id** | **int** | Business unit ID |
**sale_task_id** | **int** | ID of the sale task that is creating the membership |
**duration_billing_id** | **int** | ID of the duration/billing option to be used |
**location_id** | **int** | Discount location ID of this membership (null if all locations) | [optional]
**recurring_service_action** | [**OneOfMembershipsV2RecurringServiceAction**](OneOfMembershipsV2RecurringServiceAction.md) | Required if RecurringLocationId is set. Determines how many of the customer&#39;s locations that recurring services should be added to: all, single, or none (which deletes existing recurring services). |
**recurring_location_id** | **int** | The location at which recurring services are scheduled (null if all locations) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
