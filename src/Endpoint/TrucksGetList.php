<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class TrucksGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Get a list of trucks.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int  $page Format - int32. The logical number of page to return, starting from 1
     * @var int  $pageSize Format - int32. How many records to return (50 by default)
     * @var bool $includeTotal Whether total count should be returned
     *           }
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
        return str_replace(['{tenant}'], [$this->tenant], '/inventory/v2/tenant/{tenant}/trucks');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2TruckResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\TrucksGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfInventoryV2TruckResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\TrucksGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
