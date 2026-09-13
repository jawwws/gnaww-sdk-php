<?php
/**
 * DrillHole
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
 * DrillHole Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class DrillHole implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DrillHole';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'centre' => '\Jawwws\Gnaww\Model\Point2D',
        'depth_mm' => 'float',
        'diameter_mm' => 'float',
        'edge_position' => '\Jawwws\Gnaww\Model\EdgeRelativePoint',
        'geometry_asset_ref' => 'string',
        'height_mm' => 'float',
        'shape' => 'string',
        'style' => 'string',
        'width_mm' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'centre' => null,
        'depth_mm' => null,
        'diameter_mm' => null,
        'edge_position' => null,
        'geometry_asset_ref' => null,
        'height_mm' => null,
        'shape' => null,
        'style' => null,
        'width_mm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'centre' => true,
        'depth_mm' => true,
        'diameter_mm' => true,
        'edge_position' => true,
        'geometry_asset_ref' => true,
        'height_mm' => true,
        'shape' => false,
        'style' => false,
        'width_mm' => true
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
        'centre' => 'centre',
        'depth_mm' => 'depth_mm',
        'diameter_mm' => 'diameter_mm',
        'edge_position' => 'edge_position',
        'geometry_asset_ref' => 'geometry_asset_ref',
        'height_mm' => 'height_mm',
        'shape' => 'shape',
        'style' => 'style',
        'width_mm' => 'width_mm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'centre' => 'setCentre',
        'depth_mm' => 'setDepthMm',
        'diameter_mm' => 'setDiameterMm',
        'edge_position' => 'setEdgePosition',
        'geometry_asset_ref' => 'setGeometryAssetRef',
        'height_mm' => 'setHeightMm',
        'shape' => 'setShape',
        'style' => 'setStyle',
        'width_mm' => 'setWidthMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'centre' => 'getCentre',
        'depth_mm' => 'getDepthMm',
        'diameter_mm' => 'getDiameterMm',
        'edge_position' => 'getEdgePosition',
        'geometry_asset_ref' => 'getGeometryAssetRef',
        'height_mm' => 'getHeightMm',
        'shape' => 'getShape',
        'style' => 'getStyle',
        'width_mm' => 'getWidthMm'
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

    public const SHAPE_CIRCLE = 'circle';
    public const SHAPE_SLOT = 'slot';
    public const SHAPE_CUSTOM = 'custom';
    public const STYLE_THROUGH = 'through';
    public const STYLE_BLIND = 'blind';
    public const STYLE_COUNTERSUNK = 'countersunk';
    public const STYLE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_CIRCLE,
            self::SHAPE_SLOT,
            self::SHAPE_CUSTOM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_THROUGH,
            self::STYLE_BLIND,
            self::STYLE_COUNTERSUNK,
            self::STYLE_UNKNOWN,
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
        $this->setIfExists('centre', $data ?? [], null);
        $this->setIfExists('depth_mm', $data ?? [], null);
        $this->setIfExists('diameter_mm', $data ?? [], null);
        $this->setIfExists('edge_position', $data ?? [], null);
        $this->setIfExists('geometry_asset_ref', $data ?? [], null);
        $this->setIfExists('height_mm', $data ?? [], null);
        $this->setIfExists('shape', $data ?? [], 'circle');
        $this->setIfExists('style', $data ?? [], 'through');
        $this->setIfExists('width_mm', $data ?? [], null);
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

        if (!is_null($this->container['depth_mm']) && ($this->container['depth_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'depth_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['diameter_mm']) && ($this->container['diameter_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'diameter_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['height_mm']) && ($this->container['height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'height_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getShapeAllowableValues();
        if (!is_null($this->container['shape']) && !in_array($this->container['shape'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shape', must be one of '%s'",
                $this->container['shape'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($this->container['style']) && !in_array($this->container['style'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'style', must be one of '%s'",
                $this->container['style'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['width_mm']) && ($this->container['width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'width_mm', must be bigger than 0.0.";
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
     * Gets centre
     *
     * @return \Jawwws\Gnaww\Model\Point2D|null
     */
    public function getCentre()
    {
        return $this->container['centre'];
    }

    /**
     * Sets centre
     *
     * @param \Jawwws\Gnaww\Model\Point2D|null $centre centre
     *
     * @return self
     */
    public function setCentre($centre)
    {
        if (is_null($centre)) {
            array_push($this->openAPINullablesSetToNull, 'centre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('centre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['centre'] = $centre;

        return $this;
    }

    /**
     * Gets depth_mm
     *
     * @return float|null
     */
    public function getDepthMm()
    {
        return $this->container['depth_mm'];
    }

    /**
     * Sets depth_mm
     *
     * @param float|null $depth_mm depth_mm
     *
     * @return self
     */
    public function setDepthMm($depth_mm)
    {
        if (is_null($depth_mm)) {
            array_push($this->openAPINullablesSetToNull, 'depth_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('depth_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($depth_mm) && ($depth_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $depth_mm when calling DrillHole., must be bigger than 0.0.');
        }

        $this->container['depth_mm'] = $depth_mm;

        return $this;
    }

    /**
     * Gets diameter_mm
     *
     * @return float|null
     */
    public function getDiameterMm()
    {
        return $this->container['diameter_mm'];
    }

    /**
     * Sets diameter_mm
     *
     * @param float|null $diameter_mm diameter_mm
     *
     * @return self
     */
    public function setDiameterMm($diameter_mm)
    {
        if (is_null($diameter_mm)) {
            array_push($this->openAPINullablesSetToNull, 'diameter_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('diameter_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($diameter_mm) && ($diameter_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $diameter_mm when calling DrillHole., must be bigger than 0.0.');
        }

        $this->container['diameter_mm'] = $diameter_mm;

        return $this;
    }

    /**
     * Gets edge_position
     *
     * @return \Jawwws\Gnaww\Model\EdgeRelativePoint|null
     */
    public function getEdgePosition()
    {
        return $this->container['edge_position'];
    }

    /**
     * Sets edge_position
     *
     * @param \Jawwws\Gnaww\Model\EdgeRelativePoint|null $edge_position edge_position
     *
     * @return self
     */
    public function setEdgePosition($edge_position)
    {
        if (is_null($edge_position)) {
            array_push($this->openAPINullablesSetToNull, 'edge_position');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edge_position', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edge_position'] = $edge_position;

        return $this;
    }

    /**
     * Gets geometry_asset_ref
     *
     * @return string|null
     */
    public function getGeometryAssetRef()
    {
        return $this->container['geometry_asset_ref'];
    }

    /**
     * Sets geometry_asset_ref
     *
     * @param string|null $geometry_asset_ref geometry_asset_ref
     *
     * @return self
     */
    public function setGeometryAssetRef($geometry_asset_ref)
    {
        if (is_null($geometry_asset_ref)) {
            array_push($this->openAPINullablesSetToNull, 'geometry_asset_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('geometry_asset_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['geometry_asset_ref'] = $geometry_asset_ref;

        return $this;
    }

    /**
     * Gets height_mm
     *
     * @return float|null
     */
    public function getHeightMm()
    {
        return $this->container['height_mm'];
    }

    /**
     * Sets height_mm
     *
     * @param float|null $height_mm height_mm
     *
     * @return self
     */
    public function setHeightMm($height_mm)
    {
        if (is_null($height_mm)) {
            array_push($this->openAPINullablesSetToNull, 'height_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('height_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($height_mm) && ($height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $height_mm when calling DrillHole., must be bigger than 0.0.');
        }

        $this->container['height_mm'] = $height_mm;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return string|null
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param string|null $shape shape
     *
     * @return self
     */
    public function setShape($shape)
    {
        if (is_null($shape)) {
            throw new \InvalidArgumentException('non-nullable shape cannot be null');
        }
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($shape, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shape', must be one of '%s'",
                    $shape,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style style
     *
     * @return self
     */
    public function setStyle($style)
    {
        if (is_null($style)) {
            throw new \InvalidArgumentException('non-nullable style cannot be null');
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($style, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'style', must be one of '%s'",
                    $style,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets width_mm
     *
     * @return float|null
     */
    public function getWidthMm()
    {
        return $this->container['width_mm'];
    }

    /**
     * Sets width_mm
     *
     * @param float|null $width_mm width_mm
     *
     * @return self
     */
    public function setWidthMm($width_mm)
    {
        if (is_null($width_mm)) {
            array_push($this->openAPINullablesSetToNull, 'width_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('width_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($width_mm) && ($width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $width_mm when calling DrillHole., must be bigger than 0.0.');
        }

        $this->container['width_mm'] = $width_mm;

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
