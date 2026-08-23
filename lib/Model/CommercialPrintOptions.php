<?php
/**
 * CommercialPrintOptions
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
 * CommercialPrintOptions Class Doc Comment
 *
 * @category Class
 * @description Shared commercial print capability fields.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class CommercialPrintOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CommercialPrintOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'colour' => '\Jawwws\Gnaww\Model\ColourCapability',
        'custom_dimensions' => '\Jawwws\Gnaww\Model\CustomDimensionCapability',
        'dimensions' => '\Jawwws\Gnaww\Model\DimensionCapability[]',
        'materials' => '\Jawwws\Gnaww\Model\MaterialCapability[]',
        'personalisation' => '\Jawwws\Gnaww\Model\PersonalisationCapability',
        'printed_sides' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'colour' => null,
        'custom_dimensions' => null,
        'dimensions' => null,
        'materials' => null,
        'personalisation' => null,
        'printed_sides' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'colour' => false,
        'custom_dimensions' => true,
        'dimensions' => false,
        'materials' => false,
        'personalisation' => false,
        'printed_sides' => false
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
        'colour' => 'colour',
        'custom_dimensions' => 'custom_dimensions',
        'dimensions' => 'dimensions',
        'materials' => 'materials',
        'personalisation' => 'personalisation',
        'printed_sides' => 'printed_sides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'colour' => 'setColour',
        'custom_dimensions' => 'setCustomDimensions',
        'dimensions' => 'setDimensions',
        'materials' => 'setMaterials',
        'personalisation' => 'setPersonalisation',
        'printed_sides' => 'setPrintedSides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'colour' => 'getColour',
        'custom_dimensions' => 'getCustomDimensions',
        'dimensions' => 'getDimensions',
        'materials' => 'getMaterials',
        'personalisation' => 'getPersonalisation',
        'printed_sides' => 'getPrintedSides'
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

    public const PRINTED_SIDES_SINGLE_SIDED = 'single_sided';
    public const PRINTED_SIDES_DOUBLE_SIDED = 'double_sided';
    public const PRINTED_SIDES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintedSidesAllowableValues()
    {
        return [
            self::PRINTED_SIDES_SINGLE_SIDED,
            self::PRINTED_SIDES_DOUBLE_SIDED,
            self::PRINTED_SIDES_UNKNOWN,
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
        $this->setIfExists('colour', $data ?? [], null);
        $this->setIfExists('custom_dimensions', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('personalisation', $data ?? [], null);
        $this->setIfExists('printed_sides', $data ?? [], null);
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

        if ($this->container['colour'] === null) {
            $invalidProperties[] = "'colour' can't be null";
        }
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ((count($this->container['dimensions']) < 1)) {
            $invalidProperties[] = "invalid value for 'dimensions', number of items must be greater than or equal to 1.";
        }

        if ($this->container['materials'] === null) {
            $invalidProperties[] = "'materials' can't be null";
        }
        if ((count($this->container['materials']) < 1)) {
            $invalidProperties[] = "invalid value for 'materials', number of items must be greater than or equal to 1.";
        }

        if ($this->container['printed_sides'] === null) {
            $invalidProperties[] = "'printed_sides' can't be null";
        }
        if ((count($this->container['printed_sides']) < 1)) {
            $invalidProperties[] = "invalid value for 'printed_sides', number of items must be greater than or equal to 1.";
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
     * Gets colour
     *
     * @return \Jawwws\Gnaww\Model\ColourCapability
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     *
     * @param \Jawwws\Gnaww\Model\ColourCapability $colour colour
     *
     * @return self
     */
    public function setColour($colour)
    {
        if (is_null($colour)) {
            throw new \InvalidArgumentException('non-nullable colour cannot be null');
        }
        $this->container['colour'] = $colour;

        return $this;
    }

    /**
     * Gets custom_dimensions
     *
     * @return \Jawwws\Gnaww\Model\CustomDimensionCapability|null
     */
    public function getCustomDimensions()
    {
        return $this->container['custom_dimensions'];
    }

    /**
     * Sets custom_dimensions
     *
     * @param \Jawwws\Gnaww\Model\CustomDimensionCapability|null $custom_dimensions custom_dimensions
     *
     * @return self
     */
    public function setCustomDimensions($custom_dimensions)
    {
        if (is_null($custom_dimensions)) {
            array_push($this->openAPINullablesSetToNull, 'custom_dimensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_dimensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_dimensions'] = $custom_dimensions;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \Jawwws\Gnaww\Model\DimensionCapability[]
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Jawwws\Gnaww\Model\DimensionCapability[] $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }


        if ((count($dimensions) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dimensions when calling CommercialPrintOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \Jawwws\Gnaww\Model\MaterialCapability[]
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \Jawwws\Gnaww\Model\MaterialCapability[] $materials materials
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            throw new \InvalidArgumentException('non-nullable materials cannot be null');
        }


        if ((count($materials) < 1)) {
            throw new \InvalidArgumentException('invalid length for $materials when calling CommercialPrintOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets personalisation
     *
     * @return \Jawwws\Gnaww\Model\PersonalisationCapability|null
     */
    public function getPersonalisation()
    {
        return $this->container['personalisation'];
    }

    /**
     * Sets personalisation
     *
     * @param \Jawwws\Gnaww\Model\PersonalisationCapability|null $personalisation personalisation
     *
     * @return self
     */
    public function setPersonalisation($personalisation)
    {
        if (is_null($personalisation)) {
            throw new \InvalidArgumentException('non-nullable personalisation cannot be null');
        }
        $this->container['personalisation'] = $personalisation;

        return $this;
    }

    /**
     * Gets printed_sides
     *
     * @return string[]
     */
    public function getPrintedSides()
    {
        return $this->container['printed_sides'];
    }

    /**
     * Sets printed_sides
     *
     * @param string[] $printed_sides printed_sides
     *
     * @return self
     */
    public function setPrintedSides($printed_sides)
    {
        if (is_null($printed_sides)) {
            throw new \InvalidArgumentException('non-nullable printed_sides cannot be null');
        }
        $allowedValues = $this->getPrintedSidesAllowableValues();
        if (array_diff($printed_sides, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'printed_sides', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($printed_sides) < 1)) {
            throw new \InvalidArgumentException('invalid length for $printed_sides when calling CommercialPrintOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['printed_sides'] = $printed_sides;

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
