<?php
/**
 * ApplicationUser
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
 * ApplicationUser Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApplicationUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_name' => 'string',
        'normalized_user_name' => 'string',
        'email' => 'string',
        'normalized_email' => 'string',
        'email_confirmed' => 'bool',
        'password_hash' => 'string',
        'security_stamp' => 'string',
        'concurrency_stamp' => 'string',
        'phone_number' => 'string',
        'phone_number_confirmed' => 'bool',
        'two_factor_enabled' => 'bool',
        'lockout_end' => '\DateTime',
        'lockout_enabled' => 'bool',
        'access_failed_count' => 'int',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'gender' => '\MyDataMyConsent\Model\Gender',
        'date_of_birth' => '\DateTime',
        'country_id' => 'string',
        'post_code' => 'string',
        'referred_by' => 'string',
        'language' => 'string',
        'theme' => '\MyDataMyConsent\Model\Theme',
        'designation' => 'string',
        'is_marked_for_deletion' => 'bool',
        'hard_delete_date' => '\DateTime',
        'security_pin' => 'string',
        'photo_url' => 'string',
        'referral_code' => 'string',
        'recovery_token' => 'string',
        'digi_locker_last_sync_date' => '\DateTime',
        'refresh_tokens' => '\MyDataMyConsent\Model\RefreshToken[]',
        'country' => '\MyDataMyConsent\Model\Country',
        'referred_by_user' => '\MyDataMyConsent\Model\ApplicationUser'
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
        'user_name' => null,
        'normalized_user_name' => null,
        'email' => null,
        'normalized_email' => null,
        'email_confirmed' => null,
        'password_hash' => null,
        'security_stamp' => null,
        'concurrency_stamp' => null,
        'phone_number' => null,
        'phone_number_confirmed' => null,
        'two_factor_enabled' => null,
        'lockout_end' => 'date-time',
        'lockout_enabled' => null,
        'access_failed_count' => 'int32',
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'full_name' => null,
        'gender' => null,
        'date_of_birth' => 'date-time',
        'country_id' => 'uuid',
        'post_code' => null,
        'referred_by' => 'uuid',
        'language' => null,
        'theme' => null,
        'designation' => null,
        'is_marked_for_deletion' => null,
        'hard_delete_date' => 'date-time',
        'security_pin' => null,
        'photo_url' => null,
        'referral_code' => null,
        'recovery_token' => null,
        'digi_locker_last_sync_date' => 'date-time',
        'refresh_tokens' => null,
        'country' => null,
        'referred_by_user' => null
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
        'user_name' => 'userName',
        'normalized_user_name' => 'normalizedUserName',
        'email' => 'email',
        'normalized_email' => 'normalizedEmail',
        'email_confirmed' => 'emailConfirmed',
        'password_hash' => 'passwordHash',
        'security_stamp' => 'securityStamp',
        'concurrency_stamp' => 'concurrencyStamp',
        'phone_number' => 'phoneNumber',
        'phone_number_confirmed' => 'phoneNumberConfirmed',
        'two_factor_enabled' => 'twoFactorEnabled',
        'lockout_end' => 'lockoutEnd',
        'lockout_enabled' => 'lockoutEnabled',
        'access_failed_count' => 'accessFailedCount',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'full_name' => 'fullName',
        'gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'country_id' => 'countryId',
        'post_code' => 'postCode',
        'referred_by' => 'referredBy',
        'language' => 'language',
        'theme' => 'theme',
        'designation' => 'designation',
        'is_marked_for_deletion' => 'isMarkedForDeletion',
        'hard_delete_date' => 'hardDeleteDate',
        'security_pin' => 'securityPin',
        'photo_url' => 'photoUrl',
        'referral_code' => 'referralCode',
        'recovery_token' => 'recoveryToken',
        'digi_locker_last_sync_date' => 'digiLockerLastSyncDate',
        'refresh_tokens' => 'refreshTokens',
        'country' => 'country',
        'referred_by_user' => 'referredByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_name' => 'setUserName',
        'normalized_user_name' => 'setNormalizedUserName',
        'email' => 'setEmail',
        'normalized_email' => 'setNormalizedEmail',
        'email_confirmed' => 'setEmailConfirmed',
        'password_hash' => 'setPasswordHash',
        'security_stamp' => 'setSecurityStamp',
        'concurrency_stamp' => 'setConcurrencyStamp',
        'phone_number' => 'setPhoneNumber',
        'phone_number_confirmed' => 'setPhoneNumberConfirmed',
        'two_factor_enabled' => 'setTwoFactorEnabled',
        'lockout_end' => 'setLockoutEnd',
        'lockout_enabled' => 'setLockoutEnabled',
        'access_failed_count' => 'setAccessFailedCount',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'full_name' => 'setFullName',
        'gender' => 'setGender',
        'date_of_birth' => 'setDateOfBirth',
        'country_id' => 'setCountryId',
        'post_code' => 'setPostCode',
        'referred_by' => 'setReferredBy',
        'language' => 'setLanguage',
        'theme' => 'setTheme',
        'designation' => 'setDesignation',
        'is_marked_for_deletion' => 'setIsMarkedForDeletion',
        'hard_delete_date' => 'setHardDeleteDate',
        'security_pin' => 'setSecurityPin',
        'photo_url' => 'setPhotoUrl',
        'referral_code' => 'setReferralCode',
        'recovery_token' => 'setRecoveryToken',
        'digi_locker_last_sync_date' => 'setDigiLockerLastSyncDate',
        'refresh_tokens' => 'setRefreshTokens',
        'country' => 'setCountry',
        'referred_by_user' => 'setReferredByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_name' => 'getUserName',
        'normalized_user_name' => 'getNormalizedUserName',
        'email' => 'getEmail',
        'normalized_email' => 'getNormalizedEmail',
        'email_confirmed' => 'getEmailConfirmed',
        'password_hash' => 'getPasswordHash',
        'security_stamp' => 'getSecurityStamp',
        'concurrency_stamp' => 'getConcurrencyStamp',
        'phone_number' => 'getPhoneNumber',
        'phone_number_confirmed' => 'getPhoneNumberConfirmed',
        'two_factor_enabled' => 'getTwoFactorEnabled',
        'lockout_end' => 'getLockoutEnd',
        'lockout_enabled' => 'getLockoutEnabled',
        'access_failed_count' => 'getAccessFailedCount',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'full_name' => 'getFullName',
        'gender' => 'getGender',
        'date_of_birth' => 'getDateOfBirth',
        'country_id' => 'getCountryId',
        'post_code' => 'getPostCode',
        'referred_by' => 'getReferredBy',
        'language' => 'getLanguage',
        'theme' => 'getTheme',
        'designation' => 'getDesignation',
        'is_marked_for_deletion' => 'getIsMarkedForDeletion',
        'hard_delete_date' => 'getHardDeleteDate',
        'security_pin' => 'getSecurityPin',
        'photo_url' => 'getPhotoUrl',
        'referral_code' => 'getReferralCode',
        'recovery_token' => 'getRecoveryToken',
        'digi_locker_last_sync_date' => 'getDigiLockerLastSyncDate',
        'refresh_tokens' => 'getRefreshTokens',
        'country' => 'getCountry',
        'referred_by_user' => 'getReferredByUser'
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
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['normalized_user_name'] = $data['normalized_user_name'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['normalized_email'] = $data['normalized_email'] ?? null;
        $this->container['email_confirmed'] = $data['email_confirmed'] ?? null;
        $this->container['password_hash'] = $data['password_hash'] ?? null;
        $this->container['security_stamp'] = $data['security_stamp'] ?? null;
        $this->container['concurrency_stamp'] = $data['concurrency_stamp'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['phone_number_confirmed'] = $data['phone_number_confirmed'] ?? null;
        $this->container['two_factor_enabled'] = $data['two_factor_enabled'] ?? null;
        $this->container['lockout_end'] = $data['lockout_end'] ?? null;
        $this->container['lockout_enabled'] = $data['lockout_enabled'] ?? null;
        $this->container['access_failed_count'] = $data['access_failed_count'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['date_of_birth'] = $data['date_of_birth'] ?? null;
        $this->container['country_id'] = $data['country_id'] ?? null;
        $this->container['post_code'] = $data['post_code'] ?? null;
        $this->container['referred_by'] = $data['referred_by'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['theme'] = $data['theme'] ?? null;
        $this->container['designation'] = $data['designation'] ?? null;
        $this->container['is_marked_for_deletion'] = $data['is_marked_for_deletion'] ?? null;
        $this->container['hard_delete_date'] = $data['hard_delete_date'] ?? null;
        $this->container['security_pin'] = $data['security_pin'] ?? null;
        $this->container['photo_url'] = $data['photo_url'] ?? null;
        $this->container['referral_code'] = $data['referral_code'] ?? null;
        $this->container['recovery_token'] = $data['recovery_token'] ?? null;
        $this->container['digi_locker_last_sync_date'] = $data['digi_locker_last_sync_date'] ?? null;
        $this->container['refresh_tokens'] = $data['refresh_tokens'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['referred_by_user'] = $data['referred_by_user'] ?? null;
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
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets normalized_user_name
     *
     * @return string|null
     */
    public function getNormalizedUserName()
    {
        return $this->container['normalized_user_name'];
    }

    /**
     * Sets normalized_user_name
     *
     * @param string|null $normalized_user_name normalized_user_name
     *
     * @return self
     */
    public function setNormalizedUserName($normalized_user_name)
    {
        $this->container['normalized_user_name'] = $normalized_user_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets normalized_email
     *
     * @return string|null
     */
    public function getNormalizedEmail()
    {
        return $this->container['normalized_email'];
    }

    /**
     * Sets normalized_email
     *
     * @param string|null $normalized_email normalized_email
     *
     * @return self
     */
    public function setNormalizedEmail($normalized_email)
    {
        $this->container['normalized_email'] = $normalized_email;

        return $this;
    }

    /**
     * Gets email_confirmed
     *
     * @return bool|null
     */
    public function getEmailConfirmed()
    {
        return $this->container['email_confirmed'];
    }

    /**
     * Sets email_confirmed
     *
     * @param bool|null $email_confirmed email_confirmed
     *
     * @return self
     */
    public function setEmailConfirmed($email_confirmed)
    {
        $this->container['email_confirmed'] = $email_confirmed;

        return $this;
    }

    /**
     * Gets password_hash
     *
     * @return string|null
     */
    public function getPasswordHash()
    {
        return $this->container['password_hash'];
    }

    /**
     * Sets password_hash
     *
     * @param string|null $password_hash password_hash
     *
     * @return self
     */
    public function setPasswordHash($password_hash)
    {
        $this->container['password_hash'] = $password_hash;

        return $this;
    }

    /**
     * Gets security_stamp
     *
     * @return string|null
     */
    public function getSecurityStamp()
    {
        return $this->container['security_stamp'];
    }

    /**
     * Sets security_stamp
     *
     * @param string|null $security_stamp security_stamp
     *
     * @return self
     */
    public function setSecurityStamp($security_stamp)
    {
        $this->container['security_stamp'] = $security_stamp;

        return $this;
    }

    /**
     * Gets concurrency_stamp
     *
     * @return string|null
     */
    public function getConcurrencyStamp()
    {
        return $this->container['concurrency_stamp'];
    }

    /**
     * Sets concurrency_stamp
     *
     * @param string|null $concurrency_stamp concurrency_stamp
     *
     * @return self
     */
    public function setConcurrencyStamp($concurrency_stamp)
    {
        $this->container['concurrency_stamp'] = $concurrency_stamp;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_number_confirmed
     *
     * @return bool|null
     */
    public function getPhoneNumberConfirmed()
    {
        return $this->container['phone_number_confirmed'];
    }

    /**
     * Sets phone_number_confirmed
     *
     * @param bool|null $phone_number_confirmed phone_number_confirmed
     *
     * @return self
     */
    public function setPhoneNumberConfirmed($phone_number_confirmed)
    {
        $this->container['phone_number_confirmed'] = $phone_number_confirmed;

        return $this;
    }

    /**
     * Gets two_factor_enabled
     *
     * @return bool|null
     */
    public function getTwoFactorEnabled()
    {
        return $this->container['two_factor_enabled'];
    }

    /**
     * Sets two_factor_enabled
     *
     * @param bool|null $two_factor_enabled two_factor_enabled
     *
     * @return self
     */
    public function setTwoFactorEnabled($two_factor_enabled)
    {
        $this->container['two_factor_enabled'] = $two_factor_enabled;

        return $this;
    }

    /**
     * Gets lockout_end
     *
     * @return \DateTime|null
     */
    public function getLockoutEnd()
    {
        return $this->container['lockout_end'];
    }

    /**
     * Sets lockout_end
     *
     * @param \DateTime|null $lockout_end lockout_end
     *
     * @return self
     */
    public function setLockoutEnd($lockout_end)
    {
        $this->container['lockout_end'] = $lockout_end;

        return $this;
    }

    /**
     * Gets lockout_enabled
     *
     * @return bool|null
     */
    public function getLockoutEnabled()
    {
        return $this->container['lockout_enabled'];
    }

    /**
     * Sets lockout_enabled
     *
     * @param bool|null $lockout_enabled lockout_enabled
     *
     * @return self
     */
    public function setLockoutEnabled($lockout_enabled)
    {
        $this->container['lockout_enabled'] = $lockout_enabled;

        return $this;
    }

    /**
     * Gets access_failed_count
     *
     * @return int|null
     */
    public function getAccessFailedCount()
    {
        return $this->container['access_failed_count'];
    }

    /**
     * Sets access_failed_count
     *
     * @param int|null $access_failed_count access_failed_count
     *
     * @return self
     */
    public function setAccessFailedCount($access_failed_count)
    {
        $this->container['access_failed_count'] = $access_failed_count;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \MyDataMyConsent\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \MyDataMyConsent\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string|null
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string|null $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string|null $post_code post_code
     *
     * @return self
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets referred_by
     *
     * @return string|null
     */
    public function getReferredBy()
    {
        return $this->container['referred_by'];
    }

    /**
     * Sets referred_by
     *
     * @param string|null $referred_by referred_by
     *
     * @return self
     */
    public function setReferredBy($referred_by)
    {
        $this->container['referred_by'] = $referred_by;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \MyDataMyConsent\Model\Theme|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \MyDataMyConsent\Model\Theme|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets designation
     *
     * @return string|null
     */
    public function getDesignation()
    {
        return $this->container['designation'];
    }

    /**
     * Sets designation
     *
     * @param string|null $designation designation
     *
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->container['designation'] = $designation;

        return $this;
    }

    /**
     * Gets is_marked_for_deletion
     *
     * @return bool|null
     */
    public function getIsMarkedForDeletion()
    {
        return $this->container['is_marked_for_deletion'];
    }

    /**
     * Sets is_marked_for_deletion
     *
     * @param bool|null $is_marked_for_deletion is_marked_for_deletion
     *
     * @return self
     */
    public function setIsMarkedForDeletion($is_marked_for_deletion)
    {
        $this->container['is_marked_for_deletion'] = $is_marked_for_deletion;

        return $this;
    }

    /**
     * Gets hard_delete_date
     *
     * @return \DateTime|null
     */
    public function getHardDeleteDate()
    {
        return $this->container['hard_delete_date'];
    }

    /**
     * Sets hard_delete_date
     *
     * @param \DateTime|null $hard_delete_date hard_delete_date
     *
     * @return self
     */
    public function setHardDeleteDate($hard_delete_date)
    {
        $this->container['hard_delete_date'] = $hard_delete_date;

        return $this;
    }

    /**
     * Gets security_pin
     *
     * @return string|null
     */
    public function getSecurityPin()
    {
        return $this->container['security_pin'];
    }

    /**
     * Sets security_pin
     *
     * @param string|null $security_pin security_pin
     *
     * @return self
     */
    public function setSecurityPin($security_pin)
    {
        $this->container['security_pin'] = $security_pin;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string|null
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string|null $photo_url photo_url
     *
     * @return self
     */
    public function setPhotoUrl($photo_url)
    {
        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets referral_code
     *
     * @return string|null
     */
    public function getReferralCode()
    {
        return $this->container['referral_code'];
    }

    /**
     * Sets referral_code
     *
     * @param string|null $referral_code referral_code
     *
     * @return self
     */
    public function setReferralCode($referral_code)
    {
        $this->container['referral_code'] = $referral_code;

        return $this;
    }

    /**
     * Gets recovery_token
     *
     * @return string|null
     */
    public function getRecoveryToken()
    {
        return $this->container['recovery_token'];
    }

    /**
     * Sets recovery_token
     *
     * @param string|null $recovery_token recovery_token
     *
     * @return self
     */
    public function setRecoveryToken($recovery_token)
    {
        $this->container['recovery_token'] = $recovery_token;

        return $this;
    }

    /**
     * Gets digi_locker_last_sync_date
     *
     * @return \DateTime|null
     */
    public function getDigiLockerLastSyncDate()
    {
        return $this->container['digi_locker_last_sync_date'];
    }

    /**
     * Sets digi_locker_last_sync_date
     *
     * @param \DateTime|null $digi_locker_last_sync_date digi_locker_last_sync_date
     *
     * @return self
     */
    public function setDigiLockerLastSyncDate($digi_locker_last_sync_date)
    {
        $this->container['digi_locker_last_sync_date'] = $digi_locker_last_sync_date;

        return $this;
    }

    /**
     * Gets refresh_tokens
     *
     * @return \MyDataMyConsent\Model\RefreshToken[]|null
     */
    public function getRefreshTokens()
    {
        return $this->container['refresh_tokens'];
    }

    /**
     * Sets refresh_tokens
     *
     * @param \MyDataMyConsent\Model\RefreshToken[]|null $refresh_tokens refresh_tokens
     *
     * @return self
     */
    public function setRefreshTokens($refresh_tokens)
    {
        $this->container['refresh_tokens'] = $refresh_tokens;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \MyDataMyConsent\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \MyDataMyConsent\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets referred_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getReferredByUser()
    {
        return $this->container['referred_by_user'];
    }

    /**
     * Sets referred_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $referred_by_user referred_by_user
     *
     * @return self
     */
    public function setReferredByUser($referred_by_user)
    {
        $this->container['referred_by_user'] = $referred_by_user;

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

