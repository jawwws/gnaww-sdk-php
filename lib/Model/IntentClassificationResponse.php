<?php
/**
 * IntentClassificationResponse
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
 * IntentClassificationResponse Class Doc Comment
 *
 * @category Class
 * @description Deterministic classification of product-led versus outcome-led input.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class IntentClassificationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'IntentClassificationResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'candidate_product_families' => 'string[]',
        'confidence' => 'float',
        'detected_product_categories' => 'string[]',
        'detected_product_families' => 'string[]',
        'deterministic' => 'bool',
        'evidence' => '\Jawwws\Gnaww\Model\IntentPlanEvidence[]',
        'input_kind' => 'string',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'requires_intent_planner' => 'bool',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'source' => '\Jawwws\Gnaww\Model\SourceInput',
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
        'candidate_product_families' => null,
        'confidence' => null,
        'detected_product_categories' => null,
        'detected_product_families' => null,
        'deterministic' => null,
        'evidence' => null,
        'input_kind' => null,
        'issues' => null,
        'requires_intent_planner' => null,
        'schema_name' => null,
        'schema_version' => null,
        'source' => null,
        'status' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'candidate_product_families' => false,
        'confidence' => false,
        'detected_product_categories' => false,
        'detected_product_families' => false,
        'deterministic' => false,
        'evidence' => false,
        'input_kind' => false,
        'issues' => false,
        'requires_intent_planner' => false,
        'schema_name' => false,
        'schema_version' => false,
        'source' => false,
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
        'candidate_product_families' => 'candidate_product_families',
        'confidence' => 'confidence',
        'detected_product_categories' => 'detected_product_categories',
        'detected_product_families' => 'detected_product_families',
        'deterministic' => 'deterministic',
        'evidence' => 'evidence',
        'input_kind' => 'input_kind',
        'issues' => 'issues',
        'requires_intent_planner' => 'requires_intent_planner',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'source' => 'source',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'candidate_product_families' => 'setCandidateProductFamilies',
        'confidence' => 'setConfidence',
        'detected_product_categories' => 'setDetectedProductCategories',
        'detected_product_families' => 'setDetectedProductFamilies',
        'deterministic' => 'setDeterministic',
        'evidence' => 'setEvidence',
        'input_kind' => 'setInputKind',
        'issues' => 'setIssues',
        'requires_intent_planner' => 'setRequiresIntentPlanner',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'source' => 'setSource',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'candidate_product_families' => 'getCandidateProductFamilies',
        'confidence' => 'getConfidence',
        'detected_product_categories' => 'getDetectedProductCategories',
        'detected_product_families' => 'getDetectedProductFamilies',
        'deterministic' => 'getDeterministic',
        'evidence' => 'getEvidence',
        'input_kind' => 'getInputKind',
        'issues' => 'getIssues',
        'requires_intent_planner' => 'getRequiresIntentPlanner',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'source' => 'getSource',
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

    public const CANDIDATE_PRODUCT_FAMILIES_FLYER = 'flyer';
    public const CANDIDATE_PRODUCT_FAMILIES_LEAFLET = 'leaflet';
    public const CANDIDATE_PRODUCT_FAMILIES_FOLDED_LEAFLET = 'folded_leaflet';
    public const CANDIDATE_PRODUCT_FAMILIES_APPAREL = 'apparel';
    public const CANDIDATE_PRODUCT_FAMILIES_BUSINESS_CARD = 'business_card';
    public const CANDIDATE_PRODUCT_FAMILIES_LOYALTY_CARD = 'loyalty_card';
    public const CANDIDATE_PRODUCT_FAMILIES_POSTCARD = 'postcard';
    public const CANDIDATE_PRODUCT_FAMILIES_POSTER = 'poster';
    public const CANDIDATE_PRODUCT_FAMILIES_STICKER = 'sticker';
    public const CANDIDATE_PRODUCT_FAMILIES_LABEL = 'label';
    public const CANDIDATE_PRODUCT_FAMILIES_BOOKLET = 'booklet';
    public const CANDIDATE_PRODUCT_FAMILIES_BOOK = 'book';
    public const CANDIDATE_PRODUCT_FAMILIES_DOCUMENT = 'document';
    public const CANDIDATE_PRODUCT_FAMILIES_CARD = 'card';
    public const CANDIDATE_PRODUCT_FAMILIES_CERTIFICATE = 'certificate';
    public const CANDIDATE_PRODUCT_FAMILIES_RACE_BIB = 'race_bib';
    public const CANDIDATE_PRODUCT_FAMILIES_STATIONERY = 'stationery';
    public const CANDIDATE_PRODUCT_FAMILIES_BOOKMARK = 'bookmark';
    public const CANDIDATE_PRODUCT_FAMILIES_PRESENTATION_FOLDER = 'presentation_folder';
    public const CANDIDATE_PRODUCT_FAMILIES_T_SHIRT = 't_shirt';
    public const CANDIDATE_PRODUCT_FAMILIES_HOODIE = 'hoodie';
    public const CANDIDATE_PRODUCT_FAMILIES_SWEATSHIRT = 'sweatshirt';
    public const CANDIDATE_PRODUCT_FAMILIES_POLO_SHIRT = 'polo_shirt';
    public const CANDIDATE_PRODUCT_FAMILIES_JACKET = 'jacket';
    public const CANDIDATE_PRODUCT_FAMILIES_CAP = 'cap';
    public const CANDIDATE_PRODUCT_FAMILIES_BEANIE = 'beanie';
    public const CANDIDATE_PRODUCT_FAMILIES_WORKWEAR = 'workwear';
    public const CANDIDATE_PRODUCT_FAMILIES_TEXTILE_ACCESSORY = 'textile_accessory';
    public const CANDIDATE_PRODUCT_FAMILIES_CUSHION = 'cushion';
    public const CANDIDATE_PRODUCT_FAMILIES_CUSHION_COVER = 'cushion_cover';
    public const CANDIDATE_PRODUCT_FAMILIES_BEDDING = 'bedding';
    public const CANDIDATE_PRODUCT_FAMILIES_CURTAIN = 'curtain';
    public const CANDIDATE_PRODUCT_FAMILIES_TEA_TOWEL = 'tea_towel';
    public const CANDIDATE_PRODUCT_FAMILIES_BLANKET = 'blanket';
    public const CANDIDATE_PRODUCT_FAMILIES_FABRIC_BY_METRE = 'fabric_by_metre';
    public const CANDIDATE_PRODUCT_FAMILIES_TABLECLOTH = 'tablecloth';
    public const CANDIDATE_PRODUCT_FAMILIES_HOMEWARE = 'homeware';
    public const CANDIDATE_PRODUCT_FAMILIES_PEN = 'pen';
    public const CANDIDATE_PRODUCT_FAMILIES_MUG = 'mug';
    public const CANDIDATE_PRODUCT_FAMILIES_WATER_BOTTLE = 'water_bottle';
    public const CANDIDATE_PRODUCT_FAMILIES_GOLF_BALL = 'golf_ball';
    public const CANDIDATE_PRODUCT_FAMILIES_UMBRELLA = 'umbrella';
    public const CANDIDATE_PRODUCT_FAMILIES_BAG = 'bag';
    public const CANDIDATE_PRODUCT_FAMILIES_NOTEBOOK = 'notebook';
    public const CANDIDATE_PRODUCT_FAMILIES_LANYARD = 'lanyard';
    public const CANDIDATE_PRODUCT_FAMILIES_KEYRING = 'keyring';
    public const CANDIDATE_PRODUCT_FAMILIES_PROMOTIONAL_PRODUCT = 'promotional_product';
    public const CANDIDATE_PRODUCT_FAMILIES_UNKNOWN = 'unknown';
    public const DETECTED_PRODUCT_CATEGORIES_COMMERCIAL_PRINT = 'commercial_print';
    public const DETECTED_PRODUCT_CATEGORIES_APPAREL = 'apparel';
    public const DETECTED_PRODUCT_CATEGORIES_FABRIC_HOMEWARES = 'fabric_homewares';
    public const DETECTED_PRODUCT_CATEGORIES_PROMOTIONAL_GOODS = 'promotional_goods';
    public const DETECTED_PRODUCT_CATEGORIES_UNKNOWN = 'unknown';
    public const DETECTED_PRODUCT_FAMILIES_FLYER = 'flyer';
    public const DETECTED_PRODUCT_FAMILIES_LEAFLET = 'leaflet';
    public const DETECTED_PRODUCT_FAMILIES_FOLDED_LEAFLET = 'folded_leaflet';
    public const DETECTED_PRODUCT_FAMILIES_APPAREL = 'apparel';
    public const DETECTED_PRODUCT_FAMILIES_BUSINESS_CARD = 'business_card';
    public const DETECTED_PRODUCT_FAMILIES_LOYALTY_CARD = 'loyalty_card';
    public const DETECTED_PRODUCT_FAMILIES_POSTCARD = 'postcard';
    public const DETECTED_PRODUCT_FAMILIES_POSTER = 'poster';
    public const DETECTED_PRODUCT_FAMILIES_STICKER = 'sticker';
    public const DETECTED_PRODUCT_FAMILIES_LABEL = 'label';
    public const DETECTED_PRODUCT_FAMILIES_BOOKLET = 'booklet';
    public const DETECTED_PRODUCT_FAMILIES_BOOK = 'book';
    public const DETECTED_PRODUCT_FAMILIES_DOCUMENT = 'document';
    public const DETECTED_PRODUCT_FAMILIES_CARD = 'card';
    public const DETECTED_PRODUCT_FAMILIES_CERTIFICATE = 'certificate';
    public const DETECTED_PRODUCT_FAMILIES_RACE_BIB = 'race_bib';
    public const DETECTED_PRODUCT_FAMILIES_STATIONERY = 'stationery';
    public const DETECTED_PRODUCT_FAMILIES_BOOKMARK = 'bookmark';
    public const DETECTED_PRODUCT_FAMILIES_PRESENTATION_FOLDER = 'presentation_folder';
    public const DETECTED_PRODUCT_FAMILIES_T_SHIRT = 't_shirt';
    public const DETECTED_PRODUCT_FAMILIES_HOODIE = 'hoodie';
    public const DETECTED_PRODUCT_FAMILIES_SWEATSHIRT = 'sweatshirt';
    public const DETECTED_PRODUCT_FAMILIES_POLO_SHIRT = 'polo_shirt';
    public const DETECTED_PRODUCT_FAMILIES_JACKET = 'jacket';
    public const DETECTED_PRODUCT_FAMILIES_CAP = 'cap';
    public const DETECTED_PRODUCT_FAMILIES_BEANIE = 'beanie';
    public const DETECTED_PRODUCT_FAMILIES_WORKWEAR = 'workwear';
    public const DETECTED_PRODUCT_FAMILIES_TEXTILE_ACCESSORY = 'textile_accessory';
    public const DETECTED_PRODUCT_FAMILIES_CUSHION = 'cushion';
    public const DETECTED_PRODUCT_FAMILIES_CUSHION_COVER = 'cushion_cover';
    public const DETECTED_PRODUCT_FAMILIES_BEDDING = 'bedding';
    public const DETECTED_PRODUCT_FAMILIES_CURTAIN = 'curtain';
    public const DETECTED_PRODUCT_FAMILIES_TEA_TOWEL = 'tea_towel';
    public const DETECTED_PRODUCT_FAMILIES_BLANKET = 'blanket';
    public const DETECTED_PRODUCT_FAMILIES_FABRIC_BY_METRE = 'fabric_by_metre';
    public const DETECTED_PRODUCT_FAMILIES_TABLECLOTH = 'tablecloth';
    public const DETECTED_PRODUCT_FAMILIES_HOMEWARE = 'homeware';
    public const DETECTED_PRODUCT_FAMILIES_PEN = 'pen';
    public const DETECTED_PRODUCT_FAMILIES_MUG = 'mug';
    public const DETECTED_PRODUCT_FAMILIES_WATER_BOTTLE = 'water_bottle';
    public const DETECTED_PRODUCT_FAMILIES_GOLF_BALL = 'golf_ball';
    public const DETECTED_PRODUCT_FAMILIES_UMBRELLA = 'umbrella';
    public const DETECTED_PRODUCT_FAMILIES_BAG = 'bag';
    public const DETECTED_PRODUCT_FAMILIES_NOTEBOOK = 'notebook';
    public const DETECTED_PRODUCT_FAMILIES_LANYARD = 'lanyard';
    public const DETECTED_PRODUCT_FAMILIES_KEYRING = 'keyring';
    public const DETECTED_PRODUCT_FAMILIES_PROMOTIONAL_PRODUCT = 'promotional_product';
    public const DETECTED_PRODUCT_FAMILIES_UNKNOWN = 'unknown';
    public const DETERMINISTIC_TRUE = 'true';
    public const INPUT_KIND_PRODUCT_LED = 'product_led';
    public const INPUT_KIND_OUTCOME_LED = 'outcome_led';
    public const INPUT_KIND_MIXED = 'mixed';
    public const INPUT_KIND_NEEDS_REVIEW = 'needs_review';
    public const SCHEMA_NAME_JAWWWS_INTENT_CLASSIFICATION_RESPONSE = 'jawwws.intent_classification_response';
    public const STATUS_CLASSIFIED = 'classified';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCandidateProductFamiliesAllowableValues()
    {
        return [
            self::CANDIDATE_PRODUCT_FAMILIES_FLYER,
            self::CANDIDATE_PRODUCT_FAMILIES_LEAFLET,
            self::CANDIDATE_PRODUCT_FAMILIES_FOLDED_LEAFLET,
            self::CANDIDATE_PRODUCT_FAMILIES_APPAREL,
            self::CANDIDATE_PRODUCT_FAMILIES_BUSINESS_CARD,
            self::CANDIDATE_PRODUCT_FAMILIES_LOYALTY_CARD,
            self::CANDIDATE_PRODUCT_FAMILIES_POSTCARD,
            self::CANDIDATE_PRODUCT_FAMILIES_POSTER,
            self::CANDIDATE_PRODUCT_FAMILIES_STICKER,
            self::CANDIDATE_PRODUCT_FAMILIES_LABEL,
            self::CANDIDATE_PRODUCT_FAMILIES_BOOKLET,
            self::CANDIDATE_PRODUCT_FAMILIES_BOOK,
            self::CANDIDATE_PRODUCT_FAMILIES_DOCUMENT,
            self::CANDIDATE_PRODUCT_FAMILIES_CARD,
            self::CANDIDATE_PRODUCT_FAMILIES_CERTIFICATE,
            self::CANDIDATE_PRODUCT_FAMILIES_RACE_BIB,
            self::CANDIDATE_PRODUCT_FAMILIES_STATIONERY,
            self::CANDIDATE_PRODUCT_FAMILIES_BOOKMARK,
            self::CANDIDATE_PRODUCT_FAMILIES_PRESENTATION_FOLDER,
            self::CANDIDATE_PRODUCT_FAMILIES_T_SHIRT,
            self::CANDIDATE_PRODUCT_FAMILIES_HOODIE,
            self::CANDIDATE_PRODUCT_FAMILIES_SWEATSHIRT,
            self::CANDIDATE_PRODUCT_FAMILIES_POLO_SHIRT,
            self::CANDIDATE_PRODUCT_FAMILIES_JACKET,
            self::CANDIDATE_PRODUCT_FAMILIES_CAP,
            self::CANDIDATE_PRODUCT_FAMILIES_BEANIE,
            self::CANDIDATE_PRODUCT_FAMILIES_WORKWEAR,
            self::CANDIDATE_PRODUCT_FAMILIES_TEXTILE_ACCESSORY,
            self::CANDIDATE_PRODUCT_FAMILIES_CUSHION,
            self::CANDIDATE_PRODUCT_FAMILIES_CUSHION_COVER,
            self::CANDIDATE_PRODUCT_FAMILIES_BEDDING,
            self::CANDIDATE_PRODUCT_FAMILIES_CURTAIN,
            self::CANDIDATE_PRODUCT_FAMILIES_TEA_TOWEL,
            self::CANDIDATE_PRODUCT_FAMILIES_BLANKET,
            self::CANDIDATE_PRODUCT_FAMILIES_FABRIC_BY_METRE,
            self::CANDIDATE_PRODUCT_FAMILIES_TABLECLOTH,
            self::CANDIDATE_PRODUCT_FAMILIES_HOMEWARE,
            self::CANDIDATE_PRODUCT_FAMILIES_PEN,
            self::CANDIDATE_PRODUCT_FAMILIES_MUG,
            self::CANDIDATE_PRODUCT_FAMILIES_WATER_BOTTLE,
            self::CANDIDATE_PRODUCT_FAMILIES_GOLF_BALL,
            self::CANDIDATE_PRODUCT_FAMILIES_UMBRELLA,
            self::CANDIDATE_PRODUCT_FAMILIES_BAG,
            self::CANDIDATE_PRODUCT_FAMILIES_NOTEBOOK,
            self::CANDIDATE_PRODUCT_FAMILIES_LANYARD,
            self::CANDIDATE_PRODUCT_FAMILIES_KEYRING,
            self::CANDIDATE_PRODUCT_FAMILIES_PROMOTIONAL_PRODUCT,
            self::CANDIDATE_PRODUCT_FAMILIES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetectedProductCategoriesAllowableValues()
    {
        return [
            self::DETECTED_PRODUCT_CATEGORIES_COMMERCIAL_PRINT,
            self::DETECTED_PRODUCT_CATEGORIES_APPAREL,
            self::DETECTED_PRODUCT_CATEGORIES_FABRIC_HOMEWARES,
            self::DETECTED_PRODUCT_CATEGORIES_PROMOTIONAL_GOODS,
            self::DETECTED_PRODUCT_CATEGORIES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetectedProductFamiliesAllowableValues()
    {
        return [
            self::DETECTED_PRODUCT_FAMILIES_FLYER,
            self::DETECTED_PRODUCT_FAMILIES_LEAFLET,
            self::DETECTED_PRODUCT_FAMILIES_FOLDED_LEAFLET,
            self::DETECTED_PRODUCT_FAMILIES_APPAREL,
            self::DETECTED_PRODUCT_FAMILIES_BUSINESS_CARD,
            self::DETECTED_PRODUCT_FAMILIES_LOYALTY_CARD,
            self::DETECTED_PRODUCT_FAMILIES_POSTCARD,
            self::DETECTED_PRODUCT_FAMILIES_POSTER,
            self::DETECTED_PRODUCT_FAMILIES_STICKER,
            self::DETECTED_PRODUCT_FAMILIES_LABEL,
            self::DETECTED_PRODUCT_FAMILIES_BOOKLET,
            self::DETECTED_PRODUCT_FAMILIES_BOOK,
            self::DETECTED_PRODUCT_FAMILIES_DOCUMENT,
            self::DETECTED_PRODUCT_FAMILIES_CARD,
            self::DETECTED_PRODUCT_FAMILIES_CERTIFICATE,
            self::DETECTED_PRODUCT_FAMILIES_RACE_BIB,
            self::DETECTED_PRODUCT_FAMILIES_STATIONERY,
            self::DETECTED_PRODUCT_FAMILIES_BOOKMARK,
            self::DETECTED_PRODUCT_FAMILIES_PRESENTATION_FOLDER,
            self::DETECTED_PRODUCT_FAMILIES_T_SHIRT,
            self::DETECTED_PRODUCT_FAMILIES_HOODIE,
            self::DETECTED_PRODUCT_FAMILIES_SWEATSHIRT,
            self::DETECTED_PRODUCT_FAMILIES_POLO_SHIRT,
            self::DETECTED_PRODUCT_FAMILIES_JACKET,
            self::DETECTED_PRODUCT_FAMILIES_CAP,
            self::DETECTED_PRODUCT_FAMILIES_BEANIE,
            self::DETECTED_PRODUCT_FAMILIES_WORKWEAR,
            self::DETECTED_PRODUCT_FAMILIES_TEXTILE_ACCESSORY,
            self::DETECTED_PRODUCT_FAMILIES_CUSHION,
            self::DETECTED_PRODUCT_FAMILIES_CUSHION_COVER,
            self::DETECTED_PRODUCT_FAMILIES_BEDDING,
            self::DETECTED_PRODUCT_FAMILIES_CURTAIN,
            self::DETECTED_PRODUCT_FAMILIES_TEA_TOWEL,
            self::DETECTED_PRODUCT_FAMILIES_BLANKET,
            self::DETECTED_PRODUCT_FAMILIES_FABRIC_BY_METRE,
            self::DETECTED_PRODUCT_FAMILIES_TABLECLOTH,
            self::DETECTED_PRODUCT_FAMILIES_HOMEWARE,
            self::DETECTED_PRODUCT_FAMILIES_PEN,
            self::DETECTED_PRODUCT_FAMILIES_MUG,
            self::DETECTED_PRODUCT_FAMILIES_WATER_BOTTLE,
            self::DETECTED_PRODUCT_FAMILIES_GOLF_BALL,
            self::DETECTED_PRODUCT_FAMILIES_UMBRELLA,
            self::DETECTED_PRODUCT_FAMILIES_BAG,
            self::DETECTED_PRODUCT_FAMILIES_NOTEBOOK,
            self::DETECTED_PRODUCT_FAMILIES_LANYARD,
            self::DETECTED_PRODUCT_FAMILIES_KEYRING,
            self::DETECTED_PRODUCT_FAMILIES_PROMOTIONAL_PRODUCT,
            self::DETECTED_PRODUCT_FAMILIES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeterministicAllowableValues()
    {
        return [
            self::DETERMINISTIC_TRUE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputKindAllowableValues()
    {
        return [
            self::INPUT_KIND_PRODUCT_LED,
            self::INPUT_KIND_OUTCOME_LED,
            self::INPUT_KIND_MIXED,
            self::INPUT_KIND_NEEDS_REVIEW,
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
            self::SCHEMA_NAME_JAWWWS_INTENT_CLASSIFICATION_RESPONSE,
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
            self::STATUS_CLASSIFIED,
            self::STATUS_NEEDS_REVIEW,
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
        $this->setIfExists('candidate_product_families', $data ?? [], null);
        $this->setIfExists('confidence', $data ?? [], null);
        $this->setIfExists('detected_product_categories', $data ?? [], null);
        $this->setIfExists('detected_product_families', $data ?? [], null);
        $this->setIfExists('deterministic', $data ?? [], true);
        $this->setIfExists('evidence', $data ?? [], null);
        $this->setIfExists('input_kind', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('requires_intent_planner', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'jawwws.intent_classification_response');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
        $this->setIfExists('source', $data ?? [], null);
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

        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        if (($this->container['confidence'] > 1.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 1.0.";
        }

        if (($this->container['confidence'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.0.";
        }

        $allowedValues = $this->getDeterministicAllowableValues();
        if (!is_null($this->container['deterministic']) && !in_array($this->container['deterministic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deterministic', must be one of '%s'",
                $this->container['deterministic'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['input_kind'] === null) {
            $invalidProperties[] = "'input_kind' can't be null";
        }
        $allowedValues = $this->getInputKindAllowableValues();
        if (!is_null($this->container['input_kind']) && !in_array($this->container['input_kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_kind', must be one of '%s'",
                $this->container['input_kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['requires_intent_planner'] === null) {
            $invalidProperties[] = "'requires_intent_planner' can't be null";
        }
        $allowedValues = $this->getSchemaNameAllowableValues();
        if (!is_null($this->container['schema_name']) && !in_array($this->container['schema_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schema_name', must be one of '%s'",
                $this->container['schema_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * Gets candidate_product_families
     *
     * @return string[]|null
     */
    public function getCandidateProductFamilies()
    {
        return $this->container['candidate_product_families'];
    }

    /**
     * Sets candidate_product_families
     *
     * @param string[]|null $candidate_product_families candidate_product_families
     *
     * @return self
     */
    public function setCandidateProductFamilies($candidate_product_families)
    {
        if (is_null($candidate_product_families)) {
            throw new \InvalidArgumentException('non-nullable candidate_product_families cannot be null');
        }
        $allowedValues = $this->getCandidateProductFamiliesAllowableValues();
        if (array_diff($candidate_product_families, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'candidate_product_families', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['candidate_product_families'] = $candidate_product_families;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return float
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param float $confidence confidence
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }

        if (($confidence > 1.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling IntentClassificationResponse., must be smaller than or equal to 1.0.');
        }
        if (($confidence < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $confidence when calling IntentClassificationResponse., must be bigger than or equal to 0.0.');
        }

        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets detected_product_categories
     *
     * @return string[]|null
     */
    public function getDetectedProductCategories()
    {
        return $this->container['detected_product_categories'];
    }

    /**
     * Sets detected_product_categories
     *
     * @param string[]|null $detected_product_categories detected_product_categories
     *
     * @return self
     */
    public function setDetectedProductCategories($detected_product_categories)
    {
        if (is_null($detected_product_categories)) {
            throw new \InvalidArgumentException('non-nullable detected_product_categories cannot be null');
        }
        $allowedValues = $this->getDetectedProductCategoriesAllowableValues();
        if (array_diff($detected_product_categories, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'detected_product_categories', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['detected_product_categories'] = $detected_product_categories;

        return $this;
    }

    /**
     * Gets detected_product_families
     *
     * @return string[]|null
     */
    public function getDetectedProductFamilies()
    {
        return $this->container['detected_product_families'];
    }

    /**
     * Sets detected_product_families
     *
     * @param string[]|null $detected_product_families detected_product_families
     *
     * @return self
     */
    public function setDetectedProductFamilies($detected_product_families)
    {
        if (is_null($detected_product_families)) {
            throw new \InvalidArgumentException('non-nullable detected_product_families cannot be null');
        }
        $allowedValues = $this->getDetectedProductFamiliesAllowableValues();
        if (array_diff($detected_product_families, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'detected_product_families', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['detected_product_families'] = $detected_product_families;

        return $this;
    }

    /**
     * Gets deterministic
     *
     * @return bool|null
     */
    public function getDeterministic()
    {
        return $this->container['deterministic'];
    }

    /**
     * Sets deterministic
     *
     * @param bool|null $deterministic deterministic
     *
     * @return self
     */
    public function setDeterministic($deterministic)
    {
        if (is_null($deterministic)) {
            throw new \InvalidArgumentException('non-nullable deterministic cannot be null');
        }
        $allowedValues = $this->getDeterministicAllowableValues();
        if (!in_array($deterministic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deterministic', must be one of '%s'",
                    $deterministic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deterministic'] = $deterministic;

        return $this;
    }

    /**
     * Gets evidence
     *
     * @return \Jawwws\Gnaww\Model\IntentPlanEvidence[]|null
     */
    public function getEvidence()
    {
        return $this->container['evidence'];
    }

    /**
     * Sets evidence
     *
     * @param \Jawwws\Gnaww\Model\IntentPlanEvidence[]|null $evidence evidence
     *
     * @return self
     */
    public function setEvidence($evidence)
    {
        if (is_null($evidence)) {
            throw new \InvalidArgumentException('non-nullable evidence cannot be null');
        }
        $this->container['evidence'] = $evidence;

        return $this;
    }

    /**
     * Gets input_kind
     *
     * @return string
     */
    public function getInputKind()
    {
        return $this->container['input_kind'];
    }

    /**
     * Sets input_kind
     *
     * @param string $input_kind input_kind
     *
     * @return self
     */
    public function setInputKind($input_kind)
    {
        if (is_null($input_kind)) {
            throw new \InvalidArgumentException('non-nullable input_kind cannot be null');
        }
        $allowedValues = $this->getInputKindAllowableValues();
        if (!in_array($input_kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input_kind', must be one of '%s'",
                    $input_kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input_kind'] = $input_kind;

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
     * Gets requires_intent_planner
     *
     * @return bool
     */
    public function getRequiresIntentPlanner()
    {
        return $this->container['requires_intent_planner'];
    }

    /**
     * Sets requires_intent_planner
     *
     * @param bool $requires_intent_planner requires_intent_planner
     *
     * @return self
     */
    public function setRequiresIntentPlanner($requires_intent_planner)
    {
        if (is_null($requires_intent_planner)) {
            throw new \InvalidArgumentException('non-nullable requires_intent_planner cannot be null');
        }
        $this->container['requires_intent_planner'] = $requires_intent_planner;

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
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Jawwws\Gnaww\Model\SourceInput
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Jawwws\Gnaww\Model\SourceInput $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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
