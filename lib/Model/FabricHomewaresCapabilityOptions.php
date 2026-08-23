<?php
/**
 * FabricHomewaresCapabilityOptions
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
 * FabricHomewaresCapabilityOptions Class Doc Comment
 *
 * @category Class
 * @description Canonical fabric and homewares production capabilities.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class FabricHomewaresCapabilityOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FabricHomewaresCapabilityOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'colour_profiles' => 'string[]',
        'custom_dimensions' => '\Jawwws\Gnaww\Model\CustomDimensionCapability',
        'dimensions' => '\Jawwws\Gnaww\Model\DimensionCapability[]',
        'fastening_types' => 'string[]',
        'hem_styles' => 'string[]',
        'lining_types' => 'string[]',
        'materials' => '\Jawwws\Gnaww\Model\MaterialCapability[]',
        'print_methods' => 'string[]',
        'printed_sides' => 'string[]',
        'repeat_pattern' => '\Jawwws\Gnaww\Model\RepeatPatternCapability',
        'washability' => '\Jawwws\Gnaww\Model\WashabilityCapability'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'colour_profiles' => null,
        'custom_dimensions' => null,
        'dimensions' => null,
        'fastening_types' => null,
        'hem_styles' => null,
        'lining_types' => null,
        'materials' => null,
        'print_methods' => null,
        'printed_sides' => null,
        'repeat_pattern' => null,
        'washability' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'colour_profiles' => false,
        'custom_dimensions' => true,
        'dimensions' => false,
        'fastening_types' => false,
        'hem_styles' => false,
        'lining_types' => false,
        'materials' => false,
        'print_methods' => false,
        'printed_sides' => false,
        'repeat_pattern' => false,
        'washability' => false
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
        'colour_profiles' => 'colour_profiles',
        'custom_dimensions' => 'custom_dimensions',
        'dimensions' => 'dimensions',
        'fastening_types' => 'fastening_types',
        'hem_styles' => 'hem_styles',
        'lining_types' => 'lining_types',
        'materials' => 'materials',
        'print_methods' => 'print_methods',
        'printed_sides' => 'printed_sides',
        'repeat_pattern' => 'repeat_pattern',
        'washability' => 'washability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'colour_profiles' => 'setColourProfiles',
        'custom_dimensions' => 'setCustomDimensions',
        'dimensions' => 'setDimensions',
        'fastening_types' => 'setFasteningTypes',
        'hem_styles' => 'setHemStyles',
        'lining_types' => 'setLiningTypes',
        'materials' => 'setMaterials',
        'print_methods' => 'setPrintMethods',
        'printed_sides' => 'setPrintedSides',
        'repeat_pattern' => 'setRepeatPattern',
        'washability' => 'setWashability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'colour_profiles' => 'getColourProfiles',
        'custom_dimensions' => 'getCustomDimensions',
        'dimensions' => 'getDimensions',
        'fastening_types' => 'getFasteningTypes',
        'hem_styles' => 'getHemStyles',
        'lining_types' => 'getLiningTypes',
        'materials' => 'getMaterials',
        'print_methods' => 'getPrintMethods',
        'printed_sides' => 'getPrintedSides',
        'repeat_pattern' => 'getRepeatPattern',
        'washability' => 'getWashability'
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

    public const COLOUR_PROFILES_SRGB = 'srgb';
    public const COLOUR_PROFILES_ADOBE_RGB = 'adobe_rgb';
    public const COLOUR_PROFILES_CMYK = 'cmyk';
    public const COLOUR_PROFILES_ICC_MANAGED = 'icc_managed';
    public const COLOUR_PROFILES_UNKNOWN = 'unknown';
    public const FASTENING_TYPES_NONE = 'none';
    public const FASTENING_TYPES_ZIP = 'zip';
    public const FASTENING_TYPES_CONCEALED_ZIP = 'concealed_zip';
    public const FASTENING_TYPES_BUTTONS = 'buttons';
    public const FASTENING_TYPES_TIES = 'ties';
    public const FASTENING_TYPES_EYELETS = 'eyelets';
    public const FASTENING_TYPES_HOOK_AND_LOOP = 'hook_and_loop';
    public const FASTENING_TYPES_ENVELOPE = 'envelope';
    public const FASTENING_TYPES_DRAWSTRING = 'drawstring';
    public const FASTENING_TYPES_UNKNOWN = 'unknown';
    public const HEM_STYLES_NONE = 'none';
    public const HEM_STYLES_OVERLOCKED = 'overlocked';
    public const HEM_STYLES_SINGLE_TURN = 'single_turn';
    public const HEM_STYLES_DOUBLE_TURN = 'double_turn';
    public const HEM_STYLES_ROLLED = 'rolled';
    public const HEM_STYLES_BLIND = 'blind';
    public const HEM_STYLES_UNKNOWN = 'unknown';
    public const LINING_TYPES_NONE = 'none';
    public const LINING_TYPES_STANDARD = 'standard';
    public const LINING_TYPES_BLACKOUT = 'blackout';
    public const LINING_TYPES_THERMAL = 'thermal';
    public const LINING_TYPES_INTERLINING = 'interlining';
    public const LINING_TYPES_UNKNOWN = 'unknown';
    public const PRINT_METHODS_DIGITAL_PRINT = 'digital_print';
    public const PRINT_METHODS_OFFSET_LITHO = 'offset_litho';
    public const PRINT_METHODS_LARGE_FORMAT = 'large_format';
    public const PRINT_METHODS_DTG = 'dtg';
    public const PRINT_METHODS_DTF = 'dtf';
    public const PRINT_METHODS_HTV = 'htv';
    public const PRINT_METHODS_EMBROIDERY = 'embroidery';
    public const PRINT_METHODS_SCREEN_PRINT = 'screen_print';
    public const PRINT_METHODS_SUBLIMATION = 'sublimation';
    public const PRINT_METHODS_DIGITAL_TEXTILE_PRINT = 'digital_textile_print';
    public const PRINT_METHODS_REACTIVE_DYE_PRINT = 'reactive_dye_print';
    public const PRINT_METHODS_PIGMENT_PRINT = 'pigment_print';
    public const PRINT_METHODS_SEWING = 'sewing';
    public const PRINT_METHODS_HEMMING = 'hemming';
    public const PRINT_METHODS_PAD_PRINT = 'pad_print';
    public const PRINT_METHODS_UV_PRINT = 'uv_print';
    public const PRINT_METHODS_ENGRAVING = 'engraving';
    public const PRINT_METHODS_LASER_ENGRAVING = 'laser_engraving';
    public const PRINT_METHODS_CUTTING = 'cutting';
    public const PRINT_METHODS_FOLDING = 'folding';
    public const PRINT_METHODS_BINDING = 'binding';
    public const PRINT_METHODS_LAMINATION = 'lamination';
    public const PRINT_METHODS_FOILING = 'foiling';
    public const PRINT_METHODS_SPOT_UV = 'spot_uv';
    public const PRINT_METHODS_UNKNOWN = 'unknown';
    public const PRINTED_SIDES_SINGLE_SIDED = 'single_sided';
    public const PRINTED_SIDES_DOUBLE_SIDED = 'double_sided';
    public const PRINTED_SIDES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColourProfilesAllowableValues()
    {
        return [
            self::COLOUR_PROFILES_SRGB,
            self::COLOUR_PROFILES_ADOBE_RGB,
            self::COLOUR_PROFILES_CMYK,
            self::COLOUR_PROFILES_ICC_MANAGED,
            self::COLOUR_PROFILES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFasteningTypesAllowableValues()
    {
        return [
            self::FASTENING_TYPES_NONE,
            self::FASTENING_TYPES_ZIP,
            self::FASTENING_TYPES_CONCEALED_ZIP,
            self::FASTENING_TYPES_BUTTONS,
            self::FASTENING_TYPES_TIES,
            self::FASTENING_TYPES_EYELETS,
            self::FASTENING_TYPES_HOOK_AND_LOOP,
            self::FASTENING_TYPES_ENVELOPE,
            self::FASTENING_TYPES_DRAWSTRING,
            self::FASTENING_TYPES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHemStylesAllowableValues()
    {
        return [
            self::HEM_STYLES_NONE,
            self::HEM_STYLES_OVERLOCKED,
            self::HEM_STYLES_SINGLE_TURN,
            self::HEM_STYLES_DOUBLE_TURN,
            self::HEM_STYLES_ROLLED,
            self::HEM_STYLES_BLIND,
            self::HEM_STYLES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLiningTypesAllowableValues()
    {
        return [
            self::LINING_TYPES_NONE,
            self::LINING_TYPES_STANDARD,
            self::LINING_TYPES_BLACKOUT,
            self::LINING_TYPES_THERMAL,
            self::LINING_TYPES_INTERLINING,
            self::LINING_TYPES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintMethodsAllowableValues()
    {
        return [
            self::PRINT_METHODS_DIGITAL_PRINT,
            self::PRINT_METHODS_OFFSET_LITHO,
            self::PRINT_METHODS_LARGE_FORMAT,
            self::PRINT_METHODS_DTG,
            self::PRINT_METHODS_DTF,
            self::PRINT_METHODS_HTV,
            self::PRINT_METHODS_EMBROIDERY,
            self::PRINT_METHODS_SCREEN_PRINT,
            self::PRINT_METHODS_SUBLIMATION,
            self::PRINT_METHODS_DIGITAL_TEXTILE_PRINT,
            self::PRINT_METHODS_REACTIVE_DYE_PRINT,
            self::PRINT_METHODS_PIGMENT_PRINT,
            self::PRINT_METHODS_SEWING,
            self::PRINT_METHODS_HEMMING,
            self::PRINT_METHODS_PAD_PRINT,
            self::PRINT_METHODS_UV_PRINT,
            self::PRINT_METHODS_ENGRAVING,
            self::PRINT_METHODS_LASER_ENGRAVING,
            self::PRINT_METHODS_CUTTING,
            self::PRINT_METHODS_FOLDING,
            self::PRINT_METHODS_BINDING,
            self::PRINT_METHODS_LAMINATION,
            self::PRINT_METHODS_FOILING,
            self::PRINT_METHODS_SPOT_UV,
            self::PRINT_METHODS_UNKNOWN,
        ];
    }

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
        $this->setIfExists('colour_profiles', $data ?? [], null);
        $this->setIfExists('custom_dimensions', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('fastening_types', $data ?? [], null);
        $this->setIfExists('hem_styles', $data ?? [], null);
        $this->setIfExists('lining_types', $data ?? [], null);
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('print_methods', $data ?? [], null);
        $this->setIfExists('printed_sides', $data ?? [], null);
        $this->setIfExists('repeat_pattern', $data ?? [], null);
        $this->setIfExists('washability', $data ?? [], null);
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
     * Gets colour_profiles
     *
     * @return string[]|null
     */
    public function getColourProfiles()
    {
        return $this->container['colour_profiles'];
    }

    /**
     * Sets colour_profiles
     *
     * @param string[]|null $colour_profiles colour_profiles
     *
     * @return self
     */
    public function setColourProfiles($colour_profiles)
    {
        if (is_null($colour_profiles)) {
            throw new \InvalidArgumentException('non-nullable colour_profiles cannot be null');
        }
        $allowedValues = $this->getColourProfilesAllowableValues();
        if (array_diff($colour_profiles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'colour_profiles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['colour_profiles'] = $colour_profiles;

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
     * @return \Jawwws\Gnaww\Model\DimensionCapability[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Jawwws\Gnaww\Model\DimensionCapability[]|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets fastening_types
     *
     * @return string[]|null
     */
    public function getFasteningTypes()
    {
        return $this->container['fastening_types'];
    }

    /**
     * Sets fastening_types
     *
     * @param string[]|null $fastening_types fastening_types
     *
     * @return self
     */
    public function setFasteningTypes($fastening_types)
    {
        if (is_null($fastening_types)) {
            throw new \InvalidArgumentException('non-nullable fastening_types cannot be null');
        }
        $allowedValues = $this->getFasteningTypesAllowableValues();
        if (array_diff($fastening_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fastening_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fastening_types'] = $fastening_types;

        return $this;
    }

    /**
     * Gets hem_styles
     *
     * @return string[]|null
     */
    public function getHemStyles()
    {
        return $this->container['hem_styles'];
    }

    /**
     * Sets hem_styles
     *
     * @param string[]|null $hem_styles hem_styles
     *
     * @return self
     */
    public function setHemStyles($hem_styles)
    {
        if (is_null($hem_styles)) {
            throw new \InvalidArgumentException('non-nullable hem_styles cannot be null');
        }
        $allowedValues = $this->getHemStylesAllowableValues();
        if (array_diff($hem_styles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hem_styles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hem_styles'] = $hem_styles;

        return $this;
    }

    /**
     * Gets lining_types
     *
     * @return string[]|null
     */
    public function getLiningTypes()
    {
        return $this->container['lining_types'];
    }

    /**
     * Sets lining_types
     *
     * @param string[]|null $lining_types lining_types
     *
     * @return self
     */
    public function setLiningTypes($lining_types)
    {
        if (is_null($lining_types)) {
            throw new \InvalidArgumentException('non-nullable lining_types cannot be null');
        }
        $allowedValues = $this->getLiningTypesAllowableValues();
        if (array_diff($lining_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'lining_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lining_types'] = $lining_types;

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
     * Gets print_methods
     *
     * @return string[]|null
     */
    public function getPrintMethods()
    {
        return $this->container['print_methods'];
    }

    /**
     * Sets print_methods
     *
     * @param string[]|null $print_methods print_methods
     *
     * @return self
     */
    public function setPrintMethods($print_methods)
    {
        if (is_null($print_methods)) {
            throw new \InvalidArgumentException('non-nullable print_methods cannot be null');
        }
        $allowedValues = $this->getPrintMethodsAllowableValues();
        if (array_diff($print_methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'print_methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['print_methods'] = $print_methods;

        return $this;
    }

    /**
     * Gets printed_sides
     *
     * @return string[]|null
     */
    public function getPrintedSides()
    {
        return $this->container['printed_sides'];
    }

    /**
     * Sets printed_sides
     *
     * @param string[]|null $printed_sides printed_sides
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
        $this->container['printed_sides'] = $printed_sides;

        return $this;
    }

    /**
     * Gets repeat_pattern
     *
     * @return \Jawwws\Gnaww\Model\RepeatPatternCapability|null
     */
    public function getRepeatPattern()
    {
        return $this->container['repeat_pattern'];
    }

    /**
     * Sets repeat_pattern
     *
     * @param \Jawwws\Gnaww\Model\RepeatPatternCapability|null $repeat_pattern repeat_pattern
     *
     * @return self
     */
    public function setRepeatPattern($repeat_pattern)
    {
        if (is_null($repeat_pattern)) {
            throw new \InvalidArgumentException('non-nullable repeat_pattern cannot be null');
        }
        $this->container['repeat_pattern'] = $repeat_pattern;

        return $this;
    }

    /**
     * Gets washability
     *
     * @return \Jawwws\Gnaww\Model\WashabilityCapability|null
     */
    public function getWashability()
    {
        return $this->container['washability'];
    }

    /**
     * Sets washability
     *
     * @param \Jawwws\Gnaww\Model\WashabilityCapability|null $washability washability
     *
     * @return self
     */
    public function setWashability($washability)
    {
        if (is_null($washability)) {
            throw new \InvalidArgumentException('non-nullable washability cannot be null');
        }
        $this->container['washability'] = $washability;

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
