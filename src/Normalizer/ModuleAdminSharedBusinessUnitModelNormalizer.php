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

class ModuleAdminSharedBusinessUnitModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitModel';
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
        $object = new \CompWright\ServiceTitan\Model\ModuleAdminSharedBusinessUnitModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('officialName', $data)) {
            $object->setOfficialName($data['officialName']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('phoneNumber', $data)) {
            $object->setPhoneNumber($data['phoneNumber']);
        }
        if (\array_key_exists('invoiceHeader', $data)) {
            $object->setInvoiceHeader($data['invoiceHeader']);
        }
        if (\array_key_exists('invoiceMessage', $data)) {
            $object->setInvoiceMessage($data['invoiceMessage']);
        }
        if (\array_key_exists('defaultTaxRate', $data)) {
            $object->setDefaultTaxRate($data['defaultTaxRate']);
        }
        if (\array_key_exists('authorizationParagraph', $data)) {
            $object->setAuthorizationParagraph($data['authorizationParagraph']);
        }
        if (\array_key_exists('acknowledgementParagraph', $data)) {
            $object->setAcknowledgementParagraph($data['acknowledgementParagraph']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitAddressModel', 'json', $context));
        }
        if (\array_key_exists('materialSku', $data)) {
            $object->setMaterialSku($data['materialSku']);
        }
        if (\array_key_exists('quickbooksClass', $data)) {
            $object->setQuickbooksClass($data['quickbooksClass']);
        }
        if (\array_key_exists('accountCode', $data)) {
            $object->setAccountCode($data['accountCode']);
        }
        if (\array_key_exists('franchiseId', $data)) {
            $object->setFranchiseId($data['franchiseId']);
        }
        if (\array_key_exists('conceptCode', $data)) {
            $object->setConceptCode($data['conceptCode']);
        }
        if (\array_key_exists('corporateContractNumber', $data)) {
            $object->setCorporateContractNumber($data['corporateContractNumber']);
        }
        if (\array_key_exists('tenant', $data)) {
            $object->setTenant($this->denormalizer->denormalize($data['tenant'], 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitTenantModel', 'json', $context));
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
        $data['active'] = $object->getActive();
        $data['name'] = $object->getName();
        $data['officialName'] = $object->getOfficialName();
        $data['email'] = $object->getEmail();
        $data['currency'] = $object->getCurrency();
        $data['phoneNumber'] = $object->getPhoneNumber();
        $data['invoiceHeader'] = $object->getInvoiceHeader();
        $data['invoiceMessage'] = $object->getInvoiceMessage();
        $data['defaultTaxRate'] = $object->getDefaultTaxRate();
        $data['authorizationParagraph'] = $object->getAuthorizationParagraph();
        $data['acknowledgementParagraph'] = $object->getAcknowledgementParagraph();
        $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        $data['materialSku'] = $object->getMaterialSku();
        $data['quickbooksClass'] = $object->getQuickbooksClass();
        $data['accountCode'] = $object->getAccountCode();
        $data['franchiseId'] = $object->getFranchiseId();
        $data['conceptCode'] = $object->getConceptCode();
        $data['corporateContractNumber'] = $object->getCorporateContractNumber();
        $data['tenant'] = $this->normalizer->normalize($object->getTenant(), 'json', $context);
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');

        return $data;
    }
}
