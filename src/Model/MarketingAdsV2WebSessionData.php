<?php
/**
 * MarketingAdsV2WebSessionData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing Ads
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
 * MarketingAdsV2WebSessionData Class Doc Comment
 *
 * @category Class
 * @description Data from the web session used by the attribution system to determine the marketing campaign that led the user to this particular web session.
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MarketingAdsV2WebSessionData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketing.Ads.V2.WebSessionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'landing_page_url' => 'string',
        'referrer_url' => 'string',
        'gclid' => 'string',
        'fbclid' => 'string',
        'msclkid' => 'string',
        'utm_source' => 'string',
        'utm_medium' => 'string',
        'utm_campaign' => 'string',
        'utm_adgroup' => 'string',
        'utm_term' => 'string',
        'utm_content' => 'string',
        'google_analytics_client_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'landing_page_url' => null,
        'referrer_url' => null,
        'gclid' => null,
        'fbclid' => null,
        'msclkid' => null,
        'utm_source' => null,
        'utm_medium' => null,
        'utm_campaign' => null,
        'utm_adgroup' => null,
        'utm_term' => null,
        'utm_content' => null,
        'google_analytics_client_id' => null
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
        'landing_page_url' => 'landingPageUrl',
        'referrer_url' => 'referrerUrl',
        'gclid' => 'gclid',
        'fbclid' => 'fbclid',
        'msclkid' => 'msclkid',
        'utm_source' => 'utmSource',
        'utm_medium' => 'utmMedium',
        'utm_campaign' => 'utmCampaign',
        'utm_adgroup' => 'utmAdgroup',
        'utm_term' => 'utmTerm',
        'utm_content' => 'utmContent',
        'google_analytics_client_id' => 'googleAnalyticsClientId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'landing_page_url' => 'setLandingPageUrl',
        'referrer_url' => 'setReferrerUrl',
        'gclid' => 'setGclid',
        'fbclid' => 'setFbclid',
        'msclkid' => 'setMsclkid',
        'utm_source' => 'setUtmSource',
        'utm_medium' => 'setUtmMedium',
        'utm_campaign' => 'setUtmCampaign',
        'utm_adgroup' => 'setUtmAdgroup',
        'utm_term' => 'setUtmTerm',
        'utm_content' => 'setUtmContent',
        'google_analytics_client_id' => 'setGoogleAnalyticsClientId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'landing_page_url' => 'getLandingPageUrl',
        'referrer_url' => 'getReferrerUrl',
        'gclid' => 'getGclid',
        'fbclid' => 'getFbclid',
        'msclkid' => 'getMsclkid',
        'utm_source' => 'getUtmSource',
        'utm_medium' => 'getUtmMedium',
        'utm_campaign' => 'getUtmCampaign',
        'utm_adgroup' => 'getUtmAdgroup',
        'utm_term' => 'getUtmTerm',
        'utm_content' => 'getUtmContent',
        'google_analytics_client_id' => 'getGoogleAnalyticsClientId'
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
        $this->container['landing_page_url'] = $data['landing_page_url'] ?? null;
        $this->container['referrer_url'] = $data['referrer_url'] ?? null;
        $this->container['gclid'] = $data['gclid'] ?? null;
        $this->container['fbclid'] = $data['fbclid'] ?? null;
        $this->container['msclkid'] = $data['msclkid'] ?? null;
        $this->container['utm_source'] = $data['utm_source'] ?? null;
        $this->container['utm_medium'] = $data['utm_medium'] ?? null;
        $this->container['utm_campaign'] = $data['utm_campaign'] ?? null;
        $this->container['utm_adgroup'] = $data['utm_adgroup'] ?? null;
        $this->container['utm_term'] = $data['utm_term'] ?? null;
        $this->container['utm_content'] = $data['utm_content'] ?? null;
        $this->container['google_analytics_client_id'] = $data['google_analytics_client_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['landing_page_url'] === null) {
            $invalidProperties[] = "'landing_page_url' can't be null";
        }
        if ($this->container['referrer_url'] === null) {
            $invalidProperties[] = "'referrer_url' can't be null";
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
     * Gets landing_page_url
     *
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->container['landing_page_url'];
    }

    /**
     * Sets landing_page_url
     *
     * @param string $landing_page_url The url of the web page that the user first landed on
     *
     * @return self
     */
    public function setLandingPageUrl($landing_page_url)
    {
        $this->container['landing_page_url'] = $landing_page_url;

        return $this;
    }

    /**
     * Gets referrer_url
     *
     * @return string
     */
    public function getReferrerUrl()
    {
        return $this->container['referrer_url'];
    }

    /**
     * Sets referrer_url
     *
     * @param string $referrer_url The url of the web page that referred to the website
     *
     * @return self
     */
    public function setReferrerUrl($referrer_url)
    {
        $this->container['referrer_url'] = $referrer_url;

        return $this;
    }

    /**
     * Gets gclid
     *
     * @return string|null
     */
    public function getGclid()
    {
        return $this->container['gclid'];
    }

    /**
     * Sets gclid
     *
     * @param string|null $gclid Google Click Identifier
     *
     * @return self
     */
    public function setGclid($gclid)
    {
        $this->container['gclid'] = $gclid;

        return $this;
    }

    /**
     * Gets fbclid
     *
     * @return string|null
     */
    public function getFbclid()
    {
        return $this->container['fbclid'];
    }

    /**
     * Sets fbclid
     *
     * @param string|null $fbclid Facebook Click Identifier
     *
     * @return self
     */
    public function setFbclid($fbclid)
    {
        $this->container['fbclid'] = $fbclid;

        return $this;
    }

    /**
     * Gets msclkid
     *
     * @return string|null
     */
    public function getMsclkid()
    {
        return $this->container['msclkid'];
    }

    /**
     * Sets msclkid
     *
     * @param string|null $msclkid Microsoft Click ID
     *
     * @return self
     */
    public function setMsclkid($msclkid)
    {
        $this->container['msclkid'] = $msclkid;

        return $this;
    }

    /**
     * Gets utm_source
     *
     * @return string|null
     */
    public function getUtmSource()
    {
        return $this->container['utm_source'];
    }

    /**
     * Sets utm_source
     *
     * @param string|null $utm_source UTM source
     *
     * @return self
     */
    public function setUtmSource($utm_source)
    {
        $this->container['utm_source'] = $utm_source;

        return $this;
    }

    /**
     * Gets utm_medium
     *
     * @return string|null
     */
    public function getUtmMedium()
    {
        return $this->container['utm_medium'];
    }

    /**
     * Sets utm_medium
     *
     * @param string|null $utm_medium UTM medium
     *
     * @return self
     */
    public function setUtmMedium($utm_medium)
    {
        $this->container['utm_medium'] = $utm_medium;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string|null
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string|null $utm_campaign UTM campaign
     *
     * @return self
     */
    public function setUtmCampaign($utm_campaign)
    {
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets utm_adgroup
     *
     * @return string|null
     */
    public function getUtmAdgroup()
    {
        return $this->container['utm_adgroup'];
    }

    /**
     * Sets utm_adgroup
     *
     * @param string|null $utm_adgroup UTM ad group
     *
     * @return self
     */
    public function setUtmAdgroup($utm_adgroup)
    {
        $this->container['utm_adgroup'] = $utm_adgroup;

        return $this;
    }

    /**
     * Gets utm_term
     *
     * @return string|null
     */
    public function getUtmTerm()
    {
        return $this->container['utm_term'];
    }

    /**
     * Sets utm_term
     *
     * @param string|null $utm_term UTM term
     *
     * @return self
     */
    public function setUtmTerm($utm_term)
    {
        $this->container['utm_term'] = $utm_term;

        return $this;
    }

    /**
     * Gets utm_content
     *
     * @return string|null
     */
    public function getUtmContent()
    {
        return $this->container['utm_content'];
    }

    /**
     * Sets utm_content
     *
     * @param string|null $utm_content UTM content
     *
     * @return self
     */
    public function setUtmContent($utm_content)
    {
        $this->container['utm_content'] = $utm_content;

        return $this;
    }

    /**
     * Gets google_analytics_client_id
     *
     * @return string|null
     */
    public function getGoogleAnalyticsClientId()
    {
        return $this->container['google_analytics_client_id'];
    }

    /**
     * Sets google_analytics_client_id
     *
     * @param string|null $google_analytics_client_id An id used by Google Analytics to track unique visitors
     *
     * @return self
     */
    public function setGoogleAnalyticsClientId($google_analytics_client_id)
    {
        $this->container['google_analytics_client_id'] = $google_analytics_client_id;

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

