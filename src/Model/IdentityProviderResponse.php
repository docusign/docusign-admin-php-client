<?php
/**
 * IdentityProviderResponse
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
 * IdentityProviderResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IdentityProviderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IdentityProviderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '?string',
        'friendly_name' => '?string',
        'auto_provision_users' => '?bool',
        'type' => '?string',
        'saml_20' => '\DocuSign\Admin\Model\Saml2IdentityProviderResponse',
        'links' => '\DocuSign\Admin\Model\LinkResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'friendly_name' => null,
        'auto_provision_users' => null,
        'type' => null,
        'saml_20' => null,
        'links' => null
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
        'friendly_name' => 'friendly_name',
        'auto_provision_users' => 'auto_provision_users',
        'type' => 'type',
        'saml_20' => 'saml_20',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'friendly_name' => 'setFriendlyName',
        'auto_provision_users' => 'setAutoProvisionUsers',
        'type' => 'setType',
        'saml_20' => 'setSaml20',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'friendly_name' => 'getFriendlyName',
        'auto_provision_users' => 'getAutoProvisionUsers',
        'type' => 'getType',
        'saml_20' => 'getSaml20',
        'links' => 'getLinks'
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
        $this->container['friendly_name'] = isset($data['friendly_name']) ? $data['friendly_name'] : null;
        $this->container['auto_provision_users'] = isset($data['auto_provision_users']) ? $data['auto_provision_users'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['saml_20'] = isset($data['saml_20']) ? $data['saml_20'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets friendly_name
     *
     * @return ?string
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param ?string $friendly_name friendly_name
     *
     * @return $this
     */
    public function setFriendlyName($friendly_name)
    {
        $this->container['friendly_name'] = $friendly_name;

        return $this;
    }

    /**
     * Gets auto_provision_users
     *
     * @return ?bool
     */
    public function getAutoProvisionUsers()
    {
        return $this->container['auto_provision_users'];
    }

    /**
     * Sets auto_provision_users
     *
     * @param ?bool $auto_provision_users auto_provision_users
     *
     * @return $this
     */
    public function setAutoProvisionUsers($auto_provision_users)
    {
        $this->container['auto_provision_users'] = $auto_provision_users;

        return $this;
    }

    /**
     * Gets type
     *
     * @return ?string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param ?string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets saml_20
     *
     * @return \DocuSign\Admin\Model\Saml2IdentityProviderResponse
     */
    public function getSaml20()
    {
        return $this->container['saml_20'];
    }

    /**
     * Sets saml_20
     *
     * @param \DocuSign\Admin\Model\Saml2IdentityProviderResponse $saml_20 saml_20
     *
     * @return $this
     */
    public function setSaml20($saml_20)
    {
        $this->container['saml_20'] = $saml_20;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \DocuSign\Admin\Model\LinkResponse[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \DocuSign\Admin\Model\LinkResponse[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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

