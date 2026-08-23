<?php
/**
 * ApparelDecorationOptions
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
 * ApparelDecorationOptions Class Doc Comment
 *
 * @category Class
 * @description Apparel decoration production options.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ApparelDecorationOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ApparelDecorationOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'decoration_method' => 'string',
        'garment_colour' => 'string',
        'garment_type' => 'string',
        'position' => 'string',
        'printable_height_mm' => 'float',
        'printable_width_mm' => 'float',
        'size_range' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'decoration_method' => null,
        'garment_colour' => null,
        'garment_type' => null,
        'position' => null,
        'printable_height_mm' => null,
        'printable_width_mm' => null,
        'size_range' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'decoration_method' => false,
        'garment_colour' => true,
        'garment_type' => true,
        'position' => false,
        'printable_height_mm' => true,
        'printable_width_mm' => true,
        'size_range' => false
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
        'decoration_method' => 'decoration_method',
        'garment_colour' => 'garment_colour',
        'garment_type' => 'garment_type',
        'position' => 'position',
        'printable_height_mm' => 'printable_height_mm',
        'printable_width_mm' => 'printable_width_mm',
        'size_range' => 'size_range'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'decoration_method' => 'setDecorationMethod',
        'garment_colour' => 'setGarmentColour',
        'garment_type' => 'setGarmentType',
        'position' => 'setPosition',
        'printable_height_mm' => 'setPrintableHeightMm',
        'printable_width_mm' => 'setPrintableWidthMm',
        'size_range' => 'setSizeRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'decoration_method' => 'getDecorationMethod',
        'garment_colour' => 'getGarmentColour',
        'garment_type' => 'getGarmentType',
        'position' => 'getPosition',
        'printable_height_mm' => 'getPrintableHeightMm',
        'printable_width_mm' => 'getPrintableWidthMm',
        'size_range' => 'getSizeRange'
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

    public const DECORATION_METHOD_DTG = 'dtg';
    public const DECORATION_METHOD_DTF = 'dtf';
    public const DECORATION_METHOD_HTV = 'htv';
    public const DECORATION_METHOD_EMBROIDERY = 'embroidery';
    public const DECORATION_METHOD_SCREEN_PRINT = 'screen_print';
    public const DECORATION_METHOD_SUBLIMATION = 'sublimation';
    public const DECORATION_METHOD_PAD_PRINT = 'pad_print';
    public const DECORATION_METHOD_UV_PRINT = 'uv_print';
    public const DECORATION_METHOD_ENGRAVING = 'engraving';
    public const DECORATION_METHOD_LASER_ENGRAVING = 'laser_engraving';
    public const DECORATION_METHOD_UNKNOWN = 'unknown';
    public const POSITION_FRONT = 'front';
    public const POSITION_BACK = 'back';
    public const POSITION_LEFT_CHEST = 'left_chest';
    public const POSITION_RIGHT_CHEST = 'right_chest';
    public const POSITION_SLEEVE = 'sleeve';
    public const POSITION_CAP_FRONT = 'cap_front';
    public const POSITION_LEFT = 'left';
    public const POSITION_RIGHT = 'right';
    public const POSITION_WRAP = 'wrap';
    public const POSITION_BARREL = 'barrel';
    public const POSITION_LID = 'lid';
    public const POSITION_BASE = 'base';
    public const POSITION_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDecorationMethodAllowableValues()
    {
        return [
            self::DECORATION_METHOD_DTG,
            self::DECORATION_METHOD_DTF,
            self::DECORATION_METHOD_HTV,
            self::DECORATION_METHOD_EMBROIDERY,
            self::DECORATION_METHOD_SCREEN_PRINT,
            self::DECORATION_METHOD_SUBLIMATION,
            self::DECORATION_METHOD_PAD_PRINT,
            self::DECORATION_METHOD_UV_PRINT,
            self::DECORATION_METHOD_ENGRAVING,
            self::DECORATION_METHOD_LASER_ENGRAVING,
            self::DECORATION_METHOD_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_FRONT,
            self::POSITION_BACK,
            self::POSITION_LEFT_CHEST,
            self::POSITION_RIGHT_CHEST,
            self::POSITION_SLEEVE,
            self::POSITION_CAP_FRONT,
            self::POSITION_LEFT,
            self::POSITION_RIGHT,
            self::POSITION_WRAP,
            self::POSITION_BARREL,
            self::POSITION_LID,
            self::POSITION_BASE,
            self::POSITION_UNKNOWN,
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
        $this->setIfExists('decoration_method', $data ?? [], 'unknown');
        $this->setIfExists('garment_colour', $data ?? [], null);
        $this->setIfExists('garment_type', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], 'unknown');
        $this->setIfExists('printable_height_mm', $data ?? [], null);
        $this->setIfExists('printable_width_mm', $data ?? [], null);
        $this->setIfExists('size_range', $data ?? [], null);
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

        $allowedValues = $this->getDecorationMethodAllowableValues();
        if (!is_null($this->container['decoration_method']) && !in_array($this->container['decoration_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'decoration_method', must be one of '%s'",
                $this->container['decoration_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['printable_height_mm']) && ($this->container['printable_height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'printable_height_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['printable_width_mm']) && ($this->container['printable_width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'printable_width_mm', must be bigger than 0.0.";
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
     * Gets decoration_method
     *
     * @return string|null
     */
    public function getDecorationMethod()
    {
        return $this->container['decoration_method'];
    }

    /**
     * Sets decoration_method
     *
     * @param string|null $decoration_method decoration_method
     *
     * @return self
     */
    public function setDecorationMethod($decoration_method)
    {
        if (is_null($decoration_method)) {
            throw new \InvalidArgumentException('non-nullable decoration_method cannot be null');
        }
        $allowedValues = $this->getDecorationMethodAllowableValues();
        if (!in_array($decoration_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'decoration_method', must be one of '%s'",
                    $decoration_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['decoration_method'] = $decoration_method;

        return $this;
    }

    /**
     * Gets garment_colour
     *
     * @return string|null
     */
    public function getGarmentColour()
    {
        return $this->container['garment_colour'];
    }

    /**
     * Sets garment_colour
     *
     * @param string|null $garment_colour garment_colour
     *
     * @return self
     */
    public function setGarmentColour($garment_colour)
    {
        if (is_null($garment_colour)) {
            array_push($this->openAPINullablesSetToNull, 'garment_colour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('garment_colour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['garment_colour'] = $garment_colour;

        return $this;
    }

    /**
     * Gets garment_type
     *
     * @return string|null
     */
    public function getGarmentType()
    {
        return $this->container['garment_type'];
    }

    /**
     * Sets garment_type
     *
     * @param string|null $garment_type garment_type
     *
     * @return self
     */
    public function setGarmentType($garment_type)
    {
        if (is_null($garment_type)) {
            array_push($this->openAPINullablesSetToNull, 'garment_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('garment_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['garment_type'] = $garment_type;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'position', must be one of '%s'",
                    $position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets printable_height_mm
     *
     * @return float|null
     */
    public function getPrintableHeightMm()
    {
        return $this->container['printable_height_mm'];
    }

    /**
     * Sets printable_height_mm
     *
     * @param float|null $printable_height_mm printable_height_mm
     *
     * @return self
     */
    public function setPrintableHeightMm($printable_height_mm)
    {
        if (is_null($printable_height_mm)) {
            array_push($this->openAPINullablesSetToNull, 'printable_height_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('printable_height_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($printable_height_mm) && ($printable_height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $printable_height_mm when calling ApparelDecorationOptions., must be bigger than 0.0.');
        }

        $this->container['printable_height_mm'] = $printable_height_mm;

        return $this;
    }

    /**
     * Gets printable_width_mm
     *
     * @return float|null
     */
    public function getPrintableWidthMm()
    {
        return $this->container['printable_width_mm'];
    }

    /**
     * Sets printable_width_mm
     *
     * @param float|null $printable_width_mm printable_width_mm
     *
     * @return self
     */
    public function setPrintableWidthMm($printable_width_mm)
    {
        if (is_null($printable_width_mm)) {
            array_push($this->openAPINullablesSetToNull, 'printable_width_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('printable_width_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($printable_width_mm) && ($printable_width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $printable_width_mm when calling ApparelDecorationOptions., must be bigger than 0.0.');
        }

        $this->container['printable_width_mm'] = $printable_width_mm;

        return $this;
    }

    /**
     * Gets size_range
     *
     * @return string[]|null
     */
    public function getSizeRange()
    {
        return $this->container['size_range'];
    }

    /**
     * Sets size_range
     *
     * @param string[]|null $size_range size_range
     *
     * @return self
     */
    public function setSizeRange($size_range)
    {
        if (is_null($size_range)) {
            throw new \InvalidArgumentException('non-nullable size_range cannot be null');
        }
        $this->container['size_range'] = $size_range;

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
