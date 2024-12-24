<?php
/**
 * EstimatesV2EstimateItemCreateUpdateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sales & Estimates
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
 * EstimatesV2EstimateItemCreateUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EstimatesV2EstimateItemCreateUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Estimates.V2.EstimateItemCreateUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sku_id' => 'int',
        'sku_name' => 'string',
        'parent_item_id' => 'int',
        'description' => 'string',
        'is_add_on' => 'bool',
        'quantity' => 'float',
        'unit_price' => 'float',
        'skip_updating_membership_prices' => 'bool',
        'item_group_name' => 'string',
        'item_group_root_id' => 'int'
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
        'sku_id' => 'int64',
        'sku_name' => null,
        'parent_item_id' => 'int64',
        'description' => null,
        'is_add_on' => null,
        'quantity' => 'decimal',
        'unit_price' => 'decimal',
        'skip_updating_membership_prices' => null,
        'item_group_name' => null,
        'item_group_root_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'sku_id' => true,
        'sku_name' => true,
        'parent_item_id' => true,
        'description' => true,
        'is_add_on' => true,
        'quantity' => true,
        'unit_price' => true,
        'skip_updating_membership_prices' => true,
        'item_group_name' => true,
        'item_group_root_id' => true
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
        'sku_id' => 'skuId',
        'sku_name' => 'skuName',
        'parent_item_id' => 'parentItemId',
        'description' => 'description',
        'is_add_on' => 'isAddOn',
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'skip_updating_membership_prices' => 'skipUpdatingMembershipPrices',
        'item_group_name' => 'itemGroupName',
        'item_group_root_id' => 'itemGroupRootId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku_id' => 'setSkuId',
        'sku_name' => 'setSkuName',
        'parent_item_id' => 'setParentItemId',
        'description' => 'setDescription',
        'is_add_on' => 'setIsAddOn',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'skip_updating_membership_prices' => 'setSkipUpdatingMembershipPrices',
        'item_group_name' => 'setItemGroupName',
        'item_group_root_id' => 'setItemGroupRootId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku_id' => 'getSkuId',
        'sku_name' => 'getSkuName',
        'parent_item_id' => 'getParentItemId',
        'description' => 'getDescription',
        'is_add_on' => 'getIsAddOn',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'skip_updating_membership_prices' => 'getSkipUpdatingMembershipPrices',
        'item_group_name' => 'getItemGroupName',
        'item_group_root_id' => 'getItemGroupRootId'
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
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('sku_name', $data ?? [], null);
        $this->setIfExists('parent_item_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('is_add_on', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('skip_updating_membership_prices', $data ?? [], null);
        $this->setIfExists('item_group_name', $data ?? [], null);
        $this->setIfExists('item_group_root_id', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return int|null
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param int|null $sku_id sku_id
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        if (is_null($sku_id)) {
            array_push($this->openAPINullablesSetToNull, 'sku_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets sku_name
     *
     * @return string|null
     */
    public function getSkuName()
    {
        return $this->container['sku_name'];
    }

    /**
     * Sets sku_name
     *
     * @param string|null $sku_name sku_name
     *
     * @return self
     */
    public function setSkuName($sku_name)
    {
        if (is_null($sku_name)) {
            array_push($this->openAPINullablesSetToNull, 'sku_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku_name'] = $sku_name;

        return $this;
    }

    /**
     * Gets parent_item_id
     *
     * @return int|null
     */
    public function getParentItemId()
    {
        return $this->container['parent_item_id'];
    }

    /**
     * Sets parent_item_id
     *
     * @param int|null $parent_item_id parent_item_id
     *
     * @return self
     */
    public function setParentItemId($parent_item_id)
    {
        if (is_null($parent_item_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_item_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_item_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_item_id'] = $parent_item_id;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_add_on
     *
     * @return bool|null
     */
    public function getIsAddOn()
    {
        return $this->container['is_add_on'];
    }

    /**
     * Sets is_add_on
     *
     * @param bool|null $is_add_on is_add_on
     *
     * @return self
     */
    public function setIsAddOn($is_add_on)
    {
        if (is_null($is_add_on)) {
            array_push($this->openAPINullablesSetToNull, 'is_add_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_add_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_add_on'] = $is_add_on;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            array_push($this->openAPINullablesSetToNull, 'quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            array_push($this->openAPINullablesSetToNull, 'unit_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets skip_updating_membership_prices
     *
     * @return bool|null
     */
    public function getSkipUpdatingMembershipPrices()
    {
        return $this->container['skip_updating_membership_prices'];
    }

    /**
     * Sets skip_updating_membership_prices
     *
     * @param bool|null $skip_updating_membership_prices skip_updating_membership_prices
     *
     * @return self
     */
    public function setSkipUpdatingMembershipPrices($skip_updating_membership_prices)
    {
        if (is_null($skip_updating_membership_prices)) {
            array_push($this->openAPINullablesSetToNull, 'skip_updating_membership_prices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skip_updating_membership_prices', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skip_updating_membership_prices'] = $skip_updating_membership_prices;

        return $this;
    }

    /**
     * Gets item_group_name
     *
     * @return string|null
     */
    public function getItemGroupName()
    {
        return $this->container['item_group_name'];
    }

    /**
     * Sets item_group_name
     *
     * @param string|null $item_group_name item_group_name
     *
     * @return self
     */
    public function setItemGroupName($item_group_name)
    {
        if (is_null($item_group_name)) {
            array_push($this->openAPINullablesSetToNull, 'item_group_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_group_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_group_name'] = $item_group_name;

        return $this;
    }

    /**
     * Gets item_group_root_id
     *
     * @return int|null
     */
    public function getItemGroupRootId()
    {
        return $this->container['item_group_root_id'];
    }

    /**
     * Sets item_group_root_id
     *
     * @param int|null $item_group_root_id item_group_root_id
     *
     * @return self
     */
    public function setItemGroupRootId($item_group_root_id)
    {
        if (is_null($item_group_root_id)) {
            array_push($this->openAPINullablesSetToNull, 'item_group_root_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_group_root_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_group_root_id'] = $item_group_root_id;

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


