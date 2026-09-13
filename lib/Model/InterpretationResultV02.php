<?php
/**
 * InterpretationResultV02
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
 * InterpretationResultV02 Class Doc Comment
 *
 * @category Class
 * @description Job-centric public messy-intent interpretation result.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class InterpretationResultV02 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InterpretationResultV02';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'capability_questions' => '\Jawwws\Gnaww\Model\PublicCapabilityQuestion[]',
        'controlled_interpretation' => '\Jawwws\Gnaww\Model\PublicControlledInterpretationState',
        'intent' => '\Jawwws\Gnaww\Model\PublicInterpretationIntent',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'jobs' => '\Jawwws\Gnaww\Model\PublicInterpretationJob[]',
        'next_actions' => 'string[]',
        'questions' => '\Jawwws\Gnaww\Model\PublicInterpretationQuestion[]',
        'recommendations' => '\Jawwws\Gnaww\Model\ProductPackResponse[]',
        'requested_gjs_version' => 'string',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'shared_context' => '\Jawwws\Gnaww\Model\PublicSharedContextFact[]',
        'source' => '\Jawwws\Gnaww\Model\SourceInput',
        'status' => 'string',
        'truth' => '\Jawwws\Gnaww\Model\PublicInterpretationTruthState'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'capability_questions' => null,
        'controlled_interpretation' => null,
        'intent' => null,
        'issues' => null,
        'jobs' => null,
        'next_actions' => null,
        'questions' => null,
        'recommendations' => null,
        'requested_gjs_version' => null,
        'schema_name' => null,
        'schema_version' => null,
        'shared_context' => null,
        'source' => null,
        'status' => null,
        'truth' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'capability_questions' => false,
        'controlled_interpretation' => false,
        'intent' => false,
        'issues' => false,
        'jobs' => false,
        'next_actions' => false,
        'questions' => false,
        'recommendations' => false,
        'requested_gjs_version' => false,
        'schema_name' => false,
        'schema_version' => false,
        'shared_context' => false,
        'source' => false,
        'status' => false,
        'truth' => false
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
        'capability_questions' => 'capability_questions',
        'controlled_interpretation' => 'controlled_interpretation',
        'intent' => 'intent',
        'issues' => 'issues',
        'jobs' => 'jobs',
        'next_actions' => 'next_actions',
        'questions' => 'questions',
        'recommendations' => 'recommendations',
        'requested_gjs_version' => 'requested_gjs_version',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'shared_context' => 'shared_context',
        'source' => 'source',
        'status' => 'status',
        'truth' => 'truth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capability_questions' => 'setCapabilityQuestions',
        'controlled_interpretation' => 'setControlledInterpretation',
        'intent' => 'setIntent',
        'issues' => 'setIssues',
        'jobs' => 'setJobs',
        'next_actions' => 'setNextActions',
        'questions' => 'setQuestions',
        'recommendations' => 'setRecommendations',
        'requested_gjs_version' => 'setRequestedGjsVersion',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'shared_context' => 'setSharedContext',
        'source' => 'setSource',
        'status' => 'setStatus',
        'truth' => 'setTruth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capability_questions' => 'getCapabilityQuestions',
        'controlled_interpretation' => 'getControlledInterpretation',
        'intent' => 'getIntent',
        'issues' => 'getIssues',
        'jobs' => 'getJobs',
        'next_actions' => 'getNextActions',
        'questions' => 'getQuestions',
        'recommendations' => 'getRecommendations',
        'requested_gjs_version' => 'getRequestedGjsVersion',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'shared_context' => 'getSharedContext',
        'source' => 'getSource',
        'status' => 'getStatus',
        'truth' => 'getTruth'
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

    public const REQUESTED_GJS_VERSION__0_3 = '0.3';
    public const REQUESTED_GJS_VERSION__0_4 = '0.4';
    public const SCHEMA_NAME_GNAWW_INTERPRETATION_RESULT = 'gnaww.interpretation_result';
    public const SCHEMA_VERSION__0_2 = '0.2';
    public const STATUS_CANONICAL_READY = 'canonical_ready';
    public const STATUS_REVIEW_REQUIRED = 'review_required';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestedGjsVersionAllowableValues()
    {
        return [
            self::REQUESTED_GJS_VERSION__0_3,
            self::REQUESTED_GJS_VERSION__0_4,
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
            self::SCHEMA_NAME_GNAWW_INTERPRETATION_RESULT,
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
            self::SCHEMA_VERSION__0_2,
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
            self::STATUS_CANONICAL_READY,
            self::STATUS_REVIEW_REQUIRED,
            self::STATUS_NEEDS_REVIEW,
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
        $this->setIfExists('capability_questions', $data ?? [], null);
        $this->setIfExists('controlled_interpretation', $data ?? [], null);
        $this->setIfExists('intent', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('jobs', $data ?? [], null);
        $this->setIfExists('next_actions', $data ?? [], null);
        $this->setIfExists('questions', $data ?? [], null);
        $this->setIfExists('recommendations', $data ?? [], null);
        $this->setIfExists('requested_gjs_version', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'gnaww.interpretation_result');
        $this->setIfExists('schema_version', $data ?? [], '0.2');
        $this->setIfExists('shared_context', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('truth', $data ?? [], null);
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

        if ($this->container['controlled_interpretation'] === null) {
            $invalidProperties[] = "'controlled_interpretation' can't be null";
        }
        if ($this->container['intent'] === null) {
            $invalidProperties[] = "'intent' can't be null";
        }
        if ($this->container['requested_gjs_version'] === null) {
            $invalidProperties[] = "'requested_gjs_version' can't be null";
        }
        $allowedValues = $this->getRequestedGjsVersionAllowableValues();
        if (!is_null($this->container['requested_gjs_version']) && !in_array($this->container['requested_gjs_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requested_gjs_version', must be one of '%s'",
                $this->container['requested_gjs_version'],
                implode("', '", $allowedValues)
            );
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

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * Gets capability_questions
     *
     * @return \Jawwws\Gnaww\Model\PublicCapabilityQuestion[]|null
     */
    public function getCapabilityQuestions()
    {
        return $this->container['capability_questions'];
    }

    /**
     * Sets capability_questions
     *
     * @param \Jawwws\Gnaww\Model\PublicCapabilityQuestion[]|null $capability_questions capability_questions
     *
     * @return self
     */
    public function setCapabilityQuestions($capability_questions)
    {
        if (is_null($capability_questions)) {
            throw new \InvalidArgumentException('non-nullable capability_questions cannot be null');
        }
        $this->container['capability_questions'] = $capability_questions;

        return $this;
    }

    /**
     * Gets controlled_interpretation
     *
     * @return \Jawwws\Gnaww\Model\PublicControlledInterpretationState
     */
    public function getControlledInterpretation()
    {
        return $this->container['controlled_interpretation'];
    }

    /**
     * Sets controlled_interpretation
     *
     * @param \Jawwws\Gnaww\Model\PublicControlledInterpretationState $controlled_interpretation controlled_interpretation
     *
     * @return self
     */
    public function setControlledInterpretation($controlled_interpretation)
    {
        if (is_null($controlled_interpretation)) {
            throw new \InvalidArgumentException('non-nullable controlled_interpretation cannot be null');
        }
        $this->container['controlled_interpretation'] = $controlled_interpretation;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationIntent
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationIntent $intent intent
     *
     * @return self
     */
    public function setIntent($intent)
    {
        if (is_null($intent)) {
            throw new \InvalidArgumentException('non-nullable intent cannot be null');
        }
        $this->container['intent'] = $intent;

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
     * Gets jobs
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationJob[]|null
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationJob[]|null $jobs jobs
     *
     * @return self
     */
    public function setJobs($jobs)
    {
        if (is_null($jobs)) {
            throw new \InvalidArgumentException('non-nullable jobs cannot be null');
        }
        $this->container['jobs'] = $jobs;

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
     * Gets questions
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationQuestion[]|null
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationQuestion[]|null $questions questions
     *
     * @return self
     */
    public function setQuestions($questions)
    {
        if (is_null($questions)) {
            throw new \InvalidArgumentException('non-nullable questions cannot be null');
        }
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * Gets recommendations
     *
     * @return \Jawwws\Gnaww\Model\ProductPackResponse[]|null
     */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
     * Sets recommendations
     *
     * @param \Jawwws\Gnaww\Model\ProductPackResponse[]|null $recommendations recommendations
     *
     * @return self
     */
    public function setRecommendations($recommendations)
    {
        if (is_null($recommendations)) {
            throw new \InvalidArgumentException('non-nullable recommendations cannot be null');
        }
        $this->container['recommendations'] = $recommendations;

        return $this;
    }

    /**
     * Gets requested_gjs_version
     *
     * @return string
     */
    public function getRequestedGjsVersion()
    {
        return $this->container['requested_gjs_version'];
    }

    /**
     * Sets requested_gjs_version
     *
     * @param string $requested_gjs_version requested_gjs_version
     *
     * @return self
     */
    public function setRequestedGjsVersion($requested_gjs_version)
    {
        if (is_null($requested_gjs_version)) {
            throw new \InvalidArgumentException('non-nullable requested_gjs_version cannot be null');
        }
        $allowedValues = $this->getRequestedGjsVersionAllowableValues();
        if (!in_array($requested_gjs_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requested_gjs_version', must be one of '%s'",
                    $requested_gjs_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requested_gjs_version'] = $requested_gjs_version;

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
     * Gets shared_context
     *
     * @return \Jawwws\Gnaww\Model\PublicSharedContextFact[]|null
     */
    public function getSharedContext()
    {
        return $this->container['shared_context'];
    }

    /**
     * Sets shared_context
     *
     * @param \Jawwws\Gnaww\Model\PublicSharedContextFact[]|null $shared_context shared_context
     *
     * @return self
     */
    public function setSharedContext($shared_context)
    {
        if (is_null($shared_context)) {
            throw new \InvalidArgumentException('non-nullable shared_context cannot be null');
        }
        $this->container['shared_context'] = $shared_context;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Jawwws\Gnaww\Model\SourceInput
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Jawwws\Gnaww\Model\SourceInput $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
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
     * Gets truth
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationTruthState|null
     */
    public function getTruth()
    {
        return $this->container['truth'];
    }

    /**
     * Sets truth
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationTruthState|null $truth truth
     *
     * @return self
     */
    public function setTruth($truth)
    {
        if (is_null($truth)) {
            throw new \InvalidArgumentException('non-nullable truth cannot be null');
        }
        $this->container['truth'] = $truth;

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
