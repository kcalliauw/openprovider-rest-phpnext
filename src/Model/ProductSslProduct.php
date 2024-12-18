<?php
/**
 * ProductSslProduct
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
 * ProductSslProduct Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProductSslProduct implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'productSslProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'brand_name' => 'string',
        'bypass_san' => 'bool',
        'category' => 'string',
        'delivery_time' => 'string',
        'description' => 'string',
        'encryption' => 'string',
        'free_refund_period' => 'string',
        'free_reissue_period' => 'string',
        'id' => 'int',
        'included_domains_count' => 'int',
        'is_extended_validation_supported' => 'bool',
        'is_idn_supported' => 'bool',
        'is_mobile_supported' => 'bool',
        'is_sgc_supported' => 'bool',
        'is_wildcard_supported' => 'bool',
        'level_prices' => '\Layer7\Openprovider\Model\ProductSslProductLevelPrices[]',
        'max_domains' => 'int',
        'max_period' => 'int',
        'name' => 'string',
        'number_of_domains' => 'int',
        'order_module' => 'string',
        'prices' => '\Layer7\Openprovider\Model\ProductSslProductPrices[]',
        'root' => 'string',
        'sub_category' => 'string',
        'supported_software' => '\Layer7\Openprovider\Model\ProductSslProductSupportedSoftware[]',
        'validation_method' => 'string',
        'warranty' => '\Layer7\Openprovider\Model\ProductSslProductWarranty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'brand_name' => null,
        'bypass_san' => 'boolean',
        'category' => null,
        'delivery_time' => null,
        'description' => null,
        'encryption' => null,
        'free_refund_period' => null,
        'free_reissue_period' => null,
        'id' => 'int32',
        'included_domains_count' => 'int32',
        'is_extended_validation_supported' => 'boolean',
        'is_idn_supported' => 'boolean',
        'is_mobile_supported' => 'boolean',
        'is_sgc_supported' => 'boolean',
        'is_wildcard_supported' => 'boolean',
        'level_prices' => null,
        'max_domains' => 'int32',
        'max_period' => 'int32',
        'name' => null,
        'number_of_domains' => 'int32',
        'order_module' => null,
        'prices' => null,
        'root' => null,
        'sub_category' => null,
        'supported_software' => null,
        'validation_method' => null,
        'warranty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'brand_name' => false,
        'bypass_san' => false,
        'category' => false,
        'delivery_time' => false,
        'description' => false,
        'encryption' => false,
        'free_refund_period' => false,
        'free_reissue_period' => false,
        'id' => false,
        'included_domains_count' => false,
        'is_extended_validation_supported' => false,
        'is_idn_supported' => false,
        'is_mobile_supported' => false,
        'is_sgc_supported' => false,
        'is_wildcard_supported' => false,
        'level_prices' => false,
        'max_domains' => false,
        'max_period' => false,
        'name' => false,
        'number_of_domains' => false,
        'order_module' => false,
        'prices' => false,
        'root' => false,
        'sub_category' => false,
        'supported_software' => false,
        'validation_method' => false,
        'warranty' => false
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
        'brand_name' => 'brand_name',
        'bypass_san' => 'bypass_san',
        'category' => 'category',
        'delivery_time' => 'delivery_time',
        'description' => 'description',
        'encryption' => 'encryption',
        'free_refund_period' => 'free_refund_period',
        'free_reissue_period' => 'free_reissue_period',
        'id' => 'id',
        'included_domains_count' => 'included_domains_count',
        'is_extended_validation_supported' => 'is_extended_validation_supported',
        'is_idn_supported' => 'is_idn_supported',
        'is_mobile_supported' => 'is_mobile_supported',
        'is_sgc_supported' => 'is_sgc_supported',
        'is_wildcard_supported' => 'is_wildcard_supported',
        'level_prices' => 'level_prices',
        'max_domains' => 'max_domains',
        'max_period' => 'max_period',
        'name' => 'name',
        'number_of_domains' => 'number_of_domains',
        'order_module' => 'order_module',
        'prices' => 'prices',
        'root' => 'root',
        'sub_category' => 'sub_category',
        'supported_software' => 'supported_software',
        'validation_method' => 'validation_method',
        'warranty' => 'warranty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'brand_name' => 'setBrandName',
        'bypass_san' => 'setBypassSan',
        'category' => 'setCategory',
        'delivery_time' => 'setDeliveryTime',
        'description' => 'setDescription',
        'encryption' => 'setEncryption',
        'free_refund_period' => 'setFreeRefundPeriod',
        'free_reissue_period' => 'setFreeReissuePeriod',
        'id' => 'setId',
        'included_domains_count' => 'setIncludedDomainsCount',
        'is_extended_validation_supported' => 'setIsExtendedValidationSupported',
        'is_idn_supported' => 'setIsIdnSupported',
        'is_mobile_supported' => 'setIsMobileSupported',
        'is_sgc_supported' => 'setIsSgcSupported',
        'is_wildcard_supported' => 'setIsWildcardSupported',
        'level_prices' => 'setLevelPrices',
        'max_domains' => 'setMaxDomains',
        'max_period' => 'setMaxPeriod',
        'name' => 'setName',
        'number_of_domains' => 'setNumberOfDomains',
        'order_module' => 'setOrderModule',
        'prices' => 'setPrices',
        'root' => 'setRoot',
        'sub_category' => 'setSubCategory',
        'supported_software' => 'setSupportedSoftware',
        'validation_method' => 'setValidationMethod',
        'warranty' => 'setWarranty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'brand_name' => 'getBrandName',
        'bypass_san' => 'getBypassSan',
        'category' => 'getCategory',
        'delivery_time' => 'getDeliveryTime',
        'description' => 'getDescription',
        'encryption' => 'getEncryption',
        'free_refund_period' => 'getFreeRefundPeriod',
        'free_reissue_period' => 'getFreeReissuePeriod',
        'id' => 'getId',
        'included_domains_count' => 'getIncludedDomainsCount',
        'is_extended_validation_supported' => 'getIsExtendedValidationSupported',
        'is_idn_supported' => 'getIsIdnSupported',
        'is_mobile_supported' => 'getIsMobileSupported',
        'is_sgc_supported' => 'getIsSgcSupported',
        'is_wildcard_supported' => 'getIsWildcardSupported',
        'level_prices' => 'getLevelPrices',
        'max_domains' => 'getMaxDomains',
        'max_period' => 'getMaxPeriod',
        'name' => 'getName',
        'number_of_domains' => 'getNumberOfDomains',
        'order_module' => 'getOrderModule',
        'prices' => 'getPrices',
        'root' => 'getRoot',
        'sub_category' => 'getSubCategory',
        'supported_software' => 'getSupportedSoftware',
        'validation_method' => 'getValidationMethod',
        'warranty' => 'getWarranty'
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
        $this->setIfExists('brand_name', $data ?? [], null);
        $this->setIfExists('bypass_san', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('delivery_time', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('encryption', $data ?? [], null);
        $this->setIfExists('free_refund_period', $data ?? [], null);
        $this->setIfExists('free_reissue_period', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('included_domains_count', $data ?? [], null);
        $this->setIfExists('is_extended_validation_supported', $data ?? [], null);
        $this->setIfExists('is_idn_supported', $data ?? [], null);
        $this->setIfExists('is_mobile_supported', $data ?? [], null);
        $this->setIfExists('is_sgc_supported', $data ?? [], null);
        $this->setIfExists('is_wildcard_supported', $data ?? [], null);
        $this->setIfExists('level_prices', $data ?? [], null);
        $this->setIfExists('max_domains', $data ?? [], null);
        $this->setIfExists('max_period', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number_of_domains', $data ?? [], null);
        $this->setIfExists('order_module', $data ?? [], null);
        $this->setIfExists('prices', $data ?? [], null);
        $this->setIfExists('root', $data ?? [], null);
        $this->setIfExists('sub_category', $data ?? [], null);
        $this->setIfExists('supported_software', $data ?? [], null);
        $this->setIfExists('validation_method', $data ?? [], null);
        $this->setIfExists('warranty', $data ?? [], null);
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
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name brand_name
     *
     * @return $this
     */
    public function setBrandName(?string $brand_name): static
    {
        if (is_null($brand_name)) {
            throw new InvalidArgumentException('non-nullable brand_name cannot be null');
        }
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets bypass_san
     *
     * @return bool|null
     */
    public function getBypassSan(): ?bool
    {
        return $this->container['bypass_san'];
    }

    /**
     * Sets bypass_san
     *
     * @param bool|null $bypass_san bypass_san
     *
     * @return $this
     */
    public function setBypassSan(?bool $bypass_san): static
    {
        if (is_null($bypass_san)) {
            throw new InvalidArgumentException('non-nullable bypass_san cannot be null');
        }
        $this->container['bypass_san'] = $bypass_san;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return $this
     */
    public function setCategory(?string $category): static
    {
        if (is_null($category)) {
            throw new InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return string|null
     */
    public function getDeliveryTime(): ?string
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param string|null $delivery_time Average period of time between order creation and completion.
     *
     * @return $this
     */
    public function setDeliveryTime(?string $delivery_time): static
    {
        if (is_null($delivery_time)) {
            throw new InvalidArgumentException('non-nullable delivery_time cannot be null');
        }
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets encryption
     *
     * @return string|null
     */
    public function getEncryption(): ?string
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param string|null $encryption encryption
     *
     * @return $this
     */
    public function setEncryption(?string $encryption): static
    {
        if (is_null($encryption)) {
            throw new InvalidArgumentException('non-nullable encryption cannot be null');
        }
        $this->container['encryption'] = $encryption;

        return $this;
    }

    /**
     * Gets free_refund_period
     *
     * @return string|null
     */
    public function getFreeRefundPeriod(): ?string
    {
        return $this->container['free_refund_period'];
    }

    /**
     * Sets free_refund_period
     *
     * @param string|null $free_refund_period free_refund_period
     *
     * @return $this
     */
    public function setFreeRefundPeriod(?string $free_refund_period): static
    {
        if (is_null($free_refund_period)) {
            throw new InvalidArgumentException('non-nullable free_refund_period cannot be null');
        }
        $this->container['free_refund_period'] = $free_refund_period;

        return $this;
    }

    /**
     * Gets free_reissue_period
     *
     * @return string|null
     */
    public function getFreeReissuePeriod(): ?string
    {
        return $this->container['free_reissue_period'];
    }

    /**
     * Sets free_reissue_period
     *
     * @param string|null $free_reissue_period free_reissue_period
     *
     * @return $this
     */
    public function setFreeReissuePeriod(?string $free_reissue_period): static
    {
        if (is_null($free_reissue_period)) {
            throw new InvalidArgumentException('non-nullable free_reissue_period cannot be null');
        }
        $this->container['free_reissue_period'] = $free_reissue_period;

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
     * Gets included_domains_count
     *
     * @return int|null
     */
    public function getIncludedDomainsCount(): ?int
    {
        return $this->container['included_domains_count'];
    }

    /**
     * Sets included_domains_count
     *
     * @param int|null $included_domains_count included_domains_count
     *
     * @return $this
     */
    public function setIncludedDomainsCount(?int $included_domains_count): static
    {
        if (is_null($included_domains_count)) {
            throw new InvalidArgumentException('non-nullable included_domains_count cannot be null');
        }
        $this->container['included_domains_count'] = $included_domains_count;

        return $this;
    }

    /**
     * Gets is_extended_validation_supported
     *
     * @return bool|null
     */
    public function getIsExtendedValidationSupported(): ?bool
    {
        return $this->container['is_extended_validation_supported'];
    }

    /**
     * Sets is_extended_validation_supported
     *
     * @param bool|null $is_extended_validation_supported is_extended_validation_supported
     *
     * @return $this
     */
    public function setIsExtendedValidationSupported(?bool $is_extended_validation_supported): static
    {
        if (is_null($is_extended_validation_supported)) {
            throw new InvalidArgumentException('non-nullable is_extended_validation_supported cannot be null');
        }
        $this->container['is_extended_validation_supported'] = $is_extended_validation_supported;

        return $this;
    }

    /**
     * Gets is_idn_supported
     *
     * @return bool|null
     */
    public function getIsIdnSupported(): ?bool
    {
        return $this->container['is_idn_supported'];
    }

    /**
     * Sets is_idn_supported
     *
     * @param bool|null $is_idn_supported is_idn_supported
     *
     * @return $this
     */
    public function setIsIdnSupported(?bool $is_idn_supported): static
    {
        if (is_null($is_idn_supported)) {
            throw new InvalidArgumentException('non-nullable is_idn_supported cannot be null');
        }
        $this->container['is_idn_supported'] = $is_idn_supported;

        return $this;
    }

    /**
     * Gets is_mobile_supported
     *
     * @return bool|null
     */
    public function getIsMobileSupported(): ?bool
    {
        return $this->container['is_mobile_supported'];
    }

    /**
     * Sets is_mobile_supported
     *
     * @param bool|null $is_mobile_supported is_mobile_supported
     *
     * @return $this
     */
    public function setIsMobileSupported(?bool $is_mobile_supported): static
    {
        if (is_null($is_mobile_supported)) {
            throw new InvalidArgumentException('non-nullable is_mobile_supported cannot be null');
        }
        $this->container['is_mobile_supported'] = $is_mobile_supported;

        return $this;
    }

    /**
     * Gets is_sgc_supported
     *
     * @return bool|null
     */
    public function getIsSgcSupported(): ?bool
    {
        return $this->container['is_sgc_supported'];
    }

    /**
     * Sets is_sgc_supported
     *
     * @param bool|null $is_sgc_supported is_sgc_supported
     *
     * @return $this
     */
    public function setIsSgcSupported(?bool $is_sgc_supported): static
    {
        if (is_null($is_sgc_supported)) {
            throw new InvalidArgumentException('non-nullable is_sgc_supported cannot be null');
        }
        $this->container['is_sgc_supported'] = $is_sgc_supported;

        return $this;
    }

    /**
     * Gets is_wildcard_supported
     *
     * @return bool|null
     */
    public function getIsWildcardSupported(): ?bool
    {
        return $this->container['is_wildcard_supported'];
    }

    /**
     * Sets is_wildcard_supported
     *
     * @param bool|null $is_wildcard_supported is_wildcard_supported
     *
     * @return $this
     */
    public function setIsWildcardSupported(?bool $is_wildcard_supported): static
    {
        if (is_null($is_wildcard_supported)) {
            throw new InvalidArgumentException('non-nullable is_wildcard_supported cannot be null');
        }
        $this->container['is_wildcard_supported'] = $is_wildcard_supported;

        return $this;
    }

    /**
     * Gets level_prices
     *
     * @return \Layer7\Openprovider\Model\ProductSslProductLevelPrices[]|null
     */
    public function getLevelPrices(): ?array
    {
        return $this->container['level_prices'];
    }

    /**
     * Sets level_prices
     *
     * @param \Layer7\Openprovider\Model\ProductSslProductLevelPrices[]|null $level_prices level_prices
     *
     * @return $this
     */
    public function setLevelPrices(?array $level_prices): static
    {
        if (is_null($level_prices)) {
            throw new InvalidArgumentException('non-nullable level_prices cannot be null');
        }
        $this->container['level_prices'] = $level_prices;

        return $this;
    }

    /**
     * Gets max_domains
     *
     * @return int|null
     */
    public function getMaxDomains(): ?int
    {
        return $this->container['max_domains'];
    }

    /**
     * Sets max_domains
     *
     * @param int|null $max_domains \"Applies only to multi-domain certificates.
     *
     * @return $this
     */
    public function setMaxDomains(?int $max_domains): static
    {
        if (is_null($max_domains)) {
            throw new InvalidArgumentException('non-nullable max_domains cannot be null');
        }
        $this->container['max_domains'] = $max_domains;

        return $this;
    }

    /**
     * Gets max_period
     *
     * @return int|null
     */
    public function getMaxPeriod(): ?int
    {
        return $this->container['max_period'];
    }

    /**
     * Sets max_period
     *
     * @param int|null $max_period max_period
     *
     * @return $this
     */
    public function setMaxPeriod(?int $max_period): static
    {
        if (is_null($max_period)) {
            throw new InvalidArgumentException('non-nullable max_period cannot be null');
        }
        $this->container['max_period'] = $max_period;

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
     * Gets number_of_domains
     *
     * @return int|null
     */
    public function getNumberOfDomains(): ?int
    {
        return $this->container['number_of_domains'];
    }

    /**
     * Sets number_of_domains
     *
     * @param int|null $number_of_domains number_of_domains
     *
     * @return $this
     */
    public function setNumberOfDomains(?int $number_of_domains): static
    {
        if (is_null($number_of_domains)) {
            throw new InvalidArgumentException('non-nullable number_of_domains cannot be null');
        }
        $this->container['number_of_domains'] = $number_of_domains;

        return $this;
    }

    /**
     * Gets order_module
     *
     * @return string|null
     */
    public function getOrderModule(): ?string
    {
        return $this->container['order_module'];
    }

    /**
     * Sets order_module
     *
     * @param string|null $order_module order_module
     *
     * @return $this
     */
    public function setOrderModule(?string $order_module): static
    {
        if (is_null($order_module)) {
            throw new InvalidArgumentException('non-nullable order_module cannot be null');
        }
        $this->container['order_module'] = $order_module;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Layer7\Openprovider\Model\ProductSslProductPrices[]|null
     */
    public function getPrices(): ?array
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Layer7\Openprovider\Model\ProductSslProductPrices[]|null $prices prices
     *
     * @return $this
     */
    public function setPrices(?array $prices): static
    {
        if (is_null($prices)) {
            throw new InvalidArgumentException('non-nullable prices cannot be null');
        }
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets root
     *
     * @return string|null
     */
    public function getRoot(): ?string
    {
        return $this->container['root'];
    }

    /**
     * Sets root
     *
     * @param string|null $root root
     *
     * @return $this
     */
    public function setRoot(?string $root): static
    {
        if (is_null($root)) {
            throw new InvalidArgumentException('non-nullable root cannot be null');
        }
        $this->container['root'] = $root;

        return $this;
    }

    /**
     * Gets sub_category
     *
     * @return string|null
     */
    public function getSubCategory(): ?string
    {
        return $this->container['sub_category'];
    }

    /**
     * Sets sub_category
     *
     * @param string|null $sub_category sub_category
     *
     * @return $this
     */
    public function setSubCategory(?string $sub_category): static
    {
        if (is_null($sub_category)) {
            throw new InvalidArgumentException('non-nullable sub_category cannot be null');
        }
        $this->container['sub_category'] = $sub_category;

        return $this;
    }

    /**
     * Gets supported_software
     *
     * @return \Layer7\Openprovider\Model\ProductSslProductSupportedSoftware[]|null
     */
    public function getSupportedSoftware(): ?array
    {
        return $this->container['supported_software'];
    }

    /**
     * Sets supported_software
     *
     * @param \Layer7\Openprovider\Model\ProductSslProductSupportedSoftware[]|null $supported_software supported_software
     *
     * @return $this
     */
    public function setSupportedSoftware(?array $supported_software): static
    {
        if (is_null($supported_software)) {
            throw new InvalidArgumentException('non-nullable supported_software cannot be null');
        }
        $this->container['supported_software'] = $supported_software;

        return $this;
    }

    /**
     * Gets validation_method
     *
     * @return string|null
     */
    public function getValidationMethod(): ?string
    {
        return $this->container['validation_method'];
    }

    /**
     * Sets validation_method
     *
     * @param string|null $validation_method validation_method
     *
     * @return $this
     */
    public function setValidationMethod(?string $validation_method): static
    {
        if (is_null($validation_method)) {
            throw new InvalidArgumentException('non-nullable validation_method cannot be null');
        }
        $this->container['validation_method'] = $validation_method;

        return $this;
    }

    /**
     * Gets warranty
     *
     * @return \Layer7\Openprovider\Model\ProductSslProductWarranty|null
     */
    public function getWarranty(): ?\Layer7\Openprovider\Model\ProductSslProductWarranty
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param \Layer7\Openprovider\Model\ProductSslProductWarranty|null $warranty warranty
     *
     * @return $this
     */
    public function setWarranty(?\Layer7\Openprovider\Model\ProductSslProductWarranty $warranty): static
    {
        if (is_null($warranty)) {
            throw new InvalidArgumentException('non-nullable warranty cannot be null');
        }
        $this->container['warranty'] = $warranty;

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


