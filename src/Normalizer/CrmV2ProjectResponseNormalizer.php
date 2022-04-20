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

class CrmV2ProjectResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\CrmV2ProjectResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\CrmV2ProjectResponse';
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
        $object = new \CompWright\ServiceTitan\Model\CrmV2ProjectResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
        } elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
        }
        if (\array_key_exists('locationId', $data)) {
            $object->setLocationId($data['locationId']);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startDate']));
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('targetCompletionDate', $data) && $data['targetCompletionDate'] !== null) {
            $object->setTargetCompletionDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['targetCompletionDate']));
        } elseif (\array_key_exists('targetCompletionDate', $data) && $data['targetCompletionDate'] === null) {
            $object->setTargetCompletionDate(null);
        }
        if (\array_key_exists('actualCompletionDate', $data) && $data['actualCompletionDate'] !== null) {
            $object->setActualCompletionDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['actualCompletionDate']));
        } elseif (\array_key_exists('actualCompletionDate', $data) && $data['actualCompletionDate'] === null) {
            $object->setActualCompletionDate(null);
        }
        if (\array_key_exists('modifiedOn', $data) && $data['modifiedOn'] !== null) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        } elseif (\array_key_exists('modifiedOn', $data) && $data['modifiedOn'] === null) {
            $object->setModifiedOn(null);
        }
        if (\array_key_exists('customFields', $data)) {
            $values = [];
            foreach ($data['customFields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\CustomFieldApiModel', 'json', $context);
            }
            $object->setCustomFields($values);
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
        $data['number'] = $object->getNumber();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        $data['customerId'] = $object->getCustomerId();
        $data['locationId'] = $object->getLocationId();
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getTargetCompletionDate()) {
            $data['targetCompletionDate'] = $object->getTargetCompletionDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getActualCompletionDate()) {
            $data['actualCompletionDate'] = $object->getActualCompletionDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getModifiedOn()) {
            $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        }
        $values = [];
        foreach ($object->getCustomFields() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['customFields'] = $values;

        return $data;
    }
}
