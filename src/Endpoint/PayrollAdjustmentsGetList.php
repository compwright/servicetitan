<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class PayrollAdjustmentsGetList extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $tenant;

    /**
     * Gets a list of payroll adjustments.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $employeeIds The comma separated list of employee IDs
     *     @var string $postedOnOrAfter Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or after certain date/time (in UTC)
     *     @var string $postedOnOrBefore Format - date-time (as date-time in RFC3339). Return payroll adjustments posted on or before certain date/time (in UTC)
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
        return str_replace(['{tenant}'], [$this->tenant], '/payroll/v2/tenant/{tenant}/payroll-adjustments');
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
        $optionsResolver->setDefined(['page', 'pageSize', 'includeTotal', 'employeeIds', 'postedOnOrAfter', 'postedOnOrBefore']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page', ['int', 'null']);
        $optionsResolver->setAllowedTypes('pageSize', ['int', 'null']);
        $optionsResolver->setAllowedTypes('includeTotal', ['bool', 'null']);
        $optionsResolver->setAllowedTypes('employeeIds', ['string']);
        $optionsResolver->setAllowedTypes('postedOnOrAfter', ['string', 'null']);
        $optionsResolver->setAllowedTypes('postedOnOrBefore', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\PayrollAdjustmentsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPayrollV2PayrollAdjustmentsPayrollAdjustmentResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfPayrollV2PayrollAdjustmentsPayrollAdjustmentResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\PayrollAdjustmentsGetListBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['appKey', 'bearerToken'];
    }
}
