<?php
/**
 * MatchRecipeRequest
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
 * MatchRecipeRequest Class Doc Comment
 *
 * @category Class
 * @description Run context supplied when matching one persisted Recipe.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class MatchRecipeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MatchRecipeRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'quantity' => 'int',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'service_requirements' => '\Jawwws\Gnaww\Model\ServiceRequirements',
        'target' => '\Jawwws\Gnaww\Model\PublicMatchTargetRequest',
        'use_requirements' => '\Jawwws\Gnaww\Model\UseRequirement[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'quantity' => null,
        'schema_name' => null,
        'schema_version' => null,
        'service_requirements' => null,
        'target' => null,
        'use_requirements' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'quantity' => false,
        'schema_name' => false,
        'schema_version' => false,
        'service_requirements' => false,
        'target' => false,
        'use_requirements' => false
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
        'quantity' => 'quantity',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'service_requirements' => 'service_requirements',
        'target' => 'target',
        'use_requirements' => 'use_requirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'service_requirements' => 'setServiceRequirements',
        'target' => 'setTarget',
        'use_requirements' => 'setUseRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'service_requirements' => 'getServiceRequirements',
        'target' => 'getTarget',
        'use_requirements' => 'getUseRequirements'
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

    public const SCHEMA_NAME_GNAWW_RECIPE_SPECMATCH_REQUEST = 'gnaww.recipe_specmatch_request';
    public const SCHEMA_VERSION__0_1 = '0.1';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaNameAllowableValues()
    {
        return [
            self::SCHEMA_NAME_GNAWW_RECIPE_SPECMATCH_REQUEST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaVersionAllowableValues()
    {
        return [
            self::SCHEMA_VERSION__0_1,
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
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'gnaww.recipe_specmatch_request');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
        $this->setIfExists('service_requirements', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('use_requirements', $data ?? [], null);
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

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] <= 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than 0.";
        }

        $allowedValues = $this->getSchemaNameAllowableValues();
        if (!is_null($this->container['schema_name']) && !in_array($this->container['schema_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schema_name', must be one of '%s'",
                $this->container['schema_name'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSchemaVersionAllowableValues();
        if (!is_null($this->container['schema_version']) && !in_array($this->container['schema_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schema_version', must be one of '%s'",
                $this->container['schema_version'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
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
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity <= 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling MatchRecipeRequest., must be bigger than 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets schema_name
     *
     * @return string|null
     */
    public function getSchemaName()
    {
        return $this->container['schema_name'];
    }

    /**
     * Sets schema_name
     *
     * @param string|null $schema_name schema_name
     *
     * @return self
     */
    public function setSchemaName($schema_name)
    {
        if (is_null($schema_name)) {
            throw new \InvalidArgumentException('non-nullable schema_name cannot be null');
        }
        $allowedValues = $this->getSchemaNameAllowableValues();
        if (!in_array($schema_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schema_name', must be one of '%s'",
                    $schema_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schema_name'] = $schema_name;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string|null $schema_version schema_version
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        if (is_null($schema_version)) {
            throw new \InvalidArgumentException('non-nullable schema_version cannot be null');
        }
        $allowedValues = $this->getSchemaVersionAllowableValues();
        if (!in_array($schema_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schema_version', must be one of '%s'",
                    $schema_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets service_requirements
     *
     * @return \Jawwws\Gnaww\Model\ServiceRequirements|null
     */
    public function getServiceRequirements()
    {
        return $this->container['service_requirements'];
    }

    /**
     * Sets service_requirements
     *
     * @param \Jawwws\Gnaww\Model\ServiceRequirements|null $service_requirements service_requirements
     *
     * @return self
     */
    public function setServiceRequirements($service_requirements)
    {
        if (is_null($service_requirements)) {
            throw new \InvalidArgumentException('non-nullable service_requirements cannot be null');
        }
        $this->container['service_requirements'] = $service_requirements;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \Jawwws\Gnaww\Model\PublicMatchTargetRequest
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \Jawwws\Gnaww\Model\PublicMatchTargetRequest $target target
     *
     * @return self
     */
    public function setTarget($target)
    {
        if (is_null($target)) {
            throw new \InvalidArgumentException('non-nullable target cannot be null');
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets use_requirements
     *
     * @return \Jawwws\Gnaww\Model\UseRequirement[]|null
     */
    public function getUseRequirements()
    {
        return $this->container['use_requirements'];
    }

    /**
     * Sets use_requirements
     *
     * @param \Jawwws\Gnaww\Model\UseRequirement[]|null $use_requirements use_requirements
     *
     * @return self
     */
    public function setUseRequirements($use_requirements)
    {
        if (is_null($use_requirements)) {
            throw new \InvalidArgumentException('non-nullable use_requirements cannot be null');
        }
        $this->container['use_requirements'] = $use_requirements;

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
