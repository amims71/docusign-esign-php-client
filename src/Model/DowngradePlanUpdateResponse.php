<?php
/**
 * DowngradePlanUpdateResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
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

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * DowngradePlanUpdateResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DowngradePlanUpdateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'downgradePlanUpdateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_payment_method' => '?string',
        'discount_applied' => '?string',
        'downgrade_effective_date' => '?string',
        'downgrade_payment_cycle' => '?string',
        'downgrade_plan_id' => '?string',
        'downgrade_plan_name' => '?string',
        'downgrade_request_status' => '?string',
        'message' => '?string',
        'product_id' => '?string',
        'promo_code' => '?string',
        'sale_discount' => '?string',
        'sale_discount_periods' => '?string',
        'sale_discount_type' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_payment_method' => null,
        'discount_applied' => null,
        'downgrade_effective_date' => null,
        'downgrade_payment_cycle' => null,
        'downgrade_plan_id' => null,
        'downgrade_plan_name' => null,
        'downgrade_request_status' => null,
        'message' => null,
        'product_id' => null,
        'promo_code' => null,
        'sale_discount' => null,
        'sale_discount_periods' => null,
        'sale_discount_type' => null
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
        'account_payment_method' => 'accountPaymentMethod',
        'discount_applied' => 'discountApplied',
        'downgrade_effective_date' => 'downgradeEffectiveDate',
        'downgrade_payment_cycle' => 'downgradePaymentCycle',
        'downgrade_plan_id' => 'downgradePlanId',
        'downgrade_plan_name' => 'downgradePlanName',
        'downgrade_request_status' => 'downgradeRequestStatus',
        'message' => 'message',
        'product_id' => 'productId',
        'promo_code' => 'promoCode',
        'sale_discount' => 'saleDiscount',
        'sale_discount_periods' => 'saleDiscountPeriods',
        'sale_discount_type' => 'saleDiscountType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_payment_method' => 'setAccountPaymentMethod',
        'discount_applied' => 'setDiscountApplied',
        'downgrade_effective_date' => 'setDowngradeEffectiveDate',
        'downgrade_payment_cycle' => 'setDowngradePaymentCycle',
        'downgrade_plan_id' => 'setDowngradePlanId',
        'downgrade_plan_name' => 'setDowngradePlanName',
        'downgrade_request_status' => 'setDowngradeRequestStatus',
        'message' => 'setMessage',
        'product_id' => 'setProductId',
        'promo_code' => 'setPromoCode',
        'sale_discount' => 'setSaleDiscount',
        'sale_discount_periods' => 'setSaleDiscountPeriods',
        'sale_discount_type' => 'setSaleDiscountType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_payment_method' => 'getAccountPaymentMethod',
        'discount_applied' => 'getDiscountApplied',
        'downgrade_effective_date' => 'getDowngradeEffectiveDate',
        'downgrade_payment_cycle' => 'getDowngradePaymentCycle',
        'downgrade_plan_id' => 'getDowngradePlanId',
        'downgrade_plan_name' => 'getDowngradePlanName',
        'downgrade_request_status' => 'getDowngradeRequestStatus',
        'message' => 'getMessage',
        'product_id' => 'getProductId',
        'promo_code' => 'getPromoCode',
        'sale_discount' => 'getSaleDiscount',
        'sale_discount_periods' => 'getSaleDiscountPeriods',
        'sale_discount_type' => 'getSaleDiscountType'
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
        $this->container['account_payment_method'] = isset($data['account_payment_method']) ? $data['account_payment_method'] : null;
        $this->container['discount_applied'] = isset($data['discount_applied']) ? $data['discount_applied'] : null;
        $this->container['downgrade_effective_date'] = isset($data['downgrade_effective_date']) ? $data['downgrade_effective_date'] : null;
        $this->container['downgrade_payment_cycle'] = isset($data['downgrade_payment_cycle']) ? $data['downgrade_payment_cycle'] : null;
        $this->container['downgrade_plan_id'] = isset($data['downgrade_plan_id']) ? $data['downgrade_plan_id'] : null;
        $this->container['downgrade_plan_name'] = isset($data['downgrade_plan_name']) ? $data['downgrade_plan_name'] : null;
        $this->container['downgrade_request_status'] = isset($data['downgrade_request_status']) ? $data['downgrade_request_status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['promo_code'] = isset($data['promo_code']) ? $data['promo_code'] : null;
        $this->container['sale_discount'] = isset($data['sale_discount']) ? $data['sale_discount'] : null;
        $this->container['sale_discount_periods'] = isset($data['sale_discount_periods']) ? $data['sale_discount_periods'] : null;
        $this->container['sale_discount_type'] = isset($data['sale_discount_type']) ? $data['sale_discount_type'] : null;
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
     * Gets account_payment_method
     *
     * @return ?string
     */
    public function getAccountPaymentMethod()
    {
        return $this->container['account_payment_method'];
    }

    /**
     * Sets account_payment_method
     *
     * @param ?string $account_payment_method 
     *
     * @return $this
     */
    public function setAccountPaymentMethod($account_payment_method)
    {
        $this->container['account_payment_method'] = $account_payment_method;

        return $this;
    }

    /**
     * Gets discount_applied
     *
     * @return ?string
     */
    public function getDiscountApplied()
    {
        return $this->container['discount_applied'];
    }

    /**
     * Sets discount_applied
     *
     * @param ?string $discount_applied 
     *
     * @return $this
     */
    public function setDiscountApplied($discount_applied)
    {
        $this->container['discount_applied'] = $discount_applied;

        return $this;
    }

    /**
     * Gets downgrade_effective_date
     *
     * @return ?string
     */
    public function getDowngradeEffectiveDate()
    {
        return $this->container['downgrade_effective_date'];
    }

    /**
     * Sets downgrade_effective_date
     *
     * @param ?string $downgrade_effective_date 
     *
     * @return $this
     */
    public function setDowngradeEffectiveDate($downgrade_effective_date)
    {
        $this->container['downgrade_effective_date'] = $downgrade_effective_date;

        return $this;
    }

    /**
     * Gets downgrade_payment_cycle
     *
     * @return ?string
     */
    public function getDowngradePaymentCycle()
    {
        return $this->container['downgrade_payment_cycle'];
    }

    /**
     * Sets downgrade_payment_cycle
     *
     * @param ?string $downgrade_payment_cycle 
     *
     * @return $this
     */
    public function setDowngradePaymentCycle($downgrade_payment_cycle)
    {
        $this->container['downgrade_payment_cycle'] = $downgrade_payment_cycle;

        return $this;
    }

    /**
     * Gets downgrade_plan_id
     *
     * @return ?string
     */
    public function getDowngradePlanId()
    {
        return $this->container['downgrade_plan_id'];
    }

    /**
     * Sets downgrade_plan_id
     *
     * @param ?string $downgrade_plan_id 
     *
     * @return $this
     */
    public function setDowngradePlanId($downgrade_plan_id)
    {
        $this->container['downgrade_plan_id'] = $downgrade_plan_id;

        return $this;
    }

    /**
     * Gets downgrade_plan_name
     *
     * @return ?string
     */
    public function getDowngradePlanName()
    {
        return $this->container['downgrade_plan_name'];
    }

    /**
     * Sets downgrade_plan_name
     *
     * @param ?string $downgrade_plan_name 
     *
     * @return $this
     */
    public function setDowngradePlanName($downgrade_plan_name)
    {
        $this->container['downgrade_plan_name'] = $downgrade_plan_name;

        return $this;
    }

    /**
     * Gets downgrade_request_status
     *
     * @return ?string
     */
    public function getDowngradeRequestStatus()
    {
        return $this->container['downgrade_request_status'];
    }

    /**
     * Sets downgrade_request_status
     *
     * @param ?string $downgrade_request_status 
     *
     * @return $this
     */
    public function setDowngradeRequestStatus($downgrade_request_status)
    {
        $this->container['downgrade_request_status'] = $downgrade_request_status;

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
     * @param ?string $message 
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return ?string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param ?string $product_id 
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return ?string
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param ?string $promo_code 
     *
     * @return $this
     */
    public function setPromoCode($promo_code)
    {
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets sale_discount
     *
     * @return ?string
     */
    public function getSaleDiscount()
    {
        return $this->container['sale_discount'];
    }

    /**
     * Sets sale_discount
     *
     * @param ?string $sale_discount 
     *
     * @return $this
     */
    public function setSaleDiscount($sale_discount)
    {
        $this->container['sale_discount'] = $sale_discount;

        return $this;
    }

    /**
     * Gets sale_discount_periods
     *
     * @return ?string
     */
    public function getSaleDiscountPeriods()
    {
        return $this->container['sale_discount_periods'];
    }

    /**
     * Sets sale_discount_periods
     *
     * @param ?string $sale_discount_periods 
     *
     * @return $this
     */
    public function setSaleDiscountPeriods($sale_discount_periods)
    {
        $this->container['sale_discount_periods'] = $sale_discount_periods;

        return $this;
    }

    /**
     * Gets sale_discount_type
     *
     * @return ?string
     */
    public function getSaleDiscountType()
    {
        return $this->container['sale_discount_type'];
    }

    /**
     * Sets sale_discount_type
     *
     * @param ?string $sale_discount_type 
     *
     * @return $this
     */
    public function setSaleDiscountType($sale_discount_type)
    {
        $this->container['sale_discount_type'] = $sale_discount_type;

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

