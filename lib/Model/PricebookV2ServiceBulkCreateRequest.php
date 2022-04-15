<?php
/**
 * PricebookV2ServiceBulkCreateRequest
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
 * PricebookV2ServiceBulkCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricebookV2ServiceBulkCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pricebook.V2.ServiceBulkCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'service_materials' => '\CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]',
        'service_equipment' => '\CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]',
        'recommendations' => '\CompWright\ServiceTitan\Model\PricebookV2ServiceRecommendationBulkCreateRequest[]',
        'upgrades' => '\CompWright\ServiceTitan\Model\PricebookV2SkuUpgradeBulkCreateRequest[]',
        'code' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'warranty' => 'OneOfPricebookV2SkuWarrantyRequest',
        'categories' => 'int[]',
        'price' => 'float',
        'member_price' => 'float',
        'add_on_price' => 'float',
        'add_on_member_price' => 'float',
        'taxable' => 'bool',
        'account' => 'string',
        'hours' => 'float',
        'is_labor' => 'bool',
        'assets' => '\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]',
        'active' => 'bool',
        'cross_sale_group' => 'string',
        'pays_commission' => 'bool',
        'commission_bonus' => 'float',
        'external_data' => 'OneOfPricebookV2ExternalDataRequest',
        'custom_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'service_materials' => null,
        'service_equipment' => null,
        'recommendations' => null,
        'upgrades' => null,
        'code' => null,
        'display_name' => null,
        'description' => null,
        'warranty' => null,
        'categories' => 'int64',
        'price' => 'decimal',
        'member_price' => 'decimal',
        'add_on_price' => 'decimal',
        'add_on_member_price' => 'decimal',
        'taxable' => null,
        'account' => null,
        'hours' => 'decimal',
        'is_labor' => null,
        'assets' => null,
        'active' => null,
        'cross_sale_group' => null,
        'pays_commission' => null,
        'commission_bonus' => 'decimal',
        'external_data' => null,
        'custom_id' => null
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
        'service_materials' => 'serviceMaterials',
        'service_equipment' => 'serviceEquipment',
        'recommendations' => 'recommendations',
        'upgrades' => 'upgrades',
        'code' => 'code',
        'display_name' => 'displayName',
        'description' => 'description',
        'warranty' => 'warranty',
        'categories' => 'categories',
        'price' => 'price',
        'member_price' => 'memberPrice',
        'add_on_price' => 'addOnPrice',
        'add_on_member_price' => 'addOnMemberPrice',
        'taxable' => 'taxable',
        'account' => 'account',
        'hours' => 'hours',
        'is_labor' => 'isLabor',
        'assets' => 'assets',
        'active' => 'active',
        'cross_sale_group' => 'crossSaleGroup',
        'pays_commission' => 'paysCommission',
        'commission_bonus' => 'commissionBonus',
        'external_data' => 'externalData',
        'custom_id' => 'customId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_materials' => 'setServiceMaterials',
        'service_equipment' => 'setServiceEquipment',
        'recommendations' => 'setRecommendations',
        'upgrades' => 'setUpgrades',
        'code' => 'setCode',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'warranty' => 'setWarranty',
        'categories' => 'setCategories',
        'price' => 'setPrice',
        'member_price' => 'setMemberPrice',
        'add_on_price' => 'setAddOnPrice',
        'add_on_member_price' => 'setAddOnMemberPrice',
        'taxable' => 'setTaxable',
        'account' => 'setAccount',
        'hours' => 'setHours',
        'is_labor' => 'setIsLabor',
        'assets' => 'setAssets',
        'active' => 'setActive',
        'cross_sale_group' => 'setCrossSaleGroup',
        'pays_commission' => 'setPaysCommission',
        'commission_bonus' => 'setCommissionBonus',
        'external_data' => 'setExternalData',
        'custom_id' => 'setCustomId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_materials' => 'getServiceMaterials',
        'service_equipment' => 'getServiceEquipment',
        'recommendations' => 'getRecommendations',
        'upgrades' => 'getUpgrades',
        'code' => 'getCode',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'warranty' => 'getWarranty',
        'categories' => 'getCategories',
        'price' => 'getPrice',
        'member_price' => 'getMemberPrice',
        'add_on_price' => 'getAddOnPrice',
        'add_on_member_price' => 'getAddOnMemberPrice',
        'taxable' => 'getTaxable',
        'account' => 'getAccount',
        'hours' => 'getHours',
        'is_labor' => 'getIsLabor',
        'assets' => 'getAssets',
        'active' => 'getActive',
        'cross_sale_group' => 'getCrossSaleGroup',
        'pays_commission' => 'getPaysCommission',
        'commission_bonus' => 'getCommissionBonus',
        'external_data' => 'getExternalData',
        'custom_id' => 'getCustomId'
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
        $this->container['service_materials'] = $data['service_materials'] ?? null;
        $this->container['service_equipment'] = $data['service_equipment'] ?? null;
        $this->container['recommendations'] = $data['recommendations'] ?? null;
        $this->container['upgrades'] = $data['upgrades'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['warranty'] = $data['warranty'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['member_price'] = $data['member_price'] ?? null;
        $this->container['add_on_price'] = $data['add_on_price'] ?? null;
        $this->container['add_on_member_price'] = $data['add_on_member_price'] ?? null;
        $this->container['taxable'] = $data['taxable'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['hours'] = $data['hours'] ?? null;
        $this->container['is_labor'] = $data['is_labor'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['cross_sale_group'] = $data['cross_sale_group'] ?? null;
        $this->container['pays_commission'] = $data['pays_commission'] ?? null;
        $this->container['commission_bonus'] = $data['commission_bonus'] ?? null;
        $this->container['external_data'] = $data['external_data'] ?? null;
        $this->container['custom_id'] = $data['custom_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
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
     * Gets service_materials
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]|null
     */
    public function getServiceMaterials()
    {
        return $this->container['service_materials'];
    }

    /**
     * Sets service_materials
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]|null $service_materials Array of materials linked to the service
     *
     * @return self
     */
    public function setServiceMaterials($service_materials)
    {
        $this->container['service_materials'] = $service_materials;

        return $this;
    }

    /**
     * Gets service_equipment
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]|null
     */
    public function getServiceEquipment()
    {
        return $this->container['service_equipment'];
    }

    /**
     * Sets service_equipment
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuLinkBulkCreateRequest[]|null $service_equipment Array of equipment linked to the service
     *
     * @return self
     */
    public function setServiceEquipment($service_equipment)
    {
        $this->container['service_equipment'] = $service_equipment;

        return $this;
    }

    /**
     * Gets recommendations
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2ServiceRecommendationBulkCreateRequest[]|null
     */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
     * Sets recommendations
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2ServiceRecommendationBulkCreateRequest[]|null $recommendations Recommended services and materials to include with this SKU
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
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuUpgradeBulkCreateRequest[]|null
     */
    public function getUpgrades()
    {
        return $this->container['upgrades'];
    }

    /**
     * Sets upgrades
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuUpgradeBulkCreateRequest[]|null $upgrades Upgrades that can be sold for this SKU
     *
     * @return self
     */
    public function setUpgrades($upgrades)
    {
        $this->container['upgrades'] = $upgrades;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code for the SKU
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
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description on the SKU that is displayed with the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets warranty
     *
     * @return OneOfPricebookV2SkuWarrantyRequest|null
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param OneOfPricebookV2SkuWarrantyRequest|null $warranty Description of the warranty included in this SKU
     *
     * @return self
     */
    public function setWarranty($warranty)
    {
        $this->container['warranty'] = $warranty;

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
     * @param float|null $hours Hours needed to complete this service
     *
     * @return self
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets is_labor
     *
     * @return bool|null
     */
    public function getIsLabor()
    {
        return $this->container['is_labor'];
    }

    /**
     * Sets is_labor
     *
     * @param bool|null $is_labor Is a labor service
     *
     * @return self
     */
    public function setIsLabor($is_labor)
    {
        $this->container['is_labor'] = $is_labor;

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
     * @param bool|null $pays_commission True if this task pays commission
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
     * @param OneOfPricebookV2ExternalDataRequest|null $external_data Optional model that contains a list of external data items that should be attached to this entity.
     *
     * @return self
     */
    public function setExternalData($external_data)
    {
        $this->container['external_data'] = $external_data;

        return $this;
    }

    /**
     * Gets custom_id
     *
     * @return string|null
     */
    public function getCustomId()
    {
        return $this->container['custom_id'];
    }

    /**
     * Sets custom_id
     *
     * @param string|null $custom_id custom_id
     *
     * @return self
     */
    public function setCustomId($custom_id)
    {
        $this->container['custom_id'] = $custom_id;

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


