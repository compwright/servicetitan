<?php
/**
 * EstimatesV2EstimateResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sales & Estimates
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
 * EstimatesV2EstimateResponse Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EstimatesV2EstimateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Estimates.V2.EstimateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'job_id' => 'int',
        'project_id' => 'int',
        'name' => 'string',
        'job_number' => 'string',
        'status' => '\CompWright\ServiceTitan\Model\EstimatesV2EstimateResponseStatus',
        'summary' => 'string',
        'modified_on' => '\DateTime',
        'sold_on' => '\DateTime',
        'sold_by' => 'int',
        'active' => 'bool',
        'items' => '\CompWright\ServiceTitan\Model\EstimatesV2EstimateItemResponse[]',
        'external_links' => '\CompWright\ServiceTitan\Model\EstimatesV2ExternalLinkResponse[]'
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
        'job_id' => 'int64',
        'project_id' => 'int64',
        'name' => null,
        'job_number' => null,
        'status' => null,
        'summary' => null,
        'modified_on' => 'date-time',
        'sold_on' => 'date-time',
        'sold_by' => 'int64',
        'active' => null,
        'items' => null,
        'external_links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'job_id' => true,
        'project_id' => true,
        'name' => true,
        'job_number' => true,
        'status' => true,
        'summary' => true,
        'modified_on' => false,
        'sold_on' => true,
        'sold_by' => true,
        'active' => false,
        'items' => true,
        'external_links' => true
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
        'job_id' => 'jobId',
        'project_id' => 'projectId',
        'name' => 'name',
        'job_number' => 'jobNumber',
        'status' => 'status',
        'summary' => 'summary',
        'modified_on' => 'modifiedOn',
        'sold_on' => 'soldOn',
        'sold_by' => 'soldBy',
        'active' => 'active',
        'items' => 'items',
        'external_links' => 'externalLinks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'job_id' => 'setJobId',
        'project_id' => 'setProjectId',
        'name' => 'setName',
        'job_number' => 'setJobNumber',
        'status' => 'setStatus',
        'summary' => 'setSummary',
        'modified_on' => 'setModifiedOn',
        'sold_on' => 'setSoldOn',
        'sold_by' => 'setSoldBy',
        'active' => 'setActive',
        'items' => 'setItems',
        'external_links' => 'setExternalLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'job_id' => 'getJobId',
        'project_id' => 'getProjectId',
        'name' => 'getName',
        'job_number' => 'getJobNumber',
        'status' => 'getStatus',
        'summary' => 'getSummary',
        'modified_on' => 'getModifiedOn',
        'sold_on' => 'getSoldOn',
        'sold_by' => 'getSoldBy',
        'active' => 'getActive',
        'items' => 'getItems',
        'external_links' => 'getExternalLinks'
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
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('job_number', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('modified_on', $data ?? [], null);
        $this->setIfExists('sold_on', $data ?? [], null);
        $this->setIfExists('sold_by', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('external_links', $data ?? [], null);
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
        if ($this->container['modified_on'] === null) {
            $invalidProperties[] = "'modified_on' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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
     * Gets project_id
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int|null $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            array_push($this->openAPINullablesSetToNull, 'project_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('project_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['project_id'] = $project_id;

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
     * Gets job_number
     *
     * @return string|null
     */
    public function getJobNumber()
    {
        return $this->container['job_number'];
    }

    /**
     * Sets job_number
     *
     * @param string|null $job_number job_number
     *
     * @return self
     */
    public function setJobNumber($job_number)
    {
        if (is_null($job_number)) {
            array_push($this->openAPINullablesSetToNull, 'job_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('job_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['job_number'] = $job_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponseStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \CompWright\ServiceTitan\Model\EstimatesV2EstimateResponseStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

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
     * @param string|null $summary summary
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
     * Gets sold_on
     *
     * @return \DateTime|null
     */
    public function getSoldOn()
    {
        return $this->container['sold_on'];
    }

    /**
     * Sets sold_on
     *
     * @param \DateTime|null $sold_on sold_on
     *
     * @return self
     */
    public function setSoldOn($sold_on)
    {
        if (is_null($sold_on)) {
            array_push($this->openAPINullablesSetToNull, 'sold_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sold_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sold_on'] = $sold_on;

        return $this;
    }

    /**
     * Gets sold_by
     *
     * @return int|null
     */
    public function getSoldBy()
    {
        return $this->container['sold_by'];
    }

    /**
     * Sets sold_by
     *
     * @param int|null $sold_by sold_by
     *
     * @return self
     */
    public function setSoldBy($sold_by)
    {
        if (is_null($sold_by)) {
            array_push($this->openAPINullablesSetToNull, 'sold_by');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sold_by', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sold_by'] = $sold_by;

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
     * Gets items
     *
     * @return \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemResponse[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \CompWright\ServiceTitan\Model\EstimatesV2EstimateItemResponse[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            array_push($this->openAPINullablesSetToNull, 'items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets external_links
     *
     * @return \CompWright\ServiceTitan\Model\EstimatesV2ExternalLinkResponse[]|null
     */
    public function getExternalLinks()
    {
        return $this->container['external_links'];
    }

    /**
     * Sets external_links
     *
     * @param \CompWright\ServiceTitan\Model\EstimatesV2ExternalLinkResponse[]|null $external_links external_links
     *
     * @return self
     */
    public function setExternalLinks($external_links)
    {
        if (is_null($external_links)) {
            array_push($this->openAPINullablesSetToNull, 'external_links');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_links', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_links'] = $external_links;

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


