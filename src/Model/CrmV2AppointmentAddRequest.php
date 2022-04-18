<?php
/**
 * CrmV2AppointmentAddRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Job Planning and Management
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
 * CrmV2AppointmentAddRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CrmV2AppointmentAddRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Crm.V2.AppointmentAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'job_id' => 'int',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'arrival_window_start' => '\DateTime',
        'arrival_window_end' => '\DateTime',
        'technician_ids' => 'int[]',
        'special_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'job_id' => 'int64',
        'start' => 'date-time',
        'end' => 'date-time',
        'arrival_window_start' => 'date-time',
        'arrival_window_end' => 'date-time',
        'technician_ids' => 'int64',
        'special_instructions' => null
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
        'job_id' => 'jobId',
        'start' => 'start',
        'end' => 'end',
        'arrival_window_start' => 'arrivalWindowStart',
        'arrival_window_end' => 'arrivalWindowEnd',
        'technician_ids' => 'technicianIds',
        'special_instructions' => 'specialInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'job_id' => 'setJobId',
        'start' => 'setStart',
        'end' => 'setEnd',
        'arrival_window_start' => 'setArrivalWindowStart',
        'arrival_window_end' => 'setArrivalWindowEnd',
        'technician_ids' => 'setTechnicianIds',
        'special_instructions' => 'setSpecialInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'job_id' => 'getJobId',
        'start' => 'getStart',
        'end' => 'getEnd',
        'arrival_window_start' => 'getArrivalWindowStart',
        'arrival_window_end' => 'getArrivalWindowEnd',
        'technician_ids' => 'getTechnicianIds',
        'special_instructions' => 'getSpecialInstructions'
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
        $this->container['job_id'] = $data['job_id'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['arrival_window_start'] = $data['arrival_window_start'] ?? null;
        $this->container['arrival_window_end'] = $data['arrival_window_end'] ?? null;
        $this->container['technician_ids'] = $data['technician_ids'] ?? null;
        $this->container['special_instructions'] = $data['special_instructions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
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
     * Gets job_id
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int $job_id ID of job for new appointment
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start Start date/time (in UTC) of new appointment
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end End date/time (in UTC) of new appointment
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets arrival_window_start
     *
     * @return \DateTime|null
     */
    public function getArrivalWindowStart()
    {
        return $this->container['arrival_window_start'];
    }

    /**
     * Sets arrival_window_start
     *
     * @param \DateTime|null $arrival_window_start Arrival window start date/time (in UTC) for new appointment, if configured
     *
     * @return self
     */
    public function setArrivalWindowStart($arrival_window_start)
    {
        $this->container['arrival_window_start'] = $arrival_window_start;

        return $this;
    }

    /**
     * Gets arrival_window_end
     *
     * @return \DateTime|null
     */
    public function getArrivalWindowEnd()
    {
        return $this->container['arrival_window_end'];
    }

    /**
     * Sets arrival_window_end
     *
     * @param \DateTime|null $arrival_window_end Arrival window end date/time (in UTC) for new appointment, if configured
     *
     * @return self
     */
    public function setArrivalWindowEnd($arrival_window_end)
    {
        $this->container['arrival_window_end'] = $arrival_window_end;

        return $this;
    }

    /**
     * Gets technician_ids
     *
     * @return int[]|null
     */
    public function getTechnicianIds()
    {
        return $this->container['technician_ids'];
    }

    /**
     * Sets technician_ids
     *
     * @param int[]|null $technician_ids List of IDs of technicians to assign to new appointment
     *
     * @return self
     */
    public function setTechnicianIds($technician_ids)
    {
        $this->container['technician_ids'] = $technician_ids;

        return $this;
    }

    /**
     * Gets special_instructions
     *
     * @return string|null
     */
    public function getSpecialInstructions()
    {
        return $this->container['special_instructions'];
    }

    /**
     * Sets special_instructions
     *
     * @param string|null $special_instructions Special instructions associated to the appointment
     *
     * @return self
     */
    public function setSpecialInstructions($special_instructions)
    {
        $this->container['special_instructions'] = $special_instructions;

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

