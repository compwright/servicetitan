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

class CrmV2CreateCustomerNoteRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\CrmV2CreateCustomerNoteRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\CrmV2CreateCustomerNoteRequest';
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
        $object = new \CompWright\ServiceTitan\Model\CrmV2CreateCustomerNoteRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('pinToTop', $data) && $data['pinToTop'] !== null) {
            $object->setPinToTop($data['pinToTop']);
        } elseif (\array_key_exists('pinToTop', $data) && $data['pinToTop'] === null) {
            $object->setPinToTop(null);
        }
        if (\array_key_exists('addToLocations', $data) && $data['addToLocations'] !== null) {
            $object->setAddToLocations($data['addToLocations']);
        } elseif (\array_key_exists('addToLocations', $data) && $data['addToLocations'] === null) {
            $object->setAddToLocations(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['text'] = $object->getText();
        if (null !== $object->getPinToTop()) {
            $data['pinToTop'] = $object->getPinToTop();
        }
        if (null !== $object->getAddToLocations()) {
            $data['addToLocations'] = $object->getAddToLocations();
        }

        return $data;
    }
}
