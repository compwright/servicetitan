<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class PayrollsGetEmployeePayrolls extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $employee;
    protected $tenant;

    /**
     * Gets a list of employee payrolls.
     *
     * @param int   $employee        Format - int64. The employee ID
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $startedOnOrAfter Format - date-time (as date-time in RFC3339). Return items having start date after certain date/time (in UTC)
     *     @var string $endedOnOrBefore Format - date-time (as date-time in RFC3339). Return items having end date before certain date/time (in UTC)
     * }
     */
    public function __construct(int $employee, int $tenant, array $queryParameters = [])
    {
        $this->employee = $employee;
        $this->tenant = $tenant;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{employee}', '{tenant}'], [$this->employee, $this->tenant], '/payroll/v2/tenant/{tenant}/employees/{employee}/payrolls');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'startedOnOrAfter', 'endedOnOrBefore']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int', 'null']);
        $optionsResolver->setAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->setAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->setAllowedTypes('startedOnOrAfter', ['string', 'null']);
        $optionsResolver->setAllowedTypes('endedOnOrBefore', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\PayrollsGetEmployeePayrollsBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\PayrollsGetEmployeePayrollsConflictException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollsPayrollResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfPayrollV2PayrollsPayrollResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\PayrollsGetEmployeePayrollsBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\PayrollsGetEmployeePayrollsConflictException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
