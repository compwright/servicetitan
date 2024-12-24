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
    class ModuleTelecomSharedCallInUpdateModelV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callId', $data) && $data['callId'] !== null) {
                $object->setCallId($data['callId']);
            } elseif (\array_key_exists('callId', $data) && $data['callId'] === null) {
                $object->setCallId(null);
            }
            if (\array_key_exists('callType', $data) && $data['callType'] !== null) {
                $object->setCallType($data['callType']);
            } elseif (\array_key_exists('callType', $data) && $data['callType'] === null) {
                $object->setCallType(null);
            }
            if (\array_key_exists('excuseMemo', $data)) {
                $object->setExcuseMemo($data['excuseMemo']);
            }
            if (\array_key_exists('campaignId', $data) && $data['campaignId'] !== null) {
                $object->setCampaignId($data['campaignId']);
            } elseif (\array_key_exists('campaignId', $data) && $data['campaignId'] === null) {
                $object->setCampaignId(null);
            }
            if (\array_key_exists('jobId', $data) && $data['jobId'] !== null) {
                $object->setJobId($data['jobId']);
            } elseif (\array_key_exists('jobId', $data) && $data['jobId'] === null) {
                $object->setJobId(null);
            }
            if (\array_key_exists('agentId', $data) && $data['agentId'] !== null) {
                $object->setAgentId($data['agentId']);
            } elseif (\array_key_exists('agentId', $data) && $data['agentId'] === null) {
                $object->setAgentId(null);
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($this->denormalizer->denormalize($data['reason'], \CompWright\ServiceTitan\Model\ModuleTelecomSharedReasonInModel::class, 'json', $context));
            }
            if (\array_key_exists('customer', $data)) {
                $object->setCustomer($this->denormalizer->denormalize($data['customer'], \CompWright\ServiceTitan\Model\CustomerInModel::class, 'json', $context));
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \CompWright\ServiceTitan\Model\LocationInModel::class, 'json', $context));
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('callId') && null !== $object->getCallId()) {
                $data['callId'] = $object->getCallId();
            }
            if ($object->isInitialized('callType') && null !== $object->getCallType()) {
                $data['callType'] = $object->getCallType();
            }
            $data['excuseMemo'] = $object->getExcuseMemo();
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('jobId') && null !== $object->getJobId()) {
                $data['jobId'] = $object->getJobId();
            }
            if ($object->isInitialized('agentId') && null !== $object->getAgentId()) {
                $data['agentId'] = $object->getAgentId();
            }
            $data['reason'] = $this->normalizer->normalize($object->getReason(), 'json', $context);
            $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class => false];
        }
    }
} else {
    class ModuleTelecomSharedCallInUpdateModelV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('callId', $data) && $data['callId'] !== null) {
                $object->setCallId($data['callId']);
            } elseif (\array_key_exists('callId', $data) && $data['callId'] === null) {
                $object->setCallId(null);
            }
            if (\array_key_exists('callType', $data) && $data['callType'] !== null) {
                $object->setCallType($data['callType']);
            } elseif (\array_key_exists('callType', $data) && $data['callType'] === null) {
                $object->setCallType(null);
            }
            if (\array_key_exists('excuseMemo', $data)) {
                $object->setExcuseMemo($data['excuseMemo']);
            }
            if (\array_key_exists('campaignId', $data) && $data['campaignId'] !== null) {
                $object->setCampaignId($data['campaignId']);
            } elseif (\array_key_exists('campaignId', $data) && $data['campaignId'] === null) {
                $object->setCampaignId(null);
            }
            if (\array_key_exists('jobId', $data) && $data['jobId'] !== null) {
                $object->setJobId($data['jobId']);
            } elseif (\array_key_exists('jobId', $data) && $data['jobId'] === null) {
                $object->setJobId(null);
            }
            if (\array_key_exists('agentId', $data) && $data['agentId'] !== null) {
                $object->setAgentId($data['agentId']);
            } elseif (\array_key_exists('agentId', $data) && $data['agentId'] === null) {
                $object->setAgentId(null);
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($this->denormalizer->denormalize($data['reason'], \CompWright\ServiceTitan\Model\ModuleTelecomSharedReasonInModel::class, 'json', $context));
            }
            if (\array_key_exists('customer', $data)) {
                $object->setCustomer($this->denormalizer->denormalize($data['customer'], \CompWright\ServiceTitan\Model\CustomerInModel::class, 'json', $context));
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \CompWright\ServiceTitan\Model\LocationInModel::class, 'json', $context));
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('callId') && null !== $object->getCallId()) {
                $data['callId'] = $object->getCallId();
            }
            if ($object->isInitialized('callType') && null !== $object->getCallType()) {
                $data['callType'] = $object->getCallType();
            }
            $data['excuseMemo'] = $object->getExcuseMemo();
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('jobId') && null !== $object->getJobId()) {
                $data['jobId'] = $object->getJobId();
            }
            if ($object->isInitialized('agentId') && null !== $object->getAgentId()) {
                $data['agentId'] = $object->getAgentId();
            }
            $data['reason'] = $this->normalizer->normalize($object->getReason(), 'json', $context);
            $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\ModuleTelecomSharedCallInUpdateModelV2::class => false];
        }
    }
}
