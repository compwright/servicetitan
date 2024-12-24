<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class BulkTagsRemoveTags extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Remove multiple tags to more than 1 customer.
     *
     * @param int $tenant Tenant ID
     */
    public function __construct(int $tenant, ?\CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $requestBody = null)
    {
        $this->tenant = $tenant;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{tenant}'], [$this->tenant], '/crm/v2/tenant/{tenant}/tags');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     *
     * @throws \CompWright\ServiceTitan\Exception\BulkTagsRemoveTagsBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\BulkTagsRemoveTagsConflictException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\BulkTagsRemoveTagsBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\BulkTagsRemoveTagsConflictException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
