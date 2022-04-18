# ServiceTitan v2 API client for PHP

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

For more information, please visit [https://developer.servicetitan.io](https://developer.servicetitan.io).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.org/compwright/servicetitan.git"
    }
  ],
  "require": {
    "compwright/servicetitan": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ServiceTitan v2 API client for PHP/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new CompWright\ServiceTitan\Api\InventoryBillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = 56; // int | Tenant ID
$ids = 'ids_example'; // string
$batch_id = 56; // int | Format - int64.
$batch_number = 56; // int | Format - int32.
$bill_number = 'bill_number_example'; // string
$business_unit_ids = 'business_unit_ids_example'; // string
$custom_field_fields = array('key' => 'custom_field_fields_example'); // array<string,string> | Name, value
$custom_field_operator = 'custom_field_operator_example'; // OneOfAccountingV2LogicalOperator | Can be \"or\" or \"null\" or \"and\"\\ Values: [And, Or]
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$job_number = 'job_number_example'; // string
$purchase_order_number = 'purchase_order_number_example'; // string
$purchase_order_types = 'purchase_order_types_example'; // string
$sync_statuses = array(new \CompWright\ServiceTitan\Model\\CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus()); // \CompWright\ServiceTitan\Model\AccountingV2InventoryBillSyncStatus[]
$min_cost = 3.4; // float | Format - decimal.
$max_cost = 3.4; // float | Format - decimal.
$page = 56; // int | Format - int32.
$page_size = 56; // int | Format - int32.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$created_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$modified_on_or_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$include_total = True; // bool

try {
    $result = $apiInstance->inventoryBillsGetList($tenant, $ids, $batch_id, $batch_number, $bill_number, $business_unit_ids, $custom_field_fields, $custom_field_operator, $date_from, $date_to, $job_number, $purchase_order_number, $purchase_order_types, $sync_statuses, $min_cost, $max_cost, $page, $page_size, $created_before, $created_on_or_after, $modified_before, $modified_on_or_after, $include_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBillsApi->inventoryBillsGetList: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-integration.servicetitan.io/accounting/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryBillsApi* | [**inventoryBillsGetList**](docs/Api/InventoryBillsApi.md#inventorybillsgetlist) | **GET** /tenant/{tenant}/inventory-bills | InventoryBills_GetList
*InventoryBillsApi* | [**inventoryBillsUpdateCustomFields**](docs/Api/InventoryBillsApi.md#inventorybillsupdatecustomfields) | **PATCH** /tenant/{tenant}/inventory-bills/custom-fields | InventoryBills_UpdateCustomFields
*InvoicesApi* | [**invoicesCreateAdjustmentInvoice**](docs/Api/InvoicesApi.md#invoicescreateadjustmentinvoice) | **POST** /tenant/{tenant}/invoices | create adjustment invoice
*InvoicesApi* | [**invoicesDeleteInvoiceItem**](docs/Api/InvoicesApi.md#invoicesdeleteinvoiceitem) | **DELETE** /tenant/{tenant}/invoices/{invoiceId}/items/{itemId} | delete invoice item
*InvoicesApi* | [**invoicesGetList**](docs/Api/InvoicesApi.md#invoicesgetlist) | **GET** /tenant/{tenant}/invoices | Gets a list of invoices
*InvoicesApi* | [**invoicesMarkAsExported**](docs/Api/InvoicesApi.md#invoicesmarkasexported) | **POST** /tenant/{tenant}/invoices/markasexported | mark invoice as exported. Id &#x3D; invoiceId
*InvoicesApi* | [**invoicesUpdateCustomFields**](docs/Api/InvoicesApi.md#invoicesupdatecustomfields) | **PATCH** /tenant/{tenant}/invoices/custom-fields | Updates custom fields for specified invoices
*InvoicesApi* | [**invoicesUpdateInvoice**](docs/Api/InvoicesApi.md#invoicesupdateinvoice) | **PATCH** /tenant/{tenant}/invoices/{id} | update invoice
*InvoicesApi* | [**invoicesUpdateInvoiceItems**](docs/Api/InvoicesApi.md#invoicesupdateinvoiceitems) | **PATCH** /tenant/{tenant}/invoices/{invoiceId}/items | update invoice items
*PaymentTermsApi* | [**paymentTermsGetPaymentTermModel**](docs/Api/PaymentTermsApi.md#paymenttermsgetpaymenttermmodel) | **GET** /tenant/{tenant}/payment-terms/{customerId} | Gets customer’s default Payment Term
*PaymentTypesApi* | [**paymentTypesGet**](docs/Api/PaymentTypesApi.md#paymenttypesget) | **GET** /tenant/{tenant}/payment-types/{id} | Gets payment type specified by ID
*PaymentTypesApi* | [**paymentTypesGetList**](docs/Api/PaymentTypesApi.md#paymenttypesgetlist) | **GET** /tenant/{tenant}/payment-types | Gets a list of payment types
*PaymentsApi* | [**paymentsCreate**](docs/Api/PaymentsApi.md#paymentscreate) | **POST** /tenant/{tenant}/payments | Creates new payment
*PaymentsApi* | [**paymentsGetList**](docs/Api/PaymentsApi.md#paymentsgetlist) | **GET** /tenant/{tenant}/payments | Gets a paginated list of payments
*PaymentsApi* | [**paymentsUpdate**](docs/Api/PaymentsApi.md#paymentsupdate) | **PATCH** /tenant/{tenant}/payments/{id} | Updates specified payment in \&quot;patch\&quot; mode
*PaymentsApi* | [**paymentsUpdateCustomFields**](docs/Api/PaymentsApi.md#paymentsupdatecustomfields) | **PATCH** /tenant/{tenant}/payments/custom-fields | Update custom fields for specified payments
*PaymentsApi* | [**paymentsUpdateStatus**](docs/Api/PaymentsApi.md#paymentsupdatestatus) | **POST** /tenant/{tenant}/payments/status | Updates payment status
*TaxZonesApi* | [**taxZonesGetList**](docs/Api/TaxZonesApi.md#taxzonesgetlist) | **GET** /tenant/{tenant}/tax-zones | Get a list of tax zones and their rates.

## Models

- [AccountingCustomFieldModel](docs/Model/AccountingCustomFieldModel.md)
- [AccountingV2AddressResponse](docs/Model/AccountingV2AddressResponse.md)
- [AccountingV2AdjustmentInvoiceCreateRequest](docs/Model/AccountingV2AdjustmentInvoiceCreateRequest.md)
- [AccountingV2BatchResponse](docs/Model/AccountingV2BatchResponse.md)
- [AccountingV2CustomFieldOperationRequest](docs/Model/AccountingV2CustomFieldOperationRequest.md)
- [AccountingV2CustomFieldPairRequest](docs/Model/AccountingV2CustomFieldPairRequest.md)
- [AccountingV2CustomFieldResponse](docs/Model/AccountingV2CustomFieldResponse.md)
- [AccountingV2CustomFieldUpdateRequest](docs/Model/AccountingV2CustomFieldUpdateRequest.md)
- [AccountingV2DetailedPaymentResponse](docs/Model/AccountingV2DetailedPaymentResponse.md)
- [AccountingV2DiscountAppliedBy](docs/Model/AccountingV2DiscountAppliedBy.md)
- [AccountingV2EmployeeInfoResponse](docs/Model/AccountingV2EmployeeInfoResponse.md)
- [AccountingV2GLAccountResponse](docs/Model/AccountingV2GLAccountResponse.md)
- [AccountingV2InventoryBillItemResponse](docs/Model/AccountingV2InventoryBillItemResponse.md)
- [AccountingV2InventoryBillResponse](docs/Model/AccountingV2InventoryBillResponse.md)
- [AccountingV2InventoryBillSyncStatus](docs/Model/AccountingV2InventoryBillSyncStatus.md)
- [AccountingV2InvoiceItemResponse](docs/Model/AccountingV2InvoiceItemResponse.md)
- [AccountingV2InvoiceItemType](docs/Model/AccountingV2InvoiceItemType.md)
- [AccountingV2InvoiceItemUpdateRequest](docs/Model/AccountingV2InvoiceItemUpdateRequest.md)
- [AccountingV2InvoiceResponse](docs/Model/AccountingV2InvoiceResponse.md)
- [AccountingV2InvoiceUpdateRequest](docs/Model/AccountingV2InvoiceUpdateRequest.md)
- [AccountingV2ItemGroupResponse](docs/Model/AccountingV2ItemGroupResponse.md)
- [AccountingV2JobResponse](docs/Model/AccountingV2JobResponse.md)
- [AccountingV2LogicalOperator](docs/Model/AccountingV2LogicalOperator.md)
- [AccountingV2MarkInvoiceAsExportedUpdateRequest](docs/Model/AccountingV2MarkInvoiceAsExportedUpdateRequest.md)
- [AccountingV2MarkInvoiceAsExportedUpdateResponse](docs/Model/AccountingV2MarkInvoiceAsExportedUpdateResponse.md)
- [AccountingV2NamedFieldResponse](docs/Model/AccountingV2NamedFieldResponse.md)
- [AccountingV2PaymentAppliedResponse](docs/Model/AccountingV2PaymentAppliedResponse.md)
- [AccountingV2PaymentCreateRequest](docs/Model/AccountingV2PaymentCreateRequest.md)
- [AccountingV2PaymentResponse](docs/Model/AccountingV2PaymentResponse.md)
- [AccountingV2PaymentSettlementUpdateRequest](docs/Model/AccountingV2PaymentSettlementUpdateRequest.md)
- [AccountingV2PaymentSplitApiModel](docs/Model/AccountingV2PaymentSplitApiModel.md)
- [AccountingV2PaymentStatus](docs/Model/AccountingV2PaymentStatus.md)
- [AccountingV2PaymentStatusBatchRequest](docs/Model/AccountingV2PaymentStatusBatchRequest.md)
- [AccountingV2PaymentTermAPIModel](docs/Model/AccountingV2PaymentTermAPIModel.md)
- [AccountingV2PaymentTermApplyTo](docs/Model/AccountingV2PaymentTermApplyTo.md)
- [AccountingV2PaymentTermDiscountAPIModel](docs/Model/AccountingV2PaymentTermDiscountAPIModel.md)
- [AccountingV2PaymentTermDueDayType](docs/Model/AccountingV2PaymentTermDueDayType.md)
- [AccountingV2PaymentTermPenaltyAPIModel](docs/Model/AccountingV2PaymentTermPenaltyAPIModel.md)
- [AccountingV2PaymentTermPenaltyFrequency](docs/Model/AccountingV2PaymentTermPenaltyFrequency.md)
- [AccountingV2PaymentTermValueType](docs/Model/AccountingV2PaymentTermValueType.md)
- [AccountingV2PaymentTransactionType](docs/Model/AccountingV2PaymentTransactionType.md)
- [AccountingV2PaymentTypeResponse](docs/Model/AccountingV2PaymentTypeResponse.md)
- [AccountingV2PaymentUpdateRequest](docs/Model/AccountingV2PaymentUpdateRequest.md)
- [AccountingV2RoyaltyResponse](docs/Model/AccountingV2RoyaltyResponse.md)
- [AccountingV2RoyaltyStatus](docs/Model/AccountingV2RoyaltyStatus.md)
- [AccountingV2SalesTaxResponse](docs/Model/AccountingV2SalesTaxResponse.md)
- [AccountingV2SettlementStatus](docs/Model/AccountingV2SettlementStatus.md)
- [AccountingV2TaxBaseTypeNames](docs/Model/AccountingV2TaxBaseTypeNames.md)
- [AccountingV2TaxRateResponse](docs/Model/AccountingV2TaxRateResponse.md)
- [AccountingV2TaxZoneResponse](docs/Model/AccountingV2TaxZoneResponse.md)
- [AccountingV2TransactionProcessingStatus](docs/Model/AccountingV2TransactionProcessingStatus.md)
- [AccountingV2TransactionStatus](docs/Model/AccountingV2TransactionStatus.md)
- [ActiveQueryFilter](docs/Model/ActiveQueryFilter.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [PaginatedResponseOfAccountingV2DetailedPaymentResponse](docs/Model/PaginatedResponseOfAccountingV2DetailedPaymentResponse.md)
- [PaginatedResponseOfAccountingV2InvoiceResponse](docs/Model/PaginatedResponseOfAccountingV2InvoiceResponse.md)
- [PaginatedResponseOfAccountingV2PaymentTypeResponse](docs/Model/PaginatedResponseOfAccountingV2PaymentTypeResponse.md)
- [PaginatedResponseOfAccountingV2TaxZoneResponse](docs/Model/PaginatedResponseOfAccountingV2TaxZoneResponse.md)

## Authorization

### apiKeyHeader

- **Type**: API key
- **API key parameter name**: ST-App-Key
- **Location**: HTTP header



### apiKeyQuery

- **Type**: API key
- **API key parameter name**: servicetitanapplicationkey
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Jonathon Hill, CompWright Enterprises LLC (https://compwright.com)

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`