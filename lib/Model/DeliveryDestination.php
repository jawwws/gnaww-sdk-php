<?php
/**
 * DeliveryDestination
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
 * DeliveryDestination Class Doc Comment
 *
 * @category Class
 * @description Destination information relevant to capability-level routing.
 * @package  Jawwws\Gnaww
 * @implements \ArrayAccess<string, mixed>
 */
class DeliveryDestination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DeliveryDestination';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'address_text' => 'string',
        'country_code' => 'string',
        'locality' => 'string',
        'postal_code' => 'string',
        'region' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'address_text' => null,
        'country_code' => null,
        'locality' => null,
        'postal_code' => null,
        'region' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'address_text' => true,
        'country_code' => false,
        'locality' => true,
        'postal_code' => true,
        'region' => true
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
        'address_text' => 'address_text',
        'country_code' => 'country_code',
        'locality' => 'locality',
        'postal_code' => 'postal_code',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_text' => 'setAddressText',
        'country_code' => 'setCountryCode',
        'locality' => 'setLocality',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_text' => 'getAddressText',
        'country_code' => 'getCountryCode',
        'locality' => 'getLocality',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion'
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
        $this->setIfExists('address_text', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
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

        if (!is_null($this->container['address_text']) && (mb_strlen($this->container['address_text']) > 500)) {
            $invalidProperties[] = "invalid value for 'address_text', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['address_text']) && (mb_strlen($this->container['address_text']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_text', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!preg_match("/^[A-Za-z]{2}$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^[A-Za-z]{2}$/.";
        }

        if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) > 120)) {
            $invalidProperties[] = "invalid value for 'locality', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) < 1)) {
            $invalidProperties[] = "invalid value for 'locality', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 32)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 120)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
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
     * Gets address_text
     *
     * @return string|null
     */
    public function getAddressText()
    {
        return $this->container['address_text'];
    }

    /**
     * Sets address_text
     *
     * @param string|null $address_text address_text
     *
     * @return self
     */
    public function setAddressText($address_text)
    {
        if (is_null($address_text)) {
            array_push($this->openAPINullablesSetToNull, 'address_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($address_text) && (mb_strlen($address_text) > 500)) {
            throw new \InvalidArgumentException('invalid length for $address_text when calling DeliveryDestination., must be smaller than or equal to 500.');
        }
        if (!is_null($address_text) && (mb_strlen($address_text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_text when calling DeliveryDestination., must be bigger than or equal to 1.');
        }

        $this->container['address_text'] = $address_text;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling DeliveryDestination., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling DeliveryDestination., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[A-Za-z]{2}$/", ObjectSerializer::toString($country_code)))) {
            throw new \InvalidArgumentException("invalid value for \$country_code when calling DeliveryDestination., must conform to the pattern /^[A-Za-z]{2}$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            array_push($this->openAPINullablesSetToNull, 'locality');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locality', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($locality) && (mb_strlen($locality) > 120)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling DeliveryDestination., must be smaller than or equal to 120.');
        }
        if (!is_null($locality) && (mb_strlen($locality) < 1)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling DeliveryDestination., must be bigger than or equal to 1.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            array_push($this->openAPINullablesSetToNull, 'postal_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postal_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 32)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling DeliveryDestination., must be smaller than or equal to 32.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling DeliveryDestination., must be bigger than or equal to 1.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            array_push($this->openAPINullablesSetToNull, 'region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($region) && (mb_strlen($region) > 120)) {
            throw new \InvalidArgumentException('invalid length for $region when calling DeliveryDestination., must be smaller than or equal to 120.');
        }
        if (!is_null($region) && (mb_strlen($region) < 1)) {
            throw new \InvalidArgumentException('invalid length for $region when calling DeliveryDestination., must be bigger than or equal to 1.');
        }

        $this->container['region'] = $region;

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
