<?php
/**
 * VariationField
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
 * VariationField Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class VariationField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'VariationField';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'artwork_or_asset_ref' => 'string',
        'data_type' => 'string',
        'field_key' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'artwork_or_asset_ref' => null,
        'data_type' => null,
        'field_key' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'artwork_or_asset_ref' => true,
        'data_type' => false,
        'field_key' => false
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
        'artwork_or_asset_ref' => 'artwork_or_asset_ref',
        'data_type' => 'data_type',
        'field_key' => 'field_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artwork_or_asset_ref' => 'setArtworkOrAssetRef',
        'data_type' => 'setDataType',
        'field_key' => 'setFieldKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artwork_or_asset_ref' => 'getArtworkOrAssetRef',
        'data_type' => 'getDataType',
        'field_key' => 'getFieldKey'
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

    public const DATA_TYPE_TEXT = 'text';
    public const DATA_TYPE_NUMBER = 'number';
    public const DATA_TYPE_IMAGE = 'image';
    public const DATA_TYPE_CODE = 'code';
    public const DATA_TYPE_ARTWORK = 'artwork';
    public const DATA_TYPE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_TEXT,
            self::DATA_TYPE_NUMBER,
            self::DATA_TYPE_IMAGE,
            self::DATA_TYPE_CODE,
            self::DATA_TYPE_ARTWORK,
            self::DATA_TYPE_UNKNOWN,
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
        $this->setIfExists('artwork_or_asset_ref', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], 'unknown');
        $this->setIfExists('field_key', $data ?? [], null);
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

        $allowedValues = $this->getDataTypeAllowableValues();
        if (!is_null($this->container['data_type']) && !in_array($this->container['data_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_type', must be one of '%s'",
                $this->container['data_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field_key'] === null) {
            $invalidProperties[] = "'field_key' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['field_key'])) {
            $invalidProperties[] = "invalid value for 'field_key', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
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
     * Gets artwork_or_asset_ref
     *
     * @return string|null
     */
    public function getArtworkOrAssetRef()
    {
        return $this->container['artwork_or_asset_ref'];
    }

    /**
     * Sets artwork_or_asset_ref
     *
     * @param string|null $artwork_or_asset_ref artwork_or_asset_ref
     *
     * @return self
     */
    public function setArtworkOrAssetRef($artwork_or_asset_ref)
    {
        if (is_null($artwork_or_asset_ref)) {
            array_push($this->openAPINullablesSetToNull, 'artwork_or_asset_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('artwork_or_asset_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['artwork_or_asset_ref'] = $artwork_or_asset_ref;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type data_type
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        if (is_null($data_type)) {
            throw new \InvalidArgumentException('non-nullable data_type cannot be null');
        }
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!in_array($data_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_type', must be one of '%s'",
                    $data_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets field_key
     *
     * @return string
     */
    public function getFieldKey()
    {
        return $this->container['field_key'];
    }

    /**
     * Sets field_key
     *
     * @param string $field_key field_key
     *
     * @return self
     */
    public function setFieldKey($field_key)
    {
        if (is_null($field_key)) {
            throw new \InvalidArgumentException('non-nullable field_key cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($field_key)))) {
            throw new \InvalidArgumentException("invalid value for \$field_key when calling VariationField., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['field_key'] = $field_key;

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
