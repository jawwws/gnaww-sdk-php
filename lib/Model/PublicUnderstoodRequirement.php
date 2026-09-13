<?php
/**
 * PublicUnderstoodRequirement
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
 * PublicUnderstoodRequirement Class Doc Comment
 *
 * @category Class
 * @description Safe non-canonical evidence projection for review-state interpretation.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PublicUnderstoodRequirement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PublicUnderstoodRequirement';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'completion_support_state' => 'string',
        'controlled_defaults' => '\Jawwws\Gnaww\Model\PublicControlledProductionDefault[]',
        'evidence_basis' => 'string',
        'finishings' => '\Jawwws\Gnaww\Model\PublicUnderstoodFinishing[]',
        'print_spec' => '\Jawwws\Gnaww\Model\PublicUnderstoodPrint',
        'product_family' => 'string',
        'product_name' => 'string',
        'quantity_units' => 'int',
        'schema_name' => 'string',
        'schema_version' => 'string',
        'size' => '\Jawwws\Gnaww\Model\PublicUnderstoodSize',
        'substrate' => '\Jawwws\Gnaww\Model\PublicUnderstoodSubstrate',
        'truth_state' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'completion_support_state' => null,
        'controlled_defaults' => null,
        'evidence_basis' => null,
        'finishings' => null,
        'print_spec' => null,
        'product_family' => null,
        'product_name' => null,
        'quantity_units' => null,
        'schema_name' => null,
        'schema_version' => null,
        'size' => null,
        'substrate' => null,
        'truth_state' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'completion_support_state' => true,
        'controlled_defaults' => false,
        'evidence_basis' => false,
        'finishings' => false,
        'print_spec' => true,
        'product_family' => true,
        'product_name' => true,
        'quantity_units' => true,
        'schema_name' => false,
        'schema_version' => false,
        'size' => true,
        'substrate' => true,
        'truth_state' => false
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
        'completion_support_state' => 'completion_support_state',
        'controlled_defaults' => 'controlled_defaults',
        'evidence_basis' => 'evidence_basis',
        'finishings' => 'finishings',
        'print_spec' => 'print_spec',
        'product_family' => 'product_family',
        'product_name' => 'product_name',
        'quantity_units' => 'quantity_units',
        'schema_name' => 'schema_name',
        'schema_version' => 'schema_version',
        'size' => 'size',
        'substrate' => 'substrate',
        'truth_state' => 'truth_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion_support_state' => 'setCompletionSupportState',
        'controlled_defaults' => 'setControlledDefaults',
        'evidence_basis' => 'setEvidenceBasis',
        'finishings' => 'setFinishings',
        'print_spec' => 'setPrintSpec',
        'product_family' => 'setProductFamily',
        'product_name' => 'setProductName',
        'quantity_units' => 'setQuantityUnits',
        'schema_name' => 'setSchemaName',
        'schema_version' => 'setSchemaVersion',
        'size' => 'setSize',
        'substrate' => 'setSubstrate',
        'truth_state' => 'setTruthState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion_support_state' => 'getCompletionSupportState',
        'controlled_defaults' => 'getControlledDefaults',
        'evidence_basis' => 'getEvidenceBasis',
        'finishings' => 'getFinishings',
        'print_spec' => 'getPrintSpec',
        'product_family' => 'getProductFamily',
        'product_name' => 'getProductName',
        'quantity_units' => 'getQuantityUnits',
        'schema_name' => 'getSchemaName',
        'schema_version' => 'getSchemaVersion',
        'size' => 'getSize',
        'substrate' => 'getSubstrate',
        'truth_state' => 'getTruthState'
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

    public const COMPLETION_SUPPORT_STATE_FULLY_SUPPORTED = 'fully_supported';
    public const COMPLETION_SUPPORT_STATE_SUPPORTED_WITH_CLARIFICATION = 'supported_with_clarification';
    public const COMPLETION_SUPPORT_STATE_RECOGNISED_NOT_CANONICALISABLE = 'recognised_not_canonicalisable';
    public const COMPLETION_SUPPORT_STATE_UNSUPPORTED = 'unsupported';
    public const EVIDENCE_BASIS_GNAWW_DETERMINISTIC_INTERPRETATION = 'gnaww_deterministic_interpretation';
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
    public const SCHEMA_NAME_GNAWW_UNDERSTOOD_REQUIREMENT = 'gnaww.understood_requirement';
    public const SCHEMA_VERSION__0_1 = '0.1';
    public const TRUTH_STATE_UNDERSTOOD_NOT_CANONICAL = 'understood_not_canonical';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompletionSupportStateAllowableValues()
    {
        return [
            self::COMPLETION_SUPPORT_STATE_FULLY_SUPPORTED,
            self::COMPLETION_SUPPORT_STATE_SUPPORTED_WITH_CLARIFICATION,
            self::COMPLETION_SUPPORT_STATE_RECOGNISED_NOT_CANONICALISABLE,
            self::COMPLETION_SUPPORT_STATE_UNSUPPORTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEvidenceBasisAllowableValues()
    {
        return [
            self::EVIDENCE_BASIS_GNAWW_DETERMINISTIC_INTERPRETATION,
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
            self::SCHEMA_NAME_GNAWW_UNDERSTOOD_REQUIREMENT,
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
            self::SCHEMA_VERSION__0_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTruthStateAllowableValues()
    {
        return [
            self::TRUTH_STATE_UNDERSTOOD_NOT_CANONICAL,
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
        $this->setIfExists('completion_support_state', $data ?? [], null);
        $this->setIfExists('controlled_defaults', $data ?? [], null);
        $this->setIfExists('evidence_basis', $data ?? [], 'gnaww_deterministic_interpretation');
        $this->setIfExists('finishings', $data ?? [], null);
        $this->setIfExists('print_spec', $data ?? [], null);
        $this->setIfExists('product_family', $data ?? [], null);
        $this->setIfExists('product_name', $data ?? [], null);
        $this->setIfExists('quantity_units', $data ?? [], null);
        $this->setIfExists('schema_name', $data ?? [], 'gnaww.understood_requirement');
        $this->setIfExists('schema_version', $data ?? [], '0.1');
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('substrate', $data ?? [], null);
        $this->setIfExists('truth_state', $data ?? [], 'understood_not_canonical');
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

        $allowedValues = $this->getCompletionSupportStateAllowableValues();
        if (!is_null($this->container['completion_support_state']) && !in_array($this->container['completion_support_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'completion_support_state', must be one of '%s'",
                $this->container['completion_support_state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEvidenceBasisAllowableValues();
        if (!is_null($this->container['evidence_basis']) && !in_array($this->container['evidence_basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'evidence_basis', must be one of '%s'",
                $this->container['evidence_basis'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductFamilyAllowableValues();
        if (!is_null($this->container['product_family']) && !in_array($this->container['product_family'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_family', must be one of '%s'",
                $this->container['product_family'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['quantity_units']) && ($this->container['quantity_units'] <= 0)) {
            $invalidProperties[] = "invalid value for 'quantity_units', must be bigger than 0.";
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

        $allowedValues = $this->getTruthStateAllowableValues();
        if (!is_null($this->container['truth_state']) && !in_array($this->container['truth_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'truth_state', must be one of '%s'",
                $this->container['truth_state'],
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
     * Gets completion_support_state
     *
     * @return string|null
     */
    public function getCompletionSupportState()
    {
        return $this->container['completion_support_state'];
    }

    /**
     * Sets completion_support_state
     *
     * @param string|null $completion_support_state completion_support_state
     *
     * @return self
     */
    public function setCompletionSupportState($completion_support_state)
    {
        if (is_null($completion_support_state)) {
            array_push($this->openAPINullablesSetToNull, 'completion_support_state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completion_support_state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCompletionSupportStateAllowableValues();
        if (!is_null($completion_support_state) && !in_array($completion_support_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'completion_support_state', must be one of '%s'",
                    $completion_support_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['completion_support_state'] = $completion_support_state;

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
     * Gets evidence_basis
     *
     * @return string|null
     */
    public function getEvidenceBasis()
    {
        return $this->container['evidence_basis'];
    }

    /**
     * Sets evidence_basis
     *
     * @param string|null $evidence_basis evidence_basis
     *
     * @return self
     */
    public function setEvidenceBasis($evidence_basis)
    {
        if (is_null($evidence_basis)) {
            throw new \InvalidArgumentException('non-nullable evidence_basis cannot be null');
        }
        $allowedValues = $this->getEvidenceBasisAllowableValues();
        if (!in_array($evidence_basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'evidence_basis', must be one of '%s'",
                    $evidence_basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['evidence_basis'] = $evidence_basis;

        return $this;
    }

    /**
     * Gets finishings
     *
     * @return \Jawwws\Gnaww\Model\PublicUnderstoodFinishing[]|null
     */
    public function getFinishings()
    {
        return $this->container['finishings'];
    }

    /**
     * Sets finishings
     *
     * @param \Jawwws\Gnaww\Model\PublicUnderstoodFinishing[]|null $finishings finishings
     *
     * @return self
     */
    public function setFinishings($finishings)
    {
        if (is_null($finishings)) {
            throw new \InvalidArgumentException('non-nullable finishings cannot be null');
        }
        $this->container['finishings'] = $finishings;

        return $this;
    }

    /**
     * Gets print_spec
     *
     * @return \Jawwws\Gnaww\Model\PublicUnderstoodPrint|null
     */
    public function getPrintSpec()
    {
        return $this->container['print_spec'];
    }

    /**
     * Sets print_spec
     *
     * @param \Jawwws\Gnaww\Model\PublicUnderstoodPrint|null $print_spec print_spec
     *
     * @return self
     */
    public function setPrintSpec($print_spec)
    {
        if (is_null($print_spec)) {
            array_push($this->openAPINullablesSetToNull, 'print_spec');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('print_spec', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['print_spec'] = $print_spec;

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
     * Gets quantity_units
     *
     * @return int|null
     */
    public function getQuantityUnits()
    {
        return $this->container['quantity_units'];
    }

    /**
     * Sets quantity_units
     *
     * @param int|null $quantity_units quantity_units
     *
     * @return self
     */
    public function setQuantityUnits($quantity_units)
    {
        if (is_null($quantity_units)) {
            array_push($this->openAPINullablesSetToNull, 'quantity_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quantity_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($quantity_units) && ($quantity_units <= 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity_units when calling PublicUnderstoodRequirement., must be bigger than 0.');
        }

        $this->container['quantity_units'] = $quantity_units;

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
     * Gets size
     *
     * @return \Jawwws\Gnaww\Model\PublicUnderstoodSize|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Jawwws\Gnaww\Model\PublicUnderstoodSize|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            array_push($this->openAPINullablesSetToNull, 'size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets substrate
     *
     * @return \Jawwws\Gnaww\Model\PublicUnderstoodSubstrate|null
     */
    public function getSubstrate()
    {
        return $this->container['substrate'];
    }

    /**
     * Sets substrate
     *
     * @param \Jawwws\Gnaww\Model\PublicUnderstoodSubstrate|null $substrate substrate
     *
     * @return self
     */
    public function setSubstrate($substrate)
    {
        if (is_null($substrate)) {
            array_push($this->openAPINullablesSetToNull, 'substrate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('substrate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['substrate'] = $substrate;

        return $this;
    }

    /**
     * Gets truth_state
     *
     * @return string|null
     */
    public function getTruthState()
    {
        return $this->container['truth_state'];
    }

    /**
     * Sets truth_state
     *
     * @param string|null $truth_state truth_state
     *
     * @return self
     */
    public function setTruthState($truth_state)
    {
        if (is_null($truth_state)) {
            throw new \InvalidArgumentException('non-nullable truth_state cannot be null');
        }
        $allowedValues = $this->getTruthStateAllowableValues();
        if (!in_array($truth_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'truth_state', must be one of '%s'",
                    $truth_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['truth_state'] = $truth_state;

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
