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

class PricebookV2CategoryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\PricebookV2CategoryResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\PricebookV2CategoryResponse';
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
        $object = new \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $object->setImage($data['image']);
        } elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('parentId', $data) && $data['parentId'] !== null) {
            $object->setParentId($data['parentId']);
        } elseif (\array_key_exists('parentId', $data) && $data['parentId'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('categoryType', $data)) {
            $object->setCategoryType($data['categoryType']);
        }
        if (\array_key_exists('subcategories', $data) && $data['subcategories'] !== null) {
            $values = [];
            foreach ($data['subcategories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\PricebookV2CategoryResponse', 'json', $context);
            }
            $object->setSubcategories($values);
        } elseif (\array_key_exists('subcategories', $data) && $data['subcategories'] === null) {
            $object->setSubcategories(null);
        }
        if (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] !== null) {
            $values_1 = [];
            foreach ($data['businessUnitIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBusinessUnitIds($values_1);
        } elseif (\array_key_exists('businessUnitIds', $data) && $data['businessUnitIds'] === null) {
            $object->setBusinessUnitIds(null);
        }
        if (\array_key_exists('skuImages', $data) && $data['skuImages'] !== null) {
            $values_2 = [];
            foreach ($data['skuImages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSkuImages($values_2);
        } elseif (\array_key_exists('skuImages', $data) && $data['skuImages'] === null) {
            $object->setSkuImages(null);
        }
        if (\array_key_exists('skuVideos', $data) && $data['skuVideos'] !== null) {
            $values_3 = [];
            foreach ($data['skuVideos'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSkuVideos($values_3);
        } elseif (\array_key_exists('skuVideos', $data) && $data['skuVideos'] === null) {
            $object->setSkuVideos(null);
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
        $data['active'] = $object->getActive();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if (null !== $object->getParentId()) {
            $data['parentId'] = $object->getParentId();
        }
        $data['position'] = $object->getPosition();
        $data['categoryType'] = $object->getCategoryType();
        if (null !== $object->getSubcategories()) {
            $values = [];
            foreach ($object->getSubcategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['subcategories'] = $values;
        }
        if (null !== $object->getBusinessUnitIds()) {
            $values_1 = [];
            foreach ($object->getBusinessUnitIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['businessUnitIds'] = $values_1;
        }
        if (null !== $object->getSkuImages()) {
            $values_2 = [];
            foreach ($object->getSkuImages() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['skuImages'] = $values_2;
        }
        if (null !== $object->getSkuVideos()) {
            $values_3 = [];
            foreach ($object->getSkuVideos() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['skuVideos'] = $values_3;
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }

        return $data;
    }
}
