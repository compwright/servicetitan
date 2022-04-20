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

class InventoryV2PurchaseOrderResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\InventoryV2PurchaseOrderResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\InventoryV2PurchaseOrderResponse';
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
        $object = new \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->setInvoiceId($data['invoiceId']);
        } elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
            $object->setInvoiceId(null);
        }
        if (\array_key_exists('jobId', $data) && $data['jobId'] !== null) {
            $object->setJobId($data['jobId']);
        } elseif (\array_key_exists('jobId', $data) && $data['jobId'] === null) {
            $object->setJobId(null);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
        } elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('typeId', $data)) {
            $object->setTypeId($data['typeId']);
        }
        if (\array_key_exists('vendorId', $data)) {
            $object->setVendorId($data['vendorId']);
        }
        if (\array_key_exists('technicianId', $data) && $data['technicianId'] !== null) {
            $object->setTechnicianId($data['technicianId']);
        } elseif (\array_key_exists('technicianId', $data) && $data['technicianId'] === null) {
            $object->setTechnicianId(null);
        }
        if (\array_key_exists('shipTo', $data)) {
            $object->setShipTo($data['shipTo']);
        }
        if (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] !== null) {
            $object->setBusinessUnitId($data['businessUnitId']);
        } elseif (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] === null) {
            $object->setBusinessUnitId(null);
        }
        if (\array_key_exists('inventoryLocationId', $data) && $data['inventoryLocationId'] !== null) {
            $object->setInventoryLocationId($data['inventoryLocationId']);
        } elseif (\array_key_exists('inventoryLocationId', $data) && $data['inventoryLocationId'] === null) {
            $object->setInventoryLocationId(null);
        }
        if (\array_key_exists('batchId', $data) && $data['batchId'] !== null) {
            $object->setBatchId($data['batchId']);
        } elseif (\array_key_exists('batchId', $data) && $data['batchId'] === null) {
            $object->setBatchId(null);
        }
        if (\array_key_exists('vendorDocumentNumber', $data)) {
            $object->setVendorDocumentNumber($data['vendorDocumentNumber']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
        }
        if (\array_key_exists('requiredOn', $data) && $data['requiredOn'] !== null) {
            $object->setRequiredOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['requiredOn']));
        } elseif (\array_key_exists('requiredOn', $data) && $data['requiredOn'] === null) {
            $object->setRequiredOn(null);
        }
        if (\array_key_exists('sentOn', $data) && $data['sentOn'] !== null) {
            $object->setSentOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['sentOn']));
        } elseif (\array_key_exists('sentOn', $data) && $data['sentOn'] === null) {
            $object->setSentOn(null);
        }
        if (\array_key_exists('receivedOn', $data) && $data['receivedOn'] !== null) {
            $object->setReceivedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['receivedOn']));
        } elseif (\array_key_exists('receivedOn', $data) && $data['receivedOn'] === null) {
            $object->setReceivedOn(null);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($data['shipping']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\InventoryV2PurchaseOrderItemResponse', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('customFields', $data)) {
            $values_1 = [];
            foreach ($data['customFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CompWright\\ServiceTitan\\Model\\InventoryV2CustomFieldResponse', 'json', $context);
            }
            $object->setCustomFields($values_1);
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
        if (null !== $object->getInvoiceId()) {
            $data['invoiceId'] = $object->getInvoiceId();
        }
        if (null !== $object->getJobId()) {
            $data['jobId'] = $object->getJobId();
        }
        if (null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        $data['status'] = $object->getStatus();
        $data['typeId'] = $object->getTypeId();
        $data['vendorId'] = $object->getVendorId();
        if (null !== $object->getTechnicianId()) {
            $data['technicianId'] = $object->getTechnicianId();
        }
        $data['shipTo'] = $object->getShipTo();
        if (null !== $object->getBusinessUnitId()) {
            $data['businessUnitId'] = $object->getBusinessUnitId();
        }
        if (null !== $object->getInventoryLocationId()) {
            $data['inventoryLocationId'] = $object->getInventoryLocationId();
        }
        if (null !== $object->getBatchId()) {
            $data['batchId'] = $object->getBatchId();
        }
        $data['vendorDocumentNumber'] = $object->getVendorDocumentNumber();
        $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getRequiredOn()) {
            $data['requiredOn'] = $object->getRequiredOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getSentOn()) {
            $data['sentOn'] = $object->getSentOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getReceivedOn()) {
            $data['receivedOn'] = $object->getReceivedOn()->format('Y-m-d\\TH:i:sP');
        }
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        $data['total'] = $object->getTotal();
        $data['tax'] = $object->getTax();
        $data['shipping'] = $object->getShipping();
        $data['summary'] = $object->getSummary();
        $values = [];
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        $values_1 = [];
        foreach ($object->getCustomFields() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['customFields'] = $values_1;

        return $data;
    }
}