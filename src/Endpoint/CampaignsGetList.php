<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class CampaignsGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a paginated list of campaigns.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int    $page Format - int32. The logical number of page to return, starting from 1
     * @var int    $pageSize Format - int32. How many records to return (50 by default)
     * @var bool   $includeTotal Whether total count should be returned
     * @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     * @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     * @var string $active What kind of items should be returned (only active items will be returned by default)\
     *             Values: [True, Any, False]
     * @var string $ids Perform lookup by multiple IDs (maximum 50)
     * @var string $name Filters records by name (case-insensitive "contains" operation)
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
        return str_replace(['{tenant}'], [$this->tenant], '/marketing/v2/tenant/{tenant}/campaigns');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'modifiedBefore', 'modifiedOnOrAfter', 'active', 'ids', 'name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->addAllowedTypes('modifiedBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('active', ['string', 'null']);
        $optionsResolver->addAllowedTypes('ids', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\CampaignsGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CampaignsGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
