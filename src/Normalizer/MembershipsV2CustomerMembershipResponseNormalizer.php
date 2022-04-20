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

class MembershipsV2CustomerMembershipResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CompWright\\ServiceTitan\\Model\\MembershipsV2CustomerMembershipResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CompWright\\ServiceTitan\\Model\\MembershipsV2CustomerMembershipResponse';
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
        $object = new \CompWright\ServiceTitan\Model\MembershipsV2CustomerMembershipResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('followUpOn', $data)) {
            $object->setFollowUpOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['followUpOn']));
        }
        if (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] !== null) {
            $object->setCancellationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['cancellationDate']));
        } elseif (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] === null) {
            $object->setCancellationDate(null);
        }
        if (\array_key_exists('from', $data) && $data['from'] !== null) {
            $object->setFrom(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['from']));
        } elseif (\array_key_exists('from', $data) && $data['from'] === null) {
            $object->setFrom(null);
        }
        if (\array_key_exists('nextScheduledBillDate', $data) && $data['nextScheduledBillDate'] !== null) {
            $object->setNextScheduledBillDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['nextScheduledBillDate']));
        } elseif (\array_key_exists('nextScheduledBillDate', $data) && $data['nextScheduledBillDate'] === null) {
            $object->setNextScheduledBillDate(null);
        }
        if (\array_key_exists('to', $data) && $data['to'] !== null) {
            $object->setTo(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['to']));
        } elseif (\array_key_exists('to', $data) && $data['to'] === null) {
            $object->setTo(null);
        }
        if (\array_key_exists('billingFrequency', $data)) {
            $object->setBillingFrequency($data['billingFrequency']);
        }
        if (\array_key_exists('renewalBillingFrequency', $data) && $data['renewalBillingFrequency'] !== null) {
            $object->setRenewalBillingFrequency($data['renewalBillingFrequency']);
        } elseif (\array_key_exists('renewalBillingFrequency', $data) && $data['renewalBillingFrequency'] === null) {
            $object->setRenewalBillingFrequency(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('followUpStatus', $data)) {
            $object->setFollowUpStatus($data['followUpStatus']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('initialDeferredRevenue', $data)) {
            $object->setInitialDeferredRevenue($data['initialDeferredRevenue']);
        }
        if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
            $object->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
            $object->setDuration(null);
        }
        if (\array_key_exists('renewalDuration', $data) && $data['renewalDuration'] !== null) {
            $object->setRenewalDuration($data['renewalDuration']);
        } elseif (\array_key_exists('renewalDuration', $data) && $data['renewalDuration'] === null) {
            $object->setRenewalDuration(null);
        }
        if (\array_key_exists('businessUnitId', $data)) {
            $object->setBusinessUnitId($data['businessUnitId']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
        }
        if (\array_key_exists('membershipTypeId', $data)) {
            $object->setMembershipTypeId($data['membershipTypeId']);
        }
        if (\array_key_exists('activatedById', $data) && $data['activatedById'] !== null) {
            $object->setActivatedById($data['activatedById']);
        } elseif (\array_key_exists('activatedById', $data) && $data['activatedById'] === null) {
            $object->setActivatedById(null);
        }
        if (\array_key_exists('activatedFromId', $data) && $data['activatedFromId'] !== null) {
            $object->setActivatedFromId($data['activatedFromId']);
        } elseif (\array_key_exists('activatedFromId', $data) && $data['activatedFromId'] === null) {
            $object->setActivatedFromId(null);
        }
        if (\array_key_exists('billingTemplateId', $data) && $data['billingTemplateId'] !== null) {
            $object->setBillingTemplateId($data['billingTemplateId']);
        } elseif (\array_key_exists('billingTemplateId', $data) && $data['billingTemplateId'] === null) {
            $object->setBillingTemplateId(null);
        }
        if (\array_key_exists('cancellationBalanceInvoiceId', $data) && $data['cancellationBalanceInvoiceId'] !== null) {
            $object->setCancellationBalanceInvoiceId($data['cancellationBalanceInvoiceId']);
        } elseif (\array_key_exists('cancellationBalanceInvoiceId', $data) && $data['cancellationBalanceInvoiceId'] === null) {
            $object->setCancellationBalanceInvoiceId(null);
        }
        if (\array_key_exists('cancellationInvoiceId', $data) && $data['cancellationInvoiceId'] !== null) {
            $object->setCancellationInvoiceId($data['cancellationInvoiceId']);
        } elseif (\array_key_exists('cancellationInvoiceId', $data) && $data['cancellationInvoiceId'] === null) {
            $object->setCancellationInvoiceId(null);
        }
        if (\array_key_exists('followUpCustomStatusId', $data) && $data['followUpCustomStatusId'] !== null) {
            $object->setFollowUpCustomStatusId($data['followUpCustomStatusId']);
        } elseif (\array_key_exists('followUpCustomStatusId', $data) && $data['followUpCustomStatusId'] === null) {
            $object->setFollowUpCustomStatusId(null);
        }
        if (\array_key_exists('locationId', $data) && $data['locationId'] !== null) {
            $object->setLocationId($data['locationId']);
        } elseif (\array_key_exists('locationId', $data) && $data['locationId'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
        } elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('paymentTypeId', $data) && $data['paymentTypeId'] !== null) {
            $object->setPaymentTypeId($data['paymentTypeId']);
        } elseif (\array_key_exists('paymentTypeId', $data) && $data['paymentTypeId'] === null) {
            $object->setPaymentTypeId(null);
        }
        if (\array_key_exists('recurringLocationId', $data) && $data['recurringLocationId'] !== null) {
            $object->setRecurringLocationId($data['recurringLocationId']);
        } elseif (\array_key_exists('recurringLocationId', $data) && $data['recurringLocationId'] === null) {
            $object->setRecurringLocationId(null);
        }
        if (\array_key_exists('renewalMembershipTaskId', $data) && $data['renewalMembershipTaskId'] !== null) {
            $object->setRenewalMembershipTaskId($data['renewalMembershipTaskId']);
        } elseif (\array_key_exists('renewalMembershipTaskId', $data) && $data['renewalMembershipTaskId'] === null) {
            $object->setRenewalMembershipTaskId(null);
        }
        if (\array_key_exists('renewedById', $data) && $data['renewedById'] !== null) {
            $object->setRenewedById($data['renewedById']);
        } elseif (\array_key_exists('renewedById', $data) && $data['renewedById'] === null) {
            $object->setRenewedById(null);
        }
        if (\array_key_exists('soldById', $data) && $data['soldById'] !== null) {
            $object->setSoldById($data['soldById']);
        } elseif (\array_key_exists('soldById', $data) && $data['soldById'] === null) {
            $object->setSoldById(null);
        }
        if (\array_key_exists('customerPo', $data) && $data['customerPo'] !== null) {
            $object->setCustomerPo($data['customerPo']);
        } elseif (\array_key_exists('customerPo', $data) && $data['customerPo'] === null) {
            $object->setCustomerPo(null);
        }
        if (\array_key_exists('importId', $data) && $data['importId'] !== null) {
            $object->setImportId($data['importId']);
        } elseif (\array_key_exists('importId', $data) && $data['importId'] === null) {
            $object->setImportId(null);
        }
        if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
            $object->setMemo($data['memo']);
        } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
            $object->setMemo(null);
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
        $data['createdOn'] = $object->getCreatedOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getCreatedById()) {
            $data['createdById'] = $object->getCreatedById();
        }
        $data['modifiedOn'] = $object->getModifiedOn()->format('Y-m-d\\TH:i:sP');
        $data['followUpOn'] = $object->getFollowUpOn()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getCancellationDate()) {
            $data['cancellationDate'] = $object->getCancellationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getNextScheduledBillDate()) {
            $data['nextScheduledBillDate'] = $object->getNextScheduledBillDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getTo()) {
            $data['to'] = $object->getTo()->format('Y-m-d\\TH:i:sP');
        }
        $data['billingFrequency'] = $object->getBillingFrequency();
        if (null !== $object->getRenewalBillingFrequency()) {
            $data['renewalBillingFrequency'] = $object->getRenewalBillingFrequency();
        }
        $data['status'] = $object->getStatus();
        $data['followUpStatus'] = $object->getFollowUpStatus();
        $data['active'] = $object->getActive();
        $data['initialDeferredRevenue'] = $object->getInitialDeferredRevenue();
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getRenewalDuration()) {
            $data['renewalDuration'] = $object->getRenewalDuration();
        }
        $data['businessUnitId'] = $object->getBusinessUnitId();
        $data['customerId'] = $object->getCustomerId();
        $data['membershipTypeId'] = $object->getMembershipTypeId();
        if (null !== $object->getActivatedById()) {
            $data['activatedById'] = $object->getActivatedById();
        }
        if (null !== $object->getActivatedFromId()) {
            $data['activatedFromId'] = $object->getActivatedFromId();
        }
        if (null !== $object->getBillingTemplateId()) {
            $data['billingTemplateId'] = $object->getBillingTemplateId();
        }
        if (null !== $object->getCancellationBalanceInvoiceId()) {
            $data['cancellationBalanceInvoiceId'] = $object->getCancellationBalanceInvoiceId();
        }
        if (null !== $object->getCancellationInvoiceId()) {
            $data['cancellationInvoiceId'] = $object->getCancellationInvoiceId();
        }
        if (null !== $object->getFollowUpCustomStatusId()) {
            $data['followUpCustomStatusId'] = $object->getFollowUpCustomStatusId();
        }
        if (null !== $object->getLocationId()) {
            $data['locationId'] = $object->getLocationId();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data['paymentMethodId'] = $object->getPaymentMethodId();
        }
        if (null !== $object->getPaymentTypeId()) {
            $data['paymentTypeId'] = $object->getPaymentTypeId();
        }
        if (null !== $object->getRecurringLocationId()) {
            $data['recurringLocationId'] = $object->getRecurringLocationId();
        }
        if (null !== $object->getRenewalMembershipTaskId()) {
            $data['renewalMembershipTaskId'] = $object->getRenewalMembershipTaskId();
        }
        if (null !== $object->getRenewedById()) {
            $data['renewedById'] = $object->getRenewedById();
        }
        if (null !== $object->getSoldById()) {
            $data['soldById'] = $object->getSoldById();
        }
        if (null !== $object->getCustomerPo()) {
            $data['customerPo'] = $object->getCustomerPo();
        }
        if (null !== $object->getImportId()) {
            $data['importId'] = $object->getImportId();
        }
        if (null !== $object->getMemo()) {
            $data['memo'] = $object->getMemo();
        }

        return $data;
    }
}
