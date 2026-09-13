<?php
/**
 * CreateSpecificationRequest
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
 * CreateSpecificationRequest Class Doc Comment
 *
 * @category Class
 * @description Explicitly retain one completed canonical Gnaww Job Specification.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSpecificationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateSpecificationRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'external_references' => '\Jawwws\Gnaww\Model\SpecificationExternalReference[]',
        'field_provenance' => '\Jawwws\Gnaww\Model\SpecificationFieldProvenance[]',
        'gjs' => '\Jawwws\Gnaww\Model\Gjs',
        'idempotency_key' => 'string',
        'schema_name' => 'string',
        'schema_version' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'external_references' => null,
        'field_provenance' => null,
        'gjs' => null,
        'idempotency_key' => null,
        'schema_name' => null,
        'schema_version' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'external_references' => false,
        'field_provenance' => false,
        'gjs' => false,
        'idempotency_key' => true,
        'schema_name' => false,
        'schema_version' => false
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
        'external_references' => 'external_references',
        'field_provenance' => 'field_provenance',
        'gjs' => 'gjs',
        'idempotency_key' => 'idempotency_key',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_references' => 'setExternalReferences',
        'field_provenance' => 'setFieldProvenance',
        'gjs' => 'setGjs',
        'idempotency_key' => 'setIdempotencyKey',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_references' => 'getExternalReferences',
        'field_provenance' => 'getFieldProvenance',
        'gjs' => 'getGjs',
        'idempotency_key' => 'getIdempotencyKey',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion'
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

    public const SCHEMA_NAME_GNAWW_SPECIFICATION_CREATE_REQUEST = 'gnaww.specification_create_request';
    public const SCHEMA_VERSION__0_1 = '0.1';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaNameAllowableValues()
    {
        return [
            self::SCHEMA_NAME_GNAWW_SPECIFICATION_CREATE_REQUEST,
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
        $this->setIfExists('external_references', $data ?? [], null);
        $this->setIfExists('field_provenance', $data ?? [], null);
        $this->setIfExists('gjs', $data ?? [], null);
        $this->setIfExists('idempotency_key', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'gnaww.specification_create_request');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
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

        if (!is_null($this->container['external_references']) && (count($this->container['external_references']) > 20)) {
            $invalidProperties[] = "invalid value for 'external_references', number of items must be less than or equal to 20.";
        }

        if (!is_null($this->container['field_provenance']) && (count($this->container['field_provenance']) > 200)) {
            $invalidProperties[] = "invalid value for 'field_provenance', number of items must be less than or equal to 200.";
        }

        if ($this->container['gjs'] === null) {
            $invalidProperties[] = "'gjs' can't be null";
        }
        if (!is_null($this->container['idempotency_key']) && (mb_strlen($this->container['idempotency_key']) > 200)) {
            $invalidProperties[] = "invalid value for 'idempotency_key', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['idempotency_key']) && (mb_strlen($this->container['idempotency_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'idempotency_key', the character length must be bigger than or equal to 1.";
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
     * Gets external_references
     *
     * @return \Jawwws\Gnaww\Model\SpecificationExternalReference[]|null
     */
    public function getExternalReferences()
    {
        return $this->container['external_references'];
    }

    /**
     * Sets external_references
     *
     * @param \Jawwws\Gnaww\Model\SpecificationExternalReference[]|null $external_references external_references
     *
     * @return self
     */
    public function setExternalReferences($external_references)
    {
        if (is_null($external_references)) {
            throw new \InvalidArgumentException('non-nullable external_references cannot be null');
        }

        if ((count($external_references) > 20)) {
            throw new \InvalidArgumentException('invalid value for $external_references when calling CreateSpecificationRequest., number of items must be less than or equal to 20.');
        }
        $this->container['external_references'] = $external_references;

        return $this;
    }

    /**
     * Gets field_provenance
     *
     * @return \Jawwws\Gnaww\Model\SpecificationFieldProvenance[]|null
     */
    public function getFieldProvenance()
    {
        return $this->container['field_provenance'];
    }

    /**
     * Sets field_provenance
     *
     * @param \Jawwws\Gnaww\Model\SpecificationFieldProvenance[]|null $field_provenance field_provenance
     *
     * @return self
     */
    public function setFieldProvenance($field_provenance)
    {
        if (is_null($field_provenance)) {
            throw new \InvalidArgumentException('non-nullable field_provenance cannot be null');
        }

        if ((count($field_provenance) > 200)) {
            throw new \InvalidArgumentException('invalid value for $field_provenance when calling CreateSpecificationRequest., number of items must be less than or equal to 200.');
        }
        $this->container['field_provenance'] = $field_provenance;

        return $this;
    }

    /**
     * Gets gjs
     *
     * @return \Jawwws\Gnaww\Model\Gjs
     */
    public function getGjs()
    {
        return $this->container['gjs'];
    }

    /**
     * Sets gjs
     *
     * @param \Jawwws\Gnaww\Model\Gjs $gjs gjs
     *
     * @return self
     */
    public function setGjs($gjs)
    {
        if (is_null($gjs)) {
            throw new \InvalidArgumentException('non-nullable gjs cannot be null');
        }
        $this->container['gjs'] = $gjs;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string|null
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string|null $idempotency_key idempotency_key
     *
     * @return self
     */
    public function setIdempotencyKey($idempotency_key)
    {
        if (is_null($idempotency_key)) {
            array_push($this->openAPINullablesSetToNull, 'idempotency_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('idempotency_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($idempotency_key) && (mb_strlen($idempotency_key) > 200)) {
            throw new \InvalidArgumentException('invalid length for $idempotency_key when calling CreateSpecificationRequest., must be smaller than or equal to 200.');
        }
        if (!is_null($idempotency_key) && (mb_strlen($idempotency_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $idempotency_key when calling CreateSpecificationRequest., must be bigger than or equal to 1.');
        }

        $this->container['idempotency_key'] = $idempotency_key;

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
