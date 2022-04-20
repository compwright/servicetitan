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

class TaskManagementV2SubtaskCreateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\TaskManagementV2SubtaskCreateResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\TaskManagementV2SubtaskCreateResponse';
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
        $object = new \CompWright\ServiceTitan\Model\TaskManagementV2SubtaskCreateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isClosed', $data)) {
            $object->setIsClosed($data['isClosed']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('assignedToId', $data)) {
            $object->setAssignedToId($data['assignedToId']);
        }
        if (\array_key_exists('dueDateTime', $data) && $data['dueDateTime'] !== null) {
            $object->setDueDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dueDateTime']));
        } elseif (\array_key_exists('dueDateTime', $data) && $data['dueDateTime'] === null) {
            $object->setDueDateTime(null);
        }
        if (\array_key_exists('parentTaskId', $data)) {
            $object->setParentTaskId($data['parentTaskId']);
        }
        if (\array_key_exists('subtaskNumber', $data)) {
            $object->setSubtaskNumber($data['subtaskNumber']);
        }
        if (\array_key_exists('isViewed', $data)) {
            $object->setIsViewed($data['isViewed']);
        }
        if (\array_key_exists('assignedDateTime', $data)) {
            $object->setAssignedDateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['assignedDateTime']));
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['isClosed'] = $object->getIsClosed();
        $data['name'] = $object->getName();
        $data['assignedToId'] = $object->getAssignedToId();
        if (null !== $object->getDueDateTime()) {
            $data['dueDateTime'] = $object->getDueDateTime()->format('Y-m-d\\TH:i:sP');
        }
        $data['parentTaskId'] = $object->getParentTaskId();
        $data['subtaskNumber'] = $object->getSubtaskNumber();
        $data['isViewed'] = $object->getIsViewed();
        $data['assignedDateTime'] = $object->getAssignedDateTime()->format('Y-m-d\\TH:i:sP');
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');

        return $data;
    }
}