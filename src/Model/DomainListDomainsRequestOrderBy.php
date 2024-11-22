<?php
/**
 * DomainListDomainsRequestOrderBy
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
 * DomainListDomainsRequestOrderBy Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DomainListDomainsRequestOrderBy implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'domainListDomainsRequestOrderBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'active_date' => 'string',
        'domain_extension' => 'string',
        'domain_name' => 'string',
        'expiration_date' => 'string',
        'id' => 'string',
        'order_date' => 'string',
        'renewal_date' => 'string',
        'status' => 'string',
        'transfer_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'active_date' => null,
        'domain_extension' => null,
        'domain_name' => null,
        'expiration_date' => null,
        'id' => null,
        'order_date' => null,
        'renewal_date' => null,
        'status' => null,
        'transfer_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'active_date' => false,
        'domain_extension' => false,
        'domain_name' => false,
        'expiration_date' => false,
        'id' => false,
        'order_date' => false,
        'renewal_date' => false,
        'status' => false,
        'transfer_date' => false
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
        'active_date' => 'active_date',
        'domain_extension' => 'domain_extension',
        'domain_name' => 'domain_name',
        'expiration_date' => 'expiration_date',
        'id' => 'id',
        'order_date' => 'order_date',
        'renewal_date' => 'renewal_date',
        'status' => 'status',
        'transfer_date' => 'transfer_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'active_date' => 'setActiveDate',
        'domain_extension' => 'setDomainExtension',
        'domain_name' => 'setDomainName',
        'expiration_date' => 'setExpirationDate',
        'id' => 'setId',
        'order_date' => 'setOrderDate',
        'renewal_date' => 'setRenewalDate',
        'status' => 'setStatus',
        'transfer_date' => 'setTransferDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'active_date' => 'getActiveDate',
        'domain_extension' => 'getDomainExtension',
        'domain_name' => 'getDomainName',
        'expiration_date' => 'getExpirationDate',
        'id' => 'getId',
        'order_date' => 'getOrderDate',
        'renewal_date' => 'getRenewalDate',
        'status' => 'getStatus',
        'transfer_date' => 'getTransferDate'
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
        $this->setIfExists('active_date', $data ?? [], null);
        $this->setIfExists('domain_extension', $data ?? [], null);
        $this->setIfExists('domain_name', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('order_date', $data ?? [], null);
        $this->setIfExists('renewal_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('transfer_date', $data ?? [], null);
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
     * Gets active_date
     *
     * @return string|null
     */
    public function getActiveDate(): ?string
    {
        return $this->container['active_date'];
    }

    /**
     * Sets active_date
     *
     * @param string|null $active_date active_date
     *
     * @return $this
     */
    public function setActiveDate(?string $active_date): static
    {
        if (is_null($active_date)) {
            throw new InvalidArgumentException('non-nullable active_date cannot be null');
        }
        $this->container['active_date'] = $active_date;

        return $this;
    }

    /**
     * Gets domain_extension
     *
     * @return string|null
     */
    public function getDomainExtension(): ?string
    {
        return $this->container['domain_extension'];
    }

    /**
     * Sets domain_extension
     *
     * @param string|null $domain_extension domain_extension
     *
     * @return $this
     */
    public function setDomainExtension(?string $domain_extension): static
    {
        if (is_null($domain_extension)) {
            throw new InvalidArgumentException('non-nullable domain_extension cannot be null');
        }
        $this->container['domain_extension'] = $domain_extension;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string|null $domain_name domain_name
     *
     * @return $this
     */
    public function setDomainName(?string $domain_name): static
    {
        if (is_null($domain_name)) {
            throw new InvalidArgumentException('non-nullable domain_name cannot be null');
        }
        $this->container['domain_name'] = $domain_name;

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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets renewal_date
     *
     * @return string|null
     */
    public function getRenewalDate(): ?string
    {
        return $this->container['renewal_date'];
    }

    /**
     * Sets renewal_date
     *
     * @param string|null $renewal_date renewal_date
     *
     * @return $this
     */
    public function setRenewalDate(?string $renewal_date): static
    {
        if (is_null($renewal_date)) {
            throw new InvalidArgumentException('non-nullable renewal_date cannot be null');
        }
        $this->container['renewal_date'] = $renewal_date;

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
     * Gets transfer_date
     *
     * @return string|null
     */
    public function getTransferDate(): ?string
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param string|null $transfer_date transfer_date
     *
     * @return $this
     */
    public function setTransferDate(?string $transfer_date): static
    {
        if (is_null($transfer_date)) {
            throw new InvalidArgumentException('non-nullable transfer_date cannot be null');
        }
        $this->container['transfer_date'] = $transfer_date;

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


