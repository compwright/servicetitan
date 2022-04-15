<?php
/**
 * MembershipsV2MembershipTypeRecurringServiceItemResponse
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
 * MembershipsV2MembershipTypeRecurringServiceItemResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MembershipsV2MembershipTypeRecurringServiceItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Memberships.V2.MembershipTypeRecurringServiceItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'membership_type_id' => 'int',
        'recurring_service_type_id' => 'int',
        'offset' => 'int',
        'offset_type' => 'OneOfMembershipsV2OffsetType',
        'allocation' => 'float',
        'import_id' => 'string',
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
        'membership_type_id' => 'int64',
        'recurring_service_type_id' => 'int64',
        'offset' => 'int32',
        'offset_type' => null,
        'allocation' => 'decimal',
        'import_id' => null,
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
        'membership_type_id' => 'membershipTypeId',
        'recurring_service_type_id' => 'recurringServiceTypeId',
        'offset' => 'offset',
        'offset_type' => 'offsetType',
        'allocation' => 'allocation',
        'import_id' => 'importId',
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
        'membership_type_id' => 'setMembershipTypeId',
        'recurring_service_type_id' => 'setRecurringServiceTypeId',
        'offset' => 'setOffset',
        'offset_type' => 'setOffsetType',
        'allocation' => 'setAllocation',
        'import_id' => 'setImportId',
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
        'membership_type_id' => 'getMembershipTypeId',
        'recurring_service_type_id' => 'getRecurringServiceTypeId',
        'offset' => 'getOffset',
        'offset_type' => 'getOffsetType',
        'allocation' => 'getAllocation',
        'import_id' => 'getImportId',
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
        $this->container['membership_type_id'] = $data['membership_type_id'] ?? null;
        $this->container['recurring_service_type_id'] = $data['recurring_service_type_id'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['offset_type'] = $data['offset_type'] ?? null;
        $this->container['allocation'] = $data['allocation'] ?? null;
        $this->container['import_id'] = $data['import_id'] ?? null;
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
        if ($this->container['membership_type_id'] === null) {
            $invalidProperties[] = "'membership_type_id' can't be null";
        }
        if ($this->container['recurring_service_type_id'] === null) {
            $invalidProperties[] = "'recurring_service_type_id' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['offset_type'] === null) {
            $invalidProperties[] = "'offset_type' can't be null";
        }
        if ($this->container['allocation'] === null) {
            $invalidProperties[] = "'allocation' can't be null";
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
     * @param int $id ID of the recurring service item
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets membership_type_id
     *
     * @return int
     */
    public function getMembershipTypeId()
    {
        return $this->container['membership_type_id'];
    }

    /**
     * Sets membership_type_id
     *
     * @param int $membership_type_id Membership type ID associated with the item
     *
     * @return self
     */
    public function setMembershipTypeId($membership_type_id)
    {
        $this->container['membership_type_id'] = $membership_type_id;

        return $this;
    }

    /**
     * Gets recurring_service_type_id
     *
     * @return int
     */
    public function getRecurringServiceTypeId()
    {
        return $this->container['recurring_service_type_id'];
    }

    /**
     * Sets recurring_service_type_id
     *
     * @param int $recurring_service_type_id Recurring service type ID associated with the item
     *
     * @return self
     */
    public function setRecurringServiceTypeId($recurring_service_type_id)
    {
        $this->container['recurring_service_type_id'] = $recurring_service_type_id;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset Number of weeks or months (depending on offset type) between membership start and recurring service start
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets offset_type
     *
     * @return OneOfMembershipsV2OffsetType
     */
    public function getOffsetType()
    {
        return $this->container['offset_type'];
    }

    /**
     * Sets offset_type
     *
     * @param OneOfMembershipsV2OffsetType $offset_type Offset type of the recurring service type associated to this item, can be weeks (0) or months (1)
     *
     * @return self
     */
    public function setOffsetType($offset_type)
    {
        $this->container['offset_type'] = $offset_type;

        return $this;
    }

    /**
     * Gets allocation
     *
     * @return float
     */
    public function getAllocation()
    {
        return $this->container['allocation'];
    }

    /**
     * Sets allocation
     *
     * @param float $allocation The percentage of deferred revenue allocated to the recurring service item
     *
     * @return self
     */
    public function setAllocation($allocation)
    {
        $this->container['allocation'] = $allocation;

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
     * @param string|null $import_id Import ID
     *
     * @return self
     */
    public function setImportId($import_id)
    {
        $this->container['import_id'] = $import_id;

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
     * @param \DateTime $created_on When recurring service item was created
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
     * @param int|null $created_by_id ID of the user that created this recurring service item
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


