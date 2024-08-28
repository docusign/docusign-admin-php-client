<?php
/**
 * SubAccountCreateWorker
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docusign Admin API
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
 * SubAccountCreateWorker Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Admin
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The Docusign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubAccountCreateWorker implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubAccountCreateWorker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target_account' => '\DocuSign\Admin\Model\SubAccountCreateTargetAccount',
        'subscription_details' => '\DocuSign\Admin\Model\SubAccountCreateSubscriptionDetails',
        'asset_group_work_id' => '?string',
        'asset_group_id' => '?string',
        'asset_group_work_type' => '?string',
        'status' => '?string',
        'order_id' => '?string',
        'attempts' => '?int',
        'created_date' => '\DateTime',
        'created_by_name' => '?string',
        'created_by_email' => '?string',
        'message' => '?string',
        'create_account_processing_failure_details' => '\DocuSign\Admin\Model\SubAccountErrorDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target_account' => null,
        'subscription_details' => null,
        'asset_group_work_id' => 'uuid',
        'asset_group_id' => 'uuid',
        'asset_group_work_type' => null,
        'status' => null,
        'order_id' => 'uuid',
        'attempts' => 'int32',
        'created_date' => 'date-time',
        'created_by_name' => null,
        'created_by_email' => null,
        'message' => null,
        'create_account_processing_failure_details' => null
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
        'target_account' => 'targetAccount',
        'subscription_details' => 'subscriptionDetails',
        'asset_group_work_id' => 'assetGroupWorkId',
        'asset_group_id' => 'assetGroupId',
        'asset_group_work_type' => 'assetGroupWorkType',
        'status' => 'status',
        'order_id' => 'orderId',
        'attempts' => 'attempts',
        'created_date' => 'createdDate',
        'created_by_name' => 'createdByName',
        'created_by_email' => 'createdByEmail',
        'message' => 'message',
        'create_account_processing_failure_details' => 'createAccountProcessingFailureDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_account' => 'setTargetAccount',
        'subscription_details' => 'setSubscriptionDetails',
        'asset_group_work_id' => 'setAssetGroupWorkId',
        'asset_group_id' => 'setAssetGroupId',
        'asset_group_work_type' => 'setAssetGroupWorkType',
        'status' => 'setStatus',
        'order_id' => 'setOrderId',
        'attempts' => 'setAttempts',
        'created_date' => 'setCreatedDate',
        'created_by_name' => 'setCreatedByName',
        'created_by_email' => 'setCreatedByEmail',
        'message' => 'setMessage',
        'create_account_processing_failure_details' => 'setCreateAccountProcessingFailureDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_account' => 'getTargetAccount',
        'subscription_details' => 'getSubscriptionDetails',
        'asset_group_work_id' => 'getAssetGroupWorkId',
        'asset_group_id' => 'getAssetGroupId',
        'asset_group_work_type' => 'getAssetGroupWorkType',
        'status' => 'getStatus',
        'order_id' => 'getOrderId',
        'attempts' => 'getAttempts',
        'created_date' => 'getCreatedDate',
        'created_by_name' => 'getCreatedByName',
        'created_by_email' => 'getCreatedByEmail',
        'message' => 'getMessage',
        'create_account_processing_failure_details' => 'getCreateAccountProcessingFailureDetails'
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

    const ASSET_GROUP_WORK_TYPE_UNDEFINED = 'Undefined';
    const ASSET_GROUP_WORK_TYPE_GROUP_ASSET_FULFILLMENT = 'GroupAssetFulfillment';
    const ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_FULFILLMENT = 'AccountAssetFulfillment';
    const ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_CLONE = 'AccountAssetClone';
    const ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_CREATE = 'AccountAssetCreate';
    const ASSET_GROUP_WORK_TYPE_SUBSCRIPTION_SYNC = 'SubscriptionSync';
    const STATUS_UNDEFINED = 'Undefined';
    const STATUS_PENDING = 'Pending';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_PROCESSING_ON_HOLD = 'ProcessingOnHold';
    const STATUS_PENDING_ERROR = 'PendingError';
    const STATUS_PROCESSING_ERROR = 'ProcessingError';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_CANCELED = 'Canceled';
    const STATUS_PERMANENT_FAILURE = 'PermanentFailure';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssetGroupWorkTypeAllowableValues()
    {
        return [
            self::ASSET_GROUP_WORK_TYPE_UNDEFINED,
            self::ASSET_GROUP_WORK_TYPE_GROUP_ASSET_FULFILLMENT,
            self::ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_FULFILLMENT,
            self::ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_CLONE,
            self::ASSET_GROUP_WORK_TYPE_ACCOUNT_ASSET_CREATE,
            self::ASSET_GROUP_WORK_TYPE_SUBSCRIPTION_SYNC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNDEFINED,
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_PROCESSING_ON_HOLD,
            self::STATUS_PENDING_ERROR,
            self::STATUS_PROCESSING_ERROR,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELED,
            self::STATUS_PERMANENT_FAILURE,
        ];
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
        $this->container['target_account'] = isset($data['target_account']) ? $data['target_account'] : null;
        $this->container['subscription_details'] = isset($data['subscription_details']) ? $data['subscription_details'] : null;
        $this->container['asset_group_work_id'] = isset($data['asset_group_work_id']) ? $data['asset_group_work_id'] : null;
        $this->container['asset_group_id'] = isset($data['asset_group_id']) ? $data['asset_group_id'] : null;
        $this->container['asset_group_work_type'] = isset($data['asset_group_work_type']) ? $data['asset_group_work_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_by_name'] = isset($data['created_by_name']) ? $data['created_by_name'] : null;
        $this->container['created_by_email'] = isset($data['created_by_email']) ? $data['created_by_email'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['create_account_processing_failure_details'] = isset($data['create_account_processing_failure_details']) ? $data['create_account_processing_failure_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['target_account'] === null) {
            $invalidProperties[] = "'target_account' can't be null";
        }
        if ($this->container['subscription_details'] === null) {
            $invalidProperties[] = "'subscription_details' can't be null";
        }
        $allowedValues = $this->getAssetGroupWorkTypeAllowableValues();
        if (!is_null($this->container['asset_group_work_type']) && !in_array($this->container['asset_group_work_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'asset_group_work_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets target_account
     *
     * @return \DocuSign\Admin\Model\SubAccountCreateTargetAccount
     */
    public function getTargetAccount()
    {
        return $this->container['target_account'];
    }

    /**
     * Sets target_account
     *
     * @param \DocuSign\Admin\Model\SubAccountCreateTargetAccount $target_account The target account being created
     *
     * @return $this
     */
    public function setTargetAccount($target_account)
    {
        $this->container['target_account'] = $target_account;

        return $this;
    }

    /**
     * Gets subscription_details
     *
     * @return \DocuSign\Admin\Model\SubAccountCreateSubscriptionDetails
     */
    public function getSubscriptionDetails()
    {
        return $this->container['subscription_details'];
    }

    /**
     * Sets subscription_details
     *
     * @param \DocuSign\Admin\Model\SubAccountCreateSubscriptionDetails $subscription_details The subscription info to create the account
     *
     * @return $this
     */
    public function setSubscriptionDetails($subscription_details)
    {
        $this->container['subscription_details'] = $subscription_details;

        return $this;
    }

    /**
     * Gets asset_group_work_id
     *
     * @return ?string
     */
    public function getAssetGroupWorkId()
    {
        return $this->container['asset_group_work_id'];
    }

    /**
     * Sets asset_group_work_id
     *
     * @param ?string $asset_group_work_id The create account work id.
     *
     * @return $this
     */
    public function setAssetGroupWorkId($asset_group_work_id)
    {
        $this->container['asset_group_work_id'] = $asset_group_work_id;

        return $this;
    }

    /**
     * Gets asset_group_id
     *
     * @return ?string
     */
    public function getAssetGroupId()
    {
        return $this->container['asset_group_id'];
    }

    /**
     * Sets asset_group_id
     *
     * @param ?string $asset_group_id The asset group id the accounts belong to.
     *
     * @return $this
     */
    public function setAssetGroupId($asset_group_id)
    {
        $this->container['asset_group_id'] = $asset_group_id;

        return $this;
    }

    /**
     * Gets asset_group_work_type
     *
     * @return ?string
     */
    public function getAssetGroupWorkType()
    {
        return $this->container['asset_group_work_type'];
    }

    /**
     * Sets asset_group_work_type
     *
     * @param ?string $asset_group_work_type The type of asset group work.
     *
     * @return $this
     */
    public function setAssetGroupWorkType($asset_group_work_type)
    {
        $allowedValues = $this->getAssetGroupWorkTypeAllowableValues();
        if (!is_null($asset_group_work_type) && !in_array($asset_group_work_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'asset_group_work_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['asset_group_work_type'] = $asset_group_work_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status The account creation status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return ?string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param ?string $order_id The order id created by the creation work.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return ?int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param ?int $attempts The number of times the work has been attempted.
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date The date the account creation work is initiated.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets created_by_name
     *
     * @return ?string
     */
    public function getCreatedByName()
    {
        return $this->container['created_by_name'];
    }

    /**
     * Sets created_by_name
     *
     * @param ?string $created_by_name The name of the initiator of the account creation work.
     *
     * @return $this
     */
    public function setCreatedByName($created_by_name)
    {
        $this->container['created_by_name'] = $created_by_name;

        return $this;
    }

    /**
     * Gets created_by_email
     *
     * @return ?string
     */
    public function getCreatedByEmail()
    {
        return $this->container['created_by_email'];
    }

    /**
     * Sets created_by_email
     *
     * @param ?string $created_by_email The email of the creator of the account creation work.
     *
     * @return $this
     */
    public function setCreatedByEmail($created_by_email)
    {
        $this->container['created_by_email'] = $created_by_email;

        return $this;
    }

    /**
     * Gets message
     *
     * @return ?string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param ?string $message The message associated with the account creation work.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets create_account_processing_failure_details
     *
     * @return \DocuSign\Admin\Model\SubAccountErrorDetails
     */
    public function getCreateAccountProcessingFailureDetails()
    {
        return $this->container['create_account_processing_failure_details'];
    }

    /**
     * Sets create_account_processing_failure_details
     *
     * @param \DocuSign\Admin\Model\SubAccountErrorDetails $create_account_processing_failure_details The processing failures if the work is in PendingError/ProcessingError status.
     *
     * @return $this
     */
    public function setCreateAccountProcessingFailureDetails($create_account_processing_failure_details)
    {
        $this->container['create_account_processing_failure_details'] = $create_account_processing_failure_details;

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

