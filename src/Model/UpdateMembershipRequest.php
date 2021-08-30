<?php
/**
 * UpdateMembershipRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swaagger Codegen team
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
 * Swagger Codegen version: 2.4.21-SNAPSHOT
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
 * UpdateMembershipRequest Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateMembershipRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateMembershipRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => '?string',
        'permission_profile' => '\DocuSign\Admin\Model\PermissionProfileRequest',
        'groups' => '\DocuSign\Admin\Model\GroupRequest[]',
        'company_name' => '?string',
        'job_title' => '?string',
        'send_activation' => '?bool',
        'access_code' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'uuid',
        'permission_profile' => null,
        'groups' => null,
        'company_name' => null,
        'job_title' => null,
        'send_activation' => null,
        'access_code' => null
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
        'account_id' => 'account_id',
        'permission_profile' => 'permission_profile',
        'groups' => 'groups',
        'company_name' => 'company_name',
        'job_title' => 'job_title',
        'send_activation' => 'send_activation',
        'access_code' => 'access_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'permission_profile' => 'setPermissionProfile',
        'groups' => 'setGroups',
        'company_name' => 'setCompanyName',
        'job_title' => 'setJobTitle',
        'send_activation' => 'setSendActivation',
        'access_code' => 'setAccessCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'permission_profile' => 'getPermissionProfile',
        'groups' => 'getGroups',
        'company_name' => 'getCompanyName',
        'job_title' => 'getJobTitle',
        'send_activation' => 'getSendActivation',
        'access_code' => 'getAccessCode'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['permission_profile'] = isset($data['permission_profile']) ? $data['permission_profile'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['send_activation'] = isset($data['send_activation']) ? $data['send_activation'] : null;
        $this->container['access_code'] = isset($data['access_code']) ? $data['access_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
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
     * Gets account_id
     *
     * @return ?string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param ?string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets permission_profile
     *
     * @return \DocuSign\Admin\Model\PermissionProfileRequest
     */
    public function getPermissionProfile()
    {
        return $this->container['permission_profile'];
    }

    /**
     * Sets permission_profile
     *
     * @param \DocuSign\Admin\Model\PermissionProfileRequest $permission_profile permission_profile
     *
     * @return $this
     */
    public function setPermissionProfile($permission_profile)
    {
        $this->container['permission_profile'] = $permission_profile;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \DocuSign\Admin\Model\GroupRequest[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \DocuSign\Admin\Model\GroupRequest[] $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return ?string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param ?string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return ?string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param ?string $job_title job_title
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets send_activation
     *
     * @return ?bool
     */
    public function getSendActivation()
    {
        return $this->container['send_activation'];
    }

    /**
     * Sets send_activation
     *
     * @param ?bool $send_activation send_activation
     *
     * @return $this
     */
    public function setSendActivation($send_activation)
    {
        $this->container['send_activation'] = $send_activation;

        return $this;
    }

    /**
     * Gets access_code
     *
     * @return ?string
     */
    public function getAccessCode()
    {
        return $this->container['access_code'];
    }

    /**
     * Sets access_code
     *
     * @param ?string $access_code access_code
     *
     * @return $this
     */
    public function setAccessCode($access_code)
    {
        $this->container['access_code'] = $access_code;

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
     * @return mixed
     */
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

