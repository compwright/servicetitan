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

class PricebookV2SkuAssetResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetResponse';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2SkuAssetResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('alias', $data) && $data['alias'] !== null) {
            $object->setAlias($data['alias']);
        } elseif (\array_key_exists('alias', $data) && $data['alias'] === null) {
            $object->setAlias(null);
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->setFileName($data['fileName']);
        } elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->setFileName(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAlias()) {
            $data['alias'] = $object->getAlias();
        }
        if (null !== $object->getFileName()) {
            $data['fileName'] = $object->getFileName();
        }
        $data['type'] = $object->getType();
        $data['url'] = $object->getUrl();

        return $data;
    }
}