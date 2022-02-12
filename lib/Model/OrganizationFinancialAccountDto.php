<?php
/**
 * OrganizationFinancialAccountDto
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
 * OrganizationFinancialAccountDto Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrganizationFinancialAccountDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationFinancialAccountDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'organization_id' => 'string',
        'organization_name' => 'string',
        'beneficiary_name' => 'string',
        'account_number' => 'string',
        'routing_number' => 'string',
        'is_primary' => 'bool',
        'is_verified' => 'bool',
        'logo_url' => 'string',
        'bank_name' => 'string',
        'bank_account_type' => '\MyDataMyConsent\Model\BankAccountType',
        'bank_account_proof_url' => 'string',
        'file_type' => '\MyDataMyConsent\Model\FileType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'organization_id' => 'uuid',
        'organization_name' => null,
        'beneficiary_name' => null,
        'account_number' => null,
        'routing_number' => null,
        'is_primary' => null,
        'is_verified' => null,
        'logo_url' => null,
        'bank_name' => null,
        'bank_account_type' => null,
        'bank_account_proof_url' => null,
        'file_type' => null
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
        'organization_id' => 'organizationId',
        'organization_name' => 'organizationName',
        'beneficiary_name' => 'beneficiaryName',
        'account_number' => 'accountNumber',
        'routing_number' => 'routingNumber',
        'is_primary' => 'isPrimary',
        'is_verified' => 'isVerified',
        'logo_url' => 'logoUrl',
        'bank_name' => 'bankName',
        'bank_account_type' => 'bankAccountType',
        'bank_account_proof_url' => 'bankAccountProofUrl',
        'file_type' => 'fileType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'organization_name' => 'setOrganizationName',
        'beneficiary_name' => 'setBeneficiaryName',
        'account_number' => 'setAccountNumber',
        'routing_number' => 'setRoutingNumber',
        'is_primary' => 'setIsPrimary',
        'is_verified' => 'setIsVerified',
        'logo_url' => 'setLogoUrl',
        'bank_name' => 'setBankName',
        'bank_account_type' => 'setBankAccountType',
        'bank_account_proof_url' => 'setBankAccountProofUrl',
        'file_type' => 'setFileType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'organization_name' => 'getOrganizationName',
        'beneficiary_name' => 'getBeneficiaryName',
        'account_number' => 'getAccountNumber',
        'routing_number' => 'getRoutingNumber',
        'is_primary' => 'getIsPrimary',
        'is_verified' => 'getIsVerified',
        'logo_url' => 'getLogoUrl',
        'bank_name' => 'getBankName',
        'bank_account_type' => 'getBankAccountType',
        'bank_account_proof_url' => 'getBankAccountProofUrl',
        'file_type' => 'getFileType'
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
        $this->container['organization_id'] = $data['organization_id'] ?? null;
        $this->container['organization_name'] = $data['organization_name'] ?? null;
        $this->container['beneficiary_name'] = $data['beneficiary_name'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['is_primary'] = $data['is_primary'] ?? null;
        $this->container['is_verified'] = $data['is_verified'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['bank_account_type'] = $data['bank_account_type'] ?? null;
        $this->container['bank_account_proof_url'] = $data['bank_account_proof_url'] ?? null;
        $this->container['file_type'] = $data['file_type'] ?? null;
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
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id organization_id
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name organization_name
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets beneficiary_name
     *
     * @return string|null
     */
    public function getBeneficiaryName()
    {
        return $this->container['beneficiary_name'];
    }

    /**
     * Sets beneficiary_name
     *
     * @param string|null $beneficiary_name beneficiary_name
     *
     * @return self
     */
    public function setBeneficiaryName($beneficiary_name)
    {
        $this->container['beneficiary_name'] = $beneficiary_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets routing_number
     *
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string|null $routing_number routing_number
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool|null $is_primary is_primary
     *
     * @return self
     */
    public function setIsPrimary($is_primary)
    {
        $this->container['is_primary'] = $is_primary;

        return $this;
    }

    /**
     * Gets is_verified
     *
     * @return bool|null
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     *
     * @param bool|null $is_verified is_verified
     *
     * @return self
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

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
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_account_type
     *
     * @return \MyDataMyConsent\Model\BankAccountType|null
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param \MyDataMyConsent\Model\BankAccountType|null $bank_account_type bank_account_type
     *
     * @return self
     */
    public function setBankAccountType($bank_account_type)
    {
        $this->container['bank_account_type'] = $bank_account_type;

        return $this;
    }

    /**
     * Gets bank_account_proof_url
     *
     * @return string|null
     */
    public function getBankAccountProofUrl()
    {
        return $this->container['bank_account_proof_url'];
    }

    /**
     * Sets bank_account_proof_url
     *
     * @param string|null $bank_account_proof_url bank_account_proof_url
     *
     * @return self
     */
    public function setBankAccountProofUrl($bank_account_proof_url)
    {
        $this->container['bank_account_proof_url'] = $bank_account_proof_url;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return \MyDataMyConsent\Model\FileType|null
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param \MyDataMyConsent\Model\FileType|null $file_type file_type
     *
     * @return self
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

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

