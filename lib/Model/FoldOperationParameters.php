<?php
/**
 * FoldOperationParameters
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
 * FoldOperationParameters Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class FoldOperationParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FoldOperationParameters';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'basis' => 'string',
        'fold_lines' => '\Jawwws\Gnaww\Model\FoldLine[]',
        'input_geometry' => '\Jawwws\Gnaww\Model\ManufacturingGeometry',
        'kind' => 'string',
        'named_pattern' => 'string',
        'physical_panels' => '\Jawwws\Gnaww\Model\FoldPanel[]',
        'resulting_geometry' => '\Jawwws\Gnaww\Model\ManufacturingGeometry'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'basis' => null,
        'fold_lines' => null,
        'input_geometry' => null,
        'kind' => null,
        'named_pattern' => null,
        'physical_panels' => null,
        'resulting_geometry' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'basis' => false,
        'fold_lines' => false,
        'input_geometry' => true,
        'kind' => false,
        'named_pattern' => true,
        'physical_panels' => false,
        'resulting_geometry' => true
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
        'basis' => 'basis',
        'fold_lines' => 'fold_lines',
        'input_geometry' => 'input_geometry',
        'kind' => 'kind',
        'named_pattern' => 'named_pattern',
        'physical_panels' => 'physical_panels',
        'resulting_geometry' => 'resulting_geometry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basis' => 'setBasis',
        'fold_lines' => 'setFoldLines',
        'input_geometry' => 'setInputGeometry',
        'kind' => 'setKind',
        'named_pattern' => 'setNamedPattern',
        'physical_panels' => 'setPhysicalPanels',
        'resulting_geometry' => 'setResultingGeometry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basis' => 'getBasis',
        'fold_lines' => 'getFoldLines',
        'input_geometry' => 'getInputGeometry',
        'kind' => 'getKind',
        'named_pattern' => 'getNamedPattern',
        'physical_panels' => 'getPhysicalPanels',
        'resulting_geometry' => 'getResultingGeometry'
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

    public const BASIS_UNRESOLVED = 'unresolved';
    public const BASIS_EXPLICIT_LINES = 'explicit_lines';
    public const BASIS_NAMED_PATTERN = 'named_pattern';
    public const BASIS_LEGACY_INPUT_OUTPUT = 'legacy_input_output';
    public const KIND_FOLD = 'fold';
    public const NAMED_PATTERN_HALF_FOLD = 'half_fold';
    public const NAMED_PATTERN_TRI_FOLD = 'tri_fold';
    public const NAMED_PATTERN_Z_FOLD = 'z_fold';
    public const NAMED_PATTERN_GATE_FOLD = 'gate_fold';
    public const NAMED_PATTERN_ROLL_FOLD = 'roll_fold';
    public const NAMED_PATTERN_CROSS_FOLD = 'cross_fold';
    public const NAMED_PATTERN_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBasisAllowableValues()
    {
        return [
            self::BASIS_UNRESOLVED,
            self::BASIS_EXPLICIT_LINES,
            self::BASIS_NAMED_PATTERN,
            self::BASIS_LEGACY_INPUT_OUTPUT,
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
            self::KIND_FOLD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNamedPatternAllowableValues()
    {
        return [
            self::NAMED_PATTERN_HALF_FOLD,
            self::NAMED_PATTERN_TRI_FOLD,
            self::NAMED_PATTERN_Z_FOLD,
            self::NAMED_PATTERN_GATE_FOLD,
            self::NAMED_PATTERN_ROLL_FOLD,
            self::NAMED_PATTERN_CROSS_FOLD,
            self::NAMED_PATTERN_UNKNOWN,
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
        $this->setIfExists('basis', $data ?? [], null);
        $this->setIfExists('fold_lines', $data ?? [], null);
        $this->setIfExists('input_geometry', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], 'fold');
        $this->setIfExists('named_pattern', $data ?? [], null);
        $this->setIfExists('physical_panels', $data ?? [], null);
        $this->setIfExists('resulting_geometry', $data ?? [], null);
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

        if ($this->container['basis'] === null) {
            $invalidProperties[] = "'basis' can't be null";
        }
        $allowedValues = $this->getBasisAllowableValues();
        if (!is_null($this->container['basis']) && !in_array($this->container['basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'basis', must be one of '%s'",
                $this->container['basis'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNamedPatternAllowableValues();
        if (!is_null($this->container['named_pattern']) && !in_array($this->container['named_pattern'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'named_pattern', must be one of '%s'",
                $this->container['named_pattern'],
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
     * Gets basis
     *
     * @return string
     */
    public function getBasis()
    {
        return $this->container['basis'];
    }

    /**
     * Sets basis
     *
     * @param string $basis basis
     *
     * @return self
     */
    public function setBasis($basis)
    {
        if (is_null($basis)) {
            throw new \InvalidArgumentException('non-nullable basis cannot be null');
        }
        $allowedValues = $this->getBasisAllowableValues();
        if (!in_array($basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'basis', must be one of '%s'",
                    $basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['basis'] = $basis;

        return $this;
    }

    /**
     * Gets fold_lines
     *
     * @return \Jawwws\Gnaww\Model\FoldLine[]|null
     */
    public function getFoldLines()
    {
        return $this->container['fold_lines'];
    }

    /**
     * Sets fold_lines
     *
     * @param \Jawwws\Gnaww\Model\FoldLine[]|null $fold_lines fold_lines
     *
     * @return self
     */
    public function setFoldLines($fold_lines)
    {
        if (is_null($fold_lines)) {
            throw new \InvalidArgumentException('non-nullable fold_lines cannot be null');
        }
        $this->container['fold_lines'] = $fold_lines;

        return $this;
    }

    /**
     * Gets input_geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingGeometry|null
     */
    public function getInputGeometry()
    {
        return $this->container['input_geometry'];
    }

    /**
     * Sets input_geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingGeometry|null $input_geometry input_geometry
     *
     * @return self
     */
    public function setInputGeometry($input_geometry)
    {
        if (is_null($input_geometry)) {
            array_push($this->openAPINullablesSetToNull, 'input_geometry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('input_geometry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['input_geometry'] = $input_geometry;

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
     * Gets named_pattern
     *
     * @return string|null
     */
    public function getNamedPattern()
    {
        return $this->container['named_pattern'];
    }

    /**
     * Sets named_pattern
     *
     * @param string|null $named_pattern named_pattern
     *
     * @return self
     */
    public function setNamedPattern($named_pattern)
    {
        if (is_null($named_pattern)) {
            array_push($this->openAPINullablesSetToNull, 'named_pattern');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('named_pattern', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getNamedPatternAllowableValues();
        if (!is_null($named_pattern) && !in_array($named_pattern, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'named_pattern', must be one of '%s'",
                    $named_pattern,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['named_pattern'] = $named_pattern;

        return $this;
    }

    /**
     * Gets physical_panels
     *
     * @return \Jawwws\Gnaww\Model\FoldPanel[]|null
     */
    public function getPhysicalPanels()
    {
        return $this->container['physical_panels'];
    }

    /**
     * Sets physical_panels
     *
     * @param \Jawwws\Gnaww\Model\FoldPanel[]|null $physical_panels physical_panels
     *
     * @return self
     */
    public function setPhysicalPanels($physical_panels)
    {
        if (is_null($physical_panels)) {
            throw new \InvalidArgumentException('non-nullable physical_panels cannot be null');
        }
        $this->container['physical_panels'] = $physical_panels;

        return $this;
    }

    /**
     * Gets resulting_geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingGeometry|null
     */
    public function getResultingGeometry()
    {
        return $this->container['resulting_geometry'];
    }

    /**
     * Sets resulting_geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingGeometry|null $resulting_geometry resulting_geometry
     *
     * @return self
     */
    public function setResultingGeometry($resulting_geometry)
    {
        if (is_null($resulting_geometry)) {
            array_push($this->openAPINullablesSetToNull, 'resulting_geometry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resulting_geometry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resulting_geometry'] = $resulting_geometry;

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
