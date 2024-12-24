<?php
/**
 * InventoryV2PurchaseOrderItemResponse
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
 * InventoryV2PurchaseOrderItemResponse Class Doc Comment
 *
 * @category Class
 * @description Represents purchase order item response
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryV2PurchaseOrderItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Inventory.V2.PurchaseOrderItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sku_id' => 'int',
        'sku_name' => 'string',
        'sku_code' => 'string',
        'sku_type' => 'string',
        'description' => 'string',
        'vendor_part_number' => 'string',
        'quantity' => 'float',
        'quantity_received' => 'float',
        'cost' => 'float',
        'total' => 'float',
        'serial_numbers' => '\CompWright\ServiceTitan\Model\InventoryV2SerialNumberResponse[]',
        'status' => 'string',
        'chargeable' => 'bool'
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
        'sku_code' => null,
        'sku_type' => null,
        'description' => null,
        'vendor_part_number' => null,
        'quantity' => 'decimal',
        'quantity_received' => 'decimal',
        'cost' => 'decimal',
        'total' => 'decimal',
        'serial_numbers' => null,
        'status' => null,
        'chargeable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'sku_id' => false,
        'sku_name' => false,
        'sku_code' => false,
        'sku_type' => false,
        'description' => false,
        'vendor_part_number' => false,
        'quantity' => false,
        'quantity_received' => false,
        'cost' => false,
        'total' => false,
        'serial_numbers' => false,
        'status' => false,
        'chargeable' => false
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
        'sku_code' => 'skuCode',
        'sku_type' => 'skuType',
        'description' => 'description',
        'vendor_part_number' => 'vendorPartNumber',
        'quantity' => 'quantity',
        'quantity_received' => 'quantityReceived',
        'cost' => 'cost',
        'total' => 'total',
        'serial_numbers' => 'serialNumbers',
        'status' => 'status',
        'chargeable' => 'chargeable'
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
        'sku_code' => 'setSkuCode',
        'sku_type' => 'setSkuType',
        'description' => 'setDescription',
        'vendor_part_number' => 'setVendorPartNumber',
        'quantity' => 'setQuantity',
        'quantity_received' => 'setQuantityReceived',
        'cost' => 'setCost',
        'total' => 'setTotal',
        'serial_numbers' => 'setSerialNumbers',
        'status' => 'setStatus',
        'chargeable' => 'setChargeable'
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
        'sku_code' => 'getSkuCode',
        'sku_type' => 'getSkuType',
        'description' => 'getDescription',
        'vendor_part_number' => 'getVendorPartNumber',
        'quantity' => 'getQuantity',
        'quantity_received' => 'getQuantityReceived',
        'cost' => 'getCost',
        'total' => 'getTotal',
        'serial_numbers' => 'getSerialNumbers',
        'status' => 'getStatus',
        'chargeable' => 'getChargeable'
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
        $this->setIfExists('sku_code', $data ?? [], null);
        $this->setIfExists('sku_type', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('vendor_part_number', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantity_received', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('serial_numbers', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('chargeable', $data ?? [], null);
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
        if ($this->container['sku_id'] === null) {
            $invalidProperties[] = "'sku_id' can't be null";
        }
        if ($this->container['sku_name'] === null) {
            $invalidProperties[] = "'sku_name' can't be null";
        }
        if ($this->container['sku_code'] === null) {
            $invalidProperties[] = "'sku_code' can't be null";
        }
        if ($this->container['sku_type'] === null) {
            $invalidProperties[] = "'sku_type' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['vendor_part_number'] === null) {
            $invalidProperties[] = "'vendor_part_number' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['quantity_received'] === null) {
            $invalidProperties[] = "'quantity_received' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['serial_numbers'] === null) {
            $invalidProperties[] = "'serial_numbers' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['chargeable'] === null) {
            $invalidProperties[] = "'chargeable' can't be null";
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
     * @param int $id Item Id
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
     * Gets sku_id
     *
     * @return int
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param int $sku_id SKU Id of this item
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        if (is_null($sku_id)) {
            throw new \InvalidArgumentException('non-nullable sku_id cannot be null');
        }
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets sku_name
     *
     * @return string
     */
    public function getSkuName()
    {
        return $this->container['sku_name'];
    }

    /**
     * Sets sku_name
     *
     * @param string $sku_name Item name
     *
     * @return self
     */
    public function setSkuName($sku_name)
    {
        if (is_null($sku_name)) {
            throw new \InvalidArgumentException('non-nullable sku_name cannot be null');
        }
        $this->container['sku_name'] = $sku_name;

        return $this;
    }

    /**
     * Gets sku_code
     *
     * @return string
     */
    public function getSkuCode()
    {
        return $this->container['sku_code'];
    }

    /**
     * Sets sku_code
     *
     * @param string $sku_code Item code
     *
     * @return self
     */
    public function setSkuCode($sku_code)
    {
        if (is_null($sku_code)) {
            throw new \InvalidArgumentException('non-nullable sku_code cannot be null');
        }
        $this->container['sku_code'] = $sku_code;

        return $this;
    }

    /**
     * Gets sku_type
     *
     * @return string
     */
    public function getSkuType()
    {
        return $this->container['sku_type'];
    }

    /**
     * Sets sku_type
     *
     * @param string $sku_type Item type(material or equipment)
     *
     * @return self
     */
    public function setSkuType($sku_type)
    {
        if (is_null($sku_type)) {
            throw new \InvalidArgumentException('non-nullable sku_type cannot be null');
        }
        $this->container['sku_type'] = $sku_type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vendor_part_number
     *
     * @return string
     */
    public function getVendorPartNumber()
    {
        return $this->container['vendor_part_number'];
    }

    /**
     * Sets vendor_part_number
     *
     * @param string $vendor_part_number Vendor part number for this item
     *
     * @return self
     */
    public function setVendorPartNumber($vendor_part_number)
    {
        if (is_null($vendor_part_number)) {
            throw new \InvalidArgumentException('non-nullable vendor_part_number cannot be null');
        }
        $this->container['vendor_part_number'] = $vendor_part_number;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Item quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_received
     *
     * @return float
     */
    public function getQuantityReceived()
    {
        return $this->container['quantity_received'];
    }

    /**
     * Sets quantity_received
     *
     * @param float $quantity_received Quantity received for this item, PO must have at least one receipt for this to be not 0
     *
     * @return self
     */
    public function setQuantityReceived($quantity_received)
    {
        if (is_null($quantity_received)) {
            throw new \InvalidArgumentException('non-nullable quantity_received cannot be null');
        }
        $this->container['quantity_received'] = $quantity_received;

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
     * @param float $cost Item cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total Item total cost
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets serial_numbers
     *
     * @return \CompWright\ServiceTitan\Model\InventoryV2SerialNumberResponse[]
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     *
     * @param \CompWright\ServiceTitan\Model\InventoryV2SerialNumberResponse[] $serial_numbers List of serial numbers
     *
     * @return self
     */
    public function setSerialNumbers($serial_numbers)
    {
        if (is_null($serial_numbers)) {
            throw new \InvalidArgumentException('non-nullable serial_numbers cannot be null');
        }
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Item status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets chargeable
     *
     * @return bool
     */
    public function getChargeable()
    {
        return $this->container['chargeable'];
    }

    /**
     * Sets chargeable
     *
     * @param bool $chargeable Indicates whether item price is charged to customer
     *
     * @return self
     */
    public function setChargeable($chargeable)
    {
        if (is_null($chargeable)) {
            throw new \InvalidArgumentException('non-nullable chargeable cannot be null');
        }
        $this->container['chargeable'] = $chargeable;

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

