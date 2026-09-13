<?php
/**
 * ManufacturingMaterial
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
 * ManufacturingMaterial Class Doc Comment
 *
 * @category Class
 * @description Controlled material/substrate meaning for one component.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingMaterial implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingMaterial';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category' => 'string',
        'colour' => 'string',
        'composition' => '\Jawwws\Gnaww\Model\AppModelsManufacturingGeometryMaterialCompositionPart[]',
        'finish' => 'string',
        'grammage_requirement' => '\Jawwws\Gnaww\Model\GrammageRequirement',
        'name' => 'string',
        'texture' => 'string',
        'thickness_mm' => 'float',
        'weight_gsm' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'category' => null,
        'colour' => null,
        'composition' => null,
        'finish' => null,
        'grammage_requirement' => null,
        'name' => null,
        'texture' => null,
        'thickness_mm' => null,
        'weight_gsm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'category' => false,
        'colour' => true,
        'composition' => false,
        'finish' => true,
        'grammage_requirement' => true,
        'name' => true,
        'texture' => true,
        'thickness_mm' => true,
        'weight_gsm' => true
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
        'category' => 'category',
        'colour' => 'colour',
        'composition' => 'composition',
        'finish' => 'finish',
        'grammage_requirement' => 'grammage_requirement',
        'name' => 'name',
        'texture' => 'texture',
        'thickness_mm' => 'thickness_mm',
        'weight_gsm' => 'weight_gsm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'colour' => 'setColour',
        'composition' => 'setComposition',
        'finish' => 'setFinish',
        'grammage_requirement' => 'setGrammageRequirement',
        'name' => 'setName',
        'texture' => 'setTexture',
        'thickness_mm' => 'setThicknessMm',
        'weight_gsm' => 'setWeightGsm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'colour' => 'getColour',
        'composition' => 'getComposition',
        'finish' => 'getFinish',
        'grammage_requirement' => 'getGrammageRequirement',
        'name' => 'getName',
        'texture' => 'getTexture',
        'thickness_mm' => 'getThicknessMm',
        'weight_gsm' => 'getWeightGsm'
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

    public const CATEGORY_PAPER = 'paper';
    public const CATEGORY_BOARD = 'board';
    public const CATEGORY_SYNTHETIC = 'synthetic';
    public const CATEGORY_TEXTILE = 'textile';
    public const CATEGORY_PLASTIC = 'plastic';
    public const CATEGORY_METAL = 'metal';
    public const CATEGORY_CERAMIC = 'ceramic';
    public const CATEGORY_GLASS = 'glass';
    public const CATEGORY_WOOD = 'wood';
    public const CATEGORY_OTHER = 'other';
    public const CATEGORY_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_PAPER,
            self::CATEGORY_BOARD,
            self::CATEGORY_SYNTHETIC,
            self::CATEGORY_TEXTILE,
            self::CATEGORY_PLASTIC,
            self::CATEGORY_METAL,
            self::CATEGORY_CERAMIC,
            self::CATEGORY_GLASS,
            self::CATEGORY_WOOD,
            self::CATEGORY_OTHER,
            self::CATEGORY_UNKNOWN,
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
        $this->setIfExists('category', $data ?? [], 'unknown');
        $this->setIfExists('colour', $data ?? [], null);
        $this->setIfExists('composition', $data ?? [], null);
        $this->setIfExists('finish', $data ?? [], null);
        $this->setIfExists('grammage_requirement', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('texture', $data ?? [], null);
        $this->setIfExists('thickness_mm', $data ?? [], null);
        $this->setIfExists('weight_gsm', $data ?? [], null);
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

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'category', must be one of '%s'",
                $this->container['category'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['thickness_mm']) && ($this->container['thickness_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'thickness_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['weight_gsm']) && ($this->container['weight_gsm'] <= 0)) {
            $invalidProperties[] = "invalid value for 'weight_gsm', must be bigger than 0.";
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
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'category', must be one of '%s'",
                    $category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
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
            array_push($this->openAPINullablesSetToNull, 'colour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('colour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['colour'] = $colour;

        return $this;
    }

    /**
     * Gets composition
     *
     * @return \Jawwws\Gnaww\Model\AppModelsManufacturingGeometryMaterialCompositionPart[]|null
     */
    public function getComposition()
    {
        return $this->container['composition'];
    }

    /**
     * Sets composition
     *
     * @param \Jawwws\Gnaww\Model\AppModelsManufacturingGeometryMaterialCompositionPart[]|null $composition composition
     *
     * @return self
     */
    public function setComposition($composition)
    {
        if (is_null($composition)) {
            throw new \InvalidArgumentException('non-nullable composition cannot be null');
        }
        $this->container['composition'] = $composition;

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
            array_push($this->openAPINullablesSetToNull, 'finish');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('finish', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['finish'] = $finish;

        return $this;
    }

    /**
     * Gets grammage_requirement
     *
     * @return \Jawwws\Gnaww\Model\GrammageRequirement|null
     */
    public function getGrammageRequirement()
    {
        return $this->container['grammage_requirement'];
    }

    /**
     * Sets grammage_requirement
     *
     * @param \Jawwws\Gnaww\Model\GrammageRequirement|null $grammage_requirement grammage_requirement
     *
     * @return self
     */
    public function setGrammageRequirement($grammage_requirement)
    {
        if (is_null($grammage_requirement)) {
            array_push($this->openAPINullablesSetToNull, 'grammage_requirement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grammage_requirement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grammage_requirement'] = $grammage_requirement;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets texture
     *
     * @return string|null
     */
    public function getTexture()
    {
        return $this->container['texture'];
    }

    /**
     * Sets texture
     *
     * @param string|null $texture texture
     *
     * @return self
     */
    public function setTexture($texture)
    {
        if (is_null($texture)) {
            array_push($this->openAPINullablesSetToNull, 'texture');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('texture', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['texture'] = $texture;

        return $this;
    }

    /**
     * Gets thickness_mm
     *
     * @return float|null
     */
    public function getThicknessMm()
    {
        return $this->container['thickness_mm'];
    }

    /**
     * Sets thickness_mm
     *
     * @param float|null $thickness_mm thickness_mm
     *
     * @return self
     */
    public function setThicknessMm($thickness_mm)
    {
        if (is_null($thickness_mm)) {
            array_push($this->openAPINullablesSetToNull, 'thickness_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thickness_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($thickness_mm) && ($thickness_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $thickness_mm when calling ManufacturingMaterial., must be bigger than 0.0.');
        }

        $this->container['thickness_mm'] = $thickness_mm;

        return $this;
    }

    /**
     * Gets weight_gsm
     *
     * @return int|null
     */
    public function getWeightGsm()
    {
        return $this->container['weight_gsm'];
    }

    /**
     * Sets weight_gsm
     *
     * @param int|null $weight_gsm weight_gsm
     *
     * @return self
     */
    public function setWeightGsm($weight_gsm)
    {
        if (is_null($weight_gsm)) {
            array_push($this->openAPINullablesSetToNull, 'weight_gsm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weight_gsm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($weight_gsm) && ($weight_gsm <= 0)) {
            throw new \InvalidArgumentException('invalid value for $weight_gsm when calling ManufacturingMaterial., must be bigger than 0.');
        }

        $this->container['weight_gsm'] = $weight_gsm;

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
