<?php
/**
 * TaskManagementV2TaskCreateRequest
 *
 * PHP version 7.4
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
 * TaskManagementV2TaskCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TaskManagementV2TaskCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskManagement.V2.TaskCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reported_by_id' => 'int',
        'assigned_to_id' => 'int',
        'is_closed' => 'bool',
        'name' => 'string',
        'business_unit_id' => 'int',
        'employee_task_type_id' => 'int',
        'employee_task_source_id' => 'int',
        'employee_task_resolution_id' => 'int',
        'reported_date' => '\DateTime',
        'complete_by' => '\DateTime',
        'involved_employee_id_list' => 'int[]',
        'customer_id' => 'int',
        'job_id' => 'int',
        'description' => 'string',
        'priority' => '\CompWright\ServiceTitan\Model\TaskManagementV2TaskPriority'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reported_by_id' => 'int64',
        'assigned_to_id' => 'int64',
        'is_closed' => null,
        'name' => null,
        'business_unit_id' => 'int64',
        'employee_task_type_id' => 'int64',
        'employee_task_source_id' => 'int64',
        'employee_task_resolution_id' => 'int64',
        'reported_date' => 'date-time',
        'complete_by' => 'date-time',
        'involved_employee_id_list' => 'int64',
        'customer_id' => 'int64',
        'job_id' => 'int64',
        'description' => null,
        'priority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reported_by_id' => false,
        'assigned_to_id' => false,
        'is_closed' => false,
        'name' => false,
        'business_unit_id' => false,
        'employee_task_type_id' => false,
        'employee_task_source_id' => false,
        'employee_task_resolution_id' => true,
        'reported_date' => false,
        'complete_by' => true,
        'involved_employee_id_list' => true,
        'customer_id' => true,
        'job_id' => true,
        'description' => true,
        'priority' => false
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
        'reported_by_id' => 'reportedById',
        'assigned_to_id' => 'assignedToId',
        'is_closed' => 'isClosed',
        'name' => 'name',
        'business_unit_id' => 'businessUnitId',
        'employee_task_type_id' => 'employeeTaskTypeId',
        'employee_task_source_id' => 'employeeTaskSourceId',
        'employee_task_resolution_id' => 'employeeTaskResolutionId',
        'reported_date' => 'reportedDate',
        'complete_by' => 'completeBy',
        'involved_employee_id_list' => 'involvedEmployeeIdList',
        'customer_id' => 'customerId',
        'job_id' => 'jobId',
        'description' => 'description',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reported_by_id' => 'setReportedById',
        'assigned_to_id' => 'setAssignedToId',
        'is_closed' => 'setIsClosed',
        'name' => 'setName',
        'business_unit_id' => 'setBusinessUnitId',
        'employee_task_type_id' => 'setEmployeeTaskTypeId',
        'employee_task_source_id' => 'setEmployeeTaskSourceId',
        'employee_task_resolution_id' => 'setEmployeeTaskResolutionId',
        'reported_date' => 'setReportedDate',
        'complete_by' => 'setCompleteBy',
        'involved_employee_id_list' => 'setInvolvedEmployeeIdList',
        'customer_id' => 'setCustomerId',
        'job_id' => 'setJobId',
        'description' => 'setDescription',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reported_by_id' => 'getReportedById',
        'assigned_to_id' => 'getAssignedToId',
        'is_closed' => 'getIsClosed',
        'name' => 'getName',
        'business_unit_id' => 'getBusinessUnitId',
        'employee_task_type_id' => 'getEmployeeTaskTypeId',
        'employee_task_source_id' => 'getEmployeeTaskSourceId',
        'employee_task_resolution_id' => 'getEmployeeTaskResolutionId',
        'reported_date' => 'getReportedDate',
        'complete_by' => 'getCompleteBy',
        'involved_employee_id_list' => 'getInvolvedEmployeeIdList',
        'customer_id' => 'getCustomerId',
        'job_id' => 'getJobId',
        'description' => 'getDescription',
        'priority' => 'getPriority'
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
        $this->setIfExists('reported_by_id', $data ?? [], null);
        $this->setIfExists('assigned_to_id', $data ?? [], null);
        $this->setIfExists('is_closed', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('business_unit_id', $data ?? [], null);
        $this->setIfExists('employee_task_type_id', $data ?? [], null);
        $this->setIfExists('employee_task_source_id', $data ?? [], null);
        $this->setIfExists('employee_task_resolution_id', $data ?? [], null);
        $this->setIfExists('reported_date', $data ?? [], null);
        $this->setIfExists('complete_by', $data ?? [], null);
        $this->setIfExists('involved_employee_id_list', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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

        if ($this->container['reported_by_id'] === null) {
            $invalidProperties[] = "'reported_by_id' can't be null";
        }
        if ($this->container['assigned_to_id'] === null) {
            $invalidProperties[] = "'assigned_to_id' can't be null";
        }
        if ($this->container['is_closed'] === null) {
            $invalidProperties[] = "'is_closed' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['business_unit_id'] === null) {
            $invalidProperties[] = "'business_unit_id' can't be null";
        }
        if ($this->container['employee_task_type_id'] === null) {
            $invalidProperties[] = "'employee_task_type_id' can't be null";
        }
        if ($this->container['employee_task_source_id'] === null) {
            $invalidProperties[] = "'employee_task_source_id' can't be null";
        }
        if ($this->container['reported_date'] === null) {
            $invalidProperties[] = "'reported_date' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
     * Gets reported_by_id
     *
     * @return int
     */
    public function getReportedById()
    {
        return $this->container['reported_by_id'];
    }

    /**
     * Sets reported_by_id
     *
     * @param int $reported_by_id reported_by_id
     *
     * @return self
     */
    public function setReportedById($reported_by_id)
    {
        if (is_null($reported_by_id)) {
            throw new \InvalidArgumentException('non-nullable reported_by_id cannot be null');
        }
        $this->container['reported_by_id'] = $reported_by_id;

        return $this;
    }

    /**
     * Gets assigned_to_id
     *
     * @return int
     */
    public function getAssignedToId()
    {
        return $this->container['assigned_to_id'];
    }

    /**
     * Sets assigned_to_id
     *
     * @param int $assigned_to_id assigned_to_id
     *
     * @return self
     */
    public function setAssignedToId($assigned_to_id)
    {
        if (is_null($assigned_to_id)) {
            throw new \InvalidArgumentException('non-nullable assigned_to_id cannot be null');
        }
        $this->container['assigned_to_id'] = $assigned_to_id;

        return $this;
    }

    /**
     * Gets is_closed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->container['is_closed'];
    }

    /**
     * Sets is_closed
     *
     * @param bool $is_closed is_closed
     *
     * @return self
     */
    public function setIsClosed($is_closed)
    {
        if (is_null($is_closed)) {
            throw new \InvalidArgumentException('non-nullable is_closed cannot be null');
        }
        $this->container['is_closed'] = $is_closed;

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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets business_unit_id
     *
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     *
     * @param int $business_unit_id business_unit_id
     *
     * @return self
     */
    public function setBusinessUnitId($business_unit_id)
    {
        if (is_null($business_unit_id)) {
            throw new \InvalidArgumentException('non-nullable business_unit_id cannot be null');
        }
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets employee_task_type_id
     *
     * @return int
     */
    public function getEmployeeTaskTypeId()
    {
        return $this->container['employee_task_type_id'];
    }

    /**
     * Sets employee_task_type_id
     *
     * @param int $employee_task_type_id employee_task_type_id
     *
     * @return self
     */
    public function setEmployeeTaskTypeId($employee_task_type_id)
    {
        if (is_null($employee_task_type_id)) {
            throw new \InvalidArgumentException('non-nullable employee_task_type_id cannot be null');
        }
        $this->container['employee_task_type_id'] = $employee_task_type_id;

        return $this;
    }

    /**
     * Gets employee_task_source_id
     *
     * @return int
     */
    public function getEmployeeTaskSourceId()
    {
        return $this->container['employee_task_source_id'];
    }

    /**
     * Sets employee_task_source_id
     *
     * @param int $employee_task_source_id employee_task_source_id
     *
     * @return self
     */
    public function setEmployeeTaskSourceId($employee_task_source_id)
    {
        if (is_null($employee_task_source_id)) {
            throw new \InvalidArgumentException('non-nullable employee_task_source_id cannot be null');
        }
        $this->container['employee_task_source_id'] = $employee_task_source_id;

        return $this;
    }

    /**
     * Gets employee_task_resolution_id
     *
     * @return int|null
     */
    public function getEmployeeTaskResolutionId()
    {
        return $this->container['employee_task_resolution_id'];
    }

    /**
     * Sets employee_task_resolution_id
     *
     * @param int|null $employee_task_resolution_id employee_task_resolution_id
     *
     * @return self
     */
    public function setEmployeeTaskResolutionId($employee_task_resolution_id)
    {
        if (is_null($employee_task_resolution_id)) {
            array_push($this->openAPINullablesSetToNull, 'employee_task_resolution_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employee_task_resolution_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employee_task_resolution_id'] = $employee_task_resolution_id;

        return $this;
    }

    /**
     * Gets reported_date
     *
     * @return \DateTime
     */
    public function getReportedDate()
    {
        return $this->container['reported_date'];
    }

    /**
     * Sets reported_date
     *
     * @param \DateTime $reported_date reported_date
     *
     * @return self
     */
    public function setReportedDate($reported_date)
    {
        if (is_null($reported_date)) {
            throw new \InvalidArgumentException('non-nullable reported_date cannot be null');
        }
        $this->container['reported_date'] = $reported_date;

        return $this;
    }

    /**
     * Gets complete_by
     *
     * @return \DateTime|null
     */
    public function getCompleteBy()
    {
        return $this->container['complete_by'];
    }

    /**
     * Sets complete_by
     *
     * @param \DateTime|null $complete_by complete_by
     *
     * @return self
     */
    public function setCompleteBy($complete_by)
    {
        if (is_null($complete_by)) {
            array_push($this->openAPINullablesSetToNull, 'complete_by');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('complete_by', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['complete_by'] = $complete_by;

        return $this;
    }

    /**
     * Gets involved_employee_id_list
     *
     * @return int[]|null
     */
    public function getInvolvedEmployeeIdList()
    {
        return $this->container['involved_employee_id_list'];
    }

    /**
     * Sets involved_employee_id_list
     *
     * @param int[]|null $involved_employee_id_list involved_employee_id_list
     *
     * @return self
     */
    public function setInvolvedEmployeeIdList($involved_employee_id_list)
    {
        if (is_null($involved_employee_id_list)) {
            array_push($this->openAPINullablesSetToNull, 'involved_employee_id_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('involved_employee_id_list', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['involved_employee_id_list'] = $involved_employee_id_list;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

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
     * Gets priority
     *
     * @return \CompWright\ServiceTitan\Model\TaskManagementV2TaskPriority
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \CompWright\ServiceTitan\Model\TaskManagementV2TaskPriority $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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


