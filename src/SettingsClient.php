<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class SettingsClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * Gets a list of business units.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var string $name
     *     @var string $active Values: [True, Any, False]
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $externalDataApplicationGuid Format - guid. If this guid is provided, external data corresponding to
    this application guid will be returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\BusinessUnitsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2BusinessUnitResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function businessUnitsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\BusinessUnitsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a business unit by ID.
     *
     * @param int   $id              format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\BusinessUnitsGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\BusinessUnitsGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function businessUnitsGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\BusinessUnitsGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Update an existing BusinessUnit.
     *
     * @param int                                                                           $id          Format - int64. BusinessUnit Id
     * @param int                                                                           $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\TenantSettingsV2UpdateBusinessUnitRequest|null $requestBody
     * @param string                                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\BusinessUnitsUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\BusinessUnitsUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\ModificationResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function businessUnitsUpdate(int $id, int $tenant, ?Model\TenantSettingsV2UpdateBusinessUnitRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\BusinessUnitsUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of employees.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var string $name
     *     @var string $active Values: [True, Any, False]
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EmployeesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2EmployeeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function employeesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EmployeesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a employee by ID.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EmployeesGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\EmployeesGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\TenantSettingsV2EmployeeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function employeesGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EmployeesGet($id, $tenant), $fetch);
    }

    /**
     * Gets a list of technicians.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids
     *     @var string $name
     *     @var string $active Values: [True, Any, False]
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339).
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\TechniciansGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2TechnicianResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function techniciansGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\TechniciansGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a technician by ID.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\TechniciansGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\TechniciansGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function techniciansGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\TechniciansGet($id, $tenant), $fetch);
    }

    /**
     * Gets a list of tag types.
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
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\TagTypesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfTenantSettingsV2TagTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function tagTypesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\TagTypesGetList($tenant, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.servicetitan.io');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \CompWright\ServiceTitan\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
