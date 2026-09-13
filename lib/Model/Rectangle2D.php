<?php
/**
 * Rectangle2D
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
 * Rectangle2D Class Doc Comment
 *
 * @category Class
 * @description Axis-aligned rectangular region.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class Rectangle2D implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Rectangle2D';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'height_mm' => 'float',
        'kind' => 'string',
        'width_mm' => 'float',
        'x_mm' => 'float',
        'y_mm' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'height_mm' => null,
        'kind' => null,
        'width_mm' => null,
        'x_mm' => null,
        'y_mm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'height_mm' => false,
        'kind' => false,
        'width_mm' => false,
        'x_mm' => false,
        'y_mm' => false
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
        'height_mm' => 'height_mm',
        'kind' => 'kind',
        'width_mm' => 'width_mm',
        'x_mm' => 'x_mm',
        'y_mm' => 'y_mm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height_mm' => 'setHeightMm',
        'kind' => 'setKind',
        'width_mm' => 'setWidthMm',
        'x_mm' => 'setXMm',
        'y_mm' => 'setYMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height_mm' => 'getHeightMm',
        'kind' => 'getKind',
        'width_mm' => 'getWidthMm',
        'x_mm' => 'getXMm',
        'y_mm' => 'getYMm'
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

    public const KIND_RECTANGLE = 'rectangle';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_RECTANGLE,
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
        $this->setIfExists('height_mm', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], 'rectangle');
        $this->setIfExists('width_mm', $data ?? [], null);
        $this->setIfExists('x_mm', $data ?? [], null);
        $this->setIfExists('y_mm', $data ?? [], null);
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

        if ($this->container['height_mm'] === null) {
            $invalidProperties[] = "'height_mm' can't be null";
        }
        if (($this->container['height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'height_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['width_mm'] === null) {
            $invalidProperties[] = "'width_mm' can't be null";
        }
        if (($this->container['width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'width_mm', must be bigger than 0.0.";
        }

        if ($this->container['x_mm'] === null) {
            $invalidProperties[] = "'x_mm' can't be null";
        }
        if (($this->container['x_mm'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'x_mm', must be bigger than or equal to 0.0.";
        }

        if ($this->container['y_mm'] === null) {
            $invalidProperties[] = "'y_mm' can't be null";
        }
        if (($this->container['y_mm'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'y_mm', must be bigger than or equal to 0.0.";
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
     * Gets height_mm
     *
     * @return float
     */
    public function getHeightMm()
    {
        return $this->container['height_mm'];
    }

    /**
     * Sets height_mm
     *
     * @param float $height_mm height_mm
     *
     * @return self
     */
    public function setHeightMm($height_mm)
    {
        if (is_null($height_mm)) {
            throw new \InvalidArgumentException('non-nullable height_mm cannot be null');
        }

        if (($height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $height_mm when calling Rectangle2D., must be bigger than 0.0.');
        }

        $this->container['height_mm'] = $height_mm;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets width_mm
     *
     * @return float
     */
    public function getWidthMm()
    {
        return $this->container['width_mm'];
    }

    /**
     * Sets width_mm
     *
     * @param float $width_mm width_mm
     *
     * @return self
     */
    public function setWidthMm($width_mm)
    {
        if (is_null($width_mm)) {
            throw new \InvalidArgumentException('non-nullable width_mm cannot be null');
        }

        if (($width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $width_mm when calling Rectangle2D., must be bigger than 0.0.');
        }

        $this->container['width_mm'] = $width_mm;

        return $this;
    }

    /**
     * Gets x_mm
     *
     * @return float
     */
    public function getXMm()
    {
        return $this->container['x_mm'];
    }

    /**
     * Sets x_mm
     *
     * @param float $x_mm x_mm
     *
     * @return self
     */
    public function setXMm($x_mm)
    {
        if (is_null($x_mm)) {
            throw new \InvalidArgumentException('non-nullable x_mm cannot be null');
        }

        if (($x_mm < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $x_mm when calling Rectangle2D., must be bigger than or equal to 0.0.');
        }

        $this->container['x_mm'] = $x_mm;

        return $this;
    }

    /**
     * Gets y_mm
     *
     * @return float
     */
    public function getYMm()
    {
        return $this->container['y_mm'];
    }

    /**
     * Sets y_mm
     *
     * @param float $y_mm y_mm
     *
     * @return self
     */
    public function setYMm($y_mm)
    {
        if (is_null($y_mm)) {
            throw new \InvalidArgumentException('non-nullable y_mm cannot be null');
        }

        if (($y_mm < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $y_mm when calling Rectangle2D., must be bigger than or equal to 0.0.');
        }

        $this->container['y_mm'] = $y_mm;

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
