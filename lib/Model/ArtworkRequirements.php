<?php
/**
 * ArtworkRequirements
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
 * ArtworkRequirements Class Doc Comment
 *
 * @category Class
 * @description Artwork rules that a producer expects for a product.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ArtworkRequirements implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ArtworkRequirements';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'accepted_file_types' => 'string[]',
        'bleed_mm' => 'float',
        'colour_space' => 'string',
        'recommended_dpi' => 'int',
        'safe_zone_mm' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'accepted_file_types' => null,
        'bleed_mm' => null,
        'colour_space' => null,
        'recommended_dpi' => null,
        'safe_zone_mm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'accepted_file_types' => false,
        'bleed_mm' => true,
        'colour_space' => true,
        'recommended_dpi' => true,
        'safe_zone_mm' => true
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
        'accepted_file_types' => 'accepted_file_types',
        'bleed_mm' => 'bleed_mm',
        'colour_space' => 'colour_space',
        'recommended_dpi' => 'recommended_dpi',
        'safe_zone_mm' => 'safe_zone_mm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accepted_file_types' => 'setAcceptedFileTypes',
        'bleed_mm' => 'setBleedMm',
        'colour_space' => 'setColourSpace',
        'recommended_dpi' => 'setRecommendedDpi',
        'safe_zone_mm' => 'setSafeZoneMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accepted_file_types' => 'getAcceptedFileTypes',
        'bleed_mm' => 'getBleedMm',
        'colour_space' => 'getColourSpace',
        'recommended_dpi' => 'getRecommendedDpi',
        'safe_zone_mm' => 'getSafeZoneMm'
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

    public const ACCEPTED_FILE_TYPES_PDF = 'pdf';
    public const ACCEPTED_FILE_TYPES_JPG = 'jpg';
    public const ACCEPTED_FILE_TYPES_JPEG = 'jpeg';
    public const ACCEPTED_FILE_TYPES_PNG = 'png';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcceptedFileTypesAllowableValues()
    {
        return [
            self::ACCEPTED_FILE_TYPES_PDF,
            self::ACCEPTED_FILE_TYPES_JPG,
            self::ACCEPTED_FILE_TYPES_JPEG,
            self::ACCEPTED_FILE_TYPES_PNG,
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
        $this->setIfExists('accepted_file_types', $data ?? [], null);
        $this->setIfExists('bleed_mm', $data ?? [], null);
        $this->setIfExists('colour_space', $data ?? [], null);
        $this->setIfExists('recommended_dpi', $data ?? [], null);
        $this->setIfExists('safe_zone_mm', $data ?? [], null);
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

        if ($this->container['accepted_file_types'] === null) {
            $invalidProperties[] = "'accepted_file_types' can't be null";
        }
        if ((count($this->container['accepted_file_types']) < 1)) {
            $invalidProperties[] = "invalid value for 'accepted_file_types', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['bleed_mm']) && ($this->container['bleed_mm'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'bleed_mm', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['recommended_dpi']) && ($this->container['recommended_dpi'] <= 0)) {
            $invalidProperties[] = "invalid value for 'recommended_dpi', must be bigger than 0.";
        }

        if (!is_null($this->container['safe_zone_mm']) && ($this->container['safe_zone_mm'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'safe_zone_mm', must be bigger than or equal to 0.0.";
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
     * Gets accepted_file_types
     *
     * @return string[]
     */
    public function getAcceptedFileTypes()
    {
        return $this->container['accepted_file_types'];
    }

    /**
     * Sets accepted_file_types
     *
     * @param string[] $accepted_file_types accepted_file_types
     *
     * @return self
     */
    public function setAcceptedFileTypes($accepted_file_types)
    {
        if (is_null($accepted_file_types)) {
            throw new \InvalidArgumentException('non-nullable accepted_file_types cannot be null');
        }
        $allowedValues = $this->getAcceptedFileTypesAllowableValues();
        if (array_diff($accepted_file_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accepted_file_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($accepted_file_types) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accepted_file_types when calling ArtworkRequirements., number of items must be greater than or equal to 1.');
        }
        $this->container['accepted_file_types'] = $accepted_file_types;

        return $this;
    }

    /**
     * Gets bleed_mm
     *
     * @return float|null
     */
    public function getBleedMm()
    {
        return $this->container['bleed_mm'];
    }

    /**
     * Sets bleed_mm
     *
     * @param float|null $bleed_mm bleed_mm
     *
     * @return self
     */
    public function setBleedMm($bleed_mm)
    {
        if (is_null($bleed_mm)) {
            array_push($this->openAPINullablesSetToNull, 'bleed_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bleed_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($bleed_mm) && ($bleed_mm < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $bleed_mm when calling ArtworkRequirements., must be bigger than or equal to 0.0.');
        }

        $this->container['bleed_mm'] = $bleed_mm;

        return $this;
    }

    /**
     * Gets colour_space
     *
     * @return string|null
     */
    public function getColourSpace()
    {
        return $this->container['colour_space'];
    }

    /**
     * Sets colour_space
     *
     * @param string|null $colour_space colour_space
     *
     * @return self
     */
    public function setColourSpace($colour_space)
    {
        if (is_null($colour_space)) {
            array_push($this->openAPINullablesSetToNull, 'colour_space');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('colour_space', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['colour_space'] = $colour_space;

        return $this;
    }

    /**
     * Gets recommended_dpi
     *
     * @return int|null
     */
    public function getRecommendedDpi()
    {
        return $this->container['recommended_dpi'];
    }

    /**
     * Sets recommended_dpi
     *
     * @param int|null $recommended_dpi recommended_dpi
     *
     * @return self
     */
    public function setRecommendedDpi($recommended_dpi)
    {
        if (is_null($recommended_dpi)) {
            array_push($this->openAPINullablesSetToNull, 'recommended_dpi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recommended_dpi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($recommended_dpi) && ($recommended_dpi <= 0)) {
            throw new \InvalidArgumentException('invalid value for $recommended_dpi when calling ArtworkRequirements., must be bigger than 0.');
        }

        $this->container['recommended_dpi'] = $recommended_dpi;

        return $this;
    }

    /**
     * Gets safe_zone_mm
     *
     * @return float|null
     */
    public function getSafeZoneMm()
    {
        return $this->container['safe_zone_mm'];
    }

    /**
     * Sets safe_zone_mm
     *
     * @param float|null $safe_zone_mm safe_zone_mm
     *
     * @return self
     */
    public function setSafeZoneMm($safe_zone_mm)
    {
        if (is_null($safe_zone_mm)) {
            array_push($this->openAPINullablesSetToNull, 'safe_zone_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('safe_zone_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($safe_zone_mm) && ($safe_zone_mm < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $safe_zone_mm when calling ArtworkRequirements., must be bigger than or equal to 0.0.');
        }

        $this->container['safe_zone_mm'] = $safe_zone_mm;

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
