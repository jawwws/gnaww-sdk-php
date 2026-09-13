<?php
/**
 * FulfilmentMatchResult
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
 * FulfilmentMatchResult Class Doc Comment
 *
 * @category Class
 * @description Capability-plane fulfilment result for one producer profile.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class FulfilmentMatchResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FulfilmentMatchResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'destination_country_code' => 'string',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'match_reasons' => 'string[]',
        'offered_maximum_delivery_working_days' => 'int',
        'offered_minimum_delivery_working_days' => 'int',
        'offered_service_classes' => 'string[]',
        'requested_maximum_delivery_working_days' => 'int',
        'requested_service_class' => 'string',
        'service_country_codes' => 'string[]',
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
        'destination_country_code' => null,
        'issues' => null,
        'match_reasons' => null,
        'offered_maximum_delivery_working_days' => null,
        'offered_minimum_delivery_working_days' => null,
        'offered_service_classes' => null,
        'requested_maximum_delivery_working_days' => null,
        'requested_service_class' => null,
        'service_country_codes' => null,
        'status' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'destination_country_code' => false,
        'issues' => false,
        'match_reasons' => false,
        'offered_maximum_delivery_working_days' => true,
        'offered_minimum_delivery_working_days' => true,
        'offered_service_classes' => false,
        'requested_maximum_delivery_working_days' => true,
        'requested_service_class' => true,
        'service_country_codes' => false,
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
        'destination_country_code' => 'destination_country_code',
        'issues' => 'issues',
        'match_reasons' => 'match_reasons',
        'offered_maximum_delivery_working_days' => 'offered_maximum_delivery_working_days',
        'offered_minimum_delivery_working_days' => 'offered_minimum_delivery_working_days',
        'offered_service_classes' => 'offered_service_classes',
        'requested_maximum_delivery_working_days' => 'requested_maximum_delivery_working_days',
        'requested_service_class' => 'requested_service_class',
        'service_country_codes' => 'service_country_codes',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_country_code' => 'setDestinationCountryCode',
        'issues' => 'setIssues',
        'match_reasons' => 'setMatchReasons',
        'offered_maximum_delivery_working_days' => 'setOfferedMaximumDeliveryWorkingDays',
        'offered_minimum_delivery_working_days' => 'setOfferedMinimumDeliveryWorkingDays',
        'offered_service_classes' => 'setOfferedServiceClasses',
        'requested_maximum_delivery_working_days' => 'setRequestedMaximumDeliveryWorkingDays',
        'requested_service_class' => 'setRequestedServiceClass',
        'service_country_codes' => 'setServiceCountryCodes',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_country_code' => 'getDestinationCountryCode',
        'issues' => 'getIssues',
        'match_reasons' => 'getMatchReasons',
        'offered_maximum_delivery_working_days' => 'getOfferedMaximumDeliveryWorkingDays',
        'offered_minimum_delivery_working_days' => 'getOfferedMinimumDeliveryWorkingDays',
        'offered_service_classes' => 'getOfferedServiceClasses',
        'requested_maximum_delivery_working_days' => 'getRequestedMaximumDeliveryWorkingDays',
        'requested_service_class' => 'getRequestedServiceClass',
        'service_country_codes' => 'getServiceCountryCodes',
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

    public const OFFERED_SERVICE_CLASSES_STANDARD = 'standard';
    public const OFFERED_SERVICE_CLASSES_EXPRESS = 'express';
    public const OFFERED_SERVICE_CLASSES_FREIGHT = 'freight';
    public const REQUESTED_SERVICE_CLASS_STANDARD = 'standard';
    public const REQUESTED_SERVICE_CLASS_EXPRESS = 'express';
    public const REQUESTED_SERVICE_CLASS_FREIGHT = 'freight';
    public const STATUS_MATCHED = 'matched';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_BLOCKED = 'blocked';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOfferedServiceClassesAllowableValues()
    {
        return [
            self::OFFERED_SERVICE_CLASSES_STANDARD,
            self::OFFERED_SERVICE_CLASSES_EXPRESS,
            self::OFFERED_SERVICE_CLASSES_FREIGHT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestedServiceClassAllowableValues()
    {
        return [
            self::REQUESTED_SERVICE_CLASS_STANDARD,
            self::REQUESTED_SERVICE_CLASS_EXPRESS,
            self::REQUESTED_SERVICE_CLASS_FREIGHT,
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
            self::STATUS_MATCHED,
            self::STATUS_NEEDS_REVIEW,
            self::STATUS_BLOCKED,
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
        $this->setIfExists('destination_country_code', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('match_reasons', $data ?? [], null);
        $this->setIfExists('offered_maximum_delivery_working_days', $data ?? [], null);
        $this->setIfExists('offered_minimum_delivery_working_days', $data ?? [], null);
        $this->setIfExists('offered_service_classes', $data ?? [], null);
        $this->setIfExists('requested_maximum_delivery_working_days', $data ?? [], null);
        $this->setIfExists('requested_service_class', $data ?? [], null);
        $this->setIfExists('service_country_codes', $data ?? [], null);
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

        if ($this->container['destination_country_code'] === null) {
            $invalidProperties[] = "'destination_country_code' can't be null";
        }
        $allowedValues = $this->getRequestedServiceClassAllowableValues();
        if (!is_null($this->container['requested_service_class']) && !in_array($this->container['requested_service_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requested_service_class', must be one of '%s'",
                $this->container['requested_service_class'],
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
     * Gets destination_country_code
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->container['destination_country_code'];
    }

    /**
     * Sets destination_country_code
     *
     * @param string $destination_country_code destination_country_code
     *
     * @return self
     */
    public function setDestinationCountryCode($destination_country_code)
    {
        if (is_null($destination_country_code)) {
            throw new \InvalidArgumentException('non-nullable destination_country_code cannot be null');
        }
        $this->container['destination_country_code'] = $destination_country_code;

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
     * Gets offered_maximum_delivery_working_days
     *
     * @return int|null
     */
    public function getOfferedMaximumDeliveryWorkingDays()
    {
        return $this->container['offered_maximum_delivery_working_days'];
    }

    /**
     * Sets offered_maximum_delivery_working_days
     *
     * @param int|null $offered_maximum_delivery_working_days offered_maximum_delivery_working_days
     *
     * @return self
     */
    public function setOfferedMaximumDeliveryWorkingDays($offered_maximum_delivery_working_days)
    {
        if (is_null($offered_maximum_delivery_working_days)) {
            array_push($this->openAPINullablesSetToNull, 'offered_maximum_delivery_working_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offered_maximum_delivery_working_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offered_maximum_delivery_working_days'] = $offered_maximum_delivery_working_days;

        return $this;
    }

    /**
     * Gets offered_minimum_delivery_working_days
     *
     * @return int|null
     */
    public function getOfferedMinimumDeliveryWorkingDays()
    {
        return $this->container['offered_minimum_delivery_working_days'];
    }

    /**
     * Sets offered_minimum_delivery_working_days
     *
     * @param int|null $offered_minimum_delivery_working_days offered_minimum_delivery_working_days
     *
     * @return self
     */
    public function setOfferedMinimumDeliveryWorkingDays($offered_minimum_delivery_working_days)
    {
        if (is_null($offered_minimum_delivery_working_days)) {
            array_push($this->openAPINullablesSetToNull, 'offered_minimum_delivery_working_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offered_minimum_delivery_working_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offered_minimum_delivery_working_days'] = $offered_minimum_delivery_working_days;

        return $this;
    }

    /**
     * Gets offered_service_classes
     *
     * @return string[]|null
     */
    public function getOfferedServiceClasses()
    {
        return $this->container['offered_service_classes'];
    }

    /**
     * Sets offered_service_classes
     *
     * @param string[]|null $offered_service_classes offered_service_classes
     *
     * @return self
     */
    public function setOfferedServiceClasses($offered_service_classes)
    {
        if (is_null($offered_service_classes)) {
            throw new \InvalidArgumentException('non-nullable offered_service_classes cannot be null');
        }
        $allowedValues = $this->getOfferedServiceClassesAllowableValues();
        if (array_diff($offered_service_classes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'offered_service_classes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['offered_service_classes'] = $offered_service_classes;

        return $this;
    }

    /**
     * Gets requested_maximum_delivery_working_days
     *
     * @return int|null
     */
    public function getRequestedMaximumDeliveryWorkingDays()
    {
        return $this->container['requested_maximum_delivery_working_days'];
    }

    /**
     * Sets requested_maximum_delivery_working_days
     *
     * @param int|null $requested_maximum_delivery_working_days requested_maximum_delivery_working_days
     *
     * @return self
     */
    public function setRequestedMaximumDeliveryWorkingDays($requested_maximum_delivery_working_days)
    {
        if (is_null($requested_maximum_delivery_working_days)) {
            array_push($this->openAPINullablesSetToNull, 'requested_maximum_delivery_working_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('requested_maximum_delivery_working_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['requested_maximum_delivery_working_days'] = $requested_maximum_delivery_working_days;

        return $this;
    }

    /**
     * Gets requested_service_class
     *
     * @return string|null
     */
    public function getRequestedServiceClass()
    {
        return $this->container['requested_service_class'];
    }

    /**
     * Sets requested_service_class
     *
     * @param string|null $requested_service_class requested_service_class
     *
     * @return self
     */
    public function setRequestedServiceClass($requested_service_class)
    {
        if (is_null($requested_service_class)) {
            array_push($this->openAPINullablesSetToNull, 'requested_service_class');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('requested_service_class', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRequestedServiceClassAllowableValues();
        if (!is_null($requested_service_class) && !in_array($requested_service_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requested_service_class', must be one of '%s'",
                    $requested_service_class,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requested_service_class'] = $requested_service_class;

        return $this;
    }

    /**
     * Gets service_country_codes
     *
     * @return string[]|null
     */
    public function getServiceCountryCodes()
    {
        return $this->container['service_country_codes'];
    }

    /**
     * Sets service_country_codes
     *
     * @param string[]|null $service_country_codes service_country_codes
     *
     * @return self
     */
    public function setServiceCountryCodes($service_country_codes)
    {
        if (is_null($service_country_codes)) {
            throw new \InvalidArgumentException('non-nullable service_country_codes cannot be null');
        }
        $this->container['service_country_codes'] = $service_country_codes;

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
