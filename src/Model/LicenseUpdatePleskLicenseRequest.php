<?php
/**
 * LicenseUpdatePleskLicenseRequest
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
 * LicenseUpdatePleskLicenseRequest Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LicenseUpdatePleskLicenseRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'licenseUpdatePleskLicenseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'attached_keys' => 'string[]',
        'comment' => 'string',
        'ip_address_binding' => 'string',
        'items' => 'string[]',
        'key_id' => 'int',
        'parent_key_id' => 'int',
        'period' => 'int',
        'restrict_ip_binding' => 'bool',
        'suspended' => 'bool',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'attached_keys' => null,
        'comment' => null,
        'ip_address_binding' => null,
        'items' => null,
        'key_id' => 'int32',
        'parent_key_id' => 'int32',
        'period' => 'int32',
        'restrict_ip_binding' => 'boolean',
        'suspended' => 'boolean',
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'attached_keys' => false,
        'comment' => false,
        'ip_address_binding' => false,
        'items' => false,
        'key_id' => false,
        'parent_key_id' => false,
        'period' => false,
        'restrict_ip_binding' => false,
        'suspended' => false,
        'title' => false
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
        'attached_keys' => 'attached_keys',
        'comment' => 'comment',
        'ip_address_binding' => 'ip_address_binding',
        'items' => 'items',
        'key_id' => 'key_id',
        'parent_key_id' => 'parent_key_id',
        'period' => 'period',
        'restrict_ip_binding' => 'restrict_ip_binding',
        'suspended' => 'suspended',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'attached_keys' => 'setAttachedKeys',
        'comment' => 'setComment',
        'ip_address_binding' => 'setIpAddressBinding',
        'items' => 'setItems',
        'key_id' => 'setKeyId',
        'parent_key_id' => 'setParentKeyId',
        'period' => 'setPeriod',
        'restrict_ip_binding' => 'setRestrictIpBinding',
        'suspended' => 'setSuspended',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'attached_keys' => 'getAttachedKeys',
        'comment' => 'getComment',
        'ip_address_binding' => 'getIpAddressBinding',
        'items' => 'getItems',
        'key_id' => 'getKeyId',
        'parent_key_id' => 'getParentKeyId',
        'period' => 'getPeriod',
        'restrict_ip_binding' => 'getRestrictIpBinding',
        'suspended' => 'getSuspended',
        'title' => 'getTitle'
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
        $this->setIfExists('attached_keys', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('ip_address_binding', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('key_id', $data ?? [], null);
        $this->setIfExists('parent_key_id', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('restrict_ip_binding', $data ?? [], null);
        $this->setIfExists('suspended', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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
     * Gets attached_keys
     *
     * @return string[]|null
     */
    public function getAttachedKeys(): ?array
    {
        return $this->container['attached_keys'];
    }

    /**
     * Sets attached_keys
     *
     * @param string[]|null $attached_keys attached_keys
     *
     * @return $this
     */
    public function setAttachedKeys(?array $attached_keys): static
    {
        if (is_null($attached_keys)) {
            throw new InvalidArgumentException('non-nullable attached_keys cannot be null');
        }
        $this->container['attached_keys'] = $attached_keys;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return $this
     */
    public function setComment(?string $comment): static
    {
        if (is_null($comment)) {
            throw new InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets ip_address_binding
     *
     * @return string|null
     */
    public function getIpAddressBinding(): ?string
    {
        return $this->container['ip_address_binding'];
    }

    /**
     * Sets ip_address_binding
     *
     * @param string|null $ip_address_binding ip_address_binding
     *
     * @return $this
     */
    public function setIpAddressBinding(?string $ip_address_binding): static
    {
        if (is_null($ip_address_binding)) {
            throw new InvalidArgumentException('non-nullable ip_address_binding cannot be null');
        }
        $this->container['ip_address_binding'] = $ip_address_binding;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]|null
     */
    public function getItems(): ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[]|null $items items
     *
     * @return $this
     */
    public function setItems(?array $items): static
    {
        if (is_null($items)) {
            throw new InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets key_id
     *
     * @return int|null
     */
    public function getKeyId(): ?int
    {
        return $this->container['key_id'];
    }

    /**
     * Sets key_id
     *
     * @param int|null $key_id key_id
     *
     * @return $this
     */
    public function setKeyId(?int $key_id): static
    {
        if (is_null($key_id)) {
            throw new InvalidArgumentException('non-nullable key_id cannot be null');
        }
        $this->container['key_id'] = $key_id;

        return $this;
    }

    /**
     * Gets parent_key_id
     *
     * @return int|null
     */
    public function getParentKeyId(): ?int
    {
        return $this->container['parent_key_id'];
    }

    /**
     * Sets parent_key_id
     *
     * @param int|null $parent_key_id parent_key_id
     *
     * @return $this
     */
    public function setParentKeyId(?int $parent_key_id): static
    {
        if (is_null($parent_key_id)) {
            throw new InvalidArgumentException('non-nullable parent_key_id cannot be null');
        }
        $this->container['parent_key_id'] = $parent_key_id;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod(?int $period): static
    {
        if (is_null($period)) {
            throw new InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets restrict_ip_binding
     *
     * @return bool|null
     */
    public function getRestrictIpBinding(): ?bool
    {
        return $this->container['restrict_ip_binding'];
    }

    /**
     * Sets restrict_ip_binding
     *
     * @param bool|null $restrict_ip_binding restrict_ip_binding
     *
     * @return $this
     */
    public function setRestrictIpBinding(?bool $restrict_ip_binding): static
    {
        if (is_null($restrict_ip_binding)) {
            throw new InvalidArgumentException('non-nullable restrict_ip_binding cannot be null');
        }
        $this->container['restrict_ip_binding'] = $restrict_ip_binding;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended(): ?bool
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
     *
     * @return $this
     */
    public function setSuspended(?bool $suspended): static
    {
        if (is_null($suspended)) {
            throw new InvalidArgumentException('non-nullable suspended cannot be null');
        }
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            throw new InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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


