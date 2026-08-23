<?php
/**
 * PublicMatchTargetState
 *
 *
 * @category Class
 * @package  Jawwws\Gnaww
 */

/**
 * Gnaww Developer API
 *
 * Reviewed public print-intelligence contract for direct HTTP, CLI, SDK and MCP consumers. Capability fit is not price, live availability, producer acceptance or an order.
 *
 * The version of the OpenAPI document: 0.1
 */

/**
 */

namespace Jawwws\Gnaww\Model;

use \ArrayAccess;
use \Jawwws\Gnaww\ObjectSerializer;

/**
 * PublicMatchTargetState Class Doc Comment
 *
 * @category Class
 * @description Safe target identity returned with a public capability result.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicMatchTargetState implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicMatchTargetState';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'producer_id' => 'string',
        'producer_name' => 'string',
        'producer_profile_id' => 'string',
        'producer_profile_schema_version' => 'string',
        'source' => 'string',
        'truth_state' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'producer_id' => null,
        'producer_name' => null,
        'producer_profile_id' => null,
        'producer_profile_schema_version' => null,
        'source' => null,
        'truth_state' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'producer_id' => false,
        'producer_name' => false,
        'producer_profile_id' => false,
        'producer_profile_schema_version' => false,
        'source' => false,
        'truth_state' => false
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
        'producer_id' => 'producer_id',
        'producer_name' => 'producer_name',
        'producer_profile_id' => 'producer_profile_id',
        'producer_profile_schema_version' => 'producer_profile_schema_version',
        'source' => 'source',
        'truth_state' => 'truth_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'producer_id' => 'setProducerId',
        'producer_name' => 'setProducerName',
        'producer_profile_id' => 'setProducerProfileId',
        'producer_profile_schema_version' => 'setProducerProfileSchemaVersion',
        'source' => 'setSource',
        'truth_state' => 'setTruthState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'producer_id' => 'getProducerId',
        'producer_name' => 'getProducerName',
        'producer_profile_id' => 'getProducerProfileId',
        'producer_profile_schema_version' => 'getProducerProfileSchemaVersion',
        'source' => 'getSource',
        'truth_state' => 'getTruthState'
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

    public const SOURCE_PUBLISHED_PROFILE = 'published_profile';
    public const SOURCE_DEMO_FIXTURE = 'demo_fixture';
    public const SOURCE_API_DERIVED_DEMO = 'api_derived_demo';
    public const TRUTH_STATE_PUBLISHED_CAPABILITY = 'published_capability';
    public const TRUTH_STATE_FIXTURE_BACKED = 'fixture_backed';
    public const TRUTH_STATE_LIVE_API_DERIVED = 'live_api_derived';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_PUBLISHED_PROFILE,
            self::SOURCE_DEMO_FIXTURE,
            self::SOURCE_API_DERIVED_DEMO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTruthStateAllowableValues()
    {
        return [
            self::TRUTH_STATE_PUBLISHED_CAPABILITY,
            self::TRUTH_STATE_FIXTURE_BACKED,
            self::TRUTH_STATE_LIVE_API_DERIVED,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('producer_id', $data ?? [], null);
        $this->setIfExists('producer_name', $data ?? [], null);
        $this->setIfExists('producer_profile_id', $data ?? [], null);
        $this->setIfExists('producer_profile_schema_version', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('truth_state', $data ?? [], null);
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

        if ($this->container['producer_id'] === null) {
            $invalidProperties[] = "'producer_id' can't be null";
        }
        if ((mb_strlen($this->container['producer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_name'] === null) {
            $invalidProperties[] = "'producer_name' can't be null";
        }
        if ((mb_strlen($this->container['producer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_profile_id'] === null) {
            $invalidProperties[] = "'producer_profile_id' can't be null";
        }
        if ((mb_strlen($this->container['producer_profile_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_profile_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_profile_schema_version'] === null) {
            $invalidProperties[] = "'producer_profile_schema_version' can't be null";
        }
        if ((mb_strlen($this->container['producer_profile_schema_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_profile_schema_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['truth_state'] === null) {
            $invalidProperties[] = "'truth_state' can't be null";
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!is_null($this->container['truth_state']) && !in_array($this->container['truth_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'truth_state', must be one of '%s'",
                $this->container['truth_state'],
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
     * Gets producer_id
     *
     * @return string
     */
    public function getProducerId()
    {
        return $this->container['producer_id'];
    }

    /**
     * Sets producer_id
     *
     * @param string $producer_id producer_id
     *
     * @return self
     */
    public function setProducerId($producer_id)
    {
        if (is_null($producer_id)) {
            throw new \InvalidArgumentException('non-nullable producer_id cannot be null');
        }

        if ((mb_strlen($producer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_id when calling PublicMatchTargetState., must be bigger than or equal to 1.');
        }

        $this->container['producer_id'] = $producer_id;

        return $this;
    }

    /**
     * Gets producer_name
     *
     * @return string
     */
    public function getProducerName()
    {
        return $this->container['producer_name'];
    }

    /**
     * Sets producer_name
     *
     * @param string $producer_name producer_name
     *
     * @return self
     */
    public function setProducerName($producer_name)
    {
        if (is_null($producer_name)) {
            throw new \InvalidArgumentException('non-nullable producer_name cannot be null');
        }

        if ((mb_strlen($producer_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_name when calling PublicMatchTargetState., must be bigger than or equal to 1.');
        }

        $this->container['producer_name'] = $producer_name;

        return $this;
    }

    /**
     * Gets producer_profile_id
     *
     * @return string
     */
    public function getProducerProfileId()
    {
        return $this->container['producer_profile_id'];
    }

    /**
     * Sets producer_profile_id
     *
     * @param string $producer_profile_id producer_profile_id
     *
     * @return self
     */
    public function setProducerProfileId($producer_profile_id)
    {
        if (is_null($producer_profile_id)) {
            throw new \InvalidArgumentException('non-nullable producer_profile_id cannot be null');
        }

        if ((mb_strlen($producer_profile_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_profile_id when calling PublicMatchTargetState., must be bigger than or equal to 1.');
        }

        $this->container['producer_profile_id'] = $producer_profile_id;

        return $this;
    }

    /**
     * Gets producer_profile_schema_version
     *
     * @return string
     */
    public function getProducerProfileSchemaVersion()
    {
        return $this->container['producer_profile_schema_version'];
    }

    /**
     * Sets producer_profile_schema_version
     *
     * @param string $producer_profile_schema_version producer_profile_schema_version
     *
     * @return self
     */
    public function setProducerProfileSchemaVersion($producer_profile_schema_version)
    {
        if (is_null($producer_profile_schema_version)) {
            throw new \InvalidArgumentException('non-nullable producer_profile_schema_version cannot be null');
        }

        if ((mb_strlen($producer_profile_schema_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_profile_schema_version when calling PublicMatchTargetState., must be bigger than or equal to 1.');
        }

        $this->container['producer_profile_schema_version'] = $producer_profile_schema_version;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets truth_state
     *
     * @return string
     */
    public function getTruthState()
    {
        return $this->container['truth_state'];
    }

    /**
     * Sets truth_state
     *
     * @param string $truth_state truth_state
     *
     * @return self
     */
    public function setTruthState($truth_state)
    {
        if (is_null($truth_state)) {
            throw new \InvalidArgumentException('non-nullable truth_state cannot be null');
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!in_array($truth_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'truth_state', must be one of '%s'",
                    $truth_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['truth_state'] = $truth_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer|string $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer|string $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
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
     * @param integer|string $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
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
