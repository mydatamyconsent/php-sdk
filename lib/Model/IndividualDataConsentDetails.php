<?php
/**
 * IndividualDataConsentDetails
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
 * IndividualDataConsentDetails Class Doc Comment
 *
 * @category Class
 * @description Individual data consent details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IndividualDataConsentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndividualDataConsentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approver' => 'string',
        'id' => 'string',
        'template_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'purpose' => 'string',
        'status' => '\MyDataMyConsent\Model\DataConsentStatus',
        'transaction_id' => 'string',
        'approved_at_utc' => '\DateTime',
        'data_access_expires_at_utc' => '\DateTime',
        'revoked_at_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approver' => null,
        'id' => 'uuid',
        'template_id' => 'uuid',
        'title' => null,
        'description' => null,
        'purpose' => null,
        'status' => null,
        'transaction_id' => null,
        'approved_at_utc' => 'date-time',
        'data_access_expires_at_utc' => 'date-time',
        'revoked_at_utc' => 'date-time'
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
        'approver' => 'approver',
        'id' => 'id',
        'template_id' => 'templateId',
        'title' => 'title',
        'description' => 'description',
        'purpose' => 'purpose',
        'status' => 'status',
        'transaction_id' => 'transactionId',
        'approved_at_utc' => 'approvedAtUtc',
        'data_access_expires_at_utc' => 'dataAccessExpiresAtUtc',
        'revoked_at_utc' => 'revokedAtUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approver' => 'setApprover',
        'id' => 'setId',
        'template_id' => 'setTemplateId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'purpose' => 'setPurpose',
        'status' => 'setStatus',
        'transaction_id' => 'setTransactionId',
        'approved_at_utc' => 'setApprovedAtUtc',
        'data_access_expires_at_utc' => 'setDataAccessExpiresAtUtc',
        'revoked_at_utc' => 'setRevokedAtUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approver' => 'getApprover',
        'id' => 'getId',
        'template_id' => 'getTemplateId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'purpose' => 'getPurpose',
        'status' => 'getStatus',
        'transaction_id' => 'getTransactionId',
        'approved_at_utc' => 'getApprovedAtUtc',
        'data_access_expires_at_utc' => 'getDataAccessExpiresAtUtc',
        'revoked_at_utc' => 'getRevokedAtUtc'
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
        $this->container['approver'] = $data['approver'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['approved_at_utc'] = $data['approved_at_utc'] ?? null;
        $this->container['data_access_expires_at_utc'] = $data['data_access_expires_at_utc'] ?? null;
        $this->container['revoked_at_utc'] = $data['revoked_at_utc'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['approver'] === null) {
            $invalidProperties[] = "'approver' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['approved_at_utc'] === null) {
            $invalidProperties[] = "'approved_at_utc' can't be null";
        }
        if ($this->container['data_access_expires_at_utc'] === null) {
            $invalidProperties[] = "'data_access_expires_at_utc' can't be null";
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
     * Gets approver
     *
     * @return string
     */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
     * Sets approver
     *
     * @param string $approver Name of consent approver individual.
     *
     * @return self
     */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;

        return $this;
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
     * @param string $id Data consent id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id Consent template id.
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Consent title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $description Consent description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose Consent purpose.
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \MyDataMyConsent\Model\DataConsentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MyDataMyConsent\Model\DataConsentStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Transaction id.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets approved_at_utc
     *
     * @return \DateTime
     */
    public function getApprovedAtUtc()
    {
        return $this->container['approved_at_utc'];
    }

    /**
     * Sets approved_at_utc
     *
     * @param \DateTime $approved_at_utc Consent approval datetime in UTC timezone.
     *
     * @return self
     */
    public function setApprovedAtUtc($approved_at_utc)
    {
        $this->container['approved_at_utc'] = $approved_at_utc;

        return $this;
    }

    /**
     * Gets data_access_expires_at_utc
     *
     * @return \DateTime
     */
    public function getDataAccessExpiresAtUtc()
    {
        return $this->container['data_access_expires_at_utc'];
    }

    /**
     * Sets data_access_expires_at_utc
     *
     * @param \DateTime $data_access_expires_at_utc Data access expiration datetime in UTC timezone.
     *
     * @return self
     */
    public function setDataAccessExpiresAtUtc($data_access_expires_at_utc)
    {
        $this->container['data_access_expires_at_utc'] = $data_access_expires_at_utc;

        return $this;
    }

    /**
     * Gets revoked_at_utc
     *
     * @return \DateTime|null
     */
    public function getRevokedAtUtc()
    {
        return $this->container['revoked_at_utc'];
    }

    /**
     * Sets revoked_at_utc
     *
     * @param \DateTime|null $revoked_at_utc Consent revocation datetime in UTC timezone.
     *
     * @return self
     */
    public function setRevokedAtUtc($revoked_at_utc)
    {
        $this->container['revoked_at_utc'] = $revoked_at_utc;

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


