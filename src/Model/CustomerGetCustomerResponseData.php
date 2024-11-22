<?php
/**
 * CustomerGetCustomerResponseData
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
 * CustomerGetCustomerResponseData Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CustomerGetCustomerResponseData implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'customerGetCustomerResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'additional_data' => '\Layer7\Openprovider\Model\CustomerAdditionalData',
        'address' => '\Layer7\Openprovider\Model\CustomerAddress',
        'comments' => 'string',
        'comments_last_changed_at' => 'string',
        'company_name' => 'string',
        'deleted_at' => 'string',
        'email' => 'string',
        'email_verification_status' => 'string',
        'extension_additional_data' => '\Layer7\Openprovider\Model\CustomerExtensionAdditionalData[]',
        'fax' => '\Layer7\Openprovider\Model\CustomerFax',
        'handle' => 'string',
        'id' => 'int',
        'inn' => 'string',
        'is_deleted' => 'bool',
        'locale' => 'string',
        'name' => '\Layer7\Openprovider\Model\CustomerName',
        'phone' => '\Layer7\Openprovider\Model\CustomerPhone',
        'reseller_id' => 'int',
        'tags' => '\Layer7\Openprovider\Model\CustomerTags[]',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'additional_data' => null,
        'address' => null,
        'comments' => null,
        'comments_last_changed_at' => null,
        'company_name' => null,
        'deleted_at' => null,
        'email' => null,
        'email_verification_status' => null,
        'extension_additional_data' => null,
        'fax' => null,
        'handle' => null,
        'id' => 'int32',
        'inn' => null,
        'is_deleted' => 'boolean',
        'locale' => null,
        'name' => null,
        'phone' => null,
        'reseller_id' => 'int32',
        'tags' => null,
        'vat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'additional_data' => false,
        'address' => false,
        'comments' => false,
        'comments_last_changed_at' => false,
        'company_name' => false,
        'deleted_at' => false,
        'email' => false,
        'email_verification_status' => false,
        'extension_additional_data' => false,
        'fax' => false,
        'handle' => false,
        'id' => false,
        'inn' => false,
        'is_deleted' => false,
        'locale' => false,
        'name' => false,
        'phone' => false,
        'reseller_id' => false,
        'tags' => false,
        'vat' => false
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
        'additional_data' => 'additional_data',
        'address' => 'address',
        'comments' => 'comments',
        'comments_last_changed_at' => 'comments_last_changed_at',
        'company_name' => 'company_name',
        'deleted_at' => 'deleted_at',
        'email' => 'email',
        'email_verification_status' => 'email_verification_status',
        'extension_additional_data' => 'extension_additional_data',
        'fax' => 'fax',
        'handle' => 'handle',
        'id' => 'id',
        'inn' => 'inn',
        'is_deleted' => 'is_deleted',
        'locale' => 'locale',
        'name' => 'name',
        'phone' => 'phone',
        'reseller_id' => 'reseller_id',
        'tags' => 'tags',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'additional_data' => 'setAdditionalData',
        'address' => 'setAddress',
        'comments' => 'setComments',
        'comments_last_changed_at' => 'setCommentsLastChangedAt',
        'company_name' => 'setCompanyName',
        'deleted_at' => 'setDeletedAt',
        'email' => 'setEmail',
        'email_verification_status' => 'setEmailVerificationStatus',
        'extension_additional_data' => 'setExtensionAdditionalData',
        'fax' => 'setFax',
        'handle' => 'setHandle',
        'id' => 'setId',
        'inn' => 'setInn',
        'is_deleted' => 'setIsDeleted',
        'locale' => 'setLocale',
        'name' => 'setName',
        'phone' => 'setPhone',
        'reseller_id' => 'setResellerId',
        'tags' => 'setTags',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'additional_data' => 'getAdditionalData',
        'address' => 'getAddress',
        'comments' => 'getComments',
        'comments_last_changed_at' => 'getCommentsLastChangedAt',
        'company_name' => 'getCompanyName',
        'deleted_at' => 'getDeletedAt',
        'email' => 'getEmail',
        'email_verification_status' => 'getEmailVerificationStatus',
        'extension_additional_data' => 'getExtensionAdditionalData',
        'fax' => 'getFax',
        'handle' => 'getHandle',
        'id' => 'getId',
        'inn' => 'getInn',
        'is_deleted' => 'getIsDeleted',
        'locale' => 'getLocale',
        'name' => 'getName',
        'phone' => 'getPhone',
        'reseller_id' => 'getResellerId',
        'tags' => 'getTags',
        'vat' => 'getVat'
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
        $this->setIfExists('additional_data', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('comments_last_changed_at', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_verification_status', $data ?? [], null);
        $this->setIfExists('extension_additional_data', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('handle', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('inn', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('reseller_id', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
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
     * Gets additional_data
     *
     * @return \Layer7\Openprovider\Model\CustomerAdditionalData|null
     */
    public function getAdditionalData(): ?\Layer7\Openprovider\Model\CustomerAdditionalData
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Layer7\Openprovider\Model\CustomerAdditionalData|null $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData(?\Layer7\Openprovider\Model\CustomerAdditionalData $additional_data): static
    {
        if (is_null($additional_data)) {
            throw new InvalidArgumentException('non-nullable additional_data cannot be null');
        }
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Layer7\Openprovider\Model\CustomerAddress|null
     */
    public function getAddress(): ?\Layer7\Openprovider\Model\CustomerAddress
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Layer7\Openprovider\Model\CustomerAddress|null $address address
     *
     * @return $this
     */
    public function setAddress(?\Layer7\Openprovider\Model\CustomerAddress $address): static
    {
        if (is_null($address)) {
            throw new InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return $this
     */
    public function setComments(?string $comments): static
    {
        if (is_null($comments)) {
            throw new InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets comments_last_changed_at
     *
     * @return string|null
     */
    public function getCommentsLastChangedAt(): ?string
    {
        return $this->container['comments_last_changed_at'];
    }

    /**
     * Sets comments_last_changed_at
     *
     * @param string|null $comments_last_changed_at comments_last_changed_at
     *
     * @return $this
     */
    public function setCommentsLastChangedAt(?string $comments_last_changed_at): static
    {
        if (is_null($comments_last_changed_at)) {
            throw new InvalidArgumentException('non-nullable comments_last_changed_at cannot be null');
        }
        $this->container['comments_last_changed_at'] = $comments_last_changed_at;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName(?string $company_name): static
    {
        if (is_null($company_name)) {
            throw new InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param string|null $deleted_at deleted_at
     *
     * @return $this
     */
    public function setDeletedAt(?string $deleted_at): static
    {
        if (is_null($deleted_at)) {
            throw new InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_verification_status
     *
     * @return string|null
     */
    public function getEmailVerificationStatus(): ?string
    {
        return $this->container['email_verification_status'];
    }

    /**
     * Sets email_verification_status
     *
     * @param string|null $email_verification_status email_verification_status
     *
     * @return $this
     */
    public function setEmailVerificationStatus(?string $email_verification_status): static
    {
        if (is_null($email_verification_status)) {
            throw new InvalidArgumentException('non-nullable email_verification_status cannot be null');
        }
        $this->container['email_verification_status'] = $email_verification_status;

        return $this;
    }

    /**
     * Gets extension_additional_data
     *
     * @return \Layer7\Openprovider\Model\CustomerExtensionAdditionalData[]|null
     */
    public function getExtensionAdditionalData(): ?array
    {
        return $this->container['extension_additional_data'];
    }

    /**
     * Sets extension_additional_data
     *
     * @param \Layer7\Openprovider\Model\CustomerExtensionAdditionalData[]|null $extension_additional_data extension_additional_data
     *
     * @return $this
     */
    public function setExtensionAdditionalData(?array $extension_additional_data): static
    {
        if (is_null($extension_additional_data)) {
            throw new InvalidArgumentException('non-nullable extension_additional_data cannot be null');
        }
        $this->container['extension_additional_data'] = $extension_additional_data;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return \Layer7\Openprovider\Model\CustomerFax|null
     */
    public function getFax(): ?\Layer7\Openprovider\Model\CustomerFax
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param \Layer7\Openprovider\Model\CustomerFax|null $fax fax
     *
     * @return $this
     */
    public function setFax(?\Layer7\Openprovider\Model\CustomerFax $fax): static
    {
        if (is_null($fax)) {
            throw new InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets handle
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     *
     * @param string|null $handle handle
     *
     * @return $this
     */
    public function setHandle(?string $handle): static
    {
        if (is_null($handle)) {
            throw new InvalidArgumentException('non-nullable handle cannot be null');
        }
        $this->container['handle'] = $handle;

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
     * Gets inn
     *
     * @return string|null
     */
    public function getInn(): ?string
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string|null $inn inn
     *
     * @return $this
     */
    public function setInn(?string $inn): static
    {
        if (is_null($inn)) {
            throw new InvalidArgumentException('non-nullable inn cannot be null');
        }
        $this->container['inn'] = $inn;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return $this
     */
    public function setIsDeleted(?bool $is_deleted): static
    {
        if (is_null($is_deleted)) {
            throw new InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return $this
     */
    public function setLocale(?string $locale): static
    {
        if (is_null($locale)) {
            throw new InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Layer7\Openprovider\Model\CustomerName|null
     */
    public function getName(): ?\Layer7\Openprovider\Model\CustomerName
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Layer7\Openprovider\Model\CustomerName|null $name name
     *
     * @return $this
     */
    public function setName(?\Layer7\Openprovider\Model\CustomerName $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Layer7\Openprovider\Model\CustomerPhone|null
     */
    public function getPhone(): ?\Layer7\Openprovider\Model\CustomerPhone
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Layer7\Openprovider\Model\CustomerPhone|null $phone phone
     *
     * @return $this
     */
    public function setPhone(?\Layer7\Openprovider\Model\CustomerPhone $phone): static
    {
        if (is_null($phone)) {
            throw new InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets reseller_id
     *
     * @return int|null
     */
    public function getResellerId(): ?int
    {
        return $this->container['reseller_id'];
    }

    /**
     * Sets reseller_id
     *
     * @param int|null $reseller_id reseller_id
     *
     * @return $this
     */
    public function setResellerId(?int $reseller_id): static
    {
        if (is_null($reseller_id)) {
            throw new InvalidArgumentException('non-nullable reseller_id cannot be null');
        }
        $this->container['reseller_id'] = $reseller_id;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Layer7\Openprovider\Model\CustomerTags[]|null
     */
    public function getTags(): ?array
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Layer7\Openprovider\Model\CustomerTags[]|null $tags tags
     *
     * @return $this
     */
    public function setTags(?array $tags): static
    {
        if (is_null($tags)) {
            throw new InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat(): ?string
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return $this
     */
    public function setVat(?string $vat): static
    {
        if (is_null($vat)) {
            throw new InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

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


