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
    class DispatchV2ZoneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('zips', $data) && $data['zips'] !== null) {
                $values = [];
                foreach ($data['zips'] as $value) {
                    $values[] = $value;
                }
                $object->setZips($values);
            } elseif (\array_key_exists('zips', $data) && $data['zips'] === null) {
                $object->setZips(null);
            }
            if (\array_key_exists('cities', $data) && $data['cities'] !== null) {
                $values_1 = [];
                foreach ($data['cities'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCities($values_1);
            } elseif (\array_key_exists('cities', $data) && $data['cities'] === null) {
                $object->setCities(null);
            }
            if (\array_key_exists('territoryNumbers', $data) && $data['territoryNumbers'] !== null) {
                $values_2 = [];
                foreach ($data['territoryNumbers'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTerritoryNumbers($values_2);
            } elseif (\array_key_exists('territoryNumbers', $data) && $data['territoryNumbers'] === null) {
                $object->setTerritoryNumbers(null);
            }
            if (\array_key_exists('locnNumbers', $data) && $data['locnNumbers'] !== null) {
                $values_3 = [];
                foreach ($data['locnNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocnNumbers($values_3);
            } elseif (\array_key_exists('locnNumbers', $data) && $data['locnNumbers'] === null) {
                $object->setLocnNumbers(null);
            }
            if (\array_key_exists('createdBy', $data)) {
                $object->setCreatedBy($data['createdBy']);
            }
            if (\array_key_exists('createdOn', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdOn']));
            }
            if (\array_key_exists('modifiedOn', $data)) {
                $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedOn']));
            }
            if (\array_key_exists('serviceDaysEnabled', $data)) {
                $object->setServiceDaysEnabled($data['serviceDaysEnabled']);
            }
            if (\array_key_exists('serviceDays', $data) && $data['serviceDays'] !== null) {
                $values_4 = [];
                foreach ($data['serviceDays'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setServiceDays($values_4);
            } elseif (\array_key_exists('serviceDays', $data) && $data['serviceDays'] === null) {
                $object->setServiceDays(null);
            }
            if (\array_key_exists('businessUnits', $data) && $data['businessUnits'] !== null) {
                $values_5 = [];
                foreach ($data['businessUnits'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setBusinessUnits($values_5);
            } elseif (\array_key_exists('businessUnits', $data) && $data['businessUnits'] === null) {
                $object->setBusinessUnits(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['active'] = $object->getActive();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('zips') && null !== $object->getZips()) {
                $values = [];
                foreach ($object->getZips() as $value) {
                    $values[] = $value;
                }
                $data['zips'] = $values;
            }
            if ($object->isInitialized('cities') && null !== $object->getCities()) {
                $values_1 = [];
                foreach ($object->getCities() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['cities'] = $values_1;
            }
            if ($object->isInitialized('territoryNumbers') && null !== $object->getTerritoryNumbers()) {
                $values_2 = [];
                foreach ($object->getTerritoryNumbers() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['territoryNumbers'] = $values_2;
            }
            if ($object->isInitialized('locnNumbers') && null !== $object->getLocnNumbers()) {
                $values_3 = [];
                foreach ($object->getLocnNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locnNumbers'] = $values_3;
            }
            $data['createdBy'] = $object->getCreatedBy();
            $data['createdOn'] = $object->getCreatedOn()?->format('Y-m-d\TH:i:sP');
            $data['modifiedOn'] = $object->getModifiedOn()?->format('Y-m-d\TH:i:sP');
            $data['serviceDaysEnabled'] = $object->getServiceDaysEnabled();
            if ($object->isInitialized('serviceDays') && null !== $object->getServiceDays()) {
                $values_4 = [];
                foreach ($object->getServiceDays() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['serviceDays'] = $values_4;
            }
            if ($object->isInitialized('businessUnits') && null !== $object->getBusinessUnits()) {
                $values_5 = [];
                foreach ($object->getBusinessUnits() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['businessUnits'] = $values_5;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class => false];
        }
    }
} else {
    class DispatchV2ZoneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('zips', $data) && $data['zips'] !== null) {
                $values = [];
                foreach ($data['zips'] as $value) {
                    $values[] = $value;
                }
                $object->setZips($values);
            } elseif (\array_key_exists('zips', $data) && $data['zips'] === null) {
                $object->setZips(null);
            }
            if (\array_key_exists('cities', $data) && $data['cities'] !== null) {
                $values_1 = [];
                foreach ($data['cities'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCities($values_1);
            } elseif (\array_key_exists('cities', $data) && $data['cities'] === null) {
                $object->setCities(null);
            }
            if (\array_key_exists('territoryNumbers', $data) && $data['territoryNumbers'] !== null) {
                $values_2 = [];
                foreach ($data['territoryNumbers'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setTerritoryNumbers($values_2);
            } elseif (\array_key_exists('territoryNumbers', $data) && $data['territoryNumbers'] === null) {
                $object->setTerritoryNumbers(null);
            }
            if (\array_key_exists('locnNumbers', $data) && $data['locnNumbers'] !== null) {
                $values_3 = [];
                foreach ($data['locnNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLocnNumbers($values_3);
            } elseif (\array_key_exists('locnNumbers', $data) && $data['locnNumbers'] === null) {
                $object->setLocnNumbers(null);
            }
            if (\array_key_exists('createdBy', $data)) {
                $object->setCreatedBy($data['createdBy']);
            }
            if (\array_key_exists('createdOn', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdOn']));
            }
            if (\array_key_exists('modifiedOn', $data)) {
                $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedOn']));
            }
            if (\array_key_exists('serviceDaysEnabled', $data)) {
                $object->setServiceDaysEnabled($data['serviceDaysEnabled']);
            }
            if (\array_key_exists('serviceDays', $data) && $data['serviceDays'] !== null) {
                $values_4 = [];
                foreach ($data['serviceDays'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setServiceDays($values_4);
            } elseif (\array_key_exists('serviceDays', $data) && $data['serviceDays'] === null) {
                $object->setServiceDays(null);
            }
            if (\array_key_exists('businessUnits', $data) && $data['businessUnits'] !== null) {
                $values_5 = [];
                foreach ($data['businessUnits'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setBusinessUnits($values_5);
            } elseif (\array_key_exists('businessUnits', $data) && $data['businessUnits'] === null) {
                $object->setBusinessUnits(null);
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
            $data['active'] = $object->getActive();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('zips') && null !== $object->getZips()) {
                $values = [];
                foreach ($object->getZips() as $value) {
                    $values[] = $value;
                }
                $data['zips'] = $values;
            }
            if ($object->isInitialized('cities') && null !== $object->getCities()) {
                $values_1 = [];
                foreach ($object->getCities() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['cities'] = $values_1;
            }
            if ($object->isInitialized('territoryNumbers') && null !== $object->getTerritoryNumbers()) {
                $values_2 = [];
                foreach ($object->getTerritoryNumbers() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['territoryNumbers'] = $values_2;
            }
            if ($object->isInitialized('locnNumbers') && null !== $object->getLocnNumbers()) {
                $values_3 = [];
                foreach ($object->getLocnNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['locnNumbers'] = $values_3;
            }
            $data['createdBy'] = $object->getCreatedBy();
            $data['createdOn'] = $object->getCreatedOn()?->format('Y-m-d\TH:i:sP');
            $data['modifiedOn'] = $object->getModifiedOn()?->format('Y-m-d\TH:i:sP');
            $data['serviceDaysEnabled'] = $object->getServiceDaysEnabled();
            if ($object->isInitialized('serviceDays') && null !== $object->getServiceDays()) {
                $values_4 = [];
                foreach ($object->getServiceDays() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['serviceDays'] = $values_4;
            }
            if ($object->isInitialized('businessUnits') && null !== $object->getBusinessUnits()) {
                $values_5 = [];
                foreach ($object->getBusinessUnits() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['businessUnits'] = $values_5;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse::class => false];
        }
    }
}
