<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class EstimatesGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $jobId format - int64
     *     @var int $projectId format - int64
     *     @var string $jobNumber
     *     @var float $totalGreater format - decimal
     *     @var float $totalLess format - decimal
     *     @var int $soldById format - int64
     *     @var int $soldByEmployeeId format - int64
     *     @var string $ids
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $soldAfter format - date-time (as date-time in RFC3339)
     *     @var string $soldBefore format - date-time (as date-time in RFC3339)
     *     @var string $status
     *     @var string $active Values: [True, Any, False]
     *     @var string $orderBy
     *     @var string $orderByDirection
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339).
     * }
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
        return str_replace(['{tenant}'], [$this->tenant], '/sales/v2/tenant/{tenant}/estimates');
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
        $optionsResolver->setDefined(['jobId', 'projectId', 'jobNumber', 'totalGreater', 'totalLess', 'soldById', 'soldByEmployeeId', 'ids', 'page', 'pageSize', 'includeTotal', 'soldAfter', 'soldBefore', 'status', 'active', 'orderBy', 'orderByDirection', 'createdBefore', 'createdOnOrAfter', 'modifiedBefore', 'modifiedOnOrAfter']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('jobId', ['int', 'null']);
        $optionsResolver->setAllowedTypes('projectId', ['int', 'null']);
        $optionsResolver->setAllowedTypes('jobNumber', ['string']);
        $optionsResolver->setAllowedTypes('totalGreater', ['float', 'null']);
        $optionsResolver->setAllowedTypes('totalLess', ['float', 'null']);
        $optionsResolver->setAllowedTypes('soldById', ['int', 'null']);
        $optionsResolver->setAllowedTypes('soldByEmployeeId', ['int', 'null']);
        $optionsResolver->setAllowedTypes('ids', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int', 'null']);
        $optionsResolver->setAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->setAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->setAllowedTypes('soldAfter', ['string', 'null']);
        $optionsResolver->setAllowedTypes('soldBefore', ['string', 'null']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('active', ['string', 'null']);
        $optionsResolver->setAllowedTypes('orderBy', ['string']);
        $optionsResolver->setAllowedTypes('orderByDirection', ['string']);
        $optionsResolver->setAllowedTypes('createdBefore', ['string', 'null']);
        $optionsResolver->setAllowedTypes('createdOnOrAfter', ['string', 'null']);
        $optionsResolver->setAllowedTypes('modifiedBefore', ['string', 'null']);
        $optionsResolver->setAllowedTypes('modifiedOnOrAfter', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\EstimatesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfEstimatesV2EstimateResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfEstimatesV2EstimateResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\EstimatesGetListBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
