<?php
/**
 * PrintJobSpecificationV04
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
 * PrintJobSpecificationV04 Class Doc Comment
 *
 * @category Class
 * @description Version 0.4 GJS with confirmed production-relevant use requirements.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PrintJobSpecificationV04 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrintJobSpecificationV04';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'components' => '\Jawwws\Gnaww\Model\PrintComponent[]',
        'confidence' => 'float',
        'options' => '\Jawwws\Gnaww\Model\ProductOptions',
        'product_category' => 'string',
        'product_family' => 'string',
        'product_name' => 'string',
        'quantity' => '\Jawwws\Gnaww\Model\Quantity',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'service_requirements' => '\Jawwws\Gnaww\Model\ServiceRequirements',
        'status' => 'string',
        'unresolved_fields' => 'string[]',
        'use_requirements' => '\Jawwws\Gnaww\Model\UseRequirement[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'components' => null,
        'confidence' => null,
        'options' => null,
        'product_category' => null,
        'product_family' => null,
        'product_name' => null,
        'quantity' => null,
        'schema_name' => null,
        'schema_version' => null,
        'service_requirements' => null,
        'status' => null,
        'unresolved_fields' => null,
        'use_requirements' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'components' => false,
        'confidence' => false,
        'options' => false,
        'product_category' => false,
        'product_family' => false,
        'product_name' => true,
        'quantity' => false,
        'schema_name' => false,
        'schema_version' => false,
        'service_requirements' => false,
        'status' => false,
        'unresolved_fields' => false,
        'use_requirements' => false
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
        'components' => 'components',
        'confidence' => 'confidence',
        'options' => 'options',
        'product_category' => 'product_category',
        'product_family' => 'product_family',
        'product_name' => 'product_name',
        'quantity' => 'quantity',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'service_requirements' => 'service_requirements',
        'status' => 'status',
        'unresolved_fields' => 'unresolved_fields',
        'use_requirements' => 'use_requirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'components' => 'setComponents',
        'confidence' => 'setConfidence',
        'options' => 'setOptions',
        'product_category' => 'setProductCategory',
        'product_family' => 'setProductFamily',
        'product_name' => 'setProductName',
        'quantity' => 'setQuantity',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'service_requirements' => 'setServiceRequirements',
        'status' => 'setStatus',
        'unresolved_fields' => 'setUnresolvedFields',
        'use_requirements' => 'setUseRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'components' => 'getComponents',
        'confidence' => 'getConfidence',
        'options' => 'getOptions',
        'product_category' => 'getProductCategory',
        'product_family' => 'getProductFamily',
        'product_name' => 'getProductName',
        'quantity' => 'getQuantity',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'service_requirements' => 'getServiceRequirements',
        'status' => 'getStatus',
        'unresolved_fields' => 'getUnresolvedFields',
        'use_requirements' => 'getUseRequirements'
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
    public const SCHEMA_NAME_JAWWWS_PRINT_JOB_SPECIFICATION = 'jawwws.print_job_specification';
    public const SCHEMA_VERSION__0_4 = '0.4';
    public const STATUS_MAPPED = 'mapped';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_BLOCKED = 'blocked';
    public const STATUS_FAILED = 'failed';

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
    public function getSchemaNameAllowableValues()
    {
        return [
            self::SCHEMA_NAME_JAWWWS_PRINT_JOB_SPECIFICATION,
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
            self::SCHEMA_VERSION__0_4,
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
            self::STATUS_MAPPED,
            self::STATUS_NEEDS_REVIEW,
            self::STATUS_BLOCKED,
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
        $this->setIfExists('components', $data ?? [], null);
        $this->setIfExists('confidence', $data ?? [], 0.0);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('product_category', $data ?? [], 'unknown');
        $this->setIfExists('product_family', $data ?? [], null);
        $this->setIfExists('product_name', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'jawwws.print_job_specification');
        $this->setIfExists('schema_version', $data ?? [], '0.4');
        $this->setIfExists('service_requirements', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'mapped');
        $this->setIfExists('unresolved_fields', $data ?? [], null);
        $this->setIfExists('use_requirements', $data ?? [], null);
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

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 1.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.0.";
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
     * Gets components
     *
     * @return \Jawwws\Gnaww\Model\PrintComponent[]|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \Jawwws\Gnaww\Model\PrintComponent[]|null $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        if (is_null($components)) {
            throw new \InvalidArgumentException('non-nullable components cannot be null');
        }
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return float|null
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param float|null $confidence confidence
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }

        if (($confidence > 1.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling PrintJobSpecificationV04., must be smaller than or equal to 1.0.');
        }
        if (($confidence < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling PrintJobSpecificationV04., must be bigger than or equal to 0.0.');
        }

        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Jawwws\Gnaww\Model\ProductOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Jawwws\Gnaww\Model\ProductOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string|null $product_category product_category
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
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        if (is_null($product_name)) {
            array_push($this->openAPINullablesSetToNull, 'product_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Jawwws\Gnaww\Model\Quantity|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Jawwws\Gnaww\Model\Quantity|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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
     * Gets service_requirements
     *
     * @return \Jawwws\Gnaww\Model\ServiceRequirements|null
     */
    public function getServiceRequirements()
    {
        return $this->container['service_requirements'];
    }

    /**
     * Sets service_requirements
     *
     * @param \Jawwws\Gnaww\Model\ServiceRequirements|null $service_requirements service_requirements
     *
     * @return self
     */
    public function setServiceRequirements($service_requirements)
    {
        if (is_null($service_requirements)) {
            throw new \InvalidArgumentException('non-nullable service_requirements cannot be null');
        }
        $this->container['service_requirements'] = $service_requirements;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
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
     * Gets unresolved_fields
     *
     * @return string[]|null
     */
    public function getUnresolvedFields()
    {
        return $this->container['unresolved_fields'];
    }

    /**
     * Sets unresolved_fields
     *
     * @param string[]|null $unresolved_fields unresolved_fields
     *
     * @return self
     */
    public function setUnresolvedFields($unresolved_fields)
    {
        if (is_null($unresolved_fields)) {
            throw new \InvalidArgumentException('non-nullable unresolved_fields cannot be null');
        }
        $this->container['unresolved_fields'] = $unresolved_fields;

        return $this;
    }

    /**
     * Gets use_requirements
     *
     * @return \Jawwws\Gnaww\Model\UseRequirement[]|null
     */
    public function getUseRequirements()
    {
        return $this->container['use_requirements'];
    }

    /**
     * Sets use_requirements
     *
     * @param \Jawwws\Gnaww\Model\UseRequirement[]|null $use_requirements use_requirements
     *
     * @return self
     */
    public function setUseRequirements($use_requirements)
    {
        if (is_null($use_requirements)) {
            throw new \InvalidArgumentException('non-nullable use_requirements cannot be null');
        }
        $this->container['use_requirements'] = $use_requirements;

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
