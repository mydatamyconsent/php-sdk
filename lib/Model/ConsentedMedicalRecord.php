<?php
/**
 * ConsentedMedicalRecord
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
 * ConsentedMedicalRecord Class Doc Comment
 *
 * @category Class
 * @description ConsentedMedicalRecord : Consented medical record details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsentedMedicalRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsentedMedicalRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'field_title' => 'string',
        'field_slug' => 'string',
        'issuer_id' => 'string',
        'issuer_name' => 'string',
        'category' => 'string',
        'to_date' => '\DateTime',
        'from_date' => '\DateTime'
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
        'field_title' => null,
        'field_slug' => null,
        'issuer_id' => null,
        'issuer_name' => null,
        'category' => null,
        'to_date' => 'date-time',
        'from_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'field_title' => false,
		'field_slug' => false,
		'issuer_id' => false,
		'issuer_name' => false,
		'category' => false,
		'to_date' => false,
		'from_date' => false
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
        'field_title' => 'fieldTitle',
        'field_slug' => 'fieldSlug',
        'issuer_id' => 'issuerId',
        'issuer_name' => 'issuerName',
        'category' => 'category',
        'to_date' => 'toDate',
        'from_date' => 'fromDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'field_title' => 'setFieldTitle',
        'field_slug' => 'setFieldSlug',
        'issuer_id' => 'setIssuerId',
        'issuer_name' => 'setIssuerName',
        'category' => 'setCategory',
        'to_date' => 'setToDate',
        'from_date' => 'setFromDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'field_title' => 'getFieldTitle',
        'field_slug' => 'getFieldSlug',
        'issuer_id' => 'getIssuerId',
        'issuer_name' => 'getIssuerName',
        'category' => 'getCategory',
        'to_date' => 'getToDate',
        'from_date' => 'getFromDate'
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
        $this->setIfExists('field_title', $data ?? [], null);
        $this->setIfExists('field_slug', $data ?? [], null);
        $this->setIfExists('issuer_id', $data ?? [], null);
        $this->setIfExists('issuer_name', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
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

        if ($this->container['field_title'] === null) {
            $invalidProperties[] = "'field_title' can't be null";
        }
        if ($this->container['field_slug'] === null) {
            $invalidProperties[] = "'field_slug' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalidProperties[] = "'issuer_id' can't be null";
        }
        if ($this->container['issuer_name'] === null) {
            $invalidProperties[] = "'issuer_name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Health id.
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
     * Gets field_title
     *
     * @return string
     */
    public function getFieldTitle()
    {
        return $this->container['field_title'];
    }

    /**
     * Sets field_title
     *
     * @param string $field_title Health field title.
     *
     * @return self
     */
    public function setFieldTitle($field_title)
    {

        if (is_null($field_title)) {
            throw new \InvalidArgumentException('non-nullable field_title cannot be null');
        }

        $this->container['field_title'] = $field_title;

        return $this;
    }

    /**
     * Gets field_slug
     *
     * @return string
     */
    public function getFieldSlug()
    {
        return $this->container['field_slug'];
    }

    /**
     * Sets field_slug
     *
     * @param string $field_slug Health field slug.
     *
     * @return self
     */
    public function setFieldSlug($field_slug)
    {

        if (is_null($field_slug)) {
            throw new \InvalidArgumentException('non-nullable field_slug cannot be null');
        }

        $this->container['field_slug'] = $field_slug;

        return $this;
    }

    /**
     * Gets issuer_id
     *
     * @return string
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     *
     * @param string $issuer_id Issuer id.
     *
     * @return self
     */
    public function setIssuerId($issuer_id)
    {

        if (is_null($issuer_id)) {
            throw new \InvalidArgumentException('non-nullable issuer_id cannot be null');
        }

        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param string $issuer_name Issuer name.
     *
     * @return self
     */
    public function setIssuerName($issuer_name)
    {

        if (is_null($issuer_name)) {
            throw new \InvalidArgumentException('non-nullable issuer_name cannot be null');
        }

        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category health category type.
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime|null $to_date To Date
     *
     * @return self
     */
    public function setToDate($to_date)
    {

        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }

        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date From Date
     *
     * @return self
     */
    public function setFromDate($from_date)
    {

        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }

        $this->container['from_date'] = $from_date;

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


