<?php
/**
 * ProductPackRecommendation
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
 * ProductPackRecommendation Class Doc Comment
 *
 * @category Class
 * @description One review-only product recommendation.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProductPackRecommendation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProductPackRecommendation';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'benchmark_id' => 'string',
        'benchmark_version' => 'string',
        'clarification_keys' => 'string[]',
        'evidence_status' => 'string',
        'priority' => 'string',
        'product_category' => 'string',
        'product_family' => 'string',
        'purpose' => 'string',
        'quantity_guidance' => '\Jawwws\Gnaww\Model\BenchmarkQuantityGuidance',
        'rationale' => 'string',
        'recommendation_id' => 'string',
        'requires_confirmation' => 'bool',
        'source' => 'string',
        'title' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'benchmark_id' => null,
        'benchmark_version' => null,
        'clarification_keys' => null,
        'evidence_status' => null,
        'priority' => null,
        'product_category' => null,
        'product_family' => null,
        'purpose' => null,
        'quantity_guidance' => null,
        'rationale' => null,
        'recommendation_id' => null,
        'requires_confirmation' => null,
        'source' => null,
        'title' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'benchmark_id' => true,
        'benchmark_version' => true,
        'clarification_keys' => false,
        'evidence_status' => false,
        'priority' => false,
        'product_category' => false,
        'product_family' => false,
        'purpose' => false,
        'quantity_guidance' => true,
        'rationale' => false,
        'recommendation_id' => false,
        'requires_confirmation' => false,
        'source' => false,
        'title' => false
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
        'benchmark_id' => 'benchmark_id',
        'benchmark_version' => 'benchmark_version',
        'clarification_keys' => 'clarification_keys',
        'evidence_status' => 'evidence_status',
        'priority' => 'priority',
        'product_category' => 'product_category',
        'product_family' => 'product_family',
        'purpose' => 'purpose',
        'quantity_guidance' => 'quantity_guidance',
        'rationale' => 'rationale',
        'recommendation_id' => 'recommendation_id',
        'requires_confirmation' => 'requires_confirmation',
        'source' => 'source',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benchmark_id' => 'setBenchmarkId',
        'benchmark_version' => 'setBenchmarkVersion',
        'clarification_keys' => 'setClarificationKeys',
        'evidence_status' => 'setEvidenceStatus',
        'priority' => 'setPriority',
        'product_category' => 'setProductCategory',
        'product_family' => 'setProductFamily',
        'purpose' => 'setPurpose',
        'quantity_guidance' => 'setQuantityGuidance',
        'rationale' => 'setRationale',
        'recommendation_id' => 'setRecommendationId',
        'requires_confirmation' => 'setRequiresConfirmation',
        'source' => 'setSource',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benchmark_id' => 'getBenchmarkId',
        'benchmark_version' => 'getBenchmarkVersion',
        'clarification_keys' => 'getClarificationKeys',
        'evidence_status' => 'getEvidenceStatus',
        'priority' => 'getPriority',
        'product_category' => 'getProductCategory',
        'product_family' => 'getProductFamily',
        'purpose' => 'getPurpose',
        'quantity_guidance' => 'getQuantityGuidance',
        'rationale' => 'getRationale',
        'recommendation_id' => 'getRecommendationId',
        'requires_confirmation' => 'getRequiresConfirmation',
        'source' => 'getSource',
        'title' => 'getTitle'
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

    public const EVIDENCE_STATUS_CURATED_BASELINE = 'curated_baseline';
    public const EVIDENCE_STATUS_OBSERVED_INTENT = 'observed_intent';
    public const EVIDENCE_STATUS_CONFIRMED_OUTCOME = 'confirmed_outcome';
    public const EVIDENCE_STATUS_EMPIRICAL = 'empirical';
    public const EVIDENCE_STATUS_GENERAL_MODEL_KNOWLEDGE = 'general_model_knowledge';
    public const PRIORITY_CORE = 'core';
    public const PRIORITY_OPTIONAL = 'optional';
    public const PRIORITY_AVOID = 'avoid';
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
    public const SOURCE_BENCHMARK = 'benchmark';
    public const SOURCE_GENERAL_MODEL_KNOWLEDGE = 'general_model_knowledge';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEvidenceStatusAllowableValues()
    {
        return [
            self::EVIDENCE_STATUS_CURATED_BASELINE,
            self::EVIDENCE_STATUS_OBSERVED_INTENT,
            self::EVIDENCE_STATUS_CONFIRMED_OUTCOME,
            self::EVIDENCE_STATUS_EMPIRICAL,
            self::EVIDENCE_STATUS_GENERAL_MODEL_KNOWLEDGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_CORE,
            self::PRIORITY_OPTIONAL,
            self::PRIORITY_AVOID,
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
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_BENCHMARK,
            self::SOURCE_GENERAL_MODEL_KNOWLEDGE,
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
        $this->setIfExists('benchmark_id', $data ?? [], null);
        $this->setIfExists('benchmark_version', $data ?? [], null);
        $this->setIfExists('clarification_keys', $data ?? [], null);
        $this->setIfExists('evidence_status', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('product_category', $data ?? [], null);
        $this->setIfExists('product_family', $data ?? [], null);
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('quantity_guidance', $data ?? [], null);
        $this->setIfExists('rationale', $data ?? [], null);
        $this->setIfExists('recommendation_id', $data ?? [], null);
        $this->setIfExists('requires_confirmation', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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

        if ($this->container['evidence_status'] === null) {
            $invalidProperties[] = "'evidence_status' can't be null";
        }
        $allowedValues = $this->getEvidenceStatusAllowableValues();
        if (!is_null($this->container['evidence_status']) && !in_array($this->container['evidence_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'evidence_status', must be one of '%s'",
                $this->container['evidence_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'priority', must be one of '%s'",
                $this->container['priority'],
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

        if ($this->container['purpose'] === null) {
            $invalidProperties[] = "'purpose' can't be null";
        }
        if ((mb_strlen($this->container['purpose']) < 1)) {
            $invalidProperties[] = "invalid value for 'purpose', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rationale'] === null) {
            $invalidProperties[] = "'rationale' can't be null";
        }
        if ((mb_strlen($this->container['rationale']) < 1)) {
            $invalidProperties[] = "invalid value for 'rationale', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['recommendation_id'] === null) {
            $invalidProperties[] = "'recommendation_id' can't be null";
        }
        if ((mb_strlen($this->container['recommendation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'recommendation_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['requires_confirmation'] === null) {
            $invalidProperties[] = "'requires_confirmation' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
     * Gets benchmark_id
     *
     * @return string|null
     */
    public function getBenchmarkId()
    {
        return $this->container['benchmark_id'];
    }

    /**
     * Sets benchmark_id
     *
     * @param string|null $benchmark_id benchmark_id
     *
     * @return self
     */
    public function setBenchmarkId($benchmark_id)
    {
        if (is_null($benchmark_id)) {
            array_push($this->openAPINullablesSetToNull, 'benchmark_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('benchmark_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['benchmark_id'] = $benchmark_id;

        return $this;
    }

    /**
     * Gets benchmark_version
     *
     * @return string|null
     */
    public function getBenchmarkVersion()
    {
        return $this->container['benchmark_version'];
    }

    /**
     * Sets benchmark_version
     *
     * @param string|null $benchmark_version benchmark_version
     *
     * @return self
     */
    public function setBenchmarkVersion($benchmark_version)
    {
        if (is_null($benchmark_version)) {
            array_push($this->openAPINullablesSetToNull, 'benchmark_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('benchmark_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['benchmark_version'] = $benchmark_version;

        return $this;
    }

    /**
     * Gets clarification_keys
     *
     * @return string[]|null
     */
    public function getClarificationKeys()
    {
        return $this->container['clarification_keys'];
    }

    /**
     * Sets clarification_keys
     *
     * @param string[]|null $clarification_keys clarification_keys
     *
     * @return self
     */
    public function setClarificationKeys($clarification_keys)
    {
        if (is_null($clarification_keys)) {
            throw new \InvalidArgumentException('non-nullable clarification_keys cannot be null');
        }
        $this->container['clarification_keys'] = $clarification_keys;

        return $this;
    }

    /**
     * Gets evidence_status
     *
     * @return string
     */
    public function getEvidenceStatus()
    {
        return $this->container['evidence_status'];
    }

    /**
     * Sets evidence_status
     *
     * @param string $evidence_status evidence_status
     *
     * @return self
     */
    public function setEvidenceStatus($evidence_status)
    {
        if (is_null($evidence_status)) {
            throw new \InvalidArgumentException('non-nullable evidence_status cannot be null');
        }
        $allowedValues = $this->getEvidenceStatusAllowableValues();
        if (!in_array($evidence_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'evidence_status', must be one of '%s'",
                    $evidence_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['evidence_status'] = $evidence_status;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $allowedValues = $this->getPriorityAllowableValues();
        if (!in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'priority', must be one of '%s'",
                    $priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

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
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose purpose
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        if (is_null($purpose)) {
            throw new \InvalidArgumentException('non-nullable purpose cannot be null');
        }

        if ((mb_strlen($purpose) < 1)) {
            throw new \InvalidArgumentException('invalid length for $purpose when calling ProductPackRecommendation., must be bigger than or equal to 1.');
        }

        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets quantity_guidance
     *
     * @return \Jawwws\Gnaww\Model\BenchmarkQuantityGuidance|null
     */
    public function getQuantityGuidance()
    {
        return $this->container['quantity_guidance'];
    }

    /**
     * Sets quantity_guidance
     *
     * @param \Jawwws\Gnaww\Model\BenchmarkQuantityGuidance|null $quantity_guidance quantity_guidance
     *
     * @return self
     */
    public function setQuantityGuidance($quantity_guidance)
    {
        if (is_null($quantity_guidance)) {
            array_push($this->openAPINullablesSetToNull, 'quantity_guidance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quantity_guidance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['quantity_guidance'] = $quantity_guidance;

        return $this;
    }

    /**
     * Gets rationale
     *
     * @return string
     */
    public function getRationale()
    {
        return $this->container['rationale'];
    }

    /**
     * Sets rationale
     *
     * @param string $rationale rationale
     *
     * @return self
     */
    public function setRationale($rationale)
    {
        if (is_null($rationale)) {
            throw new \InvalidArgumentException('non-nullable rationale cannot be null');
        }

        if ((mb_strlen($rationale) < 1)) {
            throw new \InvalidArgumentException('invalid length for $rationale when calling ProductPackRecommendation., must be bigger than or equal to 1.');
        }

        $this->container['rationale'] = $rationale;

        return $this;
    }

    /**
     * Gets recommendation_id
     *
     * @return string
     */
    public function getRecommendationId()
    {
        return $this->container['recommendation_id'];
    }

    /**
     * Sets recommendation_id
     *
     * @param string $recommendation_id recommendation_id
     *
     * @return self
     */
    public function setRecommendationId($recommendation_id)
    {
        if (is_null($recommendation_id)) {
            throw new \InvalidArgumentException('non-nullable recommendation_id cannot be null');
        }

        if ((mb_strlen($recommendation_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recommendation_id when calling ProductPackRecommendation., must be bigger than or equal to 1.');
        }

        $this->container['recommendation_id'] = $recommendation_id;

        return $this;
    }

    /**
     * Gets requires_confirmation
     *
     * @return bool
     */
    public function getRequiresConfirmation()
    {
        return $this->container['requires_confirmation'];
    }

    /**
     * Sets requires_confirmation
     *
     * @param bool $requires_confirmation requires_confirmation
     *
     * @return self
     */
    public function setRequiresConfirmation($requires_confirmation)
    {
        if (is_null($requires_confirmation)) {
            throw new \InvalidArgumentException('non-nullable requires_confirmation cannot be null');
        }
        $this->container['requires_confirmation'] = $requires_confirmation;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductPackRecommendation., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
