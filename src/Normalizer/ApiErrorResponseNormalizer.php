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

class ApiErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse';
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
        $object = new \CompWright\ServiceTitan\Model\ApiErrorResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('traceId', $data)) {
            $object->setTraceId($data['traceId']);
        }
        if (\array_key_exists('errors', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['errors'] as $key => $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[$key] = $values_1;
            }
            $object->setErrors($values);
        }
        if (\array_key_exists('data', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setData($values_2);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['type'] = $object->getType();
        $data['title'] = $object->getTitle();
        $data['status'] = $object->getStatus();
        $data['traceId'] = $object->getTraceId();
        $values = [];
        foreach ($object->getErrors() as $key => $value) {
            $values_1 = [];
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[$key] = $values_1;
        }
        $data['errors'] = $values;
        $values_2 = [];
        foreach ($object->getData() as $key_1 => $value_2) {
            $values_2[$key_1] = $value_2;
        }
        $data['data'] = $values_2;

        return $data;
    }
}
