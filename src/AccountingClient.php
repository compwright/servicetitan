<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class AccountingClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var int $batchId format - int64
     *     @var int $batchNumber format - int32
     *     @var string $billNumber
     *     @var string $businessUnitIds
     *     @var string $customField.Fields Name, value
     *     @var string $customField.Operator Can be "or" or "null" or "and"\
     *     @var string $dateFrom format - date-time (as date-time in RFC3339)
     *     @var string $dateTo format - date-time (as date-time in RFC3339)
     *     @var string $jobNumber
     *     @var string $purchaseOrderNumber
     *     @var string $purchaseOrderTypes
     *     @var array $syncStatuses
     *     @var float $minCost format - decimal
     *     @var float $maxCost format - decimal
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var bool $includeTotal
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InventoryBillsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InventoryBillResponse[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function inventoryBillsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InventoryBillsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * @param int                                                                      $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest|null $requestBody
     * @param string                                                                   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InventoryBillsUpdateCustomFieldsBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function inventoryBillsUpdateCustomFields(int $tenant, ?Model\AccountingV2CustomFieldUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InventoryBillsUpdateCustomFields($tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of invoices.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var array $statuses
     *     @var int $batchId format - int64
     *     @var int $batchNumber format - int32
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var string $customField.Fields Name, value
     *     @var string $customField.Operator Can be "or" or "null" or "and"\
     *     @var bool $includeTotal
     *     @var int $jobId format - int64
     *     @var string $jobNumber
     *     @var int $businessUnitId format - int64
     *     @var int $customerId format - int64
     *     @var string $invoicedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $invoicedOnBefore format - date-time (as date-time in RFC3339)
     *     @var int $adjustmentToId format - int64
     *     @var string $number
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var float $totalGreater format - decimal
     *     @var float $totalLess format - decimal
     *     @var string $orderBy
     *     @var string $orderByDirection
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2InvoiceResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * create adjustment invoice.
     *
     * @param int                                                                            $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2AdjustmentInvoiceCreateRequest|null $requestBody
     * @param string                                                                         $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesCreateAdjustmentInvoiceBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesCreateAdjustmentInvoice(int $tenant, ?Model\AccountingV2AdjustmentInvoiceCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesCreateAdjustmentInvoice($tenant, $requestBody), $fetch);
    }

    /**
     * Updates custom fields for specified invoices.
     *
     * @param int                                                                      $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest|null $requestBody
     * @param string                                                                   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesUpdateCustomFieldsBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesUpdateCustomFields(int $tenant, ?Model\AccountingV2CustomFieldUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesUpdateCustomFields($tenant, $requestBody), $fetch);
    }

    /**
     * update invoice.
     *
     * @param int                                                                  $id          format - int64
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2InvoiceUpdateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesUpdateInvoiceBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesUpdateInvoice(int $id, int $tenant, ?Model\AccountingV2InvoiceUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesUpdateInvoice($id, $tenant, $requestBody), $fetch);
    }

    /**
     * update invoice items.
     *
     * @param int                                                                      $invoiceId   format - int64
     * @param int                                                                      $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemUpdateRequest|null $requestBody
     * @param string                                                                   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesUpdateInvoiceItemsBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesUpdateInvoiceItems(int $invoiceId, int $tenant, ?Model\AccountingV2InvoiceItemUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesUpdateInvoiceItems($invoiceId, $tenant, $requestBody), $fetch);
    }

    /**
     * delete invoice item.
     *
     * @param int    $invoiceId format - int64
     * @param int    $itemId    format - int64
     * @param int    $tenant    Tenant ID
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesDeleteInvoiceItemBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesDeleteInvoiceItem(int $invoiceId, int $itemId, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesDeleteInvoiceItem($invoiceId, $itemId, $tenant), $fetch);
    }

    /**
     * mark invoice as exported. Id = invoiceId.
     *
     * @param int                                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateRequest[]|null $requestBody
     * @param string                                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesMarkAsExportedBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2MarkInvoiceAsExportedUpdateResponse[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function invoicesMarkAsExported(int $tenant, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InvoicesMarkAsExported($tenant, $requestBody), $fetch);
    }

    /**
     * Gets a paginated list of payments.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var string $statuses
     *     @var string $paidOnAfter format - date-time (as date-time in RFC3339)
     *     @var string $paidOnBefore format - date-time (as date-time in RFC3339)
     *     @var string $businessUnitIds
     *     @var int $batchNumber format - int32
     *     @var int $batchId format - int64
     *     @var string $transactionType Values: [Undefined, JournalEntry, ReceivePayment]
     *     @var int $customerId format - int64
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $customField.Fields Name, value
     *     @var string $customField.Operator Can be "or" or "null" or "and"\
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2DetailedPaymentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Creates new payment.
     *
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentCreateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentsCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentsCreate(int $tenant, ?Model\AccountingV2PaymentCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentsCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Update custom fields for specified payments.
     *
     * @param int                                                                      $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2CustomFieldUpdateRequest|null $requestBody
     * @param string                                                                   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentsUpdateCustomFieldsBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function paymentsUpdateCustomFields(int $tenant, ?Model\AccountingV2CustomFieldUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentsUpdateCustomFields($tenant, $requestBody), $fetch);
    }

    /**
     * Updates specified payment in "patch" mode.
     *
     * @param int                                                                  $id          format - int64
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentUpdateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentsUpdateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentsUpdate(int $id, int $tenant, ?Model\AccountingV2PaymentUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentsUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Updates payment status.
     *
     * @param int                                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentStatusBatchRequest|null $requestBody
     * @param string                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentsUpdateStatusBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function paymentsUpdateStatus(int $tenant, ?Model\AccountingV2PaymentStatusBatchRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentsUpdateStatus($tenant, $requestBody), $fetch);
    }

    /**
     * Gets customer???s default Payment Term.
     *
     * @param int    $customerId format - int64
     * @param int    $tenant     Tenant ID
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentTermsGetPaymentTermModelBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentTermAPIModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentTermsGetPaymentTermModel(int $customerId, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentTermsGetPaymentTermModel($customerId, $tenant), $fetch);
    }

    /**
     * Gets a list of payment types.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentTypesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2PaymentTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentTypesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentTypesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets payment type specified by ID.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentTypesGetBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function paymentTypesGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PaymentTypesGet($id, $tenant), $fetch);
    }

    /**
     * Gets a list of tax zones and their rates based on the supplied filter.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids Tax Zone Ids to pull tax zones for
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\TaxZonesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2TaxZoneResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function taxZonesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\TaxZonesGetList($tenant, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.servicetitan.io');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \CompWright\ServiceTitan\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
