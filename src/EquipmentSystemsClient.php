<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class EquipmentSystemsClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $locationIds
     *     @var string $ids
     *     @var string $createdBefore format - date-time (as date-time in RFC3339)
     *     @var string $createdOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var string $modifiedBefore format - date-time (as date-time in RFC3339)
     *     @var string $modifiedOnOrAfter format - date-time (as date-time in RFC3339)
     *     @var int $page format - int32
     *     @var int $pageSize format - int32
     *     @var bool $includeTotal
     *     @var string $sort Applies sorting by the specified field:\
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfEquipmentSystemsV2InstalledEquipmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function installedEquipmentGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InstalledEquipmentGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * @param int                                                                                   $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest|null $requestBody
     * @param string                                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function installedEquipmentCreate(int $tenant, ?Model\EquipmentSystemsV2InstalledEquipmentCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InstalledEquipmentCreate($tenant, $requestBody), $fetch);
    }

    /**
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function installedEquipmentGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InstalledEquipmentGet($id, $tenant), $fetch);
    }

    /**
     * @param int                                                                                   $id          format - int64
     * @param int                                                                                   $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentUpdateRequest|null $requestBody
     * @param string                                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\InstalledEquipmentUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentDetailedResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function installedEquipmentUpdate(int $id, int $tenant, ?Model\EquipmentSystemsV2InstalledEquipmentUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\InstalledEquipmentUpdate($id, $tenant, $requestBody), $fetch);
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
