<?php
/**
 * ProductPackBenchmarkReference
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
 * ProductPackBenchmarkReference Class Doc Comment
 *
 * @category Class
 * @description Validated benchmark evidence attached by Gnaww.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProductPackBenchmarkReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProductPackBenchmarkReference';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'benchmark_id' => 'string',
        'benchmark_version' => 'string',
        'evidence_notes' => 'string[]',
        'evidence_status' => 'string',
        'matched_signals' => 'string[]',
        'score' => 'int',
        'summary' => 'string',
        'title' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'benchmark_id' => null,
        'benchmark_version' => null,
        'evidence_notes' => null,
        'evidence_status' => null,
        'matched_signals' => null,
        'score' => null,
        'summary' => null,
        'title' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'benchmark_id' => false,
        'benchmark_version' => false,
        'evidence_notes' => false,
        'evidence_status' => false,
        'matched_signals' => false,
        'score' => false,
        'summary' => false,
        'title' => false
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
        'benchmark_id' => 'benchmark_id',
        'benchmark_version' => 'benchmark_version',
        'evidence_notes' => 'evidence_notes',
        'evidence_status' => 'evidence_status',
        'matched_signals' => 'matched_signals',
        'score' => 'score',
        'summary' => 'summary',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benchmark_id' => 'setBenchmarkId',
        'benchmark_version' => 'setBenchmarkVersion',
        'evidence_notes' => 'setEvidenceNotes',
        'evidence_status' => 'setEvidenceStatus',
        'matched_signals' => 'setMatchedSignals',
        'score' => 'setScore',
        'summary' => 'setSummary',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benchmark_id' => 'getBenchmarkId',
        'benchmark_version' => 'getBenchmarkVersion',
        'evidence_notes' => 'getEvidenceNotes',
        'evidence_status' => 'getEvidenceStatus',
        'matched_signals' => 'getMatchedSignals',
        'score' => 'getScore',
        'summary' => 'getSummary',
        'title' => 'getTitle'
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

    public const EVIDENCE_STATUS_CURATED_BASELINE = 'curated_baseline';
    public const EVIDENCE_STATUS_OBSERVED_INTENT = 'observed_intent';
    public const EVIDENCE_STATUS_CONFIRMED_OUTCOME = 'confirmed_outcome';
    public const EVIDENCE_STATUS_EMPIRICAL = 'empirical';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEvidenceStatusAllowableValues()
    {
        return [
            self::EVIDENCE_STATUS_CURATED_BASELINE,
            self::EVIDENCE_STATUS_OBSERVED_INTENT,
            self::EVIDENCE_STATUS_CONFIRMED_OUTCOME,
            self::EVIDENCE_STATUS_EMPIRICAL,
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
        $this->setIfExists('benchmark_id', $data ?? [], null);
        $this->setIfExists('benchmark_version', $data ?? [], null);
        $this->setIfExists('evidence_notes', $data ?? [], null);
        $this->setIfExists('evidence_status', $data ?? [], null);
        $this->setIfExists('matched_signals', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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

        if ($this->container['benchmark_id'] === null) {
            $invalidProperties[] = "'benchmark_id' can't be null";
        }
        if (!preg_match("/^benchmark-[a-z0-9-]+$/", $this->container['benchmark_id'])) {
            $invalidProperties[] = "invalid value for 'benchmark_id', must be conform to the pattern /^benchmark-[a-z0-9-]+$/.";
        }

        if ($this->container['benchmark_version'] === null) {
            $invalidProperties[] = "'benchmark_version' can't be null";
        }
        if (!preg_match("/^[0-9]+\\.[0-9]+$/", $this->container['benchmark_version'])) {
            $invalidProperties[] = "invalid value for 'benchmark_version', must be conform to the pattern /^[0-9]+\\.[0-9]+$/.";
        }

        if ($this->container['evidence_notes'] === null) {
            $invalidProperties[] = "'evidence_notes' can't be null";
        }
        if ((count($this->container['evidence_notes']) < 1)) {
            $invalidProperties[] = "invalid value for 'evidence_notes', number of items must be greater than or equal to 1.";
        }

        if ($this->container['evidence_status'] === null) {
            $invalidProperties[] = "'evidence_status' can't be null";
        }
        $allowedValues = $this->getEvidenceStatusAllowableValues();
        if (!is_null($this->container['evidence_status']) && !in_array($this->container['evidence_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'evidence_status', must be one of '%s'",
                $this->container['evidence_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if (($this->container['score'] < 0)) {
            $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
        }

        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ((mb_strlen($this->container['summary']) < 1)) {
            $invalidProperties[] = "invalid value for 'summary', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
     * Gets benchmark_id
     *
     * @return string
     */
    public function getBenchmarkId()
    {
        return $this->container['benchmark_id'];
    }

    /**
     * Sets benchmark_id
     *
     * @param string $benchmark_id benchmark_id
     *
     * @return self
     */
    public function setBenchmarkId($benchmark_id)
    {
        if (is_null($benchmark_id)) {
            throw new \InvalidArgumentException('non-nullable benchmark_id cannot be null');
        }

        if ((!preg_match("/^benchmark-[a-z0-9-]+$/", ObjectSerializer::toString($benchmark_id)))) {
            throw new \InvalidArgumentException("invalid value for \$benchmark_id when calling ProductPackBenchmarkReference., must conform to the pattern /^benchmark-[a-z0-9-]+$/.");
        }

        $this->container['benchmark_id'] = $benchmark_id;

        return $this;
    }

    /**
     * Gets benchmark_version
     *
     * @return string
     */
    public function getBenchmarkVersion()
    {
        return $this->container['benchmark_version'];
    }

    /**
     * Sets benchmark_version
     *
     * @param string $benchmark_version benchmark_version
     *
     * @return self
     */
    public function setBenchmarkVersion($benchmark_version)
    {
        if (is_null($benchmark_version)) {
            throw new \InvalidArgumentException('non-nullable benchmark_version cannot be null');
        }

        if ((!preg_match("/^[0-9]+\\.[0-9]+$/", ObjectSerializer::toString($benchmark_version)))) {
            throw new \InvalidArgumentException("invalid value for \$benchmark_version when calling ProductPackBenchmarkReference., must conform to the pattern /^[0-9]+\\.[0-9]+$/.");
        }

        $this->container['benchmark_version'] = $benchmark_version;

        return $this;
    }

    /**
     * Gets evidence_notes
     *
     * @return string[]
     */
    public function getEvidenceNotes()
    {
        return $this->container['evidence_notes'];
    }

    /**
     * Sets evidence_notes
     *
     * @param string[] $evidence_notes evidence_notes
     *
     * @return self
     */
    public function setEvidenceNotes($evidence_notes)
    {
        if (is_null($evidence_notes)) {
            throw new \InvalidArgumentException('non-nullable evidence_notes cannot be null');
        }


        if ((count($evidence_notes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $evidence_notes when calling ProductPackBenchmarkReference., number of items must be greater than or equal to 1.');
        }
        $this->container['evidence_notes'] = $evidence_notes;

        return $this;
    }

    /**
     * Gets evidence_status
     *
     * @return string
     */
    public function getEvidenceStatus()
    {
        return $this->container['evidence_status'];
    }

    /**
     * Sets evidence_status
     *
     * @param string $evidence_status evidence_status
     *
     * @return self
     */
    public function setEvidenceStatus($evidence_status)
    {
        if (is_null($evidence_status)) {
            throw new \InvalidArgumentException('non-nullable evidence_status cannot be null');
        }
        $allowedValues = $this->getEvidenceStatusAllowableValues();
        if (!in_array($evidence_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'evidence_status', must be one of '%s'",
                    $evidence_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['evidence_status'] = $evidence_status;

        return $this;
    }

    /**
     * Gets matched_signals
     *
     * @return string[]|null
     */
    public function getMatchedSignals()
    {
        return $this->container['matched_signals'];
    }

    /**
     * Sets matched_signals
     *
     * @param string[]|null $matched_signals matched_signals
     *
     * @return self
     */
    public function setMatchedSignals($matched_signals)
    {
        if (is_null($matched_signals)) {
            throw new \InvalidArgumentException('non-nullable matched_signals cannot be null');
        }
        $this->container['matched_signals'] = $matched_signals;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score score
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            throw new \InvalidArgumentException('non-nullable score cannot be null');
        }

        if (($score < 0)) {
            throw new \InvalidArgumentException('invalid value for $score when calling ProductPackBenchmarkReference., must be bigger than or equal to 0.');
        }

        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }

        if ((mb_strlen($summary) < 1)) {
            throw new \InvalidArgumentException('invalid length for $summary when calling ProductPackBenchmarkReference., must be bigger than or equal to 1.');
        }

        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductPackBenchmarkReference., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
