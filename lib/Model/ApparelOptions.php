<?php
/**
 * ApparelOptions
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
 * ApparelOptions Class Doc Comment
 *
 * @category Class
 * @description Canonical apparel and garment decoration capabilities.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ApparelOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ApparelOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'brands' => 'string[]',
        'colours' => 'string[]',
        'decoration_areas' => '\Jawwws\Gnaww\Model\DecorationAreaCapability[]',
        'garment_types' => 'string[]',
        'materials' => '\Jawwws\Gnaww\Model\MaterialCapability[]',
        'personalisation' => '\Jawwws\Gnaww\Model\PersonalisationCapability',
        'sizes' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'brands' => null,
        'colours' => null,
        'decoration_areas' => null,
        'garment_types' => null,
        'materials' => null,
        'personalisation' => null,
        'sizes' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'brands' => false,
        'colours' => false,
        'decoration_areas' => false,
        'garment_types' => false,
        'materials' => false,
        'personalisation' => false,
        'sizes' => false
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
        'brands' => 'brands',
        'colours' => 'colours',
        'decoration_areas' => 'decoration_areas',
        'garment_types' => 'garment_types',
        'materials' => 'materials',
        'personalisation' => 'personalisation',
        'sizes' => 'sizes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brands' => 'setBrands',
        'colours' => 'setColours',
        'decoration_areas' => 'setDecorationAreas',
        'garment_types' => 'setGarmentTypes',
        'materials' => 'setMaterials',
        'personalisation' => 'setPersonalisation',
        'sizes' => 'setSizes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brands' => 'getBrands',
        'colours' => 'getColours',
        'decoration_areas' => 'getDecorationAreas',
        'garment_types' => 'getGarmentTypes',
        'materials' => 'getMaterials',
        'personalisation' => 'getPersonalisation',
        'sizes' => 'getSizes'
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

    public const GARMENT_TYPES_FLYER = 'flyer';
    public const GARMENT_TYPES_LEAFLET = 'leaflet';
    public const GARMENT_TYPES_FOLDED_LEAFLET = 'folded_leaflet';
    public const GARMENT_TYPES_APPAREL = 'apparel';
    public const GARMENT_TYPES_BUSINESS_CARD = 'business_card';
    public const GARMENT_TYPES_LOYALTY_CARD = 'loyalty_card';
    public const GARMENT_TYPES_POSTCARD = 'postcard';
    public const GARMENT_TYPES_POSTER = 'poster';
    public const GARMENT_TYPES_STICKER = 'sticker';
    public const GARMENT_TYPES_LABEL = 'label';
    public const GARMENT_TYPES_BOOKLET = 'booklet';
    public const GARMENT_TYPES_BOOK = 'book';
    public const GARMENT_TYPES_DOCUMENT = 'document';
    public const GARMENT_TYPES_CARD = 'card';
    public const GARMENT_TYPES_CERTIFICATE = 'certificate';
    public const GARMENT_TYPES_RACE_BIB = 'race_bib';
    public const GARMENT_TYPES_STATIONERY = 'stationery';
    public const GARMENT_TYPES_BOOKMARK = 'bookmark';
    public const GARMENT_TYPES_PRESENTATION_FOLDER = 'presentation_folder';
    public const GARMENT_TYPES_T_SHIRT = 't_shirt';
    public const GARMENT_TYPES_HOODIE = 'hoodie';
    public const GARMENT_TYPES_SWEATSHIRT = 'sweatshirt';
    public const GARMENT_TYPES_POLO_SHIRT = 'polo_shirt';
    public const GARMENT_TYPES_JACKET = 'jacket';
    public const GARMENT_TYPES_CAP = 'cap';
    public const GARMENT_TYPES_BEANIE = 'beanie';
    public const GARMENT_TYPES_WORKWEAR = 'workwear';
    public const GARMENT_TYPES_TEXTILE_ACCESSORY = 'textile_accessory';
    public const GARMENT_TYPES_CUSHION = 'cushion';
    public const GARMENT_TYPES_CUSHION_COVER = 'cushion_cover';
    public const GARMENT_TYPES_BEDDING = 'bedding';
    public const GARMENT_TYPES_CURTAIN = 'curtain';
    public const GARMENT_TYPES_TEA_TOWEL = 'tea_towel';
    public const GARMENT_TYPES_BLANKET = 'blanket';
    public const GARMENT_TYPES_FABRIC_BY_METRE = 'fabric_by_metre';
    public const GARMENT_TYPES_TABLECLOTH = 'tablecloth';
    public const GARMENT_TYPES_HOMEWARE = 'homeware';
    public const GARMENT_TYPES_PEN = 'pen';
    public const GARMENT_TYPES_MUG = 'mug';
    public const GARMENT_TYPES_WATER_BOTTLE = 'water_bottle';
    public const GARMENT_TYPES_GOLF_BALL = 'golf_ball';
    public const GARMENT_TYPES_UMBRELLA = 'umbrella';
    public const GARMENT_TYPES_BAG = 'bag';
    public const GARMENT_TYPES_NOTEBOOK = 'notebook';
    public const GARMENT_TYPES_LANYARD = 'lanyard';
    public const GARMENT_TYPES_KEYRING = 'keyring';
    public const GARMENT_TYPES_PROMOTIONAL_PRODUCT = 'promotional_product';
    public const GARMENT_TYPES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGarmentTypesAllowableValues()
    {
        return [
            self::GARMENT_TYPES_FLYER,
            self::GARMENT_TYPES_LEAFLET,
            self::GARMENT_TYPES_FOLDED_LEAFLET,
            self::GARMENT_TYPES_APPAREL,
            self::GARMENT_TYPES_BUSINESS_CARD,
            self::GARMENT_TYPES_LOYALTY_CARD,
            self::GARMENT_TYPES_POSTCARD,
            self::GARMENT_TYPES_POSTER,
            self::GARMENT_TYPES_STICKER,
            self::GARMENT_TYPES_LABEL,
            self::GARMENT_TYPES_BOOKLET,
            self::GARMENT_TYPES_BOOK,
            self::GARMENT_TYPES_DOCUMENT,
            self::GARMENT_TYPES_CARD,
            self::GARMENT_TYPES_CERTIFICATE,
            self::GARMENT_TYPES_RACE_BIB,
            self::GARMENT_TYPES_STATIONERY,
            self::GARMENT_TYPES_BOOKMARK,
            self::GARMENT_TYPES_PRESENTATION_FOLDER,
            self::GARMENT_TYPES_T_SHIRT,
            self::GARMENT_TYPES_HOODIE,
            self::GARMENT_TYPES_SWEATSHIRT,
            self::GARMENT_TYPES_POLO_SHIRT,
            self::GARMENT_TYPES_JACKET,
            self::GARMENT_TYPES_CAP,
            self::GARMENT_TYPES_BEANIE,
            self::GARMENT_TYPES_WORKWEAR,
            self::GARMENT_TYPES_TEXTILE_ACCESSORY,
            self::GARMENT_TYPES_CUSHION,
            self::GARMENT_TYPES_CUSHION_COVER,
            self::GARMENT_TYPES_BEDDING,
            self::GARMENT_TYPES_CURTAIN,
            self::GARMENT_TYPES_TEA_TOWEL,
            self::GARMENT_TYPES_BLANKET,
            self::GARMENT_TYPES_FABRIC_BY_METRE,
            self::GARMENT_TYPES_TABLECLOTH,
            self::GARMENT_TYPES_HOMEWARE,
            self::GARMENT_TYPES_PEN,
            self::GARMENT_TYPES_MUG,
            self::GARMENT_TYPES_WATER_BOTTLE,
            self::GARMENT_TYPES_GOLF_BALL,
            self::GARMENT_TYPES_UMBRELLA,
            self::GARMENT_TYPES_BAG,
            self::GARMENT_TYPES_NOTEBOOK,
            self::GARMENT_TYPES_LANYARD,
            self::GARMENT_TYPES_KEYRING,
            self::GARMENT_TYPES_PROMOTIONAL_PRODUCT,
            self::GARMENT_TYPES_UNKNOWN,
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
        $this->setIfExists('brands', $data ?? [], null);
        $this->setIfExists('colours', $data ?? [], null);
        $this->setIfExists('decoration_areas', $data ?? [], null);
        $this->setIfExists('garment_types', $data ?? [], null);
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('personalisation', $data ?? [], null);
        $this->setIfExists('sizes', $data ?? [], null);
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
     * Gets brands
     *
     * @return string[]|null
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param string[]|null $brands brands
     *
     * @return self
     */
    public function setBrands($brands)
    {
        if (is_null($brands)) {
            throw new \InvalidArgumentException('non-nullable brands cannot be null');
        }
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets colours
     *
     * @return string[]|null
     */
    public function getColours()
    {
        return $this->container['colours'];
    }

    /**
     * Sets colours
     *
     * @param string[]|null $colours colours
     *
     * @return self
     */
    public function setColours($colours)
    {
        if (is_null($colours)) {
            throw new \InvalidArgumentException('non-nullable colours cannot be null');
        }
        $this->container['colours'] = $colours;

        return $this;
    }

    /**
     * Gets decoration_areas
     *
     * @return \Jawwws\Gnaww\Model\DecorationAreaCapability[]|null
     */
    public function getDecorationAreas()
    {
        return $this->container['decoration_areas'];
    }

    /**
     * Sets decoration_areas
     *
     * @param \Jawwws\Gnaww\Model\DecorationAreaCapability[]|null $decoration_areas decoration_areas
     *
     * @return self
     */
    public function setDecorationAreas($decoration_areas)
    {
        if (is_null($decoration_areas)) {
            throw new \InvalidArgumentException('non-nullable decoration_areas cannot be null');
        }
        $this->container['decoration_areas'] = $decoration_areas;

        return $this;
    }

    /**
     * Gets garment_types
     *
     * @return string[]|null
     */
    public function getGarmentTypes()
    {
        return $this->container['garment_types'];
    }

    /**
     * Sets garment_types
     *
     * @param string[]|null $garment_types garment_types
     *
     * @return self
     */
    public function setGarmentTypes($garment_types)
    {
        if (is_null($garment_types)) {
            throw new \InvalidArgumentException('non-nullable garment_types cannot be null');
        }
        $allowedValues = $this->getGarmentTypesAllowableValues();
        if (array_diff($garment_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'garment_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['garment_types'] = $garment_types;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \Jawwws\Gnaww\Model\MaterialCapability[]|null
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \Jawwws\Gnaww\Model\MaterialCapability[]|null $materials materials
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            throw new \InvalidArgumentException('non-nullable materials cannot be null');
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
     * Gets sizes
     *
     * @return string[]|null
     */
    public function getSizes()
    {
        return $this->container['sizes'];
    }

    /**
     * Sets sizes
     *
     * @param string[]|null $sizes sizes
     *
     * @return self
     */
    public function setSizes($sizes)
    {
        if (is_null($sizes)) {
            throw new \InvalidArgumentException('non-nullable sizes cannot be null');
        }
        $this->container['sizes'] = $sizes;

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
