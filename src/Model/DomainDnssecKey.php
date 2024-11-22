<?php
/**
 * DomainDnssecKey
 *
 * PHP version 8.1
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Layer7\Openprovider\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Layer7\Openprovider\ObjectSerializer;

/**
 * DomainDnssecKey Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DomainDnssecKey implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'domainDnssecKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'alg' => 'int',
        'flags' => 'int',
        'protocol' => 'int',
        'pub_key' => 'string',
        'readonly' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'alg' => 'int32',
        'flags' => 'int32',
        'protocol' => 'int32',
        'pub_key' => null,
        'readonly' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'alg' => false,
        'flags' => false,
        'protocol' => false,
        'pub_key' => false,
        'readonly' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'alg' => 'alg',
        'flags' => 'flags',
        'protocol' => 'protocol',
        'pub_key' => 'pub_key',
        'readonly' => 'readonly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'alg' => 'setAlg',
        'flags' => 'setFlags',
        'protocol' => 'setProtocol',
        'pub_key' => 'setPubKey',
        'readonly' => 'setReadonly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'alg' => 'getAlg',
        'flags' => 'getFlags',
        'protocol' => 'getProtocol',
        'pub_key' => 'getPubKey',
        'readonly' => 'getReadonly'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('alg', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('protocol', $data ?? [], null);
        $this->setIfExists('pub_key', $data ?? [], null);
        $this->setIfExists('readonly', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets alg
     *
     * @return int|null
     */
    public function getAlg(): ?int
    {
        return $this->container['alg'];
    }

    /**
     * Sets alg
     *
     * @param int|null $alg alg
     *
     * @return $this
     */
    public function setAlg(?int $alg): static
    {
        if (is_null($alg)) {
            throw new InvalidArgumentException('non-nullable alg cannot be null');
        }
        $this->container['alg'] = $alg;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return int|null
     */
    public function getFlags(): ?int
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param int|null $flags flags
     *
     * @return $this
     */
    public function setFlags(?int $flags): static
    {
        if (is_null($flags)) {
            throw new InvalidArgumentException('non-nullable flags cannot be null');
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return int|null
     */
    public function getProtocol(): ?int
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param int|null $protocol protocol
     *
     * @return $this
     */
    public function setProtocol(?int $protocol): static
    {
        if (is_null($protocol)) {
            throw new InvalidArgumentException('non-nullable protocol cannot be null');
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets pub_key
     *
     * @return string|null
     */
    public function getPubKey(): ?string
    {
        return $this->container['pub_key'];
    }

    /**
     * Sets pub_key
     *
     * @param string|null $pub_key pub_key
     *
     * @return $this
     */
    public function setPubKey(?string $pub_key): static
    {
        if (is_null($pub_key)) {
            throw new InvalidArgumentException('non-nullable pub_key cannot be null');
        }
        $this->container['pub_key'] = $pub_key;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return int|null
     */
    public function getReadonly(): ?int
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param int|null $readonly readonly
     *
     * @return $this
     */
    public function setReadonly(?int $readonly): static
    {
        if (is_null($readonly)) {
            throw new InvalidArgumentException('non-nullable readonly cannot be null');
        }
        $this->container['readonly'] = $readonly;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
     * @param integer $offset Offset
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


