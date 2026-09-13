<?php
/**
 * PublicInterpretationTruthState
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
 * PublicInterpretationTruthState Class Doc Comment
 *
 * @category Class
 * @description Side-effect and live-truth flags for interpretation only.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicInterpretationTruthState implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicInterpretationTruthState';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'availability_checked' => 'bool',
        'live_pricing_performed' => 'bool',
        'order_created' => 'bool',
        'persistence_performed' => 'bool',
        'producer_acceptance_performed' => 'bool',
        'producer_selection_performed' => 'bool',
        'specmatch_performed' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'availability_checked' => null,
        'live_pricing_performed' => null,
        'order_created' => null,
        'persistence_performed' => null,
        'producer_acceptance_performed' => null,
        'producer_selection_performed' => null,
        'specmatch_performed' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'availability_checked' => false,
        'live_pricing_performed' => false,
        'order_created' => false,
        'persistence_performed' => false,
        'producer_acceptance_performed' => false,
        'producer_selection_performed' => false,
        'specmatch_performed' => false
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
        'availability_checked' => 'availability_checked',
        'live_pricing_performed' => 'live_pricing_performed',
        'order_created' => 'order_created',
        'persistence_performed' => 'persistence_performed',
        'producer_acceptance_performed' => 'producer_acceptance_performed',
        'producer_selection_performed' => 'producer_selection_performed',
        'specmatch_performed' => 'specmatch_performed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_checked' => 'setAvailabilityChecked',
        'live_pricing_performed' => 'setLivePricingPerformed',
        'order_created' => 'setOrderCreated',
        'persistence_performed' => 'setPersistencePerformed',
        'producer_acceptance_performed' => 'setProducerAcceptancePerformed',
        'producer_selection_performed' => 'setProducerSelectionPerformed',
        'specmatch_performed' => 'setSpecmatchPerformed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_checked' => 'getAvailabilityChecked',
        'live_pricing_performed' => 'getLivePricingPerformed',
        'order_created' => 'getOrderCreated',
        'persistence_performed' => 'getPersistencePerformed',
        'producer_acceptance_performed' => 'getProducerAcceptancePerformed',
        'producer_selection_performed' => 'getProducerSelectionPerformed',
        'specmatch_performed' => 'getSpecmatchPerformed'
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

    public const AVAILABILITY_CHECKED_FALSE = 'false';
    public const LIVE_PRICING_PERFORMED_FALSE = 'false';
    public const ORDER_CREATED_FALSE = 'false';
    public const PERSISTENCE_PERFORMED_FALSE = 'false';
    public const PRODUCER_ACCEPTANCE_PERFORMED_FALSE = 'false';
    public const PRODUCER_SELECTION_PERFORMED_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityCheckedAllowableValues()
    {
        return [
            self::AVAILABILITY_CHECKED_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLivePricingPerformedAllowableValues()
    {
        return [
            self::LIVE_PRICING_PERFORMED_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderCreatedAllowableValues()
    {
        return [
            self::ORDER_CREATED_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPersistencePerformedAllowableValues()
    {
        return [
            self::PERSISTENCE_PERFORMED_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProducerAcceptancePerformedAllowableValues()
    {
        return [
            self::PRODUCER_ACCEPTANCE_PERFORMED_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProducerSelectionPerformedAllowableValues()
    {
        return [
            self::PRODUCER_SELECTION_PERFORMED_FALSE,
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
        $this->setIfExists('availability_checked', $data ?? [], false);
        $this->setIfExists('live_pricing_performed', $data ?? [], false);
        $this->setIfExists('order_created', $data ?? [], false);
        $this->setIfExists('persistence_performed', $data ?? [], false);
        $this->setIfExists('producer_acceptance_performed', $data ?? [], false);
        $this->setIfExists('producer_selection_performed', $data ?? [], false);
        $this->setIfExists('specmatch_performed', $data ?? [], false);
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

        $allowedValues = $this->getAvailabilityCheckedAllowableValues();
        if (!is_null($this->container['availability_checked']) && !in_array($this->container['availability_checked'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability_checked', must be one of '%s'",
                $this->container['availability_checked'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLivePricingPerformedAllowableValues();
        if (!is_null($this->container['live_pricing_performed']) && !in_array($this->container['live_pricing_performed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'live_pricing_performed', must be one of '%s'",
                $this->container['live_pricing_performed'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderCreatedAllowableValues();
        if (!is_null($this->container['order_created']) && !in_array($this->container['order_created'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_created', must be one of '%s'",
                $this->container['order_created'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPersistencePerformedAllowableValues();
        if (!is_null($this->container['persistence_performed']) && !in_array($this->container['persistence_performed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'persistence_performed', must be one of '%s'",
                $this->container['persistence_performed'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProducerAcceptancePerformedAllowableValues();
        if (!is_null($this->container['producer_acceptance_performed']) && !in_array($this->container['producer_acceptance_performed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'producer_acceptance_performed', must be one of '%s'",
                $this->container['producer_acceptance_performed'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProducerSelectionPerformedAllowableValues();
        if (!is_null($this->container['producer_selection_performed']) && !in_array($this->container['producer_selection_performed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'producer_selection_performed', must be one of '%s'",
                $this->container['producer_selection_performed'],
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
     * Gets availability_checked
     *
     * @return bool|null
     */
    public function getAvailabilityChecked()
    {
        return $this->container['availability_checked'];
    }

    /**
     * Sets availability_checked
     *
     * @param bool|null $availability_checked availability_checked
     *
     * @return self
     */
    public function setAvailabilityChecked($availability_checked)
    {
        if (is_null($availability_checked)) {
            throw new \InvalidArgumentException('non-nullable availability_checked cannot be null');
        }
        $allowedValues = $this->getAvailabilityCheckedAllowableValues();
        if (!in_array($availability_checked, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availability_checked', must be one of '%s'",
                    $availability_checked,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability_checked'] = $availability_checked;

        return $this;
    }

    /**
     * Gets live_pricing_performed
     *
     * @return bool|null
     */
    public function getLivePricingPerformed()
    {
        return $this->container['live_pricing_performed'];
    }

    /**
     * Sets live_pricing_performed
     *
     * @param bool|null $live_pricing_performed live_pricing_performed
     *
     * @return self
     */
    public function setLivePricingPerformed($live_pricing_performed)
    {
        if (is_null($live_pricing_performed)) {
            throw new \InvalidArgumentException('non-nullable live_pricing_performed cannot be null');
        }
        $allowedValues = $this->getLivePricingPerformedAllowableValues();
        if (!in_array($live_pricing_performed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'live_pricing_performed', must be one of '%s'",
                    $live_pricing_performed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['live_pricing_performed'] = $live_pricing_performed;

        return $this;
    }

    /**
     * Gets order_created
     *
     * @return bool|null
     */
    public function getOrderCreated()
    {
        return $this->container['order_created'];
    }

    /**
     * Sets order_created
     *
     * @param bool|null $order_created order_created
     *
     * @return self
     */
    public function setOrderCreated($order_created)
    {
        if (is_null($order_created)) {
            throw new \InvalidArgumentException('non-nullable order_created cannot be null');
        }
        $allowedValues = $this->getOrderCreatedAllowableValues();
        if (!in_array($order_created, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_created', must be one of '%s'",
                    $order_created,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_created'] = $order_created;

        return $this;
    }

    /**
     * Gets persistence_performed
     *
     * @return bool|null
     */
    public function getPersistencePerformed()
    {
        return $this->container['persistence_performed'];
    }

    /**
     * Sets persistence_performed
     *
     * @param bool|null $persistence_performed persistence_performed
     *
     * @return self
     */
    public function setPersistencePerformed($persistence_performed)
    {
        if (is_null($persistence_performed)) {
            throw new \InvalidArgumentException('non-nullable persistence_performed cannot be null');
        }
        $allowedValues = $this->getPersistencePerformedAllowableValues();
        if (!in_array($persistence_performed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'persistence_performed', must be one of '%s'",
                    $persistence_performed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['persistence_performed'] = $persistence_performed;

        return $this;
    }

    /**
     * Gets producer_acceptance_performed
     *
     * @return bool|null
     */
    public function getProducerAcceptancePerformed()
    {
        return $this->container['producer_acceptance_performed'];
    }

    /**
     * Sets producer_acceptance_performed
     *
     * @param bool|null $producer_acceptance_performed producer_acceptance_performed
     *
     * @return self
     */
    public function setProducerAcceptancePerformed($producer_acceptance_performed)
    {
        if (is_null($producer_acceptance_performed)) {
            throw new \InvalidArgumentException('non-nullable producer_acceptance_performed cannot be null');
        }
        $allowedValues = $this->getProducerAcceptancePerformedAllowableValues();
        if (!in_array($producer_acceptance_performed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'producer_acceptance_performed', must be one of '%s'",
                    $producer_acceptance_performed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['producer_acceptance_performed'] = $producer_acceptance_performed;

        return $this;
    }

    /**
     * Gets producer_selection_performed
     *
     * @return bool|null
     */
    public function getProducerSelectionPerformed()
    {
        return $this->container['producer_selection_performed'];
    }

    /**
     * Sets producer_selection_performed
     *
     * @param bool|null $producer_selection_performed producer_selection_performed
     *
     * @return self
     */
    public function setProducerSelectionPerformed($producer_selection_performed)
    {
        if (is_null($producer_selection_performed)) {
            throw new \InvalidArgumentException('non-nullable producer_selection_performed cannot be null');
        }
        $allowedValues = $this->getProducerSelectionPerformedAllowableValues();
        if (!in_array($producer_selection_performed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'producer_selection_performed', must be one of '%s'",
                    $producer_selection_performed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['producer_selection_performed'] = $producer_selection_performed;

        return $this;
    }

    /**
     * Gets specmatch_performed
     *
     * @return bool|null
     */
    public function getSpecmatchPerformed()
    {
        return $this->container['specmatch_performed'];
    }

    /**
     * Sets specmatch_performed
     *
     * @param bool|null $specmatch_performed specmatch_performed
     *
     * @return self
     */
    public function setSpecmatchPerformed($specmatch_performed)
    {
        if (is_null($specmatch_performed)) {
            throw new \InvalidArgumentException('non-nullable specmatch_performed cannot be null');
        }
        $this->container['specmatch_performed'] = $specmatch_performed;

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
