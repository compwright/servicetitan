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

class TenantSettingsV2BusinessUnitTenantResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\TenantSettingsV2BusinessUnitTenantResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\TenantSettingsV2BusinessUnitTenantResponse';
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
        $object = new \CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitTenantResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('accountCode', $data) && $data['accountCode'] !== null) {
            $object->setAccountCode($data['accountCode']);
        } elseif (\array_key_exists('accountCode', $data) && $data['accountCode'] === null) {
            $object->setAccountCode(null);
        }
        if (\array_key_exists('franchiseId', $data) && $data['franchiseId'] !== null) {
            $object->setFranchiseId($data['franchiseId']);
        } elseif (\array_key_exists('franchiseId', $data) && $data['franchiseId'] === null) {
            $object->setFranchiseId(null);
        }
        if (\array_key_exists('conceptCode', $data) && $data['conceptCode'] !== null) {
            $object->setConceptCode($data['conceptCode']);
        } elseif (\array_key_exists('conceptCode', $data) && $data['conceptCode'] === null) {
            $object->setConceptCode(null);
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
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
        $data['name'] = $object->getName();
        if (null !== $object->getAccountCode()) {
            $data['accountCode'] = $object->getAccountCode();
        }
        if (null !== $object->getFranchiseId()) {
            $data['franchiseId'] = $object->getFranchiseId();
        }
        if (null !== $object->getConceptCode()) {
            $data['conceptCode'] = $object->getConceptCode();
        }
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');

        return $data;
    }
}
