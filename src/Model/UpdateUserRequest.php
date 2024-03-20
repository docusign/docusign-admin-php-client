<?php
/**
 * UpdateUserRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Admin API
 *
 * An API for an organization administrator to manage organizations, accounts and users
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Admin\Model;

use \ArrayAccess;
use DocuSign\Admin\ObjectSerializer;

/**
 * UpdateUserRequest Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateUserRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateUserRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '?string',
        'site_id' => '?int',
        'user_name' => '?string',
        'first_name' => '?string',
        'last_name' => '?string',
        'email' => '?string',
        'default_account_id' => '?string',
        'language_culture' => '?string',
        'selected_languages' => '?string',
        'federated_status' => '?string',
        'force_password_change' => '?bool',
        'memberships' => '\DocuSign\Admin\Model\UpdateMembershipRequest[]',
        'device_verification_enabled' => '?bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'site_id' => 'int32',
        'user_name' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'default_account_id' => 'uuid',
        'language_culture' => null,
        'selected_languages' => null,
        'federated_status' => null,
        'force_password_change' => null,
        'memberships' => null,
        'device_verification_enabled' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'site_id' => 'site_id',
        'user_name' => 'user_name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'default_account_id' => 'default_account_id',
        'language_culture' => 'language_culture',
        'selected_languages' => 'selected_languages',
        'federated_status' => 'federated_status',
        'force_password_change' => 'force_password_change',
        'memberships' => 'memberships',
        'device_verification_enabled' => 'device_verification_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'site_id' => 'setSiteId',
        'user_name' => 'setUserName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'default_account_id' => 'setDefaultAccountId',
        'language_culture' => 'setLanguageCulture',
        'selected_languages' => 'setSelectedLanguages',
        'federated_status' => 'setFederatedStatus',
        'force_password_change' => 'setForcePasswordChange',
        'memberships' => 'setMemberships',
        'device_verification_enabled' => 'setDeviceVerificationEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'site_id' => 'getSiteId',
        'user_name' => 'getUserName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'default_account_id' => 'getDefaultAccountId',
        'language_culture' => 'getLanguageCulture',
        'selected_languages' => 'getSelectedLanguages',
        'federated_status' => 'getFederatedStatus',
        'force_password_change' => 'getForcePasswordChange',
        'memberships' => 'getMemberships',
        'device_verification_enabled' => 'getDeviceVerificationEnabled'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['default_account_id'] = isset($data['default_account_id']) ? $data['default_account_id'] : null;
        $this->container['language_culture'] = isset($data['language_culture']) ? $data['language_culture'] : null;
        $this->container['selected_languages'] = isset($data['selected_languages']) ? $data['selected_languages'] : null;
        $this->container['federated_status'] = isset($data['federated_status']) ? $data['federated_status'] : null;
        $this->container['force_password_change'] = isset($data['force_password_change']) ? $data['force_password_change'] : null;
        $this->container['memberships'] = isset($data['memberships']) ? $data['memberships'] : null;
        $this->container['device_verification_enabled'] = isset($data['device_verification_enabled']) ? $data['device_verification_enabled'] : null;
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
        if ($this->container['site_id'] === null) {
            $invalidProperties[] = "'site_id' can't be null";
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
     * @return ?string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param ?string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return ?int
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param ?int $site_id site_id
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return ?string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param ?string $user_name user_name
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return ?string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param ?string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return ?string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param ?string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets default_account_id
     *
     * @return ?string
     */
    public function getDefaultAccountId()
    {
        return $this->container['default_account_id'];
    }

    /**
     * Sets default_account_id
     *
     * @param ?string $default_account_id default_account_id
     *
     * @return $this
     */
    public function setDefaultAccountId($default_account_id)
    {
        $this->container['default_account_id'] = $default_account_id;

        return $this;
    }

    /**
     * Gets language_culture
     *
     * @return ?string
     */
    public function getLanguageCulture()
    {
        return $this->container['language_culture'];
    }

    /**
     * Sets language_culture
     *
     * @param ?string $language_culture language_culture
     *
     * @return $this
     */
    public function setLanguageCulture($language_culture)
    {
        $this->container['language_culture'] = $language_culture;

        return $this;
    }

    /**
     * Gets selected_languages
     *
     * @return ?string
     */
    public function getSelectedLanguages()
    {
        return $this->container['selected_languages'];
    }

    /**
     * Sets selected_languages
     *
     * @param ?string $selected_languages selected_languages
     *
     * @return $this
     */
    public function setSelectedLanguages($selected_languages)
    {
        $this->container['selected_languages'] = $selected_languages;

        return $this;
    }

    /**
     * Gets federated_status
     *
     * @return ?string
     */
    public function getFederatedStatus()
    {
        return $this->container['federated_status'];
    }

    /**
     * Sets federated_status
     *
     * @param ?string $federated_status federated_status
     *
     * @return $this
     */
    public function setFederatedStatus($federated_status)
    {
        $this->container['federated_status'] = $federated_status;

        return $this;
    }

    /**
     * Gets force_password_change
     *
     * @return ?bool
     */
    public function getForcePasswordChange()
    {
        return $this->container['force_password_change'];
    }

    /**
     * Sets force_password_change
     *
     * @param ?bool $force_password_change force_password_change
     *
     * @return $this
     */
    public function setForcePasswordChange($force_password_change)
    {
        $this->container['force_password_change'] = $force_password_change;

        return $this;
    }

    /**
     * Gets memberships
     *
     * @return \DocuSign\Admin\Model\UpdateMembershipRequest[]
     */
    public function getMemberships()
    {
        return $this->container['memberships'];
    }

    /**
     * Sets memberships
     *
     * @param \DocuSign\Admin\Model\UpdateMembershipRequest[] $memberships memberships
     *
     * @return $this
     */
    public function setMemberships($memberships)
    {
        $this->container['memberships'] = $memberships;

        return $this;
    }

    /**
     * Gets device_verification_enabled
     *
     * @return ?bool
     */
    public function getDeviceVerificationEnabled()
    {
        return $this->container['device_verification_enabled'];
    }

    /**
     * Sets device_verification_enabled
     *
     * @param ?bool $device_verification_enabled device_verification_enabled
     *
     * @return $this
     */
    public function setDeviceVerificationEnabled($device_verification_enabled)
    {
        $this->container['device_verification_enabled'] = $device_verification_enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

