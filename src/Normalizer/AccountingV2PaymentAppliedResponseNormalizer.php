<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Normalizer;

use CompWright\ServiceTitan\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountingV2PaymentAppliedResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\AccountingV2PaymentAppliedResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\AccountingV2PaymentAppliedResponse';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CompWright\ServiceTitan\Model\AccountingV2PaymentAppliedResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('appliedTo', $data)) {
            $object->setAppliedTo($data['appliedTo']);
        }
        if (\array_key_exists('appliedAmount', $data) && $data['appliedAmount'] !== null) {
            $object->setAppliedAmount($data['appliedAmount']);
        } elseif (\array_key_exists('appliedAmount', $data) && $data['appliedAmount'] === null) {
            $object->setAppliedAmount(null);
        }
        if (\array_key_exists('appliedOn', $data) && $data['appliedOn'] !== null) {
            $object->setAppliedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['appliedOn']));
        } elseif (\array_key_exists('appliedOn', $data) && $data['appliedOn'] === null) {
            $object->setAppliedOn(null);
        }
        if (\array_key_exists('appliedBy', $data) && $data['appliedBy'] !== null) {
            $object->setAppliedBy($data['appliedBy']);
        } elseif (\array_key_exists('appliedBy', $data) && $data['appliedBy'] === null) {
            $object->setAppliedBy(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['appliedTo'] = $object->getAppliedTo();
        if (null !== $object->getAppliedAmount()) {
            $data['appliedAmount'] = $object->getAppliedAmount();
        }
        if (null !== $object->getAppliedOn()) {
            $data['appliedOn'] = $object->getAppliedOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getAppliedBy()) {
            $data['appliedBy'] = $object->getAppliedBy();
        }

        return $data;
    }
}
