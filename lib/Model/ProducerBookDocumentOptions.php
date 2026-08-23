<?php
/**
 * ProducerBookDocumentOptions
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
 * ProducerBookDocumentOptions Class Doc Comment
 *
 * @category Class
 * @description Supported book, booklet and document options for a producer product.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProducerBookDocumentOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProducerBookDocumentOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'binding_methods' => 'string[]',
        'cover_component_roles' => 'string[]',
        'maximum_page_count' => 'int',
        'minimum_page_count' => 'int',
        'pagination_multiples' => 'int[]',
        'text_component_roles' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'binding_methods' => null,
        'cover_component_roles' => null,
        'maximum_page_count' => null,
        'minimum_page_count' => null,
        'pagination_multiples' => null,
        'text_component_roles' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'binding_methods' => false,
        'cover_component_roles' => false,
        'maximum_page_count' => true,
        'minimum_page_count' => true,
        'pagination_multiples' => false,
        'text_component_roles' => false
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
        'binding_methods' => 'binding_methods',
        'cover_component_roles' => 'cover_component_roles',
        'maximum_page_count' => 'maximum_page_count',
        'minimum_page_count' => 'minimum_page_count',
        'pagination_multiples' => 'pagination_multiples',
        'text_component_roles' => 'text_component_roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'binding_methods' => 'setBindingMethods',
        'cover_component_roles' => 'setCoverComponentRoles',
        'maximum_page_count' => 'setMaximumPageCount',
        'minimum_page_count' => 'setMinimumPageCount',
        'pagination_multiples' => 'setPaginationMultiples',
        'text_component_roles' => 'setTextComponentRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'binding_methods' => 'getBindingMethods',
        'cover_component_roles' => 'getCoverComponentRoles',
        'maximum_page_count' => 'getMaximumPageCount',
        'minimum_page_count' => 'getMinimumPageCount',
        'pagination_multiples' => 'getPaginationMultiples',
        'text_component_roles' => 'getTextComponentRoles'
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

    public const BINDING_METHODS_SADDLE_STITCHED = 'saddle_stitched';
    public const BINDING_METHODS_PERFECT_BOUND = 'perfect_bound';
    public const BINDING_METHODS_WIRE_BOUND = 'wire_bound';
    public const BINDING_METHODS_CASE_BOUND = 'case_bound';
    public const BINDING_METHODS_UNKNOWN = 'unknown';
    public const COVER_COMPONENT_ROLES_MAIN = 'main';
    public const COVER_COMPONENT_ROLES_FLAT = 'flat';
    public const COVER_COMPONENT_ROLES_FINISHED = 'finished';
    public const COVER_COMPONENT_ROLES_COVER = 'cover';
    public const COVER_COMPONENT_ROLES_TEXT = 'text';
    public const COVER_COMPONENT_ROLES_INSERT = 'insert';
    public const COVER_COMPONENT_ROLES_GARMENT = 'garment';
    public const COVER_COMPONENT_ROLES_DECORATION = 'decoration';
    public const COVER_COMPONENT_ROLES_UNKNOWN = 'unknown';
    public const TEXT_COMPONENT_ROLES_MAIN = 'main';
    public const TEXT_COMPONENT_ROLES_FLAT = 'flat';
    public const TEXT_COMPONENT_ROLES_FINISHED = 'finished';
    public const TEXT_COMPONENT_ROLES_COVER = 'cover';
    public const TEXT_COMPONENT_ROLES_TEXT = 'text';
    public const TEXT_COMPONENT_ROLES_INSERT = 'insert';
    public const TEXT_COMPONENT_ROLES_GARMENT = 'garment';
    public const TEXT_COMPONENT_ROLES_DECORATION = 'decoration';
    public const TEXT_COMPONENT_ROLES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBindingMethodsAllowableValues()
    {
        return [
            self::BINDING_METHODS_SADDLE_STITCHED,
            self::BINDING_METHODS_PERFECT_BOUND,
            self::BINDING_METHODS_WIRE_BOUND,
            self::BINDING_METHODS_CASE_BOUND,
            self::BINDING_METHODS_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoverComponentRolesAllowableValues()
    {
        return [
            self::COVER_COMPONENT_ROLES_MAIN,
            self::COVER_COMPONENT_ROLES_FLAT,
            self::COVER_COMPONENT_ROLES_FINISHED,
            self::COVER_COMPONENT_ROLES_COVER,
            self::COVER_COMPONENT_ROLES_TEXT,
            self::COVER_COMPONENT_ROLES_INSERT,
            self::COVER_COMPONENT_ROLES_GARMENT,
            self::COVER_COMPONENT_ROLES_DECORATION,
            self::COVER_COMPONENT_ROLES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextComponentRolesAllowableValues()
    {
        return [
            self::TEXT_COMPONENT_ROLES_MAIN,
            self::TEXT_COMPONENT_ROLES_FLAT,
            self::TEXT_COMPONENT_ROLES_FINISHED,
            self::TEXT_COMPONENT_ROLES_COVER,
            self::TEXT_COMPONENT_ROLES_TEXT,
            self::TEXT_COMPONENT_ROLES_INSERT,
            self::TEXT_COMPONENT_ROLES_GARMENT,
            self::TEXT_COMPONENT_ROLES_DECORATION,
            self::TEXT_COMPONENT_ROLES_UNKNOWN,
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
        $this->setIfExists('binding_methods', $data ?? [], null);
        $this->setIfExists('cover_component_roles', $data ?? [], null);
        $this->setIfExists('maximum_page_count', $data ?? [], null);
        $this->setIfExists('minimum_page_count', $data ?? [], null);
        $this->setIfExists('pagination_multiples', $data ?? [], null);
        $this->setIfExists('text_component_roles', $data ?? [], null);
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

        if (!is_null($this->container['maximum_page_count']) && ($this->container['maximum_page_count'] <= 0)) {
            $invalidProperties[] = "invalid value for 'maximum_page_count', must be bigger than 0.";
        }

        if (!is_null($this->container['minimum_page_count']) && ($this->container['minimum_page_count'] <= 0)) {
            $invalidProperties[] = "invalid value for 'minimum_page_count', must be bigger than 0.";
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
     * Gets binding_methods
     *
     * @return string[]|null
     */
    public function getBindingMethods()
    {
        return $this->container['binding_methods'];
    }

    /**
     * Sets binding_methods
     *
     * @param string[]|null $binding_methods binding_methods
     *
     * @return self
     */
    public function setBindingMethods($binding_methods)
    {
        if (is_null($binding_methods)) {
            throw new \InvalidArgumentException('non-nullable binding_methods cannot be null');
        }
        $allowedValues = $this->getBindingMethodsAllowableValues();
        if (array_diff($binding_methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'binding_methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['binding_methods'] = $binding_methods;

        return $this;
    }

    /**
     * Gets cover_component_roles
     *
     * @return string[]|null
     */
    public function getCoverComponentRoles()
    {
        return $this->container['cover_component_roles'];
    }

    /**
     * Sets cover_component_roles
     *
     * @param string[]|null $cover_component_roles cover_component_roles
     *
     * @return self
     */
    public function setCoverComponentRoles($cover_component_roles)
    {
        if (is_null($cover_component_roles)) {
            throw new \InvalidArgumentException('non-nullable cover_component_roles cannot be null');
        }
        $allowedValues = $this->getCoverComponentRolesAllowableValues();
        if (array_diff($cover_component_roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cover_component_roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cover_component_roles'] = $cover_component_roles;

        return $this;
    }

    /**
     * Gets maximum_page_count
     *
     * @return int|null
     */
    public function getMaximumPageCount()
    {
        return $this->container['maximum_page_count'];
    }

    /**
     * Sets maximum_page_count
     *
     * @param int|null $maximum_page_count maximum_page_count
     *
     * @return self
     */
    public function setMaximumPageCount($maximum_page_count)
    {
        if (is_null($maximum_page_count)) {
            array_push($this->openAPINullablesSetToNull, 'maximum_page_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maximum_page_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($maximum_page_count) && ($maximum_page_count <= 0)) {
            throw new \InvalidArgumentException('invalid value for $maximum_page_count when calling ProducerBookDocumentOptions., must be bigger than 0.');
        }

        $this->container['maximum_page_count'] = $maximum_page_count;

        return $this;
    }

    /**
     * Gets minimum_page_count
     *
     * @return int|null
     */
    public function getMinimumPageCount()
    {
        return $this->container['minimum_page_count'];
    }

    /**
     * Sets minimum_page_count
     *
     * @param int|null $minimum_page_count minimum_page_count
     *
     * @return self
     */
    public function setMinimumPageCount($minimum_page_count)
    {
        if (is_null($minimum_page_count)) {
            array_push($this->openAPINullablesSetToNull, 'minimum_page_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minimum_page_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($minimum_page_count) && ($minimum_page_count <= 0)) {
            throw new \InvalidArgumentException('invalid value for $minimum_page_count when calling ProducerBookDocumentOptions., must be bigger than 0.');
        }

        $this->container['minimum_page_count'] = $minimum_page_count;

        return $this;
    }

    /**
     * Gets pagination_multiples
     *
     * @return int[]|null
     */
    public function getPaginationMultiples()
    {
        return $this->container['pagination_multiples'];
    }

    /**
     * Sets pagination_multiples
     *
     * @param int[]|null $pagination_multiples pagination_multiples
     *
     * @return self
     */
    public function setPaginationMultiples($pagination_multiples)
    {
        if (is_null($pagination_multiples)) {
            throw new \InvalidArgumentException('non-nullable pagination_multiples cannot be null');
        }
        $this->container['pagination_multiples'] = $pagination_multiples;

        return $this;
    }

    /**
     * Gets text_component_roles
     *
     * @return string[]|null
     */
    public function getTextComponentRoles()
    {
        return $this->container['text_component_roles'];
    }

    /**
     * Sets text_component_roles
     *
     * @param string[]|null $text_component_roles text_component_roles
     *
     * @return self
     */
    public function setTextComponentRoles($text_component_roles)
    {
        if (is_null($text_component_roles)) {
            throw new \InvalidArgumentException('non-nullable text_component_roles cannot be null');
        }
        $allowedValues = $this->getTextComponentRolesAllowableValues();
        if (array_diff($text_component_roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_component_roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text_component_roles'] = $text_component_roles;

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
