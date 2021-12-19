<?php
/**
 * OrganizationCategory
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
 * OrganizationCategory Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrganizationCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_by' => 'string',
        'created_at_utc' => '\DateTime',
        'updated_by' => 'string',
        'updated_at_utc' => '\DateTime',
        'created_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'updated_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'deleted_by' => 'string',
        'deleted_at_utc' => '\DateTime',
        'deleted_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'id' => 'string',
        'name' => 'string',
        'logo_url' => 'string',
        'meta_data' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_by' => 'uuid',
        'created_at_utc' => 'date-time',
        'updated_by' => 'uuid',
        'updated_at_utc' => 'date-time',
        'created_by_user' => null,
        'updated_by_user' => null,
        'deleted_by' => 'uuid',
        'deleted_at_utc' => 'date-time',
        'deleted_by_user' => null,
        'id' => 'uuid',
        'name' => null,
        'logo_url' => null,
        'meta_data' => null
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
        'created_by' => 'createdBy',
        'created_at_utc' => 'createdAtUtc',
        'updated_by' => 'updatedBy',
        'updated_at_utc' => 'updatedAtUtc',
        'created_by_user' => 'createdByUser',
        'updated_by_user' => 'updatedByUser',
        'deleted_by' => 'deletedBy',
        'deleted_at_utc' => 'deletedAtUtc',
        'deleted_by_user' => 'deletedByUser',
        'id' => 'id',
        'name' => 'name',
        'logo_url' => 'logoUrl',
        'meta_data' => 'metaData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'created_at_utc' => 'setCreatedAtUtc',
        'updated_by' => 'setUpdatedBy',
        'updated_at_utc' => 'setUpdatedAtUtc',
        'created_by_user' => 'setCreatedByUser',
        'updated_by_user' => 'setUpdatedByUser',
        'deleted_by' => 'setDeletedBy',
        'deleted_at_utc' => 'setDeletedAtUtc',
        'deleted_by_user' => 'setDeletedByUser',
        'id' => 'setId',
        'name' => 'setName',
        'logo_url' => 'setLogoUrl',
        'meta_data' => 'setMetaData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'created_at_utc' => 'getCreatedAtUtc',
        'updated_by' => 'getUpdatedBy',
        'updated_at_utc' => 'getUpdatedAtUtc',
        'created_by_user' => 'getCreatedByUser',
        'updated_by_user' => 'getUpdatedByUser',
        'deleted_by' => 'getDeletedBy',
        'deleted_at_utc' => 'getDeletedAtUtc',
        'deleted_by_user' => 'getDeletedByUser',
        'id' => 'getId',
        'name' => 'getName',
        'logo_url' => 'getLogoUrl',
        'meta_data' => 'getMetaData'
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
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_at_utc'] = $data['created_at_utc'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['updated_at_utc'] = $data['updated_at_utc'] ?? null;
        $this->container['created_by_user'] = $data['created_by_user'] ?? null;
        $this->container['updated_by_user'] = $data['updated_by_user'] ?? null;
        $this->container['deleted_by'] = $data['deleted_by'] ?? null;
        $this->container['deleted_at_utc'] = $data['deleted_at_utc'] ?? null;
        $this->container['deleted_by_user'] = $data['deleted_by_user'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['meta_data'] = $data['meta_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_at_utc
     *
     * @return \DateTime|null
     */
    public function getCreatedAtUtc()
    {
        return $this->container['created_at_utc'];
    }

    /**
     * Sets created_at_utc
     *
     * @param \DateTime|null $created_at_utc created_at_utc
     *
     * @return self
     */
    public function setCreatedAtUtc($created_at_utc)
    {
        $this->container['created_at_utc'] = $created_at_utc;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets updated_at_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedAtUtc()
    {
        return $this->container['updated_at_utc'];
    }

    /**
     * Sets updated_at_utc
     *
     * @param \DateTime|null $updated_at_utc updated_at_utc
     *
     * @return self
     */
    public function setUpdatedAtUtc($updated_at_utc)
    {
        $this->container['updated_at_utc'] = $updated_at_utc;

        return $this;
    }

    /**
     * Gets created_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getCreatedByUser()
    {
        return $this->container['created_by_user'];
    }

    /**
     * Sets created_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $created_by_user created_by_user
     *
     * @return self
     */
    public function setCreatedByUser($created_by_user)
    {
        $this->container['created_by_user'] = $created_by_user;

        return $this;
    }

    /**
     * Gets updated_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getUpdatedByUser()
    {
        return $this->container['updated_by_user'];
    }

    /**
     * Sets updated_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $updated_by_user updated_by_user
     *
     * @return self
     */
    public function setUpdatedByUser($updated_by_user)
    {
        $this->container['updated_by_user'] = $updated_by_user;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return string|null
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param string|null $deleted_by deleted_by
     *
     * @return self
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }

    /**
     * Gets deleted_at_utc
     *
     * @return \DateTime|null
     */
    public function getDeletedAtUtc()
    {
        return $this->container['deleted_at_utc'];
    }

    /**
     * Sets deleted_at_utc
     *
     * @param \DateTime|null $deleted_at_utc deleted_at_utc
     *
     * @return self
     */
    public function setDeletedAtUtc($deleted_at_utc)
    {
        $this->container['deleted_at_utc'] = $deleted_at_utc;

        return $this;
    }

    /**
     * Gets deleted_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getDeletedByUser()
    {
        return $this->container['deleted_by_user'];
    }

    /**
     * Sets deleted_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $deleted_by_user deleted_by_user
     *
     * @return self
     */
    public function setDeletedByUser($deleted_by_user)
    {
        $this->container['deleted_by_user'] = $deleted_by_user;

        return $this;
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
     * @param string|null $id id
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return mixed|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param mixed|null $meta_data meta_data
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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

