<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class BookingsGetForProvider extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $booking_provider;
    protected $id;
    protected $tenant;

    /**
     * Gets a booking by ID for a booking provider.
     *
     * @param int $bookingProvider format - int64
     * @param int $id              format - int64
     * @param int $tenant          Tenant ID
     */
    public function __construct(int $bookingProvider, int $id, int $tenant)
    {
        $this->booking_provider = $bookingProvider;
        $this->id = $id;
        $this->tenant = $tenant;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{booking_provider}', '{id}', '{tenant}'], [$this->booking_provider, $this->id, $this->tenant], '/crm/v2/tenant/{tenant}/booking-provider/{booking_provider}/bookings/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\BookingsGetForProviderBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\BookingsGetForProviderNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2BookingResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\CrmV2BookingResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\BookingsGetForProviderBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\BookingsGetForProviderNotFoundException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
