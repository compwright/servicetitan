<?php
/**
 * CallType
 *
 * PHP version 7.3
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
use \CompWright\ServiceTitan\ObjectSerializer;

/**
 * CallType Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CallType
{
    /**
     * Possible values of this enum
     */
    const ABANDONED = 'Abandoned';

    const UNBOOKED = 'Unbooked';

    const EXCUSED = 'Excused';

    const BOOKED = 'Booked';

    const NOT_LEAD = 'NotLead';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABANDONED,
            self::UNBOOKED,
            self::EXCUSED,
            self::BOOKED,
            self::NOT_LEAD
        ];
    }
}


