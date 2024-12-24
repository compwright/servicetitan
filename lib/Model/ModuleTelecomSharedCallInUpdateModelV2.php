<?php
/**
 * ModuleTelecomSharedCallInUpdateModelV2
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Telecom
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
 * ModuleTelecomSharedCallInUpdateModelV2 Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModuleTelecomSharedCallInUpdateModelV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Module.Telecom.Shared.CallInUpdateModelV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'call_id' => 'int',
        'call_type' => '\CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedCallModelCallType',
        'excuse_memo' => 'string',
        'campaign_id' => 'int',
        'job_id' => 'int',
        'agent_id' => 'int',
        'reason' => '\CompWright\ServiceTitan\Model\ModuleTelecomSharedReasonInModel',
        'customer' => '\CompWright\ServiceTitan\Model\CustomerInModel',
        'location' => '\CompWright\ServiceTitan\Model\LocationInModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'call_id' => 'int64',
        'call_type' => null,
        'excuse_memo' => null,
        'campaign_id' => 'int64',
        'job_id' => 'int64',
        'agent_id' => 'int64',
        'reason' => null,
        'customer' => null,
        'location' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'call_id' => true,
        'call_type' => true,
        'excuse_memo' => false,
        'campaign_id' => true,
        'job_id' => true,
        'agent_id' => true,
        'reason' => false,
        'customer' => false,
        'location' => false
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
        'call_id' => 'callId',
        'call_type' => 'callType',
        'excuse_memo' => 'excuseMemo',
        'campaign_id' => 'campaignId',
        'job_id' => 'jobId',
        'agent_id' => 'agentId',
        'reason' => 'reason',
        'customer' => 'customer',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_id' => 'setCallId',
        'call_type' => 'setCallType',
        'excuse_memo' => 'setExcuseMemo',
        'campaign_id' => 'setCampaignId',
        'job_id' => 'setJobId',
        'agent_id' => 'setAgentId',
        'reason' => 'setReason',
        'customer' => 'setCustomer',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_id' => 'getCallId',
        'call_type' => 'getCallType',
        'excuse_memo' => 'getExcuseMemo',
        'campaign_id' => 'getCampaignId',
        'job_id' => 'getJobId',
        'agent_id' => 'getAgentId',
        'reason' => 'getReason',
        'customer' => 'getCustomer',
        'location' => 'getLocation'
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
        $this->setIfExists('call_id', $data ?? [], null);
        $this->setIfExists('call_type', $data ?? [], null);
        $this->setIfExists('excuse_memo', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('agent_id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
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

        if ($this->container['excuse_memo'] === null) {
            $invalidProperties[] = "'excuse_memo' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
     * Gets call_id
     *
     * @return int|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param int|null $call_id call_id
     *
     * @return self
     */
    public function setCallId($call_id)
    {
        if (is_null($call_id)) {
            array_push($this->openAPINullablesSetToNull, 'call_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('call_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets call_type
     *
     * @return \CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedCallModelCallType|null
     */
    public function getCallType()
    {
        return $this->container['call_type'];
    }

    /**
     * Sets call_type
     *
     * @param \CompWright\ServiceTitan\Model\ModuleTelecomSharedDetailedCallModelCallType|null $call_type call_type
     *
     * @return self
     */
    public function setCallType($call_type)
    {
        if (is_null($call_type)) {
            array_push($this->openAPINullablesSetToNull, 'call_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('call_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['call_type'] = $call_type;

        return $this;
    }

    /**
     * Gets excuse_memo
     *
     * @return string
     */
    public function getExcuseMemo()
    {
        return $this->container['excuse_memo'];
    }

    /**
     * Sets excuse_memo
     *
     * @param string $excuse_memo excuse_memo
     *
     * @return self
     */
    public function setExcuseMemo($excuse_memo)
    {
        if (is_null($excuse_memo)) {
            throw new \InvalidArgumentException('non-nullable excuse_memo cannot be null');
        }
        $this->container['excuse_memo'] = $excuse_memo;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id campaign_id
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return int|null
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int|null $job_id job_id
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        if (is_null($job_id)) {
            array_push($this->openAPINullablesSetToNull, 'job_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('job_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets agent_id
     *
     * @return int|null
     */
    public function getAgentId()
    {
        return $this->container['agent_id'];
    }

    /**
     * Sets agent_id
     *
     * @param int|null $agent_id agent_id
     *
     * @return self
     */
    public function setAgentId($agent_id)
    {
        if (is_null($agent_id)) {
            array_push($this->openAPINullablesSetToNull, 'agent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('agent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['agent_id'] = $agent_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \CompWright\ServiceTitan\Model\ModuleTelecomSharedReasonInModel
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \CompWright\ServiceTitan\Model\ModuleTelecomSharedReasonInModel $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \CompWright\ServiceTitan\Model\CustomerInModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \CompWright\ServiceTitan\Model\CustomerInModel $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \CompWright\ServiceTitan\Model\LocationInModel
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \CompWright\ServiceTitan\Model\LocationInModel $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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

