<?php
/**
 * ManufacturingOperation
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
 * ManufacturingOperation Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingOperation';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category' => 'string',
        'depends_on' => 'string[]',
        'method' => 'string',
        'operation_id' => 'string',
        'parameters' => '\Jawwws\Gnaww\Model\ManufacturingOperationParameters',
        'targets' => '\Jawwws\Gnaww\Model\OperationTarget[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'category' => null,
        'depends_on' => null,
        'method' => null,
        'operation_id' => null,
        'parameters' => null,
        'targets' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'category' => false,
        'depends_on' => false,
        'method' => true,
        'operation_id' => false,
        'parameters' => true,
        'targets' => false
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
        'category' => 'category',
        'depends_on' => 'depends_on',
        'method' => 'method',
        'operation_id' => 'operation_id',
        'parameters' => 'parameters',
        'targets' => 'targets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'depends_on' => 'setDependsOn',
        'method' => 'setMethod',
        'operation_id' => 'setOperationId',
        'parameters' => 'setParameters',
        'targets' => 'setTargets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'depends_on' => 'getDependsOn',
        'method' => 'getMethod',
        'operation_id' => 'getOperationId',
        'parameters' => 'getParameters',
        'targets' => 'getTargets'
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

    public const CATEGORY__PRINT = 'print';
    public const CATEGORY_DECORATE = 'decorate';
    public const CATEGORY_COAT = 'coat';
    public const CATEGORY_LAMINATE = 'laminate';
    public const CATEGORY_EMBOSS = 'emboss';
    public const CATEGORY_DEBOSS = 'deboss';
    public const CATEGORY_FOIL = 'foil';
    public const CATEGORY_SPOT_FINISH = 'spot_finish';
    public const CATEGORY_CUT = 'cut';
    public const CATEGORY_DIE_CUT = 'die_cut';
    public const CATEGORY_LASER_CUT = 'laser_cut';
    public const CATEGORY_DRILL = 'drill';
    public const CATEGORY_PERFORATE = 'perforate';
    public const CATEGORY_CREASE = 'crease';
    public const CATEGORY_FOLD = 'fold';
    public const CATEGORY_STITCH = 'stitch';
    public const CATEGORY_SEW = 'sew';
    public const CATEGORY_BIND = 'bind';
    public const CATEGORY_GLUE = 'glue';
    public const CATEGORY_ATTACH = 'attach';
    public const CATEGORY_ASSEMBLE = 'assemble';
    public const CATEGORY_CURE = 'cure';
    public const CATEGORY_DRY = 'dry';
    public const CATEGORY_INSPECT = 'inspect';
    public const CATEGORY_PACK = 'pack';
    public const CATEGORY_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY__PRINT,
            self::CATEGORY_DECORATE,
            self::CATEGORY_COAT,
            self::CATEGORY_LAMINATE,
            self::CATEGORY_EMBOSS,
            self::CATEGORY_DEBOSS,
            self::CATEGORY_FOIL,
            self::CATEGORY_SPOT_FINISH,
            self::CATEGORY_CUT,
            self::CATEGORY_DIE_CUT,
            self::CATEGORY_LASER_CUT,
            self::CATEGORY_DRILL,
            self::CATEGORY_PERFORATE,
            self::CATEGORY_CREASE,
            self::CATEGORY_FOLD,
            self::CATEGORY_STITCH,
            self::CATEGORY_SEW,
            self::CATEGORY_BIND,
            self::CATEGORY_GLUE,
            self::CATEGORY_ATTACH,
            self::CATEGORY_ASSEMBLE,
            self::CATEGORY_CURE,
            self::CATEGORY_DRY,
            self::CATEGORY_INSPECT,
            self::CATEGORY_PACK,
            self::CATEGORY_OTHER,
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
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('depends_on', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('operation_id', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('targets', $data ?? [], null);
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

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'category', must be one of '%s'",
                $this->container['category'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['operation_id'])) {
            $invalidProperties[] = "invalid value for 'operation_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
        }

        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
        }
        if ((count($this->container['targets']) < 1)) {
            $invalidProperties[] = "invalid value for 'targets', number of items must be greater than or equal to 1.";
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'category', must be one of '%s'",
                    $category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets depends_on
     *
     * @return string[]|null
     */
    public function getDependsOn()
    {
        return $this->container['depends_on'];
    }

    /**
     * Sets depends_on
     *
     * @param string[]|null $depends_on depends_on
     *
     * @return self
     */
    public function setDependsOn($depends_on)
    {
        if (is_null($depends_on)) {
            throw new \InvalidArgumentException('non-nullable depends_on cannot be null');
        }
        $this->container['depends_on'] = $depends_on;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            array_push($this->openAPINullablesSetToNull, 'method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id operation_id
     *
     * @return self
     */
    public function setOperationId($operation_id)
    {
        if (is_null($operation_id)) {
            throw new \InvalidArgumentException('non-nullable operation_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($operation_id)))) {
            throw new \InvalidArgumentException("invalid value for \$operation_id when calling ManufacturingOperation., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingOperationParameters|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingOperationParameters|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        if (is_null($parameters)) {
            array_push($this->openAPINullablesSetToNull, 'parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \Jawwws\Gnaww\Model\OperationTarget[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \Jawwws\Gnaww\Model\OperationTarget[] $targets targets
     *
     * @return self
     */
    public function setTargets($targets)
    {
        if (is_null($targets)) {
            throw new \InvalidArgumentException('non-nullable targets cannot be null');
        }


        if ((count($targets) < 1)) {
            throw new \InvalidArgumentException('invalid length for $targets when calling ManufacturingOperation., number of items must be greater than or equal to 1.');
        }
        $this->container['targets'] = $targets;

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
