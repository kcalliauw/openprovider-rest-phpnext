# Layer7\Openprovider\NameserverServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNameserver()**](NameserverServiceApi.md#createNameserver) | **POST** /v1beta/dns/nameservers | Create nameserver |
| [**deleteNameserver()**](NameserverServiceApi.md#deleteNameserver) | **DELETE** /v1beta/dns/nameservers/{name} | Delete nameserver |
| [**getNameserver()**](NameserverServiceApi.md#getNameserver) | **GET** /v1beta/dns/nameservers/{name} | Get nameserver |
| [**listNameservers()**](NameserverServiceApi.md#listNameservers) | **GET** /v1beta/dns/nameservers | List nameservers |
| [**updateNameserver()**](NameserverServiceApi.md#updateNameserver) | **PUT** /v1beta/dns/nameservers/{name} | Update nameserver |


## `createNameserver()`

```php
createNameserver($body): \Layer7\Openprovider\Model\NameserverCreateNameserverResponse
```

Create nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\NameserverNameserver(); // \Layer7\Openprovider\Model\NameserverNameserver

try {
    $result = $apiInstance->createNameserver($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->createNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\NameserverNameserver**](../Model/NameserverNameserver.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\NameserverCreateNameserverResponse**](../Model/NameserverCreateNameserverResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNameserver()`

```php
deleteNameserver($name): \Layer7\Openprovider\Model\NameserverNameserverBoolResponse
```

Delete nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name

try {
    $result = $apiInstance->deleteNameserver($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->deleteNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |

### Return type

[**\Layer7\Openprovider\Model\NameserverNameserverBoolResponse**](../Model/NameserverNameserverBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameserver()`

```php
getNameserver($name): \Layer7\Openprovider\Model\NameserverGetNameserverResponse
```

Get nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name

try {
    $result = $apiInstance->getNameserver($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->getNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |

### Return type

[**\Layer7\Openprovider\Model\NameserverGetNameserverResponse**](../Model/NameserverGetNameserverResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNameservers()`

```php
listNameservers($name, $ip, $ip6, $pattern): \Layer7\Openprovider\Model\NameserverListNameserversResponse
```

List nameservers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name.
$ip = 'ip_example'; // string | Nameserver IP.
$ip6 = 'ip6_example'; // string | Nameserver IPv6.
$pattern = 'pattern_example'; // string | Nameserver name search pattern. Wildcatd (*) can be used.

try {
    $result = $apiInstance->listNameservers($name, $ip, $ip6, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->listNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name. | [optional] |
| **ip** | **string**| Nameserver IP. | [optional] |
| **ip6** | **string**| Nameserver IPv6. | [optional] |
| **pattern** | **string**| Nameserver name search pattern. Wildcatd (*) can be used. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\NameserverListNameserversResponse**](../Model/NameserverListNameserversResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNameserver()`

```php
updateNameserver($name, $body): \Layer7\Openprovider\Model\NameserverNameserverBoolResponse
```

Update nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name
$body = new \Layer7\Openprovider\Model\NameserverNameserver(); // \Layer7\Openprovider\Model\NameserverNameserver

try {
    $result = $apiInstance->updateNameserver($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->updateNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |
| **body** | [**\Layer7\Openprovider\Model\NameserverNameserver**](../Model/NameserverNameserver.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\NameserverNameserverBoolResponse**](../Model/NameserverNameserverBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
