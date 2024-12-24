<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2ServiceUpdateRequest
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
     * Description of the warranty included in this SKU.
     */
    protected $warranty;
    /**
     * Categories that this SKU belongs to.
     *
     * @var list<int>
     */
    protected $categories;
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
     * Is this SKU taxable.
     *
     * @var bool
     */
    protected $taxable;
    /**
     * The accounting account assigned to this SKU.
     *
     * @var string
     */
    protected $account;
    /**
     * Hours needed to complete this service.
     *
     * @var float
     */
    protected $hours;
    /**
     * Is a labor service.
     *
     * @var bool
     */
    protected $isLabor;
    /**
     * Recommended other services to include with this SKU.
     *
     * @var list<int>
     */
    protected $recommendations;
    /**
     * Upgrades that can be sold for this SKU.
     *
     * @var list<int>
     */
    protected $upgrades;
    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @var list<PricebookV2SkuAssetRequest>
     */
    protected $assets;
    /**
     * Array of materials linked to the service.
     *
     * @var list<PricebookV2SkuLinkRequest>
     */
    protected $serviceMaterials;
    /**
     * Array of equipment linked to the service.
     *
     * @var list<PricebookV2SkuLinkRequest>
     */
    protected $serviceEquipment;
    /**
     * Active shows if the SKU is active or inactive.
     *
     * @var bool
     */
    protected $active;
    /**
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     *
     * @var string
     */
    protected $crossSaleGroup;
    /**
     * PaysCommissions shows if this task pays commission.
     *
     * @var bool
     */
    protected $paysCommission;
    /**
     * Flat rate bonus paid for this task.
     *
     * @var float
     */
    protected $commissionBonus;
    /**
     * External data update model.
     *
     * @var mixed|null
     */
    protected $externalData;

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
     * Description of the warranty included in this SKU.
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Description of the warranty included in this SKU.
     */
    public function setWarranty($warranty): self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;

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

    /**
     * Hours needed to complete this service.
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     * Hours needed to complete this service.
     */
    public function setHours(float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    /**
     * Is a labor service.
     */
    public function getIsLabor(): bool
    {
        return $this->isLabor;
    }

    /**
     * Is a labor service.
     */
    public function setIsLabor(bool $isLabor): self
    {
        $this->initialized['isLabor'] = true;
        $this->isLabor = $isLabor;

        return $this;
    }

    /**
     * Recommended other services to include with this SKU.
     *
     * @return list<int>
     */
    public function getRecommendations(): array
    {
        return $this->recommendations;
    }

    /**
     * Recommended other services to include with this SKU.
     *
     * @param list<int> $recommendations
     */
    public function setRecommendations(array $recommendations): self
    {
        $this->initialized['recommendations'] = true;
        $this->recommendations = $recommendations;

        return $this;
    }

    /**
     * Upgrades that can be sold for this SKU.
     *
     * @return list<int>
     */
    public function getUpgrades(): array
    {
        return $this->upgrades;
    }

    /**
     * Upgrades that can be sold for this SKU.
     *
     * @param list<int> $upgrades
     */
    public function setUpgrades(array $upgrades): self
    {
        $this->initialized['upgrades'] = true;
        $this->upgrades = $upgrades;

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
     * Array of materials linked to the service.
     *
     * @return list<PricebookV2SkuLinkRequest>
     */
    public function getServiceMaterials(): array
    {
        return $this->serviceMaterials;
    }

    /**
     * Array of materials linked to the service.
     *
     * @param list<PricebookV2SkuLinkRequest> $serviceMaterials
     */
    public function setServiceMaterials(array $serviceMaterials): self
    {
        $this->initialized['serviceMaterials'] = true;
        $this->serviceMaterials = $serviceMaterials;

        return $this;
    }

    /**
     * Array of equipment linked to the service.
     *
     * @return list<PricebookV2SkuLinkRequest>
     */
    public function getServiceEquipment(): array
    {
        return $this->serviceEquipment;
    }

    /**
     * Array of equipment linked to the service.
     *
     * @param list<PricebookV2SkuLinkRequest> $serviceEquipment
     */
    public function setServiceEquipment(array $serviceEquipment): self
    {
        $this->initialized['serviceEquipment'] = true;
        $this->serviceEquipment = $serviceEquipment;

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
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     */
    public function getCrossSaleGroup(): string
    {
        return $this->crossSaleGroup;
    }

    /**
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     */
    public function setCrossSaleGroup(string $crossSaleGroup): self
    {
        $this->initialized['crossSaleGroup'] = true;
        $this->crossSaleGroup = $crossSaleGroup;

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
}
