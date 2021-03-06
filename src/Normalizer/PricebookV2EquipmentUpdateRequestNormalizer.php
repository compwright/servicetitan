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

class PricebookV2EquipmentUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2EquipmentUpdateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2EquipmentUpdateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('displayName', $data)) {
            $object->setDisplayName($data['displayName']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
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
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('manufacturer', $data)) {
            $object->setManufacturer($data['manufacturer']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('manufacturerWarranty', $data)) {
            $object->setManufacturerWarranty($data['manufacturerWarranty']);
        }
        if (\array_key_exists('serviceProviderWarranty', $data)) {
            $object->setServiceProviderWarranty($data['serviceProviderWarranty']);
        }
        if (\array_key_exists('assets', $data)) {
            $values = [];
            foreach ($data['assets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetRequest', 'json', $context);
            }
            $object->setAssets($values);
        }
        if (\array_key_exists('recommendations', $data)) {
            $values_1 = [];
            foreach ($data['recommendations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CompWright\\ServiceTitan\\Model\\PricebookV2EquipmentRecommendationRequest', 'json', $context);
            }
            $object->setRecommendations($values_1);
        }
        if (\array_key_exists('upgrades', $data)) {
            $values_2 = [];
            foreach ($data['upgrades'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setUpgrades($values_2);
        }
        if (\array_key_exists('equipmentMaterials', $data)) {
            $values_3 = [];
            foreach ($data['equipmentMaterials'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuLinkRequest', 'json', $context);
            }
            $object->setEquipmentMaterials($values_3);
        }
        if (\array_key_exists('categories', $data)) {
            $values_4 = [];
            foreach ($data['categories'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCategories($values_4);
        }
        if (\array_key_exists('primaryVendor', $data)) {
            $object->setPrimaryVendor($data['primaryVendor']);
        }
        if (\array_key_exists('otherVendors', $data)) {
            $values_5 = [];
            foreach ($data['otherVendors'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuVendorRequest', 'json', $context);
            }
            $object->setOtherVendors($values_5);
        }
        if (\array_key_exists('account', $data)) {
            $object->setAccount($data['account']);
        }
        if (\array_key_exists('costOfSaleAccount', $data)) {
            $object->setCostOfSaleAccount($data['costOfSaleAccount']);
        }
        if (\array_key_exists('assetAccount', $data)) {
            $object->setAssetAccount($data['assetAccount']);
        }
        if (\array_key_exists('crossSaleGroup', $data)) {
            $object->setCrossSaleGroup($data['crossSaleGroup']);
        }
        if (\array_key_exists('paysCommission', $data)) {
            $object->setPaysCommission($data['paysCommission']);
        }
        if (\array_key_exists('commissionBonus', $data)) {
            $object->setCommissionBonus($data['commissionBonus']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('taxable', $data)) {
            $object->setTaxable($data['taxable']);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($data['cost']);
        }
        if (\array_key_exists('unitOfMeasure', $data)) {
            $object->setUnitOfMeasure($data['unitOfMeasure']);
        }
        if (\array_key_exists('isInventory', $data)) {
            $object->setIsInventory($data['isInventory']);
        }
        if (\array_key_exists('externalData', $data) && $data['externalData'] !== null) {
            $object->setExternalData($data['externalData']);
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
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getMemberPrice()) {
            $data['memberPrice'] = $object->getMemberPrice();
        }
        if (null !== $object->getAddOnPrice()) {
            $data['addOnPrice'] = $object->getAddOnPrice();
        }
        if (null !== $object->getAddOnMemberPrice()) {
            $data['addOnMemberPrice'] = $object->getAddOnMemberPrice();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getManufacturer()) {
            $data['manufacturer'] = $object->getManufacturer();
        }
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if (null !== $object->getManufacturerWarranty()) {
            $data['manufacturerWarranty'] = $object->getManufacturerWarranty();
        }
        if (null !== $object->getServiceProviderWarranty()) {
            $data['serviceProviderWarranty'] = $object->getServiceProviderWarranty();
        }
        if (null !== $object->getAssets()) {
            $values = [];
            foreach ($object->getAssets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['assets'] = $values;
        }
        if (null !== $object->getRecommendations()) {
            $values_1 = [];
            foreach ($object->getRecommendations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['recommendations'] = $values_1;
        }
        if (null !== $object->getUpgrades()) {
            $values_2 = [];
            foreach ($object->getUpgrades() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['upgrades'] = $values_2;
        }
        if (null !== $object->getEquipmentMaterials()) {
            $values_3 = [];
            foreach ($object->getEquipmentMaterials() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['equipmentMaterials'] = $values_3;
        }
        if (null !== $object->getCategories()) {
            $values_4 = [];
            foreach ($object->getCategories() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['categories'] = $values_4;
        }
        if (null !== $object->getPrimaryVendor()) {
            $data['primaryVendor'] = $object->getPrimaryVendor();
        }
        if (null !== $object->getOtherVendors()) {
            $values_5 = [];
            foreach ($object->getOtherVendors() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['otherVendors'] = $values_5;
        }
        if (null !== $object->getAccount()) {
            $data['account'] = $object->getAccount();
        }
        if (null !== $object->getCostOfSaleAccount()) {
            $data['costOfSaleAccount'] = $object->getCostOfSaleAccount();
        }
        if (null !== $object->getAssetAccount()) {
            $data['assetAccount'] = $object->getAssetAccount();
        }
        if (null !== $object->getCrossSaleGroup()) {
            $data['crossSaleGroup'] = $object->getCrossSaleGroup();
        }
        if (null !== $object->getPaysCommission()) {
            $data['paysCommission'] = $object->getPaysCommission();
        }
        if (null !== $object->getCommissionBonus()) {
            $data['commissionBonus'] = $object->getCommissionBonus();
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getTaxable()) {
            $data['taxable'] = $object->getTaxable();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getUnitOfMeasure()) {
            $data['unitOfMeasure'] = $object->getUnitOfMeasure();
        }
        if (null !== $object->getIsInventory()) {
            $data['isInventory'] = $object->getIsInventory();
        }
        if (null !== $object->getExternalData()) {
            $data['externalData'] = $object->getExternalData();
        }

        return $data;
    }
}
