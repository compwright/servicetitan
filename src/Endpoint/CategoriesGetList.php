<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class CategoriesGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * GET the categories in your pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int    $page Format - int32. The logical number of page to return, starting from 1
     * @var int    $pageSize Format - int32. How many records to return (50 by default)
     * @var bool   $includeTotal Whether total count should be returned
     * @var string $sort Applies sorting by specified fields
     * @var string $categoryType Values: [Services, Materials]
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
        return str_replace(['{tenant}'], [$this->tenant], '/pricebook/v2/tenant/{tenant}/categories');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'sort', 'categoryType']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('categoryType', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2CategoryResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\CategoriesGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2CategoryResponse', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
