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

class InventoryV2CreatePurchaseOrderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\InventoryV2CreatePurchaseOrderRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\InventoryV2CreatePurchaseOrderRequest';
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
        $object = new \CompWright\ServiceTitan\Model\InventoryV2CreatePurchaseOrderRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vendorId', $data)) {
            $object->setVendorId($data['vendorId']);
        }
        if (\array_key_exists('typeId', $data)) {
            $object->setTypeId($data['typeId']);
        }
        if (\array_key_exists('businessUnitId', $data)) {
            $object->setBusinessUnitId($data['businessUnitId']);
        }
        if (\array_key_exists('inventoryLocationId', $data)) {
            $object->setInventoryLocationId($data['inventoryLocationId']);
        }
        if (\array_key_exists('jobId', $data) && $data['jobId'] !== null) {
            $object->setJobId($data['jobId']);
        } elseif (\array_key_exists('jobId', $data) && $data['jobId'] === null) {
            $object->setJobId(null);
        }
        if (\array_key_exists('technicianId', $data) && $data['technicianId'] !== null) {
            $object->setTechnicianId($data['technicianId']);
        } elseif (\array_key_exists('technicianId', $data) && $data['technicianId'] === null) {
            $object->setTechnicianId(null);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
        } elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('shipTo', $data)) {
            $object->setShipTo($data['shipTo']);
        }
        if (\array_key_exists('vendorInvoiceNumber', $data) && $data['vendorInvoiceNumber'] !== null) {
            $object->setVendorInvoiceNumber($data['vendorInvoiceNumber']);
        } elseif (\array_key_exists('vendorInvoiceNumber', $data) && $data['vendorInvoiceNumber'] === null) {
            $object->setVendorInvoiceNumber(null);
        }
        if (\array_key_exists('impactsTechnicianPayroll', $data)) {
            $object->setImpactsTechnicianPayroll($data['impactsTechnicianPayroll']);
        }
        if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
            $object->setMemo($data['memo']);
        } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
            $object->setMemo(null);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
        }
        if (\array_key_exists('requiredOn', $data)) {
            $object->setRequiredOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['requiredOn']));
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($data['shipping']);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\InventoryV2CreatePurchaseOrderItemRequest', 'json', $context);
            }
            $object->setItems($values);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['vendorId'] = $object->getVendorId();
        $data['typeId'] = $object->getTypeId();
        $data['businessUnitId'] = $object->getBusinessUnitId();
        $data['inventoryLocationId'] = $object->getInventoryLocationId();
        if (null !== $object->getJobId()) {
            $data['jobId'] = $object->getJobId();
        }
        if (null !== $object->getTechnicianId()) {
            $data['technicianId'] = $object->getTechnicianId();
        }
        if (null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        $data['shipTo'] = $object->getShipTo();
        if (null !== $object->getVendorInvoiceNumber()) {
            $data['vendorInvoiceNumber'] = $object->getVendorInvoiceNumber();
        }
        $data['impactsTechnicianPayroll'] = $object->getImpactsTechnicianPayroll();
        if (null !== $object->getMemo()) {
            $data['memo'] = $object->getMemo();
        }
        $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        $data['requiredOn'] = $object->getRequiredOn()->format('Y-m-d\\TH:i:sP');
        $data['tax'] = $object->getTax();
        $data['shipping'] = $object->getShipping();
        $values = [];
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;

        return $data;
    }
}