<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class MembershipTypesGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a list of membership types.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var string $ids Perform lookup by multiple IDs (maximum 50)
     * @var string $active What kind of items should be returned (only active items will be returned by default)\
     *             Values: [True, Any, False]
     * @var int    $duration Format - int32. Filters by membership duration (in months); use null for ongoing memberships
     * @var string $billingFrequency Filters by membership billing frequency\
     *             Values: [OneTime, Monthly, EveryOtherMonth, Quarterly, BiAnnual, Annual]
     * @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     * @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     * @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     * @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     * @var int    $page Format - int32. The logical number of page to return, starting from 1
     * @var int    $pageSize Format - int32. How many records to return (50 by default)
     * @var bool   $includeTotal Whether total count should be returned
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
        return str_replace(['{tenant}'], [$this->tenant], '/memberships/v2/tenant/{tenant}/membership-types');
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
        $optionsResolver->setDefined(['ids', 'active', 'duration', 'billingFrequency', 'createdBefore', 'createdOnOrAfter', 'modifiedBefore', 'modifiedOnOrAfter', 'page', 'pageSize', 'includeTotal']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['string']);
        $optionsResolver->addAllowedTypes('active', ['string', 'null']);
        $optionsResolver->addAllowedTypes('duration', ['int', 'null']);
        $optionsResolver->addAllowedTypes('billingFrequency', ['string', 'null']);
        $optionsResolver->addAllowedTypes('createdBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('createdOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2MembershipTypeResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\MembershipTypesGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfMembershipsV2MembershipTypeResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\MembershipTypesGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
