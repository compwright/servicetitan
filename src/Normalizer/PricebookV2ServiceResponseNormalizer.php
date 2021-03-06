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

class PricebookV2ServiceResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2ServiceResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2ServiceResponse';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse();
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
        if (\array_key_exists('warranty', $data) && $data['warranty'] !== null) {
            $object->setWarranty($data['warranty']);
        } elseif (\array_key_exists('warranty', $data) && $data['warranty'] === null) {
            $object->setWarranty(null);
        }
        if (\array_key_exists('categories', $data)) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuCategoryResponse', 'json', $context);
            }
            $object->setCategories($values);
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
        if (\array_key_exists('taxable', $data)) {
            $object->setTaxable($data['taxable']);
        }
        if (\array_key_exists('account', $data) && $data['account'] !== null) {
            $object->setAccount($data['account']);
        } elseif (\array_key_exists('account', $data) && $data['account'] === null) {
            $object->setAccount(null);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('isLabor', $data) && $data['isLabor'] !== null) {
            $object->setIsLabor($data['isLabor']);
        } elseif (\array_key_exists('isLabor', $data) && $data['isLabor'] === null) {
            $object->setIsLabor(null);
        }
        if (\array_key_exists('recommendations', $data)) {
            $values_1 = [];
            foreach ($data['recommendations'] as $value_1) {
                $values_1[] = $value_1;
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
        if (\array_key_exists('assets', $data)) {
            $values_3 = [];
            foreach ($data['assets'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetResponse', 'json', $context);
            }
            $object->setAssets($values_3);
        }
        if (\array_key_exists('serviceMaterials', $data)) {
            $values_4 = [];
            foreach ($data['serviceMaterials'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuLinkResponse', 'json', $context);
            }
            $object->setServiceMaterials($values_4);
        }
        if (\array_key_exists('serviceEquipment', $data)) {
            $values_5 = [];
            foreach ($data['serviceEquipment'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuLinkResponse', 'json', $context);
            }
            $object->setServiceEquipment($values_5);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('crossSaleGroup', $data) && $data['crossSaleGroup'] !== null) {
            $object->setCrossSaleGroup($data['crossSaleGroup']);
        } elseif (\array_key_exists('crossSaleGroup', $data) && $data['crossSaleGroup'] === null) {
            $object->setCrossSaleGroup(null);
        }
        if (\array_key_exists('paysCommission', $data)) {
            $object->setPaysCommission($data['paysCommission']);
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
            $values_6 = [];
            foreach ($data['externalData'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'CompWright\\ServiceTitan\\Model\\PricebookV2ExternalDataModel', 'json', $context);
            }
            $object->setExternalData($values_6);
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
        if (null !== $object->getWarranty()) {
            $data['warranty'] = $object->getWarranty();
        }
        $values = [];
        foreach ($object->getCategories() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['categories'] = $values;
        $data['price'] = $object->getPrice();
        $data['memberPrice'] = $object->getMemberPrice();
        $data['addOnPrice'] = $object->getAddOnPrice();
        $data['addOnMemberPrice'] = $object->getAddOnMemberPrice();
        $data['taxable'] = $object->getTaxable();
        if (null !== $object->getAccount()) {
            $data['account'] = $object->getAccount();
        }
        $data['hours'] = $object->getHours();
        if (null !== $object->getIsLabor()) {
            $data['isLabor'] = $object->getIsLabor();
        }
        $values_1 = [];
        foreach ($object->getRecommendations() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['recommendations'] = $values_1;
        $values_2 = [];
        foreach ($object->getUpgrades() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['upgrades'] = $values_2;
        $values_3 = [];
        foreach ($object->getAssets() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['assets'] = $values_3;
        $values_4 = [];
        foreach ($object->getServiceMaterials() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $data['serviceMaterials'] = $values_4;
        $values_5 = [];
        foreach ($object->getServiceEquipment() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $data['serviceEquipment'] = $values_5;
        $data['active'] = $object->getActive();
        if (null !== $object->getCrossSaleGroup()) {
            $data['crossSaleGroup'] = $object->getCrossSaleGroup();
        }
        $data['paysCommission'] = $object->getPaysCommission();
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if (null !== $object->getExternalData()) {
            $values_6 = [];
            foreach ($object->getExternalData() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['externalData'] = $values_6;
        }

        return $data;
    }
}
