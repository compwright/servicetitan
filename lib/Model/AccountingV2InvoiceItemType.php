<?php
/**
 * AccountingV2InvoiceItemType
 *
 * PHP version 7.4
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
 * AccountingV2InvoiceItemType Class Doc Comment
 *
 * @category Class
 * @description Indicates a type&#39;s item
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountingV2InvoiceItemType
{
    /**
     * Possible values of this enum
     */
    public const SERVICE = 'Service';

    public const MATERIAL = 'Material';

    public const EQUIPMENT = 'Equipment';

    public const PRICE_MODIFIER = 'PriceModifier';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVICE,
            self::MATERIAL,
            self::EQUIPMENT,
            self::PRICE_MODIFIER
        ];
    }
}


