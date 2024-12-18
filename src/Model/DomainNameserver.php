<?php
/**
 * DomainNameserver
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
 * DomainNameserver Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DomainNameserver implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'domainNameserver';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'code' => 'int',
        'error' => 'string',
        'ip' => 'string',
        'ip6' => 'string',
        'msg' => 'string',
        'name' => 'string',
        'result' => 'string',
        'seq_nr' => 'int',
        'server_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => 'int32',
        'error' => null,
        'ip' => null,
        'ip6' => null,
        'msg' => null,
        'name' => null,
        'result' => null,
        'seq_nr' => 'int32',
        'server_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'code' => false,
        'error' => false,
        'ip' => false,
        'ip6' => false,
        'msg' => false,
        'name' => false,
        'result' => false,
        'seq_nr' => false,
        'server_id' => false
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
        'code' => 'code',
        'error' => 'error',
        'ip' => 'ip',
        'ip6' => 'ip6',
        'msg' => 'msg',
        'name' => 'name',
        'result' => 'result',
        'seq_nr' => 'seq_nr',
        'server_id' => 'server_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'code' => 'setCode',
        'error' => 'setError',
        'ip' => 'setIp',
        'ip6' => 'setIp6',
        'msg' => 'setMsg',
        'name' => 'setName',
        'result' => 'setResult',
        'seq_nr' => 'setSeqNr',
        'server_id' => 'setServerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'code' => 'getCode',
        'error' => 'getError',
        'ip' => 'getIp',
        'ip6' => 'getIp6',
        'msg' => 'getMsg',
        'name' => 'getName',
        'result' => 'getResult',
        'seq_nr' => 'getSeqNr',
        'server_id' => 'getServerId'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('ip6', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('seq_nr', $data ?? [], null);
        $this->setIfExists('server_id', $data ?? [], null);
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
     * Gets code
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int|null $code code
     *
     * @return $this
     */
    public function setCode(?int $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return $this
     */
    public function setError(?string $error): static
    {
        if (is_null($error)) {
            throw new InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip ip
     *
     * @return $this
     */
    public function setIp(?string $ip): static
    {
        if (is_null($ip)) {
            throw new InvalidArgumentException('non-nullable ip cannot be null');
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets ip6
     *
     * @return string|null
     */
    public function getIp6(): ?string
    {
        return $this->container['ip6'];
    }

    /**
     * Sets ip6
     *
     * @param string|null $ip6 ip6
     *
     * @return $this
     */
    public function setIp6(?string $ip6): static
    {
        if (is_null($ip6)) {
            throw new InvalidArgumentException('non-nullable ip6 cannot be null');
        }
        $this->container['ip6'] = $ip6;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg(): ?string
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg msg
     *
     * @return $this
     */
    public function setMsg(?string $msg): static
    {
        if (is_null($msg)) {
            throw new InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result result
     *
     * @return $this
     */
    public function setResult(?string $result): static
    {
        if (is_null($result)) {
            throw new InvalidArgumentException('non-nullable result cannot be null');
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets seq_nr
     *
     * @return int|null
     */
    public function getSeqNr(): ?int
    {
        return $this->container['seq_nr'];
    }

    /**
     * Sets seq_nr
     *
     * @param int|null $seq_nr seq_nr
     *
     * @return $this
     */
    public function setSeqNr(?int $seq_nr): static
    {
        if (is_null($seq_nr)) {
            throw new InvalidArgumentException('non-nullable seq_nr cannot be null');
        }
        $this->container['seq_nr'] = $seq_nr;

        return $this;
    }

    /**
     * Gets server_id
     *
     * @return int|null
     */
    public function getServerId(): ?int
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param int|null $server_id server_id
     *
     * @return $this
     */
    public function setServerId(?int $server_id): static
    {
        if (is_null($server_id)) {
            throw new InvalidArgumentException('non-nullable server_id cannot be null');
        }
        $this->container['server_id'] = $server_id;

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


