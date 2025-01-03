<?php
/**
 * TenantSettingsV2EmployeeUserRole
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings
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
 * TenantSettingsV2EmployeeUserRole Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TenantSettingsV2EmployeeUserRole
{
    /**
     * Possible values of this enum
     */
    public const UNSPECIFIED = 'Unspecified';

    public const TECHNICIAN = 'Technician';

    public const DISPATCH = 'Dispatch';

    public const ACCOUNTING = 'Accounting';

    public const FIELD_MANAGER = 'FieldManager';

    public const DISPLAY_USER = 'DisplayUser';

    public const DISPLAY_USER_WITH_BILLING_ACCESS = 'DisplayUserWithBillingAccess';

    public const SALES_MANAGER = 'SalesManager';

    public const CSR = 'CSR';

    public const GENERAL_OFFICE = 'GeneralOffice';

    public const TECHNICIAN_HELPER = 'TechnicianHelper';

    public const TECHNICIAN_MAINTENANCE = 'TechnicianMaintenance';

    public const TECHNICIAN_INSTALLER = 'TechnicianInstaller';

    public const ADMIN = 'Admin';

    public const TECHNICIAN_SERVICE = 'TechnicianService';

    public const TECHNICIAN_SALES = 'TechnicianSales';

    public const OWNER = 'Owner';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSPECIFIED,
            self::TECHNICIAN,
            self::DISPATCH,
            self::ACCOUNTING,
            self::FIELD_MANAGER,
            self::DISPLAY_USER,
            self::DISPLAY_USER_WITH_BILLING_ACCESS,
            self::SALES_MANAGER,
            self::CSR,
            self::GENERAL_OFFICE,
            self::TECHNICIAN_HELPER,
            self::TECHNICIAN_MAINTENANCE,
            self::TECHNICIAN_INSTALLER,
            self::ADMIN,
            self::TECHNICIAN_SERVICE,
            self::TECHNICIAN_SALES,
            self::OWNER
        ];
    }
}


