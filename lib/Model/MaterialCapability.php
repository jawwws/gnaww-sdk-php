<?php
/**
 * MaterialCapability
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
 * MaterialCapability Class Doc Comment
 *
 * @category Class
 * @description A canonical material or substrate capability.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class MaterialCapability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MaterialCapability';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category' => 'string',
        'certifications' => 'string[]',
        'composition' => '\Jawwws\Gnaww\Model\MaterialCompositionPart[]',
        'finish' => 'string',
        'maximum_weight_gsm' => 'int',
        'minimum_weight_gsm' => 'int',
        'name' => 'string',
        'standard_weights_gsm' => 'int[]',
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
        'certifications' => null,
        'composition' => null,
        'finish' => null,
        'maximum_weight_gsm' => null,
        'minimum_weight_gsm' => null,
        'name' => null,
        'standard_weights_gsm' => null,
        'weight_gsm' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'category' => false,
        'certifications' => false,
        'composition' => false,
        'finish' => true,
        'maximum_weight_gsm' => true,
        'minimum_weight_gsm' => true,
        'name' => false,
        'standard_weights_gsm' => false,
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
        'certifications' => 'certifications',
        'composition' => 'composition',
        'finish' => 'finish',
        'maximum_weight_gsm' => 'maximum_weight_gsm',
        'minimum_weight_gsm' => 'minimum_weight_gsm',
        'name' => 'name',
        'standard_weights_gsm' => 'standard_weights_gsm',
        'weight_gsm' => 'weight_gsm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'certifications' => 'setCertifications',
        'composition' => 'setComposition',
        'finish' => 'setFinish',
        'maximum_weight_gsm' => 'setMaximumWeightGsm',
        'minimum_weight_gsm' => 'setMinimumWeightGsm',
        'name' => 'setName',
        'standard_weights_gsm' => 'setStandardWeightsGsm',
        'weight_gsm' => 'setWeightGsm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'certifications' => 'getCertifications',
        'composition' => 'getComposition',
        'finish' => 'getFinish',
        'maximum_weight_gsm' => 'getMaximumWeightGsm',
        'minimum_weight_gsm' => 'getMinimumWeightGsm',
        'name' => 'getName',
        'standard_weights_gsm' => 'getStandardWeightsGsm',
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
        $this->setIfExists('certifications', $data ?? [], null);
        $this->setIfExists('composition', $data ?? [], null);
        $this->setIfExists('finish', $data ?? [], null);
        $this->setIfExists('maximum_weight_gsm', $data ?? [], null);
        $this->setIfExists('minimum_weight_gsm', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('standard_weights_gsm', $data ?? [], null);
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

        if (!is_null($this->container['maximum_weight_gsm']) && ($this->container['maximum_weight_gsm'] <= 0)) {
            $invalidProperties[] = "invalid value for 'maximum_weight_gsm', must be bigger than 0.";
        }

        if (!is_null($this->container['minimum_weight_gsm']) && ($this->container['minimum_weight_gsm'] <= 0)) {
            $invalidProperties[] = "invalid value for 'minimum_weight_gsm', must be bigger than 0.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets certifications
     *
     * @return string[]|null
     */
    public function getCertifications()
    {
        return $this->container['certifications'];
    }

    /**
     * Sets certifications
     *
     * @param string[]|null $certifications certifications
     *
     * @return self
     */
    public function setCertifications($certifications)
    {
        if (is_null($certifications)) {
            throw new \InvalidArgumentException('non-nullable certifications cannot be null');
        }
        $this->container['certifications'] = $certifications;

        return $this;
    }

    /**
     * Gets composition
     *
     * @return \Jawwws\Gnaww\Model\MaterialCompositionPart[]|null
     */
    public function getComposition()
    {
        return $this->container['composition'];
    }

    /**
     * Sets composition
     *
     * @param \Jawwws\Gnaww\Model\MaterialCompositionPart[]|null $composition composition
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
     * Gets maximum_weight_gsm
     *
     * @return int|null
     */
    public function getMaximumWeightGsm()
    {
        return $this->container['maximum_weight_gsm'];
    }

    /**
     * Sets maximum_weight_gsm
     *
     * @param int|null $maximum_weight_gsm maximum_weight_gsm
     *
     * @return self
     */
    public function setMaximumWeightGsm($maximum_weight_gsm)
    {
        if (is_null($maximum_weight_gsm)) {
            array_push($this->openAPINullablesSetToNull, 'maximum_weight_gsm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maximum_weight_gsm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($maximum_weight_gsm) && ($maximum_weight_gsm <= 0)) {
            throw new \InvalidArgumentException('invalid value for $maximum_weight_gsm when calling MaterialCapability., must be bigger than 0.');
        }

        $this->container['maximum_weight_gsm'] = $maximum_weight_gsm;

        return $this;
    }

    /**
     * Gets minimum_weight_gsm
     *
     * @return int|null
     */
    public function getMinimumWeightGsm()
    {
        return $this->container['minimum_weight_gsm'];
    }

    /**
     * Sets minimum_weight_gsm
     *
     * @param int|null $minimum_weight_gsm minimum_weight_gsm
     *
     * @return self
     */
    public function setMinimumWeightGsm($minimum_weight_gsm)
    {
        if (is_null($minimum_weight_gsm)) {
            array_push($this->openAPINullablesSetToNull, 'minimum_weight_gsm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minimum_weight_gsm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($minimum_weight_gsm) && ($minimum_weight_gsm <= 0)) {
            throw new \InvalidArgumentException('invalid value for $minimum_weight_gsm when calling MaterialCapability., must be bigger than 0.');
        }

        $this->container['minimum_weight_gsm'] = $minimum_weight_gsm;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets standard_weights_gsm
     *
     * @return int[]|null
     */
    public function getStandardWeightsGsm()
    {
        return $this->container['standard_weights_gsm'];
    }

    /**
     * Sets standard_weights_gsm
     *
     * @param int[]|null $standard_weights_gsm standard_weights_gsm
     *
     * @return self
     */
    public function setStandardWeightsGsm($standard_weights_gsm)
    {
        if (is_null($standard_weights_gsm)) {
            throw new \InvalidArgumentException('non-nullable standard_weights_gsm cannot be null');
        }
        $this->container['standard_weights_gsm'] = $standard_weights_gsm;

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
            throw new \InvalidArgumentException('invalid value for $weight_gsm when calling MaterialCapability., must be bigger than 0.');
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
