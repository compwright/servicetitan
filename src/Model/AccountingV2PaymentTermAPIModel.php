<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2PaymentTermAPIModel
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string
     */
    protected $dueDayType;
    /**
     * @var int|null
     */
    protected $dueDay;
    /**
     * @var bool
     */
    protected $isCustomerDefault;
    /**
     * @var bool
     */
    protected $isVendorDefault;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var bool|null
     */
    protected $inUse;
    /**
     * @var AccountingV2PaymentTermPenaltyAPIModel
     */
    protected $paymentTermPenaltyModel;
    /**
     * @var AccountingV2PaymentTermDiscountAPIModel
     */
    protected $paymentTermDiscountModel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDueDayType(): string
    {
        return $this->dueDayType;
    }

    public function setDueDayType(string $dueDayType): self
    {
        $this->dueDayType = $dueDayType;

        return $this;
    }

    public function getDueDay(): ?int
    {
        return $this->dueDay;
    }

    public function setDueDay(?int $dueDay): self
    {
        $this->dueDay = $dueDay;

        return $this;
    }

    public function getIsCustomerDefault(): bool
    {
        return $this->isCustomerDefault;
    }

    public function setIsCustomerDefault(bool $isCustomerDefault): self
    {
        $this->isCustomerDefault = $isCustomerDefault;

        return $this;
    }

    public function getIsVendorDefault(): bool
    {
        return $this->isVendorDefault;
    }

    public function setIsVendorDefault(bool $isVendorDefault): self
    {
        $this->isVendorDefault = $isVendorDefault;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getInUse(): ?bool
    {
        return $this->inUse;
    }

    public function setInUse(?bool $inUse): self
    {
        $this->inUse = $inUse;

        return $this;
    }

    public function getPaymentTermPenaltyModel(): AccountingV2PaymentTermPenaltyAPIModel
    {
        return $this->paymentTermPenaltyModel;
    }

    public function setPaymentTermPenaltyModel(AccountingV2PaymentTermPenaltyAPIModel $paymentTermPenaltyModel): self
    {
        $this->paymentTermPenaltyModel = $paymentTermPenaltyModel;

        return $this;
    }

    public function getPaymentTermDiscountModel(): AccountingV2PaymentTermDiscountAPIModel
    {
        return $this->paymentTermDiscountModel;
    }

    public function setPaymentTermDiscountModel(AccountingV2PaymentTermDiscountAPIModel $paymentTermDiscountModel): self
    {
        $this->paymentTermDiscountModel = $paymentTermDiscountModel;

        return $this;
    }
}
