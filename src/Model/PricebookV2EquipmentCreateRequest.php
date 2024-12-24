<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2EquipmentCreateRequest
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
     * Array of materials used with this equipment.
     *
     * @var list<PricebookV2SkuLinkRequest>|null
     */
    protected $equipmentMaterials;
    /**
     * Recommended services and materials to include with this SKU.
     *
     * @var list<PricebookV2EquipmentRecommendationRequest>|null
     */
    protected $recommendations;
    /**
     * Upgrades that can be sold for this SKU.
     *
     * @var list<int>|null
     */
    protected $upgrades;
    /**
     * Code for the SKU.
     *
     * @var string
     */
    protected $code;
    /**
     * Name that displays with the SKU.
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * Description on the SKU that is displayed with the item.
     *
     * @var string
     */
    protected $description;
    /**
     * Price of this SKU sold.
     *
     * @var float|null
     */
    protected $price;
    /**
     * The price if the item is sold to a member.
     *
     * @var float|null
     */
    protected $memberPrice;
    /**
     * The price of the SKU is sold as an add-on item.
     *
     * @var float|null
     */
    protected $addOnPrice;
    /**
     * The price if the SKU is sold to a member as an add-on item.
     *
     * @var float|null
     */
    protected $addOnMemberPrice;
    /**
     * Active shows if the SKU is active or inactive.
     *
     * @var bool|null
     */
    protected $active;
    /**
     * Name of the manufactures.
     *
     * @var string|null
     */
    protected $manufacturer;
    /**
     * The model of the equipment.
     *
     * @var string|null
     */
    protected $model;
    /**
     * Description of the manufacturer warranty included in this SKU.
     *
     * @var mixed|null
     */
    protected $manufacturerWarranty;
    /**
     * Description of the manufacturer warranty included in this SKU.
     *
     * @var mixed|null
     */
    protected $serviceProviderWarranty;
    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @var list<PricebookV2SkuAssetRequest>|null
     */
    protected $assets;
    /**
     * Categories that this SKU belongs to.
     *
     * @var list<int>|null
     */
    protected $categories;
    /**
     * The primary vendor you use to acquire this SKU.
     *
     * @var mixed|null
     */
    protected $primaryVendor;
    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @var list<PricebookV2SkuVendorRequest>|null
     */
    protected $otherVendors;
    /**
     * The accounting account assigned to this SKU.
     *
     * @var string|null
     */
    protected $account;
    /**
     * @var string|null
     */
    protected $costOfSaleAccount;
    /**
     * @var string|null
     */
    protected $assetAccount;
    /**
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     *
     * @var string|null
     */
    protected $crossSaleGroup;
    /**
     * PaysCommissions shows if this task pays commission.
     *
     * @var bool|null
     */
    protected $paysCommission;
    /**
     * Flat rate bonus paid for this task.
     *
     * @var float|null
     */
    protected $commissionBonus;
    /**
     * The number of hours associated with the installing the equipment.
     *
     * @var float|null
     */
    protected $hours;
    /**
     * Is this SKU taxable.
     *
     * @var bool|null
     */
    protected $taxable;
    /**
     * The cost paid to acquire the material.
     *
     * @var float|null
     */
    protected $cost;
    /**
     * The unit of measure used for this SKU.
     *
     * @var string|null
     */
    protected $unitOfMeasure;
    /**
     * Is this equipment a part of your inventory.
     *
     * @var bool|null
     */
    protected $isInventory;
    /**
     * Optional model that contains a list of external data items
     * that should be attached to this entity.
     *
     * @var mixed|null
     */
    protected $externalData;

    /**
     * Array of materials used with this equipment.
     *
     * @return list<PricebookV2SkuLinkRequest>|null
     */
    public function getEquipmentMaterials(): ?array
    {
        return $this->equipmentMaterials;
    }

    /**
     * Array of materials used with this equipment.
     *
     * @param list<PricebookV2SkuLinkRequest>|null $equipmentMaterials
     */
    public function setEquipmentMaterials(?array $equipmentMaterials): self
    {
        $this->initialized['equipmentMaterials'] = true;
        $this->equipmentMaterials = $equipmentMaterials;

        return $this;
    }

    /**
     * Recommended services and materials to include with this SKU.
     *
     * @return list<PricebookV2EquipmentRecommendationRequest>|null
     */
    public function getRecommendations(): ?array
    {
        return $this->recommendations;
    }

    /**
     * Recommended services and materials to include with this SKU.
     *
     * @param list<PricebookV2EquipmentRecommendationRequest>|null $recommendations
     */
    public function setRecommendations(?array $recommendations): self
    {
        $this->initialized['recommendations'] = true;
        $this->recommendations = $recommendations;

        return $this;
    }

    /**
     * Upgrades that can be sold for this SKU.
     *
     * @return list<int>|null
     */
    public function getUpgrades(): ?array
    {
        return $this->upgrades;
    }

    /**
     * Upgrades that can be sold for this SKU.
     *
     * @param list<int>|null $upgrades
     */
    public function setUpgrades(?array $upgrades): self
    {
        $this->initialized['upgrades'] = true;
        $this->upgrades = $upgrades;

        return $this;
    }

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
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * Name that displays with the SKU.
     */
    public function setDisplayName(?string $displayName): self
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
     * Price of this SKU sold.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Price of this SKU sold.
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * The price if the item is sold to a member.
     */
    public function getMemberPrice(): ?float
    {
        return $this->memberPrice;
    }

    /**
     * The price if the item is sold to a member.
     */
    public function setMemberPrice(?float $memberPrice): self
    {
        $this->initialized['memberPrice'] = true;
        $this->memberPrice = $memberPrice;

        return $this;
    }

    /**
     * The price of the SKU is sold as an add-on item.
     */
    public function getAddOnPrice(): ?float
    {
        return $this->addOnPrice;
    }

    /**
     * The price of the SKU is sold as an add-on item.
     */
    public function setAddOnPrice(?float $addOnPrice): self
    {
        $this->initialized['addOnPrice'] = true;
        $this->addOnPrice = $addOnPrice;

        return $this;
    }

    /**
     * The price if the SKU is sold to a member as an add-on item.
     */
    public function getAddOnMemberPrice(): ?float
    {
        return $this->addOnMemberPrice;
    }

    /**
     * The price if the SKU is sold to a member as an add-on item.
     */
    public function setAddOnMemberPrice(?float $addOnMemberPrice): self
    {
        $this->initialized['addOnMemberPrice'] = true;
        $this->addOnMemberPrice = $addOnMemberPrice;

        return $this;
    }

    /**
     * Active shows if the SKU is active or inactive.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Active shows if the SKU is active or inactive.
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * Name of the manufactures.
     */
    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    /**
     * Name of the manufactures.
     */
    public function setManufacturer(?string $manufacturer): self
    {
        $this->initialized['manufacturer'] = true;
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * The model of the equipment.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * The model of the equipment.
     */
    public function setModel(?string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;

        return $this;
    }

    /**
     * Description of the manufacturer warranty included in this SKU.
     */
    public function getManufacturerWarranty()
    {
        return $this->manufacturerWarranty;
    }

    /**
     * Description of the manufacturer warranty included in this SKU.
     */
    public function setManufacturerWarranty($manufacturerWarranty): self
    {
        $this->initialized['manufacturerWarranty'] = true;
        $this->manufacturerWarranty = $manufacturerWarranty;

        return $this;
    }

    /**
     * Description of the manufacturer warranty included in this SKU.
     */
    public function getServiceProviderWarranty()
    {
        return $this->serviceProviderWarranty;
    }

    /**
     * Description of the manufacturer warranty included in this SKU.
     */
    public function setServiceProviderWarranty($serviceProviderWarranty): self
    {
        $this->initialized['serviceProviderWarranty'] = true;
        $this->serviceProviderWarranty = $serviceProviderWarranty;

        return $this;
    }

    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @return list<PricebookV2SkuAssetRequest>|null
     */
    public function getAssets(): ?array
    {
        return $this->assets;
    }

    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @param list<PricebookV2SkuAssetRequest>|null $assets
     */
    public function setAssets(?array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;

        return $this;
    }

    /**
     * Categories that this SKU belongs to.
     *
     * @return list<int>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * Categories that this SKU belongs to.
     *
     * @param list<int>|null $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

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
     * @return list<PricebookV2SkuVendorRequest>|null
     */
    public function getOtherVendors(): ?array
    {
        return $this->otherVendors;
    }

    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @param list<PricebookV2SkuVendorRequest>|null $otherVendors
     */
    public function setOtherVendors(?array $otherVendors): self
    {
        $this->initialized['otherVendors'] = true;
        $this->otherVendors = $otherVendors;

        return $this;
    }

    /**
     * The accounting account assigned to this SKU.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * The accounting account assigned to this SKU.
     */
    public function setAccount(?string $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;

        return $this;
    }

    public function getCostOfSaleAccount(): ?string
    {
        return $this->costOfSaleAccount;
    }

    public function setCostOfSaleAccount(?string $costOfSaleAccount): self
    {
        $this->initialized['costOfSaleAccount'] = true;
        $this->costOfSaleAccount = $costOfSaleAccount;

        return $this;
    }

    public function getAssetAccount(): ?string
    {
        return $this->assetAccount;
    }

    public function setAssetAccount(?string $assetAccount): self
    {
        $this->initialized['assetAccount'] = true;
        $this->assetAccount = $assetAccount;

        return $this;
    }

    /**
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     */
    public function getCrossSaleGroup(): ?string
    {
        return $this->crossSaleGroup;
    }

    /**
     * A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     */
    public function setCrossSaleGroup(?string $crossSaleGroup): self
    {
        $this->initialized['crossSaleGroup'] = true;
        $this->crossSaleGroup = $crossSaleGroup;

        return $this;
    }

    /**
     * PaysCommissions shows if this task pays commission.
     */
    public function getPaysCommission(): ?bool
    {
        return $this->paysCommission;
    }

    /**
     * PaysCommissions shows if this task pays commission.
     */
    public function setPaysCommission(?bool $paysCommission): self
    {
        $this->initialized['paysCommission'] = true;
        $this->paysCommission = $paysCommission;

        return $this;
    }

    /**
     * Flat rate bonus paid for this task.
     */
    public function getCommissionBonus(): ?float
    {
        return $this->commissionBonus;
    }

    /**
     * Flat rate bonus paid for this task.
     */
    public function setCommissionBonus(?float $commissionBonus): self
    {
        $this->initialized['commissionBonus'] = true;
        $this->commissionBonus = $commissionBonus;

        return $this;
    }

    /**
     * The number of hours associated with the installing the equipment.
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * The number of hours associated with the installing the equipment.
     */
    public function setHours(?float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    /**
     * Is this SKU taxable.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Is this SKU taxable.
     */
    public function setTaxable(?bool $taxable): self
    {
        $this->initialized['taxable'] = true;
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * The cost paid to acquire the material.
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * The cost paid to acquire the material.
     */
    public function setCost(?float $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;

        return $this;
    }

    /**
     * The unit of measure used for this SKU.
     */
    public function getUnitOfMeasure(): ?string
    {
        return $this->unitOfMeasure;
    }

    /**
     * The unit of measure used for this SKU.
     */
    public function setUnitOfMeasure(?string $unitOfMeasure): self
    {
        $this->initialized['unitOfMeasure'] = true;
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Is this equipment a part of your inventory.
     */
    public function getIsInventory(): ?bool
    {
        return $this->isInventory;
    }

    /**
     * Is this equipment a part of your inventory.
     */
    public function setIsInventory(?bool $isInventory): self
    {
        $this->initialized['isInventory'] = true;
        $this->isInventory = $isInventory;

        return $this;
    }

    /**
     * Optional model that contains a list of external data items
     * that should be attached to this entity.
     */
    public function getExternalData()
    {
        return $this->externalData;
    }

    /**
     * Optional model that contains a list of external data items
     * that should be attached to this entity.
     */
    public function setExternalData($externalData): self
    {
        $this->initialized['externalData'] = true;
        $this->externalData = $externalData;

        return $this;
    }
}
