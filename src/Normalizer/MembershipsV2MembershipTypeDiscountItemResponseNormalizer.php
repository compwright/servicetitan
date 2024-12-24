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
    class MembershipsV2MembershipTypeDiscountItemResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (float) $data['discount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('targetId', $data)) {
                $object->setTargetId($data['targetId']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
            }
            if (\array_key_exists('createdOn', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdOn']));
            }
            if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
                $object->setCreatedById($data['createdById']);
            } elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
                $object->setCreatedById(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['targetId'] = $object->getTargetId();
            $data['discount'] = $object->getDiscount();
            $data['createdOn'] = $object->getCreatedOn()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('createdById') && null !== $object->getCreatedById()) {
                $data['createdById'] = $object->getCreatedById();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class => false];
        }
    }
} else {
    class MembershipsV2MembershipTypeDiscountItemResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (float) $data['discount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('targetId', $data)) {
                $object->setTargetId($data['targetId']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
            }
            if (\array_key_exists('createdOn', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdOn']));
            }
            if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
                $object->setCreatedById($data['createdById']);
            } elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
                $object->setCreatedById(null);
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
            $data['targetId'] = $object->getTargetId();
            $data['discount'] = $object->getDiscount();
            $data['createdOn'] = $object->getCreatedOn()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('createdById') && null !== $object->getCreatedById()) {
                $data['createdById'] = $object->getCreatedById();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeDiscountItemResponse::class => false];
        }
    }
}
