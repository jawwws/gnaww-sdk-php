<?php
/**
 * ManufacturingGeometry
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
 * ManufacturingGeometry Class Doc Comment
 *
 * @category Class
 * @description Deterministic component geometry without embedding full CAD/design content.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingGeometry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingGeometry';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'coordinate_origin' => 'string',
        'depth_mm' => 'float',
        'geometry_asset_ref' => 'string',
        'height_mm' => 'float',
        'orientation' => 'string',
        'shape' => 'string',
        'standard_name' => 'string',
        'thickness_mm' => 'float',
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
        'coordinate_origin' => null,
        'depth_mm' => null,
        'geometry_asset_ref' => null,
        'height_mm' => null,
        'orientation' => null,
        'shape' => null,
        'standard_name' => null,
        'thickness_mm' => null,
        'width_mm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'coordinate_origin' => false,
        'depth_mm' => true,
        'geometry_asset_ref' => true,
        'height_mm' => true,
        'orientation' => false,
        'shape' => false,
        'standard_name' => true,
        'thickness_mm' => true,
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
        'coordinate_origin' => 'coordinate_origin',
        'depth_mm' => 'depth_mm',
        'geometry_asset_ref' => 'geometry_asset_ref',
        'height_mm' => 'height_mm',
        'orientation' => 'orientation',
        'shape' => 'shape',
        'standard_name' => 'standard_name',
        'thickness_mm' => 'thickness_mm',
        'width_mm' => 'width_mm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coordinate_origin' => 'setCoordinateOrigin',
        'depth_mm' => 'setDepthMm',
        'geometry_asset_ref' => 'setGeometryAssetRef',
        'height_mm' => 'setHeightMm',
        'orientation' => 'setOrientation',
        'shape' => 'setShape',
        'standard_name' => 'setStandardName',
        'thickness_mm' => 'setThicknessMm',
        'width_mm' => 'setWidthMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coordinate_origin' => 'getCoordinateOrigin',
        'depth_mm' => 'getDepthMm',
        'geometry_asset_ref' => 'getGeometryAssetRef',
        'height_mm' => 'getHeightMm',
        'orientation' => 'getOrientation',
        'shape' => 'getShape',
        'standard_name' => 'getStandardName',
        'thickness_mm' => 'getThicknessMm',
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

    public const COORDINATE_ORIGIN_TOP_LEFT = 'top_left';
    public const COORDINATE_ORIGIN_BOTTOM_LEFT = 'bottom_left';
    public const COORDINATE_ORIGIN_CENTRE = 'centre';
    public const ORIENTATION_PORTRAIT = 'portrait';
    public const ORIENTATION_LANDSCAPE = 'landscape';
    public const ORIENTATION_SQUARE = 'square';
    public const ORIENTATION_UNKNOWN = 'unknown';
    public const SHAPE_RECTANGLE = 'rectangle';
    public const SHAPE_CIRCLE = 'circle';
    public const SHAPE_POLYGON = 'polygon';
    public const SHAPE_PATH = 'path';
    public const SHAPE_SOLID = 'solid';
    public const SHAPE_CUSTOM = 'custom';
    public const SHAPE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoordinateOriginAllowableValues()
    {
        return [
            self::COORDINATE_ORIGIN_TOP_LEFT,
            self::COORDINATE_ORIGIN_BOTTOM_LEFT,
            self::COORDINATE_ORIGIN_CENTRE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_PORTRAIT,
            self::ORIENTATION_LANDSCAPE,
            self::ORIENTATION_SQUARE,
            self::ORIENTATION_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_RECTANGLE,
            self::SHAPE_CIRCLE,
            self::SHAPE_POLYGON,
            self::SHAPE_PATH,
            self::SHAPE_SOLID,
            self::SHAPE_CUSTOM,
            self::SHAPE_UNKNOWN,
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
        $this->setIfExists('coordinate_origin', $data ?? [], 'top_left');
        $this->setIfExists('depth_mm', $data ?? [], null);
        $this->setIfExists('geometry_asset_ref', $data ?? [], null);
        $this->setIfExists('height_mm', $data ?? [], null);
        $this->setIfExists('orientation', $data ?? [], 'unknown');
        $this->setIfExists('shape', $data ?? [], 'unknown');
        $this->setIfExists('standard_name', $data ?? [], null);
        $this->setIfExists('thickness_mm', $data ?? [], null);
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

        $allowedValues = $this->getCoordinateOriginAllowableValues();
        if (!is_null($this->container['coordinate_origin']) && !in_array($this->container['coordinate_origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coordinate_origin', must be one of '%s'",
                $this->container['coordinate_origin'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['depth_mm']) && ($this->container['depth_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'depth_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['height_mm']) && ($this->container['height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'height_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getOrientationAllowableValues();
        if (!is_null($this->container['orientation']) && !in_array($this->container['orientation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'orientation', must be one of '%s'",
                $this->container['orientation'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShapeAllowableValues();
        if (!is_null($this->container['shape']) && !in_array($this->container['shape'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shape', must be one of '%s'",
                $this->container['shape'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['thickness_mm']) && ($this->container['thickness_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'thickness_mm', must be bigger than 0.0.";
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
     * Gets coordinate_origin
     *
     * @return string|null
     */
    public function getCoordinateOrigin()
    {
        return $this->container['coordinate_origin'];
    }

    /**
     * Sets coordinate_origin
     *
     * @param string|null $coordinate_origin coordinate_origin
     *
     * @return self
     */
    public function setCoordinateOrigin($coordinate_origin)
    {
        if (is_null($coordinate_origin)) {
            throw new \InvalidArgumentException('non-nullable coordinate_origin cannot be null');
        }
        $allowedValues = $this->getCoordinateOriginAllowableValues();
        if (!in_array($coordinate_origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coordinate_origin', must be one of '%s'",
                    $coordinate_origin,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coordinate_origin'] = $coordinate_origin;

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
            throw new \InvalidArgumentException('invalid value for $depth_mm when calling ManufacturingGeometry., must be bigger than 0.0.');
        }

        $this->container['depth_mm'] = $depth_mm;

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
            throw new \InvalidArgumentException('invalid value for $height_mm when calling ManufacturingGeometry., must be bigger than 0.0.');
        }

        $this->container['height_mm'] = $height_mm;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return string|null
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param string|null $orientation orientation
     *
     * @return self
     */
    public function setOrientation($orientation)
    {
        if (is_null($orientation)) {
            throw new \InvalidArgumentException('non-nullable orientation cannot be null');
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($orientation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'orientation', must be one of '%s'",
                    $orientation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['orientation'] = $orientation;

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
     * Gets standard_name
     *
     * @return string|null
     */
    public function getStandardName()
    {
        return $this->container['standard_name'];
    }

    /**
     * Sets standard_name
     *
     * @param string|null $standard_name standard_name
     *
     * @return self
     */
    public function setStandardName($standard_name)
    {
        if (is_null($standard_name)) {
            array_push($this->openAPINullablesSetToNull, 'standard_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('standard_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['standard_name'] = $standard_name;

        return $this;
    }

    /**
     * Gets thickness_mm
     *
     * @return float|null
     */
    public function getThicknessMm()
    {
        return $this->container['thickness_mm'];
    }

    /**
     * Sets thickness_mm
     *
     * @param float|null $thickness_mm thickness_mm
     *
     * @return self
     */
    public function setThicknessMm($thickness_mm)
    {
        if (is_null($thickness_mm)) {
            array_push($this->openAPINullablesSetToNull, 'thickness_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thickness_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($thickness_mm) && ($thickness_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $thickness_mm when calling ManufacturingGeometry., must be bigger than 0.0.');
        }

        $this->container['thickness_mm'] = $thickness_mm;

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
            throw new \InvalidArgumentException('invalid value for $width_mm when calling ManufacturingGeometry., must be bigger than 0.0.');
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
