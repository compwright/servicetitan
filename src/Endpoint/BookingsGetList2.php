<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class BookingsGetList2 extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $booking_provider;
    protected $tenant;

    /**
     * Gets a list of bookings for a booking provider.
     *
     * @param int   $bookingProvider format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var string $ids Perform lookup by multiple IDs (maximum 50)
     * @var int    $page Format - int32. The logical number of page to return, starting from 1
     * @var int    $pageSize Format - int32. How many records to return (50 by default)
     * @var bool   $includeTotal Whether total count should be returned
     * @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     * @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     * @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     * @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     * @var string $externalId Filters by booking's external ID
     * @var string $sort Applies sorting by the specified field:\
     *             "?sort=+FieldName" for ascending order,\
     *             "?sort=-FieldName" for descending order.\
     *             \
     *             Available fields are: Id, ModifiedOn, CreatedOn.
     *             }
     */
    public function __construct(int $bookingProvider, int $tenant, array $queryParameters = [])
    {
        $this->booking_provider = $bookingProvider;
        $this->tenant = $tenant;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{booking_provider}', '{tenant}'], [$this->booking_provider, $this->tenant], '/crm/v2/tenant/{tenant}/booking-provider/{booking_provider}/bookings');
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
        $optionsResolver->setDefined(['ids', 'page', 'pageSize', 'includeTotal', 'createdBefore', 'createdOnOrAfter', 'modifiedBefore', 'modifiedOnOrAfter', 'externalId', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->addAllowedTypes('createdBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('createdOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedBefore', ['string', 'null']);
        $optionsResolver->addAllowedTypes('modifiedOnOrAfter', ['string', 'null']);
        $optionsResolver->addAllowedTypes('externalId', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\BookingsGetList2BadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2BookingResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\BookingsGetList2BadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
