# Layer7\Openprovider\DomainServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveTransfer()**](DomainServiceApi.md#approveTransfer) | **POST** /v1beta/domains/{id}/transfer/approve | Approve transfer |
| [**checkDomain()**](DomainServiceApi.md#checkDomain) | **POST** /v1beta/domains/check | Check domain |
| [**createDomain()**](DomainServiceApi.md#createDomain) | **POST** /v1beta/domains | Create domain |
| [**deleteDomain()**](DomainServiceApi.md#deleteDomain) | **DELETE** /v1beta/domains/{id} | Delete domain |
| [**getDomain()**](DomainServiceApi.md#getDomain) | **GET** /v1beta/domains/{id} | Get domain |
| [**listDomains()**](DomainServiceApi.md#listDomains) | **GET** /v1beta/domains | List domains |
| [**renewDomain()**](DomainServiceApi.md#renewDomain) | **POST** /v1beta/domains/{id}/renew | Renew domain |
| [**restoreDomain()**](DomainServiceApi.md#restoreDomain) | **POST** /v1beta/domains/{id}/restore | Restore domain |
| [**sendFoa1()**](DomainServiceApi.md#sendFoa1) | **POST** /v1beta/domains/{id}/transfer/send-foa1 | Send foa1 |
| [**tradeDomain()**](DomainServiceApi.md#tradeDomain) | **POST** /v1beta/domains/trade | Trade domain |
| [**transferDomain()**](DomainServiceApi.md#transferDomain) | **POST** /v1beta/domains/transfer | Transfer domain |
| [**tryAgainLastOperation()**](DomainServiceApi.md#tryAgainLastOperation) | **POST** /v1beta/domains/{id}/last-operation/restart | Try again last operation |
| [**updateDomain()**](DomainServiceApi.md#updateDomain) | **PUT** /v1beta/domains/{id} | Update domain |


## `approveTransfer()`

```php
approveTransfer($id, $body): \Layer7\Openprovider\Model\DomainApproveTransferResponse
```

Approve transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainApproveTransferRequest(); // \Layer7\Openprovider\Model\DomainApproveTransferRequest

try {
    $result = $apiInstance->approveTransfer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->approveTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainApproveTransferRequest**](../Model/DomainApproveTransferRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainApproveTransferResponse**](../Model/DomainApproveTransferResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDomain()`

```php
checkDomain($body): \Layer7\Openprovider\Model\DomainCheckDomainResponse
```

Check domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\DomainCheckDomainRequest(); // \Layer7\Openprovider\Model\DomainCheckDomainRequest

try {
    $result = $apiInstance->checkDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\DomainCheckDomainRequest**](../Model/DomainCheckDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainCheckDomainResponse**](../Model/DomainCheckDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($body): \Layer7\Openprovider\Model\DomainCreateDomainResponse
```

Create domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\DomainCreateDomainRequest(); // \Layer7\Openprovider\Model\DomainCreateDomainRequest

try {
    $result = $apiInstance->createDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\DomainCreateDomainRequest**](../Model/DomainCreateDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainCreateDomainResponse**](../Model/DomainCreateDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomain()`

```php
deleteDomain($id, $reseller_id, $domain_name, $domain_extension, $domain_idn_extension, $type, $skip_soft_quarantine): \Layer7\Openprovider\Model\DomainDeleteDomainResponse
```

Delete domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$reseller_id = 56; // int | Reseller id.
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$domain_idn_extension = 'domain_idn_extension_example'; // string | Domain IDN extension.
$type = 'type_example'; // string | Type of deletion request.
$skip_soft_quarantine = 56; // int | Deletes domain, skipping the soft quarantine.

try {
    $result = $apiInstance->deleteDomain($id, $reseller_id, $domain_name, $domain_extension, $domain_idn_extension, $type, $skip_soft_quarantine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **reseller_id** | **int**| Reseller id. | [optional] |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **domain_idn_extension** | **string**| Domain IDN extension. | [optional] |
| **type** | **string**| Type of deletion request. | [optional] |
| **skip_soft_quarantine** | **int**| Deletes domain, skipping the soft quarantine. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\DomainDeleteDomainResponse**](../Model/DomainDeleteDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($id, $domain_name, $domain_extension, $domain_idn_extension, $reseller_id, $queue_status, $with_history, $with_api_history, $with_additional_data, $with_registry_details, $with_dnssec_data, $with_abuse_details, $with_whois_privacy_data, $with_registry_statuses, $is_deleted): \Layer7\Openprovider\Model\DomainGetDomainResponse
```

Get domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$domain_idn_extension = 'domain_idn_extension_example'; // string | Domain IDN extension.
$reseller_id = 56; // int | Reseller id.
$queue_status = 'queue_status_example'; // string | The queue status.
$with_history = True; // bool | Returns domain mutations history.
$with_api_history = True; // bool | Returns domain API calls history.
$with_additional_data = True; // bool | Returns domain additional data.
$with_registry_details = True; // bool | Retrurns registry details.
$with_dnssec_data = True; // bool | Returns DNSSEC data.
$with_abuse_details = True; // bool | Returns domain abuse details.
$with_whois_privacy_data = True; // bool | Returns WPP data.
$with_registry_statuses = True; // bool | Indicates, if registry EPP statuses should be retrieved.
$is_deleted = True; // bool | Indicates whether object is deleted.

try {
    $result = $apiInstance->getDomain($id, $domain_name, $domain_extension, $domain_idn_extension, $reseller_id, $queue_status, $with_history, $with_api_history, $with_additional_data, $with_registry_details, $with_dnssec_data, $with_abuse_details, $with_whois_privacy_data, $with_registry_statuses, $is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **domain_idn_extension** | **string**| Domain IDN extension. | [optional] |
| **reseller_id** | **int**| Reseller id. | [optional] |
| **queue_status** | **string**| The queue status. | [optional] |
| **with_history** | **bool**| Returns domain mutations history. | [optional] |
| **with_api_history** | **bool**| Returns domain API calls history. | [optional] |
| **with_additional_data** | **bool**| Returns domain additional data. | [optional] |
| **with_registry_details** | **bool**| Retrurns registry details. | [optional] |
| **with_dnssec_data** | **bool**| Returns DNSSEC data. | [optional] |
| **with_abuse_details** | **bool**| Returns domain abuse details. | [optional] |
| **with_whois_privacy_data** | **bool**| Returns WPP data. | [optional] |
| **with_registry_statuses** | **bool**| Indicates, if registry EPP statuses should be retrieved. | [optional] |
| **is_deleted** | **bool**| Indicates whether object is deleted. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\DomainGetDomainResponse**](../Model/DomainGetDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomains()`

```php
listDomains($order_by_id, $order_by_domain_name, $order_by_domain_extension, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_renewal_date, $order_by_status, $order_by_transfer_date, $limit, $offset, $id, $extension, $renewal_date, $domain_name_pattern, $ns_group_pattern, $status, $status_not_equal, $queue_status, $contact_handle, $comment_pattern, $with_history, $with_api_history, $with_document_list, $with_additional_data, $application_mode, $with_verification_email, $with_registry_statuses, $response_to, $is_deleted): \Layer7\Openprovider\Model\DomainListDomainsResponse
```

List domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by_id = 'order_by_id_example'; // string | Domain id number.
$order_by_domain_name = 'order_by_domain_name_example'; // string | The domain name.
$order_by_domain_extension = 'order_by_domain_extension_example'; // string | Domain extension.
$order_by_order_date = 'order_by_order_date_example'; // string | The order date.
$order_by_active_date = 'order_by_active_date_example'; // string | The active date.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | Domain expiration date.
$order_by_renewal_date = 'order_by_renewal_date_example'; // string | Date on which domain will be renewed.
$order_by_status = 'order_by_status_example'; // string | Domain status.
$order_by_transfer_date = 'order_by_transfer_date_example'; // string | The transfer date.
$limit = 56; // int | The limit.
$offset = 56; // int | The offset.
$id = 56; // int | Domain id number.
$extension = 'extension_example'; // string | Domain extension.
$renewal_date = 'renewal_date_example'; // string | Date on which domain will be renewed.
$domain_name_pattern = 'domain_name_pattern_example'; // string | The domain name pattern.
$ns_group_pattern = 'ns_group_pattern_example'; // string | Nameserver group name pattern.
$status = 'status_example'; // string | Domain status.
$status_not_equal = 'status_not_equal_example'; // string | The status not equal.
$queue_status = 'queue_status_example'; // string | The queue status.
$contact_handle = 'contact_handle_example'; // string | Handle to filter by.
$comment_pattern = 'comment_pattern_example'; // string | The comment pattern.
$with_history = True; // bool | With history.
$with_api_history = True; // bool | With api history.
$with_document_list = True; // bool | With document list.
$with_additional_data = True; // bool | With additional data.
$application_mode = 'application_mode_example'; // string | When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
$with_verification_email = True; // bool | With verification email.
$with_registry_statuses = True; // bool | Indicates, if registry EPP statuses should be retrieved.
$response_to = 'response_to_example'; // string | The to.
$is_deleted = True; // bool | Indicates whether object is deleted.

try {
    $result = $apiInstance->listDomains($order_by_id, $order_by_domain_name, $order_by_domain_extension, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_renewal_date, $order_by_status, $order_by_transfer_date, $limit, $offset, $id, $extension, $renewal_date, $domain_name_pattern, $ns_group_pattern, $status, $status_not_equal, $queue_status, $contact_handle, $comment_pattern, $with_history, $with_api_history, $with_document_list, $with_additional_data, $application_mode, $with_verification_email, $with_registry_statuses, $response_to, $is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_by_id** | **string**| Domain id number. | [optional] |
| **order_by_domain_name** | **string**| The domain name. | [optional] |
| **order_by_domain_extension** | **string**| Domain extension. | [optional] |
| **order_by_order_date** | **string**| The order date. | [optional] |
| **order_by_active_date** | **string**| The active date. | [optional] |
| **order_by_expiration_date** | **string**| Domain expiration date. | [optional] |
| **order_by_renewal_date** | **string**| Date on which domain will be renewed. | [optional] |
| **order_by_status** | **string**| Domain status. | [optional] |
| **order_by_transfer_date** | **string**| The transfer date. | [optional] |
| **limit** | **int**| The limit. | [optional] |
| **offset** | **int**| The offset. | [optional] |
| **id** | **int**| Domain id number. | [optional] |
| **extension** | **string**| Domain extension. | [optional] |
| **renewal_date** | **string**| Date on which domain will be renewed. | [optional] |
| **domain_name_pattern** | **string**| The domain name pattern. | [optional] |
| **ns_group_pattern** | **string**| Nameserver group name pattern. | [optional] |
| **status** | **string**| Domain status. | [optional] |
| **status_not_equal** | **string**| The status not equal. | [optional] |
| **queue_status** | **string**| The queue status. | [optional] |
| **contact_handle** | **string**| Handle to filter by. | [optional] |
| **comment_pattern** | **string**| The comment pattern. | [optional] |
| **with_history** | **bool**| With history. | [optional] |
| **with_api_history** | **bool**| With api history. | [optional] |
| **with_document_list** | **bool**| With document list. | [optional] |
| **with_additional_data** | **bool**| With additional data. | [optional] |
| **application_mode** | **string**| When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions. | [optional] |
| **with_verification_email** | **bool**| With verification email. | [optional] |
| **with_registry_statuses** | **bool**| Indicates, if registry EPP statuses should be retrieved. | [optional] |
| **response_to** | **string**| The to. | [optional] |
| **is_deleted** | **bool**| Indicates whether object is deleted. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\DomainListDomainsResponse**](../Model/DomainListDomainsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewDomain()`

```php
renewDomain($id, $body): \Layer7\Openprovider\Model\DomainRenewDomainResponse
```

Renew domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainRenewDomainRequest(); // \Layer7\Openprovider\Model\DomainRenewDomainRequest

try {
    $result = $apiInstance->renewDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->renewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainRenewDomainRequest**](../Model/DomainRenewDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainRenewDomainResponse**](../Model/DomainRenewDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreDomain()`

```php
restoreDomain($id, $body): \Layer7\Openprovider\Model\DomainRestoreDomainResponse
```

Restore domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainRestoreDomainRequest(); // \Layer7\Openprovider\Model\DomainRestoreDomainRequest

try {
    $result = $apiInstance->restoreDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->restoreDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainRestoreDomainRequest**](../Model/DomainRestoreDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainRestoreDomainResponse**](../Model/DomainRestoreDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFoa1()`

```php
sendFoa1($id, $body): \Layer7\Openprovider\Model\DomainSendFoa1Response
```

Send foa1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainSendFoa1Request(); // \Layer7\Openprovider\Model\DomainSendFoa1Request

try {
    $result = $apiInstance->sendFoa1($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->sendFoa1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainSendFoa1Request**](../Model/DomainSendFoa1Request.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainSendFoa1Response**](../Model/DomainSendFoa1Response.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tradeDomain()`

```php
tradeDomain($body): \Layer7\Openprovider\Model\DomainTradeDomainResponse
```

Trade domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\DomainTradeDomainRequest(); // \Layer7\Openprovider\Model\DomainTradeDomainRequest

try {
    $result = $apiInstance->tradeDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->tradeDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\DomainTradeDomainRequest**](../Model/DomainTradeDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainTradeDomainResponse**](../Model/DomainTradeDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferDomain()`

```php
transferDomain($body): \Layer7\Openprovider\Model\DomainTransferDomainResponse
```

Transfer domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\DomainTransferDomainRequest(); // \Layer7\Openprovider\Model\DomainTransferDomainRequest

try {
    $result = $apiInstance->transferDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->transferDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\DomainTransferDomainRequest**](../Model/DomainTransferDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainTransferDomainResponse**](../Model/DomainTransferDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tryAgainLastOperation()`

```php
tryAgainLastOperation($id, $body): \Layer7\Openprovider\Model\DomainTryAgainLastOperationResponse
```

Try again last operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainTryAgainLastOperationRequest(); // \Layer7\Openprovider\Model\DomainTryAgainLastOperationRequest

try {
    $result = $apiInstance->tryAgainLastOperation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->tryAgainLastOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainTryAgainLastOperationRequest**](../Model/DomainTryAgainLastOperationRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainTryAgainLastOperationResponse**](../Model/DomainTryAgainLastOperationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($id, $body): \Layer7\Openprovider\Model\DomainUpdateDomainResponse
```

Update domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Layer7\Openprovider\Model\DomainUpdateDomainRequest(); // \Layer7\Openprovider\Model\DomainUpdateDomainRequest

try {
    $result = $apiInstance->updateDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Layer7\Openprovider\Model\DomainUpdateDomainRequest**](../Model/DomainUpdateDomainRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\DomainUpdateDomainResponse**](../Model/DomainUpdateDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
