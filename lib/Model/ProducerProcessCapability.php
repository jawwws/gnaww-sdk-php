<?php
/**
 * ProducerProcessCapability
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
 * ProducerProcessCapability Class Doc Comment
 *
 * @category Class
 * @description A controlled production process supported by the producer.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProducerProcessCapability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProducerProcessCapability';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'process' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'process' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'process' => false
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
        'process' => 'process'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process' => 'setProcess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process' => 'getProcess'
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

    public const PROCESS_DIGITAL_PRINT = 'digital_print';
    public const PROCESS_OFFSET_LITHO = 'offset_litho';
    public const PROCESS_LARGE_FORMAT = 'large_format';
    public const PROCESS_DTG = 'dtg';
    public const PROCESS_DTF = 'dtf';
    public const PROCESS_HTV = 'htv';
    public const PROCESS_EMBROIDERY = 'embroidery';
    public const PROCESS_SCREEN_PRINT = 'screen_print';
    public const PROCESS_SUBLIMATION = 'sublimation';
    public const PROCESS_DIGITAL_TEXTILE_PRINT = 'digital_textile_print';
    public const PROCESS_REACTIVE_DYE_PRINT = 'reactive_dye_print';
    public const PROCESS_PIGMENT_PRINT = 'pigment_print';
    public const PROCESS_SEWING = 'sewing';
    public const PROCESS_HEMMING = 'hemming';
    public const PROCESS_PAD_PRINT = 'pad_print';
    public const PROCESS_UV_PRINT = 'uv_print';
    public const PROCESS_ENGRAVING = 'engraving';
    public const PROCESS_LASER_ENGRAVING = 'laser_engraving';
    public const PROCESS_CUTTING = 'cutting';
    public const PROCESS_FOLDING = 'folding';
    public const PROCESS_BINDING = 'binding';
    public const PROCESS_LAMINATION = 'lamination';
    public const PROCESS_FOILING = 'foiling';
    public const PROCESS_SPOT_UV = 'spot_uv';
    public const PROCESS_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessAllowableValues()
    {
        return [
            self::PROCESS_DIGITAL_PRINT,
            self::PROCESS_OFFSET_LITHO,
            self::PROCESS_LARGE_FORMAT,
            self::PROCESS_DTG,
            self::PROCESS_DTF,
            self::PROCESS_HTV,
            self::PROCESS_EMBROIDERY,
            self::PROCESS_SCREEN_PRINT,
            self::PROCESS_SUBLIMATION,
            self::PROCESS_DIGITAL_TEXTILE_PRINT,
            self::PROCESS_REACTIVE_DYE_PRINT,
            self::PROCESS_PIGMENT_PRINT,
            self::PROCESS_SEWING,
            self::PROCESS_HEMMING,
            self::PROCESS_PAD_PRINT,
            self::PROCESS_UV_PRINT,
            self::PROCESS_ENGRAVING,
            self::PROCESS_LASER_ENGRAVING,
            self::PROCESS_CUTTING,
            self::PROCESS_FOLDING,
            self::PROCESS_BINDING,
            self::PROCESS_LAMINATION,
            self::PROCESS_FOILING,
            self::PROCESS_SPOT_UV,
            self::PROCESS_UNKNOWN,
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
        $this->setIfExists('process', $data ?? [], null);
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

        if ($this->container['process'] === null) {
            $invalidProperties[] = "'process' can't be null";
        }
        $allowedValues = $this->getProcessAllowableValues();
        if (!is_null($this->container['process']) && !in_array($this->container['process'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'process', must be one of '%s'",
                $this->container['process'],
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
     * Gets process
     *
     * @return string
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param string $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        if (is_null($process)) {
            throw new \InvalidArgumentException('non-nullable process cannot be null');
        }
        $allowedValues = $this->getProcessAllowableValues();
        if (!in_array($process, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'process', must be one of '%s'",
                    $process,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['process'] = $process;

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
