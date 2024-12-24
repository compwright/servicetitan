<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class TimesheetsGetJobTimesheets extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $job;
    protected $tenant;

    /**
     * Gets a list of job timesheets.
     *
     * @param int   $job             format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     * @var int    $technicianId Format - int64. The technician ID
     * @var string $startedOn Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates after certain date/time (in UTC)
     * @var string $endedOn Format - date-time (as date-time in RFC3339). Return items having dispatch, arrive, cancel or done dates before certain date/time (in UTC)
     *             }
     */
    public function __construct(int $job, int $tenant, array $queryParameters = [])
    {
        $this->job = $job;
        $this->tenant = $tenant;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{job}', '{tenant}'], [$this->job, $this->tenant], '/payroll/v2/tenant/{tenant}/jobs/{job}/timesheets');
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
        $optionsResolver->setDefined(['technicianId', 'startedOn', 'endedOn']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('technicianId', ['int', 'null']);
        $optionsResolver->addAllowedTypes('startedOn', ['string', 'null']);
        $optionsResolver->addAllowedTypes('endedOn', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * @return \CompWright\ServiceTitan\Model\PayrollV2TimesheetsJobTimesheetResponse[]|null
     *
     * @throws \CompWright\ServiceTitan\Exception\TimesheetsGetJobTimesheetsBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\ServiceTitan\Model\PayrollV2TimesheetsJobTimesheetResponse[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\TimesheetsGetJobTimesheetsBadRequestException($serializer->deserialize($body, 'CompWright\ServiceTitan\Model\ApiErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
