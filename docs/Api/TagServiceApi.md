# Layer7\Openprovider\TagServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTag()**](TagServiceApi.md#createTag) | **POST** /v1beta/tags | Create tag |
| [**deleteTag()**](TagServiceApi.md#deleteTag) | **DELETE** /v1beta/tags | Delete tag |
| [**listTags()**](TagServiceApi.md#listTags) | **GET** /v1beta/tags | List tags |


## `createTag()`

```php
createTag($body): \Layer7\Openprovider\Model\TagCreateTagResponse
```

Create tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\TagTag(); // \Layer7\Openprovider\Model\TagTag

try {
    $result = $apiInstance->createTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\TagTag**](../Model/TagTag.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\TagCreateTagResponse**](../Model/TagCreateTagResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($key, $value): \Layer7\Openprovider\Model\TagDeleteTagResponse
```

Delete tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the tag. Allowed values: 'customer'.
$value = 'value_example'; // string | The value of the tag. I.e.: VIP customer.

try {
    $result = $apiInstance->deleteTag($key, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the tag. Allowed values: &#39;customer&#39;. | [optional] |
| **value** | **string**| The value of the tag. I.e.: VIP customer. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\TagDeleteTagResponse**](../Model/TagDeleteTagResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($key, $value): \Layer7\Openprovider\Model\TagListTagsResponse
```

List tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the tag. Allowed values: 'customer'.
$value = 'value_example'; // string | The value of the tag. I.e.: VIP customer.

try {
    $result = $apiInstance->listTags($key, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the tag. Allowed values: &#39;customer&#39;. | [optional] |
| **value** | **string**| The value of the tag. I.e.: VIP customer. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\TagListTagsResponse**](../Model/TagListTagsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
