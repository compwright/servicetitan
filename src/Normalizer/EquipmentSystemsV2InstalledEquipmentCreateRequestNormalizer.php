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
    class EquipmentSystemsV2InstalledEquipmentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest();
            if (\array_key_exists('cost', $data) && \is_int($data['cost'])) {
                $data['cost'] = (float) $data['cost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('installedOn', $data) && $data['installedOn'] !== null) {
                $object->setInstalledOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['installedOn']));
            } elseif (\array_key_exists('installedOn', $data) && $data['installedOn'] === null) {
                $object->setInstalledOn(null);
            }
            if (\array_key_exists('serialNumber', $data) && $data['serialNumber'] !== null) {
                $object->setSerialNumber($data['serialNumber']);
            } elseif (\array_key_exists('serialNumber', $data) && $data['serialNumber'] === null) {
                $object->setSerialNumber(null);
            }
            if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
                $object->setMemo($data['memo']);
            } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
                $object->setMemo(null);
            }
            if (\array_key_exists('manufacturer', $data) && $data['manufacturer'] !== null) {
                $object->setManufacturer($data['manufacturer']);
            } elseif (\array_key_exists('manufacturer', $data) && $data['manufacturer'] === null) {
                $object->setManufacturer(null);
            }
            if (\array_key_exists('model', $data) && $data['model'] !== null) {
                $object->setModel($data['model']);
            } elseif (\array_key_exists('model', $data) && $data['model'] === null) {
                $object->setModel(null);
            }
            if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
                $object->setCost($data['cost']);
            } elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
                $object->setCost(null);
            }
            if (\array_key_exists('manufacturerWarrantyStart', $data) && $data['manufacturerWarrantyStart'] !== null) {
                $object->setManufacturerWarrantyStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['manufacturerWarrantyStart']));
            } elseif (\array_key_exists('manufacturerWarrantyStart', $data) && $data['manufacturerWarrantyStart'] === null) {
                $object->setManufacturerWarrantyStart(null);
            }
            if (\array_key_exists('manufacturerWarrantyEnd', $data) && $data['manufacturerWarrantyEnd'] !== null) {
                $object->setManufacturerWarrantyEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['manufacturerWarrantyEnd']));
            } elseif (\array_key_exists('manufacturerWarrantyEnd', $data) && $data['manufacturerWarrantyEnd'] === null) {
                $object->setManufacturerWarrantyEnd(null);
            }
            if (\array_key_exists('serviceProviderWarrantyStart', $data) && $data['serviceProviderWarrantyStart'] !== null) {
                $object->setServiceProviderWarrantyStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['serviceProviderWarrantyStart']));
            } elseif (\array_key_exists('serviceProviderWarrantyStart', $data) && $data['serviceProviderWarrantyStart'] === null) {
                $object->setServiceProviderWarrantyStart(null);
            }
            if (\array_key_exists('serviceProviderWarrantyEnd', $data) && $data['serviceProviderWarrantyEnd'] !== null) {
                $object->setServiceProviderWarrantyEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['serviceProviderWarrantyEnd']));
            } elseif (\array_key_exists('serviceProviderWarrantyEnd', $data) && $data['serviceProviderWarrantyEnd'] === null) {
                $object->setServiceProviderWarrantyEnd(null);
            }
            if (\array_key_exists('customFields', $data) && $data['customFields'] !== null) {
                $values = [];
                foreach ($data['customFields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\EquipmentSystemsV2CustomFieldRequestModel::class, 'json', $context);
                }
                $object->setCustomFields($values);
            } elseif (\array_key_exists('customFields', $data) && $data['customFields'] === null) {
                $object->setCustomFields(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['locationId'] = $object->getLocationId();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('installedOn') && null !== $object->getInstalledOn()) {
                $data['installedOn'] = $object->getInstalledOn()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serialNumber') && null !== $object->getSerialNumber()) {
                $data['serialNumber'] = $object->getSerialNumber();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('manufacturer') && null !== $object->getManufacturer()) {
                $data['manufacturer'] = $object->getManufacturer();
            }
            if ($object->isInitialized('model') && null !== $object->getModel()) {
                $data['model'] = $object->getModel();
            }
            if ($object->isInitialized('cost') && null !== $object->getCost()) {
                $data['cost'] = $object->getCost();
            }
            if ($object->isInitialized('manufacturerWarrantyStart') && null !== $object->getManufacturerWarrantyStart()) {
                $data['manufacturerWarrantyStart'] = $object->getManufacturerWarrantyStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('manufacturerWarrantyEnd') && null !== $object->getManufacturerWarrantyEnd()) {
                $data['manufacturerWarrantyEnd'] = $object->getManufacturerWarrantyEnd()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serviceProviderWarrantyStart') && null !== $object->getServiceProviderWarrantyStart()) {
                $data['serviceProviderWarrantyStart'] = $object->getServiceProviderWarrantyStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serviceProviderWarrantyEnd') && null !== $object->getServiceProviderWarrantyEnd()) {
                $data['serviceProviderWarrantyEnd'] = $object->getServiceProviderWarrantyEnd()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
                $values = [];
                foreach ($object->getCustomFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customFields'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class => false];
        }
    }
} else {
    class EquipmentSystemsV2InstalledEquipmentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest();
            if (\array_key_exists('cost', $data) && \is_int($data['cost'])) {
                $data['cost'] = (float) $data['cost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locationId', $data)) {
                $object->setLocationId($data['locationId']);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('installedOn', $data) && $data['installedOn'] !== null) {
                $object->setInstalledOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['installedOn']));
            } elseif (\array_key_exists('installedOn', $data) && $data['installedOn'] === null) {
                $object->setInstalledOn(null);
            }
            if (\array_key_exists('serialNumber', $data) && $data['serialNumber'] !== null) {
                $object->setSerialNumber($data['serialNumber']);
            } elseif (\array_key_exists('serialNumber', $data) && $data['serialNumber'] === null) {
                $object->setSerialNumber(null);
            }
            if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
                $object->setMemo($data['memo']);
            } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
                $object->setMemo(null);
            }
            if (\array_key_exists('manufacturer', $data) && $data['manufacturer'] !== null) {
                $object->setManufacturer($data['manufacturer']);
            } elseif (\array_key_exists('manufacturer', $data) && $data['manufacturer'] === null) {
                $object->setManufacturer(null);
            }
            if (\array_key_exists('model', $data) && $data['model'] !== null) {
                $object->setModel($data['model']);
            } elseif (\array_key_exists('model', $data) && $data['model'] === null) {
                $object->setModel(null);
            }
            if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
                $object->setCost($data['cost']);
            } elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
                $object->setCost(null);
            }
            if (\array_key_exists('manufacturerWarrantyStart', $data) && $data['manufacturerWarrantyStart'] !== null) {
                $object->setManufacturerWarrantyStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['manufacturerWarrantyStart']));
            } elseif (\array_key_exists('manufacturerWarrantyStart', $data) && $data['manufacturerWarrantyStart'] === null) {
                $object->setManufacturerWarrantyStart(null);
            }
            if (\array_key_exists('manufacturerWarrantyEnd', $data) && $data['manufacturerWarrantyEnd'] !== null) {
                $object->setManufacturerWarrantyEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['manufacturerWarrantyEnd']));
            } elseif (\array_key_exists('manufacturerWarrantyEnd', $data) && $data['manufacturerWarrantyEnd'] === null) {
                $object->setManufacturerWarrantyEnd(null);
            }
            if (\array_key_exists('serviceProviderWarrantyStart', $data) && $data['serviceProviderWarrantyStart'] !== null) {
                $object->setServiceProviderWarrantyStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['serviceProviderWarrantyStart']));
            } elseif (\array_key_exists('serviceProviderWarrantyStart', $data) && $data['serviceProviderWarrantyStart'] === null) {
                $object->setServiceProviderWarrantyStart(null);
            }
            if (\array_key_exists('serviceProviderWarrantyEnd', $data) && $data['serviceProviderWarrantyEnd'] !== null) {
                $object->setServiceProviderWarrantyEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['serviceProviderWarrantyEnd']));
            } elseif (\array_key_exists('serviceProviderWarrantyEnd', $data) && $data['serviceProviderWarrantyEnd'] === null) {
                $object->setServiceProviderWarrantyEnd(null);
            }
            if (\array_key_exists('customFields', $data) && $data['customFields'] !== null) {
                $values = [];
                foreach ($data['customFields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\EquipmentSystemsV2CustomFieldRequestModel::class, 'json', $context);
                }
                $object->setCustomFields($values);
            } elseif (\array_key_exists('customFields', $data) && $data['customFields'] === null) {
                $object->setCustomFields(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['locationId'] = $object->getLocationId();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('installedOn') && null !== $object->getInstalledOn()) {
                $data['installedOn'] = $object->getInstalledOn()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serialNumber') && null !== $object->getSerialNumber()) {
                $data['serialNumber'] = $object->getSerialNumber();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('manufacturer') && null !== $object->getManufacturer()) {
                $data['manufacturer'] = $object->getManufacturer();
            }
            if ($object->isInitialized('model') && null !== $object->getModel()) {
                $data['model'] = $object->getModel();
            }
            if ($object->isInitialized('cost') && null !== $object->getCost()) {
                $data['cost'] = $object->getCost();
            }
            if ($object->isInitialized('manufacturerWarrantyStart') && null !== $object->getManufacturerWarrantyStart()) {
                $data['manufacturerWarrantyStart'] = $object->getManufacturerWarrantyStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('manufacturerWarrantyEnd') && null !== $object->getManufacturerWarrantyEnd()) {
                $data['manufacturerWarrantyEnd'] = $object->getManufacturerWarrantyEnd()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serviceProviderWarrantyStart') && null !== $object->getServiceProviderWarrantyStart()) {
                $data['serviceProviderWarrantyStart'] = $object->getServiceProviderWarrantyStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('serviceProviderWarrantyEnd') && null !== $object->getServiceProviderWarrantyEnd()) {
                $data['serviceProviderWarrantyEnd'] = $object->getServiceProviderWarrantyEnd()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('customFields') && null !== $object->getCustomFields()) {
                $values = [];
                foreach ($object->getCustomFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customFields'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\EquipmentSystemsV2InstalledEquipmentCreateRequest::class => false];
        }
    }
}
