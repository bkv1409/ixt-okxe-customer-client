<?php
/**
 * UpdateApplicationModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IXT-OKXE-Customer
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: local
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UpdateApplicationModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateApplicationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateApplicationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_data' => 'object',
'effected_at' => '\DateTime',
'customized_attributes' => 'object',
'plans' => '\Swagger\Client\Model\CreateApplicationPlanModel[]',
'applicant' => '\Swagger\Client\Model\UpdateApplicantModel',
'beneficiaries' => '\Swagger\Client\Model\CreateBeneficiaryModel[]',
'policyholders' => '\Swagger\Client\Model\CreatePolicyHolderModel[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_data' => null,
'effected_at' => 'date-time',
'customized_attributes' => null,
'plans' => null,
'applicant' => null,
'beneficiaries' => null,
'policyholders' => null    ];

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
        'client_data' => 'client_data',
'effected_at' => 'effected_at',
'customized_attributes' => 'customized_attributes',
'plans' => 'plans',
'applicant' => 'applicant',
'beneficiaries' => 'beneficiaries',
'policyholders' => 'policyholders'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_data' => 'setClientData',
'effected_at' => 'setEffectedAt',
'customized_attributes' => 'setCustomizedAttributes',
'plans' => 'setPlans',
'applicant' => 'setApplicant',
'beneficiaries' => 'setBeneficiaries',
'policyholders' => 'setPolicyholders'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_data' => 'getClientData',
'effected_at' => 'getEffectedAt',
'customized_attributes' => 'getCustomizedAttributes',
'plans' => 'getPlans',
'applicant' => 'getApplicant',
'beneficiaries' => 'getBeneficiaries',
'policyholders' => 'getPolicyholders'    ];

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
        $this->container['client_data'] = isset($data['client_data']) ? $data['client_data'] : null;
        $this->container['effected_at'] = isset($data['effected_at']) ? $data['effected_at'] : null;
        $this->container['customized_attributes'] = isset($data['customized_attributes']) ? $data['customized_attributes'] : null;
        $this->container['plans'] = isset($data['plans']) ? $data['plans'] : null;
        $this->container['applicant'] = isset($data['applicant']) ? $data['applicant'] : null;
        $this->container['beneficiaries'] = isset($data['beneficiaries']) ? $data['beneficiaries'] : null;
        $this->container['policyholders'] = isset($data['policyholders']) ? $data['policyholders'] : null;
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
     * Gets client_data
     *
     * @return object
     */
    public function getClientData()
    {
        return $this->container['client_data'];
    }

    /**
     * Sets client_data
     *
     * @param object $client_data client_data
     *
     * @return $this
     */
    public function setClientData($client_data)
    {
        $this->container['client_data'] = $client_data;

        return $this;
    }

    /**
     * Gets effected_at
     *
     * @return \DateTime
     */
    public function getEffectedAt()
    {
        return $this->container['effected_at'];
    }

    /**
     * Sets effected_at
     *
     * @param \DateTime $effected_at effected_at
     *
     * @return $this
     */
    public function setEffectedAt($effected_at)
    {
        $this->container['effected_at'] = $effected_at;

        return $this;
    }

    /**
     * Gets customized_attributes
     *
     * @return object
     */
    public function getCustomizedAttributes()
    {
        return $this->container['customized_attributes'];
    }

    /**
     * Sets customized_attributes
     *
     * @param object $customized_attributes customized_attributes
     *
     * @return $this
     */
    public function setCustomizedAttributes($customized_attributes)
    {
        $this->container['customized_attributes'] = $customized_attributes;

        return $this;
    }

    /**
     * Gets plans
     *
     * @return \Swagger\Client\Model\CreateApplicationPlanModel[]
     */
    public function getPlans()
    {
        return $this->container['plans'];
    }

    /**
     * Sets plans
     *
     * @param \Swagger\Client\Model\CreateApplicationPlanModel[] $plans plans
     *
     * @return $this
     */
    public function setPlans($plans)
    {
        $this->container['plans'] = $plans;

        return $this;
    }

    /**
     * Gets applicant
     *
     * @return \Swagger\Client\Model\UpdateApplicantModel
     */
    public function getApplicant()
    {
        return $this->container['applicant'];
    }

    /**
     * Sets applicant
     *
     * @param \Swagger\Client\Model\UpdateApplicantModel $applicant applicant
     *
     * @return $this
     */
    public function setApplicant($applicant)
    {
        $this->container['applicant'] = $applicant;

        return $this;
    }

    /**
     * Gets beneficiaries
     *
     * @return \Swagger\Client\Model\CreateBeneficiaryModel[]
     */
    public function getBeneficiaries()
    {
        return $this->container['beneficiaries'];
    }

    /**
     * Sets beneficiaries
     *
     * @param \Swagger\Client\Model\CreateBeneficiaryModel[] $beneficiaries beneficiaries
     *
     * @return $this
     */
    public function setBeneficiaries($beneficiaries)
    {
        $this->container['beneficiaries'] = $beneficiaries;

        return $this;
    }

    /**
     * Gets policyholders
     *
     * @return \Swagger\Client\Model\CreatePolicyHolderModel[]
     */
    public function getPolicyholders()
    {
        return $this->container['policyholders'];
    }

    /**
     * Sets policyholders
     *
     * @param \Swagger\Client\Model\CreatePolicyHolderModel[] $policyholders policyholders
     *
     * @return $this
     */
    public function setPolicyholders($policyholders)
    {
        $this->container['policyholders'] = $policyholders;

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
