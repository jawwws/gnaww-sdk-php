<?php
/**
 * TransformResponse
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
 * TransformResponse Class Doc Comment
 *
 * @category Class
 * @description Response payload for &#x60;POST /v1/transform&#x60;.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class TransformResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TransformResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'confidence' => 'float',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'job' => '\Jawwws\Gnaww\Model\PrintJobSpecification',
        'next_actions' => 'string[]',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'status' => 'string',
        'unresolved_fields' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'confidence' => null,
        'issues' => null,
        'job' => null,
        'next_actions' => null,
        'schema_name' => null,
        'schema_version' => null,
        'status' => null,
        'unresolved_fields' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'confidence' => false,
        'issues' => false,
        'job' => true,
        'next_actions' => false,
        'schema_name' => false,
        'schema_version' => false,
        'status' => false,
        'unresolved_fields' => false
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
        'confidence' => 'confidence',
        'issues' => 'issues',
        'job' => 'job',
        'next_actions' => 'next_actions',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'status' => 'status',
        'unresolved_fields' => 'unresolved_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confidence' => 'setConfidence',
        'issues' => 'setIssues',
        'job' => 'setJob',
        'next_actions' => 'setNextActions',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'unresolved_fields' => 'setUnresolvedFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confidence' => 'getConfidence',
        'issues' => 'getIssues',
        'job' => 'getJob',
        'next_actions' => 'getNextActions',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'unresolved_fields' => 'getUnresolvedFields'
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

    public const SCHEMA_NAME_JAWWWS_TRANSFORM_RESPONSE = 'jawwws.transform_response';
    public const STATUS_MAPPED = 'mapped';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_BLOCKED = 'blocked';
    public const STATUS_FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaNameAllowableValues()
    {
        return [
            self::SCHEMA_NAME_JAWWWS_TRANSFORM_RESPONSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MAPPED,
            self::STATUS_NEEDS_REVIEW,
            self::STATUS_BLOCKED,
            self::STATUS_FAILED,
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
        $this->setIfExists('confidence', $data ?? [], 0.0);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('job', $data ?? [], null);
        $this->setIfExists('next_actions', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'jawwws.transform_response');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('unresolved_fields', $data ?? [], null);
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

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 1.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.0.";
        }

        $allowedValues = $this->getSchemaNameAllowableValues();
        if (!is_null($this->container['schema_name']) && !in_array($this->container['schema_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schema_name', must be one of '%s'",
                $this->container['schema_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets confidence
     *
     * @return float|null
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param float|null $confidence confidence
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }

        if (($confidence > 1.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling TransformResponse., must be smaller than or equal to 1.0.');
        }
        if (($confidence < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling TransformResponse., must be bigger than or equal to 0.0.');
        }

        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return \Jawwws\Gnaww\Model\IssueSet|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \Jawwws\Gnaww\Model\IssueSet|null $issues issues
     *
     * @return self
     */
    public function setIssues($issues)
    {
        if (is_null($issues)) {
            throw new \InvalidArgumentException('non-nullable issues cannot be null');
        }
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets job
     *
     * @return \Jawwws\Gnaww\Model\PrintJobSpecification|null
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param \Jawwws\Gnaww\Model\PrintJobSpecification|null $job job
     *
     * @return self
     */
    public function setJob($job)
    {
        if (is_null($job)) {
            array_push($this->openAPINullablesSetToNull, 'job');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('job', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets next_actions
     *
     * @return string[]|null
     */
    public function getNextActions()
    {
        return $this->container['next_actions'];
    }

    /**
     * Sets next_actions
     *
     * @param string[]|null $next_actions next_actions
     *
     * @return self
     */
    public function setNextActions($next_actions)
    {
        if (is_null($next_actions)) {
            throw new \InvalidArgumentException('non-nullable next_actions cannot be null');
        }
        $this->container['next_actions'] = $next_actions;

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
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets unresolved_fields
     *
     * @return string[]|null
     */
    public function getUnresolvedFields()
    {
        return $this->container['unresolved_fields'];
    }

    /**
     * Sets unresolved_fields
     *
     * @param string[]|null $unresolved_fields unresolved_fields
     *
     * @return self
     */
    public function setUnresolvedFields($unresolved_fields)
    {
        if (is_null($unresolved_fields)) {
            throw new \InvalidArgumentException('non-nullable unresolved_fields cannot be null');
        }
        $this->container['unresolved_fields'] = $unresolved_fields;

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
