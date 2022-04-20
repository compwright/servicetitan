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

class PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\PayrollV2PayrollAdjustmentsPayrollAdjustmentCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employeeType', $data)) {
            $object->setEmployeeType($data['employeeType']);
        }
        if (\array_key_exists('employeeId', $data)) {
            $object->setEmployeeId($data['employeeId']);
        }
        if (\array_key_exists('postedOn', $data)) {
            $object->setPostedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['postedOn']));
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
            $object->setMemo($data['memo']);
        } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
            $object->setMemo(null);
        }
        if (\array_key_exists('activityCodeId', $data) && $data['activityCodeId'] !== null) {
            $object->setActivityCodeId($data['activityCodeId']);
        } elseif (\array_key_exists('activityCodeId', $data) && $data['activityCodeId'] === null) {
            $object->setActivityCodeId(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        } elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['employeeType'] = $object->getEmployeeType();
        $data['employeeId'] = $object->getEmployeeId();
        $data['postedOn'] = $object->getPostedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getMemo()) {
            $data['memo'] = $object->getMemo();
        }
        if (null !== $object->getActivityCodeId()) {
            $data['activityCodeId'] = $object->getActivityCodeId();
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }

        return $data;
    }
}
