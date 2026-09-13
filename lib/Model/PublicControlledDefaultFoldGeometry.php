<?php
/**
 * PublicControlledDefaultFoldGeometry
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
 * PublicControlledDefaultFoldGeometry Class Doc Comment
 *
 * @category Class
 * @description Customer-safe geometry for one controlled folding assumption.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicControlledDefaultFoldGeometry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicControlledDefaultFoldGeometry';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fold_axis' => 'string',
        'fold_position_mm' => 'float',
        'input_height_mm' => 'float',
        'input_orientation' => 'string',
        'input_standard_name' => 'string',
        'input_width_mm' => 'float',
        'resulting_height_mm' => 'float',
        'resulting_orientation' => 'string',
        'resulting_standard_name' => 'string',
        'resulting_width_mm' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'fold_axis' => null,
        'fold_position_mm' => null,
        'input_height_mm' => null,
        'input_orientation' => null,
        'input_standard_name' => null,
        'input_width_mm' => null,
        'resulting_height_mm' => null,
        'resulting_orientation' => null,
        'resulting_standard_name' => null,
        'resulting_width_mm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'fold_axis' => false,
        'fold_position_mm' => false,
        'input_height_mm' => false,
        'input_orientation' => false,
        'input_standard_name' => false,
        'input_width_mm' => false,
        'resulting_height_mm' => false,
        'resulting_orientation' => false,
        'resulting_standard_name' => false,
        'resulting_width_mm' => false
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
        'fold_axis' => 'fold_axis',
        'fold_position_mm' => 'fold_position_mm',
        'input_height_mm' => 'input_height_mm',
        'input_orientation' => 'input_orientation',
        'input_standard_name' => 'input_standard_name',
        'input_width_mm' => 'input_width_mm',
        'resulting_height_mm' => 'resulting_height_mm',
        'resulting_orientation' => 'resulting_orientation',
        'resulting_standard_name' => 'resulting_standard_name',
        'resulting_width_mm' => 'resulting_width_mm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fold_axis' => 'setFoldAxis',
        'fold_position_mm' => 'setFoldPositionMm',
        'input_height_mm' => 'setInputHeightMm',
        'input_orientation' => 'setInputOrientation',
        'input_standard_name' => 'setInputStandardName',
        'input_width_mm' => 'setInputWidthMm',
        'resulting_height_mm' => 'setResultingHeightMm',
        'resulting_orientation' => 'setResultingOrientation',
        'resulting_standard_name' => 'setResultingStandardName',
        'resulting_width_mm' => 'setResultingWidthMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fold_axis' => 'getFoldAxis',
        'fold_position_mm' => 'getFoldPositionMm',
        'input_height_mm' => 'getInputHeightMm',
        'input_orientation' => 'getInputOrientation',
        'input_standard_name' => 'getInputStandardName',
        'input_width_mm' => 'getInputWidthMm',
        'resulting_height_mm' => 'getResultingHeightMm',
        'resulting_orientation' => 'getResultingOrientation',
        'resulting_standard_name' => 'getResultingStandardName',
        'resulting_width_mm' => 'getResultingWidthMm'
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

    public const FOLD_AXIS_VERTICAL = 'vertical';
    public const FOLD_AXIS_HORIZONTAL = 'horizontal';
    public const FOLD_AXIS_CUSTOM = 'custom';
    public const INPUT_ORIENTATION_PORTRAIT = 'portrait';
    public const INPUT_ORIENTATION_LANDSCAPE = 'landscape';
    public const RESULTING_ORIENTATION_PORTRAIT = 'portrait';
    public const RESULTING_ORIENTATION_LANDSCAPE = 'landscape';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFoldAxisAllowableValues()
    {
        return [
            self::FOLD_AXIS_VERTICAL,
            self::FOLD_AXIS_HORIZONTAL,
            self::FOLD_AXIS_CUSTOM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputOrientationAllowableValues()
    {
        return [
            self::INPUT_ORIENTATION_PORTRAIT,
            self::INPUT_ORIENTATION_LANDSCAPE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultingOrientationAllowableValues()
    {
        return [
            self::RESULTING_ORIENTATION_PORTRAIT,
            self::RESULTING_ORIENTATION_LANDSCAPE,
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
        $this->setIfExists('fold_axis', $data ?? [], null);
        $this->setIfExists('fold_position_mm', $data ?? [], null);
        $this->setIfExists('input_height_mm', $data ?? [], null);
        $this->setIfExists('input_orientation', $data ?? [], null);
        $this->setIfExists('input_standard_name', $data ?? [], null);
        $this->setIfExists('input_width_mm', $data ?? [], null);
        $this->setIfExists('resulting_height_mm', $data ?? [], null);
        $this->setIfExists('resulting_orientation', $data ?? [], null);
        $this->setIfExists('resulting_standard_name', $data ?? [], null);
        $this->setIfExists('resulting_width_mm', $data ?? [], null);
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

        if ($this->container['fold_axis'] === null) {
            $invalidProperties[] = "'fold_axis' can't be null";
        }
        $allowedValues = $this->getFoldAxisAllowableValues();
        if (!is_null($this->container['fold_axis']) && !in_array($this->container['fold_axis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fold_axis', must be one of '%s'",
                $this->container['fold_axis'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fold_position_mm'] === null) {
            $invalidProperties[] = "'fold_position_mm' can't be null";
        }
        if (($this->container['fold_position_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'fold_position_mm', must be bigger than 0.0.";
        }

        if ($this->container['input_height_mm'] === null) {
            $invalidProperties[] = "'input_height_mm' can't be null";
        }
        if (($this->container['input_height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'input_height_mm', must be bigger than 0.0.";
        }

        if ($this->container['input_orientation'] === null) {
            $invalidProperties[] = "'input_orientation' can't be null";
        }
        $allowedValues = $this->getInputOrientationAllowableValues();
        if (!is_null($this->container['input_orientation']) && !in_array($this->container['input_orientation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_orientation', must be one of '%s'",
                $this->container['input_orientation'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['input_standard_name'] === null) {
            $invalidProperties[] = "'input_standard_name' can't be null";
        }
        if ($this->container['input_width_mm'] === null) {
            $invalidProperties[] = "'input_width_mm' can't be null";
        }
        if (($this->container['input_width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'input_width_mm', must be bigger than 0.0.";
        }

        if ($this->container['resulting_height_mm'] === null) {
            $invalidProperties[] = "'resulting_height_mm' can't be null";
        }
        if (($this->container['resulting_height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'resulting_height_mm', must be bigger than 0.0.";
        }

        if ($this->container['resulting_orientation'] === null) {
            $invalidProperties[] = "'resulting_orientation' can't be null";
        }
        $allowedValues = $this->getResultingOrientationAllowableValues();
        if (!is_null($this->container['resulting_orientation']) && !in_array($this->container['resulting_orientation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resulting_orientation', must be one of '%s'",
                $this->container['resulting_orientation'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['resulting_standard_name'] === null) {
            $invalidProperties[] = "'resulting_standard_name' can't be null";
        }
        if ($this->container['resulting_width_mm'] === null) {
            $invalidProperties[] = "'resulting_width_mm' can't be null";
        }
        if (($this->container['resulting_width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'resulting_width_mm', must be bigger than 0.0.";
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
     * Gets fold_axis
     *
     * @return string
     */
    public function getFoldAxis()
    {
        return $this->container['fold_axis'];
    }

    /**
     * Sets fold_axis
     *
     * @param string $fold_axis fold_axis
     *
     * @return self
     */
    public function setFoldAxis($fold_axis)
    {
        if (is_null($fold_axis)) {
            throw new \InvalidArgumentException('non-nullable fold_axis cannot be null');
        }
        $allowedValues = $this->getFoldAxisAllowableValues();
        if (!in_array($fold_axis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fold_axis', must be one of '%s'",
                    $fold_axis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fold_axis'] = $fold_axis;

        return $this;
    }

    /**
     * Gets fold_position_mm
     *
     * @return float
     */
    public function getFoldPositionMm()
    {
        return $this->container['fold_position_mm'];
    }

    /**
     * Sets fold_position_mm
     *
     * @param float $fold_position_mm fold_position_mm
     *
     * @return self
     */
    public function setFoldPositionMm($fold_position_mm)
    {
        if (is_null($fold_position_mm)) {
            throw new \InvalidArgumentException('non-nullable fold_position_mm cannot be null');
        }

        if (($fold_position_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $fold_position_mm when calling PublicControlledDefaultFoldGeometry., must be bigger than 0.0.');
        }

        $this->container['fold_position_mm'] = $fold_position_mm;

        return $this;
    }

    /**
     * Gets input_height_mm
     *
     * @return float
     */
    public function getInputHeightMm()
    {
        return $this->container['input_height_mm'];
    }

    /**
     * Sets input_height_mm
     *
     * @param float $input_height_mm input_height_mm
     *
     * @return self
     */
    public function setInputHeightMm($input_height_mm)
    {
        if (is_null($input_height_mm)) {
            throw new \InvalidArgumentException('non-nullable input_height_mm cannot be null');
        }

        if (($input_height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $input_height_mm when calling PublicControlledDefaultFoldGeometry., must be bigger than 0.0.');
        }

        $this->container['input_height_mm'] = $input_height_mm;

        return $this;
    }

    /**
     * Gets input_orientation
     *
     * @return string
     */
    public function getInputOrientation()
    {
        return $this->container['input_orientation'];
    }

    /**
     * Sets input_orientation
     *
     * @param string $input_orientation input_orientation
     *
     * @return self
     */
    public function setInputOrientation($input_orientation)
    {
        if (is_null($input_orientation)) {
            throw new \InvalidArgumentException('non-nullable input_orientation cannot be null');
        }
        $allowedValues = $this->getInputOrientationAllowableValues();
        if (!in_array($input_orientation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input_orientation', must be one of '%s'",
                    $input_orientation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input_orientation'] = $input_orientation;

        return $this;
    }

    /**
     * Gets input_standard_name
     *
     * @return string
     */
    public function getInputStandardName()
    {
        return $this->container['input_standard_name'];
    }

    /**
     * Sets input_standard_name
     *
     * @param string $input_standard_name input_standard_name
     *
     * @return self
     */
    public function setInputStandardName($input_standard_name)
    {
        if (is_null($input_standard_name)) {
            throw new \InvalidArgumentException('non-nullable input_standard_name cannot be null');
        }
        $this->container['input_standard_name'] = $input_standard_name;

        return $this;
    }

    /**
     * Gets input_width_mm
     *
     * @return float
     */
    public function getInputWidthMm()
    {
        return $this->container['input_width_mm'];
    }

    /**
     * Sets input_width_mm
     *
     * @param float $input_width_mm input_width_mm
     *
     * @return self
     */
    public function setInputWidthMm($input_width_mm)
    {
        if (is_null($input_width_mm)) {
            throw new \InvalidArgumentException('non-nullable input_width_mm cannot be null');
        }

        if (($input_width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $input_width_mm when calling PublicControlledDefaultFoldGeometry., must be bigger than 0.0.');
        }

        $this->container['input_width_mm'] = $input_width_mm;

        return $this;
    }

    /**
     * Gets resulting_height_mm
     *
     * @return float
     */
    public function getResultingHeightMm()
    {
        return $this->container['resulting_height_mm'];
    }

    /**
     * Sets resulting_height_mm
     *
     * @param float $resulting_height_mm resulting_height_mm
     *
     * @return self
     */
    public function setResultingHeightMm($resulting_height_mm)
    {
        if (is_null($resulting_height_mm)) {
            throw new \InvalidArgumentException('non-nullable resulting_height_mm cannot be null');
        }

        if (($resulting_height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $resulting_height_mm when calling PublicControlledDefaultFoldGeometry., must be bigger than 0.0.');
        }

        $this->container['resulting_height_mm'] = $resulting_height_mm;

        return $this;
    }

    /**
     * Gets resulting_orientation
     *
     * @return string
     */
    public function getResultingOrientation()
    {
        return $this->container['resulting_orientation'];
    }

    /**
     * Sets resulting_orientation
     *
     * @param string $resulting_orientation resulting_orientation
     *
     * @return self
     */
    public function setResultingOrientation($resulting_orientation)
    {
        if (is_null($resulting_orientation)) {
            throw new \InvalidArgumentException('non-nullable resulting_orientation cannot be null');
        }
        $allowedValues = $this->getResultingOrientationAllowableValues();
        if (!in_array($resulting_orientation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resulting_orientation', must be one of '%s'",
                    $resulting_orientation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resulting_orientation'] = $resulting_orientation;

        return $this;
    }

    /**
     * Gets resulting_standard_name
     *
     * @return string
     */
    public function getResultingStandardName()
    {
        return $this->container['resulting_standard_name'];
    }

    /**
     * Sets resulting_standard_name
     *
     * @param string $resulting_standard_name resulting_standard_name
     *
     * @return self
     */
    public function setResultingStandardName($resulting_standard_name)
    {
        if (is_null($resulting_standard_name)) {
            throw new \InvalidArgumentException('non-nullable resulting_standard_name cannot be null');
        }
        $this->container['resulting_standard_name'] = $resulting_standard_name;

        return $this;
    }

    /**
     * Gets resulting_width_mm
     *
     * @return float
     */
    public function getResultingWidthMm()
    {
        return $this->container['resulting_width_mm'];
    }

    /**
     * Sets resulting_width_mm
     *
     * @param float $resulting_width_mm resulting_width_mm
     *
     * @return self
     */
    public function setResultingWidthMm($resulting_width_mm)
    {
        if (is_null($resulting_width_mm)) {
            throw new \InvalidArgumentException('non-nullable resulting_width_mm cannot be null');
        }

        if (($resulting_width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $resulting_width_mm when calling PublicControlledDefaultFoldGeometry., must be bigger than 0.0.');
        }

        $this->container['resulting_width_mm'] = $resulting_width_mm;

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
