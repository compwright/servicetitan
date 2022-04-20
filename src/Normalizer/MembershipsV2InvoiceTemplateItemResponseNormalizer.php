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

class MembershipsV2InvoiceTemplateItemResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\MembershipsV2InvoiceTemplateItemResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\MembershipsV2InvoiceTemplateItemResponse';
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
        $object = new \CompWright\ServiceTitan\Model\MembershipsV2InvoiceTemplateItemResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('skuId', $data)) {
            $object->setSkuId($data['skuId']);
        }
        if (\array_key_exists('skuType', $data)) {
            $object->setSkuType($data['skuType']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
        }
        if (\array_key_exists('isAddOn', $data)) {
            $object->setIsAddOn($data['isAddOn']);
        }
        if (\array_key_exists('importId', $data) && $data['importId'] !== null) {
            $object->setImportId($data['importId']);
        } elseif (\array_key_exists('importId', $data) && $data['importId'] === null) {
            $object->setImportId(null);
        }
        if (\array_key_exists('workflowActionItemId', $data) && $data['workflowActionItemId'] !== null) {
            $object->setWorkflowActionItemId($data['workflowActionItemId']);
        } elseif (\array_key_exists('workflowActionItemId', $data) && $data['workflowActionItemId'] === null) {
            $object->setWorkflowActionItemId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
            $object->setCost($data['cost']);
        } elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
            $object->setCost(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        } elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
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
        $data['skuType'] = $object->getSkuType();
        $data['quantity'] = $object->getQuantity();
        $data['unitPrice'] = $object->getUnitPrice();
        $data['isAddOn'] = $object->getIsAddOn();
        if (null !== $object->getImportId()) {
            $data['importId'] = $object->getImportId();
        }
        if (null !== $object->getWorkflowActionItemId()) {
            $data['workflowActionItemId'] = $object->getWorkflowActionItemId();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }

        return $data;
    }
}