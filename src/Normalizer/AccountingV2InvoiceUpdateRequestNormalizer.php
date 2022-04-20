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

class AccountingV2InvoiceUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\AccountingV2InvoiceUpdateRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\AccountingV2InvoiceUpdateRequest';
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
        $object = new \CompWright\ServiceTitan\Model\AccountingV2InvoiceUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('typeId', $data) && $data['typeId'] !== null) {
            $object->setTypeId($data['typeId']);
        } elseif (\array_key_exists('typeId', $data) && $data['typeId'] === null) {
            $object->setTypeId(null);
        }
        if (\array_key_exists('invoicedOn', $data) && $data['invoicedOn'] !== null) {
            $object->setInvoicedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['invoicedOn']));
        } elseif (\array_key_exists('invoicedOn', $data) && $data['invoicedOn'] === null) {
            $object->setInvoicedOn(null);
        }
        if (\array_key_exists('subtotal', $data) && $data['subtotal'] !== null) {
            $object->setSubtotal($data['subtotal']);
        } elseif (\array_key_exists('subtotal', $data) && $data['subtotal'] === null) {
            $object->setSubtotal(null);
        }
        if (\array_key_exists('tax', $data) && $data['tax'] !== null) {
            $object->setTax($data['tax']);
        } elseif (\array_key_exists('tax', $data) && $data['tax'] === null) {
            $object->setTax(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
        } elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('royaltyStatus', $data) && $data['royaltyStatus'] !== null) {
            $object->setRoyaltyStatus($data['royaltyStatus']);
        } elseif (\array_key_exists('royaltyStatus', $data) && $data['royaltyStatus'] === null) {
            $object->setRoyaltyStatus(null);
        }
        if (\array_key_exists('royaltyDate', $data) && $data['royaltyDate'] !== null) {
            $object->setRoyaltyDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['royaltyDate']));
        } elseif (\array_key_exists('royaltyDate', $data) && $data['royaltyDate'] === null) {
            $object->setRoyaltyDate(null);
        }
        if (\array_key_exists('royaltySentOn', $data) && $data['royaltySentOn'] !== null) {
            $object->setRoyaltySentOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['royaltySentOn']));
        } elseif (\array_key_exists('royaltySentOn', $data) && $data['royaltySentOn'] === null) {
            $object->setRoyaltySentOn(null);
        }
        if (\array_key_exists('royaltyMemo', $data) && $data['royaltyMemo'] !== null) {
            $object->setRoyaltyMemo($data['royaltyMemo']);
        } elseif (\array_key_exists('royaltyMemo', $data) && $data['royaltyMemo'] === null) {
            $object->setRoyaltyMemo(null);
        }
        if (\array_key_exists('exportId', $data) && $data['exportId'] !== null) {
            $object->setExportId($data['exportId']);
        } elseif (\array_key_exists('exportId', $data) && $data['exportId'] === null) {
            $object->setExportId(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CompWright\\ServiceTitan\\Model\\AccountingV2InvoiceItemUpdateRequest', 'json', $context);
            }
            $object->setItems($values);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('payments', $data) && $data['payments'] !== null) {
            $values_1 = [];
            foreach ($data['payments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CompWright\\ServiceTitan\\Model\\AccountingV2PaymentSettlementUpdateRequest', 'json', $context);
            }
            $object->setPayments($values_1);
        } elseif (\array_key_exists('payments', $data) && $data['payments'] === null) {
            $object->setPayments(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getTypeId()) {
            $data['typeId'] = $object->getTypeId();
        }
        if (null !== $object->getInvoicedOn()) {
            $data['invoicedOn'] = $object->getInvoicedOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getSubtotal()) {
            $data['subtotal'] = $object->getSubtotal();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getRoyaltyStatus()) {
            $data['royaltyStatus'] = $object->getRoyaltyStatus();
        }
        if (null !== $object->getRoyaltyDate()) {
            $data['royaltyDate'] = $object->getRoyaltyDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRoyaltySentOn()) {
            $data['royaltySentOn'] = $object->getRoyaltySentOn()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRoyaltyMemo()) {
            $data['royaltyMemo'] = $object->getRoyaltyMemo();
        }
        if (null !== $object->getExportId()) {
            $data['exportId'] = $object->getExportId();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getPayments()) {
            $values_1 = [];
            foreach ($object->getPayments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['payments'] = $values_1;
        }

        return $data;
    }
}
