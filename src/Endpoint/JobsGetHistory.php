<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class JobsGetHistory extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $id;
    protected $tenant;

    /**
     * Gets a list of history entries for the specified job.
     *
     * @param int $id     format - int64
     * @param int $tenant Tenant ID
     */
    public function __construct(int $id, int $tenant)
    {
        $this->id = $id;
        $this->tenant = $tenant;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{tenant}'], [$this->id, $this->tenant], '/jpm/v2/tenant/{tenant}/jobs/{id}/history');
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
     * @return \CompWright\ServiceTitan\Model\CrmV2JobHistoryResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetHistoryBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsGetHistoryNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\CrmV2JobHistoryResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\JobsGetHistoryBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\JobsGetHistoryNotFoundException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
