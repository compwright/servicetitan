<?php
/**
 * CrmV2JobCreateRequest
 *
 * PHP version 7.4
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
 * CrmV2JobCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CrmV2JobCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Crm.V2.JobCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'location_id' => 'int',
        'business_unit_id' => 'int',
        'job_type_id' => 'int',
        'priority' => 'string',
        'campaign_id' => 'int',
        'appointments' => '\CompWright\ServiceTitan\Model\CrmV2AppointmentInformation[]',
        'summary' => 'string',
        'custom_fields' => '\CompWright\ServiceTitan\Model\CrmV2CustomFieldModel[]',
        'tag_type_ids' => 'int[]',
        'external_data' => '\CompWright\ServiceTitan\Model\CrmV2JobCreateRequestExternalData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => 'int64',
        'location_id' => 'int64',
        'business_unit_id' => 'int64',
        'job_type_id' => 'int64',
        'priority' => null,
        'campaign_id' => 'int64',
        'appointments' => null,
        'summary' => null,
        'custom_fields' => null,
        'tag_type_ids' => 'int64',
        'external_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_id' => false,
        'location_id' => false,
        'business_unit_id' => false,
        'job_type_id' => false,
        'priority' => false,
        'campaign_id' => false,
        'appointments' => false,
        'summary' => true,
        'custom_fields' => true,
        'tag_type_ids' => true,
        'external_data' => true
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
        'customer_id' => 'customerId',
        'location_id' => 'locationId',
        'business_unit_id' => 'businessUnitId',
        'job_type_id' => 'jobTypeId',
        'priority' => 'priority',
        'campaign_id' => 'campaignId',
        'appointments' => 'appointments',
        'summary' => 'summary',
        'custom_fields' => 'customFields',
        'tag_type_ids' => 'tagTypeIds',
        'external_data' => 'externalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'location_id' => 'setLocationId',
        'business_unit_id' => 'setBusinessUnitId',
        'job_type_id' => 'setJobTypeId',
        'priority' => 'setPriority',
        'campaign_id' => 'setCampaignId',
        'appointments' => 'setAppointments',
        'summary' => 'setSummary',
        'custom_fields' => 'setCustomFields',
        'tag_type_ids' => 'setTagTypeIds',
        'external_data' => 'setExternalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'location_id' => 'getLocationId',
        'business_unit_id' => 'getBusinessUnitId',
        'job_type_id' => 'getJobTypeId',
        'priority' => 'getPriority',
        'campaign_id' => 'getCampaignId',
        'appointments' => 'getAppointments',
        'summary' => 'getSummary',
        'custom_fields' => 'getCustomFields',
        'tag_type_ids' => 'getTagTypeIds',
        'external_data' => 'getExternalData'
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
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('business_unit_id', $data ?? [], null);
        $this->setIfExists('job_type_id', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('appointments', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('tag_type_ids', $data ?? [], null);
        $this->setIfExists('external_data', $data ?? [], null);
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

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['business_unit_id'] === null) {
            $invalidProperties[] = "'business_unit_id' can't be null";
        }
        if ($this->container['job_type_id'] === null) {
            $invalidProperties[] = "'job_type_id' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['appointments'] === null) {
            $invalidProperties[] = "'appointments' can't be null";
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
     * @param int $customer_id ID of the job's customer
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

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
     * @param int $location_id ID of the job's location
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

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
     * @param int $business_unit_id ID of the job's business unit
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
     * Gets job_type_id
     *
     * @return int
     */
    public function getJobTypeId()
    {
        return $this->container['job_type_id'];
    }

    /**
     * Sets job_type_id
     *
     * @param int $job_type_id ID of job type
     *
     * @return self
     */
    public function setJobTypeId($job_type_id)
    {
        if (is_null($job_type_id)) {
            throw new \InvalidArgumentException('non-nullable job_type_id cannot be null');
        }
        $this->container['job_type_id'] = $job_type_id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority Priority of the job
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
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id ID of the job's campaign
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets appointments
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2AppointmentInformation[]
     */
    public function getAppointments()
    {
        return $this->container['appointments'];
    }

    /**
     * Sets appointments
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2AppointmentInformation[] $appointments List of appointment information
     *
     * @return self
     */
    public function setAppointments($appointments)
    {
        if (is_null($appointments)) {
            throw new \InvalidArgumentException('non-nullable appointments cannot be null');
        }
        $this->container['appointments'] = $appointments;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary Job summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            array_push($this->openAPINullablesSetToNull, 'summary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('summary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2CustomFieldModel[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2CustomFieldModel[]|null $custom_fields Custom fields on the job
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            array_push($this->openAPINullablesSetToNull, 'custom_fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets tag_type_ids
     *
     * @return int[]|null
     */
    public function getTagTypeIds()
    {
        return $this->container['tag_type_ids'];
    }

    /**
     * Sets tag_type_ids
     *
     * @param int[]|null $tag_type_ids List of IDs of tags on the job
     *
     * @return self
     */
    public function setTagTypeIds($tag_type_ids)
    {
        if (is_null($tag_type_ids)) {
            array_push($this->openAPINullablesSetToNull, 'tag_type_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tag_type_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tag_type_ids'] = $tag_type_ids;

        return $this;
    }

    /**
     * Gets external_data
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobCreateRequestExternalData|null
     */
    public function getExternalData()
    {
        return $this->container['external_data'];
    }

    /**
     * Sets external_data
     *
     * @param \CompWright\ServiceTitan\Model\CrmV2JobCreateRequestExternalData|null $external_data external_data
     *
     * @return self
     */
    public function setExternalData($external_data)
    {
        if (is_null($external_data)) {
            array_push($this->openAPINullablesSetToNull, 'external_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_data'] = $external_data;

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


