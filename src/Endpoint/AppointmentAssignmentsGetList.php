<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class AppointmentAssignmentsGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a list of appointment assignments.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int    $page Format - int32. The logical number of page to return, starting from 1
     * @var int    $pageSize Format - int32. How many records to return (50 by default)
     * @var bool   $includeTotal Whether total count should be returned
     * @var string $ids Perform lookup by multiple IDs (maximum 50)
     * @var string $appointmentIds Return appointment assignments for one or more appointments
     * @var int    $jobId Format - int64. Return appointment assignments for a single job
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
        return str_replace(['{tenant}'], [$this->tenant], '/dispatch/v2/tenant/{tenant}/appointment-assignments');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'ids', 'appointmentIds', 'jobId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int', 'null']);
        $optionsResolver->addAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->addAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->addAllowedTypes('ids', ['string']);
        $optionsResolver->addAllowedTypes('appointmentIds', ['string']);
        $optionsResolver->addAllowedTypes('jobId', ['int', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentAssignmentResponse|null
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentAssignmentsGetListBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentAssignmentResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\AppointmentAssignmentsGetListBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
