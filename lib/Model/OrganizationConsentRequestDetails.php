<?php
/**
 * OrganizationConsentRequestDetails
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
 * OrganizationConsentRequestDetails Class Doc Comment
 *
 * @category Class
 * @description OrganizationConsentRequestDetails : Organization consent request details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationConsentRequestDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationConsentRequestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'receiver' => 'string',
        'id' => 'string',
        'template_id' => 'string',
        'consent_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'purpose' => 'string',
        'status' => '\MyDataMyConsent\Model\DataConsentStatus',
        'transaction_id' => 'string',
        'created_at_utc' => '\DateTime',
        'expires_at_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'receiver' => null,
        'id' => null,
        'template_id' => null,
        'consent_id' => null,
        'title' => null,
        'description' => null,
        'purpose' => null,
        'status' => null,
        'transaction_id' => null,
        'created_at_utc' => 'date-time',
        'expires_at_utc' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'receiver' => false,
		'id' => false,
		'template_id' => false,
		'consent_id' => false,
		'title' => false,
		'description' => false,
		'purpose' => false,
		'status' => false,
		'transaction_id' => false,
		'created_at_utc' => false,
		'expires_at_utc' => false
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
        'receiver' => 'receiver',
        'id' => 'id',
        'template_id' => 'templateId',
        'consent_id' => 'consentId',
        'title' => 'title',
        'description' => 'description',
        'purpose' => 'purpose',
        'status' => 'status',
        'transaction_id' => 'transactionId',
        'created_at_utc' => 'createdAtUtc',
        'expires_at_utc' => 'expiresAtUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receiver' => 'setReceiver',
        'id' => 'setId',
        'template_id' => 'setTemplateId',
        'consent_id' => 'setConsentId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'purpose' => 'setPurpose',
        'status' => 'setStatus',
        'transaction_id' => 'setTransactionId',
        'created_at_utc' => 'setCreatedAtUtc',
        'expires_at_utc' => 'setExpiresAtUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receiver' => 'getReceiver',
        'id' => 'getId',
        'template_id' => 'getTemplateId',
        'consent_id' => 'getConsentId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'purpose' => 'getPurpose',
        'status' => 'getStatus',
        'transaction_id' => 'getTransactionId',
        'created_at_utc' => 'getCreatedAtUtc',
        'expires_at_utc' => 'getExpiresAtUtc'
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
        $this->setIfExists('receiver', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('consent_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('created_at_utc', $data ?? [], null);
        $this->setIfExists('expires_at_utc', $data ?? [], null);
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

        if ($this->container['receiver'] === null) {
            $invalidProperties[] = "'receiver' can't be null";
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
        if ($this->container['created_at_utc'] === null) {
            $invalidProperties[] = "'created_at_utc' can't be null";
        }
        if ($this->container['expires_at_utc'] === null) {
            $invalidProperties[] = "'expires_at_utc' can't be null";
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
     * Gets receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param string $receiver Name of request receiver organization.
     *
     * @return self
     */
    public function setReceiver($receiver)
    {

        if (is_null($receiver)) {
            throw new \InvalidArgumentException('non-nullable receiver cannot be null');
        }

        $this->container['receiver'] = $receiver;

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
     * @param string $id Consent request id
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
     * @param string|null $template_id Consent request template id
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {

        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }

        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets consent_id
     *
     * @return string|null
     */
    public function getConsentId()
    {
        return $this->container['consent_id'];
    }

    /**
     * Sets consent_id
     *
     * @param string|null $consent_id Consent id
     *
     * @return self
     */
    public function setConsentId($consent_id)
    {

        if (is_null($consent_id)) {
            throw new \InvalidArgumentException('non-nullable consent_id cannot be null');
        }

        $this->container['consent_id'] = $consent_id;

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
     * @param string $title Consent request title.
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

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
     * @param string $description Consent request description.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

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
     * @param string|null $purpose Consent request purpose.
     *
     * @return self
     */
    public function setPurpose($purpose)
    {

        if (is_null($purpose)) {
            throw new \InvalidArgumentException('non-nullable purpose cannot be null');
        }

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

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

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
     * @param string|null $transaction_id Transaction id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {

        if (is_null($transaction_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_id cannot be null');
        }

        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets created_at_utc
     *
     * @return \DateTime
     */
    public function getCreatedAtUtc()
    {
        return $this->container['created_at_utc'];
    }

    /**
     * Sets created_at_utc
     *
     * @param \DateTime $created_at_utc Request creation datetime in UTC timezone
     *
     * @return self
     */
    public function setCreatedAtUtc($created_at_utc)
    {

        if (is_null($created_at_utc)) {
            throw new \InvalidArgumentException('non-nullable created_at_utc cannot be null');
        }

        $this->container['created_at_utc'] = $created_at_utc;

        return $this;
    }

    /**
     * Gets expires_at_utc
     *
     * @return \DateTime
     */
    public function getExpiresAtUtc()
    {
        return $this->container['expires_at_utc'];
    }

    /**
     * Sets expires_at_utc
     *
     * @param \DateTime $expires_at_utc Request expiration datetime in UTC timezone
     *
     * @return self
     */
    public function setExpiresAtUtc($expires_at_utc)
    {

        if (is_null($expires_at_utc)) {
            throw new \InvalidArgumentException('non-nullable expires_at_utc cannot be null');
        }

        $this->container['expires_at_utc'] = $expires_at_utc;

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

