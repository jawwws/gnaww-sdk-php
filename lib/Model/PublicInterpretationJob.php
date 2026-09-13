<?php
/**
 * PublicInterpretationJob
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
 * PublicInterpretationJob Class Doc Comment
 *
 * @category Class
 * @description One independently producible Job Proposal or canonical Job state.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicInterpretationJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicInterpretationJob';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'context' => '\Jawwws\Gnaww\Model\PublicJobContextFact[]',
        'controlled_defaults' => '\Jawwws\Gnaww\Model\PublicControlledProductionDefault[]',
        'fulfilment' => '\Jawwws\Gnaww\Model\PublicInterpretationFulfilmentState',
        'gjs' => '\Jawwws\Gnaww\Model\Gjs1',
        'grounded_product_summary' => 'string',
        'issues' => '\Jawwws\Gnaww\Model\IssueSet',
        'job_id' => 'string',
        'next_actions' => 'string[]',
        'product_family' => 'string',
        'product_meaning_review' => '\Jawwws\Gnaww\Model\GroundedProductMeaning[]',
        'questions' => '\Jawwws\Gnaww\Model\PublicInterpretationQuestion[]',
        'recipe' => '\Jawwws\Gnaww\Model\PublicRecipeState',
        'specmatch' => '\Jawwws\Gnaww\Model\PublicSpecMatchReadiness',
        'status' => 'string',
        'structure' => '\Jawwws\Gnaww\Model\PublicJobStructure[]',
        'understood_requirement' => '\Jawwws\Gnaww\Model\PublicUnderstoodRequirement',
        'universe_match_ready' => 'bool',
        'unresolved_fields' => 'string[]',
        'use_condition_review' => '\Jawwws\Gnaww\Model\PublicUseConditionReview[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'context' => null,
        'controlled_defaults' => null,
        'fulfilment' => null,
        'gjs' => null,
        'grounded_product_summary' => null,
        'issues' => null,
        'job_id' => null,
        'next_actions' => null,
        'product_family' => null,
        'product_meaning_review' => null,
        'questions' => null,
        'recipe' => null,
        'specmatch' => null,
        'status' => null,
        'structure' => null,
        'understood_requirement' => null,
        'universe_match_ready' => null,
        'unresolved_fields' => null,
        'use_condition_review' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'context' => false,
        'controlled_defaults' => false,
        'fulfilment' => false,
        'gjs' => true,
        'grounded_product_summary' => true,
        'issues' => false,
        'job_id' => false,
        'next_actions' => false,
        'product_family' => true,
        'product_meaning_review' => false,
        'questions' => false,
        'recipe' => false,
        'specmatch' => false,
        'status' => false,
        'structure' => false,
        'understood_requirement' => true,
        'universe_match_ready' => false,
        'unresolved_fields' => false,
        'use_condition_review' => false
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
        'context' => 'context',
        'controlled_defaults' => 'controlled_defaults',
        'fulfilment' => 'fulfilment',
        'gjs' => 'gjs',
        'grounded_product_summary' => 'grounded_product_summary',
        'issues' => 'issues',
        'job_id' => 'job_id',
        'next_actions' => 'next_actions',
        'product_family' => 'product_family',
        'product_meaning_review' => 'product_meaning_review',
        'questions' => 'questions',
        'recipe' => 'recipe',
        'specmatch' => 'specmatch',
        'status' => 'status',
        'structure' => 'structure',
        'understood_requirement' => 'understood_requirement',
        'universe_match_ready' => 'universe_match_ready',
        'unresolved_fields' => 'unresolved_fields',
        'use_condition_review' => 'use_condition_review'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'controlled_defaults' => 'setControlledDefaults',
        'fulfilment' => 'setFulfilment',
        'gjs' => 'setGjs',
        'grounded_product_summary' => 'setGroundedProductSummary',
        'issues' => 'setIssues',
        'job_id' => 'setJobId',
        'next_actions' => 'setNextActions',
        'product_family' => 'setProductFamily',
        'product_meaning_review' => 'setProductMeaningReview',
        'questions' => 'setQuestions',
        'recipe' => 'setRecipe',
        'specmatch' => 'setSpecmatch',
        'status' => 'setStatus',
        'structure' => 'setStructure',
        'understood_requirement' => 'setUnderstoodRequirement',
        'universe_match_ready' => 'setUniverseMatchReady',
        'unresolved_fields' => 'setUnresolvedFields',
        'use_condition_review' => 'setUseConditionReview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'controlled_defaults' => 'getControlledDefaults',
        'fulfilment' => 'getFulfilment',
        'gjs' => 'getGjs',
        'grounded_product_summary' => 'getGroundedProductSummary',
        'issues' => 'getIssues',
        'job_id' => 'getJobId',
        'next_actions' => 'getNextActions',
        'product_family' => 'getProductFamily',
        'product_meaning_review' => 'getProductMeaningReview',
        'questions' => 'getQuestions',
        'recipe' => 'getRecipe',
        'specmatch' => 'getSpecmatch',
        'status' => 'getStatus',
        'structure' => 'getStructure',
        'understood_requirement' => 'getUnderstoodRequirement',
        'universe_match_ready' => 'getUniverseMatchReady',
        'unresolved_fields' => 'getUnresolvedFields',
        'use_condition_review' => 'getUseConditionReview'
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
    public const STATUS_CANONICAL_READY = 'canonical_ready';
    public const STATUS_REVIEW_REQUIRED = 'review_required';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_FAILED = 'failed';

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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CANONICAL_READY,
            self::STATUS_REVIEW_REQUIRED,
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
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('controlled_defaults', $data ?? [], null);
        $this->setIfExists('fulfilment', $data ?? [], null);
        $this->setIfExists('gjs', $data ?? [], null);
        $this->setIfExists('grounded_product_summary', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('next_actions', $data ?? [], null);
        $this->setIfExists('product_family', $data ?? [], null);
        $this->setIfExists('product_meaning_review', $data ?? [], null);
        $this->setIfExists('questions', $data ?? [], null);
        $this->setIfExists('recipe', $data ?? [], null);
        $this->setIfExists('specmatch', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('structure', $data ?? [], null);
        $this->setIfExists('understood_requirement', $data ?? [], null);
        $this->setIfExists('universe_match_ready', $data ?? [], false);
        $this->setIfExists('unresolved_fields', $data ?? [], null);
        $this->setIfExists('use_condition_review', $data ?? [], null);
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

        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if (!preg_match("/^job_[a-z0-9][a-z0-9_-]*$/", $this->container['job_id'])) {
            $invalidProperties[] = "invalid value for 'job_id', must be conform to the pattern /^job_[a-z0-9][a-z0-9_-]*$/.";
        }

        $allowedValues = $this->getProductFamilyAllowableValues();
        if (!is_null($this->container['product_family']) && !in_array($this->container['product_family'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_family', must be one of '%s'",
                $this->container['product_family'],
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
     * Gets context
     *
     * @return \Jawwws\Gnaww\Model\PublicJobContextFact[]|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \Jawwws\Gnaww\Model\PublicJobContextFact[]|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets controlled_defaults
     *
     * @return \Jawwws\Gnaww\Model\PublicControlledProductionDefault[]|null
     */
    public function getControlledDefaults()
    {
        return $this->container['controlled_defaults'];
    }

    /**
     * Sets controlled_defaults
     *
     * @param \Jawwws\Gnaww\Model\PublicControlledProductionDefault[]|null $controlled_defaults controlled_defaults
     *
     * @return self
     */
    public function setControlledDefaults($controlled_defaults)
    {
        if (is_null($controlled_defaults)) {
            throw new \InvalidArgumentException('non-nullable controlled_defaults cannot be null');
        }
        $this->container['controlled_defaults'] = $controlled_defaults;

        return $this;
    }

    /**
     * Gets fulfilment
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationFulfilmentState|null
     */
    public function getFulfilment()
    {
        return $this->container['fulfilment'];
    }

    /**
     * Sets fulfilment
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationFulfilmentState|null $fulfilment fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment)
    {
        if (is_null($fulfilment)) {
            throw new \InvalidArgumentException('non-nullable fulfilment cannot be null');
        }
        $this->container['fulfilment'] = $fulfilment;

        return $this;
    }

    /**
     * Gets gjs
     *
     * @return \Jawwws\Gnaww\Model\Gjs1|null
     */
    public function getGjs()
    {
        return $this->container['gjs'];
    }

    /**
     * Sets gjs
     *
     * @param \Jawwws\Gnaww\Model\Gjs1|null $gjs gjs
     *
     * @return self
     */
    public function setGjs($gjs)
    {
        if (is_null($gjs)) {
            array_push($this->openAPINullablesSetToNull, 'gjs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gjs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gjs'] = $gjs;

        return $this;
    }

    /**
     * Gets grounded_product_summary
     *
     * @return string|null
     */
    public function getGroundedProductSummary()
    {
        return $this->container['grounded_product_summary'];
    }

    /**
     * Sets grounded_product_summary
     *
     * @param string|null $grounded_product_summary grounded_product_summary
     *
     * @return self
     */
    public function setGroundedProductSummary($grounded_product_summary)
    {
        if (is_null($grounded_product_summary)) {
            array_push($this->openAPINullablesSetToNull, 'grounded_product_summary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grounded_product_summary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grounded_product_summary'] = $grounded_product_summary;

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
     * Gets job_id
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param string $job_id job_id
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        if (is_null($job_id)) {
            throw new \InvalidArgumentException('non-nullable job_id cannot be null');
        }

        if ((!preg_match("/^job_[a-z0-9][a-z0-9_-]*$/", ObjectSerializer::toString($job_id)))) {
            throw new \InvalidArgumentException("invalid value for \$job_id when calling PublicInterpretationJob., must conform to the pattern /^job_[a-z0-9][a-z0-9_-]*$/.");
        }

        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets next_actions
     *
     * @return string[]|null
     */
    public function getNextActions()
    {
        return $this->container['next_actions'];
    }

    /**
     * Sets next_actions
     *
     * @param string[]|null $next_actions next_actions
     *
     * @return self
     */
    public function setNextActions($next_actions)
    {
        if (is_null($next_actions)) {
            throw new \InvalidArgumentException('non-nullable next_actions cannot be null');
        }
        $this->container['next_actions'] = $next_actions;

        return $this;
    }

    /**
     * Gets product_family
     *
     * @return string|null
     */
    public function getProductFamily()
    {
        return $this->container['product_family'];
    }

    /**
     * Sets product_family
     *
     * @param string|null $product_family product_family
     *
     * @return self
     */
    public function setProductFamily($product_family)
    {
        if (is_null($product_family)) {
            array_push($this->openAPINullablesSetToNull, 'product_family');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_family', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getProductFamilyAllowableValues();
        if (!is_null($product_family) && !in_array($product_family, $allowedValues, true)) {
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
     * Gets product_meaning_review
     *
     * @return \Jawwws\Gnaww\Model\GroundedProductMeaning[]|null
     */
    public function getProductMeaningReview()
    {
        return $this->container['product_meaning_review'];
    }

    /**
     * Sets product_meaning_review
     *
     * @param \Jawwws\Gnaww\Model\GroundedProductMeaning[]|null $product_meaning_review product_meaning_review
     *
     * @return self
     */
    public function setProductMeaningReview($product_meaning_review)
    {
        if (is_null($product_meaning_review)) {
            throw new \InvalidArgumentException('non-nullable product_meaning_review cannot be null');
        }
        $this->container['product_meaning_review'] = $product_meaning_review;

        return $this;
    }

    /**
     * Gets questions
     *
     * @return \Jawwws\Gnaww\Model\PublicInterpretationQuestion[]|null
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     *
     * @param \Jawwws\Gnaww\Model\PublicInterpretationQuestion[]|null $questions questions
     *
     * @return self
     */
    public function setQuestions($questions)
    {
        if (is_null($questions)) {
            throw new \InvalidArgumentException('non-nullable questions cannot be null');
        }
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * Gets recipe
     *
     * @return \Jawwws\Gnaww\Model\PublicRecipeState|null
     */
    public function getRecipe()
    {
        return $this->container['recipe'];
    }

    /**
     * Sets recipe
     *
     * @param \Jawwws\Gnaww\Model\PublicRecipeState|null $recipe recipe
     *
     * @return self
     */
    public function setRecipe($recipe)
    {
        if (is_null($recipe)) {
            throw new \InvalidArgumentException('non-nullable recipe cannot be null');
        }
        $this->container['recipe'] = $recipe;

        return $this;
    }

    /**
     * Gets specmatch
     *
     * @return \Jawwws\Gnaww\Model\PublicSpecMatchReadiness|null
     */
    public function getSpecmatch()
    {
        return $this->container['specmatch'];
    }

    /**
     * Sets specmatch
     *
     * @param \Jawwws\Gnaww\Model\PublicSpecMatchReadiness|null $specmatch specmatch
     *
     * @return self
     */
    public function setSpecmatch($specmatch)
    {
        if (is_null($specmatch)) {
            throw new \InvalidArgumentException('non-nullable specmatch cannot be null');
        }
        $this->container['specmatch'] = $specmatch;

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
     * Gets structure
     *
     * @return \Jawwws\Gnaww\Model\PublicJobStructure[]|null
     */
    public function getStructure()
    {
        return $this->container['structure'];
    }

    /**
     * Sets structure
     *
     * @param \Jawwws\Gnaww\Model\PublicJobStructure[]|null $structure structure
     *
     * @return self
     */
    public function setStructure($structure)
    {
        if (is_null($structure)) {
            throw new \InvalidArgumentException('non-nullable structure cannot be null');
        }
        $this->container['structure'] = $structure;

        return $this;
    }

    /**
     * Gets understood_requirement
     *
     * @return \Jawwws\Gnaww\Model\PublicUnderstoodRequirement|null
     */
    public function getUnderstoodRequirement()
    {
        return $this->container['understood_requirement'];
    }

    /**
     * Sets understood_requirement
     *
     * @param \Jawwws\Gnaww\Model\PublicUnderstoodRequirement|null $understood_requirement understood_requirement
     *
     * @return self
     */
    public function setUnderstoodRequirement($understood_requirement)
    {
        if (is_null($understood_requirement)) {
            array_push($this->openAPINullablesSetToNull, 'understood_requirement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('understood_requirement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['understood_requirement'] = $understood_requirement;

        return $this;
    }

    /**
     * Gets universe_match_ready
     *
     * @return bool|null
     */
    public function getUniverseMatchReady()
    {
        return $this->container['universe_match_ready'];
    }

    /**
     * Sets universe_match_ready
     *
     * @param bool|null $universe_match_ready universe_match_ready
     *
     * @return self
     */
    public function setUniverseMatchReady($universe_match_ready)
    {
        if (is_null($universe_match_ready)) {
            throw new \InvalidArgumentException('non-nullable universe_match_ready cannot be null');
        }
        $this->container['universe_match_ready'] = $universe_match_ready;

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
     * Gets use_condition_review
     *
     * @return \Jawwws\Gnaww\Model\PublicUseConditionReview[]|null
     */
    public function getUseConditionReview()
    {
        return $this->container['use_condition_review'];
    }

    /**
     * Sets use_condition_review
     *
     * @param \Jawwws\Gnaww\Model\PublicUseConditionReview[]|null $use_condition_review use_condition_review
     *
     * @return self
     */
    public function setUseConditionReview($use_condition_review)
    {
        if (is_null($use_condition_review)) {
            throw new \InvalidArgumentException('non-nullable use_condition_review cannot be null');
        }
        $this->container['use_condition_review'] = $use_condition_review;

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
