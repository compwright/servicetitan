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

class CrmV2LocationContactResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\CrmV2LocationContactResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\CrmV2LocationContactResponse';
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
        $object = new \CompWright\ServiceTitan\Model\CrmV2LocationContactResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
            $object->setMemo($data['memo']);
        } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
            $object->setMemo(null);
        }
        if (\array_key_exists('phoneSettings', $data)) {
            $object->setPhoneSettings($data['phoneSettings']);
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['type'] = $object->getType();
        $data['value'] = $object->getValue();
        if (null !== $object->getMemo()) {
            $data['memo'] = $object->getMemo();
        }
        $data['phoneSettings'] = $object->getPhoneSettings();
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');

        return $data;
    }
}
