<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Normalizer;

use CompWright\ServiceTitan\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = ['CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedDetailedBundleCallModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedDetailedBundleCallModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleAdminSharedBusinessUnitModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitAddressModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleAdminSharedBusinessUnitAddressModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleAdminSharedBusinessUnitTenantModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleAdminSharedBusinessUnitTenantModelNormalizer', 'CompWright\\ServiceTitan\\Model\\JobTypeModel' => 'CompWright\\ServiceTitan\\Normalizer\\JobTypeModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedDetailedCallModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedDetailedCallModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedCallReasonModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedCallReasonModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ServicesNamedModel' => 'CompWright\\ServiceTitan\\Normalizer\\ServicesNamedModelNormalizer', 'CompWright\\ServiceTitan\\Model\\CrmContractsCustomersCustomerModel' => 'CompWright\\ServiceTitan\\Normalizer\\CrmContractsCustomersCustomerModelNormalizer', 'CompWright\\ServiceTitan\\Model\\AddressOutput' => 'CompWright\\ServiceTitan\\Normalizer\\AddressOutputNormalizer', 'CompWright\\ServiceTitan\\Model\\ContactsContractsContactOutputModel' => 'CompWright\\ServiceTitan\\Normalizer\\ContactsContractsContactOutputModelNormalizer', 'CompWright\\ServiceTitan\\Model\\MembershipsMembershipModel' => 'CompWright\\ServiceTitan\\Normalizer\\MembershipsMembershipModelNormalizer', 'CompWright\\ServiceTitan\\Model\\MembershipsMembershipTypeModel' => 'CompWright\\ServiceTitan\\Normalizer\\MembershipsMembershipTypeModelNormalizer', 'CompWright\\ServiceTitan\\Model\\CustomFieldApiModel' => 'CompWright\\ServiceTitan\\Normalizer\\CustomFieldApiModelNormalizer', 'CompWright\\ServiceTitan\\Model\\CrmContractsCustomersCustomerPhoneModel' => 'CompWright\\ServiceTitan\\Normalizer\\CrmContractsCustomersCustomerPhoneModelNormalizer', 'CompWright\\ServiceTitan\\Model\\MarketingCoreCampaignModel' => 'CompWright\\ServiceTitan\\Normalizer\\MarketingCoreCampaignModelNormalizer', 'CompWright\\ServiceTitan\\Model\\MarketingCoreCampaignCategoryModel' => 'CompWright\\ServiceTitan\\Normalizer\\MarketingCoreCampaignCategoryModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedCallAgentModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedCallAgentModelNormalizer', 'CompWright\\ServiceTitan\\Model\\CollectionResultOfModuleTelecomSharedBundleCallModel' => 'CompWright\\ServiceTitan\\Normalizer\\CollectionResultOfModuleTelecomSharedBundleCallModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedBundleCallModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedBundleCallModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedCallModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedCallModelNormalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedCallInUpdateModelV2' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedCallInUpdateModelV2Normalizer', 'CompWright\\ServiceTitan\\Model\\ModuleTelecomSharedReasonInModel' => 'CompWright\\ServiceTitan\\Normalizer\\ModuleTelecomSharedReasonInModelNormalizer', 'CompWright\\ServiceTitan\\Model\\CustomerInModel' => 'CompWright\\ServiceTitan\\Normalizer\\CustomerInModelNormalizer', 'CompWright\\ServiceTitan\\Model\\AddressInput' => 'CompWright\\ServiceTitan\\Normalizer\\AddressInputNormalizer', 'CompWright\\ServiceTitan\\Model\\ContactsContractsContactInputModel' => 'CompWright\\ServiceTitan\\Normalizer\\ContactsContractsContactInputModelNormalizer', 'CompWright\\ServiceTitan\\Model\\LocationInModel' => 'CompWright\\ServiceTitan\\Normalizer\\LocationInModelNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\CompWright\\ServiceTitan\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    /**
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
