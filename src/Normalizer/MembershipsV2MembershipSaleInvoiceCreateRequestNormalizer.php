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

class MembershipsV2MembershipSaleInvoiceCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\MembershipsV2MembershipSaleInvoiceCreateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\MembershipsV2MembershipSaleInvoiceCreateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\MembershipsV2MembershipSaleInvoiceCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
        }
        if (\array_key_exists('businessUnitId', $data)) {
            $object->setBusinessUnitId($data['businessUnitId']);
        }
        if (\array_key_exists('saleTaskId', $data)) {
            $object->setSaleTaskId($data['saleTaskId']);
        }
        if (\array_key_exists('durationBillingId', $data)) {
            $object->setDurationBillingId($data['durationBillingId']);
        }
        if (\array_key_exists('locationId', $data) && $data['locationId'] !== null) {
            $object->setLocationId($data['locationId']);
        } elseif (\array_key_exists('locationId', $data) && $data['locationId'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('recurringServiceAction', $data)) {
            $object->setRecurringServiceAction($data['recurringServiceAction']);
        }
        if (\array_key_exists('recurringLocationId', $data) && $data['recurringLocationId'] !== null) {
            $object->setRecurringLocationId($data['recurringLocationId']);
        } elseif (\array_key_exists('recurringLocationId', $data) && $data['recurringLocationId'] === null) {
            $object->setRecurringLocationId(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['customerId'] = $object->getCustomerId();
        $data['businessUnitId'] = $object->getBusinessUnitId();
        $data['saleTaskId'] = $object->getSaleTaskId();
        $data['durationBillingId'] = $object->getDurationBillingId();
        if (null !== $object->getLocationId()) {
            $data['locationId'] = $object->getLocationId();
        }
        $data['recurringServiceAction'] = $object->getRecurringServiceAction();
        if (null !== $object->getRecurringLocationId()) {
            $data['recurringLocationId'] = $object->getRecurringLocationId();
        }

        return $data;
    }
}