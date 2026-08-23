<?php
/**
 * PublicProducerUniverseCandidate
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
 * PublicProducerUniverseCandidate Class Doc Comment
 *
 * @category Class
 * @description Safe ranked producer result with explicit capability truth.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicProducerUniverseCandidate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicProducerUniverseCandidate';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fulfilment' => '\Jawwws\Gnaww\Model\FulfilmentMatchResult',
        'is_live_supplier' => 'bool',
        'match' => '\Jawwws\Gnaww\Model\SpecMatchResult',
        'producer_id' => 'string',
        'producer_name' => 'string',
        'producer_profile_id' => 'string',
        'producer_profile_schema_version' => 'string',
        'rank' => 'int',
        'source' => 'string',
        'status' => 'string',
        'truth_state' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'fulfilment' => null,
        'is_live_supplier' => null,
        'match' => null,
        'producer_id' => null,
        'producer_name' => null,
        'producer_profile_id' => null,
        'producer_profile_schema_version' => null,
        'rank' => null,
        'source' => null,
        'status' => null,
        'truth_state' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'fulfilment' => false,
        'is_live_supplier' => false,
        'match' => false,
        'producer_id' => false,
        'producer_name' => false,
        'producer_profile_id' => false,
        'producer_profile_schema_version' => false,
        'rank' => false,
        'source' => false,
        'status' => false,
        'truth_state' => false
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
        'fulfilment' => 'fulfilment',
        'is_live_supplier' => 'is_live_supplier',
        'match' => 'match',
        'producer_id' => 'producer_id',
        'producer_name' => 'producer_name',
        'producer_profile_id' => 'producer_profile_id',
        'producer_profile_schema_version' => 'producer_profile_schema_version',
        'rank' => 'rank',
        'source' => 'source',
        'status' => 'status',
        'truth_state' => 'truth_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfilment' => 'setFulfilment',
        'is_live_supplier' => 'setIsLiveSupplier',
        'match' => 'setMatch',
        'producer_id' => 'setProducerId',
        'producer_name' => 'setProducerName',
        'producer_profile_id' => 'setProducerProfileId',
        'producer_profile_schema_version' => 'setProducerProfileSchemaVersion',
        'rank' => 'setRank',
        'source' => 'setSource',
        'status' => 'setStatus',
        'truth_state' => 'setTruthState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfilment' => 'getFulfilment',
        'is_live_supplier' => 'getIsLiveSupplier',
        'match' => 'getMatch',
        'producer_id' => 'getProducerId',
        'producer_name' => 'getProducerName',
        'producer_profile_id' => 'getProducerProfileId',
        'producer_profile_schema_version' => 'getProducerProfileSchemaVersion',
        'rank' => 'getRank',
        'source' => 'getSource',
        'status' => 'getStatus',
        'truth_state' => 'getTruthState'
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

    public const SOURCE_PUBLISHED_PROFILE = 'published_profile';
    public const SOURCE_DEMO_FIXTURE = 'demo_fixture';
    public const STATUS_CAPABLE = 'capable';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_BLOCKED = 'blocked';
    public const TRUTH_STATE_PUBLISHED_CAPABILITY = 'published_capability';
    public const TRUTH_STATE_FIXTURE_BACKED = 'fixture_backed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_PUBLISHED_PROFILE,
            self::SOURCE_DEMO_FIXTURE,
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
            self::STATUS_CAPABLE,
            self::STATUS_NEEDS_REVIEW,
            self::STATUS_BLOCKED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTruthStateAllowableValues()
    {
        return [
            self::TRUTH_STATE_PUBLISHED_CAPABILITY,
            self::TRUTH_STATE_FIXTURE_BACKED,
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
        $this->setIfExists('fulfilment', $data ?? [], null);
        $this->setIfExists('is_live_supplier', $data ?? [], null);
        $this->setIfExists('match', $data ?? [], null);
        $this->setIfExists('producer_id', $data ?? [], null);
        $this->setIfExists('producer_name', $data ?? [], null);
        $this->setIfExists('producer_profile_id', $data ?? [], null);
        $this->setIfExists('producer_profile_schema_version', $data ?? [], null);
        $this->setIfExists('rank', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('truth_state', $data ?? [], null);
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

        if ($this->container['fulfilment'] === null) {
            $invalidProperties[] = "'fulfilment' can't be null";
        }
        if ($this->container['is_live_supplier'] === null) {
            $invalidProperties[] = "'is_live_supplier' can't be null";
        }
        if ($this->container['match'] === null) {
            $invalidProperties[] = "'match' can't be null";
        }
        if ($this->container['producer_id'] === null) {
            $invalidProperties[] = "'producer_id' can't be null";
        }
        if ((mb_strlen($this->container['producer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_name'] === null) {
            $invalidProperties[] = "'producer_name' can't be null";
        }
        if ((mb_strlen($this->container['producer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_profile_id'] === null) {
            $invalidProperties[] = "'producer_profile_id' can't be null";
        }
        if ((mb_strlen($this->container['producer_profile_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_profile_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['producer_profile_schema_version'] === null) {
            $invalidProperties[] = "'producer_profile_schema_version' can't be null";
        }
        if ((mb_strlen($this->container['producer_profile_schema_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'producer_profile_schema_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if (($this->container['rank'] < 1)) {
            $invalidProperties[] = "invalid value for 'rank', must be bigger than or equal to 1.";
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

        if ($this->container['truth_state'] === null) {
            $invalidProperties[] = "'truth_state' can't be null";
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!is_null($this->container['truth_state']) && !in_array($this->container['truth_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'truth_state', must be one of '%s'",
                $this->container['truth_state'],
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
     * Gets fulfilment
     *
     * @return \Jawwws\Gnaww\Model\FulfilmentMatchResult
     */
    public function getFulfilment()
    {
        return $this->container['fulfilment'];
    }

    /**
     * Sets fulfilment
     *
     * @param \Jawwws\Gnaww\Model\FulfilmentMatchResult $fulfilment fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment)
    {
        if (is_null($fulfilment)) {
            throw new \InvalidArgumentException('non-nullable fulfilment cannot be null');
        }
        $this->container['fulfilment'] = $fulfilment;

        return $this;
    }

    /**
     * Gets is_live_supplier
     *
     * @return bool
     */
    public function getIsLiveSupplier()
    {
        return $this->container['is_live_supplier'];
    }

    /**
     * Sets is_live_supplier
     *
     * @param bool $is_live_supplier is_live_supplier
     *
     * @return self
     */
    public function setIsLiveSupplier($is_live_supplier)
    {
        if (is_null($is_live_supplier)) {
            throw new \InvalidArgumentException('non-nullable is_live_supplier cannot be null');
        }
        $this->container['is_live_supplier'] = $is_live_supplier;

        return $this;
    }

    /**
     * Gets match
     *
     * @return \Jawwws\Gnaww\Model\SpecMatchResult
     */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
     * Sets match
     *
     * @param \Jawwws\Gnaww\Model\SpecMatchResult $match match
     *
     * @return self
     */
    public function setMatch($match)
    {
        if (is_null($match)) {
            throw new \InvalidArgumentException('non-nullable match cannot be null');
        }
        $this->container['match'] = $match;

        return $this;
    }

    /**
     * Gets producer_id
     *
     * @return string
     */
    public function getProducerId()
    {
        return $this->container['producer_id'];
    }

    /**
     * Sets producer_id
     *
     * @param string $producer_id producer_id
     *
     * @return self
     */
    public function setProducerId($producer_id)
    {
        if (is_null($producer_id)) {
            throw new \InvalidArgumentException('non-nullable producer_id cannot be null');
        }

        if ((mb_strlen($producer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_id when calling PublicProducerUniverseCandidate., must be bigger than or equal to 1.');
        }

        $this->container['producer_id'] = $producer_id;

        return $this;
    }

    /**
     * Gets producer_name
     *
     * @return string
     */
    public function getProducerName()
    {
        return $this->container['producer_name'];
    }

    /**
     * Sets producer_name
     *
     * @param string $producer_name producer_name
     *
     * @return self
     */
    public function setProducerName($producer_name)
    {
        if (is_null($producer_name)) {
            throw new \InvalidArgumentException('non-nullable producer_name cannot be null');
        }

        if ((mb_strlen($producer_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_name when calling PublicProducerUniverseCandidate., must be bigger than or equal to 1.');
        }

        $this->container['producer_name'] = $producer_name;

        return $this;
    }

    /**
     * Gets producer_profile_id
     *
     * @return string
     */
    public function getProducerProfileId()
    {
        return $this->container['producer_profile_id'];
    }

    /**
     * Sets producer_profile_id
     *
     * @param string $producer_profile_id producer_profile_id
     *
     * @return self
     */
    public function setProducerProfileId($producer_profile_id)
    {
        if (is_null($producer_profile_id)) {
            throw new \InvalidArgumentException('non-nullable producer_profile_id cannot be null');
        }

        if ((mb_strlen($producer_profile_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_profile_id when calling PublicProducerUniverseCandidate., must be bigger than or equal to 1.');
        }

        $this->container['producer_profile_id'] = $producer_profile_id;

        return $this;
    }

    /**
     * Gets producer_profile_schema_version
     *
     * @return string
     */
    public function getProducerProfileSchemaVersion()
    {
        return $this->container['producer_profile_schema_version'];
    }

    /**
     * Sets producer_profile_schema_version
     *
     * @param string $producer_profile_schema_version producer_profile_schema_version
     *
     * @return self
     */
    public function setProducerProfileSchemaVersion($producer_profile_schema_version)
    {
        if (is_null($producer_profile_schema_version)) {
            throw new \InvalidArgumentException('non-nullable producer_profile_schema_version cannot be null');
        }

        if ((mb_strlen($producer_profile_schema_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $producer_profile_schema_version when calling PublicProducerUniverseCandidate., must be bigger than or equal to 1.');
        }

        $this->container['producer_profile_schema_version'] = $producer_profile_schema_version;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank rank
     *
     * @return self
     */
    public function setRank($rank)
    {
        if (is_null($rank)) {
            throw new \InvalidArgumentException('non-nullable rank cannot be null');
        }

        if (($rank < 1)) {
            throw new \InvalidArgumentException('invalid value for $rank when calling PublicProducerUniverseCandidate., must be bigger than or equal to 1.');
        }

        $this->container['rank'] = $rank;

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
     * Gets truth_state
     *
     * @return string
     */
    public function getTruthState()
    {
        return $this->container['truth_state'];
    }

    /**
     * Sets truth_state
     *
     * @param string $truth_state truth_state
     *
     * @return self
     */
    public function setTruthState($truth_state)
    {
        if (is_null($truth_state)) {
            throw new \InvalidArgumentException('non-nullable truth_state cannot be null');
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!in_array($truth_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'truth_state', must be one of '%s'",
                    $truth_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['truth_state'] = $truth_state;

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
