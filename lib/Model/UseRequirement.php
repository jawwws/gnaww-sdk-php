<?php
/**
 * UseRequirement
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
 * UseRequirement Class Doc Comment
 *
 * @category Class
 * @description Confirmed production-relevant use intent carried by GJS v0.4.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class UseRequirement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UseRequirement';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'provenance' => 'string',
        'requirement_key' => 'string',
        'source_expression' => 'string',
        'value' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'provenance' => null,
        'requirement_key' => null,
        'source_expression' => null,
        'value' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'provenance' => false,
        'requirement_key' => false,
        'source_expression' => true,
        'value' => false
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
        'provenance' => 'provenance',
        'requirement_key' => 'requirement_key',
        'source_expression' => 'source_expression',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provenance' => 'setProvenance',
        'requirement_key' => 'setRequirementKey',
        'source_expression' => 'setSourceExpression',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provenance' => 'getProvenance',
        'requirement_key' => 'getRequirementKey',
        'source_expression' => 'getSourceExpression',
        'value' => 'getValue'
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

    public const PROVENANCE_SUPPLIED = 'supplied';
    public const PROVENANCE_CONFIRMED_REVIEW = 'confirmed_review';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProvenanceAllowableValues()
    {
        return [
            self::PROVENANCE_SUPPLIED,
            self::PROVENANCE_CONFIRMED_REVIEW,
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
        $this->setIfExists('provenance', $data ?? [], null);
        $this->setIfExists('requirement_key', $data ?? [], null);
        $this->setIfExists('source_expression', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['provenance'] === null) {
            $invalidProperties[] = "'provenance' can't be null";
        }
        $allowedValues = $this->getProvenanceAllowableValues();
        if (!is_null($this->container['provenance']) && !in_array($this->container['provenance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'provenance', must be one of '%s'",
                $this->container['provenance'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['requirement_key'] === null) {
            $invalidProperties[] = "'requirement_key' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_]*$/", $this->container['requirement_key'])) {
            $invalidProperties[] = "invalid value for 'requirement_key', must be conform to the pattern /^[a-z][a-z0-9_]*$/.";
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((mb_strlen($this->container['value']) < 1)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
     * Gets provenance
     *
     * @return string
     */
    public function getProvenance()
    {
        return $this->container['provenance'];
    }

    /**
     * Sets provenance
     *
     * @param string $provenance provenance
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
     * Gets requirement_key
     *
     * @return string
     */
    public function getRequirementKey()
    {
        return $this->container['requirement_key'];
    }

    /**
     * Sets requirement_key
     *
     * @param string $requirement_key requirement_key
     *
     * @return self
     */
    public function setRequirementKey($requirement_key)
    {
        if (is_null($requirement_key)) {
            throw new \InvalidArgumentException('non-nullable requirement_key cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_]*$/", ObjectSerializer::toString($requirement_key)))) {
            throw new \InvalidArgumentException("invalid value for \$requirement_key when calling UseRequirement., must conform to the pattern /^[a-z][a-z0-9_]*$/.");
        }

        $this->container['requirement_key'] = $requirement_key;

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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        if ((mb_strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling UseRequirement., must be bigger than or equal to 1.');
        }

        $this->container['value'] = $value;

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
