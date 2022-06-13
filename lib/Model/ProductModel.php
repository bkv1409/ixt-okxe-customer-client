<?php
/**
 * ProductModel
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
 * ProductModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'type' => 'string',
'state' => 'string',
'category' => 'string',
'insurer_name' => 'string',
'insurer_logo' => 'string',
'minimun_premium' => 'float',
'code' => 'string',
'name' => 'string',
'description' => 'string',
'version' => 'string',
'launched_at' => '\DateTime',
'shelved_at' => '\DateTime',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'type' => null,
'state' => null,
'category' => null,
'insurer_name' => null,
'insurer_logo' => 'uri',
'minimun_premium' => null,
'code' => null,
'name' => null,
'description' => null,
'version' => null,
'launched_at' => 'date-time',
'shelved_at' => 'date-time',
'created_at' => 'date-time',
'updated_at' => 'date-time'    ];

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
'type' => 'type',
'state' => 'state',
'category' => 'category',
'insurer_name' => 'insurer_name',
'insurer_logo' => 'insurer_logo',
'minimun_premium' => 'minimun_premium',
'code' => 'code',
'name' => 'name',
'description' => 'description',
'version' => 'version',
'launched_at' => 'launched_at',
'shelved_at' => 'shelved_at',
'created_at' => 'created_at',
'updated_at' => 'updated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'state' => 'setState',
'category' => 'setCategory',
'insurer_name' => 'setInsurerName',
'insurer_logo' => 'setInsurerLogo',
'minimun_premium' => 'setMinimunPremium',
'code' => 'setCode',
'name' => 'setName',
'description' => 'setDescription',
'version' => 'setVersion',
'launched_at' => 'setLaunchedAt',
'shelved_at' => 'setShelvedAt',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'state' => 'getState',
'category' => 'getCategory',
'insurer_name' => 'getInsurerName',
'insurer_logo' => 'getInsurerLogo',
'minimun_premium' => 'getMinimunPremium',
'code' => 'getCode',
'name' => 'getName',
'description' => 'getDescription',
'version' => 'getVersion',
'launched_at' => 'getLaunchedAt',
'shelved_at' => 'getShelvedAt',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['insurer_name'] = isset($data['insurer_name']) ? $data['insurer_name'] : null;
        $this->container['insurer_logo'] = isset($data['insurer_logo']) ? $data['insurer_logo'] : null;
        $this->container['minimun_premium'] = isset($data['minimun_premium']) ? $data['minimun_premium'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['launched_at'] = isset($data['launched_at']) ? $data['launched_at'] : null;
        $this->container['shelved_at'] = isset($data['shelved_at']) ? $data['shelved_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['insurer_name'] === null) {
            $invalidProperties[] = "'insurer_name' can't be null";
        }
        if ($this->container['insurer_logo'] === null) {
            $invalidProperties[] = "'insurer_logo' can't be null";
        }
        if ($this->container['minimun_premium'] === null) {
            $invalidProperties[] = "'minimun_premium' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets insurer_name
     *
     * @return string
     */
    public function getInsurerName()
    {
        return $this->container['insurer_name'];
    }

    /**
     * Sets insurer_name
     *
     * @param string $insurer_name insurer_name
     *
     * @return $this
     */
    public function setInsurerName($insurer_name)
    {
        $this->container['insurer_name'] = $insurer_name;

        return $this;
    }

    /**
     * Gets insurer_logo
     *
     * @return string
     */
    public function getInsurerLogo()
    {
        return $this->container['insurer_logo'];
    }

    /**
     * Sets insurer_logo
     *
     * @param string $insurer_logo insurer_logo
     *
     * @return $this
     */
    public function setInsurerLogo($insurer_logo)
    {
        $this->container['insurer_logo'] = $insurer_logo;

        return $this;
    }

    /**
     * Gets minimun_premium
     *
     * @return float
     */
    public function getMinimunPremium()
    {
        return $this->container['minimun_premium'];
    }

    /**
     * Sets minimun_premium
     *
     * @param float $minimun_premium minimun_premium
     *
     * @return $this
     */
    public function setMinimunPremium($minimun_premium)
    {
        $this->container['minimun_premium'] = $minimun_premium;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets launched_at
     *
     * @return \DateTime
     */
    public function getLaunchedAt()
    {
        return $this->container['launched_at'];
    }

    /**
     * Sets launched_at
     *
     * @param \DateTime $launched_at launched_at
     *
     * @return $this
     */
    public function setLaunchedAt($launched_at)
    {
        $this->container['launched_at'] = $launched_at;

        return $this;
    }

    /**
     * Gets shelved_at
     *
     * @return \DateTime
     */
    public function getShelvedAt()
    {
        return $this->container['shelved_at'];
    }

    /**
     * Sets shelved_at
     *
     * @param \DateTime $shelved_at shelved_at
     *
     * @return $this
     */
    public function setShelvedAt($shelved_at)
    {
        $this->container['shelved_at'] = $shelved_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
