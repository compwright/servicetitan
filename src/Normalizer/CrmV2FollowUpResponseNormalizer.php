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
    class CrmV2FollowUpResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('leadId', $data)) {
                $object->setLeadId($data['leadId']);
            }
            if (\array_key_exists('followUpDate', $data)) {
                $object->setFollowUpDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['followUpDate']));
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('pinToTop', $data)) {
                $object->setPinToTop($data['pinToTop']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['leadId'] = $object->getLeadId();
            $data['followUpDate'] = $object->getFollowUpDate()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            $data['pinToTop'] = $object->getPinToTop();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class => false];
        }
    }
} else {
    class CrmV2FollowUpResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\CrmV2FollowUpResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('leadId', $data)) {
                $object->setLeadId($data['leadId']);
            }
            if (\array_key_exists('followUpDate', $data)) {
                $object->setFollowUpDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['followUpDate']));
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
            } elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('pinToTop', $data)) {
                $object->setPinToTop($data['pinToTop']);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['leadId'] = $object->getLeadId();
            $data['followUpDate'] = $object->getFollowUpDate()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            $data['pinToTop'] = $object->getPinToTop();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\CrmV2FollowUpResponse::class => false];
        }
    }
}
