<?php
/**
 * OrganizationUserResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
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
 * OrganizationUserResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrganizationUserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrganizationUserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '?string',
        'user_name' => '?string',
        'first_name' => '?string',
        'last_name' => '?string',
        'user_status' => '?string',
        'membership_status' => '?string',
        'email' => '?string',
        'created_on' => '\DateTime',
        'membership_created_on' => '\DateTime',
        'ds_groups' => '\DocuSign\Admin\Model\DSGroupResponse[]',
        'membership_id' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'user_name' => null,
        'first_name' => null,
        'last_name' => null,
        'user_status' => null,
        'membership_status' => null,
        'email' => null,
        'created_on' => 'date-time',
        'membership_created_on' => 'date-time',
        'ds_groups' => null,
        'membership_id' => 'uuid'
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
        'user_name' => 'user_name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'user_status' => 'user_status',
        'membership_status' => 'membership_status',
        'email' => 'email',
        'created_on' => 'created_on',
        'membership_created_on' => 'membership_created_on',
        'ds_groups' => 'ds_groups',
        'membership_id' => 'membership_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_name' => 'setUserName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'user_status' => 'setUserStatus',
        'membership_status' => 'setMembershipStatus',
        'email' => 'setEmail',
        'created_on' => 'setCreatedOn',
        'membership_created_on' => 'setMembershipCreatedOn',
        'ds_groups' => 'setDsGroups',
        'membership_id' => 'setMembershipId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_name' => 'getUserName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'user_status' => 'getUserStatus',
        'membership_status' => 'getMembershipStatus',
        'email' => 'getEmail',
        'created_on' => 'getCreatedOn',
        'membership_created_on' => 'getMembershipCreatedOn',
        'ds_groups' => 'getDsGroups',
        'membership_id' => 'getMembershipId'
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
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['membership_status'] = isset($data['membership_status']) ? $data['membership_status'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['membership_created_on'] = isset($data['membership_created_on']) ? $data['membership_created_on'] : null;
        $this->container['ds_groups'] = isset($data['ds_groups']) ? $data['ds_groups'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
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
     * Gets user_status
     *
     * @return ?string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param ?string $user_status user_status
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets membership_status
     *
     * @return ?string
     */
    public function getMembershipStatus()
    {
        return $this->container['membership_status'];
    }

    /**
     * Sets membership_status
     *
     * @param ?string $membership_status membership_status
     *
     * @return $this
     */
    public function setMembershipStatus($membership_status)
    {
        $this->container['membership_status'] = $membership_status;

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
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on created_on
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets membership_created_on
     *
     * @return \DateTime
     */
    public function getMembershipCreatedOn()
    {
        return $this->container['membership_created_on'];
    }

    /**
     * Sets membership_created_on
     *
     * @param \DateTime $membership_created_on membership_created_on
     *
     * @return $this
     */
    public function setMembershipCreatedOn($membership_created_on)
    {
        $this->container['membership_created_on'] = $membership_created_on;

        return $this;
    }

    /**
     * Gets ds_groups
     *
     * @return \DocuSign\Admin\Model\DSGroupResponse[]
     */
    public function getDsGroups()
    {
        return $this->container['ds_groups'];
    }

    /**
     * Sets ds_groups
     *
     * @param \DocuSign\Admin\Model\DSGroupResponse[] $ds_groups ds_groups
     *
     * @return $this
     */
    public function setDsGroups($ds_groups)
    {
        $this->container['ds_groups'] = $ds_groups;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return ?string
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param ?string $membership_id membership_id
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

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

