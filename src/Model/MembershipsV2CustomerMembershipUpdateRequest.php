<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MembershipsV2CustomerMembershipUpdateRequest
{
    /**
     * ID of the Business Unit associated to this membership.
     *
     * @var int
     */
    protected $businessUnitId;
    /**
     * Next date that this membership will be billed on.
     *
     * @var \DateTime|null
     */
    protected $nextScheduledBillDate;
    /**
     * Status of the membership.
     *
     * @var mixed
     */
    protected $status;
    /**
     * Memo text field.
     *
     * @var string
     */
    protected $memo;
    /**
     * The starting date of this membership.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * The end date of this membership (null if ongoing).
     *
     * @var \DateTime|null
     */
    protected $to;
    /**
     * ID of the user that was credited for the sale of this membership.
     *
     * @var int|null
     */
    protected $soldById;
    /**
     * The ID of the invoice template used to bill this membership.
     *
     * @var int|null
     */
    protected $billingTemplateId;
    /**
     * Discount location ID of this membership (null if all locations).
     *
     * @var int|null
     */
    protected $locationId;
    /**
     * Required if RecurringLocationId is set.
     *
     * @var mixed
     */
    protected $recurringServiceAction;
    /**
     * The location at which recurring services are scheduled (null if all locations).
     *
     * @var int|null
     */
    protected $recurringLocationId;
    /**
     * The ID of the payment method (credit card or bank account) that should be used for this membership. This.
     *
     * @var int|null
     */
    protected $paymentMethodId;
    /**
     * The payment type (cash, check, etc) that should be used for this membership. This field is mutually.
     *
     * @var int|null
     */
    protected $paymentTypeId;
    /**
     * The ID of the service that will be used as the default to renew this membership.
     *
     * @var int
     */
    protected $renewalMembershipTaskId;
    /**
     * The amount of deferred revenue that this membership should start with that is not accounted for.
     *
     * @var float
     */
    protected $initialDeferredRevenue;
    /**
     * The ID of the invoice created upon membership cancellation in order to zero out the deferred revenue balance.
     *
     * @var int|null
     */
    protected $cancellationBalanceInvoiceId;
    /**
     * The ID of the invoice optionally created upon membership cancellation in order to charge (or refund) the.
     *
     * @var int|null
     */
    protected $cancellationInvoiceId;

    /**
     * ID of the Business Unit associated to this membership.
     */
    public function getBusinessUnitId(): int
    {
        return $this->businessUnitId;
    }

    /**
     * ID of the Business Unit associated to this membership.
     */
    public function setBusinessUnitId(int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Next date that this membership will be billed on.
     */
    public function getNextScheduledBillDate(): ?\DateTime
    {
        return $this->nextScheduledBillDate;
    }

    /**
     * Next date that this membership will be billed on.
     */
    public function setNextScheduledBillDate(?\DateTime $nextScheduledBillDate): self
    {
        $this->nextScheduledBillDate = $nextScheduledBillDate;

        return $this;
    }

    /**
     * Status of the membership.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the membership.
     *
     * @param mixed $status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Memo text field.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Memo text field.
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * The starting date of this membership.
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * The starting date of this membership.
     */
    public function setFrom(\DateTime $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * The end date of this membership (null if ongoing).
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * The end date of this membership (null if ongoing).
     */
    public function setTo(?\DateTime $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * ID of the user that was credited for the sale of this membership.
     */
    public function getSoldById(): ?int
    {
        return $this->soldById;
    }

    /**
     * ID of the user that was credited for the sale of this membership.
     */
    public function setSoldById(?int $soldById): self
    {
        $this->soldById = $soldById;

        return $this;
    }

    /**
     * The ID of the invoice template used to bill this membership.
    or be a new invoice template created specifically for this customer membership.
     */
    public function getBillingTemplateId(): ?int
    {
        return $this->billingTemplateId;
    }

    /**
     * The ID of the invoice template used to bill this membership.
    or be a new invoice template created specifically for this customer membership.
     */
    public function setBillingTemplateId(?int $billingTemplateId): self
    {
        $this->billingTemplateId = $billingTemplateId;

        return $this;
    }

    /**
     * Discount location ID of this membership (null if all locations).
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    /**
     * Discount location ID of this membership (null if all locations).
     */
    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Required if RecurringLocationId is set.
     *
     * @return mixed
     */
    public function getRecurringServiceAction()
    {
        return $this->recurringServiceAction;
    }

    /**
     * Required if RecurringLocationId is set.
     *
     * @param mixed $recurringServiceAction
     */
    public function setRecurringServiceAction($recurringServiceAction): self
    {
        $this->recurringServiceAction = $recurringServiceAction;

        return $this;
    }

    /**
     * The location at which recurring services are scheduled (null if all locations).
     */
    public function getRecurringLocationId(): ?int
    {
        return $this->recurringLocationId;
    }

    /**
     * The location at which recurring services are scheduled (null if all locations).
     */
    public function setRecurringLocationId(?int $recurringLocationId): self
    {
        $this->recurringLocationId = $recurringLocationId;

        return $this;
    }

    /**
     * The ID of the payment method (credit card or bank account) that should be used for this membership. This.
    field is mutually exclusive with payment type. Only one or the other can be set at a time.
     */
    public function getPaymentMethodId(): ?int
    {
        return $this->paymentMethodId;
    }

    /**
     * The ID of the payment method (credit card or bank account) that should be used for this membership. This.
    field is mutually exclusive with payment type. Only one or the other can be set at a time.
     */
    public function setPaymentMethodId(?int $paymentMethodId): self
    {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * The payment type (cash, check, etc) that should be used for this membership. This field is mutually.
    not automatically use a payment method to bill the membership and payment will have to be collected manually.
     */
    public function getPaymentTypeId(): ?int
    {
        return $this->paymentTypeId;
    }

    /**
     * The payment type (cash, check, etc) that should be used for this membership. This field is mutually.
    not automatically use a payment method to bill the membership and payment will have to be collected manually.
     */
    public function setPaymentTypeId(?int $paymentTypeId): self
    {
        $this->paymentTypeId = $paymentTypeId;

        return $this;
    }

    /**
     * The ID of the service that will be used as the default to renew this membership.
     */
    public function getRenewalMembershipTaskId(): int
    {
        return $this->renewalMembershipTaskId;
    }

    /**
     * The ID of the service that will be used as the default to renew this membership.
     */
    public function setRenewalMembershipTaskId(int $renewalMembershipTaskId): self
    {
        $this->renewalMembershipTaskId = $renewalMembershipTaskId;

        return $this;
    }

    /**
     * The amount of deferred revenue that this membership should start with that is not accounted for.
    in the sale task.
     */
    public function getInitialDeferredRevenue(): float
    {
        return $this->initialDeferredRevenue;
    }

    /**
     * The amount of deferred revenue that this membership should start with that is not accounted for.
    in the sale task.
     */
    public function setInitialDeferredRevenue(float $initialDeferredRevenue): self
    {
        $this->initialDeferredRevenue = $initialDeferredRevenue;

        return $this;
    }

    /**
     * The ID of the invoice created upon membership cancellation in order to zero out the deferred revenue balance.
     */
    public function getCancellationBalanceInvoiceId(): ?int
    {
        return $this->cancellationBalanceInvoiceId;
    }

    /**
     * The ID of the invoice created upon membership cancellation in order to zero out the deferred revenue balance.
     */
    public function setCancellationBalanceInvoiceId(?int $cancellationBalanceInvoiceId): self
    {
        $this->cancellationBalanceInvoiceId = $cancellationBalanceInvoiceId;

        return $this;
    }

    /**
     * The ID of the invoice optionally created upon membership cancellation in order to charge (or refund) the.
    customer if deferred revenue balance is not 0.
     */
    public function getCancellationInvoiceId(): ?int
    {
        return $this->cancellationInvoiceId;
    }

    /**
     * The ID of the invoice optionally created upon membership cancellation in order to charge (or refund) the.
    customer if deferred revenue balance is not 0.
     */
    public function setCancellationInvoiceId(?int $cancellationInvoiceId): self
    {
        $this->cancellationInvoiceId = $cancellationInvoiceId;

        return $this;
    }
}
