<?php
/**
 * CrmV2CustomersCreateCustomerRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM
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
 * CrmV2CustomersCreateCustomerRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CrmV2CustomersCreateCustomerRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Crm.V2.Customers.CreateCustomerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => 'OneOfCrmV2CustomerType',
        'do_not_mail' => 'bool',
        'do_not_service' => 'bool',
        'locations' => '\CompWright\ServiceTitan\Model\CrmV2CustomersNewLocation[]',
        'address' => 'OneOfCrmV2CustomersCustomerAddress',
        'contacts' => '\CompWright\ServiceTitan\Model\CrmV2CustomersNewCustomerContact[]',
        'custom_fields' => '\CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'do_not_mail' => null,
        'do_not_service' => null,
        'locations' => null,
        'address' => null,
        'contacts' => null,
        'custom_fields' => null
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
        'name' => 'name',
        'type' => 'type',
        'do_not_mail' => 'doNotMail',
        'do_not_service' => 'doNotService',
        'locations' => 'locations',
        'address' => 'address',
        'contacts' => 'contacts',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'do_not_mail' => 'setDoNotMail',
        'do_not_service' => 'setDoNotService',
        'locations' => 'setLocations',
        'address' => 'setAddress',
        'contacts' => 'setContacts',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'do_not_mail' => 'getDoNotMail',
        'do_not_service' => 'getDoNotService',
        'locations' => 'getLocations',
        'address' => 'getAddress',
        'contacts' => 'getContacts',
        'custom_fields' => 'getCustomFields'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['do_not_mail'] = $data['do_not_mail'] ?? null;
        $this->container['do_not_service'] = $data['do_not_service'] ?? null;
        $this->container['locations'] = $data['locations'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['contacts'] = $data['contacts'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * @param string $name Name of the customer
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return OneOfCrmV2CustomerType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param OneOfCrmV2CustomerType|null $type Residential or commercial
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets do_not_mail
     *
     * @return bool|null
     */
    public function getDoNotMail()
    {
        return $this->container['do_not_mail'];
    }

    /**
     * Sets do_not_mail
     *
     * @param bool|null $do_not_mail Customer has been flagged as “do not mail”
     *
     * @return self
     */
    public function setDoNotMail($do_not_mail)
    {
        $this->container['do_not_mail'] = $do_not_mail;

        return $this;
    }

    /**
     * Gets do_not_service
     *
     * @return bool|null
     */
    public function getDoNotService()
    {
        return $this->container['do_not_service'];
    }

    /**
     * Sets do_not_service
     *
     * @param bool|null $do_not_service Customer has been flagged as “do not service”
     *
     * @return self
     */
    public function setDoNotService($do_not_service)
    {
        $this->container['do_not_service'] = $do_not_service;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2CustomersNewLocation[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2CustomersNewLocation[] $locations Locations for the customer
     *
     * @return self
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets address
     *
     * @return OneOfCrmV2CustomersCustomerAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param OneOfCrmV2CustomersCustomerAddress $address Bill-To address of the customer record
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2CustomersNewCustomerContact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2CustomersNewCustomerContact[]|null $contacts Contacts for the customer
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2CustomersCustomFieldUpdateModel[]|null $custom_fields Customer record’s custom fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


