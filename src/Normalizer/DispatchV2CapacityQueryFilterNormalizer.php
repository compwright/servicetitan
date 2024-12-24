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
    class DispatchV2CapacityQueryFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('startsOnOrAfter', $data)) {
                $object->setStartsOnOrAfter(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startsOnOrAfter']));
            }
            if (\array_key_exists('endsOnOrBefore', $data)) {
                $object->setEndsOnOrBefore(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endsOnOrBefore']));
            }
            if (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] !== null) {
                $values = [];
                foreach ($data['businessUnitIds'] as $value) {
                    $values[] = $value;
                }
                $object->setBusinessUnitIds($values);
            } elseif (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] === null) {
                $object->setBusinessUnitIds(null);
            }
            if (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] !== null) {
                $object->setJobTypeId($data['jobTypeId']);
            } elseif (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] === null) {
                $object->setJobTypeId(null);
            }
            if (\array_key_exists('skillBasedAvailability', $data)) {
                $object->setSkillBasedAvailability($data['skillBasedAvailability']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['startsOnOrAfter'] = $object->getStartsOnOrAfter()?->format('Y-m-d\TH:i:sP');
            $data['endsOnOrBefore'] = $object->getEndsOnOrBefore()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('businessUnitIds') && null !== $object->getBusinessUnitIds()) {
                $values = [];
                foreach ($object->getBusinessUnitIds() as $value) {
                    $values[] = $value;
                }
                $data['businessUnitIds'] = $values;
            }
            if ($object->isInitialized('jobTypeId') && null !== $object->getJobTypeId()) {
                $data['jobTypeId'] = $object->getJobTypeId();
            }
            $data['skillBasedAvailability'] = $object->getSkillBasedAvailability();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class => false];
        }
    }
} else {
    class DispatchV2CapacityQueryFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('startsOnOrAfter', $data)) {
                $object->setStartsOnOrAfter(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startsOnOrAfter']));
            }
            if (\array_key_exists('endsOnOrBefore', $data)) {
                $object->setEndsOnOrBefore(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endsOnOrBefore']));
            }
            if (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] !== null) {
                $values = [];
                foreach ($data['businessUnitIds'] as $value) {
                    $values[] = $value;
                }
                $object->setBusinessUnitIds($values);
            } elseif (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] === null) {
                $object->setBusinessUnitIds(null);
            }
            if (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] !== null) {
                $object->setJobTypeId($data['jobTypeId']);
            } elseif (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] === null) {
                $object->setJobTypeId(null);
            }
            if (\array_key_exists('skillBasedAvailability', $data)) {
                $object->setSkillBasedAvailability($data['skillBasedAvailability']);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['startsOnOrAfter'] = $object->getStartsOnOrAfter()?->format('Y-m-d\TH:i:sP');
            $data['endsOnOrBefore'] = $object->getEndsOnOrBefore()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('businessUnitIds') && null !== $object->getBusinessUnitIds()) {
                $values = [];
                foreach ($object->getBusinessUnitIds() as $value) {
                    $values[] = $value;
                }
                $data['businessUnitIds'] = $values;
            }
            if ($object->isInitialized('jobTypeId') && null !== $object->getJobTypeId()) {
                $data['jobTypeId'] = $object->getJobTypeId();
            }
            $data['skillBasedAvailability'] = $object->getSkillBasedAvailability();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\DispatchV2CapacityQueryFilter::class => false];
        }
    }
}
