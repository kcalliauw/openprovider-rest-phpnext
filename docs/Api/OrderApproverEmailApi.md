# Layer7\Openprovider\OrderApproverEmailApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resendApproverEmail()**](OrderApproverEmailApi.md#resendApproverEmail) | **POST** /v1beta/ssl/orders/{id}/approver-email/resend | Resend approver email |
| [**updateApproverEmailAddress()**](OrderApproverEmailApi.md#updateApproverEmailAddress) | **PUT** /v1beta/ssl/orders/{id}/approver-email | Update approver email address |


## `resendApproverEmail()`

```php
resendApproverEmail($id, $body): \Layer7\Openprovider\Model\ApproveremailResendApproverEmailResponse
```

Resend approver email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApproverEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\ApproveremailResendApproverEmailRequest(); // \Layer7\Openprovider\Model\ApproveremailResendApproverEmailRequest

try {
    $result = $apiInstance->resendApproverEmail($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApproverEmailApi->resendApproverEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\ApproveremailResendApproverEmailRequest**](../Model/ApproveremailResendApproverEmailRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\ApproveremailResendApproverEmailResponse**](../Model/ApproveremailResendApproverEmailResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApproverEmailAddress()`

```php
updateApproverEmailAddress($id, $body): \Layer7\Openprovider\Model\ApproveremailUpdateApproverEmailAddressResponse
```

Update approver email address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\OrderApproverEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Layer7\Openprovider\Model\ApproveremailUpdateApproverEmailAddressRequest(); // \Layer7\Openprovider\Model\ApproveremailUpdateApproverEmailAddressRequest

try {
    $result = $apiInstance->updateApproverEmailAddress($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApproverEmailApi->updateApproverEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Layer7\Openprovider\Model\ApproveremailUpdateApproverEmailAddressRequest**](../Model/ApproveremailUpdateApproverEmailAddressRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\ApproveremailUpdateApproverEmailAddressResponse**](../Model/ApproveremailUpdateApproverEmailAddressResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
