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

class PricebookV2MaterialResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2MaterialResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2MaterialResponse';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
            $object->setDisplayName($data['displayName']);
        } elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($data['cost']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('memberPrice', $data)) {
            $object->setMemberPrice($data['memberPrice']);
        }
        if (\array_key_exists('addOnPrice', $data)) {
            $object->setAddOnPrice($data['addOnPrice']);
        }
        if (\array_key_exists('addOnMemberPrice', $data)) {
            $object->setAddOnMemberPrice($data['addOnMemberPrice']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('commissionBonus', $data)) {
            $object->setCommissionBonus($data['commissionBonus']);
        }
        if (\array_key_exists('paysCommission', $data)) {
            $object->setPaysCommission($data['paysCommission']);
        }
        if (\array_key_exists('deductAsJobCost', $data)) {
            $object->setDeductAsJobCost($data['deductAsJobCost']);
        }
        if (\array_key_exists('unitOfMeasure', $data) && $data['unitOfMeasure'] !== null) {
            $object->setUnitOfMeasure($data['unitOfMeasure']);
        } elseif (\array_key_exists('unitOfMeasure', $data) && $data['unitOfMeasure'] === null) {
            $object->setUnitOfMeasure(null);
        }
        if (\array_key_exists('isInventory', $data)) {
            $object->setIsInventory($data['isInventory']);
        }
        if (\array_key_exists('account', $data) && $data['account'] !== null) {
            $object->setAccount($data['account']);
        } elseif (\array_key_exists('account', $data) && $data['account'] === null) {
            $object->setAccount(null);
        }
        if (\array_key_exists('costOfSaleAccount', $data) && $data['costOfSaleAccount'] !== null) {
            $object->setCostOfSaleAccount($data['costOfSaleAccount']);
        } elseif (\array_key_exists('costOfSaleAccount', $data) && $data['costOfSaleAccount'] === null) {
            $object->setCostOfSaleAccount(null);
        }
        if (\array_key_exists('assetAccount', $data) && $data['assetAccount'] !== null) {
            $object->setAssetAccount($data['assetAccount']);
        } elseif (\array_key_exists('assetAccount', $data) && $data['assetAccount'] === null) {
            $object->setAssetAccount(null);
        }
        if (\array_key_exists('taxable', $data) && $data['taxable'] !== null) {
            $object->setTaxable($data['taxable']);
        } elseif (\array_key_exists('taxable', $data) && $data['taxable'] === null) {
            $object->setTaxable(null);
        }
        if (\array_key_exists('primaryVendor', $data) && $data['primaryVendor'] !== null) {
            $object->setPrimaryVendor($data['primaryVendor']);
        } elseif (\array_key_exists('primaryVendor', $data) && $data['primaryVendor'] === null) {
            $object->setPrimaryVendor(null);
        }
        if (\array_key_exists('otherVendors', $data) && $data['otherVendors'] !== null) {
            $values = [];
            foreach ($data['otherVendors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuVendorResponse', 'json', $context);
            }
            $object->setOtherVendors($values);
        } elseif (\array_key_exists('otherVendors', $data) && $data['otherVendors'] === null) {
            $object->setOtherVendors(null);
        }
        if (\array_key_exists('categories', $data)) {
            $values_1 = [];
            foreach ($data['categories'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCategories($values_1);
        }
        if (\array_key_exists('assets', $data)) {
            $values_2 = [];
            foreach ($data['assets'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetResponse', 'json', $context);
            }
            $object->setAssets($values_2);
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        }
        if (\array_key_exists('source', $data) && $data['source'] !== null) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && $data['source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
        } elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('externalData', $data) && $data['externalData'] !== null) {
            $values_3 = [];
            foreach ($data['externalData'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CompWright\\ServiceTitan\\Model\\PricebookV2ExternalDataModel', 'json', $context);
            }
            $object->setExternalData($values_3);
        } elseif (\array_key_exists('externalData', $data) && $data['externalData'] === null) {
            $object->setExternalData(null);
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
        $data['code'] = $object->getCode();
        if (null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        $data['description'] = $object->getDescription();
        $data['cost'] = $object->getCost();
        $data['active'] = $object->getActive();
        $data['price'] = $object->getPrice();
        $data['memberPrice'] = $object->getMemberPrice();
        $data['addOnPrice'] = $object->getAddOnPrice();
        $data['addOnMemberPrice'] = $object->getAddOnMemberPrice();
        $data['hours'] = $object->getHours();
        $data['commissionBonus'] = $object->getCommissionBonus();
        $data['paysCommission'] = $object->getPaysCommission();
        $data['deductAsJobCost'] = $object->getDeductAsJobCost();
        if (null !== $object->getUnitOfMeasure()) {
            $data['unitOfMeasure'] = $object->getUnitOfMeasure();
        }
        $data['isInventory'] = $object->getIsInventory();
        if (null !== $object->getAccount()) {
            $data['account'] = $object->getAccount();
        }
        if (null !== $object->getCostOfSaleAccount()) {
            $data['costOfSaleAccount'] = $object->getCostOfSaleAccount();
        }
        if (null !== $object->getAssetAccount()) {
            $data['assetAccount'] = $object->getAssetAccount();
        }
        if (null !== $object->getTaxable()) {
            $data['taxable'] = $object->getTaxable();
        }
        if (null !== $object->getPrimaryVendor()) {
            $data['primaryVendor'] = $object->getPrimaryVendor();
        }
        if (null !== $object->getOtherVendors()) {
            $values = [];
            foreach ($object->getOtherVendors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['otherVendors'] = $values;
        }
        $values_1 = [];
        foreach ($object->getCategories() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['categories'] = $values_1;
        $values_2 = [];
        foreach ($object->getAssets() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['assets'] = $values_2;
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if (null !== $object->getExternalData()) {
            $values_3 = [];
            foreach ($object->getExternalData() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['externalData'] = $values_3;
        }

        return $data;
    }
}
