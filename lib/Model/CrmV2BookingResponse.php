<?php
/**
 * CrmV2BookingResponse
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
 * CrmV2BookingResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CrmV2BookingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Crm.V2.BookingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'source' => 'string',
        'created_on' => '\DateTime',
        'name' => 'string',
        'address' => 'OneOfCrmV2AddressModel',
        'customer_type' => 'OneOfCrmV2CustomerType',
        'start' => '\DateTime',
        'summary' => 'string',
        'campaign_id' => 'int',
        'business_unit_id' => 'int',
        'is_first_time_client' => 'bool',
        'uploaded_images' => 'string[]',
        'is_send_confirmation_email' => 'bool',
        'status' => 'OneOfCrmV2BookingStatus',
        'dismissing_reason_id' => 'int',
        'job_id' => 'int',
        'external_id' => 'string',
        'priority' => 'OneOfCrmV2Priority',
        'job_type_id' => 'int',
        'booking_provider_id' => 'int',
        'modified_on' => '\DateTime'
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
        'source' => null,
        'created_on' => 'date-time',
        'name' => null,
        'address' => null,
        'customer_type' => null,
        'start' => 'date-time',
        'summary' => null,
        'campaign_id' => 'int64',
        'business_unit_id' => 'int64',
        'is_first_time_client' => null,
        'uploaded_images' => null,
        'is_send_confirmation_email' => null,
        'status' => null,
        'dismissing_reason_id' => 'int64',
        'job_id' => 'int64',
        'external_id' => null,
        'priority' => null,
        'job_type_id' => 'int64',
        'booking_provider_id' => 'int64',
        'modified_on' => 'date-time'
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
        'id' => 'id',
        'source' => 'source',
        'created_on' => 'createdOn',
        'name' => 'name',
        'address' => 'address',
        'customer_type' => 'customerType',
        'start' => 'start',
        'summary' => 'summary',
        'campaign_id' => 'campaignId',
        'business_unit_id' => 'businessUnitId',
        'is_first_time_client' => 'isFirstTimeClient',
        'uploaded_images' => 'uploadedImages',
        'is_send_confirmation_email' => 'isSendConfirmationEmail',
        'status' => 'status',
        'dismissing_reason_id' => 'dismissingReasonId',
        'job_id' => 'jobId',
        'external_id' => 'externalId',
        'priority' => 'priority',
        'job_type_id' => 'jobTypeId',
        'booking_provider_id' => 'bookingProviderId',
        'modified_on' => 'modifiedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source' => 'setSource',
        'created_on' => 'setCreatedOn',
        'name' => 'setName',
        'address' => 'setAddress',
        'customer_type' => 'setCustomerType',
        'start' => 'setStart',
        'summary' => 'setSummary',
        'campaign_id' => 'setCampaignId',
        'business_unit_id' => 'setBusinessUnitId',
        'is_first_time_client' => 'setIsFirstTimeClient',
        'uploaded_images' => 'setUploadedImages',
        'is_send_confirmation_email' => 'setIsSendConfirmationEmail',
        'status' => 'setStatus',
        'dismissing_reason_id' => 'setDismissingReasonId',
        'job_id' => 'setJobId',
        'external_id' => 'setExternalId',
        'priority' => 'setPriority',
        'job_type_id' => 'setJobTypeId',
        'booking_provider_id' => 'setBookingProviderId',
        'modified_on' => 'setModifiedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source' => 'getSource',
        'created_on' => 'getCreatedOn',
        'name' => 'getName',
        'address' => 'getAddress',
        'customer_type' => 'getCustomerType',
        'start' => 'getStart',
        'summary' => 'getSummary',
        'campaign_id' => 'getCampaignId',
        'business_unit_id' => 'getBusinessUnitId',
        'is_first_time_client' => 'getIsFirstTimeClient',
        'uploaded_images' => 'getUploadedImages',
        'is_send_confirmation_email' => 'getIsSendConfirmationEmail',
        'status' => 'getStatus',
        'dismissing_reason_id' => 'getDismissingReasonId',
        'job_id' => 'getJobId',
        'external_id' => 'getExternalId',
        'priority' => 'getPriority',
        'job_type_id' => 'getJobTypeId',
        'booking_provider_id' => 'getBookingProviderId',
        'modified_on' => 'getModifiedOn'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['business_unit_id'] = $data['business_unit_id'] ?? null;
        $this->container['is_first_time_client'] = $data['is_first_time_client'] ?? null;
        $this->container['uploaded_images'] = $data['uploaded_images'] ?? null;
        $this->container['is_send_confirmation_email'] = $data['is_send_confirmation_email'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['dismissing_reason_id'] = $data['dismissing_reason_id'] ?? null;
        $this->container['job_id'] = $data['job_id'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['job_type_id'] = $data['job_type_id'] ?? null;
        $this->container['booking_provider_id'] = $data['booking_provider_id'] ?? null;
        $this->container['modified_on'] = $data['modified_on'] ?? null;
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
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['booking_provider_id'] === null) {
            $invalidProperties[] = "'booking_provider_id' can't be null";
        }
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
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
     * @param int $id ID of the booking
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source of the booking
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on when the booking was created
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * @param string $name Name of the booking's customer
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return OneOfCrmV2AddressModel|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param OneOfCrmV2AddressModel|null $address Address of the booking
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return OneOfCrmV2CustomerType|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param OneOfCrmV2CustomerType|null $customer_type Type of customer (Residential/Commercial)
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;

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
     * @param \DateTime $start Booking's start date time, in UTC
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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
     * @param string|null $summary Booking summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * @param int|null $campaign_id ID of the booking's campaign
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
     * @param int|null $business_unit_id ID of the booking's business unit
     *
     * @return self
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets is_first_time_client
     *
     * @return bool|null
     */
    public function getIsFirstTimeClient()
    {
        return $this->container['is_first_time_client'];
    }

    /**
     * Sets is_first_time_client
     *
     * @param bool|null $is_first_time_client Returns true if first time client
     *
     * @return self
     */
    public function setIsFirstTimeClient($is_first_time_client)
    {
        $this->container['is_first_time_client'] = $is_first_time_client;

        return $this;
    }

    /**
     * Gets uploaded_images
     *
     * @return string[]|null
     */
    public function getUploadedImages()
    {
        return $this->container['uploaded_images'];
    }

    /**
     * Sets uploaded_images
     *
     * @param string[]|null $uploaded_images Uploaded images
     *
     * @return self
     */
    public function setUploadedImages($uploaded_images)
    {
        $this->container['uploaded_images'] = $uploaded_images;

        return $this;
    }

    /**
     * Gets is_send_confirmation_email
     *
     * @return bool|null
     */
    public function getIsSendConfirmationEmail()
    {
        return $this->container['is_send_confirmation_email'];
    }

    /**
     * Sets is_send_confirmation_email
     *
     * @param bool|null $is_send_confirmation_email Returns true if customer should receive email when booking is created
     *
     * @return self
     */
    public function setIsSendConfirmationEmail($is_send_confirmation_email)
    {
        $this->container['is_send_confirmation_email'] = $is_send_confirmation_email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return OneOfCrmV2BookingStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param OneOfCrmV2BookingStatus $status Booking status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets dismissing_reason_id
     *
     * @return int|null
     */
    public function getDismissingReasonId()
    {
        return $this->container['dismissing_reason_id'];
    }

    /**
     * Sets dismissing_reason_id
     *
     * @param int|null $dismissing_reason_id ID of the reason booking was dismissed
     *
     * @return self
     */
    public function setDismissingReasonId($dismissing_reason_id)
    {
        $this->container['dismissing_reason_id'] = $dismissing_reason_id;

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
     * @param int|null $job_id ID of the job booked from the booking
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id External ID of booking
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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
     * @param OneOfCrmV2Priority|null $priority Booking priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * @param int|null $job_type_id ID of the booking's job type
     *
     * @return self
     */
    public function setJobTypeId($job_type_id)
    {
        $this->container['job_type_id'] = $job_type_id;

        return $this;
    }

    /**
     * Gets booking_provider_id
     *
     * @return int
     */
    public function getBookingProviderId()
    {
        return $this->container['booking_provider_id'];
    }

    /**
     * Sets booking_provider_id
     *
     * @param int $booking_provider_id Booking provider id
     *
     * @return self
     */
    public function setBookingProviderId($booking_provider_id)
    {
        $this->container['booking_provider_id'] = $booking_provider_id;

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
     * @param \DateTime $modified_on When the booking was modified
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

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


