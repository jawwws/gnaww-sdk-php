<?php
/**
 * TurnaroundCapability
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
 * TurnaroundCapability Class Doc Comment
 *
 * @category Class
 * @description Producer turnaround range with explicit basis and provenance.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class TurnaroundCapability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TurnaroundCapability';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'basis' => 'string',
        'evidence' => '\Jawwws\Gnaww\Model\CapabilityEvidence',
        'maximum_working_days' => 'int',
        'minimum_working_days' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'basis' => null,
        'evidence' => null,
        'maximum_working_days' => null,
        'minimum_working_days' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'basis' => false,
        'evidence' => false,
        'maximum_working_days' => true,
        'minimum_working_days' => true
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
        'basis' => 'basis',
        'evidence' => 'evidence',
        'maximum_working_days' => 'maximum_working_days',
        'minimum_working_days' => 'minimum_working_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basis' => 'setBasis',
        'evidence' => 'setEvidence',
        'maximum_working_days' => 'setMaximumWorkingDays',
        'minimum_working_days' => 'setMinimumWorkingDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basis' => 'getBasis',
        'evidence' => 'getEvidence',
        'maximum_working_days' => 'getMaximumWorkingDays',
        'minimum_working_days' => 'getMinimumWorkingDays'
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

    public const BASIS_PRODUCTION_ONLY = 'production_only';
    public const BASIS_PRODUCTION_AND_DISPATCH = 'production_and_dispatch';
    public const BASIS_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBasisAllowableValues()
    {
        return [
            self::BASIS_PRODUCTION_ONLY,
            self::BASIS_PRODUCTION_AND_DISPATCH,
            self::BASIS_UNKNOWN,
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
        $this->setIfExists('basis', $data ?? [], 'unknown');
        $this->setIfExists('evidence', $data ?? [], null);
        $this->setIfExists('maximum_working_days', $data ?? [], null);
        $this->setIfExists('minimum_working_days', $data ?? [], null);
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

        $allowedValues = $this->getBasisAllowableValues();
        if (!is_null($this->container['basis']) && !in_array($this->container['basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'basis', must be one of '%s'",
                $this->container['basis'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['maximum_working_days']) && ($this->container['maximum_working_days'] <= 0)) {
            $invalidProperties[] = "invalid value for 'maximum_working_days', must be bigger than 0.";
        }

        if (!is_null($this->container['minimum_working_days']) && ($this->container['minimum_working_days'] <= 0)) {
            $invalidProperties[] = "invalid value for 'minimum_working_days', must be bigger than 0.";
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
     * Gets basis
     *
     * @return string|null
     */
    public function getBasis()
    {
        return $this->container['basis'];
    }

    /**
     * Sets basis
     *
     * @param string|null $basis basis
     *
     * @return self
     */
    public function setBasis($basis)
    {
        if (is_null($basis)) {
            throw new \InvalidArgumentException('non-nullable basis cannot be null');
        }
        $allowedValues = $this->getBasisAllowableValues();
        if (!in_array($basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'basis', must be one of '%s'",
                    $basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['basis'] = $basis;

        return $this;
    }

    /**
     * Gets evidence
     *
     * @return \Jawwws\Gnaww\Model\CapabilityEvidence|null
     */
    public function getEvidence()
    {
        return $this->container['evidence'];
    }

    /**
     * Sets evidence
     *
     * @param \Jawwws\Gnaww\Model\CapabilityEvidence|null $evidence evidence
     *
     * @return self
     */
    public function setEvidence($evidence)
    {
        if (is_null($evidence)) {
            throw new \InvalidArgumentException('non-nullable evidence cannot be null');
        }
        $this->container['evidence'] = $evidence;

        return $this;
    }

    /**
     * Gets maximum_working_days
     *
     * @return int|null
     */
    public function getMaximumWorkingDays()
    {
        return $this->container['maximum_working_days'];
    }

    /**
     * Sets maximum_working_days
     *
     * @param int|null $maximum_working_days maximum_working_days
     *
     * @return self
     */
    public function setMaximumWorkingDays($maximum_working_days)
    {
        if (is_null($maximum_working_days)) {
            array_push($this->openAPINullablesSetToNull, 'maximum_working_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maximum_working_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($maximum_working_days) && ($maximum_working_days <= 0)) {
            throw new \InvalidArgumentException('invalid value for $maximum_working_days when calling TurnaroundCapability., must be bigger than 0.');
        }

        $this->container['maximum_working_days'] = $maximum_working_days;

        return $this;
    }

    /**
     * Gets minimum_working_days
     *
     * @return int|null
     */
    public function getMinimumWorkingDays()
    {
        return $this->container['minimum_working_days'];
    }

    /**
     * Sets minimum_working_days
     *
     * @param int|null $minimum_working_days minimum_working_days
     *
     * @return self
     */
    public function setMinimumWorkingDays($minimum_working_days)
    {
        if (is_null($minimum_working_days)) {
            array_push($this->openAPINullablesSetToNull, 'minimum_working_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minimum_working_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($minimum_working_days) && ($minimum_working_days <= 0)) {
            throw new \InvalidArgumentException('invalid value for $minimum_working_days when calling TurnaroundCapability., must be bigger than 0.');
        }

        $this->container['minimum_working_days'] = $minimum_working_days;

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
