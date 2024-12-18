<?php
/**
 * LicenseLicenseWithPriceVersion
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
 * LicenseLicenseWithPriceVersion Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LicenseLicenseWithPriceVersion implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'licenseLicenseWithPriceVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'activation_code' => 'string',
        'billing_type' => 'string',
        'comment' => 'string',
        'contract' => 'string',
        'expiration_date' => 'string',
        'items' => 'string[]',
        'key_id' => 'int',
        'key_number' => 'string',
        'order_date' => 'string',
        'parent_key_id' => 'int',
        'period' => 'int',
        'product' => 'string',
        'sku_values' => '\Layer7\Openprovider\Model\LicenseSkuValues',
        'status' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'activation_code' => null,
        'billing_type' => null,
        'comment' => null,
        'contract' => null,
        'expiration_date' => null,
        'items' => null,
        'key_id' => 'int32',
        'key_number' => null,
        'order_date' => null,
        'parent_key_id' => 'int32',
        'period' => 'int32',
        'product' => null,
        'sku_values' => null,
        'status' => null,
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'activation_code' => false,
        'billing_type' => false,
        'comment' => false,
        'contract' => false,
        'expiration_date' => false,
        'items' => false,
        'key_id' => false,
        'key_number' => false,
        'order_date' => false,
        'parent_key_id' => false,
        'period' => false,
        'product' => false,
        'sku_values' => false,
        'status' => false,
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
        'activation_code' => 'activation_code',
        'billing_type' => 'billing_type',
        'comment' => 'comment',
        'contract' => 'contract',
        'expiration_date' => 'expiration_date',
        'items' => 'items',
        'key_id' => 'key_id',
        'key_number' => 'key_number',
        'order_date' => 'order_date',
        'parent_key_id' => 'parent_key_id',
        'period' => 'period',
        'product' => 'product',
        'sku_values' => 'sku_values',
        'status' => 'status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'activation_code' => 'setActivationCode',
        'billing_type' => 'setBillingType',
        'comment' => 'setComment',
        'contract' => 'setContract',
        'expiration_date' => 'setExpirationDate',
        'items' => 'setItems',
        'key_id' => 'setKeyId',
        'key_number' => 'setKeyNumber',
        'order_date' => 'setOrderDate',
        'parent_key_id' => 'setParentKeyId',
        'period' => 'setPeriod',
        'product' => 'setProduct',
        'sku_values' => 'setSkuValues',
        'status' => 'setStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'activation_code' => 'getActivationCode',
        'billing_type' => 'getBillingType',
        'comment' => 'getComment',
        'contract' => 'getContract',
        'expiration_date' => 'getExpirationDate',
        'items' => 'getItems',
        'key_id' => 'getKeyId',
        'key_number' => 'getKeyNumber',
        'order_date' => 'getOrderDate',
        'parent_key_id' => 'getParentKeyId',
        'period' => 'getPeriod',
        'product' => 'getProduct',
        'sku_values' => 'getSkuValues',
        'status' => 'getStatus',
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
        $this->setIfExists('activation_code', $data ?? [], null);
        $this->setIfExists('billing_type', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('key_id', $data ?? [], null);
        $this->setIfExists('key_number', $data ?? [], null);
        $this->setIfExists('order_date', $data ?? [], null);
        $this->setIfExists('parent_key_id', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('sku_values', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets activation_code
     *
     * @return string|null
     */
    public function getActivationCode(): ?string
    {
        return $this->container['activation_code'];
    }

    /**
     * Sets activation_code
     *
     * @param string|null $activation_code activation_code
     *
     * @return $this
     */
    public function setActivationCode(?string $activation_code): static
    {
        if (is_null($activation_code)) {
            throw new InvalidArgumentException('non-nullable activation_code cannot be null');
        }
        $this->container['activation_code'] = $activation_code;

        return $this;
    }

    /**
     * Gets billing_type
     *
     * @return string|null
     */
    public function getBillingType(): ?string
    {
        return $this->container['billing_type'];
    }

    /**
     * Sets billing_type
     *
     * @param string|null $billing_type billing_type
     *
     * @return $this
     */
    public function setBillingType(?string $billing_type): static
    {
        if (is_null($billing_type)) {
            throw new InvalidArgumentException('non-nullable billing_type cannot be null');
        }
        $this->container['billing_type'] = $billing_type;

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
     * Gets contract
     *
     * @return string|null
     */
    public function getContract(): ?string
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract contract
     *
     * @return $this
     */
    public function setContract(?string $contract): static
    {
        if (is_null($contract)) {
            throw new InvalidArgumentException('non-nullable contract cannot be null');
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate(?string $expiration_date): static
    {
        if (is_null($expiration_date)) {
            throw new InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

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
     * Gets key_number
     *
     * @return string|null
     */
    public function getKeyNumber(): ?string
    {
        return $this->container['key_number'];
    }

    /**
     * Sets key_number
     *
     * @param string|null $key_number key_number
     *
     * @return $this
     */
    public function setKeyNumber(?string $key_number): static
    {
        if (is_null($key_number)) {
            throw new InvalidArgumentException('non-nullable key_number cannot be null');
        }
        $this->container['key_number'] = $key_number;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string|null $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate(?string $order_date): static
    {
        if (is_null($order_date)) {
            throw new InvalidArgumentException('non-nullable order_date cannot be null');
        }
        $this->container['order_date'] = $order_date;

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
     * Gets product
     *
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product product
     *
     * @return $this
     */
    public function setProduct(?string $product): static
    {
        if (is_null($product)) {
            throw new InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku_values
     *
     * @return \Layer7\Openprovider\Model\LicenseSkuValues|null
     */
    public function getSkuValues(): ?\Layer7\Openprovider\Model\LicenseSkuValues
    {
        return $this->container['sku_values'];
    }

    /**
     * Sets sku_values
     *
     * @param \Layer7\Openprovider\Model\LicenseSkuValues|null $sku_values sku_values
     *
     * @return $this
     */
    public function setSkuValues(?\Layer7\Openprovider\Model\LicenseSkuValues $sku_values): static
    {
        if (is_null($sku_values)) {
            throw new InvalidArgumentException('non-nullable sku_values cannot be null');
        }
        $this->container['sku_values'] = $sku_values;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


