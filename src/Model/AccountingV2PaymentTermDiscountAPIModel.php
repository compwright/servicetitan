<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2PaymentTermDiscountAPIModel
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var mixed|null
     */
    protected $discountApplyTo;
    /**
     * @var float|null
     */
    protected $discount;
    /**
     * @var mixed|null
     */
    protected $discountType;
    /**
     * @var string|null
     */
    protected $account;
    /**
     * @var mixed|null
     */
    protected $applyBy;
    /**
     * @var int|null
     */
    protected $applyByValue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountApplyTo()
    {
        return $this->discountApplyTo;
    }

    /**
     * @param mixed $discountApplyTo
     */
    public function setDiscountApplyTo($discountApplyTo): self
    {
        $this->discountApplyTo = $discountApplyTo;

        return $this;
    }

    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @param mixed $discountType
     */
    public function setDiscountType($discountType): self
    {
        $this->discountType = $discountType;

        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApplyBy()
    {
        return $this->applyBy;
    }

    /**
     * @param mixed $applyBy
     */
    public function setApplyBy($applyBy): self
    {
        $this->applyBy = $applyBy;

        return $this;
    }

    public function getApplyByValue(): ?int
    {
        return $this->applyByValue;
    }

    public function setApplyByValue(?int $applyByValue): self
    {
        $this->applyByValue = $applyByValue;

        return $this;
    }
}
