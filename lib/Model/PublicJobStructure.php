<?php
/**
 * PublicJobStructure
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
 * PublicJobStructure Class Doc Comment
 *
 * @category Class
 * @description A semantic Variant, Component or Operation kept within one Job.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicJobStructure implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicJobStructure';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'kind' => 'string',
        'label' => 'string',
        'provenance' => 'string',
        'source_expression' => 'string',
        'structure_id' => 'string',
        'values' => 'string[]'
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
        'label' => null,
        'provenance' => null,
        'source_expression' => null,
        'structure_id' => null,
        'values' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'kind' => false,
        'label' => false,
        'provenance' => false,
        'source_expression' => true,
        'structure_id' => false,
        'values' => false
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
        'label' => 'label',
        'provenance' => 'provenance',
        'source_expression' => 'source_expression',
        'structure_id' => 'structure_id',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kind' => 'setKind',
        'label' => 'setLabel',
        'provenance' => 'setProvenance',
        'source_expression' => 'setSourceExpression',
        'structure_id' => 'setStructureId',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kind' => 'getKind',
        'label' => 'getLabel',
        'provenance' => 'getProvenance',
        'source_expression' => 'getSourceExpression',
        'structure_id' => 'getStructureId',
        'values' => 'getValues'
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

    public const KIND_VARIANT = 'variant';
    public const KIND_COMPONENT = 'component';
    public const KIND_OPERATION = 'operation';
    public const PROVENANCE_SUPPLIED = 'supplied';
    public const PROVENANCE_DERIVED = 'derived';
    public const PROVENANCE_CONFIRMED = 'confirmed';
    public const PROVENANCE_CONTROLLED = 'controlled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_VARIANT,
            self::KIND_COMPONENT,
            self::KIND_OPERATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProvenanceAllowableValues()
    {
        return [
            self::PROVENANCE_SUPPLIED,
            self::PROVENANCE_DERIVED,
            self::PROVENANCE_CONFIRMED,
            self::PROVENANCE_CONTROLLED,
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
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('provenance', $data ?? [], 'supplied');
        $this->setIfExists('source_expression', $data ?? [], null);
        $this->setIfExists('structure_id', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
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

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) < 1)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getProvenanceAllowableValues();
        if (!is_null($this->container['provenance']) && !in_array($this->container['provenance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'provenance', must be one of '%s'",
                $this->container['provenance'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_.-]*$/", $this->container['structure_id'])) {
            $invalidProperties[] = "invalid value for 'structure_id', must be conform to the pattern /^[a-z][a-z0-9_.-]*$/.";
        }

        if (!is_null($this->container['values']) && (count($this->container['values']) > 20)) {
            $invalidProperties[] = "invalid value for 'values', number of items must be less than or equal to 20.";
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
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        if ((mb_strlen($label) < 1)) {
            throw new \InvalidArgumentException('invalid length for $label when calling PublicJobStructure., must be bigger than or equal to 1.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets provenance
     *
     * @return string|null
     */
    public function getProvenance()
    {
        return $this->container['provenance'];
    }

    /**
     * Sets provenance
     *
     * @param string|null $provenance provenance
     *
     * @return self
     */
    public function setProvenance($provenance)
    {
        if (is_null($provenance)) {
            throw new \InvalidArgumentException('non-nullable provenance cannot be null');
        }
        $allowedValues = $this->getProvenanceAllowableValues();
        if (!in_array($provenance, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'provenance', must be one of '%s'",
                    $provenance,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['provenance'] = $provenance;

        return $this;
    }

    /**
     * Gets source_expression
     *
     * @return string|null
     */
    public function getSourceExpression()
    {
        return $this->container['source_expression'];
    }

    /**
     * Sets source_expression
     *
     * @param string|null $source_expression source_expression
     *
     * @return self
     */
    public function setSourceExpression($source_expression)
    {
        if (is_null($source_expression)) {
            array_push($this->openAPINullablesSetToNull, 'source_expression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_expression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_expression'] = $source_expression;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return string
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param string $structure_id structure_id
     *
     * @return self
     */
    public function setStructureId($structure_id)
    {
        if (is_null($structure_id)) {
            throw new \InvalidArgumentException('non-nullable structure_id cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_.-]*$/", ObjectSerializer::toString($structure_id)))) {
            throw new \InvalidArgumentException("invalid value for \$structure_id when calling PublicJobStructure., must conform to the pattern /^[a-z][a-z0-9_.-]*$/.");
        }

        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }

        if ((count($values) > 20)) {
            throw new \InvalidArgumentException('invalid value for $values when calling PublicJobStructure., number of items must be less than or equal to 20.');
        }
        $this->container['values'] = $values;

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
