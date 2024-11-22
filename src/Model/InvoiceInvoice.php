<?php
/**
 * InvoiceInvoice
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
 * InvoiceInvoice Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InvoiceInvoice implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'invoiceInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'amount' => '\Layer7\Openprovider\Model\InvoicePrices',
        'attachment_url' => 'string',
        'creation_date' => 'string',
        'id' => 'int',
        'invoice_number' => 'string',
        'invoice_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amount' => null,
        'attachment_url' => null,
        'creation_date' => null,
        'id' => 'int32',
        'invoice_number' => null,
        'invoice_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'attachment_url' => false,
        'creation_date' => false,
        'id' => false,
        'invoice_number' => false,
        'invoice_url' => false
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
        'amount' => 'amount',
        'attachment_url' => 'attachment_url',
        'creation_date' => 'creation_date',
        'id' => 'id',
        'invoice_number' => 'invoice_number',
        'invoice_url' => 'invoice_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'attachment_url' => 'setAttachmentUrl',
        'creation_date' => 'setCreationDate',
        'id' => 'setId',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_url' => 'setInvoiceUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'attachment_url' => 'getAttachmentUrl',
        'creation_date' => 'getCreationDate',
        'id' => 'getId',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_url' => 'getInvoiceUrl'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('attachment_url', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_url', $data ?? [], null);
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
     * Gets amount
     *
     * @return \Layer7\Openprovider\Model\InvoicePrices|null
     */
    public function getAmount(): ?\Layer7\Openprovider\Model\InvoicePrices
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Layer7\Openprovider\Model\InvoicePrices|null $amount amount
     *
     * @return $this
     */
    public function setAmount(?\Layer7\Openprovider\Model\InvoicePrices $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets attachment_url
     *
     * @return string|null
     */
    public function getAttachmentUrl(): ?string
    {
        return $this->container['attachment_url'];
    }

    /**
     * Sets attachment_url
     *
     * @param string|null $attachment_url attachment_url
     *
     * @return $this
     */
    public function setAttachmentUrl(?string $attachment_url): static
    {
        if (is_null($attachment_url)) {
            throw new InvalidArgumentException('non-nullable attachment_url cannot be null');
        }
        $this->container['attachment_url'] = $attachment_url;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate(?string $creation_date): static
    {
        if (is_null($creation_date)) {
            throw new InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber(?string $invoice_number): static
    {
        if (is_null($invoice_number)) {
            throw new InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_url
     *
     * @return string|null
     */
    public function getInvoiceUrl(): ?string
    {
        return $this->container['invoice_url'];
    }

    /**
     * Sets invoice_url
     *
     * @param string|null $invoice_url invoice_url
     *
     * @return $this
     */
    public function setInvoiceUrl(?string $invoice_url): static
    {
        if (is_null($invoice_url)) {
            throw new InvalidArgumentException('non-nullable invoice_url cannot be null');
        }
        $this->container['invoice_url'] = $invoice_url;

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

