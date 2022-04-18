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


$apiInstance = new CompWright\ServiceTitan\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_provider = 56; // int | Format - int64.
$tenant = 56; // int | Tenant ID
$crm_v2_create_booking_request = {"source":"string","name":"string","address":{"street":"string","unit":"string","city":"string","state":"string","zip":"string","country":"string"},"contacts":[{"type":"Phone","value":"string","memo":"string"}],"customerType":"string","start":"string","summary":"string","campaignId":0,"businessUnitId":0,"jobTypeId":0,"priority":{},"isFirstTimeClient":true,"uploadedImages":["string"],"isSendConfirmationEmail":true,"externalId":"string"}; // \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest

try {
    $result = $apiInstance->bookingsCreate($booking_provider, $tenant, $crm_v2_create_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-integration.servicetitan.io/crm/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingsApi* | [**bookingsCreate**](docs/Api/BookingsApi.md#bookingscreate) | **POST** /tenant/{tenant}/booking-provider/{booking_provider}/bookings | Creates a booking for a booking provider
*BookingsApi* | [**bookingsCreateContact**](docs/Api/BookingsApi.md#bookingscreatecontact) | **POST** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts | Creates a contact on the specified booking for a booking provider
*BookingsApi* | [**bookingsDeleteContact**](docs/Api/BookingsApi.md#bookingsdeletecontact) | **DELETE** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts/{contactId} | Removes a contact from a booking for a booking provider
*BookingsApi* | [**bookingsGet**](docs/Api/BookingsApi.md#bookingsget) | **GET** /tenant/{tenant}/bookings/{id} | Gets a booking by ID
*BookingsApi* | [**bookingsGetContactList**](docs/Api/BookingsApi.md#bookingsgetcontactlist) | **GET** /tenant/{tenant}/bookings/{id}/contacts | Get a list of contacts for a booking
*BookingsApi* | [**bookingsGetContactList2**](docs/Api/BookingsApi.md#bookingsgetcontactlist2) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts | Get a list of contacts for a booking for a booking provider
*BookingsApi* | [**bookingsGetForProvider**](docs/Api/BookingsApi.md#bookingsgetforprovider) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id} | Gets a booking by ID for a booking provider
*BookingsApi* | [**bookingsGetList**](docs/Api/BookingsApi.md#bookingsgetlist) | **GET** /tenant/{tenant}/bookings | Gets a list of bookings
*BookingsApi* | [**bookingsGetList2**](docs/Api/BookingsApi.md#bookingsgetlist2) | **GET** /tenant/{tenant}/booking-provider/{booking_provider}/bookings | Gets a list of bookings for a booking provider
*BookingsApi* | [**bookingsUpdate**](docs/Api/BookingsApi.md#bookingsupdate) | **PATCH** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id} | Updates a booking for a booking provider
*BookingsApi* | [**bookingsUpdateBookingContact**](docs/Api/BookingsApi.md#bookingsupdatebookingcontact) | **PATCH** /tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}/contacts/{contactId} | Updates a single booking contact for a booking provider
*BulkTagsApi* | [**bulkTagsAddTags**](docs/Api/BulkTagsApi.md#bulktagsaddtags) | **PUT** /tenant/{tenant}/tags | Add multiple tags to more than 1 customer
*BulkTagsApi* | [**bulkTagsRemoveTags**](docs/Api/BulkTagsApi.md#bulktagsremovetags) | **DELETE** /tenant/{tenant}/tags | Remove multiple tags to more than 1 customer
*CustomersApi* | [**customersCreate**](docs/Api/CustomersApi.md#customerscreate) | **POST** /tenant/{tenant}/customers | Creates a New Customer
*CustomersApi* | [**customersCreateContact**](docs/Api/CustomersApi.md#customerscreatecontact) | **POST** /tenant/{tenant}/customers/{id}/contacts | Creates a contact on the customer
*CustomersApi* | [**customersCreateNote**](docs/Api/CustomersApi.md#customerscreatenote) | **POST** /tenant/{tenant}/customers/{id}/notes | Creates a New Note
*CustomersApi* | [**customersDeleteContact**](docs/Api/CustomersApi.md#customersdeletecontact) | **DELETE** /tenant/{tenant}/customers/{id}/contacts/{contactId} | Removes a contact from a customer
*CustomersApi* | [**customersGet**](docs/Api/CustomersApi.md#customersget) | **GET** /tenant/{tenant}/customers/{id} | Gets a Customer specified by ID
*CustomersApi* | [**customersGetContactsList**](docs/Api/CustomersApi.md#customersgetcontactslist) | **GET** /tenant/{tenant}/customers/{id}/contacts | Gets a list of contacts for the specified customer
*CustomersApi* | [**customersGetList**](docs/Api/CustomersApi.md#customersgetlist) | **GET** /tenant/{tenant}/customers | Gets a list of Customers
*CustomersApi* | [**customersGetModifiedContactsList**](docs/Api/CustomersApi.md#customersgetmodifiedcontactslist) | **GET** /tenant/{tenant}/customers/contacts | Gets a list of contacts and customers for a specific modified-on date range. Either modifiedOn or modifiedOnOrAfter parameter must be specified
*CustomersApi* | [**customersGetNotes**](docs/Api/CustomersApi.md#customersgetnotes) | **GET** /tenant/{tenant}/customers/{id}/notes | Gets a list of notes for a customer
*CustomersApi* | [**customersUpdate**](docs/Api/CustomersApi.md#customersupdate) | **PATCH** /tenant/{tenant}/customers/{id} | Update a customer
*CustomersApi* | [**customersUpdateContact**](docs/Api/CustomersApi.md#customersupdatecontact) | **PATCH** /tenant/{tenant}/customers/{id}/contacts/{contactId} | Updates a contact on the customer
*LeadsApi* | [**leadsCreate**](docs/Api/LeadsApi.md#leadscreate) | **POST** /tenant/{tenant}/leads | Creates a lead
*LeadsApi* | [**leadsCreateFollowUp**](docs/Api/LeadsApi.md#leadscreatefollowup) | **POST** /tenant/{tenant}/leads/{id}/follow-up | Leads_CreateFollowUp
*LeadsApi* | [**leadsCreateNote**](docs/Api/LeadsApi.md#leadscreatenote) | **POST** /tenant/{tenant}/leads/{id}/notes | Creates a note on the specified lead
*LeadsApi* | [**leadsDismiss**](docs/Api/LeadsApi.md#leadsdismiss) | **POST** /tenant/{tenant}/leads/{id}/dismiss | Dismisses a lead specified by ID
*LeadsApi* | [**leadsGet**](docs/Api/LeadsApi.md#leadsget) | **GET** /tenant/{tenant}/leads/{id} | Gets a lead specified by ID
*LeadsApi* | [**leadsGetList**](docs/Api/LeadsApi.md#leadsgetlist) | **GET** /tenant/{tenant}/leads | Gets a list of leads
*LeadsApi* | [**leadsGetNotes**](docs/Api/LeadsApi.md#leadsgetnotes) | **GET** /tenant/{tenant}/leads/{id}/notes | Gets notes for a lead
*LeadsApi* | [**leadsUpdate**](docs/Api/LeadsApi.md#leadsupdate) | **PATCH** /tenant/{tenant}/leads/{id} | Updates a lead
*LocationsApi* | [**locationsCreate**](docs/Api/LocationsApi.md#locationscreate) | **POST** /tenant/{tenant}/locations | Creates a new location
*LocationsApi* | [**locationsCreateContact**](docs/Api/LocationsApi.md#locationscreatecontact) | **POST** /tenant/{tenant}/locations/{id}/contacts | Creates a contact on the location
*LocationsApi* | [**locationsCreateNote**](docs/Api/LocationsApi.md#locationscreatenote) | **POST** /tenant/{tenant}/locations/{id}/notes | Creates a note on the specified location
*LocationsApi* | [**locationsDeleteContact**](docs/Api/LocationsApi.md#locationsdeletecontact) | **DELETE** /tenant/{tenant}/locations/{id}/contacts/{contactId} | Removes a contact from a location
*LocationsApi* | [**locationsGet**](docs/Api/LocationsApi.md#locationsget) | **GET** /tenant/{tenant}/locations/{id} | Gets a location specified by ID
*LocationsApi* | [**locationsGetContactsList**](docs/Api/LocationsApi.md#locationsgetcontactslist) | **GET** /tenant/{tenant}/locations/{id}/contacts | Gets a list of contacts for the specified location
*LocationsApi* | [**locationsGetList**](docs/Api/LocationsApi.md#locationsgetlist) | **GET** /tenant/{tenant}/locations | Gets a list of locations
*LocationsApi* | [**locationsGetLocationNotes**](docs/Api/LocationsApi.md#locationsgetlocationnotes) | **GET** /tenant/{tenant}/locations/{id}/notes | Gets a list of notes on the specified location
*LocationsApi* | [**locationsGetLocationsContactsList**](docs/Api/LocationsApi.md#locationsgetlocationscontactslist) | **GET** /tenant/{tenant}/locations/contacts | Gets a list of contacts for locations. Either modifiedOn or modifiedOnOrAfter parameter must be specified
*LocationsApi* | [**locationsUpdate**](docs/Api/LocationsApi.md#locationsupdate) | **PATCH** /tenant/{tenant}/locations/{id} | Updates a location
*LocationsApi* | [**locationsUpdateContact**](docs/Api/LocationsApi.md#locationsupdatecontact) | **PATCH** /tenant/{tenant}/locations/{id}/contacts/{contactId} | Updates a contact on the location

## Models

- [ActiveQueryFilter](docs/Model/ActiveQueryFilter.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [CrmV2AddBulkTagsRequest](docs/Model/CrmV2AddBulkTagsRequest.md)
- [CrmV2AddressModel](docs/Model/CrmV2AddressModel.md)
- [CrmV2AddressPatchModel](docs/Model/CrmV2AddressPatchModel.md)
- [CrmV2BookingContactModel](docs/Model/CrmV2BookingContactModel.md)
- [CrmV2BookingContactResponse](docs/Model/CrmV2BookingContactResponse.md)
- [CrmV2BookingResponse](docs/Model/CrmV2BookingResponse.md)
- [CrmV2BookingStatus](docs/Model/CrmV2BookingStatus.md)
- [CrmV2ContactCreateRequest](docs/Model/CrmV2ContactCreateRequest.md)
- [CrmV2ContactType](docs/Model/CrmV2ContactType.md)
- [CrmV2CreateBookingRequest](docs/Model/CrmV2CreateBookingRequest.md)
- [CrmV2CreateCustomerNoteRequest](docs/Model/CrmV2CreateCustomerNoteRequest.md)
- [CrmV2CreateFollowUpRequest](docs/Model/CrmV2CreateFollowUpRequest.md)
- [CrmV2CustomerType](docs/Model/CrmV2CustomerType.md)
- [CrmV2CustomersCreateCustomerContactRequest](docs/Model/CrmV2CustomersCreateCustomerContactRequest.md)
- [CrmV2CustomersCreateCustomerRequest](docs/Model/CrmV2CustomersCreateCustomerRequest.md)
- [CrmV2CustomersCreatedCustomerResponse](docs/Model/CrmV2CustomersCreatedCustomerResponse.md)
- [CrmV2CustomersCustomFieldModel](docs/Model/CrmV2CustomersCustomFieldModel.md)
- [CrmV2CustomersCustomFieldUpdateModel](docs/Model/CrmV2CustomersCustomFieldUpdateModel.md)
- [CrmV2CustomersCustomerAddress](docs/Model/CrmV2CustomersCustomerAddress.md)
- [CrmV2CustomersCustomerContact](docs/Model/CrmV2CustomersCustomerContact.md)
- [CrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse](docs/Model/CrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse.md)
- [CrmV2CustomersCustomerContactWithModifiedOnResponse](docs/Model/CrmV2CustomersCustomerContactWithModifiedOnResponse.md)
- [CrmV2CustomersCustomerResponse](docs/Model/CrmV2CustomersCustomerResponse.md)
- [CrmV2CustomersNewCustomerContact](docs/Model/CrmV2CustomersNewCustomerContact.md)
- [CrmV2CustomersNewLocation](docs/Model/CrmV2CustomersNewLocation.md)
- [CrmV2CustomersPhoneSettings](docs/Model/CrmV2CustomersPhoneSettings.md)
- [CrmV2CustomersUpdateCustomerAddress](docs/Model/CrmV2CustomersUpdateCustomerAddress.md)
- [CrmV2CustomersUpdateCustomerContactRequest](docs/Model/CrmV2CustomersUpdateCustomerContactRequest.md)
- [CrmV2CustomersUpdateCustomerRequest](docs/Model/CrmV2CustomersUpdateCustomerRequest.md)
- [CrmV2DismissLeadRequest](docs/Model/CrmV2DismissLeadRequest.md)
- [CrmV2FollowUpResponse](docs/Model/CrmV2FollowUpResponse.md)
- [CrmV2LeadCreateRequest](docs/Model/CrmV2LeadCreateRequest.md)
- [CrmV2LeadNoteCreateRequest](docs/Model/CrmV2LeadNoteCreateRequest.md)
- [CrmV2LeadResponse](docs/Model/CrmV2LeadResponse.md)
- [CrmV2LeadStatus](docs/Model/CrmV2LeadStatus.md)
- [CrmV2LeadUpdateRequest](docs/Model/CrmV2LeadUpdateRequest.md)
- [CrmV2LocationContactCreateRequest](docs/Model/CrmV2LocationContactCreateRequest.md)
- [CrmV2LocationContactResponse](docs/Model/CrmV2LocationContactResponse.md)
- [CrmV2LocationContactUpdateRequest](docs/Model/CrmV2LocationContactUpdateRequest.md)
- [CrmV2LocationNoteCreateRequest](docs/Model/CrmV2LocationNoteCreateRequest.md)
- [CrmV2LocationsAddressPatchModel](docs/Model/CrmV2LocationsAddressPatchModel.md)
- [CrmV2LocationsContactResponse](docs/Model/CrmV2LocationsContactResponse.md)
- [CrmV2LocationsCreateLocationRequest](docs/Model/CrmV2LocationsCreateLocationRequest.md)
- [CrmV2LocationsCreateLocationResponse](docs/Model/CrmV2LocationsCreateLocationResponse.md)
- [CrmV2LocationsLocationContact](docs/Model/CrmV2LocationsLocationContact.md)
- [CrmV2LocationsLocationResponse](docs/Model/CrmV2LocationsLocationResponse.md)
- [CrmV2LocationsUpdateLocationRequest](docs/Model/CrmV2LocationsUpdateLocationRequest.md)
- [CrmV2NoteResponse](docs/Model/CrmV2NoteResponse.md)
- [CrmV2Priority](docs/Model/CrmV2Priority.md)
- [CrmV2RemoveBulkTagsRequest](docs/Model/CrmV2RemoveBulkTagsRequest.md)
- [CrmV2UpdateBookingContactRequest](docs/Model/CrmV2UpdateBookingContactRequest.md)
- [CrmV2UpdateBookingRequest](docs/Model/CrmV2UpdateBookingRequest.md)
- [PaginatedResponseOfCrmV2BookingContactResponse](docs/Model/PaginatedResponseOfCrmV2BookingContactResponse.md)
- [PaginatedResponseOfCrmV2BookingResponse](docs/Model/PaginatedResponseOfCrmV2BookingResponse.md)
- [PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse](docs/Model/PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnAndCustomerIdResponse.md)
- [PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnResponse](docs/Model/PaginatedResponseOfCrmV2CustomersCustomerContactWithModifiedOnResponse.md)
- [PaginatedResponseOfCrmV2CustomersCustomerResponse](docs/Model/PaginatedResponseOfCrmV2CustomersCustomerResponse.md)
- [PaginatedResponseOfCrmV2LeadResponse](docs/Model/PaginatedResponseOfCrmV2LeadResponse.md)
- [PaginatedResponseOfCrmV2LocationContactResponse](docs/Model/PaginatedResponseOfCrmV2LocationContactResponse.md)
- [PaginatedResponseOfCrmV2LocationsContactResponse](docs/Model/PaginatedResponseOfCrmV2LocationsContactResponse.md)
- [PaginatedResponseOfCrmV2LocationsLocationResponse](docs/Model/PaginatedResponseOfCrmV2LocationsLocationResponse.md)
- [PaginatedResponseOfCrmV2NoteResponse](docs/Model/PaginatedResponseOfCrmV2NoteResponse.md)

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