# Layer7\Openprovider\AdditionalDataApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdditionalData()**](AdditionalDataApi.md#getAdditionalData) | **GET** /v1beta/domains/{id}/additional-data | Get additional data |


## `getAdditionalData()`

```php
getAdditionalData($id, $domain_name, $domain_extension, $operation): \Layer7\Openprovider\Model\AdditionalDataGetAdditionalDataResponse
```

Get additional data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\AdditionalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$operation = 'operation_example'; // string | The operation.

try {
    $result = $apiInstance->getAdditionalData($id, $domain_name, $domain_extension, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalDataApi->getAdditionalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **operation** | **string**| The operation. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\AdditionalDataGetAdditionalDataResponse**](../Model/AdditionalDataGetAdditionalDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
