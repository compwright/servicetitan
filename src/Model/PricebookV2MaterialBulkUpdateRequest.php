<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2MaterialBulkUpdateRequest
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Code for the SKU.
     *
     * @var string
     */
    protected $code;
    /**
     * Name that displays with the SKU.
     *
     * @var string
     */
    protected $displayName;
    /**
     * Description on the SKU that is displayed with the item.
     *
     * @var string
     */
    protected $description;
    /**
     * The cost paid to acquire the material.
     *
     * @var float
     */
    protected $cost;
    /**
     * Active shows if the SKU is active or inactive.
     *
     * @var bool
     */
    protected $active;
    /**
     * Price of this SKU sold.
     *
     * @var float
     */
    protected $price;
    /**
     * The price if the item is sold to a member.
     *
     * @var float
     */
    protected $memberPrice;
    /**
     * The price of the SKU is sold as an add-on item.
     *
     * @var float
     */
    protected $addOnPrice;
    /**
     * The price if the SKU is sold to a member as an add-on item.
     *
     * @var float
     */
    protected $addOnMemberPrice;
    /**
     * The number of hours associated with the installing the material.
     *
     * @var float
     */
    protected $hours;
    /**
     * Flat rate bonus paid for this task.
     *
     * @var float
     */
    protected $commissionBonus;
    /**
     * PaysCommissions shows if this task pays commission.
     *
     * @var bool
     */
    protected $paysCommission;
    /**
     * Is this deducted as job cost.
     *
     * @var bool
     */
    protected $deductAsJobCost;
    /**
     * The unit of measure used for this SKU.
     *
     * @var string
     */
    protected $unitOfMeasure;
    /**
     * Is this material a part of your inventory.
     *
     * @var bool
     */
    protected $isInventory;
    /**
     * The accounting account assigned to this SKU.
     *
     * @var string
     */
    protected $account;
    /**
     * @var string
     */
    protected $costOfSaleAccount;
    /**
     * @var string
     */
    protected $assetAccount;
    /**
     * Is this SKU taxable.
     *
     * @var bool
     */
    protected $taxable;
    /**
     * The primary vendor you use to acquire this SKU.
     */
    protected $primaryVendor;
    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @var list<PricebookV2SkuVendorRequest>
     */
    protected $otherVendors;
    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @var list<PricebookV2SkuAssetRequest>
     */
    protected $assets;
    /**
     * Categories that this SKU belongs to.
     *
     * @var list<int>
     */
    protected $categories;
    /**
     * External data update model.
     *
     * @var mixed|null
     */
    protected $externalData;
    /**
     * @var int
     */
    protected $id;

    /**
     * Code for the SKU.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Code for the SKU.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Name that displays with the SKU.
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * Name that displays with the SKU.
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Description on the SKU that is displayed with the item.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Description on the SKU that is displayed with the item.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The cost paid to acquire the material.
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * The cost paid to acquire the material.
     */
    public function setCost(float $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;

        return $this;
    }

    /**
     * Active shows if the SKU is active or inactive.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Active shows if the SKU is active or inactive.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * Price of this SKU sold.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Price of this SKU sold.
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * The price if the item is sold to a member.
     */
    public function getMemberPrice(): float
    {
        return $this->memberPrice;
    }

    /**
     * The price if the item is sold to a member.
     */
    public function setMemberPrice(float $memberPrice): self
    {
        $this->initialized['memberPrice'] = true;
        $this->memberPrice = $memberPrice;

        return $this;
    }

    /**
     * The price of the SKU is sold as an add-on item.
     */
    public function getAddOnPrice(): float
    {
        return $this->addOnPrice;
    }

    /**
     * The price of the SKU is sold as an add-on item.
     */
    public function setAddOnPrice(float $addOnPrice): self
    {
        $this->initialized['addOnPrice'] = true;
        $this->addOnPrice = $addOnPrice;

        return $this;
    }

    /**
     * The price if the SKU is sold to a member as an add-on item.
     */
    public function getAddOnMemberPrice(): float
    {
        return $this->addOnMemberPrice;
    }

    /**
     * The price if the SKU is sold to a member as an add-on item.
     */
    public function setAddOnMemberPrice(float $addOnMemberPrice): self
    {
        $this->initialized['addOnMemberPrice'] = true;
        $this->addOnMemberPrice = $addOnMemberPrice;

        return $this;
    }

    /**
     * The number of hours associated with the installing the material.
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     * The number of hours associated with the installing the material.
     */
    public function setHours(float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    /**
     * Flat rate bonus paid for this task.
     */
    public function getCommissionBonus(): float
    {
        return $this->commissionBonus;
    }

    /**
     * Flat rate bonus paid for this task.
     */
    public function setCommissionBonus(float $commissionBonus): self
    {
        $this->initialized['commissionBonus'] = true;
        $this->commissionBonus = $commissionBonus;

        return $this;
    }

    /**
     * PaysCommissions shows if this task pays commission.
     */
    public function getPaysCommission(): bool
    {
        return $this->paysCommission;
    }

    /**
     * PaysCommissions shows if this task pays commission.
     */
    public function setPaysCommission(bool $paysCommission): self
    {
        $this->initialized['paysCommission'] = true;
        $this->paysCommission = $paysCommission;

        return $this;
    }

    /**
     * Is this deducted as job cost.
     */
    public function getDeductAsJobCost(): bool
    {
        return $this->deductAsJobCost;
    }

    /**
     * Is this deducted as job cost.
     */
    public function setDeductAsJobCost(bool $deductAsJobCost): self
    {
        $this->initialized['deductAsJobCost'] = true;
        $this->deductAsJobCost = $deductAsJobCost;

        return $this;
    }

    /**
     * The unit of measure used for this SKU.
     */
    public function getUnitOfMeasure(): string
    {
        return $this->unitOfMeasure;
    }

    /**
     * The unit of measure used for this SKU.
     */
    public function setUnitOfMeasure(string $unitOfMeasure): self
    {
        $this->initialized['unitOfMeasure'] = true;
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Is this material a part of your inventory.
     */
    public function getIsInventory(): bool
    {
        return $this->isInventory;
    }

    /**
     * Is this material a part of your inventory.
     */
    public function setIsInventory(bool $isInventory): self
    {
        $this->initialized['isInventory'] = true;
        $this->isInventory = $isInventory;

        return $this;
    }

    /**
     * The accounting account assigned to this SKU.
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * The accounting account assigned to this SKU.
     */
    public function setAccount(string $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;

        return $this;
    }

    public function getCostOfSaleAccount(): string
    {
        return $this->costOfSaleAccount;
    }

    public function setCostOfSaleAccount(string $costOfSaleAccount): self
    {
        $this->initialized['costOfSaleAccount'] = true;
        $this->costOfSaleAccount = $costOfSaleAccount;

        return $this;
    }

    public function getAssetAccount(): string
    {
        return $this->assetAccount;
    }

    public function setAssetAccount(string $assetAccount): self
    {
        $this->initialized['assetAccount'] = true;
        $this->assetAccount = $assetAccount;

        return $this;
    }

    /**
     * Is this SKU taxable.
     */
    public function getTaxable(): bool
    {
        return $this->taxable;
    }

    /**
     * Is this SKU taxable.
     */
    public function setTaxable(bool $taxable): self
    {
        $this->initialized['taxable'] = true;
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * The primary vendor you use to acquire this SKU.
     */
    public function getPrimaryVendor()
    {
        return $this->primaryVendor;
    }

    /**
     * The primary vendor you use to acquire this SKU.
     */
    public function setPrimaryVendor($primaryVendor): self
    {
        $this->initialized['primaryVendor'] = true;
        $this->primaryVendor = $primaryVendor;

        return $this;
    }

    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @return list<PricebookV2SkuVendorRequest>
     */
    public function getOtherVendors(): array
    {
        return $this->otherVendors;
    }

    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @param list<PricebookV2SkuVendorRequest> $otherVendors
     */
    public function setOtherVendors(array $otherVendors): self
    {
        $this->initialized['otherVendors'] = true;
        $this->otherVendors = $otherVendors;

        return $this;
    }

    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @return list<PricebookV2SkuAssetRequest>
     */
    public function getAssets(): array
    {
        return $this->assets;
    }

    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @param list<PricebookV2SkuAssetRequest> $assets
     */
    public function setAssets(array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;

        return $this;
    }

    /**
     * Categories that this SKU belongs to.
     *
     * @return list<int>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * Categories that this SKU belongs to.
     *
     * @param list<int> $categories
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }

    /**
     * External data update model.
     */
    public function getExternalData()
    {
        return $this->externalData;
    }

    /**
     * External data update model.
     */
    public function setExternalData($externalData): self
    {
        $this->initialized['externalData'] = true;
        $this->externalData = $externalData;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
