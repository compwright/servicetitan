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

class TenantSettingsV2BusinessUnitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\TenantSettingsV2BusinessUnitResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\TenantSettingsV2BusinessUnitResponse';
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
        $object = new \CompWright\ServiceTitan\Model\TenantSettingsV2BusinessUnitResponse();
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
        if (\array_key_exists('officialName', $data) && $data['officialName'] !== null) {
            $object->setOfficialName($data['officialName']);
        } elseif (\array_key_exists('officialName', $data) && $data['officialName'] === null) {
            $object->setOfficialName(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] !== null) {
            $object->setPhoneNumber($data['phoneNumber']);
        } elseif (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('invoiceHeader', $data) && $data['invoiceHeader'] !== null) {
            $object->setInvoiceHeader($data['invoiceHeader']);
        } elseif (\array_key_exists('invoiceHeader', $data) && $data['invoiceHeader'] === null) {
            $object->setInvoiceHeader(null);
        }
        if (\array_key_exists('invoiceMessage', $data) && $data['invoiceMessage'] !== null) {
            $object->setInvoiceMessage($data['invoiceMessage']);
        } elseif (\array_key_exists('invoiceMessage', $data) && $data['invoiceMessage'] === null) {
            $object->setInvoiceMessage(null);
        }
        if (\array_key_exists('defaultTaxRate', $data) && $data['defaultTaxRate'] !== null) {
            $object->setDefaultTaxRate($data['defaultTaxRate']);
        } elseif (\array_key_exists('defaultTaxRate', $data) && $data['defaultTaxRate'] === null) {
            $object->setDefaultTaxRate(null);
        }
        if (\array_key_exists('authorizationParagraph', $data) && $data['authorizationParagraph'] !== null) {
            $object->setAuthorizationParagraph($data['authorizationParagraph']);
        } elseif (\array_key_exists('authorizationParagraph', $data) && $data['authorizationParagraph'] === null) {
            $object->setAuthorizationParagraph(null);
        }
        if (\array_key_exists('acknowledgementParagraph', $data) && $data['acknowledgementParagraph'] !== null) {
            $object->setAcknowledgementParagraph($data['acknowledgementParagraph']);
        } elseif (\array_key_exists('acknowledgementParagraph', $data) && $data['acknowledgementParagraph'] === null) {
            $object->setAcknowledgementParagraph(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('materialSku', $data) && $data['materialSku'] !== null) {
            $object->setMaterialSku($data['materialSku']);
        } elseif (\array_key_exists('materialSku', $data) && $data['materialSku'] === null) {
            $object->setMaterialSku(null);
        }
        if (\array_key_exists('quickbooksClass', $data) && $data['quickbooksClass'] !== null) {
            $object->setQuickbooksClass($data['quickbooksClass']);
        } elseif (\array_key_exists('quickbooksClass', $data) && $data['quickbooksClass'] === null) {
            $object->setQuickbooksClass(null);
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
        if (\array_key_exists('corporateContractNumber', $data) && $data['corporateContractNumber'] !== null) {
            $object->setCorporateContractNumber($data['corporateContractNumber']);
        } elseif (\array_key_exists('corporateContractNumber', $data) && $data['corporateContractNumber'] === null) {
            $object->setCorporateContractNumber(null);
        }
        if (\array_key_exists('tenant', $data) && $data['tenant'] !== null) {
            $object->setTenant($data['tenant']);
        } elseif (\array_key_exists('tenant', $data) && $data['tenant'] === null) {
            $object->setTenant(null);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdOn']));
        }
        if (\array_key_exists('modifiedOn', $data)) {
            $object->setModifiedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modifiedOn']));
        }
        if (\array_key_exists('externalData', $data)) {
            $values = [];
            foreach ($data['externalData'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\TenantSettingsV2ExternalDataModel', 'json', $context);
            }
            $object->setExternalData($values);
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
        if (null !== $object->getOfficialName()) {
            $data['officialName'] = $object->getOfficialName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getPhoneNumber()) {
            $data['phoneNumber'] = $object->getPhoneNumber();
        }
        if (null !== $object->getInvoiceHeader()) {
            $data['invoiceHeader'] = $object->getInvoiceHeader();
        }
        if (null !== $object->getInvoiceMessage()) {
            $data['invoiceMessage'] = $object->getInvoiceMessage();
        }
        if (null !== $object->getDefaultTaxRate()) {
            $data['defaultTaxRate'] = $object->getDefaultTaxRate();
        }
        if (null !== $object->getAuthorizationParagraph()) {
            $data['authorizationParagraph'] = $object->getAuthorizationParagraph();
        }
        if (null !== $object->getAcknowledgementParagraph()) {
            $data['acknowledgementParagraph'] = $object->getAcknowledgementParagraph();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getMaterialSku()) {
            $data['materialSku'] = $object->getMaterialSku();
        }
        if (null !== $object->getQuickbooksClass()) {
            $data['quickbooksClass'] = $object->getQuickbooksClass();
        }
        if (null !== $object->getAccountCode()) {
            $data['accountCode'] = $object->getAccountCode();
        }
        if (null !== $object->getFranchiseId()) {
            $data['franchiseId'] = $object->getFranchiseId();
        }
        if (null !== $object->getConceptCode()) {
            $data['conceptCode'] = $object->getConceptCode();
        }
        if (null !== $object->getCorporateContractNumber()) {
            $data['corporateContractNumber'] = $object->getCorporateContractNumber();
        }
        if (null !== $object->getTenant()) {
            $data['tenant'] = $object->getTenant();
        }
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        $values = [];
        foreach ($object->getExternalData() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['externalData'] = $values;

        return $data;
    }
}