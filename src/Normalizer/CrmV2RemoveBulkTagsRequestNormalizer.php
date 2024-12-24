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
    class CrmV2RemoveBulkTagsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerIds', $data)) {
                $values = [];
                foreach ($data['customerIds'] as $value) {
                    $values[] = $value;
                }
                $object->setCustomerIds($values);
            }
            if (\array_key_exists('tagTypeIds', $data)) {
                $values_1 = [];
                foreach ($data['tagTypeIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTagTypeIds($values_1);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getCustomerIds() as $value) {
                $values[] = $value;
            }
            $data['customerIds'] = $values;
            $values_1 = [];
            foreach ($object->getTagTypeIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tagTypeIds'] = $values_1;

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class => false];
        }
    }
} else {
    class CrmV2RemoveBulkTagsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerIds', $data)) {
                $values = [];
                foreach ($data['customerIds'] as $value) {
                    $values[] = $value;
                }
                $object->setCustomerIds($values);
            }
            if (\array_key_exists('tagTypeIds', $data)) {
                $values_1 = [];
                foreach ($data['tagTypeIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTagTypeIds($values_1);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getCustomerIds() as $value) {
                $values[] = $value;
            }
            $data['customerIds'] = $values;
            $values_1 = [];
            foreach ($object->getTagTypeIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tagTypeIds'] = $values_1;

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest::class => false];
        }
    }
}
