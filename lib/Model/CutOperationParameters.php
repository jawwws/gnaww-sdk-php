<?php
/**
 * CutOperationParameters
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
 * CutOperationParameters Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class CutOperationParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CutOperationParameters';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'contour' => '\Jawwws\Gnaww\Model\Contour',
        'corner_radius_mm' => 'float',
        'corners' => 'string[]',
        'kind' => 'string',
        'method' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'contour' => null,
        'corner_radius_mm' => null,
        'corners' => null,
        'kind' => null,
        'method' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'contour' => true,
        'corner_radius_mm' => true,
        'corners' => false,
        'kind' => false,
        'method' => false
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
        'contour' => 'contour',
        'corner_radius_mm' => 'corner_radius_mm',
        'corners' => 'corners',
        'kind' => 'kind',
        'method' => 'method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contour' => 'setContour',
        'corner_radius_mm' => 'setCornerRadiusMm',
        'corners' => 'setCorners',
        'kind' => 'setKind',
        'method' => 'setMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contour' => 'getContour',
        'corner_radius_mm' => 'getCornerRadiusMm',
        'corners' => 'getCorners',
        'kind' => 'getKind',
        'method' => 'getMethod'
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

    public const CORNERS_TOP_LEFT = 'top_left';
    public const CORNERS_TOP_RIGHT = 'top_right';
    public const CORNERS_BOTTOM_LEFT = 'bottom_left';
    public const CORNERS_BOTTOM_RIGHT = 'bottom_right';
    public const KIND_CUT = 'cut';
    public const METHOD_TRIM = 'trim';
    public const METHOD_GUILLOTINE = 'guillotine';
    public const METHOD_CORNER_ROUND = 'corner_round';
    public const METHOD_DIE_CUT = 'die_cut';
    public const METHOD_KISS_CUT = 'kiss_cut';
    public const METHOD_LASER_CUT = 'laser_cut';
    public const METHOD_APERTURE = 'aperture';
    public const METHOD_CONTOUR = 'contour';
    public const METHOD_CUSTOM = 'custom';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCornersAllowableValues()
    {
        return [
            self::CORNERS_TOP_LEFT,
            self::CORNERS_TOP_RIGHT,
            self::CORNERS_BOTTOM_LEFT,
            self::CORNERS_BOTTOM_RIGHT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_CUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_TRIM,
            self::METHOD_GUILLOTINE,
            self::METHOD_CORNER_ROUND,
            self::METHOD_DIE_CUT,
            self::METHOD_KISS_CUT,
            self::METHOD_LASER_CUT,
            self::METHOD_APERTURE,
            self::METHOD_CONTOUR,
            self::METHOD_CUSTOM,
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
        $this->setIfExists('contour', $data ?? [], null);
        $this->setIfExists('corner_radius_mm', $data ?? [], null);
        $this->setIfExists('corners', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], 'cut');
        $this->setIfExists('method', $data ?? [], null);
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

        if (!is_null($this->container['corner_radius_mm']) && ($this->container['corner_radius_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'corner_radius_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
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
     * Gets contour
     *
     * @return \Jawwws\Gnaww\Model\Contour|null
     */
    public function getContour()
    {
        return $this->container['contour'];
    }

    /**
     * Sets contour
     *
     * @param \Jawwws\Gnaww\Model\Contour|null $contour contour
     *
     * @return self
     */
    public function setContour($contour)
    {
        if (is_null($contour)) {
            array_push($this->openAPINullablesSetToNull, 'contour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contour'] = $contour;

        return $this;
    }

    /**
     * Gets corner_radius_mm
     *
     * @return float|null
     */
    public function getCornerRadiusMm()
    {
        return $this->container['corner_radius_mm'];
    }

    /**
     * Sets corner_radius_mm
     *
     * @param float|null $corner_radius_mm corner_radius_mm
     *
     * @return self
     */
    public function setCornerRadiusMm($corner_radius_mm)
    {
        if (is_null($corner_radius_mm)) {
            array_push($this->openAPINullablesSetToNull, 'corner_radius_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('corner_radius_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($corner_radius_mm) && ($corner_radius_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $corner_radius_mm when calling CutOperationParameters., must be bigger than 0.0.');
        }

        $this->container['corner_radius_mm'] = $corner_radius_mm;

        return $this;
    }

    /**
     * Gets corners
     *
     * @return string[]|null
     */
    public function getCorners()
    {
        return $this->container['corners'];
    }

    /**
     * Sets corners
     *
     * @param string[]|null $corners corners
     *
     * @return self
     */
    public function setCorners($corners)
    {
        if (is_null($corners)) {
            throw new \InvalidArgumentException('non-nullable corners cannot be null');
        }
        $allowedValues = $this->getCornersAllowableValues();
        if (array_diff($corners, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'corners', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['corners'] = $corners;

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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

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
