<?php
/**
 * ManufacturingVariation
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
 * ManufacturingVariation Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ManufacturingVariation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ManufacturingVariation';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'data_asset_ref' => 'string',
        'fields' => '\Jawwws\Gnaww\Model\VariationField[]',
        'scope' => 'string',
        'source_basis' => 'string',
        'targets' => '\Jawwws\Gnaww\Model\OperationTarget[]',
        'variation_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'data_asset_ref' => null,
        'fields' => null,
        'scope' => null,
        'source_basis' => null,
        'targets' => null,
        'variation_id' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'data_asset_ref' => true,
        'fields' => false,
        'scope' => false,
        'source_basis' => false,
        'targets' => false,
        'variation_id' => false
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
        'data_asset_ref' => 'data_asset_ref',
        'fields' => 'fields',
        'scope' => 'scope',
        'source_basis' => 'source_basis',
        'targets' => 'targets',
        'variation_id' => 'variation_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_asset_ref' => 'setDataAssetRef',
        'fields' => 'setFields',
        'scope' => 'setScope',
        'source_basis' => 'setSourceBasis',
        'targets' => 'setTargets',
        'variation_id' => 'setVariationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_asset_ref' => 'getDataAssetRef',
        'fields' => 'getFields',
        'scope' => 'getScope',
        'source_basis' => 'getSourceBasis',
        'targets' => 'getTargets',
        'variation_id' => 'getVariationId'
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

    public const SCOPE_PER_UNIT = 'per_unit';
    public const SCOPE_GROUPED = 'grouped';
    public const SCOPE_BATCH = 'batch';
    public const SOURCE_BASIS_EXPLICIT = 'explicit';
    public const SOURCE_BASIS_LEGACY_VARIABLE_DATA = 'legacy_variable_data';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_PER_UNIT,
            self::SCOPE_GROUPED,
            self::SCOPE_BATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceBasisAllowableValues()
    {
        return [
            self::SOURCE_BASIS_EXPLICIT,
            self::SOURCE_BASIS_LEGACY_VARIABLE_DATA,
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
        $this->setIfExists('data_asset_ref', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('source_basis', $data ?? [], 'explicit');
        $this->setIfExists('targets', $data ?? [], null);
        $this->setIfExists('variation_id', $data ?? [], null);
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

        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scope', must be one of '%s'",
                $this->container['scope'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceBasisAllowableValues();
        if (!is_null($this->container['source_basis']) && !in_array($this->container['source_basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source_basis', must be one of '%s'",
                $this->container['source_basis'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
        }
        if ((count($this->container['targets']) < 1)) {
            $invalidProperties[] = "invalid value for 'targets', number of items must be greater than or equal to 1.";
        }

        if ($this->container['variation_id'] === null) {
            $invalidProperties[] = "'variation_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", $this->container['variation_id'])) {
            $invalidProperties[] = "invalid value for 'variation_id', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.";
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
     * Gets data_asset_ref
     *
     * @return string|null
     */
    public function getDataAssetRef()
    {
        return $this->container['data_asset_ref'];
    }

    /**
     * Sets data_asset_ref
     *
     * @param string|null $data_asset_ref data_asset_ref
     *
     * @return self
     */
    public function setDataAssetRef($data_asset_ref)
    {
        if (is_null($data_asset_ref)) {
            array_push($this->openAPINullablesSetToNull, 'data_asset_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_asset_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_asset_ref'] = $data_asset_ref;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Jawwws\Gnaww\Model\VariationField[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Jawwws\Gnaww\Model\VariationField[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $allowedValues = $this->getScopeAllowableValues();
        if (!in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scope', must be one of '%s'",
                    $scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets source_basis
     *
     * @return string|null
     */
    public function getSourceBasis()
    {
        return $this->container['source_basis'];
    }

    /**
     * Sets source_basis
     *
     * @param string|null $source_basis source_basis
     *
     * @return self
     */
    public function setSourceBasis($source_basis)
    {
        if (is_null($source_basis)) {
            throw new \InvalidArgumentException('non-nullable source_basis cannot be null');
        }
        $allowedValues = $this->getSourceBasisAllowableValues();
        if (!in_array($source_basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source_basis', must be one of '%s'",
                    $source_basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source_basis'] = $source_basis;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \Jawwws\Gnaww\Model\OperationTarget[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \Jawwws\Gnaww\Model\OperationTarget[] $targets targets
     *
     * @return self
     */
    public function setTargets($targets)
    {
        if (is_null($targets)) {
            throw new \InvalidArgumentException('non-nullable targets cannot be null');
        }


        if ((count($targets) < 1)) {
            throw new \InvalidArgumentException('invalid length for $targets when calling ManufacturingVariation., number of items must be greater than or equal to 1.');
        }
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets variation_id
     *
     * @return string
     */
    public function getVariationId()
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param string $variation_id variation_id
     *
     * @return self
     */
    public function setVariationId($variation_id)
    {
        if (is_null($variation_id)) {
            throw new \InvalidArgumentException('non-nullable variation_id cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9][A-Za-z0-9_.:-]*$/", ObjectSerializer::toString($variation_id)))) {
            throw new \InvalidArgumentException("invalid value for \$variation_id when calling ManufacturingVariation., must conform to the pattern /^[A-Za-z0-9][A-Za-z0-9_.:-]*$/.");
        }

        $this->container['variation_id'] = $variation_id;

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
