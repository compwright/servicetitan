<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class FormsClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * Creates a Attachment on the specified Job.
     *
     * @param int                                                                              $id          Format - int64. Job Id
     * @param int                                                                              $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\FormsV2TenantTenantJobsIdAttachmentsPostBody|null $requestBody
     * @param string                                                                           $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsCreateAttachmentBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\FormsV2AttachmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsCreateAttachment(int $id, int $tenant, ?Model\FormsV2TenantTenantJobsIdAttachmentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsCreateAttachment($id, $tenant, $requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api-integration.servicetitan.io');
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
