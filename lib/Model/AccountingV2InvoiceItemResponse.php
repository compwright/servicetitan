<?php
/**
 * AccountingV2InvoiceItemResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting
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
 * AccountingV2InvoiceItemResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountingV2InvoiceItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Accounting.V2.InvoiceItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'description' => 'string',
        'quantity' => 'string',
        'cost' => 'string',
        'total_cost' => 'string',
        'inventory_location' => 'string',
        'price' => 'string',
        'type' => '\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemType',
        'sku_name' => 'string',
        'sku_id' => 'int',
        'total' => 'string',
        'inventory' => 'bool',
        'taxable' => 'bool',
        'general_ledger_account' => '\CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount',
        'cost_of_sale_account' => '\CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount',
        'asset_account' => '\CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount',
        'membership_type_id' => 'int',
        'item_group' => '\CompWright\ServiceTitan\Model\AccountingV2InvoiceItemResponseItemGroup',
        'display_name' => 'string',
        'sold_hours' => 'float',
        'modified_on' => '\DateTime',
        'service_date' => '\DateTime',
        'order' => 'int'
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
        'description' => null,
        'quantity' => null,
        'cost' => null,
        'total_cost' => null,
        'inventory_location' => null,
        'price' => null,
        'type' => null,
        'sku_name' => null,
        'sku_id' => 'int64',
        'total' => null,
        'inventory' => null,
        'taxable' => null,
        'general_ledger_account' => null,
        'cost_of_sale_account' => null,
        'asset_account' => null,
        'membership_type_id' => 'int64',
        'item_group' => null,
        'display_name' => null,
        'sold_hours' => 'decimal',
        'modified_on' => 'date-time',
        'service_date' => 'date-time',
        'order' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'description' => true,
        'quantity' => true,
        'cost' => true,
        'total_cost' => true,
        'inventory_location' => true,
        'price' => true,
        'type' => false,
        'sku_name' => true,
        'sku_id' => false,
        'total' => true,
        'inventory' => false,
        'taxable' => false,
        'general_ledger_account' => true,
        'cost_of_sale_account' => true,
        'asset_account' => true,
        'membership_type_id' => false,
        'item_group' => true,
        'display_name' => true,
        'sold_hours' => true,
        'modified_on' => false,
        'service_date' => true,
        'order' => false
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
        'description' => 'description',
        'quantity' => 'quantity',
        'cost' => 'cost',
        'total_cost' => 'totalCost',
        'inventory_location' => 'inventoryLocation',
        'price' => 'price',
        'type' => 'type',
        'sku_name' => 'skuName',
        'sku_id' => 'skuId',
        'total' => 'total',
        'inventory' => 'inventory',
        'taxable' => 'taxable',
        'general_ledger_account' => 'generalLedgerAccount',
        'cost_of_sale_account' => 'costOfSaleAccount',
        'asset_account' => 'assetAccount',
        'membership_type_id' => 'membershipTypeId',
        'item_group' => 'itemGroup',
        'display_name' => 'displayName',
        'sold_hours' => 'soldHours',
        'modified_on' => 'modifiedOn',
        'service_date' => 'serviceDate',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'cost' => 'setCost',
        'total_cost' => 'setTotalCost',
        'inventory_location' => 'setInventoryLocation',
        'price' => 'setPrice',
        'type' => 'setType',
        'sku_name' => 'setSkuName',
        'sku_id' => 'setSkuId',
        'total' => 'setTotal',
        'inventory' => 'setInventory',
        'taxable' => 'setTaxable',
        'general_ledger_account' => 'setGeneralLedgerAccount',
        'cost_of_sale_account' => 'setCostOfSaleAccount',
        'asset_account' => 'setAssetAccount',
        'membership_type_id' => 'setMembershipTypeId',
        'item_group' => 'setItemGroup',
        'display_name' => 'setDisplayName',
        'sold_hours' => 'setSoldHours',
        'modified_on' => 'setModifiedOn',
        'service_date' => 'setServiceDate',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'cost' => 'getCost',
        'total_cost' => 'getTotalCost',
        'inventory_location' => 'getInventoryLocation',
        'price' => 'getPrice',
        'type' => 'getType',
        'sku_name' => 'getSkuName',
        'sku_id' => 'getSkuId',
        'total' => 'getTotal',
        'inventory' => 'getInventory',
        'taxable' => 'getTaxable',
        'general_ledger_account' => 'getGeneralLedgerAccount',
        'cost_of_sale_account' => 'getCostOfSaleAccount',
        'asset_account' => 'getAssetAccount',
        'membership_type_id' => 'getMembershipTypeId',
        'item_group' => 'getItemGroup',
        'display_name' => 'getDisplayName',
        'sold_hours' => 'getSoldHours',
        'modified_on' => 'getModifiedOn',
        'service_date' => 'getServiceDate',
        'order' => 'getOrder'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('total_cost', $data ?? [], null);
        $this->setIfExists('inventory_location', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('sku_name', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('inventory', $data ?? [], null);
        $this->setIfExists('taxable', $data ?? [], null);
        $this->setIfExists('general_ledger_account', $data ?? [], null);
        $this->setIfExists('cost_of_sale_account', $data ?? [], null);
        $this->setIfExists('asset_account', $data ?? [], null);
        $this->setIfExists('membership_type_id', $data ?? [], null);
        $this->setIfExists('item_group', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('sold_hours', $data ?? [], null);
        $this->setIfExists('modified_on', $data ?? [], null);
        $this->setIfExists('service_date', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['sku_id'] === null) {
            $invalidProperties[] = "'sku_id' can't be null";
        }
        if ($this->container['inventory'] === null) {
            $invalidProperties[] = "'inventory' can't be null";
        }
        if ($this->container['taxable'] === null) {
            $invalidProperties[] = "'taxable' can't be null";
        }
        if ($this->container['membership_type_id'] === null) {
            $invalidProperties[] = "'membership_type_id' can't be null";
        }
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets quantity
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity quantity
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
     * Gets cost
     *
     * @return string|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            array_push($this->openAPINullablesSetToNull, 'cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return string|null
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param string|null $total_cost total_cost
     *
     * @return self
     */
    public function setTotalCost($total_cost)
    {
        if (is_null($total_cost)) {
            array_push($this->openAPINullablesSetToNull, 'total_cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets inventory_location
     *
     * @return string|null
     */
    public function getInventoryLocation()
    {
        return $this->container['inventory_location'];
    }

    /**
     * Sets inventory_location
     *
     * @param string|null $inventory_location inventory_location
     *
     * @return self
     */
    public function setInventoryLocation($inventory_location)
    {
        if (is_null($inventory_location)) {
            array_push($this->openAPINullablesSetToNull, 'inventory_location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inventory_location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inventory_location'] = $inventory_location;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * @param int $sku_id sku_id
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
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            array_push($this->openAPINullablesSetToNull, 'total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return bool
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param bool $inventory inventory
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        if (is_null($inventory)) {
            throw new \InvalidArgumentException('non-nullable inventory cannot be null');
        }
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param bool $taxable taxable
     *
     * @return self
     */
    public function setTaxable($taxable)
    {
        if (is_null($taxable)) {
            throw new \InvalidArgumentException('non-nullable taxable cannot be null');
        }
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets general_ledger_account
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null
     */
    public function getGeneralLedgerAccount()
    {
        return $this->container['general_ledger_account'];
    }

    /**
     * Sets general_ledger_account
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null $general_ledger_account general_ledger_account
     *
     * @return self
     */
    public function setGeneralLedgerAccount($general_ledger_account)
    {
        if (is_null($general_ledger_account)) {
            array_push($this->openAPINullablesSetToNull, 'general_ledger_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('general_ledger_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['general_ledger_account'] = $general_ledger_account;

        return $this;
    }

    /**
     * Gets cost_of_sale_account
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null
     */
    public function getCostOfSaleAccount()
    {
        return $this->container['cost_of_sale_account'];
    }

    /**
     * Sets cost_of_sale_account
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null $cost_of_sale_account cost_of_sale_account
     *
     * @return self
     */
    public function setCostOfSaleAccount($cost_of_sale_account)
    {
        if (is_null($cost_of_sale_account)) {
            array_push($this->openAPINullablesSetToNull, 'cost_of_sale_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cost_of_sale_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cost_of_sale_account'] = $cost_of_sale_account;

        return $this;
    }

    /**
     * Gets asset_account
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null
     */
    public function getAssetAccount()
    {
        return $this->container['asset_account'];
    }

    /**
     * Sets asset_account
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2InventoryBillItemResponseGeneralLedgerAccount|null $asset_account asset_account
     *
     * @return self
     */
    public function setAssetAccount($asset_account)
    {
        if (is_null($asset_account)) {
            array_push($this->openAPINullablesSetToNull, 'asset_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('asset_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['asset_account'] = $asset_account;

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
     * @param int $membership_type_id membership_type_id
     *
     * @return self
     */
    public function setMembershipTypeId($membership_type_id)
    {
        if (is_null($membership_type_id)) {
            throw new \InvalidArgumentException('non-nullable membership_type_id cannot be null');
        }
        $this->container['membership_type_id'] = $membership_type_id;

        return $this;
    }

    /**
     * Gets item_group
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemResponseItemGroup|null
     */
    public function getItemGroup()
    {
        return $this->container['item_group'];
    }

    /**
     * Sets item_group
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2InvoiceItemResponseItemGroup|null $item_group item_group
     *
     * @return self
     */
    public function setItemGroup($item_group)
    {
        if (is_null($item_group)) {
            array_push($this->openAPINullablesSetToNull, 'item_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_group'] = $item_group;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            array_push($this->openAPINullablesSetToNull, 'display_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('display_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets sold_hours
     *
     * @return float|null
     */
    public function getSoldHours()
    {
        return $this->container['sold_hours'];
    }

    /**
     * Sets sold_hours
     *
     * @param float|null $sold_hours sold_hours
     *
     * @return self
     */
    public function setSoldHours($sold_hours)
    {
        if (is_null($sold_hours)) {
            array_push($this->openAPINullablesSetToNull, 'sold_hours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sold_hours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sold_hours'] = $sold_hours;

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
        if (is_null($modified_on)) {
            throw new \InvalidArgumentException('non-nullable modified_on cannot be null');
        }
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets service_date
     *
     * @return \DateTime|null
     */
    public function getServiceDate()
    {
        return $this->container['service_date'];
    }

    /**
     * Sets service_date
     *
     * @param \DateTime|null $service_date service_date
     *
     * @return self
     */
    public function setServiceDate($service_date)
    {
        if (is_null($service_date)) {
            array_push($this->openAPINullablesSetToNull, 'service_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('service_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['service_date'] = $service_date;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

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


