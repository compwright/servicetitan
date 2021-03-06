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

class InventoryV2PurchaseOrderItemResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\InventoryV2PurchaseOrderItemResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\InventoryV2PurchaseOrderItemResponse';
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
        $object = new \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderItemResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('skuId', $data)) {
            $object->setSkuId($data['skuId']);
        }
        if (\array_key_exists('skuName', $data)) {
            $object->setSkuName($data['skuName']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
        }
        if (\array_key_exists('skuType', $data)) {
            $object->setSkuType($data['skuType']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('vendorPartNumber', $data)) {
            $object->setVendorPartNumber($data['vendorPartNumber']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('quantityReceived', $data)) {
            $object->setQuantityReceived($data['quantityReceived']);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($data['cost']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('serialNumbers', $data)) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\InventoryV2SerialNumberResponse', 'json', $context);
            }
            $object->setSerialNumbers($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('chargeable', $data)) {
            $object->setChargeable($data['chargeable']);
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
        $data['skuId'] = $object->getSkuId();
        $data['skuName'] = $object->getSkuName();
        $data['skuCode'] = $object->getSkuCode();
        $data['skuType'] = $object->getSkuType();
        $data['description'] = $object->getDescription();
        $data['vendorPartNumber'] = $object->getVendorPartNumber();
        $data['quantity'] = $object->getQuantity();
        $data['quantityReceived'] = $object->getQuantityReceived();
        $data['cost'] = $object->getCost();
        $data['total'] = $object->getTotal();
        $values = [];
        foreach ($object->getSerialNumbers() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['serialNumbers'] = $values;
        $data['status'] = $object->getStatus();
        $data['chargeable'] = $object->getChargeable();

        return $data;
    }
}
