<?php
/**
 * DataConsentDocument
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

use \ArrayAccess;
use \MyDataMyConsent\ObjectSerializer;

/**
 * DataConsentDocument Class Doc Comment
 *
 * @category Class
 * @description Data Consent document details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataConsentDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataConsentDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => 'string',
        'identifier' => 'string',
        'field_title' => 'string',
        'field_slug' => 'string',
        'issued_at_utc' => '\DateTime',
        'expires_at_utc' => '\DateTime',
        'issuer' => '\MyDataMyConsent\Model\DataConsentDocumentIssuer',
        'digital_signatures' => '\MyDataMyConsent\Model\DocumentDigitalSignature[]'
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
        'name' => null,
        'category' => null,
        'identifier' => null,
        'field_title' => null,
        'field_slug' => null,
        'issued_at_utc' => 'date-time',
        'expires_at_utc' => 'date-time',
        'issuer' => null,
        'digital_signatures' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'identifier' => 'identifier',
        'field_title' => 'fieldTitle',
        'field_slug' => 'fieldSlug',
        'issued_at_utc' => 'issuedAtUtc',
        'expires_at_utc' => 'expiresAtUtc',
        'issuer' => 'issuer',
        'digital_signatures' => 'digitalSignatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'identifier' => 'setIdentifier',
        'field_title' => 'setFieldTitle',
        'field_slug' => 'setFieldSlug',
        'issued_at_utc' => 'setIssuedAtUtc',
        'expires_at_utc' => 'setExpiresAtUtc',
        'issuer' => 'setIssuer',
        'digital_signatures' => 'setDigitalSignatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'identifier' => 'getIdentifier',
        'field_title' => 'getFieldTitle',
        'field_slug' => 'getFieldSlug',
        'issued_at_utc' => 'getIssuedAtUtc',
        'expires_at_utc' => 'getExpiresAtUtc',
        'issuer' => 'getIssuer',
        'digital_signatures' => 'getDigitalSignatures'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['field_title'] = $data['field_title'] ?? null;
        $this->container['field_slug'] = $data['field_slug'] ?? null;
        $this->container['issued_at_utc'] = $data['issued_at_utc'] ?? null;
        $this->container['expires_at_utc'] = $data['expires_at_utc'] ?? null;
        $this->container['issuer'] = $data['issuer'] ?? null;
        $this->container['digital_signatures'] = $data['digital_signatures'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['field_title'] === null) {
            $invalidProperties[] = "'field_title' can't be null";
        }
        if ($this->container['field_slug'] === null) {
            $invalidProperties[] = "'field_slug' can't be null";
        }
        if ($this->container['issued_at_utc'] === null) {
            $invalidProperties[] = "'issued_at_utc' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ($this->container['digital_signatures'] === null) {
            $invalidProperties[] = "'digital_signatures' can't be null";
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
     * @param string $id Document id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name Document name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $category Document category.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Document identifier.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
     * @param string $field_title Document field title.
     *
     * @return self
     */
    public function setFieldTitle($field_title)
    {
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
     * @param string $field_slug Document field slug.
     *
     * @return self
     */
    public function setFieldSlug($field_slug)
    {
        $this->container['field_slug'] = $field_slug;

        return $this;
    }

    /**
     * Gets issued_at_utc
     *
     * @return \DateTime
     */
    public function getIssuedAtUtc()
    {
        return $this->container['issued_at_utc'];
    }

    /**
     * Sets issued_at_utc
     *
     * @param \DateTime $issued_at_utc Document issued at datetime in UTC timezone.
     *
     * @return self
     */
    public function setIssuedAtUtc($issued_at_utc)
    {
        $this->container['issued_at_utc'] = $issued_at_utc;

        return $this;
    }

    /**
     * Gets expires_at_utc
     *
     * @return \DateTime|null
     */
    public function getExpiresAtUtc()
    {
        return $this->container['expires_at_utc'];
    }

    /**
     * Sets expires_at_utc
     *
     * @param \DateTime|null $expires_at_utc Document expires at datetime in UTC timezone.
     *
     * @return self
     */
    public function setExpiresAtUtc($expires_at_utc)
    {
        $this->container['expires_at_utc'] = $expires_at_utc;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return \MyDataMyConsent\Model\DataConsentDocumentIssuer
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param \MyDataMyConsent\Model\DataConsentDocumentIssuer $issuer issuer
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets digital_signatures
     *
     * @return \MyDataMyConsent\Model\DocumentDigitalSignature[]
     */
    public function getDigitalSignatures()
    {
        return $this->container['digital_signatures'];
    }

    /**
     * Sets digital_signatures
     *
     * @param \MyDataMyConsent\Model\DocumentDigitalSignature[] $digital_signatures Digital signatures.
     *
     * @return self
     */
    public function setDigitalSignatures($digital_signatures)
    {
        $this->container['digital_signatures'] = $digital_signatures;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

