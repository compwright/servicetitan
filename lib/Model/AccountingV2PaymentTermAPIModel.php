<?php
/**
 * AccountingV2PaymentTermAPIModel
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
 * AccountingV2PaymentTermAPIModel Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountingV2PaymentTermAPIModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Accounting.V2.PaymentTermAPIModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'due_day_type' => '\CompWright\ServiceTitan\Model\AccountingV2PaymentTermDueDayType',
        'due_day' => 'int',
        'is_customer_default' => 'bool',
        'is_vendor_default' => 'bool',
        'active' => 'bool',
        'in_use' => 'bool',
        'payment_term_penalty_model' => '\CompWright\ServiceTitan\Model\AccountingV2PaymentTermPenaltyAPIModel',
        'payment_term_discount_model' => '\CompWright\ServiceTitan\Model\AccountingV2PaymentTermDiscountAPIModel'
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
        'due_day_type' => null,
        'due_day' => 'int32',
        'is_customer_default' => null,
        'is_vendor_default' => null,
        'active' => null,
        'in_use' => null,
        'payment_term_penalty_model' => null,
        'payment_term_discount_model' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'name' => true,
        'due_day_type' => false,
        'due_day' => true,
        'is_customer_default' => false,
        'is_vendor_default' => false,
        'active' => false,
        'in_use' => true,
        'payment_term_penalty_model' => false,
        'payment_term_discount_model' => false
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
        'due_day_type' => 'dueDayType',
        'due_day' => 'dueDay',
        'is_customer_default' => 'isCustomerDefault',
        'is_vendor_default' => 'isVendorDefault',
        'active' => 'active',
        'in_use' => 'inUse',
        'payment_term_penalty_model' => 'paymentTermPenaltyModel',
        'payment_term_discount_model' => 'paymentTermDiscountModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'due_day_type' => 'setDueDayType',
        'due_day' => 'setDueDay',
        'is_customer_default' => 'setIsCustomerDefault',
        'is_vendor_default' => 'setIsVendorDefault',
        'active' => 'setActive',
        'in_use' => 'setInUse',
        'payment_term_penalty_model' => 'setPaymentTermPenaltyModel',
        'payment_term_discount_model' => 'setPaymentTermDiscountModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'due_day_type' => 'getDueDayType',
        'due_day' => 'getDueDay',
        'is_customer_default' => 'getIsCustomerDefault',
        'is_vendor_default' => 'getIsVendorDefault',
        'active' => 'getActive',
        'in_use' => 'getInUse',
        'payment_term_penalty_model' => 'getPaymentTermPenaltyModel',
        'payment_term_discount_model' => 'getPaymentTermDiscountModel'
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
        $this->setIfExists('due_day_type', $data ?? [], null);
        $this->setIfExists('due_day', $data ?? [], null);
        $this->setIfExists('is_customer_default', $data ?? [], null);
        $this->setIfExists('is_vendor_default', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('in_use', $data ?? [], null);
        $this->setIfExists('payment_term_penalty_model', $data ?? [], null);
        $this->setIfExists('payment_term_discount_model', $data ?? [], null);
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

        if ($this->container['due_day_type'] === null) {
            $invalidProperties[] = "'due_day_type' can't be null";
        }
        if ($this->container['is_customer_default'] === null) {
            $invalidProperties[] = "'is_customer_default' can't be null";
        }
        if ($this->container['is_vendor_default'] === null) {
            $invalidProperties[] = "'is_vendor_default' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['payment_term_penalty_model'] === null) {
            $invalidProperties[] = "'payment_term_penalty_model' can't be null";
        }
        if ($this->container['payment_term_discount_model'] === null) {
            $invalidProperties[] = "'payment_term_discount_model' can't be null";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets due_day_type
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentTermDueDayType
     */
    public function getDueDayType()
    {
        return $this->container['due_day_type'];
    }

    /**
     * Sets due_day_type
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentTermDueDayType $due_day_type due_day_type
     *
     * @return self
     */
    public function setDueDayType($due_day_type)
    {
        if (is_null($due_day_type)) {
            throw new \InvalidArgumentException('non-nullable due_day_type cannot be null');
        }
        $this->container['due_day_type'] = $due_day_type;

        return $this;
    }

    /**
     * Gets due_day
     *
     * @return int|null
     */
    public function getDueDay()
    {
        return $this->container['due_day'];
    }

    /**
     * Sets due_day
     *
     * @param int|null $due_day due_day
     *
     * @return self
     */
    public function setDueDay($due_day)
    {
        if (is_null($due_day)) {
            array_push($this->openAPINullablesSetToNull, 'due_day');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('due_day', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['due_day'] = $due_day;

        return $this;
    }

    /**
     * Gets is_customer_default
     *
     * @return bool
     */
    public function getIsCustomerDefault()
    {
        return $this->container['is_customer_default'];
    }

    /**
     * Sets is_customer_default
     *
     * @param bool $is_customer_default is_customer_default
     *
     * @return self
     */
    public function setIsCustomerDefault($is_customer_default)
    {
        if (is_null($is_customer_default)) {
            throw new \InvalidArgumentException('non-nullable is_customer_default cannot be null');
        }
        $this->container['is_customer_default'] = $is_customer_default;

        return $this;
    }

    /**
     * Gets is_vendor_default
     *
     * @return bool
     */
    public function getIsVendorDefault()
    {
        return $this->container['is_vendor_default'];
    }

    /**
     * Sets is_vendor_default
     *
     * @param bool $is_vendor_default is_vendor_default
     *
     * @return self
     */
    public function setIsVendorDefault($is_vendor_default)
    {
        if (is_null($is_vendor_default)) {
            throw new \InvalidArgumentException('non-nullable is_vendor_default cannot be null');
        }
        $this->container['is_vendor_default'] = $is_vendor_default;

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
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets in_use
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['in_use'];
    }

    /**
     * Sets in_use
     *
     * @param bool|null $in_use in_use
     *
     * @return self
     */
    public function setInUse($in_use)
    {
        if (is_null($in_use)) {
            array_push($this->openAPINullablesSetToNull, 'in_use');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_use', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_use'] = $in_use;

        return $this;
    }

    /**
     * Gets payment_term_penalty_model
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentTermPenaltyAPIModel
     */
    public function getPaymentTermPenaltyModel()
    {
        return $this->container['payment_term_penalty_model'];
    }

    /**
     * Sets payment_term_penalty_model
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentTermPenaltyAPIModel $payment_term_penalty_model payment_term_penalty_model
     *
     * @return self
     */
    public function setPaymentTermPenaltyModel($payment_term_penalty_model)
    {
        if (is_null($payment_term_penalty_model)) {
            throw new \InvalidArgumentException('non-nullable payment_term_penalty_model cannot be null');
        }
        $this->container['payment_term_penalty_model'] = $payment_term_penalty_model;

        return $this;
    }

    /**
     * Gets payment_term_discount_model
     *
     * @return \CompWright\ServiceTitan\Model\AccountingV2PaymentTermDiscountAPIModel
     */
    public function getPaymentTermDiscountModel()
    {
        return $this->container['payment_term_discount_model'];
    }

    /**
     * Sets payment_term_discount_model
     *
     * @param \CompWright\ServiceTitan\Model\AccountingV2PaymentTermDiscountAPIModel $payment_term_discount_model payment_term_discount_model
     *
     * @return self
     */
    public function setPaymentTermDiscountModel($payment_term_discount_model)
    {
        if (is_null($payment_term_discount_model)) {
            throw new \InvalidArgumentException('non-nullable payment_term_discount_model cannot be null');
        }
        $this->container['payment_term_discount_model'] = $payment_term_discount_model;

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


