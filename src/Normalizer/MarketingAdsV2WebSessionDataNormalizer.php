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

class MarketingAdsV2WebSessionDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\MarketingAdsV2WebSessionData';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\MarketingAdsV2WebSessionData';
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
        $object = new \CompWright\ServiceTitan\Model\MarketingAdsV2WebSessionData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('landingPageUrl', $data)) {
            $object->setLandingPageUrl($data['landingPageUrl']);
        }
        if (\array_key_exists('referrerUrl', $data)) {
            $object->setReferrerUrl($data['referrerUrl']);
        }
        if (\array_key_exists('gclid', $data) && $data['gclid'] !== null) {
            $object->setGclid($data['gclid']);
        } elseif (\array_key_exists('gclid', $data) && $data['gclid'] === null) {
            $object->setGclid(null);
        }
        if (\array_key_exists('fbclid', $data) && $data['fbclid'] !== null) {
            $object->setFbclid($data['fbclid']);
        } elseif (\array_key_exists('fbclid', $data) && $data['fbclid'] === null) {
            $object->setFbclid(null);
        }
        if (\array_key_exists('msclkid', $data) && $data['msclkid'] !== null) {
            $object->setMsclkid($data['msclkid']);
        } elseif (\array_key_exists('msclkid', $data) && $data['msclkid'] === null) {
            $object->setMsclkid(null);
        }
        if (\array_key_exists('utmSource', $data) && $data['utmSource'] !== null) {
            $object->setUtmSource($data['utmSource']);
        } elseif (\array_key_exists('utmSource', $data) && $data['utmSource'] === null) {
            $object->setUtmSource(null);
        }
        if (\array_key_exists('utmMedium', $data) && $data['utmMedium'] !== null) {
            $object->setUtmMedium($data['utmMedium']);
        } elseif (\array_key_exists('utmMedium', $data) && $data['utmMedium'] === null) {
            $object->setUtmMedium(null);
        }
        if (\array_key_exists('utmCampaign', $data) && $data['utmCampaign'] !== null) {
            $object->setUtmCampaign($data['utmCampaign']);
        } elseif (\array_key_exists('utmCampaign', $data) && $data['utmCampaign'] === null) {
            $object->setUtmCampaign(null);
        }
        if (\array_key_exists('utmAdgroup', $data) && $data['utmAdgroup'] !== null) {
            $object->setUtmAdgroup($data['utmAdgroup']);
        } elseif (\array_key_exists('utmAdgroup', $data) && $data['utmAdgroup'] === null) {
            $object->setUtmAdgroup(null);
        }
        if (\array_key_exists('utmTerm', $data) && $data['utmTerm'] !== null) {
            $object->setUtmTerm($data['utmTerm']);
        } elseif (\array_key_exists('utmTerm', $data) && $data['utmTerm'] === null) {
            $object->setUtmTerm(null);
        }
        if (\array_key_exists('utmContent', $data) && $data['utmContent'] !== null) {
            $object->setUtmContent($data['utmContent']);
        } elseif (\array_key_exists('utmContent', $data) && $data['utmContent'] === null) {
            $object->setUtmContent(null);
        }
        if (\array_key_exists('googleAnalyticsClientId', $data) && $data['googleAnalyticsClientId'] !== null) {
            $object->setGoogleAnalyticsClientId($data['googleAnalyticsClientId']);
        } elseif (\array_key_exists('googleAnalyticsClientId', $data) && $data['googleAnalyticsClientId'] === null) {
            $object->setGoogleAnalyticsClientId(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['landingPageUrl'] = $object->getLandingPageUrl();
        $data['referrerUrl'] = $object->getReferrerUrl();
        if (null !== $object->getGclid()) {
            $data['gclid'] = $object->getGclid();
        }
        if (null !== $object->getFbclid()) {
            $data['fbclid'] = $object->getFbclid();
        }
        if (null !== $object->getMsclkid()) {
            $data['msclkid'] = $object->getMsclkid();
        }
        if (null !== $object->getUtmSource()) {
            $data['utmSource'] = $object->getUtmSource();
        }
        if (null !== $object->getUtmMedium()) {
            $data['utmMedium'] = $object->getUtmMedium();
        }
        if (null !== $object->getUtmCampaign()) {
            $data['utmCampaign'] = $object->getUtmCampaign();
        }
        if (null !== $object->getUtmAdgroup()) {
            $data['utmAdgroup'] = $object->getUtmAdgroup();
        }
        if (null !== $object->getUtmTerm()) {
            $data['utmTerm'] = $object->getUtmTerm();
        }
        if (null !== $object->getUtmContent()) {
            $data['utmContent'] = $object->getUtmContent();
        }
        if (null !== $object->getGoogleAnalyticsClientId()) {
            $data['googleAnalyticsClientId'] = $object->getGoogleAnalyticsClientId();
        }

        return $data;
    }
}
