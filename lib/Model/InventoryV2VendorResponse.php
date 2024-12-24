<?php
/**
 * InventoryV2VendorResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
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
 * InventoryV2VendorResponse Class Doc Comment
 *
 * @category Class
 * @description Vendor response
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryV2VendorResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Inventory.V2.VendorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'active' => 'bool',
        'is_truck_replenishment' => 'bool',
        'is_mobile_creation_restricted' => 'bool',
        'memo' => 'string',
        'delivery_option' => 'string',
        'default_tax_rate' => 'float',
        'contact_info' => '\CompWright\ServiceTitan\Model\InventoryV2VendorResponseContactInfo',
        'address' => '\CompWright\ServiceTitan\Model\InventoryV2VendorResponseAddress',
        'created_on' => '\DateTime',
        'modified_on' => '\DateTime',
        'external_data' => '\CompWright\ServiceTitan\Model\InventoryV2ExternalDataModel[]'
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
        'active' => null,
        'is_truck_replenishment' => null,
        'is_mobile_creation_restricted' => null,
        'memo' => null,
        'delivery_option' => null,
        'default_tax_rate' => 'decimal',
        'contact_info' => null,
        'address' => null,
        'created_on' => 'date-time',
        'modified_on' => 'date-time',
        'external_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'active' => false,
        'is_truck_replenishment' => false,
        'is_mobile_creation_restricted' => false,
        'memo' => false,
        'delivery_option' => false,
        'default_tax_rate' => false,
        'contact_info' => false,
        'address' => false,
        'created_on' => false,
        'modified_on' => false,
        'external_data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'active' => 'active',
        'is_truck_replenishment' => 'isTruckReplenishment',
        'is_mobile_creation_restricted' => 'isMobileCreationRestricted',
        'memo' => 'memo',
        'delivery_option' => 'deliveryOption',
        'default_tax_rate' => 'defaultTaxRate',
        'contact_info' => 'contactInfo',
        'address' => 'address',
        'created_on' => 'createdOn',
        'modified_on' => 'modifiedOn',
        'external_data' => 'externalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'active' => 'setActive',
        'is_truck_replenishment' => 'setIsTruckReplenishment',
        'is_mobile_creation_restricted' => 'setIsMobileCreationRestricted',
        'memo' => 'setMemo',
        'delivery_option' => 'setDeliveryOption',
        'default_tax_rate' => 'setDefaultTaxRate',
        'contact_info' => 'setContactInfo',
        'address' => 'setAddress',
        'created_on' => 'setCreatedOn',
        'modified_on' => 'setModifiedOn',
        'external_data' => 'setExternalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'active' => 'getActive',
        'is_truck_replenishment' => 'getIsTruckReplenishment',
        'is_mobile_creation_restricted' => 'getIsMobileCreationRestricted',
        'memo' => 'getMemo',
        'delivery_option' => 'getDeliveryOption',
        'default_tax_rate' => 'getDefaultTaxRate',
        'contact_info' => 'getContactInfo',
        'address' => 'getAddress',
        'created_on' => 'getCreatedOn',
        'modified_on' => 'getModifiedOn',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('is_truck_replenishment', $data ?? [], null);
        $this->setIfExists('is_mobile_creation_restricted', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
        $this->setIfExists('delivery_option', $data ?? [], null);
        $this->setIfExists('default_tax_rate', $data ?? [], null);
        $this->setIfExists('contact_info', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('modified_on', $data ?? [], null);
        $this->setIfExists('external_data', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['is_truck_replenishment'] === null) {
            $invalidProperties[] = "'is_truck_replenishment' can't be null";
        }
        if ($this->container['is_mobile_creation_restricted'] === null) {
            $invalidProperties[] = "'is_mobile_creation_restricted' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalidProperties[] = "'memo' can't be null";
        }
        if ($this->container['delivery_option'] === null) {
            $invalidProperties[] = "'delivery_option' can't be null";
        }
        if ($this->container['default_tax_rate'] === null) {
            $invalidProperties[] = "'default_tax_rate' can't be null";
        }
        if ($this->container['contact_info'] === null) {
            $invalidProperties[] = "'contact_info' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
        }
        if ($this->container['external_data'] === null) {
            $invalidProperties[] = "'external_data' can't be null";
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
     * @param int $id Vendor Id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
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
     * @param string $name Vendor name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * @param bool $active Active/Inactive status
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets is_truck_replenishment
     *
     * @return bool
     */
    public function getIsTruckReplenishment()
    {
        return $this->container['is_truck_replenishment'];
    }

    /**
     * Sets is_truck_replenishment
     *
     * @param bool $is_truck_replenishment Indicates if vendor can be used for replenishment
     *
     * @return self
     */
    public function setIsTruckReplenishment($is_truck_replenishment)
    {
        if (is_null($is_truck_replenishment)) {
            throw new \InvalidArgumentException('non-nullable is_truck_replenishment cannot be null');
        }
        $this->container['is_truck_replenishment'] = $is_truck_replenishment;

        return $this;
    }

    /**
     * Gets is_mobile_creation_restricted
     *
     * @return bool
     */
    public function getIsMobileCreationRestricted()
    {
        return $this->container['is_mobile_creation_restricted'];
    }

    /**
     * Sets is_mobile_creation_restricted
     *
     * @param bool $is_mobile_creation_restricted Indicates if vendor can be used for purchasing on mobile
     *
     * @return self
     */
    public function setIsMobileCreationRestricted($is_mobile_creation_restricted)
    {
        if (is_null($is_mobile_creation_restricted)) {
            throw new \InvalidArgumentException('non-nullable is_mobile_creation_restricted cannot be null');
        }
        $this->container['is_mobile_creation_restricted'] = $is_mobile_creation_restricted;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo Vendor memo
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets delivery_option
     *
     * @return string
     */
    public function getDeliveryOption()
    {
        return $this->container['delivery_option'];
    }

    /**
     * Sets delivery_option
     *
     * @param string $delivery_option Default delivery option
     *
     * @return self
     */
    public function setDeliveryOption($delivery_option)
    {
        if (is_null($delivery_option)) {
            throw new \InvalidArgumentException('non-nullable delivery_option cannot be null');
        }
        $this->container['delivery_option'] = $delivery_option;

        return $this;
    }

    /**
     * Gets default_tax_rate
     *
     * @return float
     */
    public function getDefaultTaxRate()
    {
        return $this->container['default_tax_rate'];
    }

    /**
     * Sets default_tax_rate
     *
     * @param float $default_tax_rate Default tax rate for this vendor
     *
     * @return self
     */
    public function setDefaultTaxRate($default_tax_rate)
    {
        if (is_null($default_tax_rate)) {
            throw new \InvalidArgumentException('non-nullable default_tax_rate cannot be null');
        }
        $this->container['default_tax_rate'] = $default_tax_rate;

        return $this;
    }

    /**
     * Gets contact_info
     *
     * @return \CompWright\ServiceTitan\Model\InventoryV2VendorResponseContactInfo
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param \CompWright\ServiceTitan\Model\InventoryV2VendorResponseContactInfo $contact_info contact_info
     *
     * @return self
     */
    public function setContactInfo($contact_info)
    {
        if (is_null($contact_info)) {
            throw new \InvalidArgumentException('non-nullable contact_info cannot be null');
        }
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \CompWright\ServiceTitan\Model\InventoryV2VendorResponseAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \CompWright\ServiceTitan\Model\InventoryV2VendorResponseAddress $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

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
     * @param \DateTime $created_on system created date
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        if (is_null($created_on)) {
            throw new \InvalidArgumentException('non-nullable created_on cannot be null');
        }
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
     * @param \DateTime $modified_on last time adjustment was modified date
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        if (is_null($modified_on)) {
            throw new \InvalidArgumentException('non-nullable modified_on cannot be null');
        }
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets external_data
     *
     * @return \CompWright\ServiceTitan\Model\InventoryV2ExternalDataModel[]
     */
    public function getExternalData()
    {
        return $this->container['external_data'];
    }

    /**
     * Sets external_data
     *
     * @param \CompWright\ServiceTitan\Model\InventoryV2ExternalDataModel[] $external_data List of external data attached to this vendor, that corresponds to the application guid provided in the request.
     *
     * @return self
     */
    public function setExternalData($external_data)
    {
        if (is_null($external_data)) {
            throw new \InvalidArgumentException('non-nullable external_data cannot be null');
        }
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

