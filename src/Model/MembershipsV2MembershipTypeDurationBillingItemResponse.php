<?php
/**
 * MembershipsV2MembershipTypeDurationBillingItemResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Memberships
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
 * MembershipsV2MembershipTypeDurationBillingItemResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MembershipsV2MembershipTypeDurationBillingItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Memberships.V2.MembershipTypeDurationBillingItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'duration' => 'int',
        'billing_frequency' => 'OneOfMembershipsV2MembershipRecurrenceType',
        'sale_price' => 'float',
        'billing_price' => 'float',
        'renewal_price' => 'float',
        'import_id' => 'string',
        'active' => 'bool',
        'created_on' => '\DateTime',
        'created_by_id' => 'int'
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
        'duration' => 'int32',
        'billing_frequency' => null,
        'sale_price' => 'decimal',
        'billing_price' => 'decimal',
        'renewal_price' => 'decimal',
        'import_id' => null,
        'active' => null,
        'created_on' => 'date-time',
        'created_by_id' => 'int64'
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
        'duration' => 'duration',
        'billing_frequency' => 'billingFrequency',
        'sale_price' => 'salePrice',
        'billing_price' => 'billingPrice',
        'renewal_price' => 'renewalPrice',
        'import_id' => 'importId',
        'active' => 'active',
        'created_on' => 'createdOn',
        'created_by_id' => 'createdById'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'duration' => 'setDuration',
        'billing_frequency' => 'setBillingFrequency',
        'sale_price' => 'setSalePrice',
        'billing_price' => 'setBillingPrice',
        'renewal_price' => 'setRenewalPrice',
        'import_id' => 'setImportId',
        'active' => 'setActive',
        'created_on' => 'setCreatedOn',
        'created_by_id' => 'setCreatedById'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'duration' => 'getDuration',
        'billing_frequency' => 'getBillingFrequency',
        'sale_price' => 'getSalePrice',
        'billing_price' => 'getBillingPrice',
        'renewal_price' => 'getRenewalPrice',
        'import_id' => 'getImportId',
        'active' => 'getActive',
        'created_on' => 'getCreatedOn',
        'created_by_id' => 'getCreatedById'
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
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['billing_frequency'] = $data['billing_frequency'] ?? null;
        $this->container['sale_price'] = $data['sale_price'] ?? null;
        $this->container['billing_price'] = $data['billing_price'] ?? null;
        $this->container['renewal_price'] = $data['renewal_price'] ?? null;
        $this->container['import_id'] = $data['import_id'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['created_by_id'] = $data['created_by_id'] ?? null;
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
        if ($this->container['billing_frequency'] === null) {
            $invalidProperties[] = "'billing_frequency' can't be null";
        }
        if ($this->container['sale_price'] === null) {
            $invalidProperties[] = "'sale_price' can't be null";
        }
        if ($this->container['billing_price'] === null) {
            $invalidProperties[] = "'billing_price' can't be null";
        }
        if ($this->container['renewal_price'] === null) {
            $invalidProperties[] = "'renewal_price' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
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
     * @param int $id ID of the duration/billing option
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration of the entry
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets billing_frequency
     *
     * @return OneOfMembershipsV2MembershipRecurrenceType
     */
    public function getBillingFrequency()
    {
        return $this->container['billing_frequency'];
    }

    /**
     * Sets billing_frequency
     *
     * @param OneOfMembershipsV2MembershipRecurrenceType $billing_frequency Billing frequency of the entry
     *
     * @return self
     */
    public function setBillingFrequency($billing_frequency)
    {
        $this->container['billing_frequency'] = $billing_frequency;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float $sale_price Sale price of the entry
     *
     * @return self
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets billing_price
     *
     * @return float
     */
    public function getBillingPrice()
    {
        return $this->container['billing_price'];
    }

    /**
     * Sets billing_price
     *
     * @param float $billing_price Billing price of the entry
     *
     * @return self
     */
    public function setBillingPrice($billing_price)
    {
        $this->container['billing_price'] = $billing_price;

        return $this;
    }

    /**
     * Gets renewal_price
     *
     * @return float
     */
    public function getRenewalPrice()
    {
        return $this->container['renewal_price'];
    }

    /**
     * Sets renewal_price
     *
     * @param float $renewal_price Renewal price of the entry
     *
     * @return self
     */
    public function setRenewalPrice($renewal_price)
    {
        $this->container['renewal_price'] = $renewal_price;

        return $this;
    }

    /**
     * Gets import_id
     *
     * @return string|null
     */
    public function getImportId()
    {
        return $this->container['import_id'];
    }

    /**
     * Sets import_id
     *
     * @param string|null $import_id Import ID of the entry
     *
     * @return self
     */
    public function setImportId($import_id)
    {
        $this->container['import_id'] = $import_id;

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
     * @param bool $active Whether the duration/billing option is active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on When duration/billing option was created
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets created_by_id
     *
     * @return int|null
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param int|null $created_by_id ID of the user that created this duration/billing option
     *
     * @return self
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

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

