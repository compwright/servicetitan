<?php
/**
 * TaskManagementV2ClientSideDataResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Task Management
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
 * TaskManagementV2ClientSideDataResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaskManagementV2ClientSideDataResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskManagement.V2.ClientSideDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employees' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideEmployeeResponse[]',
        'business_units' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideBusinessUnitResponse[]',
        'task_priorities' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskPriorityResponse[]',
        'task_resolution_types' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionTypeResponse[]',
        'task_statuses' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskStatusResponse[]',
        'task_types' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskTypeResponse[]',
        'task_sources' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskSourceResponse[]',
        'task_resolutions' => '\CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employees' => null,
        'business_units' => null,
        'task_priorities' => null,
        'task_resolution_types' => null,
        'task_statuses' => null,
        'task_types' => null,
        'task_sources' => null,
        'task_resolutions' => null
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
        'employees' => 'employees',
        'business_units' => 'businessUnits',
        'task_priorities' => 'taskPriorities',
        'task_resolution_types' => 'taskResolutionTypes',
        'task_statuses' => 'taskStatuses',
        'task_types' => 'taskTypes',
        'task_sources' => 'taskSources',
        'task_resolutions' => 'taskResolutions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employees' => 'setEmployees',
        'business_units' => 'setBusinessUnits',
        'task_priorities' => 'setTaskPriorities',
        'task_resolution_types' => 'setTaskResolutionTypes',
        'task_statuses' => 'setTaskStatuses',
        'task_types' => 'setTaskTypes',
        'task_sources' => 'setTaskSources',
        'task_resolutions' => 'setTaskResolutions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employees' => 'getEmployees',
        'business_units' => 'getBusinessUnits',
        'task_priorities' => 'getTaskPriorities',
        'task_resolution_types' => 'getTaskResolutionTypes',
        'task_statuses' => 'getTaskStatuses',
        'task_types' => 'getTaskTypes',
        'task_sources' => 'getTaskSources',
        'task_resolutions' => 'getTaskResolutions'
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
        $this->container['employees'] = $data['employees'] ?? null;
        $this->container['business_units'] = $data['business_units'] ?? null;
        $this->container['task_priorities'] = $data['task_priorities'] ?? null;
        $this->container['task_resolution_types'] = $data['task_resolution_types'] ?? null;
        $this->container['task_statuses'] = $data['task_statuses'] ?? null;
        $this->container['task_types'] = $data['task_types'] ?? null;
        $this->container['task_sources'] = $data['task_sources'] ?? null;
        $this->container['task_resolutions'] = $data['task_resolutions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employees'] === null) {
            $invalidProperties[] = "'employees' can't be null";
        }
        if ($this->container['business_units'] === null) {
            $invalidProperties[] = "'business_units' can't be null";
        }
        if ($this->container['task_priorities'] === null) {
            $invalidProperties[] = "'task_priorities' can't be null";
        }
        if ($this->container['task_resolution_types'] === null) {
            $invalidProperties[] = "'task_resolution_types' can't be null";
        }
        if ($this->container['task_statuses'] === null) {
            $invalidProperties[] = "'task_statuses' can't be null";
        }
        if ($this->container['task_types'] === null) {
            $invalidProperties[] = "'task_types' can't be null";
        }
        if ($this->container['task_sources'] === null) {
            $invalidProperties[] = "'task_sources' can't be null";
        }
        if ($this->container['task_resolutions'] === null) {
            $invalidProperties[] = "'task_resolutions' can't be null";
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
     * Gets employees
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideEmployeeResponse[]
     */
    public function getEmployees()
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideEmployeeResponse[] $employees employees
     *
     * @return self
     */
    public function setEmployees($employees)
    {
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets business_units
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideBusinessUnitResponse[]
     */
    public function getBusinessUnits()
    {
        return $this->container['business_units'];
    }

    /**
     * Sets business_units
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideBusinessUnitResponse[] $business_units business_units
     *
     * @return self
     */
    public function setBusinessUnits($business_units)
    {
        $this->container['business_units'] = $business_units;

        return $this;
    }

    /**
     * Gets task_priorities
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskPriorityResponse[]
     */
    public function getTaskPriorities()
    {
        return $this->container['task_priorities'];
    }

    /**
     * Sets task_priorities
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskPriorityResponse[] $task_priorities task_priorities
     *
     * @return self
     */
    public function setTaskPriorities($task_priorities)
    {
        $this->container['task_priorities'] = $task_priorities;

        return $this;
    }

    /**
     * Gets task_resolution_types
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionTypeResponse[]
     */
    public function getTaskResolutionTypes()
    {
        return $this->container['task_resolution_types'];
    }

    /**
     * Sets task_resolution_types
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionTypeResponse[] $task_resolution_types task_resolution_types
     *
     * @return self
     */
    public function setTaskResolutionTypes($task_resolution_types)
    {
        $this->container['task_resolution_types'] = $task_resolution_types;

        return $this;
    }

    /**
     * Gets task_statuses
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskStatusResponse[]
     */
    public function getTaskStatuses()
    {
        return $this->container['task_statuses'];
    }

    /**
     * Sets task_statuses
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskStatusResponse[] $task_statuses task_statuses
     *
     * @return self
     */
    public function setTaskStatuses($task_statuses)
    {
        $this->container['task_statuses'] = $task_statuses;

        return $this;
    }

    /**
     * Gets task_types
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskTypeResponse[]
     */
    public function getTaskTypes()
    {
        return $this->container['task_types'];
    }

    /**
     * Sets task_types
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskTypeResponse[] $task_types task_types
     *
     * @return self
     */
    public function setTaskTypes($task_types)
    {
        $this->container['task_types'] = $task_types;

        return $this;
    }

    /**
     * Gets task_sources
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskSourceResponse[]
     */
    public function getTaskSources()
    {
        return $this->container['task_sources'];
    }

    /**
     * Sets task_sources
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskSourceResponse[] $task_sources task_sources
     *
     * @return self
     */
    public function setTaskSources($task_sources)
    {
        $this->container['task_sources'] = $task_sources;

        return $this;
    }

    /**
     * Gets task_resolutions
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionResponse[]
     */
    public function getTaskResolutions()
    {
        return $this->container['task_resolutions'];
    }

    /**
     * Sets task_resolutions
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2ClientSideTaskResolutionResponse[] $task_resolutions task_resolutions
     *
     * @return self
     */
    public function setTaskResolutions($task_resolutions)
    {
        $this->container['task_resolutions'] = $task_resolutions;

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


