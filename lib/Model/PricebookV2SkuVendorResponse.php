<?php
/**
 * PricebookV2SkuVendorResponse
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
 * PricebookV2SkuVendorResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricebookV2SkuVendorResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pricebook.V2.SkuVendorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'vendor_name' => 'string',
        'vendor_id' => 'int',
        'memo' => 'string',
        'vendor_part' => 'string',
        'cost' => 'float',
        'active' => 'bool',
        'primary_sub_account' => 'OneOfPricebookV2SkuVendorSubAccountResponse',
        'other_sub_accounts' => '\CompWright\ServiceTitan\Model\PricebookV2SkuVendorSubAccountResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'vendor_name' => null,
        'vendor_id' => 'int64',
        'memo' => null,
        'vendor_part' => null,
        'cost' => 'decimal',
        'active' => null,
        'primary_sub_account' => null,
        'other_sub_accounts' => null
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
        'id' => 'id',
        'vendor_name' => 'vendorName',
        'vendor_id' => 'vendorId',
        'memo' => 'memo',
        'vendor_part' => 'vendorPart',
        'cost' => 'cost',
        'active' => 'active',
        'primary_sub_account' => 'primarySubAccount',
        'other_sub_accounts' => 'otherSubAccounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vendor_name' => 'setVendorName',
        'vendor_id' => 'setVendorId',
        'memo' => 'setMemo',
        'vendor_part' => 'setVendorPart',
        'cost' => 'setCost',
        'active' => 'setActive',
        'primary_sub_account' => 'setPrimarySubAccount',
        'other_sub_accounts' => 'setOtherSubAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vendor_name' => 'getVendorName',
        'vendor_id' => 'getVendorId',
        'memo' => 'getMemo',
        'vendor_part' => 'getVendorPart',
        'cost' => 'getCost',
        'active' => 'getActive',
        'primary_sub_account' => 'getPrimarySubAccount',
        'other_sub_accounts' => 'getOtherSubAccounts'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['vendor_name'] = $data['vendor_name'] ?? null;
        $this->container['vendor_id'] = $data['vendor_id'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['vendor_part'] = $data['vendor_part'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['primary_sub_account'] = $data['primary_sub_account'] ?? null;
        $this->container['other_sub_accounts'] = $data['other_sub_accounts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['vendor_name'] === null) {
            $invalidProperties[] = "'vendor_name' can't be null";
        }
        if ($this->container['vendor_id'] === null) {
            $invalidProperties[] = "'vendor_id' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets vendor_name
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->container['vendor_name'];
    }

    /**
     * Sets vendor_name
     *
     * @param string $vendor_name vendor_name
     *
     * @return self
     */
    public function setVendorName($vendor_name)
    {
        $this->container['vendor_name'] = $vendor_name;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param int $vendor_id vendor_id
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets vendor_part
     *
     * @return string|null
     */
    public function getVendorPart()
    {
        return $this->container['vendor_part'];
    }

    /**
     * Sets vendor_part
     *
     * @param string|null $vendor_part vendor_part
     *
     * @return self
     */
    public function setVendorPart($vendor_part)
    {
        $this->container['vendor_part'] = $vendor_part;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets primary_sub_account
     *
     * @return OneOfPricebookV2SkuVendorSubAccountResponse|null
     */
    public function getPrimarySubAccount()
    {
        return $this->container['primary_sub_account'];
    }

    /**
     * Sets primary_sub_account
     *
     * @param OneOfPricebookV2SkuVendorSubAccountResponse|null $primary_sub_account primary_sub_account
     *
     * @return self
     */
    public function setPrimarySubAccount($primary_sub_account)
    {
        $this->container['primary_sub_account'] = $primary_sub_account;

        return $this;
    }

    /**
     * Gets other_sub_accounts
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2SkuVendorSubAccountResponse[]|null
     */
    public function getOtherSubAccounts()
    {
        return $this->container['other_sub_accounts'];
    }

    /**
     * Sets other_sub_accounts
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2SkuVendorSubAccountResponse[]|null $other_sub_accounts other_sub_accounts
     *
     * @return self
     */
    public function setOtherSubAccounts($other_sub_accounts)
    {
        $this->container['other_sub_accounts'] = $other_sub_accounts;

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


