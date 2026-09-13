<?php
/**
 * PublicControlledProductionDefault
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
 * PublicControlledProductionDefault Class Doc Comment
 *
 * @category Class
 * @description Approved production convention shown separately from explicit source evidence.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicControlledProductionDefault implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicControlledProductionDefault';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'evidence_ids' => 'string[]',
        'fold_geometry' => '\Jawwws\Gnaww\Model\PublicControlledDefaultFoldGeometry',
        'label' => 'string',
        'rule_id' => 'string',
        'rule_version' => 'string',
        'summary' => 'string',
        'target_path' => 'string',
        'truth_state' => 'string',
        'user_evidence' => '\Jawwws\Gnaww\Model\PublicControlledDefaultUserEvidence',
        'verification_key' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'evidence_ids' => null,
        'fold_geometry' => null,
        'label' => null,
        'rule_id' => null,
        'rule_version' => null,
        'summary' => null,
        'target_path' => null,
        'truth_state' => null,
        'user_evidence' => null,
        'verification_key' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'evidence_ids' => false,
        'fold_geometry' => false,
        'label' => false,
        'rule_id' => false,
        'rule_version' => false,
        'summary' => false,
        'target_path' => false,
        'truth_state' => false,
        'user_evidence' => true,
        'verification_key' => false
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
        'evidence_ids' => 'evidence_ids',
        'fold_geometry' => 'fold_geometry',
        'label' => 'label',
        'rule_id' => 'rule_id',
        'rule_version' => 'rule_version',
        'summary' => 'summary',
        'target_path' => 'target_path',
        'truth_state' => 'truth_state',
        'user_evidence' => 'user_evidence',
        'verification_key' => 'verification_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evidence_ids' => 'setEvidenceIds',
        'fold_geometry' => 'setFoldGeometry',
        'label' => 'setLabel',
        'rule_id' => 'setRuleId',
        'rule_version' => 'setRuleVersion',
        'summary' => 'setSummary',
        'target_path' => 'setTargetPath',
        'truth_state' => 'setTruthState',
        'user_evidence' => 'setUserEvidence',
        'verification_key' => 'setVerificationKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evidence_ids' => 'getEvidenceIds',
        'fold_geometry' => 'getFoldGeometry',
        'label' => 'getLabel',
        'rule_id' => 'getRuleId',
        'rule_version' => 'getRuleVersion',
        'summary' => 'getSummary',
        'target_path' => 'getTargetPath',
        'truth_state' => 'getTruthState',
        'user_evidence' => 'getUserEvidence',
        'verification_key' => 'getVerificationKey'
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

    public const TRUTH_STATE_DEFAULTED = 'defaulted';
    public const TRUTH_STATE_CONFIRMED = 'confirmed';
    public const TRUTH_STATE_CHANGED = 'changed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTruthStateAllowableValues()
    {
        return [
            self::TRUTH_STATE_DEFAULTED,
            self::TRUTH_STATE_CONFIRMED,
            self::TRUTH_STATE_CHANGED,
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
        $this->setIfExists('evidence_ids', $data ?? [], null);
        $this->setIfExists('fold_geometry', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('rule_version', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('target_path', $data ?? [], null);
        $this->setIfExists('truth_state', $data ?? [], null);
        $this->setIfExists('user_evidence', $data ?? [], null);
        $this->setIfExists('verification_key', $data ?? [], null);
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

        if ($this->container['evidence_ids'] === null) {
            $invalidProperties[] = "'evidence_ids' can't be null";
        }
        if ((count($this->container['evidence_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'evidence_ids', number of items must be greater than or equal to 1.";
        }

        if ($this->container['fold_geometry'] === null) {
            $invalidProperties[] = "'fold_geometry' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) < 1)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['rule_version'] === null) {
            $invalidProperties[] = "'rule_version' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ((mb_strlen($this->container['summary']) < 1)) {
            $invalidProperties[] = "invalid value for 'summary', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['target_path'] === null) {
            $invalidProperties[] = "'target_path' can't be null";
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

        if ($this->container['verification_key'] === null) {
            $invalidProperties[] = "'verification_key' can't be null";
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
     * Gets evidence_ids
     *
     * @return string[]
     */
    public function getEvidenceIds()
    {
        return $this->container['evidence_ids'];
    }

    /**
     * Sets evidence_ids
     *
     * @param string[] $evidence_ids evidence_ids
     *
     * @return self
     */
    public function setEvidenceIds($evidence_ids)
    {
        if (is_null($evidence_ids)) {
            throw new \InvalidArgumentException('non-nullable evidence_ids cannot be null');
        }


        if ((count($evidence_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $evidence_ids when calling PublicControlledProductionDefault., number of items must be greater than or equal to 1.');
        }
        $this->container['evidence_ids'] = $evidence_ids;

        return $this;
    }

    /**
     * Gets fold_geometry
     *
     * @return \Jawwws\Gnaww\Model\PublicControlledDefaultFoldGeometry
     */
    public function getFoldGeometry()
    {
        return $this->container['fold_geometry'];
    }

    /**
     * Sets fold_geometry
     *
     * @param \Jawwws\Gnaww\Model\PublicControlledDefaultFoldGeometry $fold_geometry fold_geometry
     *
     * @return self
     */
    public function setFoldGeometry($fold_geometry)
    {
        if (is_null($fold_geometry)) {
            throw new \InvalidArgumentException('non-nullable fold_geometry cannot be null');
        }
        $this->container['fold_geometry'] = $fold_geometry;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        if ((mb_strlen($label) < 1)) {
            throw new \InvalidArgumentException('invalid length for $label when calling PublicControlledProductionDefault., must be bigger than or equal to 1.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_version
     *
     * @return string
     */
    public function getRuleVersion()
    {
        return $this->container['rule_version'];
    }

    /**
     * Sets rule_version
     *
     * @param string $rule_version rule_version
     *
     * @return self
     */
    public function setRuleVersion($rule_version)
    {
        if (is_null($rule_version)) {
            throw new \InvalidArgumentException('non-nullable rule_version cannot be null');
        }
        $this->container['rule_version'] = $rule_version;

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
            throw new \InvalidArgumentException('invalid length for $summary when calling PublicControlledProductionDefault., must be bigger than or equal to 1.');
        }

        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets target_path
     *
     * @return string
     */
    public function getTargetPath()
    {
        return $this->container['target_path'];
    }

    /**
     * Sets target_path
     *
     * @param string $target_path target_path
     *
     * @return self
     */
    public function setTargetPath($target_path)
    {
        if (is_null($target_path)) {
            throw new \InvalidArgumentException('non-nullable target_path cannot be null');
        }
        $this->container['target_path'] = $target_path;

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
     * Gets user_evidence
     *
     * @return \Jawwws\Gnaww\Model\PublicControlledDefaultUserEvidence|null
     */
    public function getUserEvidence()
    {
        return $this->container['user_evidence'];
    }

    /**
     * Sets user_evidence
     *
     * @param \Jawwws\Gnaww\Model\PublicControlledDefaultUserEvidence|null $user_evidence user_evidence
     *
     * @return self
     */
    public function setUserEvidence($user_evidence)
    {
        if (is_null($user_evidence)) {
            array_push($this->openAPINullablesSetToNull, 'user_evidence');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_evidence', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_evidence'] = $user_evidence;

        return $this;
    }

    /**
     * Gets verification_key
     *
     * @return string
     */
    public function getVerificationKey()
    {
        return $this->container['verification_key'];
    }

    /**
     * Sets verification_key
     *
     * @param string $verification_key verification_key
     *
     * @return self
     */
    public function setVerificationKey($verification_key)
    {
        if (is_null($verification_key)) {
            throw new \InvalidArgumentException('non-nullable verification_key cannot be null');
        }
        $this->container['verification_key'] = $verification_key;

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
