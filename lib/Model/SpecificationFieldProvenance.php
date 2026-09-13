<?php
/**
 * SpecificationFieldProvenance
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
 * SpecificationFieldProvenance Class Doc Comment
 *
 * @category Class
 * @description Safe provenance for one canonical demand field.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class SpecificationFieldProvenance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SpecificationFieldProvenance';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'path' => 'string',
        'provenance' => 'string',
        'source_reference' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'path' => null,
        'provenance' => null,
        'source_reference' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'path' => false,
        'provenance' => false,
        'source_reference' => true
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
        'path' => 'path',
        'provenance' => 'provenance',
        'source_reference' => 'source_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path' => 'setPath',
        'provenance' => 'setProvenance',
        'source_reference' => 'setSourceReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path' => 'getPath',
        'provenance' => 'getProvenance',
        'source_reference' => 'getSourceReference'
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
    public const PROVENANCE_USER_INPUT = 'user_input';
    public const PROVENANCE_USER_OVERRIDE = 'user_override';
    public const PROVENANCE_CATALOGUE_GUIDANCE = 'catalogue_guidance';
    public const PROVENANCE_DETERMINISTIC_TAXONOMY = 'deterministic_taxonomy';

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
            self::PROVENANCE_USER_INPUT,
            self::PROVENANCE_USER_OVERRIDE,
            self::PROVENANCE_CATALOGUE_GUIDANCE,
            self::PROVENANCE_DETERMINISTIC_TAXONOMY,
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
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('provenance', $data ?? [], null);
        $this->setIfExists('source_reference', $data ?? [], null);
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

        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ((mb_strlen($this->container['path']) > 255)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['path']) < 1)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
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

        if (!is_null($this->container['source_reference']) && (mb_strlen($this->container['source_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'source_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['source_reference']) && (mb_strlen($this->container['source_reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'source_reference', the character length must be bigger than or equal to 1.";
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
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        if ((mb_strlen($path) > 255)) {
            throw new \InvalidArgumentException('invalid length for $path when calling SpecificationFieldProvenance., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($path) < 1)) {
            throw new \InvalidArgumentException('invalid length for $path when calling SpecificationFieldProvenance., must be bigger than or equal to 1.');
        }

        $this->container['path'] = $path;

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
     * Gets source_reference
     *
     * @return string|null
     */
    public function getSourceReference()
    {
        return $this->container['source_reference'];
    }

    /**
     * Sets source_reference
     *
     * @param string|null $source_reference source_reference
     *
     * @return self
     */
    public function setSourceReference($source_reference)
    {
        if (is_null($source_reference)) {
            array_push($this->openAPINullablesSetToNull, 'source_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($source_reference) && (mb_strlen($source_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $source_reference when calling SpecificationFieldProvenance., must be smaller than or equal to 255.');
        }
        if (!is_null($source_reference) && (mb_strlen($source_reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $source_reference when calling SpecificationFieldProvenance., must be bigger than or equal to 1.');
        }

        $this->container['source_reference'] = $source_reference;

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
