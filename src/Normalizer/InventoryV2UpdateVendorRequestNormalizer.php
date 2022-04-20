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

class InventoryV2UpdateVendorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\InventoryV2UpdateVendorRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\InventoryV2UpdateVendorRequest';
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
        $object = new \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('memo', $data)) {
            $object->setMemo($data['memo']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('fax', $data)) {
            $object->setFax($data['fax']);
        }
        if (\array_key_exists('isTruckReplenishment', $data)) {
            $object->setIsTruckReplenishment($data['isTruckReplenishment']);
        }
        if (\array_key_exists('deliveryOption', $data)) {
            $object->setDeliveryOption($data['deliveryOption']);
        }
        if (\array_key_exists('taxRate', $data)) {
            $object->setTaxRate($data['taxRate']);
        }
        if (\array_key_exists('restrictedMobileCreation', $data)) {
            $object->setRestrictedMobileCreation($data['restrictedMobileCreation']);
        }
        if (\array_key_exists('vendorQuickbooksItem', $data)) {
            $object->setVendorQuickbooksItem($data['vendorQuickbooksItem']);
        }
        if (\array_key_exists('paymentTermId', $data)) {
            $object->setPaymentTermId($data['paymentTermId']);
        }
        if (\array_key_exists('remittanceVendorId', $data)) {
            $object->setRemittanceVendorId($data['remittanceVendorId']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\InventoryV2TagRequest', 'json', $context);
            }
            $object->setTags($values);
        }
        if (\array_key_exists('vendorContacts', $data)) {
            $values_1 = [];
            foreach ($data['vendorContacts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CompWright\\ServiceTitan\\Model\\InventoryV2UpdateVendorContactRequest', 'json', $context);
            }
            $object->setVendorContacts($values_1);
        }
        if (\array_key_exists('externalData', $data)) {
            $object->setExternalData($data['externalData']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getMemo()) {
            $data['memo'] = $object->getMemo();
        }
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if (null !== $object->getIsTruckReplenishment()) {
            $data['isTruckReplenishment'] = $object->getIsTruckReplenishment();
        }
        if (null !== $object->getDeliveryOption()) {
            $data['deliveryOption'] = $object->getDeliveryOption();
        }
        if (null !== $object->getTaxRate()) {
            $data['taxRate'] = $object->getTaxRate();
        }
        if (null !== $object->getRestrictedMobileCreation()) {
            $data['restrictedMobileCreation'] = $object->getRestrictedMobileCreation();
        }
        if (null !== $object->getVendorQuickbooksItem()) {
            $data['vendorQuickbooksItem'] = $object->getVendorQuickbooksItem();
        }
        if (null !== $object->getPaymentTermId()) {
            $data['paymentTermId'] = $object->getPaymentTermId();
        }
        if (null !== $object->getRemittanceVendorId()) {
            $data['remittanceVendorId'] = $object->getRemittanceVendorId();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['tags'] = $values;
        }
        if (null !== $object->getVendorContacts()) {
            $values_1 = [];
            foreach ($object->getVendorContacts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['vendorContacts'] = $values_1;
        }
        if (null !== $object->getExternalData()) {
            $data['externalData'] = $object->getExternalData();
        }

        return $data;
    }
}
