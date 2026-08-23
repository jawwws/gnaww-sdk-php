<?php
/**
 * PublicClarificationQuestion
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
 * PublicClarificationQuestion Class Doc Comment
 *
 * @category Class
 * @description One Gnaww-owned question needed to progress buyer demand.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicClarificationQuestion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicClarificationQuestion';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'current_value' => 'string',
        'field_path' => 'string',
        'input_type' => 'string',
        'key' => 'string',
        'options' => '\Jawwws\Gnaww\Model\PublicClarificationOption[]',
        'question' => 'string',
        'rationale' => 'string',
        'required' => 'bool',
        'source' => 'string'
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
        'field_path' => null,
        'input_type' => null,
        'key' => null,
        'options' => null,
        'question' => null,
        'rationale' => null,
        'required' => null,
        'source' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'current_value' => true,
        'field_path' => false,
        'input_type' => false,
        'key' => false,
        'options' => false,
        'question' => false,
        'rationale' => false,
        'required' => false,
        'source' => false
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
        'field_path' => 'field_path',
        'input_type' => 'input_type',
        'key' => 'key',
        'options' => 'options',
        'question' => 'question',
        'rationale' => 'rationale',
        'required' => 'required',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_value' => 'setCurrentValue',
        'field_path' => 'setFieldPath',
        'input_type' => 'setInputType',
        'key' => 'setKey',
        'options' => 'setOptions',
        'question' => 'setQuestion',
        'rationale' => 'setRationale',
        'required' => 'setRequired',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_value' => 'getCurrentValue',
        'field_path' => 'getFieldPath',
        'input_type' => 'getInputType',
        'key' => 'getKey',
        'options' => 'getOptions',
        'question' => 'getQuestion',
        'rationale' => 'getRationale',
        'required' => 'getRequired',
        'source' => 'getSource'
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
    public const REQUIRED_TRUE = 'true';
    public const SOURCE_USE_REQUIREMENT = 'use_requirement';
    public const SOURCE_CANONICAL_FIELD = 'canonical_field';
    public const SOURCE_FULFILMENT_REQUIREMENT = 'fulfilment_requirement';

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
    public function getRequiredAllowableValues()
    {
        return [
            self::REQUIRED_TRUE,
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
        $this->setIfExists('field_path', $data ?? [], null);
        $this->setIfExists('input_type', $data ?? [], 'single_select');
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('question', $data ?? [], null);
        $this->setIfExists('rationale', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], true);
        $this->setIfExists('source', $data ?? [], null);
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

        if ($this->container['field_path'] === null) {
            $invalidProperties[] = "'field_path' can't be null";
        }
        if ((mb_strlen($this->container['field_path']) < 1)) {
            $invalidProperties[] = "invalid value for 'field_path', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getInputTypeAllowableValues();
        if (!is_null($this->container['input_type']) && !in_array($this->container['input_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_type', must be one of '%s'",
                $this->container['input_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9_.\\[\\]]*$/", $this->container['key'])) {
            $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^[a-z][a-z0-9_.\\[\\]]*$/.";
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

        $allowedValues = $this->getRequiredAllowableValues();
        if (!is_null($this->container['required']) && !in_array($this->container['required'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'required', must be one of '%s'",
                $this->container['required'],
                implode("', '", $allowedValues)
            );
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
     * Gets field_path
     *
     * @return string
     */
    public function getFieldPath()
    {
        return $this->container['field_path'];
    }

    /**
     * Sets field_path
     *
     * @param string $field_path field_path
     *
     * @return self
     */
    public function setFieldPath($field_path)
    {
        if (is_null($field_path)) {
            throw new \InvalidArgumentException('non-nullable field_path cannot be null');
        }

        if ((mb_strlen($field_path) < 1)) {
            throw new \InvalidArgumentException('invalid length for $field_path when calling PublicClarificationQuestion., must be bigger than or equal to 1.');
        }

        $this->container['field_path'] = $field_path;

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

        if ((!preg_match("/^[a-z][a-z0-9_.\\[\\]]*$/", ObjectSerializer::toString($key)))) {
            throw new \InvalidArgumentException("invalid value for \$key when calling PublicClarificationQuestion., must conform to the pattern /^[a-z][a-z0-9_.\\[\\]]*$/.");
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Jawwws\Gnaww\Model\PublicClarificationOption[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Jawwws\Gnaww\Model\PublicClarificationOption[]|null $options options
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
            throw new \InvalidArgumentException('invalid length for $question when calling PublicClarificationQuestion., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $rationale when calling PublicClarificationQuestion., must be bigger than or equal to 1.');
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
        $allowedValues = $this->getRequiredAllowableValues();
        if (!in_array($required, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'required', must be one of '%s'",
                    $required,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['required'] = $required;

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
