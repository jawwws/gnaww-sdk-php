<?php
/**
 * ManufacturingRegionGeometry
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
 * ManufacturingRegionGeometry Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingRegionGeometry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'kind';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingRegion_geometry';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'kind' => 'string',
        'x_mm' => 'float',
        'y_mm' => 'float',
        'end' => '\Jawwws\Gnaww\Model\Point2D',
        'start' => '\Jawwws\Gnaww\Model\Point2D',
        'height_mm' => 'float',
        'width_mm' => 'float',
        'centre' => '\Jawwws\Gnaww\Model\Point2D',
        'diameter_mm' => 'float',
        'asset_ref' => 'string',
        'path_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'kind' => null,
        'x_mm' => null,
        'y_mm' => null,
        'end' => null,
        'start' => null,
        'height_mm' => null,
        'width_mm' => null,
        'centre' => null,
        'diameter_mm' => null,
        'asset_ref' => null,
        'path_id' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'kind' => false,
        'x_mm' => false,
        'y_mm' => false,
        'end' => false,
        'start' => false,
        'height_mm' => false,
        'width_mm' => false,
        'centre' => false,
        'diameter_mm' => false,
        'asset_ref' => false,
        'path_id' => false
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
        'kind' => 'kind',
        'x_mm' => 'x_mm',
        'y_mm' => 'y_mm',
        'end' => 'end',
        'start' => 'start',
        'height_mm' => 'height_mm',
        'width_mm' => 'width_mm',
        'centre' => 'centre',
        'diameter_mm' => 'diameter_mm',
        'asset_ref' => 'asset_ref',
        'path_id' => 'path_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kind' => 'setKind',
        'x_mm' => 'setXMm',
        'y_mm' => 'setYMm',
        'end' => 'setEnd',
        'start' => 'setStart',
        'height_mm' => 'setHeightMm',
        'width_mm' => 'setWidthMm',
        'centre' => 'setCentre',
        'diameter_mm' => 'setDiameterMm',
        'asset_ref' => 'setAssetRef',
        'path_id' => 'setPathId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kind' => 'getKind',
        'x_mm' => 'getXMm',
        'y_mm' => 'getYMm',
        'end' => 'getEnd',
        'start' => 'getStart',
        'height_mm' => 'getHeightMm',
        'width_mm' => 'getWidthMm',
        'centre' => 'getCentre',
        'diameter_mm' => 'getDiameterMm',
        'asset_ref' => 'getAssetRef',
        'path_id' => 'getPathId'
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

    public const KIND_PATH_REFERENCE = 'path_reference';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_PATH_REFERENCE,
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
        $this->setIfExists('kind', $data ?? [], 'path_reference');
        $this->setIfExists('x_mm', $data ?? [], null);
        $this->setIfExists('y_mm', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('height_mm', $data ?? [], null);
        $this->setIfExists('width_mm', $data ?? [], null);
        $this->setIfExists('centre', $data ?? [], null);
        $this->setIfExists('diameter_mm', $data ?? [], null);
        $this->setIfExists('asset_ref', $data ?? [], null);
        $this->setIfExists('path_id', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['kind'] = static::$openAPIModelName;
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

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
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

        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['height_mm'] === null) {
            $invalidProperties[] = "'height_mm' can't be null";
        }
        if (($this->container['height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'height_mm', must be bigger than 0.0.";
        }

        if ($this->container['width_mm'] === null) {
            $invalidProperties[] = "'width_mm' can't be null";
        }
        if (($this->container['width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'width_mm', must be bigger than 0.0.";
        }

        if ($this->container['centre'] === null) {
            $invalidProperties[] = "'centre' can't be null";
        }
        if ($this->container['diameter_mm'] === null) {
            $invalidProperties[] = "'diameter_mm' can't be null";
        }
        if (($this->container['diameter_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'diameter_mm', must be bigger than 0.0.";
        }

        if ($this->container['asset_ref'] === null) {
            $invalidProperties[] = "'asset_ref' can't be null";
        }
        if ((mb_strlen($this->container['asset_ref']) < 1)) {
            $invalidProperties[] = "invalid value for 'asset_ref', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid value for $x_mm when calling ManufacturingRegionGeometry., must be bigger than or equal to 0.0.');
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
            throw new \InvalidArgumentException('invalid value for $y_mm when calling ManufacturingRegionGeometry., must be bigger than or equal to 0.0.');
        }

        $this->container['y_mm'] = $y_mm;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \Jawwws\Gnaww\Model\Point2D
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \Jawwws\Gnaww\Model\Point2D $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \Jawwws\Gnaww\Model\Point2D
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \Jawwws\Gnaww\Model\Point2D $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            throw new \InvalidArgumentException('non-nullable start cannot be null');
        }
        $this->container['start'] = $start;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $height_mm when calling ManufacturingRegionGeometry., must be bigger than 0.0.');
        }

        $this->container['height_mm'] = $height_mm;

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
            throw new \InvalidArgumentException('invalid value for $width_mm when calling ManufacturingRegionGeometry., must be bigger than 0.0.');
        }

        $this->container['width_mm'] = $width_mm;

        return $this;
    }

    /**
     * Gets centre
     *
     * @return \Jawwws\Gnaww\Model\Point2D
     */
    public function getCentre()
    {
        return $this->container['centre'];
    }

    /**
     * Sets centre
     *
     * @param \Jawwws\Gnaww\Model\Point2D $centre centre
     *
     * @return self
     */
    public function setCentre($centre)
    {
        if (is_null($centre)) {
            throw new \InvalidArgumentException('non-nullable centre cannot be null');
        }
        $this->container['centre'] = $centre;

        return $this;
    }

    /**
     * Gets diameter_mm
     *
     * @return float
     */
    public function getDiameterMm()
    {
        return $this->container['diameter_mm'];
    }

    /**
     * Sets diameter_mm
     *
     * @param float $diameter_mm diameter_mm
     *
     * @return self
     */
    public function setDiameterMm($diameter_mm)
    {
        if (is_null($diameter_mm)) {
            throw new \InvalidArgumentException('non-nullable diameter_mm cannot be null');
        }

        if (($diameter_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $diameter_mm when calling ManufacturingRegionGeometry., must be bigger than 0.0.');
        }

        $this->container['diameter_mm'] = $diameter_mm;

        return $this;
    }

    /**
     * Gets asset_ref
     *
     * @return string
     */
    public function getAssetRef()
    {
        return $this->container['asset_ref'];
    }

    /**
     * Sets asset_ref
     *
     * @param string $asset_ref asset_ref
     *
     * @return self
     */
    public function setAssetRef($asset_ref)
    {
        if (is_null($asset_ref)) {
            throw new \InvalidArgumentException('non-nullable asset_ref cannot be null');
        }

        if ((mb_strlen($asset_ref) < 1)) {
            throw new \InvalidArgumentException('invalid length for $asset_ref when calling ManufacturingRegionGeometry., must be bigger than or equal to 1.');
        }

        $this->container['asset_ref'] = $asset_ref;

        return $this;
    }

    /**
     * Gets path_id
     *
     * @return string|null
     */
    public function getPathId()
    {
        return $this->container['path_id'];
    }

    /**
     * Sets path_id
     *
     * @param string|null $path_id path_id
     *
     * @return self
     */
    public function setPathId($path_id)
    {
        if (is_null($path_id)) {
            throw new \InvalidArgumentException('non-nullable path_id cannot be null');
        }
        $this->container['path_id'] = $path_id;

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
