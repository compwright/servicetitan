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

class TaskManagementV2TaskCreateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\TaskManagementV2TaskCreateResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\TaskManagementV2TaskCreateResponse';
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
        $object = new \CompWright\ServiceTitan\Model\TaskManagementV2TaskCreateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reportedById', $data)) {
            $object->setReportedById($data['reportedById']);
        }
        if (\array_key_exists('assignedToId', $data)) {
            $object->setAssignedToId($data['assignedToId']);
        }
        if (\array_key_exists('isClosed', $data)) {
            $object->setIsClosed($data['isClosed']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('businessUnitId', $data)) {
            $object->setBusinessUnitId($data['businessUnitId']);
        }
        if (\array_key_exists('employeeTaskTypeId', $data)) {
            $object->setEmployeeTaskTypeId($data['employeeTaskTypeId']);
        }
        if (\array_key_exists('employeeTaskSourceId', $data)) {
            $object->setEmployeeTaskSourceId($data['employeeTaskSourceId']);
        }
        if (\array_key_exists('employeeTaskResolutionId', $data) && $data['employeeTaskResolutionId'] !== null) {
            $object->setEmployeeTaskResolutionId($data['employeeTaskResolutionId']);
        } elseif (\array_key_exists('employeeTaskResolutionId', $data) && $data['employeeTaskResolutionId'] === null) {
            $object->setEmployeeTaskResolutionId(null);
        }
        if (\array_key_exists('reportedDate', $data)) {
            $object->setReportedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['reportedDate']));
        }
        if (\array_key_exists('completeBy', $data) && $data['completeBy'] !== null) {
            $object->setCompleteBy(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['completeBy']));
        } elseif (\array_key_exists('completeBy', $data) && $data['completeBy'] === null) {
            $object->setCompleteBy(null);
        }
        if (\array_key_exists('involvedEmployeeIdList', $data) && $data['involvedEmployeeIdList'] !== null) {
            $values = [];
            foreach ($data['involvedEmployeeIdList'] as $value) {
                $values[] = $value;
            }
            $object->setInvolvedEmployeeIdList($values);
        } elseif (\array_key_exists('involvedEmployeeIdList', $data) && $data['involvedEmployeeIdList'] === null) {
            $object->setInvolvedEmployeeIdList(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('jobId', $data) && $data['jobId'] !== null) {
            $object->setJobId($data['jobId']);
        } elseif (\array_key_exists('jobId', $data) && $data['jobId'] === null) {
            $object->setJobId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('taskNumber', $data)) {
            $object->setTaskNumber($data['taskNumber']);
        }
        if (\array_key_exists('customerName', $data) && $data['customerName'] !== null) {
            $object->setCustomerName($data['customerName']);
        } elseif (\array_key_exists('customerName', $data) && $data['customerName'] === null) {
            $object->setCustomerName(null);
        }
        if (\array_key_exists('jobNumber', $data) && $data['jobNumber'] !== null) {
            $object->setJobNumber($data['jobNumber']);
        } elseif (\array_key_exists('jobNumber', $data) && $data['jobNumber'] === null) {
            $object->setJobNumber(null);
        }
        if (\array_key_exists('refundIssued', $data) && $data['refundIssued'] !== null) {
            $object->setRefundIssued($data['refundIssued']);
        } elseif (\array_key_exists('refundIssued', $data) && $data['refundIssued'] === null) {
            $object->setRefundIssued(null);
        }
        if (\array_key_exists('descriptionModifiedOn', $data) && $data['descriptionModifiedOn'] !== null) {
            $object->setDescriptionModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['descriptionModifiedOn']));
        } elseif (\array_key_exists('descriptionModifiedOn', $data) && $data['descriptionModifiedOn'] === null) {
            $object->setDescriptionModifiedOn(null);
        }
        if (\array_key_exists('descriptionModifiedBy', $data) && $data['descriptionModifiedBy'] !== null) {
            $object->setDescriptionModifiedBy($data['descriptionModifiedBy']);
        } elseif (\array_key_exists('descriptionModifiedBy', $data) && $data['descriptionModifiedBy'] === null) {
            $object->setDescriptionModifiedBy(null);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
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
        $data['reportedById'] = $object->getReportedById();
        $data['assignedToId'] = $object->getAssignedToId();
        $data['isClosed'] = $object->getIsClosed();
        $data['name'] = $object->getName();
        $data['businessUnitId'] = $object->getBusinessUnitId();
        $data['employeeTaskTypeId'] = $object->getEmployeeTaskTypeId();
        $data['employeeTaskSourceId'] = $object->getEmployeeTaskSourceId();
        if (null !== $object->getEmployeeTaskResolutionId()) {
            $data['employeeTaskResolutionId'] = $object->getEmployeeTaskResolutionId();
        }
        $data['reportedDate'] = $object->getReportedDate()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getCompleteBy()) {
            $data['completeBy'] = $object->getCompleteBy()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getInvolvedEmployeeIdList()) {
            $values = [];
            foreach ($object->getInvolvedEmployeeIdList() as $value) {
                $values[] = $value;
            }
            $data['involvedEmployeeIdList'] = $values;
        }
        if (null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if (null !== $object->getJobId()) {
            $data['jobId'] = $object->getJobId();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['priority'] = $object->getPriority();
        $data['id'] = $object->getId();
        $data['taskNumber'] = $object->getTaskNumber();
        if (null !== $object->getCustomerName()) {
            $data['customerName'] = $object->getCustomerName();
        }
        if (null !== $object->getJobNumber()) {
            $data['jobNumber'] = $object->getJobNumber();
        }
        if (null !== $object->getRefundIssued()) {
            $data['refundIssued'] = $object->getRefundIssued();
        }
        if (null !== $object->getDescriptionModifiedOn()) {
            $data['descriptionModifiedOn'] = $object->getDescriptionModifiedOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDescriptionModifiedBy()) {
            $data['descriptionModifiedBy'] = $object->getDescriptionModifiedBy();
        }
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');

        return $data;
    }
}
