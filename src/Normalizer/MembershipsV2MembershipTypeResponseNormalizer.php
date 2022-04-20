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

class MembershipsV2MembershipTypeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\MembershipsV2MembershipTypeResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\MembershipsV2MembershipTypeResponse';
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
        $object = new \CompWright\ServiceTitan\Model\MembershipsV2MembershipTypeResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('discountMode', $data)) {
            $object->setDiscountMode($data['discountMode']);
        }
        if (\array_key_exists('locationTarget', $data)) {
            $object->setLocationTarget($data['locationTarget']);
        }
        if (\array_key_exists('revenueRecognitionMode', $data)) {
            $object->setRevenueRecognitionMode($data['revenueRecognitionMode']);
        }
        if (\array_key_exists('autoCalculateInvoiceTemplates', $data)) {
            $object->setAutoCalculateInvoiceTemplates($data['autoCalculateInvoiceTemplates']);
        }
        if (\array_key_exists('useMembershipPricingTable', $data)) {
            $object->setUseMembershipPricingTable($data['useMembershipPricingTable']);
        }
        if (\array_key_exists('showMembershipSavings', $data)) {
            $object->setShowMembershipSavings($data['showMembershipSavings']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
        }
        if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
            $object->setCreatedById($data['createdById']);
        } elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
            $object->setCreatedById(null);
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        }
        if (\array_key_exists('importId', $data) && $data['importId'] !== null) {
            $object->setImportId($data['importId']);
        } elseif (\array_key_exists('importId', $data) && $data['importId'] === null) {
            $object->setImportId(null);
        }
        if (\array_key_exists('billingTemplateId', $data) && $data['billingTemplateId'] !== null) {
            $object->setBillingTemplateId($data['billingTemplateId']);
        } elseif (\array_key_exists('billingTemplateId', $data) && $data['billingTemplateId'] === null) {
            $object->setBillingTemplateId(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['name'] = $object->getName();
        $data['active'] = $object->getActive();
        $data['discountMode'] = $object->getDiscountMode();
        $data['locationTarget'] = $object->getLocationTarget();
        $data['revenueRecognitionMode'] = $object->getRevenueRecognitionMode();
        $data['autoCalculateInvoiceTemplates'] = $object->getAutoCalculateInvoiceTemplates();
        $data['useMembershipPricingTable'] = $object->getUseMembershipPricingTable();
        $data['showMembershipSavings'] = $object->getShowMembershipSavings();
        $data['id'] = $object->getId();
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getCreatedById()) {
            $data['createdById'] = $object->getCreatedById();
        }
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getImportId()) {
            $data['importId'] = $object->getImportId();
        }
        if (null !== $object->getBillingTemplateId()) {
            $data['billingTemplateId'] = $object->getBillingTemplateId();
        }

        return $data;
    }
}