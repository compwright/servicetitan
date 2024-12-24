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
    class AccountingV2PaymentSplitApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (float) $data['amount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
                $object->setInvoiceId($data['invoiceId']);
            } elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
                $object->setInvoiceId(null);
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($data['amount']);
            } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
                $data['invoiceId'] = $object->getInvoiceId();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class => false];
        }
    }
} else {
    class AccountingV2PaymentSplitApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (float) $data['amount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
                $object->setInvoiceId($data['invoiceId']);
            } elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
                $object->setInvoiceId(null);
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($data['amount']);
            } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
                $data['invoiceId'] = $object->getInvoiceId();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CompWright\ServiceTitan\Model\AccountingV2PaymentSplitApiModel::class => false];
        }
    }
}
