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
    class EstimatesV2EstimateItemCreateUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (float) $data['quantity'];
            }
            if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
                $data['unitPrice'] = (float) $data['unitPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('skuId', $data) && $data['skuId'] !== null) {
                $object->setSkuId($data['skuId']);
            } elseif (\array_key_exists('skuId', $data) && $data['skuId'] === null) {
                $object->setSkuId(null);
            }
            if (\array_key_exists('skuName', $data) && $data['skuName'] !== null) {
                $object->setSkuName($data['skuName']);
            } elseif (\array_key_exists('skuName', $data) && $data['skuName'] === null) {
                $object->setSkuName(null);
            }
            if (\array_key_exists('parentItemId', $data) && $data['parentItemId'] !== null) {
                $object->setParentItemId($data['parentItemId']);
            } elseif (\array_key_exists('parentItemId', $data) && $data['parentItemId'] === null) {
                $object->setParentItemId(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('isAddOn', $data) && $data['isAddOn'] !== null) {
                $object->setIsAddOn($data['isAddOn']);
            } elseif (\array_key_exists('isAddOn', $data) && $data['isAddOn'] === null) {
                $object->setIsAddOn(null);
            }
            if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
                $object->setQuantity($data['quantity']);
            } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
                $object->setUnitPrice($data['unitPrice']);
            } elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('skipUpdatingMembershipPrices', $data) && $data['skipUpdatingMembershipPrices'] !== null) {
                $object->setSkipUpdatingMembershipPrices($data['skipUpdatingMembershipPrices']);
            } elseif (\array_key_exists('skipUpdatingMembershipPrices', $data) && $data['skipUpdatingMembershipPrices'] === null) {
                $object->setSkipUpdatingMembershipPrices(null);
            }
            if (\array_key_exists('itemGroupName', $data) && $data['itemGroupName'] !== null) {
                $object->setItemGroupName($data['itemGroupName']);
            } elseif (\array_key_exists('itemGroupName', $data) && $data['itemGroupName'] === null) {
                $object->setItemGroupName(null);
            }
            if (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] !== null) {
                $object->setItemGroupRootId($data['itemGroupRootId']);
            } elseif (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] === null) {
                $object->setItemGroupRootId(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('skuId') && null !== $object->getSkuId()) {
                $data['skuId'] = $object->getSkuId();
            }
            if ($object->isInitialized('skuName') && null !== $object->getSkuName()) {
                $data['skuName'] = $object->getSkuName();
            }
            if ($object->isInitialized('parentItemId') && null !== $object->getParentItemId()) {
                $data['parentItemId'] = $object->getParentItemId();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('isAddOn') && null !== $object->getIsAddOn()) {
                $data['isAddOn'] = $object->getIsAddOn();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unitPrice'] = $object->getUnitPrice();
            }
            if ($object->isInitialized('skipUpdatingMembershipPrices') && null !== $object->getSkipUpdatingMembershipPrices()) {
                $data['skipUpdatingMembershipPrices'] = $object->getSkipUpdatingMembershipPrices();
            }
            if ($object->isInitialized('itemGroupName') && null !== $object->getItemGroupName()) {
                $data['itemGroupName'] = $object->getItemGroupName();
            }
            if ($object->isInitialized('itemGroupRootId') && null !== $object->getItemGroupRootId()) {
                $data['itemGroupRootId'] = $object->getItemGroupRootId();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class => false];
        }
    }
} else {
    class EstimatesV2EstimateItemCreateUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (float) $data['quantity'];
            }
            if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
                $data['unitPrice'] = (float) $data['unitPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('skuId', $data) && $data['skuId'] !== null) {
                $object->setSkuId($data['skuId']);
            } elseif (\array_key_exists('skuId', $data) && $data['skuId'] === null) {
                $object->setSkuId(null);
            }
            if (\array_key_exists('skuName', $data) && $data['skuName'] !== null) {
                $object->setSkuName($data['skuName']);
            } elseif (\array_key_exists('skuName', $data) && $data['skuName'] === null) {
                $object->setSkuName(null);
            }
            if (\array_key_exists('parentItemId', $data) && $data['parentItemId'] !== null) {
                $object->setParentItemId($data['parentItemId']);
            } elseif (\array_key_exists('parentItemId', $data) && $data['parentItemId'] === null) {
                $object->setParentItemId(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('isAddOn', $data) && $data['isAddOn'] !== null) {
                $object->setIsAddOn($data['isAddOn']);
            } elseif (\array_key_exists('isAddOn', $data) && $data['isAddOn'] === null) {
                $object->setIsAddOn(null);
            }
            if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
                $object->setQuantity($data['quantity']);
            } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
                $object->setUnitPrice($data['unitPrice']);
            } elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('skipUpdatingMembershipPrices', $data) && $data['skipUpdatingMembershipPrices'] !== null) {
                $object->setSkipUpdatingMembershipPrices($data['skipUpdatingMembershipPrices']);
            } elseif (\array_key_exists('skipUpdatingMembershipPrices', $data) && $data['skipUpdatingMembershipPrices'] === null) {
                $object->setSkipUpdatingMembershipPrices(null);
            }
            if (\array_key_exists('itemGroupName', $data) && $data['itemGroupName'] !== null) {
                $object->setItemGroupName($data['itemGroupName']);
            } elseif (\array_key_exists('itemGroupName', $data) && $data['itemGroupName'] === null) {
                $object->setItemGroupName(null);
            }
            if (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] !== null) {
                $object->setItemGroupRootId($data['itemGroupRootId']);
            } elseif (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] === null) {
                $object->setItemGroupRootId(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('skuId') && null !== $object->getSkuId()) {
                $data['skuId'] = $object->getSkuId();
            }
            if ($object->isInitialized('skuName') && null !== $object->getSkuName()) {
                $data['skuName'] = $object->getSkuName();
            }
            if ($object->isInitialized('parentItemId') && null !== $object->getParentItemId()) {
                $data['parentItemId'] = $object->getParentItemId();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('isAddOn') && null !== $object->getIsAddOn()) {
                $data['isAddOn'] = $object->getIsAddOn();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unitPrice'] = $object->getUnitPrice();
            }
            if ($object->isInitialized('skipUpdatingMembershipPrices') && null !== $object->getSkipUpdatingMembershipPrices()) {
                $data['skipUpdatingMembershipPrices'] = $object->getSkipUpdatingMembershipPrices();
            }
            if ($object->isInitialized('itemGroupName') && null !== $object->getItemGroupName()) {
                $data['itemGroupName'] = $object->getItemGroupName();
            }
            if ($object->isInitialized('itemGroupRootId') && null !== $object->getItemGroupRootId()) {
                $data['itemGroupRootId'] = $object->getItemGroupRootId();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemCreateUpdateRequest::class => false];
        }
    }
}
