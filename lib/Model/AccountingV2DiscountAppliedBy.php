<?php
/**
 * AccountingV2DiscountAppliedBy
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting
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
 * AccountingV2DiscountAppliedBy Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountingV2DiscountAppliedBy
{
    /**
     * Possible values of this enum
     */
    const NUMBER_OF_DAYS = 'NumberOfDays';

    const DAY_OF_MONTH = 'DayOfMonth';

    const DAY_OF_FOLLOWING_MONTH = 'DayOfFollowingMonth';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_OF_DAYS,
            self::DAY_OF_MONTH,
            self::DAY_OF_FOLLOWING_MONTH
        ];
    }
}


