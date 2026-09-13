<?php
/**
 * PublicInterpretationQuestion
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
 * PublicInterpretationQuestion Class Doc Comment
 *
 * @category Class
 * @description Stable scoped question without exposing private canonical field paths.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicInterpretationQuestion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicInterpretationQuestion';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'current_value' => 'string',
        'input_type' => 'string',
        'options' => '\Jawwws\Gnaww\Model\PublicInterpretationQuestionOption[]',
        'question' => 'string',
        'question_id' => 'string',
        'rationale' => 'string',
        'required' => 'bool',
        'scope' => '\Jawwws\Gnaww\Model\PublicInterpretationScope',
        'source' => 'string',
        'suggested_value' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'current_value' => null,
        'input_type' => null,
        'options' => null,
        'question' => null,
        'question_id' => null,
        'rationale' => null,
        'required' => null,
        'scope' => null,
        'source' => null,
        'suggested_value' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'current_value' => true,
        'input_type' => false,
        'options' => false,
        'question' => false,
        'question_id' => false,
        'rationale' => false,
        'required' => false,
        'scope' => false,
        'source' => false,
        'suggested_value' => true
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
        'current_value' => 'current_value',
        'input_type' => 'input_type',
        'options' => 'options',
        'question' => 'question',
        'question_id' => 'question_id',
        'rationale' => 'rationale',
        'required' => 'required',
        'scope' => 'scope',
        'source' => 'source',
        'suggested_value' => 'suggested_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_value' => 'setCurrentValue',
        'input_type' => 'setInputType',
        'options' => 'setOptions',
        'question' => 'setQuestion',
        'question_id' => 'setQuestionId',
        'rationale' => 'setRationale',
        'required' => 'setRequired',
        'scope' => 'setScope',
        'source' => 'setSource',
        'suggested_value' => 'setSuggestedValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_value' => 'getCurrentValue',
        'input_type' => 'getInputType',
        'options' => 'getOptions',
        'question' => 'getQuestion',
        'question_id' => 'getQuestionId',
        'rationale' => 'getRationale',
        'required' => 'getRequired',
        'scope' => 'getScope',
        'source' => 'getSource',
        'suggested_value' => 'getSuggestedValue'
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

    public const INPUT_TYPE_SINGLE_SELECT = 'single_select';
    public const INPUT_TYPE_TEXT = 'text';
    public const INPUT_TYPE_INTEGER = 'integer';
    public const SOURCE_USE_REQUIREMENT = 'use_requirement';
    public const SOURCE_CANONICAL_FIELD = 'canonical_field';
    public const SOURCE_FULFILMENT_REQUIREMENT = 'fulfilment_requirement';
    public const SOURCE_INTENT = 'intent';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputTypeAllowableValues()
    {
        return [
            self::INPUT_TYPE_SINGLE_SELECT,
            self::INPUT_TYPE_TEXT,
            self::INPUT_TYPE_INTEGER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_USE_REQUIREMENT,
            self::SOURCE_CANONICAL_FIELD,
            self::SOURCE_FULFILMENT_REQUIREMENT,
            self::SOURCE_INTENT,
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
        $this->setIfExists('current_value', $data ?? [], null);
        $this->setIfExists('input_type', $data ?? [], 'single_select');
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('question', $data ?? [], null);
        $this->setIfExists('question_id', $data ?? [], null);
        $this->setIfExists('rationale', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], true);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('suggested_value', $data ?? [], null);
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

        $allowedValues = $this->getInputTypeAllowableValues();
        if (!is_null($this->container['input_type']) && !in_array($this->container['input_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_type', must be one of '%s'",
                $this->container['input_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['question'] === null) {
            $invalidProperties[] = "'question' can't be null";
        }
        if ((mb_strlen($this->container['question']) < 1)) {
            $invalidProperties[] = "invalid value for 'question', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['question_id'] === null) {
            $invalidProperties[] = "'question_id' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_.\\[\\]-]*$/", $this->container['question_id'])) {
            $invalidProperties[] = "invalid value for 'question_id', must be conform to the pattern /^[a-z][a-z0-9_.\\[\\]-]*$/.";
        }

        if ($this->container['rationale'] === null) {
            $invalidProperties[] = "'rationale' can't be null";
        }
        if ((mb_strlen($this->container['rationale']) < 1)) {
            $invalidProperties[] = "invalid value for 'rationale', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
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
     * Gets current_value
     *
     * @return string|null
     */
    public function getCurrentValue()
    {
        return $this->container['current_value'];
    }

    /**
     * Sets current_value
     *
     * @param string|null $current_value current_value
     *
     * @return self
     */
    public function setCurrentValue($current_value)
    {
        if (is_null($current_value)) {
            array_push($this->openAPINullablesSetToNull, 'current_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('current_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['current_value'] = $current_value;

        return $this;
    }

    /**
     * Gets input_type
     *
     * @return string|null
     */
    public function getInputType()
    {
        return $this->container['input_type'];
    }

    /**
     * Sets input_type
     *
     * @param string|null $input_type input_type
     *
     * @return self
     */
    public function setInputType($input_type)
    {
        if (is_null($input_type)) {
            throw new \InvalidArgumentException('non-nullable input_type cannot be null');
        }
        $allowedValues = $this->getInputTypeAllowableValues();
        if (!in_array($input_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input_type', must be one of '%s'",
                    $input_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationQuestionOption[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationQuestionOption[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

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
            throw new \InvalidArgumentException('invalid length for $question when calling PublicInterpretationQuestion., must be bigger than or equal to 1.');
        }

        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets question_id
     *
     * @return string
     */
    public function getQuestionId()
    {
        return $this->container['question_id'];
    }

    /**
     * Sets question_id
     *
     * @param string $question_id question_id
     *
     * @return self
     */
    public function setQuestionId($question_id)
    {
        if (is_null($question_id)) {
            throw new \InvalidArgumentException('non-nullable question_id cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9_.\\[\\]-]*$/", ObjectSerializer::toString($question_id)))) {
            throw new \InvalidArgumentException("invalid value for \$question_id when calling PublicInterpretationQuestion., must conform to the pattern /^[a-z][a-z0-9_.\\[\\]-]*$/.");
        }

        $this->container['question_id'] = $question_id;

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
            throw new \InvalidArgumentException('invalid length for $rationale when calling PublicInterpretationQuestion., must be bigger than or equal to 1.');
        }

        $this->container['rationale'] = $rationale;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required required
     *
     * @return self
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationScope
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationScope $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets suggested_value
     *
     * @return string|null
     */
    public function getSuggestedValue()
    {
        return $this->container['suggested_value'];
    }

    /**
     * Sets suggested_value
     *
     * @param string|null $suggested_value suggested_value
     *
     * @return self
     */
    public function setSuggestedValue($suggested_value)
    {
        if (is_null($suggested_value)) {
            array_push($this->openAPINullablesSetToNull, 'suggested_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('suggested_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['suggested_value'] = $suggested_value;

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
