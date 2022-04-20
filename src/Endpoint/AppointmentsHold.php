<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class AppointmentsHold extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $id;
    protected $tenant;

    /**
     * Puts the appointment on hold.
     *
     * @param int $id     format - int64
     * @param int $tenant Tenant ID
     */
    public function __construct(int $id, int $tenant, ?\CompWright\ServiceTitan\Model\CrmV2HoldAppointmentRequest $requestBody = null)
    {
        $this->id = $id;
        $this->tenant = $tenant;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{tenant}'], [$this->id, $this->tenant], '/jpm/v2/tenant/{tenant}/appointments/{id}/hold');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CompWright\ServiceTitan\Model\CrmV2HoldAppointmentRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\AppointmentsHoldBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\AppointmentsHoldNotFoundException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\AppointmentsHoldConflictException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKeyHeader', 'apiKeyQuery'];
    }
}