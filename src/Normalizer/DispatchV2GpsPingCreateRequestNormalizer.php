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

class DispatchV2GpsPingCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\DispatchV2GpsPingCreateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\DispatchV2GpsPingCreateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\DispatchV2GpsPingCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('unitId', $data)) {
            $object->setUnitId($data['unitId']);
        }
        if (\array_key_exists('unitName', $data)) {
            $object->setUnitName($data['unitName']);
        }
        if (\array_key_exists('eventTime', $data)) {
            $object->setEventTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventTime']));
        }
        if (\array_key_exists('latitude', $data) && $data['latitude'] !== null) {
            $object->setLatitude($data['latitude']);
        } elseif (\array_key_exists('latitude', $data) && $data['latitude'] === null) {
            $object->setLatitude(null);
        }
        if (\array_key_exists('longitude', $data) && $data['longitude'] !== null) {
            $object->setLongitude($data['longitude']);
        } elseif (\array_key_exists('longitude', $data) && $data['longitude'] === null) {
            $object->setLongitude(null);
        }
        if (\array_key_exists('speed', $data) && $data['speed'] !== null) {
            $object->setSpeed($data['speed']);
        } elseif (\array_key_exists('speed', $data) && $data['speed'] === null) {
            $object->setSpeed(null);
        }
        if (\array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($data['postalCode']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('externalId', $data)) {
            $object->setExternalId($data['externalId']);
        }
        if (\array_key_exists('isNew', $data)) {
            $object->setIsNew($data['isNew']);
        }
        if (\array_key_exists('statusMessage', $data)) {
            $object->setStatusMessage($data['statusMessage']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['unitId'] = $object->getUnitId();
        $data['unitName'] = $object->getUnitName();
        $data['eventTime'] = $object->getEventTime()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getLatitude()) {
            $data['latitude'] = $object->getLatitude();
        }
        if (null !== $object->getLongitude()) {
            $data['longitude'] = $object->getLongitude();
        }
        if (null !== $object->getSpeed()) {
            $data['speed'] = $object->getSpeed();
        }
        $data['street'] = $object->getStreet();
        $data['city'] = $object->getCity();
        $data['region'] = $object->getRegion();
        $data['postalCode'] = $object->getPostalCode();
        $data['message'] = $object->getMessage();
        $data['externalId'] = $object->getExternalId();
        $data['isNew'] = $object->getIsNew();
        $data['statusMessage'] = $object->getStatusMessage();

        return $data;
    }
}
