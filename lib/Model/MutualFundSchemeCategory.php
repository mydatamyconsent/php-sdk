<?php
/**
 * MutualFundSchemeCategory
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
 * MutualFundSchemeCategory Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MutualFundSchemeCategory
{
    /**
     * Possible values of this enum
     */
    public const MULTI_CAP_FUND = 'MultiCapFund';

    public const LARGE_CAP_FUND = 'LargeCapFund';

    public const LARGE_AND_MID_CAP_FUND = 'LargeAndMidCapFund';

    public const MIDCAP_FUND = 'MidcapFund';

    public const SMALL_CAP_FUND = 'SmallCapFund';

    public const DIVIDEND_YIELD_FUND = 'DividendYieldFund';

    public const VALUE_FUND = 'ValueFund';

    public const CONTRA_FUND = 'ContraFund';

    public const FOCUSED_FUND = 'FocusedFund';

    public const SECTORAL_OR_THEMATIC = 'SectoralOrThematic';

    public const ELSS = 'Elss';

    public const OVERNIGHT_FUND = 'OvernightFund';

    public const LIQUID_FUND = 'LiquidFund';

    public const ULTRA_SHORT_DURATION_FUND = 'UltraShortDurationFund';

    public const LOW_DURATION_FUND = 'LowDurationFund';

    public const MONEY_MARKET_FUND = 'MoneyMarketFund';

    public const SHORT_DURATION_FUND = 'ShortDurationFund';

    public const MEDIUM_DURATION_FUND = 'MediumDurationFund';

    public const MEDIUM_TO_LONG_DURATION_FUND = 'MediumToLongDurationFund';

    public const LONG_DURATION_FUND = 'LongDurationFund';

    public const DYNAMIC_BOND = 'DynamicBond';

    public const CORPORATE_BOND_FUND = 'CorporateBondFund';

    public const CREDIT_RISK_FUND = 'CreditRiskFund';

    public const BANKING_AND_PSU_FUND = 'BankingAndPsuFund';

    public const GILT_FUND = 'GiltFund';

    public const GILT_FUND_WITH10_YEAR_CONSTANT_DURATION = 'GiltFundWith10YearConstantDuration';

    public const FLOATER_FUND = 'FloaterFund';

    public const CONSERVATIVE_HYBRID_FUND = 'ConservativeHybridFund';

    public const BALANCED_HYBRID_FUND = 'BalancedHybridFund';

    public const AGGRESSIVE_HYBRID_FUND = 'AggressiveHybridFund';

    public const DYNAMIC_ASSET_ALLOCATION_OR_BALANCED_ADVANTAGE = 'DynamicAssetAllocationOrBalancedAdvantage';

    public const MULTI_ASSET_ALLOCATION = 'MultiAssetAllocation';

    public const ARBITRAGE_FUND = 'ArbitrageFund';

    public const EQUITY_SAVINGS = 'EquitySavings';

    public const RETIREMENT_FUND = 'RetirementFund';

    public const CHILDRENS_FUND = 'ChildrensFund';

    public const INDEX_FUNDS_OR_ETFS = 'IndexFundsOrEtfs';

    public const FOFS_OVERSEAS_OR_DOMESTIC = 'FofsOverseasOrDomestic';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MULTI_CAP_FUND,
            self::LARGE_CAP_FUND,
            self::LARGE_AND_MID_CAP_FUND,
            self::MIDCAP_FUND,
            self::SMALL_CAP_FUND,
            self::DIVIDEND_YIELD_FUND,
            self::VALUE_FUND,
            self::CONTRA_FUND,
            self::FOCUSED_FUND,
            self::SECTORAL_OR_THEMATIC,
            self::ELSS,
            self::OVERNIGHT_FUND,
            self::LIQUID_FUND,
            self::ULTRA_SHORT_DURATION_FUND,
            self::LOW_DURATION_FUND,
            self::MONEY_MARKET_FUND,
            self::SHORT_DURATION_FUND,
            self::MEDIUM_DURATION_FUND,
            self::MEDIUM_TO_LONG_DURATION_FUND,
            self::LONG_DURATION_FUND,
            self::DYNAMIC_BOND,
            self::CORPORATE_BOND_FUND,
            self::CREDIT_RISK_FUND,
            self::BANKING_AND_PSU_FUND,
            self::GILT_FUND,
            self::GILT_FUND_WITH10_YEAR_CONSTANT_DURATION,
            self::FLOATER_FUND,
            self::CONSERVATIVE_HYBRID_FUND,
            self::BALANCED_HYBRID_FUND,
            self::AGGRESSIVE_HYBRID_FUND,
            self::DYNAMIC_ASSET_ALLOCATION_OR_BALANCED_ADVANTAGE,
            self::MULTI_ASSET_ALLOCATION,
            self::ARBITRAGE_FUND,
            self::EQUITY_SAVINGS,
            self::RETIREMENT_FUND,
            self::CHILDRENS_FUND,
            self::INDEX_FUNDS_OR_ETFS,
            self::FOFS_OVERSEAS_OR_DOMESTIC
        ];
    }
}


