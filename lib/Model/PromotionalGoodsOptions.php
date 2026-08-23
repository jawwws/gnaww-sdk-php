<?php
/**
 * PromotionalGoodsOptions
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
 * PromotionalGoodsOptions Class Doc Comment
 *
 * @category Class
 * @description Promotional-goods production and decoration options.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionalGoodsOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PromotionalGoodsOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'capacity_ml' => 'int',
        'decoration_diameter_mm' => 'float',
        'decoration_height_mm' => 'float',
        'decoration_method' => 'string',
        'decoration_position' => 'string',
        'decoration_width_mm' => 'float',
        'packaging_type' => 'string',
        'personalisation_required' => 'bool',
        'product_colour' => 'string',
        'required_compliance_claims' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'capacity_ml' => null,
        'decoration_diameter_mm' => null,
        'decoration_height_mm' => null,
        'decoration_method' => null,
        'decoration_position' => null,
        'decoration_width_mm' => null,
        'packaging_type' => null,
        'personalisation_required' => null,
        'product_colour' => null,
        'required_compliance_claims' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'capacity_ml' => true,
        'decoration_diameter_mm' => true,
        'decoration_height_mm' => true,
        'decoration_method' => false,
        'decoration_position' => false,
        'decoration_width_mm' => true,
        'packaging_type' => false,
        'personalisation_required' => false,
        'product_colour' => true,
        'required_compliance_claims' => false
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
        'capacity_ml' => 'capacity_ml',
        'decoration_diameter_mm' => 'decoration_diameter_mm',
        'decoration_height_mm' => 'decoration_height_mm',
        'decoration_method' => 'decoration_method',
        'decoration_position' => 'decoration_position',
        'decoration_width_mm' => 'decoration_width_mm',
        'packaging_type' => 'packaging_type',
        'personalisation_required' => 'personalisation_required',
        'product_colour' => 'product_colour',
        'required_compliance_claims' => 'required_compliance_claims'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capacity_ml' => 'setCapacityMl',
        'decoration_diameter_mm' => 'setDecorationDiameterMm',
        'decoration_height_mm' => 'setDecorationHeightMm',
        'decoration_method' => 'setDecorationMethod',
        'decoration_position' => 'setDecorationPosition',
        'decoration_width_mm' => 'setDecorationWidthMm',
        'packaging_type' => 'setPackagingType',
        'personalisation_required' => 'setPersonalisationRequired',
        'product_colour' => 'setProductColour',
        'required_compliance_claims' => 'setRequiredComplianceClaims'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capacity_ml' => 'getCapacityMl',
        'decoration_diameter_mm' => 'getDecorationDiameterMm',
        'decoration_height_mm' => 'getDecorationHeightMm',
        'decoration_method' => 'getDecorationMethod',
        'decoration_position' => 'getDecorationPosition',
        'decoration_width_mm' => 'getDecorationWidthMm',
        'packaging_type' => 'getPackagingType',
        'personalisation_required' => 'getPersonalisationRequired',
        'product_colour' => 'getProductColour',
        'required_compliance_claims' => 'getRequiredComplianceClaims'
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

    public const DECORATION_METHOD_DTG = 'dtg';
    public const DECORATION_METHOD_DTF = 'dtf';
    public const DECORATION_METHOD_HTV = 'htv';
    public const DECORATION_METHOD_EMBROIDERY = 'embroidery';
    public const DECORATION_METHOD_SCREEN_PRINT = 'screen_print';
    public const DECORATION_METHOD_SUBLIMATION = 'sublimation';
    public const DECORATION_METHOD_PAD_PRINT = 'pad_print';
    public const DECORATION_METHOD_UV_PRINT = 'uv_print';
    public const DECORATION_METHOD_ENGRAVING = 'engraving';
    public const DECORATION_METHOD_LASER_ENGRAVING = 'laser_engraving';
    public const DECORATION_METHOD_UNKNOWN = 'unknown';
    public const DECORATION_POSITION_FRONT = 'front';
    public const DECORATION_POSITION_BACK = 'back';
    public const DECORATION_POSITION_LEFT_CHEST = 'left_chest';
    public const DECORATION_POSITION_RIGHT_CHEST = 'right_chest';
    public const DECORATION_POSITION_SLEEVE = 'sleeve';
    public const DECORATION_POSITION_CAP_FRONT = 'cap_front';
    public const DECORATION_POSITION_LEFT = 'left';
    public const DECORATION_POSITION_RIGHT = 'right';
    public const DECORATION_POSITION_WRAP = 'wrap';
    public const DECORATION_POSITION_BARREL = 'barrel';
    public const DECORATION_POSITION_LID = 'lid';
    public const DECORATION_POSITION_BASE = 'base';
    public const DECORATION_POSITION_UNKNOWN = 'unknown';
    public const PACKAGING_TYPE_BULK = 'bulk';
    public const PACKAGING_TYPE_INDIVIDUAL_BAG = 'individual_bag';
    public const PACKAGING_TYPE_GIFT_BOX = 'gift_box';
    public const PACKAGING_TYPE_RETAIL_BOX = 'retail_box';
    public const PACKAGING_TYPE_CUSTOM = 'custom';
    public const PACKAGING_TYPE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDecorationMethodAllowableValues()
    {
        return [
            self::DECORATION_METHOD_DTG,
            self::DECORATION_METHOD_DTF,
            self::DECORATION_METHOD_HTV,
            self::DECORATION_METHOD_EMBROIDERY,
            self::DECORATION_METHOD_SCREEN_PRINT,
            self::DECORATION_METHOD_SUBLIMATION,
            self::DECORATION_METHOD_PAD_PRINT,
            self::DECORATION_METHOD_UV_PRINT,
            self::DECORATION_METHOD_ENGRAVING,
            self::DECORATION_METHOD_LASER_ENGRAVING,
            self::DECORATION_METHOD_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDecorationPositionAllowableValues()
    {
        return [
            self::DECORATION_POSITION_FRONT,
            self::DECORATION_POSITION_BACK,
            self::DECORATION_POSITION_LEFT_CHEST,
            self::DECORATION_POSITION_RIGHT_CHEST,
            self::DECORATION_POSITION_SLEEVE,
            self::DECORATION_POSITION_CAP_FRONT,
            self::DECORATION_POSITION_LEFT,
            self::DECORATION_POSITION_RIGHT,
            self::DECORATION_POSITION_WRAP,
            self::DECORATION_POSITION_BARREL,
            self::DECORATION_POSITION_LID,
            self::DECORATION_POSITION_BASE,
            self::DECORATION_POSITION_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPackagingTypeAllowableValues()
    {
        return [
            self::PACKAGING_TYPE_BULK,
            self::PACKAGING_TYPE_INDIVIDUAL_BAG,
            self::PACKAGING_TYPE_GIFT_BOX,
            self::PACKAGING_TYPE_RETAIL_BOX,
            self::PACKAGING_TYPE_CUSTOM,
            self::PACKAGING_TYPE_UNKNOWN,
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
        $this->setIfExists('capacity_ml', $data ?? [], null);
        $this->setIfExists('decoration_diameter_mm', $data ?? [], null);
        $this->setIfExists('decoration_height_mm', $data ?? [], null);
        $this->setIfExists('decoration_method', $data ?? [], 'unknown');
        $this->setIfExists('decoration_position', $data ?? [], 'unknown');
        $this->setIfExists('decoration_width_mm', $data ?? [], null);
        $this->setIfExists('packaging_type', $data ?? [], 'unknown');
        $this->setIfExists('personalisation_required', $data ?? [], false);
        $this->setIfExists('product_colour', $data ?? [], null);
        $this->setIfExists('required_compliance_claims', $data ?? [], null);
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

        if (!is_null($this->container['capacity_ml']) && ($this->container['capacity_ml'] <= 0)) {
            $invalidProperties[] = "invalid value for 'capacity_ml', must be bigger than 0.";
        }

        if (!is_null($this->container['decoration_diameter_mm']) && ($this->container['decoration_diameter_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'decoration_diameter_mm', must be bigger than 0.0.";
        }

        if (!is_null($this->container['decoration_height_mm']) && ($this->container['decoration_height_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'decoration_height_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getDecorationMethodAllowableValues();
        if (!is_null($this->container['decoration_method']) && !in_array($this->container['decoration_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'decoration_method', must be one of '%s'",
                $this->container['decoration_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDecorationPositionAllowableValues();
        if (!is_null($this->container['decoration_position']) && !in_array($this->container['decoration_position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'decoration_position', must be one of '%s'",
                $this->container['decoration_position'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['decoration_width_mm']) && ($this->container['decoration_width_mm'] <= 0.0)) {
            $invalidProperties[] = "invalid value for 'decoration_width_mm', must be bigger than 0.0.";
        }

        $allowedValues = $this->getPackagingTypeAllowableValues();
        if (!is_null($this->container['packaging_type']) && !in_array($this->container['packaging_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'packaging_type', must be one of '%s'",
                $this->container['packaging_type'],
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
     * Gets capacity_ml
     *
     * @return int|null
     */
    public function getCapacityMl()
    {
        return $this->container['capacity_ml'];
    }

    /**
     * Sets capacity_ml
     *
     * @param int|null $capacity_ml capacity_ml
     *
     * @return self
     */
    public function setCapacityMl($capacity_ml)
    {
        if (is_null($capacity_ml)) {
            array_push($this->openAPINullablesSetToNull, 'capacity_ml');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacity_ml', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($capacity_ml) && ($capacity_ml <= 0)) {
            throw new \InvalidArgumentException('invalid value for $capacity_ml when calling PromotionalGoodsOptions., must be bigger than 0.');
        }

        $this->container['capacity_ml'] = $capacity_ml;

        return $this;
    }

    /**
     * Gets decoration_diameter_mm
     *
     * @return float|null
     */
    public function getDecorationDiameterMm()
    {
        return $this->container['decoration_diameter_mm'];
    }

    /**
     * Sets decoration_diameter_mm
     *
     * @param float|null $decoration_diameter_mm decoration_diameter_mm
     *
     * @return self
     */
    public function setDecorationDiameterMm($decoration_diameter_mm)
    {
        if (is_null($decoration_diameter_mm)) {
            array_push($this->openAPINullablesSetToNull, 'decoration_diameter_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('decoration_diameter_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($decoration_diameter_mm) && ($decoration_diameter_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $decoration_diameter_mm when calling PromotionalGoodsOptions., must be bigger than 0.0.');
        }

        $this->container['decoration_diameter_mm'] = $decoration_diameter_mm;

        return $this;
    }

    /**
     * Gets decoration_height_mm
     *
     * @return float|null
     */
    public function getDecorationHeightMm()
    {
        return $this->container['decoration_height_mm'];
    }

    /**
     * Sets decoration_height_mm
     *
     * @param float|null $decoration_height_mm decoration_height_mm
     *
     * @return self
     */
    public function setDecorationHeightMm($decoration_height_mm)
    {
        if (is_null($decoration_height_mm)) {
            array_push($this->openAPINullablesSetToNull, 'decoration_height_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('decoration_height_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($decoration_height_mm) && ($decoration_height_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $decoration_height_mm when calling PromotionalGoodsOptions., must be bigger than 0.0.');
        }

        $this->container['decoration_height_mm'] = $decoration_height_mm;

        return $this;
    }

    /**
     * Gets decoration_method
     *
     * @return string|null
     */
    public function getDecorationMethod()
    {
        return $this->container['decoration_method'];
    }

    /**
     * Sets decoration_method
     *
     * @param string|null $decoration_method decoration_method
     *
     * @return self
     */
    public function setDecorationMethod($decoration_method)
    {
        if (is_null($decoration_method)) {
            throw new \InvalidArgumentException('non-nullable decoration_method cannot be null');
        }
        $allowedValues = $this->getDecorationMethodAllowableValues();
        if (!in_array($decoration_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'decoration_method', must be one of '%s'",
                    $decoration_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['decoration_method'] = $decoration_method;

        return $this;
    }

    /**
     * Gets decoration_position
     *
     * @return string|null
     */
    public function getDecorationPosition()
    {
        return $this->container['decoration_position'];
    }

    /**
     * Sets decoration_position
     *
     * @param string|null $decoration_position decoration_position
     *
     * @return self
     */
    public function setDecorationPosition($decoration_position)
    {
        if (is_null($decoration_position)) {
            throw new \InvalidArgumentException('non-nullable decoration_position cannot be null');
        }
        $allowedValues = $this->getDecorationPositionAllowableValues();
        if (!in_array($decoration_position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'decoration_position', must be one of '%s'",
                    $decoration_position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['decoration_position'] = $decoration_position;

        return $this;
    }

    /**
     * Gets decoration_width_mm
     *
     * @return float|null
     */
    public function getDecorationWidthMm()
    {
        return $this->container['decoration_width_mm'];
    }

    /**
     * Sets decoration_width_mm
     *
     * @param float|null $decoration_width_mm decoration_width_mm
     *
     * @return self
     */
    public function setDecorationWidthMm($decoration_width_mm)
    {
        if (is_null($decoration_width_mm)) {
            array_push($this->openAPINullablesSetToNull, 'decoration_width_mm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('decoration_width_mm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($decoration_width_mm) && ($decoration_width_mm <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for $decoration_width_mm when calling PromotionalGoodsOptions., must be bigger than 0.0.');
        }

        $this->container['decoration_width_mm'] = $decoration_width_mm;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param string|null $packaging_type packaging_type
     *
     * @return self
     */
    public function setPackagingType($packaging_type)
    {
        if (is_null($packaging_type)) {
            throw new \InvalidArgumentException('non-nullable packaging_type cannot be null');
        }
        $allowedValues = $this->getPackagingTypeAllowableValues();
        if (!in_array($packaging_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'packaging_type', must be one of '%s'",
                    $packaging_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets personalisation_required
     *
     * @return bool|null
     */
    public function getPersonalisationRequired()
    {
        return $this->container['personalisation_required'];
    }

    /**
     * Sets personalisation_required
     *
     * @param bool|null $personalisation_required personalisation_required
     *
     * @return self
     */
    public function setPersonalisationRequired($personalisation_required)
    {
        if (is_null($personalisation_required)) {
            throw new \InvalidArgumentException('non-nullable personalisation_required cannot be null');
        }
        $this->container['personalisation_required'] = $personalisation_required;

        return $this;
    }

    /**
     * Gets product_colour
     *
     * @return string|null
     */
    public function getProductColour()
    {
        return $this->container['product_colour'];
    }

    /**
     * Sets product_colour
     *
     * @param string|null $product_colour product_colour
     *
     * @return self
     */
    public function setProductColour($product_colour)
    {
        if (is_null($product_colour)) {
            array_push($this->openAPINullablesSetToNull, 'product_colour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_colour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_colour'] = $product_colour;

        return $this;
    }

    /**
     * Gets required_compliance_claims
     *
     * @return string[]|null
     */
    public function getRequiredComplianceClaims()
    {
        return $this->container['required_compliance_claims'];
    }

    /**
     * Sets required_compliance_claims
     *
     * @param string[]|null $required_compliance_claims required_compliance_claims
     *
     * @return self
     */
    public function setRequiredComplianceClaims($required_compliance_claims)
    {
        if (is_null($required_compliance_claims)) {
            throw new \InvalidArgumentException('non-nullable required_compliance_claims cannot be null');
        }
        $this->container['required_compliance_claims'] = $required_compliance_claims;

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
