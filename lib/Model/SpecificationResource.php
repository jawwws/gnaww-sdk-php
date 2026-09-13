<?php
/**
 * SpecificationResource
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
 * SpecificationResource Class Doc Comment
 *
 * @category Class
 * @description Safe immutable public representation of retained canonical demand.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class SpecificationResource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SpecificationResource';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'content_fingerprint_sha256' => 'string',
        'created_at' => '\DateTime',
        'external_references' => '\Jawwws\Gnaww\Model\SpecificationExternalReference[]',
        'field_provenance' => '\Jawwws\Gnaww\Model\SpecificationFieldProvenance[]',
        'gjs' => '\Jawwws\Gnaww\Model\Gjs',
        'gjs_schema_name' => 'string',
        'gjs_schema_version' => 'string',
        'immutable' => 'bool',
        'recipe' => '\Jawwws\Gnaww\Model\SpecificationRecipeReference',
        'resource_version' => 'int',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'specification_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'content_fingerprint_sha256' => null,
        'created_at' => 'date-time',
        'external_references' => null,
        'field_provenance' => null,
        'gjs' => null,
        'gjs_schema_name' => null,
        'gjs_schema_version' => null,
        'immutable' => null,
        'recipe' => null,
        'resource_version' => null,
        'schema_name' => null,
        'schema_version' => null,
        'specification_id' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'content_fingerprint_sha256' => false,
        'created_at' => false,
        'external_references' => false,
        'field_provenance' => false,
        'gjs' => false,
        'gjs_schema_name' => false,
        'gjs_schema_version' => false,
        'immutable' => false,
        'recipe' => false,
        'resource_version' => false,
        'schema_name' => false,
        'schema_version' => false,
        'specification_id' => false
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
        'content_fingerprint_sha256' => 'content_fingerprint_sha256',
        'created_at' => 'created_at',
        'external_references' => 'external_references',
        'field_provenance' => 'field_provenance',
        'gjs' => 'gjs',
        'gjs_schema_name' => 'gjs_schema_name',
        'gjs_schema_version' => 'gjs_schema_version',
        'immutable' => 'immutable',
        'recipe' => 'recipe',
        'resource_version' => 'resource_version',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'specification_id' => 'specification_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_fingerprint_sha256' => 'setContentFingerprintSha256',
        'created_at' => 'setCreatedAt',
        'external_references' => 'setExternalReferences',
        'field_provenance' => 'setFieldProvenance',
        'gjs' => 'setGjs',
        'gjs_schema_name' => 'setGjsSchemaName',
        'gjs_schema_version' => 'setGjsSchemaVersion',
        'immutable' => 'setImmutable',
        'recipe' => 'setRecipe',
        'resource_version' => 'setResourceVersion',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'specification_id' => 'setSpecificationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_fingerprint_sha256' => 'getContentFingerprintSha256',
        'created_at' => 'getCreatedAt',
        'external_references' => 'getExternalReferences',
        'field_provenance' => 'getFieldProvenance',
        'gjs' => 'getGjs',
        'gjs_schema_name' => 'getGjsSchemaName',
        'gjs_schema_version' => 'getGjsSchemaVersion',
        'immutable' => 'getImmutable',
        'recipe' => 'getRecipe',
        'resource_version' => 'getResourceVersion',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'specification_id' => 'getSpecificationId'
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

    public const GJS_SCHEMA_NAME_JAWWWS_PRINT_JOB_SPECIFICATION = 'jawwws.print_job_specification';
    public const IMMUTABLE_TRUE = 'true';
    public const SCHEMA_NAME_GNAWW_SPECIFICATION_RESOURCE = 'gnaww.specification_resource';
    public const SCHEMA_VERSION__0_1 = '0.1';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGjsSchemaNameAllowableValues()
    {
        return [
            self::GJS_SCHEMA_NAME_JAWWWS_PRINT_JOB_SPECIFICATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImmutableAllowableValues()
    {
        return [
            self::IMMUTABLE_TRUE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaNameAllowableValues()
    {
        return [
            self::SCHEMA_NAME_GNAWW_SPECIFICATION_RESOURCE,
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
        $this->setIfExists('content_fingerprint_sha256', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('external_references', $data ?? [], null);
        $this->setIfExists('field_provenance', $data ?? [], null);
        $this->setIfExists('gjs', $data ?? [], null);
        $this->setIfExists('gjs_schema_name', $data ?? [], 'jawwws.print_job_specification');
        $this->setIfExists('gjs_schema_version', $data ?? [], null);
        $this->setIfExists('immutable', $data ?? [], true);
        $this->setIfExists('recipe', $data ?? [], null);
        $this->setIfExists('resource_version', $data ?? [], 1);
        $this->setIfExists('schema_name', $data ?? [], 'gnaww.specification_resource');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
        $this->setIfExists('specification_id', $data ?? [], null);
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

        if ($this->container['content_fingerprint_sha256'] === null) {
            $invalidProperties[] = "'content_fingerprint_sha256' can't be null";
        }
        if (!preg_match("/^[a-f0-9]{64}$/", $this->container['content_fingerprint_sha256'])) {
            $invalidProperties[] = "invalid value for 'content_fingerprint_sha256', must be conform to the pattern /^[a-f0-9]{64}$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['gjs'] === null) {
            $invalidProperties[] = "'gjs' can't be null";
        }
        $allowedValues = $this->getGjsSchemaNameAllowableValues();
        if (!is_null($this->container['gjs_schema_name']) && !in_array($this->container['gjs_schema_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gjs_schema_name', must be one of '%s'",
                $this->container['gjs_schema_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['gjs_schema_version'] === null) {
            $invalidProperties[] = "'gjs_schema_version' can't be null";
        }
        $allowedValues = $this->getImmutableAllowableValues();
        if (!is_null($this->container['immutable']) && !in_array($this->container['immutable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'immutable', must be one of '%s'",
                $this->container['immutable'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recipe'] === null) {
            $invalidProperties[] = "'recipe' can't be null";
        }
        if (!is_null($this->container['resource_version']) && ($this->container['resource_version'] > 1)) {
            $invalidProperties[] = "invalid value for 'resource_version', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['resource_version']) && ($this->container['resource_version'] < 1)) {
            $invalidProperties[] = "invalid value for 'resource_version', must be bigger than or equal to 1.";
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

        if ($this->container['specification_id'] === null) {
            $invalidProperties[] = "'specification_id' can't be null";
        }
        if (!preg_match("/^GNS-[a-f0-9]{32}$/", $this->container['specification_id'])) {
            $invalidProperties[] = "invalid value for 'specification_id', must be conform to the pattern /^GNS-[a-f0-9]{32}$/.";
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
     * Gets content_fingerprint_sha256
     *
     * @return string
     */
    public function getContentFingerprintSha256()
    {
        return $this->container['content_fingerprint_sha256'];
    }

    /**
     * Sets content_fingerprint_sha256
     *
     * @param string $content_fingerprint_sha256 content_fingerprint_sha256
     *
     * @return self
     */
    public function setContentFingerprintSha256($content_fingerprint_sha256)
    {
        if (is_null($content_fingerprint_sha256)) {
            throw new \InvalidArgumentException('non-nullable content_fingerprint_sha256 cannot be null');
        }

        if ((!preg_match("/^[a-f0-9]{64}$/", ObjectSerializer::toString($content_fingerprint_sha256)))) {
            throw new \InvalidArgumentException("invalid value for \$content_fingerprint_sha256 when calling SpecificationResource., must conform to the pattern /^[a-f0-9]{64}$/.");
        }

        $this->container['content_fingerprint_sha256'] = $content_fingerprint_sha256;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
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
     * Gets gjs_schema_name
     *
     * @return string|null
     */
    public function getGjsSchemaName()
    {
        return $this->container['gjs_schema_name'];
    }

    /**
     * Sets gjs_schema_name
     *
     * @param string|null $gjs_schema_name gjs_schema_name
     *
     * @return self
     */
    public function setGjsSchemaName($gjs_schema_name)
    {
        if (is_null($gjs_schema_name)) {
            throw new \InvalidArgumentException('non-nullable gjs_schema_name cannot be null');
        }
        $allowedValues = $this->getGjsSchemaNameAllowableValues();
        if (!in_array($gjs_schema_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gjs_schema_name', must be one of '%s'",
                    $gjs_schema_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gjs_schema_name'] = $gjs_schema_name;

        return $this;
    }

    /**
     * Gets gjs_schema_version
     *
     * @return string
     */
    public function getGjsSchemaVersion()
    {
        return $this->container['gjs_schema_version'];
    }

    /**
     * Sets gjs_schema_version
     *
     * @param string $gjs_schema_version gjs_schema_version
     *
     * @return self
     */
    public function setGjsSchemaVersion($gjs_schema_version)
    {
        if (is_null($gjs_schema_version)) {
            throw new \InvalidArgumentException('non-nullable gjs_schema_version cannot be null');
        }
        $this->container['gjs_schema_version'] = $gjs_schema_version;

        return $this;
    }

    /**
     * Gets immutable
     *
     * @return bool|null
     */
    public function getImmutable()
    {
        return $this->container['immutable'];
    }

    /**
     * Sets immutable
     *
     * @param bool|null $immutable immutable
     *
     * @return self
     */
    public function setImmutable($immutable)
    {
        if (is_null($immutable)) {
            throw new \InvalidArgumentException('non-nullable immutable cannot be null');
        }
        $allowedValues = $this->getImmutableAllowableValues();
        if (!in_array($immutable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'immutable', must be one of '%s'",
                    $immutable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['immutable'] = $immutable;

        return $this;
    }

    /**
     * Gets recipe
     *
     * @return \Jawwws\Gnaww\Model\SpecificationRecipeReference
     */
    public function getRecipe()
    {
        return $this->container['recipe'];
    }

    /**
     * Sets recipe
     *
     * @param \Jawwws\Gnaww\Model\SpecificationRecipeReference $recipe recipe
     *
     * @return self
     */
    public function setRecipe($recipe)
    {
        if (is_null($recipe)) {
            throw new \InvalidArgumentException('non-nullable recipe cannot be null');
        }
        $this->container['recipe'] = $recipe;

        return $this;
    }

    /**
     * Gets resource_version
     *
     * @return int|null
     */
    public function getResourceVersion()
    {
        return $this->container['resource_version'];
    }

    /**
     * Sets resource_version
     *
     * @param int|null $resource_version resource_version
     *
     * @return self
     */
    public function setResourceVersion($resource_version)
    {
        if (is_null($resource_version)) {
            throw new \InvalidArgumentException('non-nullable resource_version cannot be null');
        }

        if (($resource_version > 1)) {
            throw new \InvalidArgumentException('invalid value for $resource_version when calling SpecificationResource., must be smaller than or equal to 1.');
        }
        if (($resource_version < 1)) {
            throw new \InvalidArgumentException('invalid value for $resource_version when calling SpecificationResource., must be bigger than or equal to 1.');
        }

        $this->container['resource_version'] = $resource_version;

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
     * Gets specification_id
     *
     * @return string
     */
    public function getSpecificationId()
    {
        return $this->container['specification_id'];
    }

    /**
     * Sets specification_id
     *
     * @param string $specification_id specification_id
     *
     * @return self
     */
    public function setSpecificationId($specification_id)
    {
        if (is_null($specification_id)) {
            throw new \InvalidArgumentException('non-nullable specification_id cannot be null');
        }

        if ((!preg_match("/^GNS-[a-f0-9]{32}$/", ObjectSerializer::toString($specification_id)))) {
            throw new \InvalidArgumentException("invalid value for \$specification_id when calling SpecificationResource., must conform to the pattern /^GNS-[a-f0-9]{32}$/.");
        }

        $this->container['specification_id'] = $specification_id;

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
