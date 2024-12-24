<?php
/**
 * PricebookV2PricebookBulkCreateRequest
 *
 * PHP version 7.4
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
 * PricebookV2PricebookBulkCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PricebookV2PricebookBulkCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pricebook.V2.PricebookBulkCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'services' => '\CompWright\ServiceTitan\Model\PricebookV2ServiceBulkCreateRequest[]',
        'equipment' => '\CompWright\ServiceTitan\Model\PricebookV2EquipmentBulkCreateRequest[]',
        'materials' => '\CompWright\ServiceTitan\Model\PricebookV2MaterialBulkCreateRequest[]',
        'discount_and_fees' => '\CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesBulkCreateRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'services' => null,
        'equipment' => null,
        'materials' => null,
        'discount_and_fees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'services' => true,
        'equipment' => true,
        'materials' => true,
        'discount_and_fees' => true
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
        'services' => 'services',
        'equipment' => 'equipment',
        'materials' => 'materials',
        'discount_and_fees' => 'discountAndFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'services' => 'setServices',
        'equipment' => 'setEquipment',
        'materials' => 'setMaterials',
        'discount_and_fees' => 'setDiscountAndFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'services' => 'getServices',
        'equipment' => 'getEquipment',
        'materials' => 'getMaterials',
        'discount_and_fees' => 'getDiscountAndFees'
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
        $this->setIfExists('services', $data ?? [], null);
        $this->setIfExists('equipment', $data ?? [], null);
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('discount_and_fees', $data ?? [], null);
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
     * Gets services
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2ServiceBulkCreateRequest[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2ServiceBulkCreateRequest[]|null $services services
     *
     * @return self
     */
    public function setServices($services)
    {
        if (is_null($services)) {
            array_push($this->openAPINullablesSetToNull, 'services');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('services', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets equipment
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2EquipmentBulkCreateRequest[]|null
     */
    public function getEquipment()
    {
        return $this->container['equipment'];
    }

    /**
     * Sets equipment
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2EquipmentBulkCreateRequest[]|null $equipment equipment
     *
     * @return self
     */
    public function setEquipment($equipment)
    {
        if (is_null($equipment)) {
            array_push($this->openAPINullablesSetToNull, 'equipment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('equipment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['equipment'] = $equipment;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2MaterialBulkCreateRequest[]|null
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2MaterialBulkCreateRequest[]|null $materials materials
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            array_push($this->openAPINullablesSetToNull, 'materials');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('materials', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets discount_and_fees
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesBulkCreateRequest[]|null
     */
    public function getDiscountAndFees()
    {
        return $this->container['discount_and_fees'];
    }

    /**
     * Sets discount_and_fees
     *
     * @param \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesBulkCreateRequest[]|null $discount_and_fees discount_and_fees
     *
     * @return self
     */
    public function setDiscountAndFees($discount_and_fees)
    {
        if (is_null($discount_and_fees)) {
            array_push($this->openAPINullablesSetToNull, 'discount_and_fees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_and_fees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount_and_fees'] = $discount_and_fees;

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


