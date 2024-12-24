<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class InvoicesGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a list of invoices.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var string $ids
     * @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     * @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     * @var array  $statuses
     * @var int    $batchId format - int64
     * @var int    $batchNumber format - int32
     * @var int    $page format - int32
     * @var int    $pageSize format - int32
     * @var string $customField.Fields Name, value
     * @var string $customField.Operator Can be "or" or "null" or "and"\
     *             Values: [And, Or]
     * @var bool   $includeTotal
     * @var int    $jobId format - int64
     * @var string $jobNumber
     * @var int    $businessUnitId format - int64
     * @var int    $customerId format - int64
     * @var string $invoicedOnOrAfter format - date-time (as date-time in RFC3339)
     * @var string $invoicedOnBefore format - date-time (as date-time in RFC3339)
     * @var int    $adjustmentToId format - int64
     * @var string $number
     * @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     * @var string $createdBefore format - date-time (as date-time in RFC3339)
     * @var float  $totalGreater format - decimal
     * @var float  $totalLess format - decimal
     * @var string $orderBy
     * @var string $orderByDirection
     *             }
     */
    public function __construct(int $tenant, array $queryParameters = [])
    {
        $this->tenant = $tenant;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{tenant}'], [$this->tenant], '/accounting/v2/tenant/{tenant}/invoices');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ids', 'modifiedBefore', 'modifiedOnOrAfter', 'statuses', 'batchId', 'batchNumber', 'page', 'pageSize', 'customField.Fields', 'customField.Operator', 'includeTotal', 'jobId', 'jobNumber', 'businessUnitId', 'customerId', 'invoicedOnOrAfter', 'invoicedOnBefore', 'adjustmentToId', 'number', 'createdOnOrAfter', 'createdBefore', 'totalGreater', 'totalLess', 'orderBy', 'orderByDirection']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['string']);
        $optionsResolver->addAllowedTypes('modifiedBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('statuses', ['array']);
        $optionsResolver->addAllowedTypes('batchId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('batchNumber', ['int', 'null']);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('customField.Fields', ['string', 'null']);
        $optionsResolver->addAllowedTypes('customField.Operator', ['string', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->addAllowedTypes('jobId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('jobNumber', ['string']);
        $optionsResolver->addAllowedTypes('businessUnitId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('customerId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('invoicedOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('invoicedOnBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('adjustmentToId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('number', ['string']);
        $optionsResolver->addAllowedTypes('createdOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('createdBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('totalGreater', ['float', 'null']);
        $optionsResolver->addAllowedTypes('totalLess', ['float', 'null']);
        $optionsResolver->addAllowedTypes('orderBy', ['string']);
        $optionsResolver->addAllowedTypes('orderByDirection', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2InvoiceResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2InvoiceResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\InvoicesGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
