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

class DispatchV2NonJobAppointmentUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\DispatchV2NonJobAppointmentUpdateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\DispatchV2NonJobAppointmentUpdateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('technicianId', $data)) {
            $object->setTechnicianId($data['technicianId']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start']));
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('timesheetCodeId', $data)) {
            $object->setTimesheetCodeId($data['timesheetCodeId']);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
        } elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('clearDispatchBoard', $data) && $data['clearDispatchBoard'] !== null) {
            $object->setClearDispatchBoard($data['clearDispatchBoard']);
        } elseif (\array_key_exists('clearDispatchBoard', $data) && $data['clearDispatchBoard'] === null) {
            $object->setClearDispatchBoard(null);
        }
        if (\array_key_exists('clearTechnicianView', $data) && $data['clearTechnicianView'] !== null) {
            $object->setClearTechnicianView($data['clearTechnicianView']);
        } elseif (\array_key_exists('clearTechnicianView', $data) && $data['clearTechnicianView'] === null) {
            $object->setClearTechnicianView(null);
        }
        if (\array_key_exists('removeTechnicianFromCapacityPlanning', $data) && $data['removeTechnicianFromCapacityPlanning'] !== null) {
            $object->setRemoveTechnicianFromCapacityPlanning($data['removeTechnicianFromCapacityPlanning']);
        } elseif (\array_key_exists('removeTechnicianFromCapacityPlanning', $data) && $data['removeTechnicianFromCapacityPlanning'] === null) {
            $object->setRemoveTechnicianFromCapacityPlanning(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['technicianId'] = $object->getTechnicianId();
        $data['start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        $data['duration'] = $object->getDuration();
        $data['name'] = $object->getName();
        $data['timesheetCodeId'] = $object->getTimesheetCodeId();
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getClearDispatchBoard()) {
            $data['clearDispatchBoard'] = $object->getClearDispatchBoard();
        }
        if (null !== $object->getClearTechnicianView()) {
            $data['clearTechnicianView'] = $object->getClearTechnicianView();
        }
        if (null !== $object->getRemoveTechnicianFromCapacityPlanning()) {
            $data['removeTechnicianFromCapacityPlanning'] = $object->getRemoveTechnicianFromCapacityPlanning();
        }

        return $data;
    }
}
