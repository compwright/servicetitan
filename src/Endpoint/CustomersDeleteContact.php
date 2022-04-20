<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class CustomersDeleteContact extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $id;
    protected $contactId;
    protected $tenant;

    /**
     * Removes a contact from a customer.
     *
     * @param int $id        format - int64
     * @param int $contactId format - int64
     * @param int $tenant    Tenant ID
     */
    public function __construct(int $id, int $contactId, int $tenant)
    {
        $this->id = $id;
        $this->contactId = $contactId;
        $this->tenant = $tenant;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{contactId}', '{tenant}'], [$this->id, $this->contactId, $this->tenant], '/crm/v2/tenant/{tenant}/customers/{id}/contacts/{contactId}');
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
     * @throws \CompWright\ServiceTitan\Exception\CustomersDeleteContactBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\CustomersDeleteContactNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\CustomersDeleteContactConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CustomersDeleteContactBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CustomersDeleteContactNotFoundException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CustomersDeleteContactConflictException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKeyHeader', 'apiKeyQuery'];
    }
}