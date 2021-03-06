<?php
/**
 * UserDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * UserDetails Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => 'string',
        'passwordResetMobile' => 'string',
        'passwordResetVerifyEmail' => 'string',
        'passwordResetEmail' => 'string',
        'fname' => 'string',
        'lname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'passwordResetMobile' => null,
        'passwordResetVerifyEmail' => null,
        'passwordResetEmail' => null,
        'fname' => null,
        'lname' => null
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
        'organization' => 'organization',
        'passwordResetMobile' => 'passwordResetMobile',
        'passwordResetVerifyEmail' => 'passwordResetVerifyEmail',
        'passwordResetEmail' => 'passwordResetEmail',
        'fname' => 'fname',
        'lname' => 'lname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'passwordResetMobile' => 'setPasswordResetMobile',
        'passwordResetVerifyEmail' => 'setPasswordResetVerifyEmail',
        'passwordResetEmail' => 'setPasswordResetEmail',
        'fname' => 'setFname',
        'lname' => 'setLname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'passwordResetMobile' => 'getPasswordResetMobile',
        'passwordResetVerifyEmail' => 'getPasswordResetVerifyEmail',
        'passwordResetEmail' => 'getPasswordResetEmail',
        'fname' => 'getFname',
        'lname' => 'getLname'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['passwordResetMobile'] = isset($data['passwordResetMobile']) ? $data['passwordResetMobile'] : null;
        $this->container['passwordResetVerifyEmail'] = isset($data['passwordResetVerifyEmail']) ? $data['passwordResetVerifyEmail'] : null;
        $this->container['passwordResetEmail'] = isset($data['passwordResetEmail']) ? $data['passwordResetEmail'] : null;
        $this->container['fname'] = isset($data['fname']) ? $data['fname'] : null;
        $this->container['lname'] = isset($data['lname']) ? $data['lname'] : null;
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
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization The organization.
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets passwordResetMobile
     *
     * @return string
     */
    public function getPasswordResetMobile()
    {
        return $this->container['passwordResetMobile'];
    }

    /**
     * Sets passwordResetMobile
     *
     * @param string $passwordResetMobile The mobile phone number.
     *
     * @return $this
     */
    public function setPasswordResetMobile($passwordResetMobile)
    {
        $this->container['passwordResetMobile'] = $passwordResetMobile;

        return $this;
    }

    /**
     * Gets passwordResetVerifyEmail
     *
     * @return string
     */
    public function getPasswordResetVerifyEmail()
    {
        return $this->container['passwordResetVerifyEmail'];
    }

    /**
     * Sets passwordResetVerifyEmail
     *
     * @param string $passwordResetVerifyEmail The email address for the verification of the password reset process.
     *
     * @return $this
     */
    public function setPasswordResetVerifyEmail($passwordResetVerifyEmail)
    {
        $this->container['passwordResetVerifyEmail'] = $passwordResetVerifyEmail;

        return $this;
    }

    /**
     * Gets passwordResetEmail
     *
     * @return string
     */
    public function getPasswordResetEmail()
    {
        return $this->container['passwordResetEmail'];
    }

    /**
     * Sets passwordResetEmail
     *
     * @param string $passwordResetEmail The email address for the password reset tan.
     *
     * @return $this
     */
    public function setPasswordResetEmail($passwordResetEmail)
    {
        $this->container['passwordResetEmail'] = $passwordResetEmail;

        return $this;
    }

    /**
     * Gets fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->container['fname'];
    }

    /**
     * Sets fname
     *
     * @param string $fname The first name.
     *
     * @return $this
     */
    public function setFname($fname)
    {
        $this->container['fname'] = $fname;

        return $this;
    }

    /**
     * Gets lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->container['lname'];
    }

    /**
     * Sets lname
     *
     * @param string $lname The last name.
     *
     * @return $this
     */
    public function setLname($lname)
    {
        $this->container['lname'] = $lname;

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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!$retrieveAllValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
            if(is_array($value)){
                foreach($value as &$v){
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}


