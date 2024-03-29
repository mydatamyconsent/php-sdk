<?php
/**
 * MutualFundTransaction
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

use \ArrayAccess;
use \MyDataMyConsent\ObjectSerializer;

/**
 * MutualFundTransaction Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MutualFundTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MutualFundTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amc' => 'string',
        'registrar' => 'string',
        'scheme_code' => 'string',
        'scheme_plan' => '\MyDataMyConsent\Model\MutualFundSchemePlan',
        'isin' => 'string',
        'amfi_code' => 'string',
        'fund_type' => '\MyDataMyConsent\Model\MutualFundFundType',
        'scheme_option' => '\MyDataMyConsent\Model\MutualFundSchemeOption',
        'scheme_types' => '\MyDataMyConsent\Model\MutualFundSchemeType',
        'scheme_category' => '\MyDataMyConsent\Model\MutualFundSchemeCategory',
        'ucc' => 'string',
        'amount' => 'string',
        'closing_units' => 'string',
        'lien_units' => 'string',
        'nav' => 'string',
        'nav_date' => '\DateTime',
        'type' => '\MyDataMyConsent\Model\MutualFundTransactionType',
        'order_date' => '\DateTime',
        'execution_date' => '\DateTime',
        'lockin_flag' => 'string',
        'lockin_days' => 'string',
        'mode' => '\MyDataMyConsent\Model\MutualFundHoldingMode',
        'narration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'amc' => null,
        'registrar' => null,
        'scheme_code' => null,
        'scheme_plan' => null,
        'isin' => null,
        'amfi_code' => null,
        'fund_type' => null,
        'scheme_option' => null,
        'scheme_types' => null,
        'scheme_category' => null,
        'ucc' => null,
        'amount' => null,
        'closing_units' => null,
        'lien_units' => null,
        'nav' => null,
        'nav_date' => 'date-time',
        'type' => null,
        'order_date' => 'date-time',
        'execution_date' => 'date-time',
        'lockin_flag' => null,
        'lockin_days' => null,
        'mode' => null,
        'narration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'amc' => false,
		'registrar' => false,
		'scheme_code' => false,
		'scheme_plan' => false,
		'isin' => false,
		'amfi_code' => false,
		'fund_type' => false,
		'scheme_option' => false,
		'scheme_types' => false,
		'scheme_category' => false,
		'ucc' => false,
		'amount' => false,
		'closing_units' => false,
		'lien_units' => false,
		'nav' => false,
		'nav_date' => false,
		'type' => false,
		'order_date' => false,
		'execution_date' => false,
		'lockin_flag' => false,
		'lockin_days' => false,
		'mode' => false,
		'narration' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'amc' => 'amc',
        'registrar' => 'registrar',
        'scheme_code' => 'scheme_code',
        'scheme_plan' => 'scheme_plan',
        'isin' => 'isin',
        'amfi_code' => 'amfi_code',
        'fund_type' => 'fund_type',
        'scheme_option' => 'scheme_option',
        'scheme_types' => 'scheme_types',
        'scheme_category' => 'scheme_category',
        'ucc' => 'ucc',
        'amount' => 'amount',
        'closing_units' => 'closing_units',
        'lien_units' => 'lien_units',
        'nav' => 'nav',
        'nav_date' => 'nav_date',
        'type' => 'type',
        'order_date' => 'order_date',
        'execution_date' => 'execution_date',
        'lockin_flag' => 'lockin_flag',
        'lockin_days' => 'lockin_days',
        'mode' => 'mode',
        'narration' => 'narration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amc' => 'setAmc',
        'registrar' => 'setRegistrar',
        'scheme_code' => 'setSchemeCode',
        'scheme_plan' => 'setSchemePlan',
        'isin' => 'setIsin',
        'amfi_code' => 'setAmfiCode',
        'fund_type' => 'setFundType',
        'scheme_option' => 'setSchemeOption',
        'scheme_types' => 'setSchemeTypes',
        'scheme_category' => 'setSchemeCategory',
        'ucc' => 'setUcc',
        'amount' => 'setAmount',
        'closing_units' => 'setClosingUnits',
        'lien_units' => 'setLienUnits',
        'nav' => 'setNav',
        'nav_date' => 'setNavDate',
        'type' => 'setType',
        'order_date' => 'setOrderDate',
        'execution_date' => 'setExecutionDate',
        'lockin_flag' => 'setLockinFlag',
        'lockin_days' => 'setLockinDays',
        'mode' => 'setMode',
        'narration' => 'setNarration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amc' => 'getAmc',
        'registrar' => 'getRegistrar',
        'scheme_code' => 'getSchemeCode',
        'scheme_plan' => 'getSchemePlan',
        'isin' => 'getIsin',
        'amfi_code' => 'getAmfiCode',
        'fund_type' => 'getFundType',
        'scheme_option' => 'getSchemeOption',
        'scheme_types' => 'getSchemeTypes',
        'scheme_category' => 'getSchemeCategory',
        'ucc' => 'getUcc',
        'amount' => 'getAmount',
        'closing_units' => 'getClosingUnits',
        'lien_units' => 'getLienUnits',
        'nav' => 'getNav',
        'nav_date' => 'getNavDate',
        'type' => 'getType',
        'order_date' => 'getOrderDate',
        'execution_date' => 'getExecutionDate',
        'lockin_flag' => 'getLockinFlag',
        'lockin_days' => 'getLockinDays',
        'mode' => 'getMode',
        'narration' => 'getNarration'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('amc', $data ?? [], null);
        $this->setIfExists('registrar', $data ?? [], null);
        $this->setIfExists('scheme_code', $data ?? [], null);
        $this->setIfExists('scheme_plan', $data ?? [], null);
        $this->setIfExists('isin', $data ?? [], null);
        $this->setIfExists('amfi_code', $data ?? [], null);
        $this->setIfExists('fund_type', $data ?? [], null);
        $this->setIfExists('scheme_option', $data ?? [], null);
        $this->setIfExists('scheme_types', $data ?? [], null);
        $this->setIfExists('scheme_category', $data ?? [], null);
        $this->setIfExists('ucc', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('closing_units', $data ?? [], null);
        $this->setIfExists('lien_units', $data ?? [], null);
        $this->setIfExists('nav', $data ?? [], null);
        $this->setIfExists('nav_date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('order_date', $data ?? [], null);
        $this->setIfExists('execution_date', $data ?? [], null);
        $this->setIfExists('lockin_flag', $data ?? [], null);
        $this->setIfExists('lockin_days', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('narration', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['amc'] === null) {
            $invalidProperties[] = "'amc' can't be null";
        }
        if ($this->container['registrar'] === null) {
            $invalidProperties[] = "'registrar' can't be null";
        }
        if ($this->container['scheme_code'] === null) {
            $invalidProperties[] = "'scheme_code' can't be null";
        }
        if ($this->container['scheme_plan'] === null) {
            $invalidProperties[] = "'scheme_plan' can't be null";
        }
        if ($this->container['isin'] === null) {
            $invalidProperties[] = "'isin' can't be null";
        }
        if ($this->container['amfi_code'] === null) {
            $invalidProperties[] = "'amfi_code' can't be null";
        }
        if ($this->container['fund_type'] === null) {
            $invalidProperties[] = "'fund_type' can't be null";
        }
        if ($this->container['scheme_option'] === null) {
            $invalidProperties[] = "'scheme_option' can't be null";
        }
        if ($this->container['scheme_types'] === null) {
            $invalidProperties[] = "'scheme_types' can't be null";
        }
        if ($this->container['scheme_category'] === null) {
            $invalidProperties[] = "'scheme_category' can't be null";
        }
        if ($this->container['ucc'] === null) {
            $invalidProperties[] = "'ucc' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['closing_units'] === null) {
            $invalidProperties[] = "'closing_units' can't be null";
        }
        if ($this->container['lien_units'] === null) {
            $invalidProperties[] = "'lien_units' can't be null";
        }
        if ($this->container['nav'] === null) {
            $invalidProperties[] = "'nav' can't be null";
        }
        if ($this->container['nav_date'] === null) {
            $invalidProperties[] = "'nav_date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        if ($this->container['execution_date'] === null) {
            $invalidProperties[] = "'execution_date' can't be null";
        }
        if ($this->container['lockin_flag'] === null) {
            $invalidProperties[] = "'lockin_flag' can't be null";
        }
        if ($this->container['lockin_days'] === null) {
            $invalidProperties[] = "'lockin_days' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['narration'] === null) {
            $invalidProperties[] = "'narration' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets amc
     *
     * @return string
     */
    public function getAmc()
    {
        return $this->container['amc'];
    }

    /**
     * Sets amc
     *
     * @param string $amc amc
     *
     * @return self
     */
    public function setAmc($amc)
    {

        if (is_null($amc)) {
            throw new \InvalidArgumentException('non-nullable amc cannot be null');
        }

        $this->container['amc'] = $amc;

        return $this;
    }

    /**
     * Gets registrar
     *
     * @return string
     */
    public function getRegistrar()
    {
        return $this->container['registrar'];
    }

    /**
     * Sets registrar
     *
     * @param string $registrar registrar
     *
     * @return self
     */
    public function setRegistrar($registrar)
    {

        if (is_null($registrar)) {
            throw new \InvalidArgumentException('non-nullable registrar cannot be null');
        }

        $this->container['registrar'] = $registrar;

        return $this;
    }

    /**
     * Gets scheme_code
     *
     * @return string
     */
    public function getSchemeCode()
    {
        return $this->container['scheme_code'];
    }

    /**
     * Sets scheme_code
     *
     * @param string $scheme_code scheme_code
     *
     * @return self
     */
    public function setSchemeCode($scheme_code)
    {

        if (is_null($scheme_code)) {
            throw new \InvalidArgumentException('non-nullable scheme_code cannot be null');
        }

        $this->container['scheme_code'] = $scheme_code;

        return $this;
    }

    /**
     * Gets scheme_plan
     *
     * @return \MyDataMyConsent\Model\MutualFundSchemePlan
     */
    public function getSchemePlan()
    {
        return $this->container['scheme_plan'];
    }

    /**
     * Sets scheme_plan
     *
     * @param \MyDataMyConsent\Model\MutualFundSchemePlan $scheme_plan scheme_plan
     *
     * @return self
     */
    public function setSchemePlan($scheme_plan)
    {

        if (is_null($scheme_plan)) {
            throw new \InvalidArgumentException('non-nullable scheme_plan cannot be null');
        }

        $this->container['scheme_plan'] = $scheme_plan;

        return $this;
    }

    /**
     * Gets isin
     *
     * @return string
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string $isin isin
     *
     * @return self
     */
    public function setIsin($isin)
    {

        if (is_null($isin)) {
            throw new \InvalidArgumentException('non-nullable isin cannot be null');
        }

        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets amfi_code
     *
     * @return string
     */
    public function getAmfiCode()
    {
        return $this->container['amfi_code'];
    }

    /**
     * Sets amfi_code
     *
     * @param string $amfi_code amfi_code
     *
     * @return self
     */
    public function setAmfiCode($amfi_code)
    {

        if (is_null($amfi_code)) {
            throw new \InvalidArgumentException('non-nullable amfi_code cannot be null');
        }

        $this->container['amfi_code'] = $amfi_code;

        return $this;
    }

    /**
     * Gets fund_type
     *
     * @return \MyDataMyConsent\Model\MutualFundFundType
     */
    public function getFundType()
    {
        return $this->container['fund_type'];
    }

    /**
     * Sets fund_type
     *
     * @param \MyDataMyConsent\Model\MutualFundFundType $fund_type fund_type
     *
     * @return self
     */
    public function setFundType($fund_type)
    {

        if (is_null($fund_type)) {
            throw new \InvalidArgumentException('non-nullable fund_type cannot be null');
        }

        $this->container['fund_type'] = $fund_type;

        return $this;
    }

    /**
     * Gets scheme_option
     *
     * @return \MyDataMyConsent\Model\MutualFundSchemeOption
     */
    public function getSchemeOption()
    {
        return $this->container['scheme_option'];
    }

    /**
     * Sets scheme_option
     *
     * @param \MyDataMyConsent\Model\MutualFundSchemeOption $scheme_option scheme_option
     *
     * @return self
     */
    public function setSchemeOption($scheme_option)
    {

        if (is_null($scheme_option)) {
            throw new \InvalidArgumentException('non-nullable scheme_option cannot be null');
        }

        $this->container['scheme_option'] = $scheme_option;

        return $this;
    }

    /**
     * Gets scheme_types
     *
     * @return \MyDataMyConsent\Model\MutualFundSchemeType
     */
    public function getSchemeTypes()
    {
        return $this->container['scheme_types'];
    }

    /**
     * Sets scheme_types
     *
     * @param \MyDataMyConsent\Model\MutualFundSchemeType $scheme_types scheme_types
     *
     * @return self
     */
    public function setSchemeTypes($scheme_types)
    {

        if (is_null($scheme_types)) {
            throw new \InvalidArgumentException('non-nullable scheme_types cannot be null');
        }

        $this->container['scheme_types'] = $scheme_types;

        return $this;
    }

    /**
     * Gets scheme_category
     *
     * @return \MyDataMyConsent\Model\MutualFundSchemeCategory
     */
    public function getSchemeCategory()
    {
        return $this->container['scheme_category'];
    }

    /**
     * Sets scheme_category
     *
     * @param \MyDataMyConsent\Model\MutualFundSchemeCategory $scheme_category scheme_category
     *
     * @return self
     */
    public function setSchemeCategory($scheme_category)
    {

        if (is_null($scheme_category)) {
            throw new \InvalidArgumentException('non-nullable scheme_category cannot be null');
        }

        $this->container['scheme_category'] = $scheme_category;

        return $this;
    }

    /**
     * Gets ucc
     *
     * @return string
     */
    public function getUcc()
    {
        return $this->container['ucc'];
    }

    /**
     * Sets ucc
     *
     * @param string $ucc ucc
     *
     * @return self
     */
    public function setUcc($ucc)
    {

        if (is_null($ucc)) {
            throw new \InvalidArgumentException('non-nullable ucc cannot be null');
        }

        $this->container['ucc'] = $ucc;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets closing_units
     *
     * @return string
     */
    public function getClosingUnits()
    {
        return $this->container['closing_units'];
    }

    /**
     * Sets closing_units
     *
     * @param string $closing_units closing_units
     *
     * @return self
     */
    public function setClosingUnits($closing_units)
    {

        if (is_null($closing_units)) {
            throw new \InvalidArgumentException('non-nullable closing_units cannot be null');
        }

        $this->container['closing_units'] = $closing_units;

        return $this;
    }

    /**
     * Gets lien_units
     *
     * @return string
     */
    public function getLienUnits()
    {
        return $this->container['lien_units'];
    }

    /**
     * Sets lien_units
     *
     * @param string $lien_units lien_units
     *
     * @return self
     */
    public function setLienUnits($lien_units)
    {

        if (is_null($lien_units)) {
            throw new \InvalidArgumentException('non-nullable lien_units cannot be null');
        }

        $this->container['lien_units'] = $lien_units;

        return $this;
    }

    /**
     * Gets nav
     *
     * @return string
     */
    public function getNav()
    {
        return $this->container['nav'];
    }

    /**
     * Sets nav
     *
     * @param string $nav nav
     *
     * @return self
     */
    public function setNav($nav)
    {

        if (is_null($nav)) {
            throw new \InvalidArgumentException('non-nullable nav cannot be null');
        }

        $this->container['nav'] = $nav;

        return $this;
    }

    /**
     * Gets nav_date
     *
     * @return \DateTime
     */
    public function getNavDate()
    {
        return $this->container['nav_date'];
    }

    /**
     * Sets nav_date
     *
     * @param \DateTime $nav_date nav_date
     *
     * @return self
     */
    public function setNavDate($nav_date)
    {

        if (is_null($nav_date)) {
            throw new \InvalidArgumentException('non-nullable nav_date cannot be null');
        }

        $this->container['nav_date'] = $nav_date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MyDataMyConsent\Model\MutualFundTransactionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MyDataMyConsent\Model\MutualFundTransactionType $type type
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date order_date
     *
     * @return self
     */
    public function setOrderDate($order_date)
    {

        if (is_null($order_date)) {
            throw new \InvalidArgumentException('non-nullable order_date cannot be null');
        }

        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets execution_date
     *
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     *
     * @param \DateTime $execution_date execution_date
     *
     * @return self
     */
    public function setExecutionDate($execution_date)
    {

        if (is_null($execution_date)) {
            throw new \InvalidArgumentException('non-nullable execution_date cannot be null');
        }

        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets lockin_flag
     *
     * @return string
     */
    public function getLockinFlag()
    {
        return $this->container['lockin_flag'];
    }

    /**
     * Sets lockin_flag
     *
     * @param string $lockin_flag lockin_flag
     *
     * @return self
     */
    public function setLockinFlag($lockin_flag)
    {

        if (is_null($lockin_flag)) {
            throw new \InvalidArgumentException('non-nullable lockin_flag cannot be null');
        }

        $this->container['lockin_flag'] = $lockin_flag;

        return $this;
    }

    /**
     * Gets lockin_days
     *
     * @return string
     */
    public function getLockinDays()
    {
        return $this->container['lockin_days'];
    }

    /**
     * Sets lockin_days
     *
     * @param string $lockin_days lockin_days
     *
     * @return self
     */
    public function setLockinDays($lockin_days)
    {

        if (is_null($lockin_days)) {
            throw new \InvalidArgumentException('non-nullable lockin_days cannot be null');
        }

        $this->container['lockin_days'] = $lockin_days;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \MyDataMyConsent\Model\MutualFundHoldingMode
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \MyDataMyConsent\Model\MutualFundHoldingMode $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {

        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }

        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets narration
     *
     * @return string
     */
    public function getNarration()
    {
        return $this->container['narration'];
    }

    /**
     * Sets narration
     *
     * @param string $narration narration
     *
     * @return self
     */
    public function setNarration($narration)
    {

        if (is_null($narration)) {
            throw new \InvalidArgumentException('non-nullable narration cannot be null');
        }

        $this->container['narration'] = $narration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


