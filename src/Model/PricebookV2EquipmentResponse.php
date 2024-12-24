<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2EquipmentResponse
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
     * Unique id for the SKU.
     *
     * @var int
     */
    protected $id;
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
     */
    protected $manufacturerWarranty;
    /**
     * Description of the manufacturer warranty included in this SKU.
     */
    protected $serviceProviderWarranty;
    /**
     * Categories that this SKU belongs to.
     *
     * @var list<int>
     */
    protected $categories;
    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @var list<PricebookV2SkuAssetResponse>
     */
    protected $assets;
    /**
     * Recommended services and materials to include with this SKU.
     *
     * @var list<PricebookV2EquipmentRecommendationResponse>
     */
    protected $recommendations;
    /**
     * Upgrades that can be sold for this SKU.
     *
     * @var list<int>
     */
    protected $upgrades;
    /**
     * Array of materials used with this equipment.
     *
     * @var list<PricebookV2SkuLinkResponse>
     */
    protected $equipmentMaterials;
    /**
     * The primary vendor you use to acquire this SKU.
     *
     * @var mixed|null
     */
    protected $primaryVendor;
    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @var list<PricebookV2SkuVendorResponse>|null
     */
    protected $otherVendors;
    /**
     * The accounting account assigned to the SKU.
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
     * The number of hours associated with the installing the equipment.
     *
     * @var float
     */
    protected $hours;
    /**
     * Is this SKU taxable.
     *
     * @var bool
     */
    protected $taxable;
    /**
     * The cost paid to acquire the material.
     *
     * @var float
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
     * @var bool
     */
    protected $isInventory;
    /**
     * Timestamp where the item was last modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * The source catalog for this SKU.
     *
     * @var string|null
     */
    protected $source;
    /**
     * External id is the id of the original source of the item when it comes from a catalog.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * List of external data attached to this job,
     * that corresponds to the application guid provided in the request.
     *
     * @var list<PricebookV2ExternalDataModel>|null
     */
    protected $externalData;

    /**
     * Unique id for the SKU.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Unique id for the SKU.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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
     * Images, videos or PDFs attached to SKU.
     *
     * @return list<PricebookV2SkuAssetResponse>
     */
    public function getAssets(): array
    {
        return $this->assets;
    }

    /**
     * Images, videos or PDFs attached to SKU.
     *
     * @param list<PricebookV2SkuAssetResponse> $assets
     */
    public function setAssets(array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;

        return $this;
    }

    /**
     * Recommended services and materials to include with this SKU.
     *
     * @return list<PricebookV2EquipmentRecommendationResponse>
     */
    public function getRecommendations(): array
    {
        return $this->recommendations;
    }

    /**
     * Recommended services and materials to include with this SKU.
     *
     * @param list<PricebookV2EquipmentRecommendationResponse> $recommendations
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
     * Array of materials used with this equipment.
     *
     * @return list<PricebookV2SkuLinkResponse>
     */
    public function getEquipmentMaterials(): array
    {
        return $this->equipmentMaterials;
    }

    /**
     * Array of materials used with this equipment.
     *
     * @param list<PricebookV2SkuLinkResponse> $equipmentMaterials
     */
    public function setEquipmentMaterials(array $equipmentMaterials): self
    {
        $this->initialized['equipmentMaterials'] = true;
        $this->equipmentMaterials = $equipmentMaterials;

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
     * @return list<PricebookV2SkuVendorResponse>|null
     */
    public function getOtherVendors(): ?array
    {
        return $this->otherVendors;
    }

    /**
     * Other vendors that you might go to acquire this SKU.
     *
     * @param list<PricebookV2SkuVendorResponse>|null $otherVendors
     */
    public function setOtherVendors(?array $otherVendors): self
    {
        $this->initialized['otherVendors'] = true;
        $this->otherVendors = $otherVendors;

        return $this;
    }

    /**
     * The accounting account assigned to the SKU.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * The accounting account assigned to the SKU.
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
     * The number of hours associated with the installing the equipment.
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     * The number of hours associated with the installing the equipment.
     */
    public function setHours(float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

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
    public function getIsInventory(): bool
    {
        return $this->isInventory;
    }

    /**
     * Is this equipment a part of your inventory.
     */
    public function setIsInventory(bool $isInventory): self
    {
        $this->initialized['isInventory'] = true;
        $this->isInventory = $isInventory;

        return $this;
    }

    /**
     * Timestamp where the item was last modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * Timestamp where the item was last modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->initialized['modifiedOn'] = true;
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * The source catalog for this SKU.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * The source catalog for this SKU.
     */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * External id is the id of the original source of the item when it comes from a catalog.
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * External id is the id of the original source of the item when it comes from a catalog.
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * List of external data attached to this job,
     * that corresponds to the application guid provided in the request.
     *
     * @return list<PricebookV2ExternalDataModel>|null
     */
    public function getExternalData(): ?array
    {
        return $this->externalData;
    }

    /**
     * List of external data attached to this job,
     * that corresponds to the application guid provided in the request.
     *
     * @param list<PricebookV2ExternalDataModel>|null $externalData
     */
    public function setExternalData(?array $externalData): self
    {
        $this->initialized['externalData'] = true;
        $this->externalData = $externalData;

        return $this;
    }
}
