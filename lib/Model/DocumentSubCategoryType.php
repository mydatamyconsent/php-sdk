<?php
/**
 * DocumentSubCategoryType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * My Data My Consent - Developer API
 *
 * Unleashing the power of data consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.
 *
 * The version of the OpenAPI document: v1
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDataMyConsent\Model;
use \MyDataMyConsent\ObjectSerializer;

/**
 * DocumentSubCategoryType Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentSubCategoryType
{
    /**
     * Possible values of this enum
     */
    const IDENTITY = 'Identity';

    const HOUSE = 'House';

    const VEHICLE = 'Vehicle';

    const MARKS_MEMOS = 'MarksMemos';

    const TRANSCRIPTS = 'Transcripts';

    const CERTIFICATES = 'Certificates';

    const PRESCRIPTIONS = 'Prescriptions';

    const MEDICAL_REPORTS = 'MedicalReports';

    const DISCHARGE_SUMMARY = 'DischargeSummary';

    const BILLS = 'Bills';

    const INVOICES = 'Invoices';

    const TAXES = 'Taxes';

    const CORPORATES = 'Corporates';

    const COMPETITIONS = 'Competitions';

    const INTELLECTUAL_PROPERTIES = 'IntellectualProperties';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IDENTITY,
            self::HOUSE,
            self::VEHICLE,
            self::MARKS_MEMOS,
            self::TRANSCRIPTS,
            self::CERTIFICATES,
            self::PRESCRIPTIONS,
            self::MEDICAL_REPORTS,
            self::DISCHARGE_SUMMARY,
            self::BILLS,
            self::INVOICES,
            self::TAXES,
            self::CORPORATES,
            self::COMPETITIONS,
            self::INTELLECTUAL_PROPERTIES
        ];
    }
}


