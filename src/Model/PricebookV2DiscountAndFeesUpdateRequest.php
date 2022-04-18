<?php
/**
 * PricebookV2DiscountAndFeesUpdateRequest
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
 * PricebookV2DiscountAndFeesUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricebookV2DiscountAndFeesUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pricebook.V2.DiscountAndFeesUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'OneOfPricebookV2PriceModifierType',
        'code' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'amount_type' => 'OneOfPricebookV2PriceModifierAmountType',
        'amount' => 'float',
        'limit' => 'float',
        'taxable' => 'bool',
        'categories' => 'int[]',
        'hours' => 'float',
        'assets' => '\CompWright\ServiceTitan\Model\PricebookV2SkuAssetRequest[]',
        'account' => 'string',
        'cross_sale_group' => 'string',
        'active' => 'bool',
        'bonus' => 'float',
        'commission_bonus' => 'float',
        'pays_commission' => 'bool',
        'exclude_from_payroll' => 'bool',
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
        'type' => null,
        'code' => null,
        'display_name' => null,
        'description' => null,
        'amount_type' => null,
        'amount' => 'decimal',
        'limit' => 'decimal',
        'taxable' => null,
        'categories' => 'int64',
        'hours' => 'decimal',
        'assets' => null,
        'account' => null,
        'cross_sale_group' => null,
        'active' => null,
        'bonus' => 'decimal',
        'commission_bonus' => 'decimal',
        'pays_commission' => null,
        'exclude_from_payroll' => null,
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
        'type' => 'type',
        'code' => 'code',
        'display_name' => 'displayName',
        'description' => 'description',
        'amount_type' => 'amountType',
        'amount' => 'amount',
        'limit' => 'limit',
        'taxable' => 'taxable',
        'categories' => 'categories',
        'hours' => 'hours',
        'assets' => 'assets',
        'account' => 'account',
        'cross_sale_group' => 'crossSaleGroup',
        'active' => 'active',
        'bonus' => 'bonus',
        'commission_bonus' => 'commissionBonus',
        'pays_commission' => 'paysCommission',
        'exclude_from_payroll' => 'excludeFromPayroll',
        'external_data' => 'externalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'code' => 'setCode',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'amount_type' => 'setAmountType',
        'amount' => 'setAmount',
        'limit' => 'setLimit',
        'taxable' => 'setTaxable',
        'categories' => 'setCategories',
        'hours' => 'setHours',
        'assets' => 'setAssets',
        'account' => 'setAccount',
        'cross_sale_group' => 'setCrossSaleGroup',
        'active' => 'setActive',
        'bonus' => 'setBonus',
        'commission_bonus' => 'setCommissionBonus',
        'pays_commission' => 'setPaysCommission',
        'exclude_from_payroll' => 'setExcludeFromPayroll',
        'external_data' => 'setExternalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'code' => 'getCode',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'amount_type' => 'getAmountType',
        'amount' => 'getAmount',
        'limit' => 'getLimit',
        'taxable' => 'getTaxable',
        'categories' => 'getCategories',
        'hours' => 'getHours',
        'assets' => 'getAssets',
        'account' => 'getAccount',
        'cross_sale_group' => 'getCrossSaleGroup',
        'active' => 'getActive',
        'bonus' => 'getBonus',
        'commission_bonus' => 'getCommissionBonus',
        'pays_commission' => 'getPaysCommission',
        'exclude_from_payroll' => 'getExcludeFromPayroll',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['amount_type'] = $data['amount_type'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['taxable'] = $data['taxable'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['hours'] = $data['hours'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['cross_sale_group'] = $data['cross_sale_group'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['bonus'] = $data['bonus'] ?? null;
        $this->container['commission_bonus'] = $data['commission_bonus'] ?? null;
        $this->container['pays_commission'] = $data['pays_commission'] ?? null;
        $this->container['exclude_from_payroll'] = $data['exclude_from_payroll'] ?? null;
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
     * Gets type
     *
     * @return OneOfPricebookV2PriceModifierType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param OneOfPricebookV2PriceModifierType|null $type Type should be entered as Discount or Fee to show the type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
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
     * @param string|null $code Code used for the discount or fee
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
     * @param string|null $display_name Name for the discount of fee
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
     * @param string|null $description Description for the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount_type
     *
     * @return OneOfPricebookV2PriceModifierAmountType|null
     */
    public function getAmountType()
    {
        return $this->container['amount_type'];
    }

    /**
     * Sets amount_type
     *
     * @param OneOfPricebookV2PriceModifierAmountType|null $amount_type The amount type takes either \"percentage\" or \"flat \" and apply the \"amount\" field accordingly
     *
     * @return self
     */
    public function setAmountType($amount_type)
    {
        $this->container['amount_type'] = $amount_type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Amount is either the flat amount or percentage you want discounted/added
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return float|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param float|null $limit The maximum amount that can be applied for this item
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

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
     * @param bool|null $taxable Should tax be applied when the item is added on an estimate or invoice
     *
     * @return self
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

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
     * @param int[]|null $categories The category technicians will use to find the item
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

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
     * @param float|null $hours The number of hours associated with the SKU
     *
     * @return self
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

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
     * @param string|null $account The accounting account assigned to the SKU
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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
     * @param bool|null $active Active shows if this item is currently active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets bonus
     *
     * @return float|null
     */
    public function getBonus()
    {
        return $this->container['bonus'];
    }

    /**
     * Sets bonus
     *
     * @param float|null $bonus Bonus
     *
     * @return self
     */
    public function setBonus($bonus)
    {
        $this->container['bonus'] = $bonus;

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
     * @param float|null $commission_bonus Flat rate bonus paid for this item
     *
     * @return self
     */
    public function setCommissionBonus($commission_bonus)
    {
        $this->container['commission_bonus'] = $commission_bonus;

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
     * @param bool|null $pays_commission PaysCommissions shows if for this item commission payed
     *
     * @return self
     */
    public function setPaysCommission($pays_commission)
    {
        $this->container['pays_commission'] = $pays_commission;

        return $this;
    }

    /**
     * Gets exclude_from_payroll
     *
     * @return bool|null
     */
    public function getExcludeFromPayroll()
    {
        return $this->container['exclude_from_payroll'];
    }

    /**
     * Sets exclude_from_payroll
     *
     * @param bool|null $exclude_from_payroll Exclude from payroll
     *
     * @return self
     */
    public function setExcludeFromPayroll($exclude_from_payroll)
    {
        $this->container['exclude_from_payroll'] = $exclude_from_payroll;

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

