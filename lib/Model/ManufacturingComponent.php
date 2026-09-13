<?php
/**
 * ManufacturingComponent
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
 * ManufacturingComponent Class Doc Comment
 *
 * @category Class
 * @description One physical component or meaningful intermediate assembly.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingComponent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'component_id' => 'string',
        'geometry' => '\Jawwws\Gnaww\Model\ManufacturingGeometry',
        'material' => '\Jawwws\Gnaww\Model\ManufacturingMaterial',
        'multiplicity' => 'int',
        'parent_component_id' => 'string',
        'regions' => '\Jawwws\Gnaww\Model\ManufacturingRegion[]',
        'role' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'component_id' => null,
        'geometry' => null,
        'material' => null,
        'multiplicity' => null,
        'parent_component_id' => null,
        'regions' => null,
        'role' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'component_id' => false,
        'geometry' => false,
        'material' => false,
        'multiplicity' => false,
        'parent_component_id' => true,
        'regions' => false,
        'role' => false
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
        'component_id' => 'component_id',
        'geometry' => 'geometry',
        'material' => 'material',
        'multiplicity' => 'multiplicity',
        'parent_component_id' => 'parent_component_id',
        'regions' => 'regions',
        'role' => 'role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'component_id' => 'setComponentId',
        'geometry' => 'setGeometry',
        'material' => 'setMaterial',
        'multiplicity' => 'setMultiplicity',
        'parent_component_id' => 'setParentComponentId',
        'regions' => 'setRegions',
        'role' => 'setRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'component_id' => 'getComponentId',
        'geometry' => 'getGeometry',
        'material' => 'getMaterial',
        'multiplicity' => 'getMultiplicity',
        'parent_component_id' => 'getParentComponentId',
        'regions' => 'getRegions',
        'role' => 'getRole'
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
        $this->setIfExists('component_id', $data ?? [], null);
        $this->setIfExists('geometry', $data ?? [], null);
        $this->setIfExists('material', $data ?? [], null);
        $this->setIfExists('multiplicity', $data ?? [], 1);
        $this->setIfExists('parent_component_id', $data ?? [], null);
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
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

        if ($this->container['component_id'] === null) {
            $invalidProperties[] = "'component_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['component_id'])) {
            $invalidProperties[] = "invalid value for 'component_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
        }

        if (!is_null($this->container['multiplicity']) && ($this->container['multiplicity'] <= 0)) {
            $invalidProperties[] = "invalid value for 'multiplicity', must be bigger than 0.";
        }

        if (!is_null($this->container['parent_component_id']) && !preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['parent_component_id'])) {
            $invalidProperties[] = "invalid value for 'parent_component_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
        }

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ((mb_strlen($this->container['role']) < 1)) {
            $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 1.";
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
     * Gets component_id
     *
     * @return string
     */
    public function getComponentId()
    {
        return $this->container['component_id'];
    }

    /**
     * Sets component_id
     *
     * @param string $component_id component_id
     *
     * @return self
     */
    public function setComponentId($component_id)
    {
        if (is_null($component_id)) {
            throw new \InvalidArgumentException('non-nullable component_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($component_id)))) {
            throw new \InvalidArgumentException("invalid value for \$component_id when calling ManufacturingComponent., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['component_id'] = $component_id;

        return $this;
    }

    /**
     * Gets geometry
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingGeometry|null
     */
    public function getGeometry()
    {
        return $this->container['geometry'];
    }

    /**
     * Sets geometry
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingGeometry|null $geometry geometry
     *
     * @return self
     */
    public function setGeometry($geometry)
    {
        if (is_null($geometry)) {
            throw new \InvalidArgumentException('non-nullable geometry cannot be null');
        }
        $this->container['geometry'] = $geometry;

        return $this;
    }

    /**
     * Gets material
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingMaterial|null
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingMaterial|null $material material
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
     * Gets multiplicity
     *
     * @return int|null
     */
    public function getMultiplicity()
    {
        return $this->container['multiplicity'];
    }

    /**
     * Sets multiplicity
     *
     * @param int|null $multiplicity multiplicity
     *
     * @return self
     */
    public function setMultiplicity($multiplicity)
    {
        if (is_null($multiplicity)) {
            throw new \InvalidArgumentException('non-nullable multiplicity cannot be null');
        }

        if (($multiplicity <= 0)) {
            throw new \InvalidArgumentException('invalid value for $multiplicity when calling ManufacturingComponent., must be bigger than 0.');
        }

        $this->container['multiplicity'] = $multiplicity;

        return $this;
    }

    /**
     * Gets parent_component_id
     *
     * @return string|null
     */
    public function getParentComponentId()
    {
        return $this->container['parent_component_id'];
    }

    /**
     * Sets parent_component_id
     *
     * @param string|null $parent_component_id parent_component_id
     *
     * @return self
     */
    public function setParentComponentId($parent_component_id)
    {
        if (is_null($parent_component_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_component_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_component_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($parent_component_id) && (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($parent_component_id)))) {
            throw new \InvalidArgumentException("invalid value for \$parent_component_id when calling ManufacturingComponent., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['parent_component_id'] = $parent_component_id;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \Jawwws\Gnaww\Model\ManufacturingRegion[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Jawwws\Gnaww\Model\ManufacturingRegion[]|null $regions regions
     *
     * @return self
     */
    public function setRegions($regions)
    {
        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }

        if ((mb_strlen($role) < 1)) {
            throw new \InvalidArgumentException('invalid length for $role when calling ManufacturingComponent., must be bigger than or equal to 1.');
        }

        $this->container['role'] = $role;

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
