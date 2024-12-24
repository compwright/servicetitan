<?php
/**
 * CrmJobsJobSchedulingTool
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
use \CompWright\ServiceTitan\ObjectSerializer;

/**
 * CrmJobsJobSchedulingTool Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CrmJobsJobSchedulingTool
{
    /**
     * Possible values of this enum
     */
    public const MANUAL = 'Manual';

    public const SMART_SCHEDULE = 'SmartSchedule';

    public const SMART_DISPATCH = 'SmartDispatch';

    public const TECHNICIAN_ROUTE_OPTIMIZATION = 'TechnicianRouteOptimization';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANUAL,
            self::SMART_SCHEDULE,
            self::SMART_DISPATCH,
            self::TECHNICIAN_ROUTE_OPTIMIZATION
        ];
    }
}

