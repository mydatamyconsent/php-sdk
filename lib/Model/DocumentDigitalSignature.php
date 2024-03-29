<?php
/**
 * DocumentDigitalSignature
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
 * DocumentDigitalSignature Class Doc Comment
 *
 * @category Class
 * @description DocumentDigitalSignature : Document digital signature.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentDigitalSignature implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentDigitalSignature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'issued_by' => 'string',
        'issuer_name' => 'string',
        'valid_from_utc' => 'string',
        'valid_to_utc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'issued_by' => null,
        'issuer_name' => null,
        'valid_from_utc' => null,
        'valid_to_utc' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'issued_by' => false,
		'issuer_name' => false,
		'valid_from_utc' => false,
		'valid_to_utc' => false
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
        'name' => 'name',
        'issued_by' => 'issued_by',
        'issuer_name' => 'issuer_name',
        'valid_from_utc' => 'valid_from_utc',
        'valid_to_utc' => 'valid_to_utc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'issued_by' => 'setIssuedBy',
        'issuer_name' => 'setIssuerName',
        'valid_from_utc' => 'setValidFromUtc',
        'valid_to_utc' => 'setValidToUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'issued_by' => 'getIssuedBy',
        'issuer_name' => 'getIssuerName',
        'valid_from_utc' => 'getValidFromUtc',
        'valid_to_utc' => 'getValidToUtc'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('issued_by', $data ?? [], null);
        $this->setIfExists('issuer_name', $data ?? [], null);
        $this->setIfExists('valid_from_utc', $data ?? [], null);
        $this->setIfExists('valid_to_utc', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['issued_by'] === null) {
            $invalidProperties[] = "'issued_by' can't be null";
        }
        if ($this->container['issuer_name'] === null) {
            $invalidProperties[] = "'issuer_name' can't be null";
        }
        if ($this->container['valid_from_utc'] === null) {
            $invalidProperties[] = "'valid_from_utc' can't be null";
        }
        if ($this->container['valid_to_utc'] === null) {
            $invalidProperties[] = "'valid_to_utc' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets issued_by
     *
     * @return string
     */
    public function getIssuedBy()
    {
        return $this->container['issued_by'];
    }

    /**
     * Sets issued_by
     *
     * @param string $issued_by Signature issued by.
     *
     * @return self
     */
    public function setIssuedBy($issued_by)
    {

        if (is_null($issued_by)) {
            throw new \InvalidArgumentException('non-nullable issued_by cannot be null');
        }

        $this->container['issued_by'] = $issued_by;

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
     * @param string $issuer_name Signature issuer name.
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
     * Gets valid_from_utc
     *
     * @return string
     */
    public function getValidFromUtc()
    {
        return $this->container['valid_from_utc'];
    }

    /**
     * Sets valid_from_utc
     *
     * @param string $valid_from_utc Signature valid from datatime in UTC timezone.
     *
     * @return self
     */
    public function setValidFromUtc($valid_from_utc)
    {

        if (is_null($valid_from_utc)) {
            throw new \InvalidArgumentException('non-nullable valid_from_utc cannot be null');
        }

        $this->container['valid_from_utc'] = $valid_from_utc;

        return $this;
    }

    /**
     * Gets valid_to_utc
     *
     * @return string
     */
    public function getValidToUtc()
    {
        return $this->container['valid_to_utc'];
    }

    /**
     * Sets valid_to_utc
     *
     * @param string $valid_to_utc Signature valid to datatime in UTC timezone.
     *
     * @return self
     */
    public function setValidToUtc($valid_to_utc)
    {

        if (is_null($valid_to_utc)) {
            throw new \InvalidArgumentException('non-nullable valid_to_utc cannot be null');
        }

        $this->container['valid_to_utc'] = $valid_to_utc;

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


