<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2SkuVendorRequest
{
    /**
     * @var int
     */
    protected $vendorId;
    /**
     * @var string|null
     */
    protected $memo;
    /**
     * @var string|null
     */
    protected $vendorPart;
    /**
     * @var float
     */
    protected $cost;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var mixed|null
     */
    protected $primarySubAccount;
    /**
     * @var PricebookV2SkuVendorSubAccountRequest[]|null
     */
    protected $otherSubAccounts;

    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    public function setVendorId(int $vendorId): self
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    public function getMemo(): ?string
    {
        return $this->memo;
    }

    public function setMemo(?string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    public function getVendorPart(): ?string
    {
        return $this->vendorPart;
    }

    public function setVendorPart(?string $vendorPart): self
    {
        $this->vendorPart = $vendorPart;

        return $this;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function setCost(float $cost): self
    {
        $this->cost = $cost;

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

    /**
     * @return mixed
     */
    public function getPrimarySubAccount()
    {
        return $this->primarySubAccount;
    }

    /**
     * @param mixed $primarySubAccount
     */
    public function setPrimarySubAccount($primarySubAccount): self
    {
        $this->primarySubAccount = $primarySubAccount;

        return $this;
    }

    /**
     * @return PricebookV2SkuVendorSubAccountRequest[]|null
     */
    public function getOtherSubAccounts(): ?array
    {
        return $this->otherSubAccounts;
    }

    /**
     * @param PricebookV2SkuVendorSubAccountRequest[]|null $otherSubAccounts
     */
    public function setOtherSubAccounts(?array $otherSubAccounts): self
    {
        $this->otherSubAccounts = $otherSubAccounts;

        return $this;
    }
}
