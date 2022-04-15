<?php
/**
 * PayrollV2TimesheetCodeType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payroll
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
 * PayrollV2TimesheetCodeType Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayrollV2TimesheetCodeType
{
    /**
     * Possible values of this enum
     */
    const UNPAID = 'Unpaid';

    const PAID = 'Paid';

    const CLOCK_IN_OUT = 'ClockInOut';

    const PAID_TIME_OFF = 'PaidTimeOff';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNPAID,
            self::PAID,
            self::CLOCK_IN_OUT,
            self::PAID_TIME_OFF
        ];
    }
}


