<?php
/**
 * ProductOptions
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
 * ProductOptions Class Doc Comment
 *
 * @category Class
 * @description Family-specific canonical options carried without supplier payload leakage.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class ProductOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProductOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'apparel' => '\Jawwws\Gnaww\Model\ApparelDecorationOptions',
        'book_document' => '\Jawwws\Gnaww\Model\BookDocumentOptions',
        'fabric_homewares' => '\Jawwws\Gnaww\Model\FabricHomewaresOptions',
        'folded_leaflet' => '\Jawwws\Gnaww\Model\FoldedLeafletOptions',
        'promotional_goods' => '\Jawwws\Gnaww\Model\PromotionalGoodsOptions'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'apparel' => null,
        'book_document' => null,
        'fabric_homewares' => null,
        'folded_leaflet' => null,
        'promotional_goods' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'apparel' => true,
        'book_document' => true,
        'fabric_homewares' => true,
        'folded_leaflet' => true,
        'promotional_goods' => true
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
        'apparel' => 'apparel',
        'book_document' => 'book_document',
        'fabric_homewares' => 'fabric_homewares',
        'folded_leaflet' => 'folded_leaflet',
        'promotional_goods' => 'promotional_goods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apparel' => 'setApparel',
        'book_document' => 'setBookDocument',
        'fabric_homewares' => 'setFabricHomewares',
        'folded_leaflet' => 'setFoldedLeaflet',
        'promotional_goods' => 'setPromotionalGoods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apparel' => 'getApparel',
        'book_document' => 'getBookDocument',
        'fabric_homewares' => 'getFabricHomewares',
        'folded_leaflet' => 'getFoldedLeaflet',
        'promotional_goods' => 'getPromotionalGoods'
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
        $this->setIfExists('apparel', $data ?? [], null);
        $this->setIfExists('book_document', $data ?? [], null);
        $this->setIfExists('fabric_homewares', $data ?? [], null);
        $this->setIfExists('folded_leaflet', $data ?? [], null);
        $this->setIfExists('promotional_goods', $data ?? [], null);
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
     * Gets apparel
     *
     * @return \Jawwws\Gnaww\Model\ApparelDecorationOptions|null
     */
    public function getApparel()
    {
        return $this->container['apparel'];
    }

    /**
     * Sets apparel
     *
     * @param \Jawwws\Gnaww\Model\ApparelDecorationOptions|null $apparel apparel
     *
     * @return self
     */
    public function setApparel($apparel)
    {
        if (is_null($apparel)) {
            array_push($this->openAPINullablesSetToNull, 'apparel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('apparel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['apparel'] = $apparel;

        return $this;
    }

    /**
     * Gets book_document
     *
     * @return \Jawwws\Gnaww\Model\BookDocumentOptions|null
     */
    public function getBookDocument()
    {
        return $this->container['book_document'];
    }

    /**
     * Sets book_document
     *
     * @param \Jawwws\Gnaww\Model\BookDocumentOptions|null $book_document book_document
     *
     * @return self
     */
    public function setBookDocument($book_document)
    {
        if (is_null($book_document)) {
            array_push($this->openAPINullablesSetToNull, 'book_document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('book_document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['book_document'] = $book_document;

        return $this;
    }

    /**
     * Gets fabric_homewares
     *
     * @return \Jawwws\Gnaww\Model\FabricHomewaresOptions|null
     */
    public function getFabricHomewares()
    {
        return $this->container['fabric_homewares'];
    }

    /**
     * Sets fabric_homewares
     *
     * @param \Jawwws\Gnaww\Model\FabricHomewaresOptions|null $fabric_homewares fabric_homewares
     *
     * @return self
     */
    public function setFabricHomewares($fabric_homewares)
    {
        if (is_null($fabric_homewares)) {
            array_push($this->openAPINullablesSetToNull, 'fabric_homewares');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fabric_homewares', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fabric_homewares'] = $fabric_homewares;

        return $this;
    }

    /**
     * Gets folded_leaflet
     *
     * @return \Jawwws\Gnaww\Model\FoldedLeafletOptions|null
     */
    public function getFoldedLeaflet()
    {
        return $this->container['folded_leaflet'];
    }

    /**
     * Sets folded_leaflet
     *
     * @param \Jawwws\Gnaww\Model\FoldedLeafletOptions|null $folded_leaflet folded_leaflet
     *
     * @return self
     */
    public function setFoldedLeaflet($folded_leaflet)
    {
        if (is_null($folded_leaflet)) {
            array_push($this->openAPINullablesSetToNull, 'folded_leaflet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('folded_leaflet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['folded_leaflet'] = $folded_leaflet;

        return $this;
    }

    /**
     * Gets promotional_goods
     *
     * @return \Jawwws\Gnaww\Model\PromotionalGoodsOptions|null
     */
    public function getPromotionalGoods()
    {
        return $this->container['promotional_goods'];
    }

    /**
     * Sets promotional_goods
     *
     * @param \Jawwws\Gnaww\Model\PromotionalGoodsOptions|null $promotional_goods promotional_goods
     *
     * @return self
     */
    public function setPromotionalGoods($promotional_goods)
    {
        if (is_null($promotional_goods)) {
            array_push($this->openAPINullablesSetToNull, 'promotional_goods');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('promotional_goods', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['promotional_goods'] = $promotional_goods;

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
