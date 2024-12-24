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
    class EstimatesV2EstimateItemUpdateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse();
            if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
                $data['qty'] = (float) $data['qty'];
            }
            if (\array_key_exists('unitRate', $data) && \is_int($data['unitRate'])) {
                $data['unitRate'] = (float) $data['unitRate'];
            }
            if (\array_key_exists('total', $data) && \is_int($data['total'])) {
                $data['total'] = (float) $data['total'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('sku', $data)) {
                $object->setSku($this->denormalizer->denormalize($data['sku'], \CompWright\ServiceTitan\Model\EstimatesV2SkuModel::class, 'json', $context));
            }
            if (\array_key_exists('skuAccount', $data)) {
                $object->setSkuAccount($data['skuAccount']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('qty', $data)) {
                $object->setQty($data['qty']);
            }
            if (\array_key_exists('unitRate', $data)) {
                $object->setUnitRate($data['unitRate']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
            }
            if (\array_key_exists('itemGroupName', $data)) {
                $object->setItemGroupName($data['itemGroupName']);
            }
            if (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] !== null) {
                $object->setItemGroupRootId($data['itemGroupRootId']);
            } elseif (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] === null) {
                $object->setItemGroupRootId(null);
            }
            if (\array_key_exists('modifiedOn', $data)) {
                $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedOn']));
            }
            if (\array_key_exists('estimateId', $data)) {
                $object->setEstimateId($data['estimateId']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['sku'] = $this->normalizer->normalize($object->getSku(), 'json', $context);
            $data['skuAccount'] = $object->getSkuAccount();
            $data['description'] = $object->getDescription();
            $data['qty'] = $object->getQty();
            $data['unitRate'] = $object->getUnitRate();
            $data['total'] = $object->getTotal();
            $data['itemGroupName'] = $object->getItemGroupName();
            if ($object->isInitialized('itemGroupRootId') && null !== $object->getItemGroupRootId()) {
                $data['itemGroupRootId'] = $object->getItemGroupRootId();
            }
            $data['modifiedOn'] = $object->getModifiedOn()?->format('Y-m-d\TH:i:sP');
            $data['estimateId'] = $object->getEstimateId();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class => false];
        }
    }
} else {
    class EstimatesV2EstimateItemUpdateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse();
            if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
                $data['qty'] = (float) $data['qty'];
            }
            if (\array_key_exists('unitRate', $data) && \is_int($data['unitRate'])) {
                $data['unitRate'] = (float) $data['unitRate'];
            }
            if (\array_key_exists('total', $data) && \is_int($data['total'])) {
                $data['total'] = (float) $data['total'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('sku', $data)) {
                $object->setSku($this->denormalizer->denormalize($data['sku'], \CompWright\ServiceTitan\Model\EstimatesV2SkuModel::class, 'json', $context));
            }
            if (\array_key_exists('skuAccount', $data)) {
                $object->setSkuAccount($data['skuAccount']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('qty', $data)) {
                $object->setQty($data['qty']);
            }
            if (\array_key_exists('unitRate', $data)) {
                $object->setUnitRate($data['unitRate']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
            }
            if (\array_key_exists('itemGroupName', $data)) {
                $object->setItemGroupName($data['itemGroupName']);
            }
            if (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] !== null) {
                $object->setItemGroupRootId($data['itemGroupRootId']);
            } elseif (\array_key_exists('itemGroupRootId', $data) && $data['itemGroupRootId'] === null) {
                $object->setItemGroupRootId(null);
            }
            if (\array_key_exists('modifiedOn', $data)) {
                $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedOn']));
            }
            if (\array_key_exists('estimateId', $data)) {
                $object->setEstimateId($data['estimateId']);
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
            $data['sku'] = $this->normalizer->normalize($object->getSku(), 'json', $context);
            $data['skuAccount'] = $object->getSkuAccount();
            $data['description'] = $object->getDescription();
            $data['qty'] = $object->getQty();
            $data['unitRate'] = $object->getUnitRate();
            $data['total'] = $object->getTotal();
            $data['itemGroupName'] = $object->getItemGroupName();
            if ($object->isInitialized('itemGroupRootId') && null !== $object->getItemGroupRootId()) {
                $data['itemGroupRootId'] = $object->getItemGroupRootId();
            }
            $data['modifiedOn'] = $object->getModifiedOn()?->format('Y-m-d\TH:i:sP');
            $data['estimateId'] = $object->getEstimateId();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemUpdateResponse::class => false];
        }
    }
}
