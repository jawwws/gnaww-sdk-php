<?php
/**
 * SpecMatchResult
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
 * SpecMatchResult Class Doc Comment
 *
 * @category Class
 * @description Result of matching a canonical job against producer capabilities.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class SpecMatchResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SpecMatchResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'confidence' => 'float',
        'differences' => '\Jawwws\Gnaww\Model\MatchDifference[]',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'match_reasons' => 'string[]',
        'match_score' => 'float',
        'physical_requirements' => '\Jawwws\Gnaww\Model\PhysicalRequirementDecision[]',
        'product' => '\Jawwws\Gnaww\Model\ProducerProductReference',
        'status' => 'string'
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
        'differences' => null,
        'issues' => null,
        'match_reasons' => null,
        'match_score' => null,
        'physical_requirements' => null,
        'product' => null,
        'status' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'confidence' => false,
        'differences' => false,
        'issues' => false,
        'match_reasons' => false,
        'match_score' => false,
        'physical_requirements' => false,
        'product' => true,
        'status' => false
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
        'differences' => 'differences',
        'issues' => 'issues',
        'match_reasons' => 'match_reasons',
        'match_score' => 'match_score',
        'physical_requirements' => 'physical_requirements',
        'product' => 'product',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confidence' => 'setConfidence',
        'differences' => 'setDifferences',
        'issues' => 'setIssues',
        'match_reasons' => 'setMatchReasons',
        'match_score' => 'setMatchScore',
        'physical_requirements' => 'setPhysicalRequirements',
        'product' => 'setProduct',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confidence' => 'getConfidence',
        'differences' => 'getDifferences',
        'issues' => 'getIssues',
        'match_reasons' => 'getMatchReasons',
        'match_score' => 'getMatchScore',
        'physical_requirements' => 'getPhysicalRequirements',
        'product' => 'getProduct',
        'status' => 'getStatus'
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

    public const STATUS_MATCHED = 'matched';
    public const STATUS_MATCHED_WITH_WARNINGS = 'matched_with_warnings';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_BLOCKED = 'blocked';
    public const STATUS_FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MATCHED,
            self::STATUS_MATCHED_WITH_WARNINGS,
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
        $this->setIfExists('differences', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('match_reasons', $data ?? [], null);
        $this->setIfExists('match_score', $data ?? [], 0.0);
        $this->setIfExists('physical_requirements', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['match_score']) && ($this->container['match_score'] > 1.0)) {
            $invalidProperties[] = "invalid value for 'match_score', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['match_score']) && ($this->container['match_score'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'match_score', must be bigger than or equal to 0.0.";
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
            throw new \InvalidArgumentException('invalid value for $confidence when calling SpecMatchResult., must be smaller than or equal to 1.0.');
        }
        if (($confidence < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling SpecMatchResult., must be bigger than or equal to 0.0.');
        }

        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets differences
     *
     * @return \Jawwws\Gnaww\Model\MatchDifference[]|null
     */
    public function getDifferences()
    {
        return $this->container['differences'];
    }

    /**
     * Sets differences
     *
     * @param \Jawwws\Gnaww\Model\MatchDifference[]|null $differences differences
     *
     * @return self
     */
    public function setDifferences($differences)
    {
        if (is_null($differences)) {
            throw new \InvalidArgumentException('non-nullable differences cannot be null');
        }
        $this->container['differences'] = $differences;

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
     * Gets match_reasons
     *
     * @return string[]|null
     */
    public function getMatchReasons()
    {
        return $this->container['match_reasons'];
    }

    /**
     * Sets match_reasons
     *
     * @param string[]|null $match_reasons match_reasons
     *
     * @return self
     */
    public function setMatchReasons($match_reasons)
    {
        if (is_null($match_reasons)) {
            throw new \InvalidArgumentException('non-nullable match_reasons cannot be null');
        }
        $this->container['match_reasons'] = $match_reasons;

        return $this;
    }

    /**
     * Gets match_score
     *
     * @return float|null
     */
    public function getMatchScore()
    {
        return $this->container['match_score'];
    }

    /**
     * Sets match_score
     *
     * @param float|null $match_score match_score
     *
     * @return self
     */
    public function setMatchScore($match_score)
    {
        if (is_null($match_score)) {
            throw new \InvalidArgumentException('non-nullable match_score cannot be null');
        }

        if (($match_score > 1.0)) {
            throw new \InvalidArgumentException('invalid value for $match_score when calling SpecMatchResult., must be smaller than or equal to 1.0.');
        }
        if (($match_score < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $match_score when calling SpecMatchResult., must be bigger than or equal to 0.0.');
        }

        $this->container['match_score'] = $match_score;

        return $this;
    }

    /**
     * Gets physical_requirements
     *
     * @return \Jawwws\Gnaww\Model\PhysicalRequirementDecision[]|null
     */
    public function getPhysicalRequirements()
    {
        return $this->container['physical_requirements'];
    }

    /**
     * Sets physical_requirements
     *
     * @param \Jawwws\Gnaww\Model\PhysicalRequirementDecision[]|null $physical_requirements physical_requirements
     *
     * @return self
     */
    public function setPhysicalRequirements($physical_requirements)
    {
        if (is_null($physical_requirements)) {
            throw new \InvalidArgumentException('non-nullable physical_requirements cannot be null');
        }
        $this->container['physical_requirements'] = $physical_requirements;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Jawwws\Gnaww\Model\ProducerProductReference|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Jawwws\Gnaww\Model\ProducerProductReference|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            array_push($this->openAPINullablesSetToNull, 'product');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product'] = $product;

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
