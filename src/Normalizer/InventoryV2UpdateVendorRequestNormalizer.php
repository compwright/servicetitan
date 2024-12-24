<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Normalizer;

use CompWright\ServiceTitan\Runtime\Normalizer\CheckArray;
use CompWright\ServiceTitan\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class InventoryV2UpdateVendorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest();
            if (\array_key_exists('taxRate', $data) && \is_int($data['taxRate'])) {
                $data['taxRate'] = (float) $data['taxRate'];
            }
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
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\InventoryV2TagRequest::class, 'json', $context);
                }
                $object->setTags($values);
            }
            if (\array_key_exists('vendorContacts', $data)) {
                $values_1 = [];
                foreach ($data['vendorContacts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorContactRequest::class, 'json', $context);
                }
                $object->setVendorContacts($values_1);
            }
            if (\array_key_exists('externalData', $data)) {
                $object->setExternalData($data['externalData']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $object->getPhone();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('isTruckReplenishment') && null !== $object->getIsTruckReplenishment()) {
                $data['isTruckReplenishment'] = $object->getIsTruckReplenishment();
            }
            if ($object->isInitialized('deliveryOption') && null !== $object->getDeliveryOption()) {
                $data['deliveryOption'] = $object->getDeliveryOption();
            }
            if ($object->isInitialized('taxRate') && null !== $object->getTaxRate()) {
                $data['taxRate'] = $object->getTaxRate();
            }
            if ($object->isInitialized('restrictedMobileCreation') && null !== $object->getRestrictedMobileCreation()) {
                $data['restrictedMobileCreation'] = $object->getRestrictedMobileCreation();
            }
            if ($object->isInitialized('vendorQuickbooksItem') && null !== $object->getVendorQuickbooksItem()) {
                $data['vendorQuickbooksItem'] = $object->getVendorQuickbooksItem();
            }
            if ($object->isInitialized('paymentTermId') && null !== $object->getPaymentTermId()) {
                $data['paymentTermId'] = $object->getPaymentTermId();
            }
            if ($object->isInitialized('remittanceVendorId') && null !== $object->getRemittanceVendorId()) {
                $data['remittanceVendorId'] = $object->getRemittanceVendorId();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tags'] = $values;
            }
            if ($object->isInitialized('vendorContacts') && null !== $object->getVendorContacts()) {
                $values_1 = [];
                foreach ($object->getVendorContacts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['vendorContacts'] = $values_1;
            }
            if ($object->isInitialized('externalData') && null !== $object->getExternalData()) {
                $data['externalData'] = $object->getExternalData();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class => false];
        }
    }
} else {
    class InventoryV2UpdateVendorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest();
            if (\array_key_exists('taxRate', $data) && \is_int($data['taxRate'])) {
                $data['taxRate'] = (float) $data['taxRate'];
            }
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
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\InventoryV2TagRequest::class, 'json', $context);
                }
                $object->setTags($values);
            }
            if (\array_key_exists('vendorContacts', $data)) {
                $values_1 = [];
                foreach ($data['vendorContacts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CompWright\ServiceTitan\Model\InventoryV2UpdateVendorContactRequest::class, 'json', $context);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['lastName'] = $object->getLastName();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $object->getPhone();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('isTruckReplenishment') && null !== $object->getIsTruckReplenishment()) {
                $data['isTruckReplenishment'] = $object->getIsTruckReplenishment();
            }
            if ($object->isInitialized('deliveryOption') && null !== $object->getDeliveryOption()) {
                $data['deliveryOption'] = $object->getDeliveryOption();
            }
            if ($object->isInitialized('taxRate') && null !== $object->getTaxRate()) {
                $data['taxRate'] = $object->getTaxRate();
            }
            if ($object->isInitialized('restrictedMobileCreation') && null !== $object->getRestrictedMobileCreation()) {
                $data['restrictedMobileCreation'] = $object->getRestrictedMobileCreation();
            }
            if ($object->isInitialized('vendorQuickbooksItem') && null !== $object->getVendorQuickbooksItem()) {
                $data['vendorQuickbooksItem'] = $object->getVendorQuickbooksItem();
            }
            if ($object->isInitialized('paymentTermId') && null !== $object->getPaymentTermId()) {
                $data['paymentTermId'] = $object->getPaymentTermId();
            }
            if ($object->isInitialized('remittanceVendorId') && null !== $object->getRemittanceVendorId()) {
                $data['remittanceVendorId'] = $object->getRemittanceVendorId();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['tags'] = $values;
            }
            if ($object->isInitialized('vendorContacts') && null !== $object->getVendorContacts()) {
                $values_1 = [];
                foreach ($object->getVendorContacts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['vendorContacts'] = $values_1;
            }
            if ($object->isInitialized('externalData') && null !== $object->getExternalData()) {
                $data['externalData'] = $object->getExternalData();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\InventoryV2UpdateVendorRequest::class => false];
        }
    }
}
