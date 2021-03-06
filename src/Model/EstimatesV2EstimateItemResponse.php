<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class EstimatesV2EstimateItemResponse
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var EstimatesV2SkuModel
     */
    protected $sku;
    /**
     * @var string
     */
    protected $skuAccount;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var float
     */
    protected $qty;
    /**
     * @var float
     */
    protected $unitRate;
    /**
     * @var float
     */
    protected $total;
    /**
     * @var string
     */
    protected $itemGroupName;
    /**
     * @var int|null
     */
    protected $itemGroupRootId;
    /**
     * @var \DateTime
     */
    protected $modifiedOn;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSku(): EstimatesV2SkuModel
    {
        return $this->sku;
    }

    public function setSku(EstimatesV2SkuModel $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getSkuAccount(): string
    {
        return $this->skuAccount;
    }

    public function setSkuAccount(string $skuAccount): self
    {
        $this->skuAccount = $skuAccount;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQty(): float
    {
        return $this->qty;
    }

    public function setQty(float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getUnitRate(): float
    {
        return $this->unitRate;
    }

    public function setUnitRate(float $unitRate): self
    {
        $this->unitRate = $unitRate;

        return $this;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getItemGroupName(): string
    {
        return $this->itemGroupName;
    }

    public function setItemGroupName(string $itemGroupName): self
    {
        $this->itemGroupName = $itemGroupName;

        return $this;
    }

    public function getItemGroupRootId(): ?int
    {
        return $this->itemGroupRootId;
    }

    public function setItemGroupRootId(?int $itemGroupRootId): self
    {
        $this->itemGroupRootId = $itemGroupRootId;

        return $this;
    }

    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }
}
