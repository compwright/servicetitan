<?php
/**
 * PayrollV2EmployeeType
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CompWright\ServiceTitan\Model;
use \CompWright\ServiceTitan\ObjectSerializer;

/**
 * PayrollV2EmployeeType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayrollV2EmployeeType
{
    /**
     * Possible values of this enum
     */
    public const TECHNICIAN = 'Technician';

    public const EMPLOYEE = 'Employee';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TECHNICIAN,
            self::EMPLOYEE
        ];
    }
}


