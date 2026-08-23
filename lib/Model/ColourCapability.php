<?php
/**
 * ColourCapability
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
 * ColourCapability Class Doc Comment
 *
 * @category Class
 * @description Supported print colour capability.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ColourCapability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ColourCapability';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'maximum_spot_colours' => 'int',
        'modes' => 'string[]',
        'supports_metallic_ink' => 'bool',
        'supports_white_ink' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'maximum_spot_colours' => null,
        'modes' => null,
        'supports_metallic_ink' => null,
        'supports_white_ink' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'maximum_spot_colours' => true,
        'modes' => false,
        'supports_metallic_ink' => false,
        'supports_white_ink' => false
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
        'maximum_spot_colours' => 'maximum_spot_colours',
        'modes' => 'modes',
        'supports_metallic_ink' => 'supports_metallic_ink',
        'supports_white_ink' => 'supports_white_ink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maximum_spot_colours' => 'setMaximumSpotColours',
        'modes' => 'setModes',
        'supports_metallic_ink' => 'setSupportsMetallicInk',
        'supports_white_ink' => 'setSupportsWhiteInk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maximum_spot_colours' => 'getMaximumSpotColours',
        'modes' => 'getModes',
        'supports_metallic_ink' => 'getSupportsMetallicInk',
        'supports_white_ink' => 'getSupportsWhiteInk'
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

    public const MODES_MONO = 'mono';
    public const MODES_FULL_COLOUR = 'full_colour';
    public const MODES_SPOT = 'spot';
    public const MODES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModesAllowableValues()
    {
        return [
            self::MODES_MONO,
            self::MODES_FULL_COLOUR,
            self::MODES_SPOT,
            self::MODES_UNKNOWN,
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
        $this->setIfExists('maximum_spot_colours', $data ?? [], null);
        $this->setIfExists('modes', $data ?? [], null);
        $this->setIfExists('supports_metallic_ink', $data ?? [], false);
        $this->setIfExists('supports_white_ink', $data ?? [], false);
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

        if (!is_null($this->container['maximum_spot_colours']) && ($this->container['maximum_spot_colours'] <= 0)) {
            $invalidProperties[] = "invalid value for 'maximum_spot_colours', must be bigger than 0.";
        }

        if ($this->container['modes'] === null) {
            $invalidProperties[] = "'modes' can't be null";
        }
        if ((count($this->container['modes']) < 1)) {
            $invalidProperties[] = "invalid value for 'modes', number of items must be greater than or equal to 1.";
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
     * Gets maximum_spot_colours
     *
     * @return int|null
     */
    public function getMaximumSpotColours()
    {
        return $this->container['maximum_spot_colours'];
    }

    /**
     * Sets maximum_spot_colours
     *
     * @param int|null $maximum_spot_colours maximum_spot_colours
     *
     * @return self
     */
    public function setMaximumSpotColours($maximum_spot_colours)
    {
        if (is_null($maximum_spot_colours)) {
            array_push($this->openAPINullablesSetToNull, 'maximum_spot_colours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maximum_spot_colours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($maximum_spot_colours) && ($maximum_spot_colours <= 0)) {
            throw new \InvalidArgumentException('invalid value for $maximum_spot_colours when calling ColourCapability., must be bigger than 0.');
        }

        $this->container['maximum_spot_colours'] = $maximum_spot_colours;

        return $this;
    }

    /**
     * Gets modes
     *
     * @return string[]
     */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
     * Sets modes
     *
     * @param string[] $modes modes
     *
     * @return self
     */
    public function setModes($modes)
    {
        if (is_null($modes)) {
            throw new \InvalidArgumentException('non-nullable modes cannot be null');
        }
        $allowedValues = $this->getModesAllowableValues();
        if (array_diff($modes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'modes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($modes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $modes when calling ColourCapability., number of items must be greater than or equal to 1.');
        }
        $this->container['modes'] = $modes;

        return $this;
    }

    /**
     * Gets supports_metallic_ink
     *
     * @return bool|null
     */
    public function getSupportsMetallicInk()
    {
        return $this->container['supports_metallic_ink'];
    }

    /**
     * Sets supports_metallic_ink
     *
     * @param bool|null $supports_metallic_ink supports_metallic_ink
     *
     * @return self
     */
    public function setSupportsMetallicInk($supports_metallic_ink)
    {
        if (is_null($supports_metallic_ink)) {
            throw new \InvalidArgumentException('non-nullable supports_metallic_ink cannot be null');
        }
        $this->container['supports_metallic_ink'] = $supports_metallic_ink;

        return $this;
    }

    /**
     * Gets supports_white_ink
     *
     * @return bool|null
     */
    public function getSupportsWhiteInk()
    {
        return $this->container['supports_white_ink'];
    }

    /**
     * Sets supports_white_ink
     *
     * @param bool|null $supports_white_ink supports_white_ink
     *
     * @return self
     */
    public function setSupportsWhiteInk($supports_white_ink)
    {
        if (is_null($supports_white_ink)) {
            throw new \InvalidArgumentException('non-nullable supports_white_ink cannot be null');
        }
        $this->container['supports_white_ink'] = $supports_white_ink;

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
