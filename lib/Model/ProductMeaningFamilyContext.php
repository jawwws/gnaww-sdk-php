<?php
/**
 * ProductMeaningFamilyContext
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
 * ProductMeaningFamilyContext Class Doc Comment
 *
 * @category Class
 * @description One Gnaww-declared family exposed to semantic interpretation.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProductMeaningFamilyContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProductMeaningFamilyContext';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'completion_archetype' => 'string',
        'product_category' => 'string',
        'product_family' => 'string',
        'support_state' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'completion_archetype' => null,
        'product_category' => null,
        'product_family' => null,
        'support_state' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'completion_archetype' => true,
        'product_category' => false,
        'product_family' => false,
        'support_state' => false
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
        'completion_archetype' => 'completion_archetype',
        'product_category' => 'product_category',
        'product_family' => 'product_family',
        'support_state' => 'support_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion_archetype' => 'setCompletionArchetype',
        'product_category' => 'setProductCategory',
        'product_family' => 'setProductFamily',
        'support_state' => 'setSupportState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion_archetype' => 'getCompletionArchetype',
        'product_category' => 'getProductCategory',
        'product_family' => 'getProductFamily',
        'support_state' => 'getSupportState'
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

    public const COMPLETION_ARCHETYPE_FLAT_COMMERCIAL_PRINT = 'flat_commercial_print';
    public const COMPLETION_ARCHETYPE_FOLDED_PAPER = 'folded_paper';
    public const COMPLETION_ARCHETYPE_BOOK_DOCUMENT = 'book_document';
    public const COMPLETION_ARCHETYPE_APPAREL_DECORATION = 'apparel_decoration';
    public const COMPLETION_ARCHETYPE_FABRIC_HOMEWARES = 'fabric_homewares';
    public const COMPLETION_ARCHETYPE_PROMOTIONAL_GOODS = 'promotional_goods';
    public const PRODUCT_CATEGORY_COMMERCIAL_PRINT = 'commercial_print';
    public const PRODUCT_CATEGORY_APPAREL = 'apparel';
    public const PRODUCT_CATEGORY_FABRIC_HOMEWARES = 'fabric_homewares';
    public const PRODUCT_CATEGORY_PROMOTIONAL_GOODS = 'promotional_goods';
    public const PRODUCT_CATEGORY_UNKNOWN = 'unknown';
    public const PRODUCT_FAMILY_FLYER = 'flyer';
    public const PRODUCT_FAMILY_LEAFLET = 'leaflet';
    public const PRODUCT_FAMILY_FOLDED_LEAFLET = 'folded_leaflet';
    public const PRODUCT_FAMILY_APPAREL = 'apparel';
    public const PRODUCT_FAMILY_BUSINESS_CARD = 'business_card';
    public const PRODUCT_FAMILY_LOYALTY_CARD = 'loyalty_card';
    public const PRODUCT_FAMILY_POSTCARD = 'postcard';
    public const PRODUCT_FAMILY_POSTER = 'poster';
    public const PRODUCT_FAMILY_STICKER = 'sticker';
    public const PRODUCT_FAMILY_LABEL = 'label';
    public const PRODUCT_FAMILY_BOOKLET = 'booklet';
    public const PRODUCT_FAMILY_BOOK = 'book';
    public const PRODUCT_FAMILY_DOCUMENT = 'document';
    public const PRODUCT_FAMILY_CARD = 'card';
    public const PRODUCT_FAMILY_CERTIFICATE = 'certificate';
    public const PRODUCT_FAMILY_RACE_BIB = 'race_bib';
    public const PRODUCT_FAMILY_STATIONERY = 'stationery';
    public const PRODUCT_FAMILY_BOOKMARK = 'bookmark';
    public const PRODUCT_FAMILY_PRESENTATION_FOLDER = 'presentation_folder';
    public const PRODUCT_FAMILY_T_SHIRT = 't_shirt';
    public const PRODUCT_FAMILY_HOODIE = 'hoodie';
    public const PRODUCT_FAMILY_SWEATSHIRT = 'sweatshirt';
    public const PRODUCT_FAMILY_POLO_SHIRT = 'polo_shirt';
    public const PRODUCT_FAMILY_JACKET = 'jacket';
    public const PRODUCT_FAMILY_CAP = 'cap';
    public const PRODUCT_FAMILY_BEANIE = 'beanie';
    public const PRODUCT_FAMILY_WORKWEAR = 'workwear';
    public const PRODUCT_FAMILY_TEXTILE_ACCESSORY = 'textile_accessory';
    public const PRODUCT_FAMILY_CUSHION = 'cushion';
    public const PRODUCT_FAMILY_CUSHION_COVER = 'cushion_cover';
    public const PRODUCT_FAMILY_BEDDING = 'bedding';
    public const PRODUCT_FAMILY_CURTAIN = 'curtain';
    public const PRODUCT_FAMILY_TEA_TOWEL = 'tea_towel';
    public const PRODUCT_FAMILY_BLANKET = 'blanket';
    public const PRODUCT_FAMILY_FABRIC_BY_METRE = 'fabric_by_metre';
    public const PRODUCT_FAMILY_TABLECLOTH = 'tablecloth';
    public const PRODUCT_FAMILY_HOMEWARE = 'homeware';
    public const PRODUCT_FAMILY_PEN = 'pen';
    public const PRODUCT_FAMILY_MUG = 'mug';
    public const PRODUCT_FAMILY_WATER_BOTTLE = 'water_bottle';
    public const PRODUCT_FAMILY_GOLF_BALL = 'golf_ball';
    public const PRODUCT_FAMILY_UMBRELLA = 'umbrella';
    public const PRODUCT_FAMILY_BAG = 'bag';
    public const PRODUCT_FAMILY_NOTEBOOK = 'notebook';
    public const PRODUCT_FAMILY_LANYARD = 'lanyard';
    public const PRODUCT_FAMILY_KEYRING = 'keyring';
    public const PRODUCT_FAMILY_PROMOTIONAL_PRODUCT = 'promotional_product';
    public const PRODUCT_FAMILY_UNKNOWN = 'unknown';
    public const SUPPORT_STATE_FULLY_SUPPORTED = 'fully_supported';
    public const SUPPORT_STATE_SUPPORTED_WITH_CLARIFICATION = 'supported_with_clarification';
    public const SUPPORT_STATE_RECOGNISED_NOT_CANONICALISABLE = 'recognised_not_canonicalisable';
    public const SUPPORT_STATE_UNSUPPORTED = 'unsupported';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompletionArchetypeAllowableValues()
    {
        return [
            self::COMPLETION_ARCHETYPE_FLAT_COMMERCIAL_PRINT,
            self::COMPLETION_ARCHETYPE_FOLDED_PAPER,
            self::COMPLETION_ARCHETYPE_BOOK_DOCUMENT,
            self::COMPLETION_ARCHETYPE_APPAREL_DECORATION,
            self::COMPLETION_ARCHETYPE_FABRIC_HOMEWARES,
            self::COMPLETION_ARCHETYPE_PROMOTIONAL_GOODS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductCategoryAllowableValues()
    {
        return [
            self::PRODUCT_CATEGORY_COMMERCIAL_PRINT,
            self::PRODUCT_CATEGORY_APPAREL,
            self::PRODUCT_CATEGORY_FABRIC_HOMEWARES,
            self::PRODUCT_CATEGORY_PROMOTIONAL_GOODS,
            self::PRODUCT_CATEGORY_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductFamilyAllowableValues()
    {
        return [
            self::PRODUCT_FAMILY_FLYER,
            self::PRODUCT_FAMILY_LEAFLET,
            self::PRODUCT_FAMILY_FOLDED_LEAFLET,
            self::PRODUCT_FAMILY_APPAREL,
            self::PRODUCT_FAMILY_BUSINESS_CARD,
            self::PRODUCT_FAMILY_LOYALTY_CARD,
            self::PRODUCT_FAMILY_POSTCARD,
            self::PRODUCT_FAMILY_POSTER,
            self::PRODUCT_FAMILY_STICKER,
            self::PRODUCT_FAMILY_LABEL,
            self::PRODUCT_FAMILY_BOOKLET,
            self::PRODUCT_FAMILY_BOOK,
            self::PRODUCT_FAMILY_DOCUMENT,
            self::PRODUCT_FAMILY_CARD,
            self::PRODUCT_FAMILY_CERTIFICATE,
            self::PRODUCT_FAMILY_RACE_BIB,
            self::PRODUCT_FAMILY_STATIONERY,
            self::PRODUCT_FAMILY_BOOKMARK,
            self::PRODUCT_FAMILY_PRESENTATION_FOLDER,
            self::PRODUCT_FAMILY_T_SHIRT,
            self::PRODUCT_FAMILY_HOODIE,
            self::PRODUCT_FAMILY_SWEATSHIRT,
            self::PRODUCT_FAMILY_POLO_SHIRT,
            self::PRODUCT_FAMILY_JACKET,
            self::PRODUCT_FAMILY_CAP,
            self::PRODUCT_FAMILY_BEANIE,
            self::PRODUCT_FAMILY_WORKWEAR,
            self::PRODUCT_FAMILY_TEXTILE_ACCESSORY,
            self::PRODUCT_FAMILY_CUSHION,
            self::PRODUCT_FAMILY_CUSHION_COVER,
            self::PRODUCT_FAMILY_BEDDING,
            self::PRODUCT_FAMILY_CURTAIN,
            self::PRODUCT_FAMILY_TEA_TOWEL,
            self::PRODUCT_FAMILY_BLANKET,
            self::PRODUCT_FAMILY_FABRIC_BY_METRE,
            self::PRODUCT_FAMILY_TABLECLOTH,
            self::PRODUCT_FAMILY_HOMEWARE,
            self::PRODUCT_FAMILY_PEN,
            self::PRODUCT_FAMILY_MUG,
            self::PRODUCT_FAMILY_WATER_BOTTLE,
            self::PRODUCT_FAMILY_GOLF_BALL,
            self::PRODUCT_FAMILY_UMBRELLA,
            self::PRODUCT_FAMILY_BAG,
            self::PRODUCT_FAMILY_NOTEBOOK,
            self::PRODUCT_FAMILY_LANYARD,
            self::PRODUCT_FAMILY_KEYRING,
            self::PRODUCT_FAMILY_PROMOTIONAL_PRODUCT,
            self::PRODUCT_FAMILY_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSupportStateAllowableValues()
    {
        return [
            self::SUPPORT_STATE_FULLY_SUPPORTED,
            self::SUPPORT_STATE_SUPPORTED_WITH_CLARIFICATION,
            self::SUPPORT_STATE_RECOGNISED_NOT_CANONICALISABLE,
            self::SUPPORT_STATE_UNSUPPORTED,
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
        $this->setIfExists('completion_archetype', $data ?? [], null);
        $this->setIfExists('product_category', $data ?? [], null);
        $this->setIfExists('product_family', $data ?? [], null);
        $this->setIfExists('support_state', $data ?? [], null);
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

        $allowedValues = $this->getCompletionArchetypeAllowableValues();
        if (!is_null($this->container['completion_archetype']) && !in_array($this->container['completion_archetype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'completion_archetype', must be one of '%s'",
                $this->container['completion_archetype'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['product_category'] === null) {
            $invalidProperties[] = "'product_category' can't be null";
        }
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($this->container['product_category']) && !in_array($this->container['product_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_category', must be one of '%s'",
                $this->container['product_category'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['product_family'] === null) {
            $invalidProperties[] = "'product_family' can't be null";
        }
        $allowedValues = $this->getProductFamilyAllowableValues();
        if (!is_null($this->container['product_family']) && !in_array($this->container['product_family'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_family', must be one of '%s'",
                $this->container['product_family'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['support_state'] === null) {
            $invalidProperties[] = "'support_state' can't be null";
        }
        $allowedValues = $this->getSupportStateAllowableValues();
        if (!is_null($this->container['support_state']) && !in_array($this->container['support_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'support_state', must be one of '%s'",
                $this->container['support_state'],
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
     * Gets completion_archetype
     *
     * @return string|null
     */
    public function getCompletionArchetype()
    {
        return $this->container['completion_archetype'];
    }

    /**
     * Sets completion_archetype
     *
     * @param string|null $completion_archetype completion_archetype
     *
     * @return self
     */
    public function setCompletionArchetype($completion_archetype)
    {
        if (is_null($completion_archetype)) {
            array_push($this->openAPINullablesSetToNull, 'completion_archetype');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completion_archetype', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCompletionArchetypeAllowableValues();
        if (!is_null($completion_archetype) && !in_array($completion_archetype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'completion_archetype', must be one of '%s'",
                    $completion_archetype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['completion_archetype'] = $completion_archetype;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category product_category
     *
     * @return self
     */
    public function setProductCategory($product_category)
    {
        if (is_null($product_category)) {
            throw new \InvalidArgumentException('non-nullable product_category cannot be null');
        }
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!in_array($product_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_category', must be one of '%s'",
                    $product_category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets product_family
     *
     * @return string
     */
    public function getProductFamily()
    {
        return $this->container['product_family'];
    }

    /**
     * Sets product_family
     *
     * @param string $product_family product_family
     *
     * @return self
     */
    public function setProductFamily($product_family)
    {
        if (is_null($product_family)) {
            throw new \InvalidArgumentException('non-nullable product_family cannot be null');
        }
        $allowedValues = $this->getProductFamilyAllowableValues();
        if (!in_array($product_family, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_family', must be one of '%s'",
                    $product_family,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_family'] = $product_family;

        return $this;
    }

    /**
     * Gets support_state
     *
     * @return string
     */
    public function getSupportState()
    {
        return $this->container['support_state'];
    }

    /**
     * Sets support_state
     *
     * @param string $support_state support_state
     *
     * @return self
     */
    public function setSupportState($support_state)
    {
        if (is_null($support_state)) {
            throw new \InvalidArgumentException('non-nullable support_state cannot be null');
        }
        $allowedValues = $this->getSupportStateAllowableValues();
        if (!in_array($support_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'support_state', must be one of '%s'",
                    $support_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['support_state'] = $support_state;

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
