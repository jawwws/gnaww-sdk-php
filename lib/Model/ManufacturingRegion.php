<?php
/**
 * ManufacturingRegion
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
 * ManufacturingRegion Class Doc Comment
 *
 * @category Class
 * @description Addressable production target within one component.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingRegion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingRegion';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'edge' => 'string',
        'face' => 'string',
        'geometry' => '\Jawwws\Gnaww\Model\ManufacturingRegionGeometry',
        'kind' => 'string',
        'name' => 'string',
        'region_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'edge' => null,
        'face' => null,
        'geometry' => null,
        'kind' => null,
        'name' => null,
        'region_id' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'edge' => true,
        'face' => true,
        'geometry' => true,
        'kind' => false,
        'name' => true,
        'region_id' => false
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
        'edge' => 'edge',
        'face' => 'face',
        'geometry' => 'geometry',
        'kind' => 'kind',
        'name' => 'name',
        'region_id' => 'region_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge' => 'setEdge',
        'face' => 'setFace',
        'geometry' => 'setGeometry',
        'kind' => 'setKind',
        'name' => 'setName',
        'region_id' => 'setRegionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge' => 'getEdge',
        'face' => 'getFace',
        'geometry' => 'getGeometry',
        'kind' => 'getKind',
        'name' => 'getName',
        'region_id' => 'getRegionId'
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

    public const FACE_FRONT = 'front';
    public const FACE_BACK = 'back';
    public const FACE_TOP = 'top';
    public const FACE_BOTTOM = 'bottom';
    public const FACE_LEFT = 'left';
    public const FACE_RIGHT = 'right';
    public const FACE_INSIDE = 'inside';
    public const FACE_OUTSIDE = 'outside';
    public const KIND_FACE = 'face';
    public const KIND_EDGE = 'edge';
    public const KIND_AREA = 'area';
    public const KIND_PATH = 'path';
    public const KIND_NAMED = 'named';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFaceAllowableValues()
    {
        return [
            self::FACE_FRONT,
            self::FACE_BACK,
            self::FACE_TOP,
            self::FACE_BOTTOM,
            self::FACE_LEFT,
            self::FACE_RIGHT,
            self::FACE_INSIDE,
            self::FACE_OUTSIDE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_FACE,
            self::KIND_EDGE,
            self::KIND_AREA,
            self::KIND_PATH,
            self::KIND_NAMED,
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
        $this->setIfExists('edge', $data ?? [], null);
        $this->setIfExists('face', $data ?? [], null);
        $this->setIfExists('geometry', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
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

        $allowedValues = $this->getFaceAllowableValues();
        if (!is_null($this->container['face']) && !in_array($this->container['face'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'face', must be one of '%s'",
                $this->container['face'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['region_id'])) {
            $invalidProperties[] = "invalid value for 'region_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
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
     * Gets edge
     *
     * @return string|null
     */
    public function getEdge()
    {
        return $this->container['edge'];
    }

    /**
     * Sets edge
     *
     * @param string|null $edge edge
     *
     * @return self
     */
    public function setEdge($edge)
    {
        if (is_null($edge)) {
            array_push($this->openAPINullablesSetToNull, 'edge');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edge', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edge'] = $edge;

        return $this;
    }

    /**
     * Gets face
     *
     * @return string|null
     */
    public function getFace()
    {
        return $this->container['face'];
    }

    /**
     * Sets face
     *
     * @param string|null $face face
     *
     * @return self
     */
    public function setFace($face)
    {
        if (is_null($face)) {
            array_push($this->openAPINullablesSetToNull, 'face');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('face', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getFaceAllowableValues();
        if (!is_null($face) && !in_array($face, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'face', must be one of '%s'",
                    $face,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['face'] = $face;

        return $this;
    }

    /**
     * Gets geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingRegionGeometry|null
     */
    public function getGeometry()
    {
        return $this->container['geometry'];
    }

    /**
     * Sets geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingRegionGeometry|null $geometry geometry
     *
     * @return self
     */
    public function setGeometry($geometry)
    {
        if (is_null($geometry)) {
            array_push($this->openAPINullablesSetToNull, 'geometry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('geometry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['geometry'] = $geometry;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind
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
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id region_id
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($region_id)))) {
            throw new \InvalidArgumentException("invalid value for \$region_id when calling ManufacturingRegion., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['region_id'] = $region_id;

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
