<?php
/**
 * PublicJobContextFact
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
 * PublicJobContextFact Class Doc Comment
 *
 * @category Class
 * @description One provenance-aware source fact scoped to a single Job.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicJobContextFact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicJobContextFact';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fact_id' => 'string',
        'key' => 'string',
        'posture' => 'string',
        'provenance' => 'string',
        'requires_confirmation' => 'bool',
        'source_expression' => 'string',
        'value' => '\Jawwws\Gnaww\Model\Value'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'fact_id' => null,
        'key' => null,
        'posture' => null,
        'provenance' => null,
        'requires_confirmation' => null,
        'source_expression' => null,
        'value' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'fact_id' => false,
        'key' => false,
        'posture' => false,
        'provenance' => false,
        'requires_confirmation' => false,
        'source_expression' => true,
        'value' => true
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
        'fact_id' => 'fact_id',
        'key' => 'key',
        'posture' => 'posture',
        'provenance' => 'provenance',
        'requires_confirmation' => 'requires_confirmation',
        'source_expression' => 'source_expression',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fact_id' => 'setFactId',
        'key' => 'setKey',
        'posture' => 'setPosture',
        'provenance' => 'setProvenance',
        'requires_confirmation' => 'setRequiresConfirmation',
        'source_expression' => 'setSourceExpression',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fact_id' => 'getFactId',
        'key' => 'getKey',
        'posture' => 'getPosture',
        'provenance' => 'getProvenance',
        'requires_confirmation' => 'getRequiresConfirmation',
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

    public const POSTURE_EXACT = 'exact';
    public const POSTURE_PREFERENCE = 'preference';
    public const POSTURE_TOLERANCE = 'tolerance';
    public const POSTURE_AMBIGUOUS = 'ambiguous';
    public const PROVENANCE_SUPPLIED = 'supplied';
    public const PROVENANCE_DERIVED = 'derived';
    public const PROVENANCE_CONFIRMED = 'confirmed';
    public const PROVENANCE_CONTROLLED = 'controlled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostureAllowableValues()
    {
        return [
            self::POSTURE_EXACT,
            self::POSTURE_PREFERENCE,
            self::POSTURE_TOLERANCE,
            self::POSTURE_AMBIGUOUS,
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
        $this->setIfExists('fact_id', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('posture', $data ?? [], 'exact');
        $this->setIfExists('provenance', $data ?? [], null);
        $this->setIfExists('requires_confirmation', $data ?? [], false);
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

        if ($this->container['fact_id'] === null) {
            $invalidProperties[] = "'fact_id' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_.-]*$/", $this->container['fact_id'])) {
            $invalidProperties[] = "invalid value for 'fact_id', must be conform to the pattern /^[a-z][a-z0-9_.-]*$/.";
        }

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_.-]*$/", $this->container['key'])) {
            $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^[a-z][a-z0-9_.-]*$/.";
        }

        $allowedValues = $this->getPostureAllowableValues();
        if (!is_null($this->container['posture']) && !in_array($this->container['posture'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'posture', must be one of '%s'",
                $this->container['posture'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets fact_id
     *
     * @return string
     */
    public function getFactId()
    {
        return $this->container['fact_id'];
    }

    /**
     * Sets fact_id
     *
     * @param string $fact_id fact_id
     *
     * @return self
     */
    public function setFactId($fact_id)
    {
        if (is_null($fact_id)) {
            throw new \InvalidArgumentException('non-nullable fact_id cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_.-]*$/", ObjectSerializer::toString($fact_id)))) {
            throw new \InvalidArgumentException("invalid value for \$fact_id when calling PublicJobContextFact., must conform to the pattern /^[a-z][a-z0-9_.-]*$/.");
        }

        $this->container['fact_id'] = $fact_id;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_.-]*$/", ObjectSerializer::toString($key)))) {
            throw new \InvalidArgumentException("invalid value for \$key when calling PublicJobContextFact., must conform to the pattern /^[a-z][a-z0-9_.-]*$/.");
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets posture
     *
     * @return string|null
     */
    public function getPosture()
    {
        return $this->container['posture'];
    }

    /**
     * Sets posture
     *
     * @param string|null $posture posture
     *
     * @return self
     */
    public function setPosture($posture)
    {
        if (is_null($posture)) {
            throw new \InvalidArgumentException('non-nullable posture cannot be null');
        }
        $allowedValues = $this->getPostureAllowableValues();
        if (!in_array($posture, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'posture', must be one of '%s'",
                    $posture,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['posture'] = $posture;

        return $this;
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
     * Gets requires_confirmation
     *
     * @return bool|null
     */
    public function getRequiresConfirmation()
    {
        return $this->container['requires_confirmation'];
    }

    /**
     * Sets requires_confirmation
     *
     * @param bool|null $requires_confirmation requires_confirmation
     *
     * @return self
     */
    public function setRequiresConfirmation($requires_confirmation)
    {
        if (is_null($requires_confirmation)) {
            throw new \InvalidArgumentException('non-nullable requires_confirmation cannot be null');
        }
        $this->container['requires_confirmation'] = $requires_confirmation;

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
     * @return \Jawwws\Gnaww\Model\Value|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Jawwws\Gnaww\Model\Value|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
