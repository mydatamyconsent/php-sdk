<?php
/**
 * DocumentIssueRequest
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
 * OpenAPI Generator version: 5.2.1
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
 * DocumentIssueRequest Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentIssueRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentIssueRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_type_id' => 'string',
        'identifier' => 'string',
        'name' => 'string',
        'description' => 'string',
        'receiver' => '\MyDataMyConsent\Model\Receiver',
        'expires_at_utc' => 'string',
        'base64_pdf_document' => 'string',
        'metadata' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_type_id' => null,
        'identifier' => null,
        'name' => null,
        'description' => null,
        'receiver' => null,
        'expires_at_utc' => null,
        'base64_pdf_document' => null,
        'metadata' => null
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
        'document_type_id' => 'documentTypeId',
        'identifier' => 'identifier',
        'name' => 'name',
        'description' => 'description',
        'receiver' => 'receiver',
        'expires_at_utc' => 'expiresAtUtc',
        'base64_pdf_document' => 'base64PDFDocument',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type_id' => 'setDocumentTypeId',
        'identifier' => 'setIdentifier',
        'name' => 'setName',
        'description' => 'setDescription',
        'receiver' => 'setReceiver',
        'expires_at_utc' => 'setExpiresAtUtc',
        'base64_pdf_document' => 'setBase64PdfDocument',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type_id' => 'getDocumentTypeId',
        'identifier' => 'getIdentifier',
        'name' => 'getName',
        'description' => 'getDescription',
        'receiver' => 'getReceiver',
        'expires_at_utc' => 'getExpiresAtUtc',
        'base64_pdf_document' => 'getBase64PdfDocument',
        'metadata' => 'getMetadata'
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
        $this->container['document_type_id'] = $data['document_type_id'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['receiver'] = $data['receiver'] ?? null;
        $this->container['expires_at_utc'] = $data['expires_at_utc'] ?? null;
        $this->container['base64_pdf_document'] = $data['base64_pdf_document'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['receiver'] === null) {
            $invalidProperties[] = "'receiver' can't be null";
        }
        if ($this->container['base64_pdf_document'] === null) {
            $invalidProperties[] = "'base64_pdf_document' can't be null";
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
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id document_type_id
     *
     * @return self
     */
    public function setDocumentTypeId($document_type_id)
    {
        $this->container['document_type_id'] = $document_type_id;

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
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \MyDataMyConsent\Model\Receiver
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \MyDataMyConsent\Model\Receiver $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets expires_at_utc
     *
     * @return string|null
     */
    public function getExpiresAtUtc()
    {
        return $this->container['expires_at_utc'];
    }

    /**
     * Sets expires_at_utc
     *
     * @param string|null $expires_at_utc expires_at_utc
     *
     * @return self
     */
    public function setExpiresAtUtc($expires_at_utc)
    {
        $this->container['expires_at_utc'] = $expires_at_utc;

        return $this;
    }

    /**
     * Gets base64_pdf_document
     *
     * @return string
     */
    public function getBase64PdfDocument()
    {
        return $this->container['base64_pdf_document'];
    }

    /**
     * Sets base64_pdf_document
     *
     * @param string $base64_pdf_document base64_pdf_document
     *
     * @return self
     */
    public function setBase64PdfDocument($base64_pdf_document)
    {
        $this->container['base64_pdf_document'] = $base64_pdf_document;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return mixed|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param mixed|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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

