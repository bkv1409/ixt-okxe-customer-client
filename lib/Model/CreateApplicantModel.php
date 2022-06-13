<?php
/**
 * CreateApplicantModel
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
 * CreateApplicantModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateApplicantModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateApplicantModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'government_id' => 'string',
'government_type' => '\Swagger\Client\Model\IXTGovernmentIdTypeEnum',
'first_name' => 'string',
'last_name' => 'string',
'birth_date' => '\DateTime',
'gender' => '\Swagger\Client\Model\IXTGenderEnum',
'emails' => 'string[]',
'addresses' => 'string[]',
'phones' => 'string[]',
'subscriber_relationship' => '\Swagger\Client\Model\IXTSubscriberRelationshipEnum',
'customized_attributes' => 'object',
'constraint_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'government_id' => null,
'government_type' => null,
'first_name' => null,
'last_name' => null,
'birth_date' => 'date',
'gender' => null,
'emails' => 'email',
'addresses' => null,
'phones' => 'phone-number',
'subscriber_relationship' => null,
'customized_attributes' => null,
'constraint_id' => null    ];

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
        'government_id' => 'government_id',
'government_type' => 'government_type',
'first_name' => 'first_name',
'last_name' => 'last_name',
'birth_date' => 'birth_date',
'gender' => 'gender',
'emails' => 'emails',
'addresses' => 'addresses',
'phones' => 'phones',
'subscriber_relationship' => 'subscriber_relationship',
'customized_attributes' => 'customized_attributes',
'constraint_id' => 'constraint_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'government_id' => 'setGovernmentId',
'government_type' => 'setGovernmentType',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'birth_date' => 'setBirthDate',
'gender' => 'setGender',
'emails' => 'setEmails',
'addresses' => 'setAddresses',
'phones' => 'setPhones',
'subscriber_relationship' => 'setSubscriberRelationship',
'customized_attributes' => 'setCustomizedAttributes',
'constraint_id' => 'setConstraintId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'government_id' => 'getGovernmentId',
'government_type' => 'getGovernmentType',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'birth_date' => 'getBirthDate',
'gender' => 'getGender',
'emails' => 'getEmails',
'addresses' => 'getAddresses',
'phones' => 'getPhones',
'subscriber_relationship' => 'getSubscriberRelationship',
'customized_attributes' => 'getCustomizedAttributes',
'constraint_id' => 'getConstraintId'    ];

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
        $this->container['government_id'] = isset($data['government_id']) ? $data['government_id'] : null;
        $this->container['government_type'] = isset($data['government_type']) ? $data['government_type'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['subscriber_relationship'] = isset($data['subscriber_relationship']) ? $data['subscriber_relationship'] : null;
        $this->container['customized_attributes'] = isset($data['customized_attributes']) ? $data['customized_attributes'] : null;
        $this->container['constraint_id'] = isset($data['constraint_id']) ? $data['constraint_id'] : null;
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
     * Gets government_id
     *
     * @return string
     */
    public function getGovernmentId()
    {
        return $this->container['government_id'];
    }

    /**
     * Sets government_id
     *
     * @param string $government_id government_id
     *
     * @return $this
     */
    public function setGovernmentId($government_id)
    {
        $this->container['government_id'] = $government_id;

        return $this;
    }

    /**
     * Gets government_type
     *
     * @return \Swagger\Client\Model\IXTGovernmentIdTypeEnum
     */
    public function getGovernmentType()
    {
        return $this->container['government_type'];
    }

    /**
     * Sets government_type
     *
     * @param \Swagger\Client\Model\IXTGovernmentIdTypeEnum $government_type government_type
     *
     * @return $this
     */
    public function setGovernmentType($government_type)
    {
        $this->container['government_type'] = $government_type;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
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
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Swagger\Client\Model\IXTGenderEnum
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Swagger\Client\Model\IXTGenderEnum $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return string[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param string[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string[] $phones phones
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets subscriber_relationship
     *
     * @return \Swagger\Client\Model\IXTSubscriberRelationshipEnum
     */
    public function getSubscriberRelationship()
    {
        return $this->container['subscriber_relationship'];
    }

    /**
     * Sets subscriber_relationship
     *
     * @param \Swagger\Client\Model\IXTSubscriberRelationshipEnum $subscriber_relationship subscriber_relationship
     *
     * @return $this
     */
    public function setSubscriberRelationship($subscriber_relationship)
    {
        $this->container['subscriber_relationship'] = $subscriber_relationship;

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
     * Gets constraint_id
     *
     * @return int
     */
    public function getConstraintId()
    {
        return $this->container['constraint_id'];
    }

    /**
     * Sets constraint_id
     *
     * @param int $constraint_id constraint_id
     *
     * @return $this
     */
    public function setConstraintId($constraint_id)
    {
        $this->container['constraint_id'] = $constraint_id;

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
