<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class JobsGetNotes extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $id;
    protected $tenant;

    /**
     * Gets a list of notes on the specified job.
     *
     * @param int   $id              format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int  $page Format - int32. The logical number of page to return, starting from 1
     * @var int  $pageSize Format - int32. How many records to return (50 by default)
     * @var bool $includeTotal Whether total count should be returned
     *           }
     */
    public function __construct(int $id, int $tenant, array $queryParameters = [])
    {
        $this->id = $id;
        $this->tenant = $tenant;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{tenant}'], [$this->id, $this->tenant], '/jpm/v2/tenant/{tenant}/jobs/{id}/notes');
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
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetNotesBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsGetNotesNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\JobsGetNotesBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\JobsGetNotesNotFoundException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
