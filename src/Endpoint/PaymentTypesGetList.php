<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class PaymentTypesGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

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
        return str_replace(['{tenant}'], [$this->tenant], '/accounting/v2/tenant/{tenant}/payment-types');
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
        $optionsResolver->setDefined(['ids', 'active', 'createdBefore', 'createdOnOrAfter', 'page', 'pageSize', 'includeTotal']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('ids', ['string']);
        $optionsResolver->setAllowedTypes('active', ['string', 'null']);
        $optionsResolver->setAllowedTypes('createdBefore', ['string', 'null']);
        $optionsResolver->setAllowedTypes('createdOnOrAfter', ['string', 'null']);
        $optionsResolver->setAllowedTypes('page', ['int', 'null']);
        $optionsResolver->setAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->setAllowedTypes('includeTotal', ['bool', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\PaymentTypesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfAccountingV2PaymentTypeResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfAccountingV2PaymentTypeResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\PaymentTypesGetListBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKeyHeader', 'apiKeyQuery'];
    }
}
