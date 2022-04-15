<?php
/**
 * EquipmentSystemsV2InstalledEquipmentDetailedResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Equipment Systems
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
 * EquipmentSystemsV2InstalledEquipmentDetailedResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EquipmentSystemsV2InstalledEquipmentDetailedResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EquipmentSystems.V2.InstalledEquipmentDetailedResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'location_id' => 'int',
        'customer_id' => 'int',
        'name' => 'string',
        'installed_on' => '\DateTime',
        'serial_number' => 'string',
        'memo' => 'string',
        'manufacturer' => 'string',
        'model' => 'string',
        'cost' => 'float',
        'manufacturer_warranty_start' => '\DateTime',
        'manufacturer_warranty_end' => '\DateTime',
        'service_provider_warranty_start' => '\DateTime',
        'service_provider_warranty_end' => '\DateTime',
        'custom_fields' => '\CompWright\ServiceTitan\Model\EquipmentSystemsV2CustomFieldResponseModel[]'
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
        'location_id' => 'int64',
        'customer_id' => 'int64',
        'name' => null,
        'installed_on' => 'date-time',
        'serial_number' => null,
        'memo' => null,
        'manufacturer' => null,
        'model' => null,
        'cost' => 'decimal',
        'manufacturer_warranty_start' => 'date-time',
        'manufacturer_warranty_end' => 'date-time',
        'service_provider_warranty_start' => 'date-time',
        'service_provider_warranty_end' => 'date-time',
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
        'id' => 'id',
        'location_id' => 'locationId',
        'customer_id' => 'customerId',
        'name' => 'name',
        'installed_on' => 'installedOn',
        'serial_number' => 'serialNumber',
        'memo' => 'memo',
        'manufacturer' => 'manufacturer',
        'model' => 'model',
        'cost' => 'cost',
        'manufacturer_warranty_start' => 'manufacturerWarrantyStart',
        'manufacturer_warranty_end' => 'manufacturerWarrantyEnd',
        'service_provider_warranty_start' => 'serviceProviderWarrantyStart',
        'service_provider_warranty_end' => 'serviceProviderWarrantyEnd',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'customer_id' => 'setCustomerId',
        'name' => 'setName',
        'installed_on' => 'setInstalledOn',
        'serial_number' => 'setSerialNumber',
        'memo' => 'setMemo',
        'manufacturer' => 'setManufacturer',
        'model' => 'setModel',
        'cost' => 'setCost',
        'manufacturer_warranty_start' => 'setManufacturerWarrantyStart',
        'manufacturer_warranty_end' => 'setManufacturerWarrantyEnd',
        'service_provider_warranty_start' => 'setServiceProviderWarrantyStart',
        'service_provider_warranty_end' => 'setServiceProviderWarrantyEnd',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'customer_id' => 'getCustomerId',
        'name' => 'getName',
        'installed_on' => 'getInstalledOn',
        'serial_number' => 'getSerialNumber',
        'memo' => 'getMemo',
        'manufacturer' => 'getManufacturer',
        'model' => 'getModel',
        'cost' => 'getCost',
        'manufacturer_warranty_start' => 'getManufacturerWarrantyStart',
        'manufacturer_warranty_end' => 'getManufacturerWarrantyEnd',
        'service_provider_warranty_start' => 'getServiceProviderWarrantyStart',
        'service_provider_warranty_end' => 'getServiceProviderWarrantyEnd',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['installed_on'] = $data['installed_on'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['manufacturer_warranty_start'] = $data['manufacturer_warranty_start'] ?? null;
        $this->container['manufacturer_warranty_end'] = $data['manufacturer_warranty_end'] ?? null;
        $this->container['service_provider_warranty_start'] = $data['service_provider_warranty_start'] ?? null;
        $this->container['service_provider_warranty_end'] = $data['service_provider_warranty_end'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['serial_number'] === null) {
            $invalidProperties[] = "'serial_number' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalidProperties[] = "'memo' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * Gets installed_on
     *
     * @return \DateTime|null
     */
    public function getInstalledOn()
    {
        return $this->container['installed_on'];
    }

    /**
     * Sets installed_on
     *
     * @param \DateTime|null $installed_on installed_on
     *
     * @return self
     */
    public function setInstalledOn($installed_on)
    {
        $this->container['installed_on'] = $installed_on;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

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
     * @param string $memo memo
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
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
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * Gets manufacturer_warranty_start
     *
     * @return \DateTime|null
     */
    public function getManufacturerWarrantyStart()
    {
        return $this->container['manufacturer_warranty_start'];
    }

    /**
     * Sets manufacturer_warranty_start
     *
     * @param \DateTime|null $manufacturer_warranty_start manufacturer_warranty_start
     *
     * @return self
     */
    public function setManufacturerWarrantyStart($manufacturer_warranty_start)
    {
        $this->container['manufacturer_warranty_start'] = $manufacturer_warranty_start;

        return $this;
    }

    /**
     * Gets manufacturer_warranty_end
     *
     * @return \DateTime|null
     */
    public function getManufacturerWarrantyEnd()
    {
        return $this->container['manufacturer_warranty_end'];
    }

    /**
     * Sets manufacturer_warranty_end
     *
     * @param \DateTime|null $manufacturer_warranty_end manufacturer_warranty_end
     *
     * @return self
     */
    public function setManufacturerWarrantyEnd($manufacturer_warranty_end)
    {
        $this->container['manufacturer_warranty_end'] = $manufacturer_warranty_end;

        return $this;
    }

    /**
     * Gets service_provider_warranty_start
     *
     * @return \DateTime|null
     */
    public function getServiceProviderWarrantyStart()
    {
        return $this->container['service_provider_warranty_start'];
    }

    /**
     * Sets service_provider_warranty_start
     *
     * @param \DateTime|null $service_provider_warranty_start service_provider_warranty_start
     *
     * @return self
     */
    public function setServiceProviderWarrantyStart($service_provider_warranty_start)
    {
        $this->container['service_provider_warranty_start'] = $service_provider_warranty_start;

        return $this;
    }

    /**
     * Gets service_provider_warranty_end
     *
     * @return \DateTime|null
     */
    public function getServiceProviderWarrantyEnd()
    {
        return $this->container['service_provider_warranty_end'];
    }

    /**
     * Sets service_provider_warranty_end
     *
     * @param \DateTime|null $service_provider_warranty_end service_provider_warranty_end
     *
     * @return self
     */
    public function setServiceProviderWarrantyEnd($service_provider_warranty_end)
    {
        $this->container['service_provider_warranty_end'] = $service_provider_warranty_end;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \CompWright\ServiceTitan\Model\EquipmentSystemsV2CustomFieldResponseModel[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \CompWright\ServiceTitan\Model\EquipmentSystemsV2CustomFieldResponseModel[]|null $custom_fields custom_fields
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


