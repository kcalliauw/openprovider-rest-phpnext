# Layer7\Openprovider\OrderApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrder()**](OrderApi.md#cancelOrder) | **POST** /v1beta/ssl/orders/{id}/cancel | Cancel order |
| [**createOrder()**](OrderApi.md#createOrder) | **POST** /v1beta/ssl/orders | Create order |
| [**getOrder()**](OrderApi.md#getOrder) | **GET** /v1beta/ssl/orders/{id} | Get order |
| [**listOrders()**](OrderApi.md#listOrders) | **GET** /v1beta/ssl/orders | List orders |
| [**reissueOrder()**](OrderApi.md#reissueOrder) | **POST** /v1beta/ssl/orders/{id}/reissue | Reissue order |
| [**renewOrder()**](OrderApi.md#renewOrder) | **POST** /v1beta/ssl/orders/{id}/renew | Renew order |
| [**updateOrder()**](OrderApi.md#updateOrder) | **PUT** /v1beta/ssl/orders/{id} | Update order |


## `cancelOrder()`

```php
cancelOrder($id, $body): \Layer7\Openprovider\Model\OrderCancelOrderResponse
```

Cancel order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\OrderCancelOrderRequest(); // \Layer7\Openprovider\Model\OrderCancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\OrderCancelOrderRequest**](../Model/OrderCancelOrderRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\OrderCancelOrderResponse**](../Model/OrderCancelOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($body): \Layer7\Openprovider\Model\OrderCreateOrderResponse
```

Create order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\OrderCreateOrderRequest(); // \Layer7\Openprovider\Model\OrderCreateOrderRequest

try {
    $result = $apiInstance->createOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\OrderCreateOrderRequest**](../Model/OrderCreateOrderRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\OrderCreateOrderResponse**](../Model/OrderCreateOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($id): \Layer7\Openprovider\Model\OrderGetOrderResponse
```

Get order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |

### Return type

[**\Layer7\Openprovider\Model\OrderGetOrderResponse**](../Model/OrderGetOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($limit, $offset, $order_by_common_name, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_status, $order_by_product_name, $common_name_pattern, $status, $contact_handle): \Layer7\Openprovider\Model\OrderListOrdersResponse
```

List orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Search query limit.
$offset = 56; // int | Search query offset.
$order_by_common_name = 'order_by_common_name_example'; // string | desc/asc.
$order_by_order_date = 'order_by_order_date_example'; // string | desc/asc.
$order_by_active_date = 'order_by_active_date_example'; // string | desc/asc.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | desc/asc.
$order_by_status = 'order_by_status_example'; // string | desc/asc.
$order_by_product_name = 'order_by_product_name_example'; // string | desc/asc.
$common_name_pattern = 'common_name_pattern_example'; // string | Certificate common name pattern. Wildcard (*) can be used.
$status = 'status_example'; // string | Order status.
$contact_handle = 'contact_handle_example'; // string | Contact handle.

try {
    $result = $apiInstance->listOrders($limit, $offset, $order_by_common_name, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_status, $order_by_product_name, $common_name_pattern, $status, $contact_handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Search query limit. | [optional] |
| **offset** | **int**| Search query offset. | [optional] |
| **order_by_common_name** | **string**| desc/asc. | [optional] |
| **order_by_order_date** | **string**| desc/asc. | [optional] |
| **order_by_active_date** | **string**| desc/asc. | [optional] |
| **order_by_expiration_date** | **string**| desc/asc. | [optional] |
| **order_by_status** | **string**| desc/asc. | [optional] |
| **order_by_product_name** | **string**| desc/asc. | [optional] |
| **common_name_pattern** | **string**| Certificate common name pattern. Wildcard (*) can be used. | [optional] |
| **status** | **string**| Order status. | [optional] |
| **contact_handle** | **string**| Contact handle. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\OrderListOrdersResponse**](../Model/OrderListOrdersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reissueOrder()`

```php
reissueOrder($id, $body): \Layer7\Openprovider\Model\OrderReissueOrderResponse
```

Reissue order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\OrderReissueOrderRequest(); // \Layer7\Openprovider\Model\OrderReissueOrderRequest

try {
    $result = $apiInstance->reissueOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reissueOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\OrderReissueOrderRequest**](../Model/OrderReissueOrderRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\OrderReissueOrderResponse**](../Model/OrderReissueOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewOrder()`

```php
renewOrder($id, $body): \Layer7\Openprovider\Model\OrderRenewOrderResponse
```

Renew order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\OrderRenewOrderRequest(); // \Layer7\Openprovider\Model\OrderRenewOrderRequest

try {
    $result = $apiInstance->renewOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->renewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\OrderRenewOrderRequest**](../Model/OrderRenewOrderRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\OrderRenewOrderResponse**](../Model/OrderRenewOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($id, $body): \Layer7\Openprovider\Model\OrderUpdateOrderResponse
```

Update order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\OrderUpdateOrderRequest(); // \Layer7\Openprovider\Model\OrderUpdateOrderRequest

try {
    $result = $apiInstance->updateOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\OrderUpdateOrderRequest**](../Model/OrderUpdateOrderRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\OrderUpdateOrderResponse**](../Model/OrderUpdateOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
