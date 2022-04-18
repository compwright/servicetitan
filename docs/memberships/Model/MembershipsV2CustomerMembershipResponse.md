# # MembershipsV2CustomerMembershipResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Customer membership ID |
**created_on** | **\DateTime** | When customer membership was created |
**created_by_id** | **int** | ID of the user that created this membership | [optional]
**modified_on** | **\DateTime** | When customer membership was last modified |
**follow_up_on** | **\DateTime** | Follow up on date |
**cancellation_date** | **\DateTime** | When customer membership was or will be cancelled | [optional]
**from** | **\DateTime** | Beginning date of customer membership | [optional]
**next_scheduled_bill_date** | **\DateTime** | Next scheduled billing date | [optional]
**to** | **\DateTime** | End date of customer membership | [optional]
**billing_frequency** | [**OneOfMembershipsV2MembershipRecurrenceType**](OneOfMembershipsV2MembershipRecurrenceType.md) | How often the customer membership is billed |
**renewal_billing_frequency** | [**OneOfMembershipsV2MembershipRecurrenceType**](OneOfMembershipsV2MembershipRecurrenceType.md) | Renewal billing frequency | [optional]
**status** | [**OneOfMembershipsV2MembershipStatus**](OneOfMembershipsV2MembershipStatus.md) | Current status of the customer membership |
**follow_up_status** | [**OneOfMembershipsV2OpportunityStatus**](OneOfMembershipsV2OpportunityStatus.md) | Follow-up status of the customer membership |
**active** | **bool** | Whether customer membership is active |
**initial_deferred_revenue** | **float** | Initial deferred revenue |
**duration** | **int** | Duration of customer membership in months | [optional]
**renewal_duration** | **int** | Renewal duration | [optional]
**business_unit_id** | **int** | Business unit ID |
**customer_id** | **int** | Customer ID of membership |
**membership_type_id** | **int** | The membership type ID of the customer membership |
**activated_by_id** | **int** | ID of the user that activated this membership | [optional]
**activated_from_id** | **int** | ID of the invoice item that is the sale task of this membership | [optional]
**billing_template_id** | **int** | ID of the invoice template used for membership billing | [optional]
**cancellation_balance_invoice_id** | **int** | Cancellation balance invoice ID | [optional]
**cancellation_invoice_id** | **int** | ID of the invoice that either charged or refunded the deferred revenue balance of the customer membership | [optional]
**follow_up_custom_status_id** | **int** | ID of custom followup status | [optional]
**location_id** | **int** | ID of location for this customer membership | [optional]
**payment_method_id** | **int** | Preferred payment method ID | [optional]
**payment_type_id** | **int** | ID of payment type | [optional]
**recurring_location_id** | **int** | Recurring Location ID | [optional]
**renewal_membership_task_id** | **int** | Task ID that renews this membership | [optional]
**renewed_by_id** | **int** | ID of the user that renewed this membership | [optional]
**sold_by_id** | **int** | ID of the user that was credited for the sale of this membership | [optional]
**customer_po** | **string** | Customer Purchase Order | [optional]
**import_id** | **string** | Internal import ID label | [optional]
**memo** | **string** | Memo for customer membership | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
