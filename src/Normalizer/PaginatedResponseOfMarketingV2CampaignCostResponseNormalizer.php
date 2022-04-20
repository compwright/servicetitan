<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Normalizer;

use CompWright\ServiceTitan\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PaginatedResponseOfMarketingV2CampaignCostResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfMarketingV2CampaignCostResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PaginatedResponseOfMarketingV2CampaignCostResponse';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CompWright\ServiceTitan\Model\PaginatedResponseOfMarketingV2CampaignCostResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
        }
        if (\array_key_exists('hasMore', $data)) {
            $object->setHasMore($data['hasMore']);
        }
        if (\array_key_exists('totalCount', $data) && $data['totalCount'] !== null) {
            $object->setTotalCount($data['totalCount']);
        } elseif (\array_key_exists('totalCount', $data) && $data['totalCount'] === null) {
            $object->setTotalCount(null);
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\MarketingV2CampaignCostResponse', 'json', $context);
            }
            $object->setData($values);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['page'] = $object->getPage();
        $data['pageSize'] = $object->getPageSize();
        $data['hasMore'] = $object->getHasMore();
        if (null !== $object->getTotalCount()) {
            $data['totalCount'] = $object->getTotalCount();
        }
        $values = [];
        foreach ($object->getData() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['data'] = $values;

        return $data;
    }
}
