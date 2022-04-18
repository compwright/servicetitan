<?php
/**
 * CrmV2LeadCreateRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM
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
 * CrmV2LeadCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CrmV2LeadCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Crm.V2.LeadCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'location_id' => 'int',
        'campaign_id' => 'int',
        'business_unit_id' => 'int',
        'job_type_id' => 'int',
        'summary' => 'string',
        'tag_type_ids' => 'int[]',
        'priority' => 'OneOfCrmV2Priority',
        'call_reason_id' => 'int',
        'follow_up_date' => '\DateTime'
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
        'campaign_id' => 'int64',
        'business_unit_id' => 'int64',
        'job_type_id' => 'int64',
        'summary' => null,
        'tag_type_ids' => 'int64',
        'priority' => null,
        'call_reason_id' => 'int64',
        'follow_up_date' => 'date-time'
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
        'customer_id' => 'customerId',
        'location_id' => 'locationId',
        'campaign_id' => 'campaignId',
        'business_unit_id' => 'businessUnitId',
        'job_type_id' => 'jobTypeId',
        'summary' => 'summary',
        'tag_type_ids' => 'tagTypeIds',
        'priority' => 'priority',
        'call_reason_id' => 'callReasonId',
        'follow_up_date' => 'followUpDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'location_id' => 'setLocationId',
        'campaign_id' => 'setCampaignId',
        'business_unit_id' => 'setBusinessUnitId',
        'job_type_id' => 'setJobTypeId',
        'summary' => 'setSummary',
        'tag_type_ids' => 'setTagTypeIds',
        'priority' => 'setPriority',
        'call_reason_id' => 'setCallReasonId',
        'follow_up_date' => 'setFollowUpDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'location_id' => 'getLocationId',
        'campaign_id' => 'getCampaignId',
        'business_unit_id' => 'getBusinessUnitId',
        'job_type_id' => 'getJobTypeId',
        'summary' => 'getSummary',
        'tag_type_ids' => 'getTagTypeIds',
        'priority' => 'getPriority',
        'call_reason_id' => 'getCallReasonId',
        'follow_up_date' => 'getFollowUpDate'
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['business_unit_id'] = $data['business_unit_id'] ?? null;
        $this->container['job_type_id'] = $data['job_type_id'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['tag_type_ids'] = $data['tag_type_ids'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['call_reason_id'] = $data['call_reason_id'] ?? null;
        $this->container['follow_up_date'] = $data['follow_up_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
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
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id ID of the customer
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id ID of the location
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
     * @param int $campaign_id ID of the campaign
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets business_unit_id
     *
     * @return int|null
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     *
     * @param int|null $business_unit_id ID of the business unit
     *
     * @return self
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets job_type_id
     *
     * @return int|null
     */
    public function getJobTypeId()
    {
        return $this->container['job_type_id'];
    }

    /**
     * Sets job_type_id
     *
     * @param int|null $job_type_id ID of job type
     *
     * @return self
     */
    public function setJobTypeId($job_type_id)
    {
        $this->container['job_type_id'] = $job_type_id;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary Lead summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * @param int[]|null $tag_type_ids List of IDs of tags on the lead
     *
     * @return self
     */
    public function setTagTypeIds($tag_type_ids)
    {
        $this->container['tag_type_ids'] = $tag_type_ids;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return OneOfCrmV2Priority|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param OneOfCrmV2Priority|null $priority Priority of the lead
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets call_reason_id
     *
     * @return int|null
     */
    public function getCallReasonId()
    {
        return $this->container['call_reason_id'];
    }

    /**
     * Sets call_reason_id
     *
     * @param int|null $call_reason_id ID of the call reason
     *
     * @return self
     */
    public function setCallReasonId($call_reason_id)
    {
        $this->container['call_reason_id'] = $call_reason_id;

        return $this;
    }

    /**
     * Gets follow_up_date
     *
     * @return \DateTime|null
     */
    public function getFollowUpDate()
    {
        return $this->container['follow_up_date'];
    }

    /**
     * Sets follow_up_date
     *
     * @param \DateTime|null $follow_up_date Date of when to follow up
     *
     * @return self
     */
    public function setFollowUpDate($follow_up_date)
    {
        $this->container['follow_up_date'] = $follow_up_date;

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

