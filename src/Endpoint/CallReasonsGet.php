<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class CallReasonsGet extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a list of call reasons.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
    Values: [True, Any, False]
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
        return str_replace(['{tenant}'], [$this->tenant], '/jbce/v2/tenant/{tenant}/call-reasons');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'active']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int', 'null']);
        $optionsResolver->setAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->setAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->setAllowedTypes('active', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\CallReasonsGetBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfCrmV2CallReasonResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CallReasonsGetBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKeyHeader', 'apiKeyQuery'];
    }
}
