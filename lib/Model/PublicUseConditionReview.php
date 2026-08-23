<?php
/**
 * PublicUseConditionReview
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
 * PublicUseConditionReview Class Doc Comment
 *
 * @category Class
 * @description One controlled product-use question or grounded semantic proposal.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicUseConditionReview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicUseConditionReview';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allowed_values' => 'string[]',
        'condition_key' => 'string',
        'proposed_value' => 'string',
        'question' => 'string',
        'rationale' => 'string',
        'requires_confirmation' => 'bool',
        'source_expression' => 'string',
        'truth_state' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'allowed_values' => null,
        'condition_key' => null,
        'proposed_value' => null,
        'question' => null,
        'rationale' => null,
        'requires_confirmation' => null,
        'source_expression' => null,
        'truth_state' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'allowed_values' => false,
        'condition_key' => false,
        'proposed_value' => true,
        'question' => false,
        'rationale' => false,
        'requires_confirmation' => false,
        'source_expression' => true,
        'truth_state' => false
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
        'allowed_values' => 'allowed_values',
        'condition_key' => 'condition_key',
        'proposed_value' => 'proposed_value',
        'question' => 'question',
        'rationale' => 'rationale',
        'requires_confirmation' => 'requires_confirmation',
        'source_expression' => 'source_expression',
        'truth_state' => 'truth_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_values' => 'setAllowedValues',
        'condition_key' => 'setConditionKey',
        'proposed_value' => 'setProposedValue',
        'question' => 'setQuestion',
        'rationale' => 'setRationale',
        'requires_confirmation' => 'setRequiresConfirmation',
        'source_expression' => 'setSourceExpression',
        'truth_state' => 'setTruthState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_values' => 'getAllowedValues',
        'condition_key' => 'getConditionKey',
        'proposed_value' => 'getProposedValue',
        'question' => 'getQuestion',
        'rationale' => 'getRationale',
        'requires_confirmation' => 'getRequiresConfirmation',
        'source_expression' => 'getSourceExpression',
        'truth_state' => 'getTruthState'
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

    public const REQUIRES_CONFIRMATION_TRUE = 'true';
    public const TRUTH_STATE_SEMANTICALLY_PROPOSED = 'semantically_proposed';
    public const TRUTH_STATE_UNRESOLVED = 'unresolved';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequiresConfirmationAllowableValues()
    {
        return [
            self::REQUIRES_CONFIRMATION_TRUE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTruthStateAllowableValues()
    {
        return [
            self::TRUTH_STATE_SEMANTICALLY_PROPOSED,
            self::TRUTH_STATE_UNRESOLVED,
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
        $this->setIfExists('allowed_values', $data ?? [], null);
        $this->setIfExists('condition_key', $data ?? [], null);
        $this->setIfExists('proposed_value', $data ?? [], null);
        $this->setIfExists('question', $data ?? [], null);
        $this->setIfExists('rationale', $data ?? [], null);
        $this->setIfExists('requires_confirmation', $data ?? [], true);
        $this->setIfExists('source_expression', $data ?? [], null);
        $this->setIfExists('truth_state', $data ?? [], null);
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

        if ($this->container['allowed_values'] === null) {
            $invalidProperties[] = "'allowed_values' can't be null";
        }
        if ((count($this->container['allowed_values']) < 1)) {
            $invalidProperties[] = "invalid value for 'allowed_values', number of items must be greater than or equal to 1.";
        }

        if ($this->container['condition_key'] === null) {
            $invalidProperties[] = "'condition_key' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_]*$/", $this->container['condition_key'])) {
            $invalidProperties[] = "invalid value for 'condition_key', must be conform to the pattern /^[a-z][a-z0-9_]*$/.";
        }

        if ($this->container['question'] === null) {
            $invalidProperties[] = "'question' can't be null";
        }
        if ((mb_strlen($this->container['question']) < 1)) {
            $invalidProperties[] = "invalid value for 'question', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rationale'] === null) {
            $invalidProperties[] = "'rationale' can't be null";
        }
        if ((mb_strlen($this->container['rationale']) < 1)) {
            $invalidProperties[] = "invalid value for 'rationale', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getRequiresConfirmationAllowableValues();
        if (!is_null($this->container['requires_confirmation']) && !in_array($this->container['requires_confirmation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requires_confirmation', must be one of '%s'",
                $this->container['requires_confirmation'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['truth_state'] === null) {
            $invalidProperties[] = "'truth_state' can't be null";
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!is_null($this->container['truth_state']) && !in_array($this->container['truth_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'truth_state', must be one of '%s'",
                $this->container['truth_state'],
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
     * Gets allowed_values
     *
     * @return string[]
     */
    public function getAllowedValues()
    {
        return $this->container['allowed_values'];
    }

    /**
     * Sets allowed_values
     *
     * @param string[] $allowed_values allowed_values
     *
     * @return self
     */
    public function setAllowedValues($allowed_values)
    {
        if (is_null($allowed_values)) {
            throw new \InvalidArgumentException('non-nullable allowed_values cannot be null');
        }


        if ((count($allowed_values) < 1)) {
            throw new \InvalidArgumentException('invalid length for $allowed_values when calling PublicUseConditionReview., number of items must be greater than or equal to 1.');
        }
        $this->container['allowed_values'] = $allowed_values;

        return $this;
    }

    /**
     * Gets condition_key
     *
     * @return string
     */
    public function getConditionKey()
    {
        return $this->container['condition_key'];
    }

    /**
     * Sets condition_key
     *
     * @param string $condition_key condition_key
     *
     * @return self
     */
    public function setConditionKey($condition_key)
    {
        if (is_null($condition_key)) {
            throw new \InvalidArgumentException('non-nullable condition_key cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_]*$/", ObjectSerializer::toString($condition_key)))) {
            throw new \InvalidArgumentException("invalid value for \$condition_key when calling PublicUseConditionReview., must conform to the pattern /^[a-z][a-z0-9_]*$/.");
        }

        $this->container['condition_key'] = $condition_key;

        return $this;
    }

    /**
     * Gets proposed_value
     *
     * @return string|null
     */
    public function getProposedValue()
    {
        return $this->container['proposed_value'];
    }

    /**
     * Sets proposed_value
     *
     * @param string|null $proposed_value proposed_value
     *
     * @return self
     */
    public function setProposedValue($proposed_value)
    {
        if (is_null($proposed_value)) {
            array_push($this->openAPINullablesSetToNull, 'proposed_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proposed_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proposed_value'] = $proposed_value;

        return $this;
    }

    /**
     * Gets question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     *
     * @param string $question question
     *
     * @return self
     */
    public function setQuestion($question)
    {
        if (is_null($question)) {
            throw new \InvalidArgumentException('non-nullable question cannot be null');
        }

        if ((mb_strlen($question) < 1)) {
            throw new \InvalidArgumentException('invalid length for $question when calling PublicUseConditionReview., must be bigger than or equal to 1.');
        }

        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets rationale
     *
     * @return string
     */
    public function getRationale()
    {
        return $this->container['rationale'];
    }

    /**
     * Sets rationale
     *
     * @param string $rationale rationale
     *
     * @return self
     */
    public function setRationale($rationale)
    {
        if (is_null($rationale)) {
            throw new \InvalidArgumentException('non-nullable rationale cannot be null');
        }

        if ((mb_strlen($rationale) < 1)) {
            throw new \InvalidArgumentException('invalid length for $rationale when calling PublicUseConditionReview., must be bigger than or equal to 1.');
        }

        $this->container['rationale'] = $rationale;

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
        $allowedValues = $this->getRequiresConfirmationAllowableValues();
        if (!in_array($requires_confirmation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requires_confirmation', must be one of '%s'",
                    $requires_confirmation,
                    implode("', '", $allowedValues)
                )
            );
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
     * Gets truth_state
     *
     * @return string
     */
    public function getTruthState()
    {
        return $this->container['truth_state'];
    }

    /**
     * Sets truth_state
     *
     * @param string $truth_state truth_state
     *
     * @return self
     */
    public function setTruthState($truth_state)
    {
        if (is_null($truth_state)) {
            throw new \InvalidArgumentException('non-nullable truth_state cannot be null');
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!in_array($truth_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'truth_state', must be one of '%s'",
                    $truth_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['truth_state'] = $truth_state;

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
