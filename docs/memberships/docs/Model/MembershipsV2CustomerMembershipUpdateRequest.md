# # MembershipsV2CustomerMembershipUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_unit_id** | **int** | ID of the Business Unit associated to this membership | [optional]
**next_scheduled_bill_date** | **\DateTime** | Next date that this membership will be billed on | [optional]
**status** | [**OneOfMembershipsV2MembershipStatus**](OneOfMembershipsV2MembershipStatus.md) | Status of the membership | [optional]
**memo** | **string** | Memo text field | [optional]
**from** | **\DateTime** | The starting date of this membership | [optional]
**to** | **\DateTime** | The end date of this membership (null if ongoing) | [optional]
**sold_by_id** | **int** | ID of the user that was credited for the sale of this membership | [optional]
**billing_template_id** | **int** | The ID of the invoice template used to bill this membership. Can either be a \&quot;settings template\&quot; (when invoice template is shared – in this case new invoice template will be created), or be a new invoice template created specifically for this customer membership. | [optional]
**location_id** | **int** | Discount location ID of this membership (null if all locations) | [optional]
**recurring_service_action** | [**OneOfMembershipsV2RecurringServiceAction**](OneOfMembershipsV2RecurringServiceAction.md) | Required if RecurringLocationId is set. Determines how many of the customer&#39;s locations that recurring services should be added to: all, single, or none (which deletes existing recurring services). | [optional]
**recurring_location_id** | **int** | The location at which recurring services are scheduled (null if all locations) | [optional]
**payment_method_id** | **int** | The ID of the payment method (credit card or bank account) that should be used for this membership. This field is mutually exclusive with payment type. Only one or the other can be set at a time. | [optional]
**payment_type_id** | **int** | The payment type (cash, check, etc) that should be used for this membership. This field is mutually exclusive with payment type. Only one or the other can be set at a time. Setting payment type means we will not automatically use a payment method to bill the membership and payment will have to be collected manually. | [optional]
**renewal_membership_task_id** | **int** | The ID of the service that will be used as the default to renew this membership. | [optional]
**initial_deferred_revenue** | **float** | The amount of deferred revenue that this membership should start with that is not accounted for in the sale task. | [optional]
**cancellation_balance_invoice_id** | **int** | The ID of the invoice created upon membership cancellation in order to zero out the deferred revenue balance. | [optional]
**cancellation_invoice_id** | **int** | The ID of the invoice optionally created upon membership cancellation in order to charge (or refund) the customer if deferred revenue balance is not 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
