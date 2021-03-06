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

class PricebookV2DiscountAndFeesUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2DiscountAndFeesUpdateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2DiscountAndFeesUpdateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
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
        if (\array_key_exists('amountType', $data)) {
            $object->setAmountType($data['amountType']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('taxable', $data)) {
            $object->setTaxable($data['taxable']);
        }
        if (\array_key_exists('categories', $data)) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values[] = $value;
            }
            $object->setCategories($values);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('assets', $data)) {
            $values_1 = [];
            foreach ($data['assets'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CompWright\\ServiceTitan\\Model\\PricebookV2SkuAssetRequest', 'json', $context);
            }
            $object->setAssets($values_1);
        }
        if (\array_key_exists('account', $data)) {
            $object->setAccount($data['account']);
        }
        if (\array_key_exists('crossSaleGroup', $data)) {
            $object->setCrossSaleGroup($data['crossSaleGroup']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('bonus', $data)) {
            $object->setBonus($data['bonus']);
        }
        if (\array_key_exists('commissionBonus', $data)) {
            $object->setCommissionBonus($data['commissionBonus']);
        }
        if (\array_key_exists('paysCommission', $data)) {
            $object->setPaysCommission($data['paysCommission']);
        }
        if (\array_key_exists('excludeFromPayroll', $data)) {
            $object->setExcludeFromPayroll($data['excludeFromPayroll']);
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
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getAmountType()) {
            $data['amountType'] = $object->getAmountType();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if (null !== $object->getTaxable()) {
            $data['taxable'] = $object->getTaxable();
        }
        if (null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getAssets()) {
            $values_1 = [];
            foreach ($object->getAssets() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['assets'] = $values_1;
        }
        if (null !== $object->getAccount()) {
            $data['account'] = $object->getAccount();
        }
        if (null !== $object->getCrossSaleGroup()) {
            $data['crossSaleGroup'] = $object->getCrossSaleGroup();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getBonus()) {
            $data['bonus'] = $object->getBonus();
        }
        if (null !== $object->getCommissionBonus()) {
            $data['commissionBonus'] = $object->getCommissionBonus();
        }
        if (null !== $object->getPaysCommission()) {
            $data['paysCommission'] = $object->getPaysCommission();
        }
        if (null !== $object->getExcludeFromPayroll()) {
            $data['excludeFromPayroll'] = $object->getExcludeFromPayroll();
        }
        if (null !== $object->getExternalData()) {
            $data['externalData'] = $object->getExternalData();
        }

        return $data;
    }
}
