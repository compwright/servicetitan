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

class DispatchV2NonJobAppointmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\DispatchV2NonJobAppointmentResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\DispatchV2NonJobAppointmentResponse';
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
        $object = new \CompWright\ServiceTitan\Model\DispatchV2NonJobAppointmentResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('technicianId', $data)) {
            $object->setTechnicianId($data['technicianId']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start']));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('timesheetCodeId', $data)) {
            $object->setTimesheetCodeId($data['timesheetCodeId']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('clearDispatchBoard', $data)) {
            $object->setClearDispatchBoard($data['clearDispatchBoard']);
        }
        if (\array_key_exists('clearTechnicianView', $data)) {
            $object->setClearTechnicianView($data['clearTechnicianView']);
        }
        if (\array_key_exists('removeTechnicianFromCapacityPlanning', $data)) {
            $object->setRemoveTechnicianFromCapacityPlanning($data['removeTechnicianFromCapacityPlanning']);
        }
        if (\array_key_exists('allDay', $data)) {
            $object->setAllDay($data['allDay']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
        }
        if (\array_key_exists('createdById', $data)) {
            $object->setCreatedById($data['createdById']);
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
        $data['technicianId'] = $object->getTechnicianId();
        $data['start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        $data['name'] = $object->getName();
        $data['duration'] = $object->getDuration();
        $data['timesheetCodeId'] = $object->getTimesheetCodeId();
        $data['summary'] = $object->getSummary();
        $data['clearDispatchBoard'] = $object->getClearDispatchBoard();
        $data['clearTechnicianView'] = $object->getClearTechnicianView();
        $data['removeTechnicianFromCapacityPlanning'] = $object->getRemoveTechnicianFromCapacityPlanning();
        $data['allDay'] = $object->getAllDay();
        $data['active'] = $object->getActive();
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        $data['createdById'] = $object->getCreatedById();

        return $data;
    }
}
