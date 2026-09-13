<?php
/**
 * ManufacturingAssembly
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
 * ManufacturingAssembly Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingAssembly implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingAssembly';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'assembly_id' => 'string',
        'input_component_ids' => 'string[]',
        'operation_ids' => 'string[]',
        'output_component_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'assembly_id' => null,
        'input_component_ids' => null,
        'operation_ids' => null,
        'output_component_id' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'assembly_id' => false,
        'input_component_ids' => false,
        'operation_ids' => false,
        'output_component_id' => true
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
        'assembly_id' => 'assembly_id',
        'input_component_ids' => 'input_component_ids',
        'operation_ids' => 'operation_ids',
        'output_component_id' => 'output_component_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assembly_id' => 'setAssemblyId',
        'input_component_ids' => 'setInputComponentIds',
        'operation_ids' => 'setOperationIds',
        'output_component_id' => 'setOutputComponentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assembly_id' => 'getAssemblyId',
        'input_component_ids' => 'getInputComponentIds',
        'operation_ids' => 'getOperationIds',
        'output_component_id' => 'getOutputComponentId'
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
        $this->setIfExists('assembly_id', $data ?? [], null);
        $this->setIfExists('input_component_ids', $data ?? [], null);
        $this->setIfExists('operation_ids', $data ?? [], null);
        $this->setIfExists('output_component_id', $data ?? [], null);
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

        if ($this->container['assembly_id'] === null) {
            $invalidProperties[] = "'assembly_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['assembly_id'])) {
            $invalidProperties[] = "invalid value for 'assembly_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
        }

        if ($this->container['input_component_ids'] === null) {
            $invalidProperties[] = "'input_component_ids' can't be null";
        }
        if ((count($this->container['input_component_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'input_component_ids', number of items must be greater than or equal to 1.";
        }

        if ($this->container['operation_ids'] === null) {
            $invalidProperties[] = "'operation_ids' can't be null";
        }
        if ((count($this->container['operation_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'operation_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['output_component_id']) && !preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['output_component_id'])) {
            $invalidProperties[] = "invalid value for 'output_component_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
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
     * Gets assembly_id
     *
     * @return string
     */
    public function getAssemblyId()
    {
        return $this->container['assembly_id'];
    }

    /**
     * Sets assembly_id
     *
     * @param string $assembly_id assembly_id
     *
     * @return self
     */
    public function setAssemblyId($assembly_id)
    {
        if (is_null($assembly_id)) {
            throw new \InvalidArgumentException('non-nullable assembly_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($assembly_id)))) {
            throw new \InvalidArgumentException("invalid value for \$assembly_id when calling ManufacturingAssembly., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['assembly_id'] = $assembly_id;

        return $this;
    }

    /**
     * Gets input_component_ids
     *
     * @return string[]
     */
    public function getInputComponentIds()
    {
        return $this->container['input_component_ids'];
    }

    /**
     * Sets input_component_ids
     *
     * @param string[] $input_component_ids input_component_ids
     *
     * @return self
     */
    public function setInputComponentIds($input_component_ids)
    {
        if (is_null($input_component_ids)) {
            throw new \InvalidArgumentException('non-nullable input_component_ids cannot be null');
        }


        if ((count($input_component_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $input_component_ids when calling ManufacturingAssembly., number of items must be greater than or equal to 1.');
        }
        $this->container['input_component_ids'] = $input_component_ids;

        return $this;
    }

    /**
     * Gets operation_ids
     *
     * @return string[]
     */
    public function getOperationIds()
    {
        return $this->container['operation_ids'];
    }

    /**
     * Sets operation_ids
     *
     * @param string[] $operation_ids operation_ids
     *
     * @return self
     */
    public function setOperationIds($operation_ids)
    {
        if (is_null($operation_ids)) {
            throw new \InvalidArgumentException('non-nullable operation_ids cannot be null');
        }


        if ((count($operation_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $operation_ids when calling ManufacturingAssembly., number of items must be greater than or equal to 1.');
        }
        $this->container['operation_ids'] = $operation_ids;

        return $this;
    }

    /**
     * Gets output_component_id
     *
     * @return string|null
     */
    public function getOutputComponentId()
    {
        return $this->container['output_component_id'];
    }

    /**
     * Sets output_component_id
     *
     * @param string|null $output_component_id output_component_id
     *
     * @return self
     */
    public function setOutputComponentId($output_component_id)
    {
        if (is_null($output_component_id)) {
            array_push($this->openAPINullablesSetToNull, 'output_component_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('output_component_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($output_component_id) && (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($output_component_id)))) {
            throw new \InvalidArgumentException("invalid value for \$output_component_id when calling ManufacturingAssembly., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['output_component_id'] = $output_component_id;

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
