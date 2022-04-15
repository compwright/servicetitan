<?php
/**
 * TenantSettingsV2TechnicianResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings
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
 * TenantSettingsV2TechnicianResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TenantSettingsV2TechnicianResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TenantSettings.V2.TechnicianResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'business_unit_id' => 'int',
        'created_on' => '\DateTime',
        'modified_on' => '\DateTime',
        'email' => 'string',
        'phone_number' => 'string',
        'login_name' => 'string',
        'home' => 'OneOfTenantSettingsV2TechnicianAddressResponse',
        'daily_goal' => 'float',
        'is_managed_tech' => 'bool',
        'custom_fields' => '\CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianCustomFieldResponse[]',
        'active' => 'bool'
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
        'name' => null,
        'business_unit_id' => 'int64',
        'created_on' => 'date-time',
        'modified_on' => 'date-time',
        'email' => null,
        'phone_number' => null,
        'login_name' => null,
        'home' => null,
        'daily_goal' => 'decimal',
        'is_managed_tech' => null,
        'custom_fields' => null,
        'active' => null
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
        'name' => 'name',
        'business_unit_id' => 'businessUnitId',
        'created_on' => 'createdOn',
        'modified_on' => 'modifiedOn',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'login_name' => 'loginName',
        'home' => 'home',
        'daily_goal' => 'dailyGoal',
        'is_managed_tech' => 'isManagedTech',
        'custom_fields' => 'customFields',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'business_unit_id' => 'setBusinessUnitId',
        'created_on' => 'setCreatedOn',
        'modified_on' => 'setModifiedOn',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'login_name' => 'setLoginName',
        'home' => 'setHome',
        'daily_goal' => 'setDailyGoal',
        'is_managed_tech' => 'setIsManagedTech',
        'custom_fields' => 'setCustomFields',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'business_unit_id' => 'getBusinessUnitId',
        'created_on' => 'getCreatedOn',
        'modified_on' => 'getModifiedOn',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'login_name' => 'getLoginName',
        'home' => 'getHome',
        'daily_goal' => 'getDailyGoal',
        'is_managed_tech' => 'getIsManagedTech',
        'custom_fields' => 'getCustomFields',
        'active' => 'getActive'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['business_unit_id'] = $data['business_unit_id'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['modified_on'] = $data['modified_on'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['login_name'] = $data['login_name'] ?? null;
        $this->container['home'] = $data['home'] ?? null;
        $this->container['daily_goal'] = $data['daily_goal'] ?? null;
        $this->container['is_managed_tech'] = $data['is_managed_tech'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
        }
        if ($this->container['daily_goal'] === null) {
            $invalidProperties[] = "'daily_goal' can't be null";
        }
        if ($this->container['is_managed_tech'] === null) {
            $invalidProperties[] = "'is_managed_tech' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets business_unit_id
     *
     * @return int|null
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     *
     * @param int|null $business_unit_id business_unit_id
     *
     * @return self
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

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
     * @param \DateTime $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return \DateTime
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param \DateTime $modified_on modified_on
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets login_name
     *
     * @return string|null
     */
    public function getLoginName()
    {
        return $this->container['login_name'];
    }

    /**
     * Sets login_name
     *
     * @param string|null $login_name login_name
     *
     * @return self
     */
    public function setLoginName($login_name)
    {
        $this->container['login_name'] = $login_name;

        return $this;
    }

    /**
     * Gets home
     *
     * @return OneOfTenantSettingsV2TechnicianAddressResponse|null
     */
    public function getHome()
    {
        return $this->container['home'];
    }

    /**
     * Sets home
     *
     * @param OneOfTenantSettingsV2TechnicianAddressResponse|null $home home
     *
     * @return self
     */
    public function setHome($home)
    {
        $this->container['home'] = $home;

        return $this;
    }

    /**
     * Gets daily_goal
     *
     * @return float
     */
    public function getDailyGoal()
    {
        return $this->container['daily_goal'];
    }

    /**
     * Sets daily_goal
     *
     * @param float $daily_goal daily_goal
     *
     * @return self
     */
    public function setDailyGoal($daily_goal)
    {
        $this->container['daily_goal'] = $daily_goal;

        return $this;
    }

    /**
     * Gets is_managed_tech
     *
     * @return bool
     */
    public function getIsManagedTech()
    {
        return $this->container['is_managed_tech'];
    }

    /**
     * Sets is_managed_tech
     *
     * @param bool $is_managed_tech is_managed_tech
     *
     * @return self
     */
    public function setIsManagedTech($is_managed_tech)
    {
        $this->container['is_managed_tech'] = $is_managed_tech;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianCustomFieldResponse[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \CompWright\ServiceTitan\Model\TenantSettingsV2TechnicianCustomFieldResponse[]|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


