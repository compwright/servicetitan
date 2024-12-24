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
    class InventoryV2PurchaseOrderTypeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('automaticallyReceive', $data)) {
                $object->setAutomaticallyReceive($data['automaticallyReceive']);
            }
            if (\array_key_exists('displayToTechnician', $data)) {
                $object->setDisplayToTechnician($data['displayToTechnician']);
            }
            if (\array_key_exists('impactToTechnicianPayroll', $data)) {
                $object->setImpactToTechnicianPayroll($data['impactToTechnicianPayroll']);
            }
            if (\array_key_exists('allowTechniciansToSendPo', $data)) {
                $object->setAllowTechniciansToSendPo($data['allowTechniciansToSendPo']);
            }
            if (\array_key_exists('defaultRequiredDateDaysOffset', $data)) {
                $object->setDefaultRequiredDateDaysOffset($data['defaultRequiredDateDaysOffset']);
            }
            if (\array_key_exists('skipWeekends', $data)) {
                $object->setSkipWeekends($data['skipWeekends']);
            }
            if (\array_key_exists('excludeTaxFromJobCosting', $data)) {
                $object->setExcludeTaxFromJobCosting($data['excludeTaxFromJobCosting']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['active'] = $object->getActive();
            $data['automaticallyReceive'] = $object->getAutomaticallyReceive();
            $data['displayToTechnician'] = $object->getDisplayToTechnician();
            $data['impactToTechnicianPayroll'] = $object->getImpactToTechnicianPayroll();
            $data['allowTechniciansToSendPo'] = $object->getAllowTechniciansToSendPo();
            $data['defaultRequiredDateDaysOffset'] = $object->getDefaultRequiredDateDaysOffset();
            $data['skipWeekends'] = $object->getSkipWeekends();
            $data['excludeTaxFromJobCosting'] = $object->getExcludeTaxFromJobCosting();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class => false];
        }
    }
} else {
    class InventoryV2PurchaseOrderTypeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('automaticallyReceive', $data)) {
                $object->setAutomaticallyReceive($data['automaticallyReceive']);
            }
            if (\array_key_exists('displayToTechnician', $data)) {
                $object->setDisplayToTechnician($data['displayToTechnician']);
            }
            if (\array_key_exists('impactToTechnicianPayroll', $data)) {
                $object->setImpactToTechnicianPayroll($data['impactToTechnicianPayroll']);
            }
            if (\array_key_exists('allowTechniciansToSendPo', $data)) {
                $object->setAllowTechniciansToSendPo($data['allowTechniciansToSendPo']);
            }
            if (\array_key_exists('defaultRequiredDateDaysOffset', $data)) {
                $object->setDefaultRequiredDateDaysOffset($data['defaultRequiredDateDaysOffset']);
            }
            if (\array_key_exists('skipWeekends', $data)) {
                $object->setSkipWeekends($data['skipWeekends']);
            }
            if (\array_key_exists('excludeTaxFromJobCosting', $data)) {
                $object->setExcludeTaxFromJobCosting($data['excludeTaxFromJobCosting']);
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
            $data['name'] = $object->getName();
            $data['active'] = $object->getActive();
            $data['automaticallyReceive'] = $object->getAutomaticallyReceive();
            $data['displayToTechnician'] = $object->getDisplayToTechnician();
            $data['impactToTechnicianPayroll'] = $object->getImpactToTechnicianPayroll();
            $data['allowTechniciansToSendPo'] = $object->getAllowTechniciansToSendPo();
            $data['defaultRequiredDateDaysOffset'] = $object->getDefaultRequiredDateDaysOffset();
            $data['skipWeekends'] = $object->getSkipWeekends();
            $data['excludeTaxFromJobCosting'] = $object->getExcludeTaxFromJobCosting();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\InventoryV2PurchaseOrderTypeResponse::class => false];
        }
    }
}
