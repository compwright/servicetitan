<?php
/**
 * PricebookV2EquipmentUpdateRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pricebook
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: Jonathon Hill, CompWright Enterprises LLC (https://compwright.com)
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CompWright\ServiceTitan\Model;

use \ArrayAccess;
use \CompWright\ServiceTitan\ObjectSerializer;

/**
 * PricebookV2EquipmentUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricebookV2EquipmentUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pricebook.V2.EquipmentUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'price' => 'float',
        'member_price' => 'float',
        'add_on_price' => 'float',
        'add_on_member_price' => 'float',
        'active' => 'bool',
        'manufacturer' => 'string',
        'model' => 'string',
        'manufacturer_warranty' => 'OneOfPricebookV2SkuWarrantyRequest',
        'service_provider_warranty' => 'OneOfPricebookV2SkuWarrantyRequest',
        'assets' => '\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]',
        'recommendations' => '\CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationRequest[]',
        'upgrades' => 'int[]',
        'equipment_materials' => '\CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]',
        'categories' => 'int[]',
        'primary_vendor' => 'OneOfPricebookV2SkuVendorRequest',
        'other_vendors' => '\CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]',
        'account' => 'string',
        'cost_of_sale_account' => 'string',
        'asset_account' => 'string',
        'cross_sale_group' => 'string',
        'pays_commission' => 'bool',
        'commission_bonus' => 'float',
        'hours' => 'float',
        'taxable' => 'bool',
        'cost' => 'float',
        'unit_of_measure' => 'string',
        'is_inventory' => 'bool',
        'external_data' => 'OneOfPricebookV2ExternalDataRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'display_name' => null,
        'description' => null,
        'price' => 'decimal',
        'member_price' => 'decimal',
        'add_on_price' => 'decimal',
        'add_on_member_price' => 'decimal',
        'active' => null,
        'manufacturer' => null,
        'model' => null,
        'manufacturer_warranty' => null,
        'service_provider_warranty' => null,
        'assets' => null,
        'recommendations' => null,
        'upgrades' => 'int64',
        'equipment_materials' => null,
        'categories' => 'int64',
        'primary_vendor' => null,
        'other_vendors' => null,
        'account' => null,
        'cost_of_sale_account' => null,
        'asset_account' => null,
        'cross_sale_group' => null,
        'pays_commission' => null,
        'commission_bonus' => 'decimal',
        'hours' => 'decimal',
        'taxable' => null,
        'cost' => 'decimal',
        'unit_of_measure' => null,
        'is_inventory' => null,
        'external_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'display_name' => 'displayName',
        'description' => 'description',
        'price' => 'price',
        'member_price' => 'memberPrice',
        'add_on_price' => 'addOnPrice',
        'add_on_member_price' => 'addOnMemberPrice',
        'active' => 'active',
        'manufacturer' => 'manufacturer',
        'model' => 'model',
        'manufacturer_warranty' => 'manufacturerWarranty',
        'service_provider_warranty' => 'serviceProviderWarranty',
        'assets' => 'assets',
        'recommendations' => 'recommendations',
        'upgrades' => 'upgrades',
        'equipment_materials' => 'equipmentMaterials',
        'categories' => 'categories',
        'primary_vendor' => 'primaryVendor',
        'other_vendors' => 'otherVendors',
        'account' => 'account',
        'cost_of_sale_account' => 'costOfSaleAccount',
        'asset_account' => 'assetAccount',
        'cross_sale_group' => 'crossSaleGroup',
        'pays_commission' => 'paysCommission',
        'commission_bonus' => 'commissionBonus',
        'hours' => 'hours',
        'taxable' => 'taxable',
        'cost' => 'cost',
        'unit_of_measure' => 'unitOfMeasure',
        'is_inventory' => 'isInventory',
        'external_data' => 'externalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'price' => 'setPrice',
        'member_price' => 'setMemberPrice',
        'add_on_price' => 'setAddOnPrice',
        'add_on_member_price' => 'setAddOnMemberPrice',
        'active' => 'setActive',
        'manufacturer' => 'setManufacturer',
        'model' => 'setModel',
        'manufacturer_warranty' => 'setManufacturerWarranty',
        'service_provider_warranty' => 'setServiceProviderWarranty',
        'assets' => 'setAssets',
        'recommendations' => 'setRecommendations',
        'upgrades' => 'setUpgrades',
        'equipment_materials' => 'setEquipmentMaterials',
        'categories' => 'setCategories',
        'primary_vendor' => 'setPrimaryVendor',
        'other_vendors' => 'setOtherVendors',
        'account' => 'setAccount',
        'cost_of_sale_account' => 'setCostOfSaleAccount',
        'asset_account' => 'setAssetAccount',
        'cross_sale_group' => 'setCrossSaleGroup',
        'pays_commission' => 'setPaysCommission',
        'commission_bonus' => 'setCommissionBonus',
        'hours' => 'setHours',
        'taxable' => 'setTaxable',
        'cost' => 'setCost',
        'unit_of_measure' => 'setUnitOfMeasure',
        'is_inventory' => 'setIsInventory',
        'external_data' => 'setExternalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'price' => 'getPrice',
        'member_price' => 'getMemberPrice',
        'add_on_price' => 'getAddOnPrice',
        'add_on_member_price' => 'getAddOnMemberPrice',
        'active' => 'getActive',
        'manufacturer' => 'getManufacturer',
        'model' => 'getModel',
        'manufacturer_warranty' => 'getManufacturerWarranty',
        'service_provider_warranty' => 'getServiceProviderWarranty',
        'assets' => 'getAssets',
        'recommendations' => 'getRecommendations',
        'upgrades' => 'getUpgrades',
        'equipment_materials' => 'getEquipmentMaterials',
        'categories' => 'getCategories',
        'primary_vendor' => 'getPrimaryVendor',
        'other_vendors' => 'getOtherVendors',
        'account' => 'getAccount',
        'cost_of_sale_account' => 'getCostOfSaleAccount',
        'asset_account' => 'getAssetAccount',
        'cross_sale_group' => 'getCrossSaleGroup',
        'pays_commission' => 'getPaysCommission',
        'commission_bonus' => 'getCommissionBonus',
        'hours' => 'getHours',
        'taxable' => 'getTaxable',
        'cost' => 'getCost',
        'unit_of_measure' => 'getUnitOfMeasure',
        'is_inventory' => 'getIsInventory',
        'external_data' => 'getExternalData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['member_price'] = $data['member_price'] ?? null;
        $this->container['add_on_price'] = $data['add_on_price'] ?? null;
        $this->container['add_on_member_price'] = $data['add_on_member_price'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['manufacturer_warranty'] = $data['manufacturer_warranty'] ?? null;
        $this->container['service_provider_warranty'] = $data['service_provider_warranty'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
        $this->container['recommendations'] = $data['recommendations'] ?? null;
        $this->container['upgrades'] = $data['upgrades'] ?? null;
        $this->container['equipment_materials'] = $data['equipment_materials'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['primary_vendor'] = $data['primary_vendor'] ?? null;
        $this->container['other_vendors'] = $data['other_vendors'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['cost_of_sale_account'] = $data['cost_of_sale_account'] ?? null;
        $this->container['asset_account'] = $data['asset_account'] ?? null;
        $this->container['cross_sale_group'] = $data['cross_sale_group'] ?? null;
        $this->container['pays_commission'] = $data['pays_commission'] ?? null;
        $this->container['commission_bonus'] = $data['commission_bonus'] ?? null;
        $this->container['hours'] = $data['hours'] ?? null;
        $this->container['taxable'] = $data['taxable'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['is_inventory'] = $data['is_inventory'] ?? null;
        $this->container['external_data'] = $data['external_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Code for the SKU
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name Name that displays with the SKU
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description on the SKU that is displayed with the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price of this SKU sold
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets member_price
     *
     * @return float|null
     */
    public function getMemberPrice()
    {
        return $this->container['member_price'];
    }

    /**
     * Sets member_price
     *
     * @param float|null $member_price The price if the item is sold to a member
     *
     * @return self
     */
    public function setMemberPrice($member_price)
    {
        $this->container['member_price'] = $member_price;

        return $this;
    }

    /**
     * Gets add_on_price
     *
     * @return float|null
     */
    public function getAddOnPrice()
    {
        return $this->container['add_on_price'];
    }

    /**
     * Sets add_on_price
     *
     * @param float|null $add_on_price The price of the SKU is sold as an add-on item
     *
     * @return self
     */
    public function setAddOnPrice($add_on_price)
    {
        $this->container['add_on_price'] = $add_on_price;

        return $this;
    }

    /**
     * Gets add_on_member_price
     *
     * @return float|null
     */
    public function getAddOnMemberPrice()
    {
        return $this->container['add_on_member_price'];
    }

    /**
     * Sets add_on_member_price
     *
     * @param float|null $add_on_member_price The price if the SKU is sold to a member as an add-on item
     *
     * @return self
     */
    public function setAddOnMemberPrice($add_on_member_price)
    {
        $this->container['add_on_member_price'] = $add_on_member_price;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Active shows if the SKU is active or inactive
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Name of the manufactures
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The model of the equipment
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets manufacturer_warranty
     *
     * @return OneOfPricebookV2SkuWarrantyRequest|null
     */
    public function getManufacturerWarranty()
    {
        return $this->container['manufacturer_warranty'];
    }

    /**
     * Sets manufacturer_warranty
     *
     * @param OneOfPricebookV2SkuWarrantyRequest|null $manufacturer_warranty Description of the manufacturer warranty included in this SKU
     *
     * @return self
     */
    public function setManufacturerWarranty($manufacturer_warranty)
    {
        $this->container['manufacturer_warranty'] = $manufacturer_warranty;

        return $this;
    }

    /**
     * Gets service_provider_warranty
     *
     * @return OneOfPricebookV2SkuWarrantyRequest|null
     */
    public function getServiceProviderWarranty()
    {
        return $this->container['service_provider_warranty'];
    }

    /**
     * Sets service_provider_warranty
     *
     * @param OneOfPricebookV2SkuWarrantyRequest|null $service_provider_warranty Description of the manufacturer warranty included in this SKU
     *
     * @return self
     */
    public function setServiceProviderWarranty($service_provider_warranty)
    {
        $this->container['service_provider_warranty'] = $service_provider_warranty;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]|null
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]|null $assets Images, videos or PDFs attached to SKU
     *
     * @return self
     */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;

        return $this;
    }

    /**
     * Gets recommendations
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationRequest[]|null
     */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
     * Sets recommendations
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2EquipmentRecommendationRequest[]|null $recommendations Recommended services and materials to include with this SKU
     *
     * @return self
     */
    public function setRecommendations($recommendations)
    {
        $this->container['recommendations'] = $recommendations;

        return $this;
    }

    /**
     * Gets upgrades
     *
     * @return int[]|null
     */
    public function getUpgrades()
    {
        return $this->container['upgrades'];
    }

    /**
     * Sets upgrades
     *
     * @param int[]|null $upgrades Upgrades that can be sold for this SKU
     *
     * @return self
     */
    public function setUpgrades($upgrades)
    {
        $this->container['upgrades'] = $upgrades;

        return $this;
    }

    /**
     * Gets equipment_materials
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]|null
     */
    public function getEquipmentMaterials()
    {
        return $this->container['equipment_materials'];
    }

    /**
     * Sets equipment_materials
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuLinkRequest[]|null $equipment_materials Array of materials used with this equipment
     *
     * @return self
     */
    public function setEquipmentMaterials($equipment_materials)
    {
        $this->container['equipment_materials'] = $equipment_materials;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return int[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param int[]|null $categories Categories that this SKU belongs to
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets primary_vendor
     *
     * @return OneOfPricebookV2SkuVendorRequest|null
     */
    public function getPrimaryVendor()
    {
        return $this->container['primary_vendor'];
    }

    /**
     * Sets primary_vendor
     *
     * @param OneOfPricebookV2SkuVendorRequest|null $primary_vendor The primary vendor you use to acquire this SKU
     *
     * @return self
     */
    public function setPrimaryVendor($primary_vendor)
    {
        $this->container['primary_vendor'] = $primary_vendor;

        return $this;
    }

    /**
     * Gets other_vendors
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]|null
     */
    public function getOtherVendors()
    {
        return $this->container['other_vendors'];
    }

    /**
     * Sets other_vendors
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuVendorRequest[]|null $other_vendors Other vendors that you might go to acquire this SKU
     *
     * @return self
     */
    public function setOtherVendors($other_vendors)
    {
        $this->container['other_vendors'] = $other_vendors;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account The accounting account assigned to this SKU
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets cost_of_sale_account
     *
     * @return string|null
     */
    public function getCostOfSaleAccount()
    {
        return $this->container['cost_of_sale_account'];
    }

    /**
     * Sets cost_of_sale_account
     *
     * @param string|null $cost_of_sale_account cost_of_sale_account
     *
     * @return self
     */
    public function setCostOfSaleAccount($cost_of_sale_account)
    {
        $this->container['cost_of_sale_account'] = $cost_of_sale_account;

        return $this;
    }

    /**
     * Gets asset_account
     *
     * @return string|null
     */
    public function getAssetAccount()
    {
        return $this->container['asset_account'];
    }

    /**
     * Sets asset_account
     *
     * @param string|null $asset_account asset_account
     *
     * @return self
     */
    public function setAssetAccount($asset_account)
    {
        $this->container['asset_account'] = $asset_account;

        return $this;
    }

    /**
     * Gets cross_sale_group
     *
     * @return string|null
     */
    public function getCrossSaleGroup()
    {
        return $this->container['cross_sale_group'];
    }

    /**
     * Sets cross_sale_group
     *
     * @param string|null $cross_sale_group A grouping of similar items that you'll then be able to track as a separate columns on the Technical Performance Board.
     *
     * @return self
     */
    public function setCrossSaleGroup($cross_sale_group)
    {
        $this->container['cross_sale_group'] = $cross_sale_group;

        return $this;
    }

    /**
     * Gets pays_commission
     *
     * @return bool|null
     */
    public function getPaysCommission()
    {
        return $this->container['pays_commission'];
    }

    /**
     * Sets pays_commission
     *
     * @param bool|null $pays_commission PaysCommissions shows if this task pays commission
     *
     * @return self
     */
    public function setPaysCommission($pays_commission)
    {
        $this->container['pays_commission'] = $pays_commission;

        return $this;
    }

    /**
     * Gets commission_bonus
     *
     * @return float|null
     */
    public function getCommissionBonus()
    {
        return $this->container['commission_bonus'];
    }

    /**
     * Sets commission_bonus
     *
     * @param float|null $commission_bonus Flat rate bonus paid for this task
     *
     * @return self
     */
    public function setCommissionBonus($commission_bonus)
    {
        $this->container['commission_bonus'] = $commission_bonus;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return float|null
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param float|null $hours The number of hours associated with the installing the equipment
     *
     * @return self
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return bool|null
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param bool|null $taxable Is this SKU taxable
     *
     * @return self
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost The cost paid to acquire the material
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string|null $unit_of_measure The unit of measure used for this SKU
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets is_inventory
     *
     * @return bool|null
     */
    public function getIsInventory()
    {
        return $this->container['is_inventory'];
    }

    /**
     * Sets is_inventory
     *
     * @param bool|null $is_inventory Is this equipment a part of your inventory
     *
     * @return self
     */
    public function setIsInventory($is_inventory)
    {
        $this->container['is_inventory'] = $is_inventory;

        return $this;
    }

    /**
     * Gets external_data
     *
     * @return OneOfPricebookV2ExternalDataRequest|null
     */
    public function getExternalData()
    {
        return $this->container['external_data'];
    }

    /**
     * Sets external_data
     *
     * @param OneOfPricebookV2ExternalDataRequest|null $external_data External data update model.
     *
     * @return self
     */
    public function setExternalData($external_data)
    {
        $this->container['external_data'] = $external_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


