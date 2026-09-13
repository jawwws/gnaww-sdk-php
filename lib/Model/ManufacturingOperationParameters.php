<?php
/**
 * ManufacturingOperationParameters
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
 * ManufacturingOperationParameters Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingOperationParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'kind';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingOperation_parameters';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'colour' => 'string',
        'colourant_system' => 'string',
        'kind' => 'string',
        'processes' => 'string[]',
        'sides' => 'string',
        'basis' => 'string',
        'fold_lines' => '\Jawwws\Gnaww\Model\FoldLine[]',
        'input_geometry' => '\Jawwws\Gnaww\Model\ManufacturingGeometry',
        'named_pattern' => 'string',
        'physical_panels' => '\Jawwws\Gnaww\Model\FoldPanel[]',
        'resulting_geometry' => '\Jawwws\Gnaww\Model\ManufacturingGeometry',
        'holes' => '\Jawwws\Gnaww\Model\DrillHole[]',
        'patterns' => '\Jawwws\Gnaww\Model\RepeatedDrillPattern[]',
        'contour' => '\Jawwws\Gnaww\Model\Contour',
        'corner_radius_mm' => 'float',
        'corners' => 'string[]',
        'method' => 'string',
        'finish' => 'string',
        'material' => 'string',
        'thread_or_colourant' => 'string',
        'joining_material' => 'string',
        'resulting_component_id' => 'string',
        'requirement' => 'string',
        'source_name' => 'string',
        'source_notes' => 'string',
        'source_process' => 'string'
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
        'colourant_system' => null,
        'kind' => null,
        'processes' => null,
        'sides' => null,
        'basis' => null,
        'fold_lines' => null,
        'input_geometry' => null,
        'named_pattern' => null,
        'physical_panels' => null,
        'resulting_geometry' => null,
        'holes' => null,
        'patterns' => null,
        'contour' => null,
        'corner_radius_mm' => null,
        'corners' => null,
        'method' => null,
        'finish' => null,
        'material' => null,
        'thread_or_colourant' => null,
        'joining_material' => null,
        'resulting_component_id' => null,
        'requirement' => null,
        'source_name' => null,
        'source_notes' => null,
        'source_process' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'colour' => false,
        'colourant_system' => false,
        'kind' => false,
        'processes' => false,
        'sides' => false,
        'basis' => false,
        'fold_lines' => false,
        'input_geometry' => false,
        'named_pattern' => false,
        'physical_panels' => false,
        'resulting_geometry' => false,
        'holes' => false,
        'patterns' => false,
        'contour' => true,
        'corner_radius_mm' => false,
        'corners' => false,
        'method' => false,
        'finish' => false,
        'material' => false,
        'thread_or_colourant' => false,
        'joining_material' => false,
        'resulting_component_id' => false,
        'requirement' => false,
        'source_name' => false,
        'source_notes' => false,
        'source_process' => false
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
        'colourant_system' => 'colourant_system',
        'kind' => 'kind',
        'processes' => 'processes',
        'sides' => 'sides',
        'basis' => 'basis',
        'fold_lines' => 'fold_lines',
        'input_geometry' => 'input_geometry',
        'named_pattern' => 'named_pattern',
        'physical_panels' => 'physical_panels',
        'resulting_geometry' => 'resulting_geometry',
        'holes' => 'holes',
        'patterns' => 'patterns',
        'contour' => 'contour',
        'corner_radius_mm' => 'corner_radius_mm',
        'corners' => 'corners',
        'method' => 'method',
        'finish' => 'finish',
        'material' => 'material',
        'thread_or_colourant' => 'thread_or_colourant',
        'joining_material' => 'joining_material',
        'resulting_component_id' => 'resulting_component_id',
        'requirement' => 'requirement',
        'source_name' => 'source_name',
        'source_notes' => 'source_notes',
        'source_process' => 'source_process'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'colour' => 'setColour',
        'colourant_system' => 'setColourantSystem',
        'kind' => 'setKind',
        'processes' => 'setProcesses',
        'sides' => 'setSides',
        'basis' => 'setBasis',
        'fold_lines' => 'setFoldLines',
        'input_geometry' => 'setInputGeometry',
        'named_pattern' => 'setNamedPattern',
        'physical_panels' => 'setPhysicalPanels',
        'resulting_geometry' => 'setResultingGeometry',
        'holes' => 'setHoles',
        'patterns' => 'setPatterns',
        'contour' => 'setContour',
        'corner_radius_mm' => 'setCornerRadiusMm',
        'corners' => 'setCorners',
        'method' => 'setMethod',
        'finish' => 'setFinish',
        'material' => 'setMaterial',
        'thread_or_colourant' => 'setThreadOrColourant',
        'joining_material' => 'setJoiningMaterial',
        'resulting_component_id' => 'setResultingComponentId',
        'requirement' => 'setRequirement',
        'source_name' => 'setSourceName',
        'source_notes' => 'setSourceNotes',
        'source_process' => 'setSourceProcess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'colour' => 'getColour',
        'colourant_system' => 'getColourantSystem',
        'kind' => 'getKind',
        'processes' => 'getProcesses',
        'sides' => 'getSides',
        'basis' => 'getBasis',
        'fold_lines' => 'getFoldLines',
        'input_geometry' => 'getInputGeometry',
        'named_pattern' => 'getNamedPattern',
        'physical_panels' => 'getPhysicalPanels',
        'resulting_geometry' => 'getResultingGeometry',
        'holes' => 'getHoles',
        'patterns' => 'getPatterns',
        'contour' => 'getContour',
        'corner_radius_mm' => 'getCornerRadiusMm',
        'corners' => 'getCorners',
        'method' => 'getMethod',
        'finish' => 'getFinish',
        'material' => 'getMaterial',
        'thread_or_colourant' => 'getThreadOrColourant',
        'joining_material' => 'getJoiningMaterial',
        'resulting_component_id' => 'getResultingComponentId',
        'requirement' => 'getRequirement',
        'source_name' => 'getSourceName',
        'source_notes' => 'getSourceNotes',
        'source_process' => 'getSourceProcess'
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

    public const KIND_LEGACY = 'legacy';
    public const PROCESSES_DIGITAL_PRINT = 'digital_print';
    public const PROCESSES_OFFSET_LITHO = 'offset_litho';
    public const PROCESSES_LARGE_FORMAT = 'large_format';
    public const PROCESSES_DTG = 'dtg';
    public const PROCESSES_DTF = 'dtf';
    public const PROCESSES_HTV = 'htv';
    public const PROCESSES_EMBROIDERY = 'embroidery';
    public const PROCESSES_SCREEN_PRINT = 'screen_print';
    public const PROCESSES_SUBLIMATION = 'sublimation';
    public const PROCESSES_DIGITAL_TEXTILE_PRINT = 'digital_textile_print';
    public const PROCESSES_REACTIVE_DYE_PRINT = 'reactive_dye_print';
    public const PROCESSES_PIGMENT_PRINT = 'pigment_print';
    public const PROCESSES_SEWING = 'sewing';
    public const PROCESSES_HEMMING = 'hemming';
    public const PROCESSES_PAD_PRINT = 'pad_print';
    public const PROCESSES_UV_PRINT = 'uv_print';
    public const PROCESSES_ENGRAVING = 'engraving';
    public const PROCESSES_LASER_ENGRAVING = 'laser_engraving';
    public const PROCESSES_CUTTING = 'cutting';
    public const PROCESSES_FOLDING = 'folding';
    public const PROCESSES_BINDING = 'binding';
    public const PROCESSES_LAMINATION = 'lamination';
    public const PROCESSES_FOILING = 'foiling';
    public const PROCESSES_SPOT_UV = 'spot_uv';
    public const PROCESSES_UNKNOWN = 'unknown';
    public const SIDES_SINGLE_SIDED = 'single_sided';
    public const SIDES_DOUBLE_SIDED = 'double_sided';
    public const SIDES_UNKNOWN = 'unknown';
    public const BASIS_UNRESOLVED = 'unresolved';
    public const BASIS_EXPLICIT_LINES = 'explicit_lines';
    public const BASIS_NAMED_PATTERN = 'named_pattern';
    public const BASIS_LEGACY_INPUT_OUTPUT = 'legacy_input_output';
    public const NAMED_PATTERN_HALF_FOLD = 'half_fold';
    public const NAMED_PATTERN_TRI_FOLD = 'tri_fold';
    public const NAMED_PATTERN_Z_FOLD = 'z_fold';
    public const NAMED_PATTERN_GATE_FOLD = 'gate_fold';
    public const NAMED_PATTERN_ROLL_FOLD = 'roll_fold';
    public const NAMED_PATTERN_CROSS_FOLD = 'cross_fold';
    public const NAMED_PATTERN_UNKNOWN = 'unknown';
    public const CORNERS_TOP_LEFT = 'top_left';
    public const CORNERS_TOP_RIGHT = 'top_right';
    public const CORNERS_BOTTOM_LEFT = 'bottom_left';
    public const CORNERS_BOTTOM_RIGHT = 'bottom_right';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_LEGACY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessesAllowableValues()
    {
        return [
            self::PROCESSES_DIGITAL_PRINT,
            self::PROCESSES_OFFSET_LITHO,
            self::PROCESSES_LARGE_FORMAT,
            self::PROCESSES_DTG,
            self::PROCESSES_DTF,
            self::PROCESSES_HTV,
            self::PROCESSES_EMBROIDERY,
            self::PROCESSES_SCREEN_PRINT,
            self::PROCESSES_SUBLIMATION,
            self::PROCESSES_DIGITAL_TEXTILE_PRINT,
            self::PROCESSES_REACTIVE_DYE_PRINT,
            self::PROCESSES_PIGMENT_PRINT,
            self::PROCESSES_SEWING,
            self::PROCESSES_HEMMING,
            self::PROCESSES_PAD_PRINT,
            self::PROCESSES_UV_PRINT,
            self::PROCESSES_ENGRAVING,
            self::PROCESSES_LASER_ENGRAVING,
            self::PROCESSES_CUTTING,
            self::PROCESSES_FOLDING,
            self::PROCESSES_BINDING,
            self::PROCESSES_LAMINATION,
            self::PROCESSES_FOILING,
            self::PROCESSES_SPOT_UV,
            self::PROCESSES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSidesAllowableValues()
    {
        return [
            self::SIDES_SINGLE_SIDED,
            self::SIDES_DOUBLE_SIDED,
            self::SIDES_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBasisAllowableValues()
    {
        return [
            self::BASIS_UNRESOLVED,
            self::BASIS_EXPLICIT_LINES,
            self::BASIS_NAMED_PATTERN,
            self::BASIS_LEGACY_INPUT_OUTPUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNamedPatternAllowableValues()
    {
        return [
            self::NAMED_PATTERN_HALF_FOLD,
            self::NAMED_PATTERN_TRI_FOLD,
            self::NAMED_PATTERN_Z_FOLD,
            self::NAMED_PATTERN_GATE_FOLD,
            self::NAMED_PATTERN_ROLL_FOLD,
            self::NAMED_PATTERN_CROSS_FOLD,
            self::NAMED_PATTERN_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCornersAllowableValues()
    {
        return [
            self::CORNERS_TOP_LEFT,
            self::CORNERS_TOP_RIGHT,
            self::CORNERS_BOTTOM_LEFT,
            self::CORNERS_BOTTOM_RIGHT,
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
        $this->setIfExists('colourant_system', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], 'legacy');
        $this->setIfExists('processes', $data ?? [], null);
        $this->setIfExists('sides', $data ?? [], 'unknown');
        $this->setIfExists('basis', $data ?? [], null);
        $this->setIfExists('fold_lines', $data ?? [], null);
        $this->setIfExists('input_geometry', $data ?? [], null);
        $this->setIfExists('named_pattern', $data ?? [], null);
        $this->setIfExists('physical_panels', $data ?? [], null);
        $this->setIfExists('resulting_geometry', $data ?? [], null);
        $this->setIfExists('holes', $data ?? [], null);
        $this->setIfExists('patterns', $data ?? [], null);
        $this->setIfExists('contour', $data ?? [], null);
        $this->setIfExists('corner_radius_mm', $data ?? [], null);
        $this->setIfExists('corners', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('finish', $data ?? [], null);
        $this->setIfExists('material', $data ?? [], null);
        $this->setIfExists('thread_or_colourant', $data ?? [], null);
        $this->setIfExists('joining_material', $data ?? [], null);
        $this->setIfExists('resulting_component_id', $data ?? [], null);
        $this->setIfExists('requirement', $data ?? [], null);
        $this->setIfExists('source_name', $data ?? [], null);
        $this->setIfExists('source_notes', $data ?? [], null);
        $this->setIfExists('source_process', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['kind'] = static::$openAPIModelName;
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

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSidesAllowableValues();
        if (!is_null($this->container['sides']) && !in_array($this->container['sides'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sides', must be one of '%s'",
                $this->container['sides'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['basis'] === null) {
            $invalidProperties[] = "'basis' can't be null";
        }
        $allowedValues = $this->getBasisAllowableValues();
        if (!is_null($this->container['basis']) && !in_array($this->container['basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'basis', must be one of '%s'",
                $this->container['basis'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNamedPatternAllowableValues();
        if (!is_null($this->container['named_pattern']) && !in_array($this->container['named_pattern'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'named_pattern', must be one of '%s'",
                $this->container['named_pattern'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['corner_radius_mm']) && ($this->container['corner_radius_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'corner_radius_mm', must be bigger than 0.0.";
        }

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ((mb_strlen($this->container['method']) < 1)) {
            $invalidProperties[] = "invalid value for 'method', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['resulting_component_id']) && !preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['resulting_component_id'])) {
            $invalidProperties[] = "invalid value for 'resulting_component_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
        }

        if ($this->container['source_name'] === null) {
            $invalidProperties[] = "'source_name' can't be null";
        }
        if ((mb_strlen($this->container['source_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'source_name', the character length must be bigger than or equal to 1.";
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
     * @return string|null
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     *
     * @param string|null $colour colour
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
     * Gets colourant_system
     *
     * @return string|null
     */
    public function getColourantSystem()
    {
        return $this->container['colourant_system'];
    }

    /**
     * Sets colourant_system
     *
     * @param string|null $colourant_system colourant_system
     *
     * @return self
     */
    public function setColourantSystem($colourant_system)
    {
        if (is_null($colourant_system)) {
            throw new \InvalidArgumentException('non-nullable colourant_system cannot be null');
        }
        $this->container['colourant_system'] = $colourant_system;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets processes
     *
     * @return string[]|null
     */
    public function getProcesses()
    {
        return $this->container['processes'];
    }

    /**
     * Sets processes
     *
     * @param string[]|null $processes processes
     *
     * @return self
     */
    public function setProcesses($processes)
    {
        if (is_null($processes)) {
            throw new \InvalidArgumentException('non-nullable processes cannot be null');
        }
        $allowedValues = $this->getProcessesAllowableValues();
        if (array_diff($processes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processes'] = $processes;

        return $this;
    }

    /**
     * Gets sides
     *
     * @return string|null
     */
    public function getSides()
    {
        return $this->container['sides'];
    }

    /**
     * Sets sides
     *
     * @param string|null $sides sides
     *
     * @return self
     */
    public function setSides($sides)
    {
        if (is_null($sides)) {
            throw new \InvalidArgumentException('non-nullable sides cannot be null');
        }
        $allowedValues = $this->getSidesAllowableValues();
        if (!in_array($sides, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sides', must be one of '%s'",
                    $sides,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sides'] = $sides;

        return $this;
    }

    /**
     * Gets basis
     *
     * @return string
     */
    public function getBasis()
    {
        return $this->container['basis'];
    }

    /**
     * Sets basis
     *
     * @param string $basis basis
     *
     * @return self
     */
    public function setBasis($basis)
    {
        if (is_null($basis)) {
            throw new \InvalidArgumentException('non-nullable basis cannot be null');
        }
        $allowedValues = $this->getBasisAllowableValues();
        if (!in_array($basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'basis', must be one of '%s'",
                    $basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['basis'] = $basis;

        return $this;
    }

    /**
     * Gets fold_lines
     *
     * @return \Jawwws\Gnaww\Model\FoldLine[]|null
     */
    public function getFoldLines()
    {
        return $this->container['fold_lines'];
    }

    /**
     * Sets fold_lines
     *
     * @param \Jawwws\Gnaww\Model\FoldLine[]|null $fold_lines fold_lines
     *
     * @return self
     */
    public function setFoldLines($fold_lines)
    {
        if (is_null($fold_lines)) {
            throw new \InvalidArgumentException('non-nullable fold_lines cannot be null');
        }
        $this->container['fold_lines'] = $fold_lines;

        return $this;
    }

    /**
     * Gets input_geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingGeometry|null
     */
    public function getInputGeometry()
    {
        return $this->container['input_geometry'];
    }

    /**
     * Sets input_geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingGeometry|null $input_geometry input_geometry
     *
     * @return self
     */
    public function setInputGeometry($input_geometry)
    {
        if (is_null($input_geometry)) {
            throw new \InvalidArgumentException('non-nullable input_geometry cannot be null');
        }
        $this->container['input_geometry'] = $input_geometry;

        return $this;
    }

    /**
     * Gets named_pattern
     *
     * @return string|null
     */
    public function getNamedPattern()
    {
        return $this->container['named_pattern'];
    }

    /**
     * Sets named_pattern
     *
     * @param string|null $named_pattern named_pattern
     *
     * @return self
     */
    public function setNamedPattern($named_pattern)
    {
        if (is_null($named_pattern)) {
            throw new \InvalidArgumentException('non-nullable named_pattern cannot be null');
        }
        $allowedValues = $this->getNamedPatternAllowableValues();
        if (!in_array($named_pattern, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'named_pattern', must be one of '%s'",
                    $named_pattern,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['named_pattern'] = $named_pattern;

        return $this;
    }

    /**
     * Gets physical_panels
     *
     * @return \Jawwws\Gnaww\Model\FoldPanel[]|null
     */
    public function getPhysicalPanels()
    {
        return $this->container['physical_panels'];
    }

    /**
     * Sets physical_panels
     *
     * @param \Jawwws\Gnaww\Model\FoldPanel[]|null $physical_panels physical_panels
     *
     * @return self
     */
    public function setPhysicalPanels($physical_panels)
    {
        if (is_null($physical_panels)) {
            throw new \InvalidArgumentException('non-nullable physical_panels cannot be null');
        }
        $this->container['physical_panels'] = $physical_panels;

        return $this;
    }

    /**
     * Gets resulting_geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingGeometry|null
     */
    public function getResultingGeometry()
    {
        return $this->container['resulting_geometry'];
    }

    /**
     * Sets resulting_geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingGeometry|null $resulting_geometry resulting_geometry
     *
     * @return self
     */
    public function setResultingGeometry($resulting_geometry)
    {
        if (is_null($resulting_geometry)) {
            throw new \InvalidArgumentException('non-nullable resulting_geometry cannot be null');
        }
        $this->container['resulting_geometry'] = $resulting_geometry;

        return $this;
    }

    /**
     * Gets holes
     *
     * @return \Jawwws\Gnaww\Model\DrillHole[]|null
     */
    public function getHoles()
    {
        return $this->container['holes'];
    }

    /**
     * Sets holes
     *
     * @param \Jawwws\Gnaww\Model\DrillHole[]|null $holes holes
     *
     * @return self
     */
    public function setHoles($holes)
    {
        if (is_null($holes)) {
            throw new \InvalidArgumentException('non-nullable holes cannot be null');
        }
        $this->container['holes'] = $holes;

        return $this;
    }

    /**
     * Gets patterns
     *
     * @return \Jawwws\Gnaww\Model\RepeatedDrillPattern[]|null
     */
    public function getPatterns()
    {
        return $this->container['patterns'];
    }

    /**
     * Sets patterns
     *
     * @param \Jawwws\Gnaww\Model\RepeatedDrillPattern[]|null $patterns patterns
     *
     * @return self
     */
    public function setPatterns($patterns)
    {
        if (is_null($patterns)) {
            throw new \InvalidArgumentException('non-nullable patterns cannot be null');
        }
        $this->container['patterns'] = $patterns;

        return $this;
    }

    /**
     * Gets contour
     *
     * @return \Jawwws\Gnaww\Model\Contour|null
     */
    public function getContour()
    {
        return $this->container['contour'];
    }

    /**
     * Sets contour
     *
     * @param \Jawwws\Gnaww\Model\Contour|null $contour contour
     *
     * @return self
     */
    public function setContour($contour)
    {
        if (is_null($contour)) {
            array_push($this->openAPINullablesSetToNull, 'contour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contour'] = $contour;

        return $this;
    }

    /**
     * Gets corner_radius_mm
     *
     * @return float|null
     */
    public function getCornerRadiusMm()
    {
        return $this->container['corner_radius_mm'];
    }

    /**
     * Sets corner_radius_mm
     *
     * @param float|null $corner_radius_mm corner_radius_mm
     *
     * @return self
     */
    public function setCornerRadiusMm($corner_radius_mm)
    {
        if (is_null($corner_radius_mm)) {
            throw new \InvalidArgumentException('non-nullable corner_radius_mm cannot be null');
        }

        if (($corner_radius_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $corner_radius_mm when calling ManufacturingOperationParameters., must be bigger than 0.0.');
        }

        $this->container['corner_radius_mm'] = $corner_radius_mm;

        return $this;
    }

    /**
     * Gets corners
     *
     * @return string[]|null
     */
    public function getCorners()
    {
        return $this->container['corners'];
    }

    /**
     * Sets corners
     *
     * @param string[]|null $corners corners
     *
     * @return self
     */
    public function setCorners($corners)
    {
        if (is_null($corners)) {
            throw new \InvalidArgumentException('non-nullable corners cannot be null');
        }
        $allowedValues = $this->getCornersAllowableValues();
        if (array_diff($corners, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'corners', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['corners'] = $corners;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }

        if ((mb_strlen($method) < 1)) {
            throw new \InvalidArgumentException('invalid length for $method when calling ManufacturingOperationParameters., must be bigger than or equal to 1.');
        }

        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets finish
     *
     * @return string|null
     */
    public function getFinish()
    {
        return $this->container['finish'];
    }

    /**
     * Sets finish
     *
     * @param string|null $finish finish
     *
     * @return self
     */
    public function setFinish($finish)
    {
        if (is_null($finish)) {
            throw new \InvalidArgumentException('non-nullable finish cannot be null');
        }
        $this->container['finish'] = $finish;

        return $this;
    }

    /**
     * Gets material
     *
     * @return string|null
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param string|null $material material
     *
     * @return self
     */
    public function setMaterial($material)
    {
        if (is_null($material)) {
            throw new \InvalidArgumentException('non-nullable material cannot be null');
        }
        $this->container['material'] = $material;

        return $this;
    }

    /**
     * Gets thread_or_colourant
     *
     * @return string|null
     */
    public function getThreadOrColourant()
    {
        return $this->container['thread_or_colourant'];
    }

    /**
     * Sets thread_or_colourant
     *
     * @param string|null $thread_or_colourant thread_or_colourant
     *
     * @return self
     */
    public function setThreadOrColourant($thread_or_colourant)
    {
        if (is_null($thread_or_colourant)) {
            throw new \InvalidArgumentException('non-nullable thread_or_colourant cannot be null');
        }
        $this->container['thread_or_colourant'] = $thread_or_colourant;

        return $this;
    }

    /**
     * Gets joining_material
     *
     * @return string|null
     */
    public function getJoiningMaterial()
    {
        return $this->container['joining_material'];
    }

    /**
     * Sets joining_material
     *
     * @param string|null $joining_material joining_material
     *
     * @return self
     */
    public function setJoiningMaterial($joining_material)
    {
        if (is_null($joining_material)) {
            throw new \InvalidArgumentException('non-nullable joining_material cannot be null');
        }
        $this->container['joining_material'] = $joining_material;

        return $this;
    }

    /**
     * Gets resulting_component_id
     *
     * @return string|null
     */
    public function getResultingComponentId()
    {
        return $this->container['resulting_component_id'];
    }

    /**
     * Sets resulting_component_id
     *
     * @param string|null $resulting_component_id resulting_component_id
     *
     * @return self
     */
    public function setResultingComponentId($resulting_component_id)
    {
        if (is_null($resulting_component_id)) {
            throw new \InvalidArgumentException('non-nullable resulting_component_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($resulting_component_id)))) {
            throw new \InvalidArgumentException("invalid value for \$resulting_component_id when calling ManufacturingOperationParameters., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['resulting_component_id'] = $resulting_component_id;

        return $this;
    }

    /**
     * Gets requirement
     *
     * @return string|null
     */
    public function getRequirement()
    {
        return $this->container['requirement'];
    }

    /**
     * Sets requirement
     *
     * @param string|null $requirement requirement
     *
     * @return self
     */
    public function setRequirement($requirement)
    {
        if (is_null($requirement)) {
            throw new \InvalidArgumentException('non-nullable requirement cannot be null');
        }
        $this->container['requirement'] = $requirement;

        return $this;
    }

    /**
     * Gets source_name
     *
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     *
     * @param string $source_name source_name
     *
     * @return self
     */
    public function setSourceName($source_name)
    {
        if (is_null($source_name)) {
            throw new \InvalidArgumentException('non-nullable source_name cannot be null');
        }

        if ((mb_strlen($source_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $source_name when calling ManufacturingOperationParameters., must be bigger than or equal to 1.');
        }

        $this->container['source_name'] = $source_name;

        return $this;
    }

    /**
     * Gets source_notes
     *
     * @return string|null
     */
    public function getSourceNotes()
    {
        return $this->container['source_notes'];
    }

    /**
     * Sets source_notes
     *
     * @param string|null $source_notes source_notes
     *
     * @return self
     */
    public function setSourceNotes($source_notes)
    {
        if (is_null($source_notes)) {
            throw new \InvalidArgumentException('non-nullable source_notes cannot be null');
        }
        $this->container['source_notes'] = $source_notes;

        return $this;
    }

    /**
     * Gets source_process
     *
     * @return string|null
     */
    public function getSourceProcess()
    {
        return $this->container['source_process'];
    }

    /**
     * Sets source_process
     *
     * @param string|null $source_process source_process
     *
     * @return self
     */
    public function setSourceProcess($source_process)
    {
        if (is_null($source_process)) {
            throw new \InvalidArgumentException('non-nullable source_process cannot be null');
        }
        $this->container['source_process'] = $source_process;

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
