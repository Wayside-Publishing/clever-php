<?php
/**
 * District
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Clever
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Data API
 *
 * Serves the Clever Data API
 *
 * The version of the OpenAPI document: 2.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Clever\Model;

use \ArrayAccess;
use \Clever\ObjectSerializer;

/**
 * District Class Doc Comment
 *
 * @category Class
 * @package  Clever
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class District implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'District';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'mdr_number' => 'string',
        'nces_id' => 'string',
        'sis_type' => 'string',
        'state' => 'string',
        'last_sync' => 'string',
        'error' => 'string',
        'pause_start' => 'string',
        'pause_end' => 'string',
        'launch_date' => 'string',
        'portal_url' => 'string',
        'login_methods' => 'string[]',
        'district_contact' => '\Clever\Model\DistrictAdmin'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mdr_number' => null,
        'nces_id' => null,
        'sis_type' => null,
        'state' => null,
        'last_sync' => 'datetime',
        'error' => null,
        'pause_start' => 'datetime',
        'pause_end' => 'datetime',
        'launch_date' => 'datetime',
        'portal_url' => null,
        'login_methods' => null,
        'district_contact' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'mdr_number' => true,
		'nces_id' => true,
		'sis_type' => false,
		'state' => true,
		'last_sync' => true,
		'error' => false,
		'pause_start' => true,
		'pause_end' => true,
		'launch_date' => false,
		'portal_url' => false,
		'login_methods' => false,
		'district_contact' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'mdr_number' => 'mdr_number',
        'nces_id' => 'nces_id',
        'sis_type' => 'sis_type',
        'state' => 'state',
        'last_sync' => 'last_sync',
        'error' => 'error',
        'pause_start' => 'pause_start',
        'pause_end' => 'pause_end',
        'launch_date' => 'launch_date',
        'portal_url' => 'portal_url',
        'login_methods' => 'login_methods',
        'district_contact' => 'district_contact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'mdr_number' => 'setMdrNumber',
        'nces_id' => 'setNcesId',
        'sis_type' => 'setSisType',
        'state' => 'setState',
        'last_sync' => 'setLastSync',
        'error' => 'setError',
        'pause_start' => 'setPauseStart',
        'pause_end' => 'setPauseEnd',
        'launch_date' => 'setLaunchDate',
        'portal_url' => 'setPortalUrl',
        'login_methods' => 'setLoginMethods',
        'district_contact' => 'setDistrictContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'mdr_number' => 'getMdrNumber',
        'nces_id' => 'getNcesId',
        'sis_type' => 'getSisType',
        'state' => 'getState',
        'last_sync' => 'getLastSync',
        'error' => 'getError',
        'pause_start' => 'getPauseStart',
        'pause_end' => 'getPauseEnd',
        'launch_date' => 'getLaunchDate',
        'portal_url' => 'getPortalUrl',
        'login_methods' => 'getLoginMethods',
        'district_contact' => 'getDistrictContact'
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
        return self::$openAPIModelName;
    }

    public const STATE_RUNNING = 'running';
    public const STATE_PENDING = 'pending';
    public const STATE_ERROR = 'error';
    public const STATE_PAUSED = 'paused';
    public const STATE_EMPTY = '';
    public const STATE_SUCCESS = 'success';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_RUNNING,
            self::STATE_PENDING,
            self::STATE_ERROR,
            self::STATE_PAUSED,
            self::STATE_EMPTY,
            self::STATE_SUCCESS,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('mdr_number', $data ?? [], null);
        $this->setIfExists('nces_id', $data ?? [], null);
        $this->setIfExists('sis_type', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('last_sync', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('pause_start', $data ?? [], null);
        $this->setIfExists('pause_end', $data ?? [], null);
        $this->setIfExists('launch_date', $data ?? [], null);
        $this->setIfExists('portal_url', $data ?? [], null);
        $this->setIfExists('login_methods', $data ?? [], null);
        $this->setIfExists('district_contact', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets mdr_number
     *
     * @return string|null
     */
    public function getMdrNumber()
    {
        return $this->container['mdr_number'];
    }

    /**
     * Sets mdr_number
     *
     * @param string|null $mdr_number mdr_number
     *
     * @return self
     */
    public function setMdrNumber($mdr_number)
    {
        if (is_null($mdr_number)) {
            array_push($this->openAPINullablesSetToNull, 'mdr_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mdr_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mdr_number'] = $mdr_number;

        return $this;
    }

    /**
     * Gets nces_id
     *
     * @return string|null
     */
    public function getNcesId()
    {
        return $this->container['nces_id'];
    }

    /**
     * Sets nces_id
     *
     * @param string|null $nces_id nces_id
     *
     * @return self
     */
    public function setNcesId($nces_id)
    {
        if (is_null($nces_id)) {
            array_push($this->openAPINullablesSetToNull, 'nces_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nces_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nces_id'] = $nces_id;

        return $this;
    }

    /**
     * Gets sis_type
     *
     * @return string|null
     */
    public function getSisType()
    {
        return $this->container['sis_type'];
    }

    /**
     * Sets sis_type
     *
     * @param string|null $sis_type sis_type
     *
     * @return self
     */
    public function setSisType($sis_type)
    {
        if (is_null($sis_type)) {
            throw new \InvalidArgumentException('non-nullable sis_type cannot be null');
        }
        $this->container['sis_type'] = $sis_type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets last_sync
     *
     * @return string|null
     */
    public function getLastSync()
    {
        return $this->container['last_sync'];
    }

    /**
     * Sets last_sync
     *
     * @param string|null $last_sync last_sync
     *
     * @return self
     */
    public function setLastSync($last_sync)
    {
        if (is_null($last_sync)) {
            array_push($this->openAPINullablesSetToNull, 'last_sync');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_sync', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_sync'] = $last_sync;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets pause_start
     *
     * @return string|null
     */
    public function getPauseStart()
    {
        return $this->container['pause_start'];
    }

    /**
     * Sets pause_start
     *
     * @param string|null $pause_start pause_start
     *
     * @return self
     */
    public function setPauseStart($pause_start)
    {
        if (is_null($pause_start)) {
            array_push($this->openAPINullablesSetToNull, 'pause_start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pause_start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pause_start'] = $pause_start;

        return $this;
    }

    /**
     * Gets pause_end
     *
     * @return string|null
     */
    public function getPauseEnd()
    {
        return $this->container['pause_end'];
    }

    /**
     * Sets pause_end
     *
     * @param string|null $pause_end pause_end
     *
     * @return self
     */
    public function setPauseEnd($pause_end)
    {
        if (is_null($pause_end)) {
            array_push($this->openAPINullablesSetToNull, 'pause_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pause_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pause_end'] = $pause_end;

        return $this;
    }

    /**
     * Gets launch_date
     *
     * @return string|null
     */
    public function getLaunchDate()
    {
        return $this->container['launch_date'];
    }

    /**
     * Sets launch_date
     *
     * @param string|null $launch_date launch_date
     *
     * @return self
     */
    public function setLaunchDate($launch_date)
    {
        if (is_null($launch_date)) {
            throw new \InvalidArgumentException('non-nullable launch_date cannot be null');
        }
        $this->container['launch_date'] = $launch_date;

        return $this;
    }

    /**
     * Gets portal_url
     *
     * @return string|null
     */
    public function getPortalUrl()
    {
        return $this->container['portal_url'];
    }

    /**
     * Sets portal_url
     *
     * @param string|null $portal_url portal_url
     *
     * @return self
     */
    public function setPortalUrl($portal_url)
    {
        if (is_null($portal_url)) {
            throw new \InvalidArgumentException('non-nullable portal_url cannot be null');
        }
        $this->container['portal_url'] = $portal_url;

        return $this;
    }

    /**
     * Gets login_methods
     *
     * @return string[]|null
     */
    public function getLoginMethods()
    {
        return $this->container['login_methods'];
    }

    /**
     * Sets login_methods
     *
     * @param string[]|null $login_methods login_methods
     *
     * @return self
     */
    public function setLoginMethods($login_methods)
    {
        if (is_null($login_methods)) {
            throw new \InvalidArgumentException('non-nullable login_methods cannot be null');
        }
        $this->container['login_methods'] = $login_methods;

        return $this;
    }

    /**
     * Gets district_contact
     *
     * @return \Clever\Model\DistrictAdmin|null
     */
    public function getDistrictContact()
    {
        return $this->container['district_contact'];
    }

    /**
     * Sets district_contact
     *
     * @param \Clever\Model\DistrictAdmin|null $district_contact district_contact
     *
     * @return self
     */
    public function setDistrictContact($district_contact)
    {
        if (is_null($district_contact)) {
            throw new \InvalidArgumentException('non-nullable district_contact cannot be null');
        }
        $this->container['district_contact'] = $district_contact;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


