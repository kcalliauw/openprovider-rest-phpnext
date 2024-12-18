# Layer7\Openprovider\ProductApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProduct()**](ProductApi.md#getProduct) | **GET** /v1beta/ssl/products/{id} | Get product |
| [**listProducts()**](ProductApi.md#listProducts) | **GET** /v1beta/ssl/products | List products |


## `getProduct()`

```php
getProduct($id): \Layer7\Openprovider\Model\ProductGetProductResponse
```

Get product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id

try {
    $result = $apiInstance->getProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |

### Return type

[**\Layer7\Openprovider\Model\ProductGetProductResponse**](../Model/ProductGetProductResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno): \Layer7\Openprovider\Model\ProductListProductsResponse
```

List products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Search query limit.
$offset = 56; // int | Search query offset.
$with_price = True; // bool | Returns product price in the response.
$with_supported_software = True; // bool | Returns a list of supported software patforms.
$with_description = True; // bool | Returns a description for each product, if exists.
$order_by_name = 'order_by_name_example'; // string | The name.
$order_by_brand_name = 'order_by_brand_name_example'; // string | The brand name.
$order_by_category = 'order_by_category_example'; // string | The category.
$order_by_sub_category = 'order_by_sub_category_example'; // string | The sub category.
$order_by_brand_seqno = 'order_by_brand_seqno_example'; // string | The brand seqno.
$order_by_product_seqno = 'order_by_product_seqno_example'; // string | The product seqno.

try {
    $result = $apiInstance->listProducts($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Search query limit. | [optional] |
| **offset** | **int**| Search query offset. | [optional] |
| **with_price** | **bool**| Returns product price in the response. | [optional] |
| **with_supported_software** | **bool**| Returns a list of supported software patforms. | [optional] |
| **with_description** | **bool**| Returns a description for each product, if exists. | [optional] |
| **order_by_name** | **string**| The name. | [optional] |
| **order_by_brand_name** | **string**| The brand name. | [optional] |
| **order_by_category** | **string**| The category. | [optional] |
| **order_by_sub_category** | **string**| The sub category. | [optional] |
| **order_by_brand_seqno** | **string**| The brand seqno. | [optional] |
| **order_by_product_seqno** | **string**| The product seqno. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\ProductListProductsResponse**](../Model/ProductListProductsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
