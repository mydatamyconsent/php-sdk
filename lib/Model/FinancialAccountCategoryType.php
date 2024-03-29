<?php
/**
 * FinancialAccountCategoryType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * My Data My Consent - Developer API
 *
 * Unleashing the power of consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDataMyConsent\Model;
use \MyDataMyConsent\ObjectSerializer;

/**
 * FinancialAccountCategoryType Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FinancialAccountCategoryType
{
    /**
     * Possible values of this enum
     */
    public const SAVINGS = 'Savings';

    public const INSURANCE = 'Insurance';

    public const LOAN = 'Loan';

    public const CREDIT_CARD = 'CreditCard';

    public const BILL = 'Bill';

    public const INVESTMENT = 'Investment';

    public const REWARD = 'Reward';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SAVINGS,
            self::INSURANCE,
            self::LOAN,
            self::CREDIT_CARD,
            self::BILL,
            self::INVESTMENT,
            self::REWARD
        ];
    }
}


