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
    class CrmV2CreateBookingRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($data['address']);
            } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\CrmV2BookingContactModel::class, 'json', $context);
                }
                $object->setContacts($values);
            } elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('customerType', $data) && $data['customerType'] !== null) {
                $object->setCustomerType($data['customerType']);
            } elseif (\array_key_exists('customerType', $data) && $data['customerType'] === null) {
                $object->setCustomerType(null);
            }
            if (\array_key_exists('start', $data) && $data['start'] !== null) {
                $object->setStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['start']));
            } elseif (\array_key_exists('start', $data) && $data['start'] === null) {
                $object->setStart(null);
            }
            if (\array_key_exists('summary', $data)) {
                $object->setSummary($data['summary']);
            }
            if (\array_key_exists('campaignId', $data) && $data['campaignId'] !== null) {
                $object->setCampaignId($data['campaignId']);
            } elseif (\array_key_exists('campaignId', $data) && $data['campaignId'] === null) {
                $object->setCampaignId(null);
            }
            if (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] !== null) {
                $object->setBusinessUnitId($data['businessUnitId']);
            } elseif (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] === null) {
                $object->setBusinessUnitId(null);
            }
            if (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] !== null) {
                $object->setJobTypeId($data['jobTypeId']);
            } elseif (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] === null) {
                $object->setJobTypeId(null);
            }
            if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
                $object->setPriority($data['priority']);
            } elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
                $object->setPriority(null);
            }
            if (\array_key_exists('isFirstTimeClient', $data)) {
                $object->setIsFirstTimeClient($data['isFirstTimeClient']);
            }
            if (\array_key_exists('uploadedImages', $data) && $data['uploadedImages'] !== null) {
                $values_1 = [];
                foreach ($data['uploadedImages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUploadedImages($values_1);
            } elseif (\array_key_exists('uploadedImages', $data) && $data['uploadedImages'] === null) {
                $object->setUploadedImages(null);
            }
            if (\array_key_exists('isSendConfirmationEmail', $data) && $data['isSendConfirmationEmail'] !== null) {
                $object->setIsSendConfirmationEmail($data['isSendConfirmationEmail']);
            } elseif (\array_key_exists('isSendConfirmationEmail', $data) && $data['isSendConfirmationEmail'] === null) {
                $object->setIsSendConfirmationEmail(null);
            }
            if (\array_key_exists('externalId', $data)) {
                $object->setExternalId($data['externalId']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['source'] = $object->getSource();
            $data['name'] = $object->getName();
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $values = [];
                foreach ($object->getContacts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contacts'] = $values;
            }
            if ($object->isInitialized('customerType') && null !== $object->getCustomerType()) {
                $data['customerType'] = $object->getCustomerType();
            }
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['start'] = $object->getStart()->format('Y-m-d\TH:i:sP');
            }
            $data['summary'] = $object->getSummary();
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('businessUnitId') && null !== $object->getBusinessUnitId()) {
                $data['businessUnitId'] = $object->getBusinessUnitId();
            }
            if ($object->isInitialized('jobTypeId') && null !== $object->getJobTypeId()) {
                $data['jobTypeId'] = $object->getJobTypeId();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            $data['isFirstTimeClient'] = $object->getIsFirstTimeClient();
            if ($object->isInitialized('uploadedImages') && null !== $object->getUploadedImages()) {
                $values_1 = [];
                foreach ($object->getUploadedImages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['uploadedImages'] = $values_1;
            }
            if ($object->isInitialized('isSendConfirmationEmail') && null !== $object->getIsSendConfirmationEmail()) {
                $data['isSendConfirmationEmail'] = $object->getIsSendConfirmationEmail();
            }
            $data['externalId'] = $object->getExternalId();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class => false];
        }
    }
} else {
    class CrmV2CreateBookingRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($data['address']);
            } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CompWright\ServiceTitan\Model\CrmV2BookingContactModel::class, 'json', $context);
                }
                $object->setContacts($values);
            } elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('customerType', $data) && $data['customerType'] !== null) {
                $object->setCustomerType($data['customerType']);
            } elseif (\array_key_exists('customerType', $data) && $data['customerType'] === null) {
                $object->setCustomerType(null);
            }
            if (\array_key_exists('start', $data) && $data['start'] !== null) {
                $object->setStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['start']));
            } elseif (\array_key_exists('start', $data) && $data['start'] === null) {
                $object->setStart(null);
            }
            if (\array_key_exists('summary', $data)) {
                $object->setSummary($data['summary']);
            }
            if (\array_key_exists('campaignId', $data) && $data['campaignId'] !== null) {
                $object->setCampaignId($data['campaignId']);
            } elseif (\array_key_exists('campaignId', $data) && $data['campaignId'] === null) {
                $object->setCampaignId(null);
            }
            if (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] !== null) {
                $object->setBusinessUnitId($data['businessUnitId']);
            } elseif (\array_key_exists('businessUnitId', $data) && $data['businessUnitId'] === null) {
                $object->setBusinessUnitId(null);
            }
            if (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] !== null) {
                $object->setJobTypeId($data['jobTypeId']);
            } elseif (\array_key_exists('jobTypeId', $data) && $data['jobTypeId'] === null) {
                $object->setJobTypeId(null);
            }
            if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
                $object->setPriority($data['priority']);
            } elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
                $object->setPriority(null);
            }
            if (\array_key_exists('isFirstTimeClient', $data)) {
                $object->setIsFirstTimeClient($data['isFirstTimeClient']);
            }
            if (\array_key_exists('uploadedImages', $data) && $data['uploadedImages'] !== null) {
                $values_1 = [];
                foreach ($data['uploadedImages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUploadedImages($values_1);
            } elseif (\array_key_exists('uploadedImages', $data) && $data['uploadedImages'] === null) {
                $object->setUploadedImages(null);
            }
            if (\array_key_exists('isSendConfirmationEmail', $data) && $data['isSendConfirmationEmail'] !== null) {
                $object->setIsSendConfirmationEmail($data['isSendConfirmationEmail']);
            } elseif (\array_key_exists('isSendConfirmationEmail', $data) && $data['isSendConfirmationEmail'] === null) {
                $object->setIsSendConfirmationEmail(null);
            }
            if (\array_key_exists('externalId', $data)) {
                $object->setExternalId($data['externalId']);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['source'] = $object->getSource();
            $data['name'] = $object->getName();
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $values = [];
                foreach ($object->getContacts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contacts'] = $values;
            }
            if ($object->isInitialized('customerType') && null !== $object->getCustomerType()) {
                $data['customerType'] = $object->getCustomerType();
            }
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['start'] = $object->getStart()->format('Y-m-d\TH:i:sP');
            }
            $data['summary'] = $object->getSummary();
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('businessUnitId') && null !== $object->getBusinessUnitId()) {
                $data['businessUnitId'] = $object->getBusinessUnitId();
            }
            if ($object->isInitialized('jobTypeId') && null !== $object->getJobTypeId()) {
                $data['jobTypeId'] = $object->getJobTypeId();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            $data['isFirstTimeClient'] = $object->getIsFirstTimeClient();
            if ($object->isInitialized('uploadedImages') && null !== $object->getUploadedImages()) {
                $values_1 = [];
                foreach ($object->getUploadedImages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['uploadedImages'] = $values_1;
            }
            if ($object->isInitialized('isSendConfirmationEmail') && null !== $object->getIsSendConfirmationEmail()) {
                $data['isSendConfirmationEmail'] = $object->getIsSendConfirmationEmail();
            }
            $data['externalId'] = $object->getExternalId();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2CreateBookingRequest::class => false];
        }
    }
}
