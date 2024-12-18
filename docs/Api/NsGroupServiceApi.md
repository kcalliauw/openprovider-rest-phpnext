# Layer7\Openprovider\NsGroupServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGroup()**](NsGroupServiceApi.md#createGroup) | **POST** /v1beta/dns/nameservers/groups | Create group |
| [**deleteGroup()**](NsGroupServiceApi.md#deleteGroup) | **DELETE** /v1beta/dns/nameservers/groups/{ns_group} | Delete group |
| [**getGroup()**](NsGroupServiceApi.md#getGroup) | **GET** /v1beta/dns/nameservers/groups/{ns_group} | Get group |
| [**listGroups()**](NsGroupServiceApi.md#listGroups) | **GET** /v1beta/dns/nameservers/groups | List groups |
| [**updateGroup()**](NsGroupServiceApi.md#updateGroup) | **PUT** /v1beta/dns/nameservers/groups/{ns_group} | Update group |


## `createGroup()`

```php
createGroup($body): \Layer7\Openprovider\Model\NsGroupCreateGroupResponse
```

Create group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Layer7\Openprovider\Model\NsGroupCreateGroupRequest(); // \Layer7\Openprovider\Model\NsGroupCreateGroupRequest

try {
    $result = $apiInstance->createGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Layer7\Openprovider\Model\NsGroupCreateGroupRequest**](../Model/NsGroupCreateGroupRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\NsGroupCreateGroupResponse**](../Model/NsGroupCreateGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($ns_group): \Layer7\Openprovider\Model\NsGroupGroupBoolResponse
```

Delete group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.

try {
    $result = $apiInstance->deleteGroup($ns_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |

### Return type

[**\Layer7\Openprovider\Model\NsGroupGroupBoolResponse**](../Model/NsGroupGroupBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($ns_group, $id): \Layer7\Openprovider\Model\NsGroupGetGroupResponse
```

Get group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
$id = 56; // int | Nameserver group ID.

try {
    $result = $apiInstance->getGroup($ns_group, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |
| **id** | **int**| Nameserver group ID. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\NsGroupGetGroupResponse**](../Model/NsGroupGetGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroups()`

```php
listGroups($limit, $offset, $order_by, $with_domain_count, $with_ns_count, $ns_group_pattern, $ns_name_pattern, $ns_ip_pattern): \Layer7\Openprovider\Model\NsGroupListGroupsResponse
```

List groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects in the output.
$offset = 56; // int | Used to retrieve all objects from a certain offset up to the limit. (default value: 0).
$order_by = 'order_by_example'; // string | The order by.
$with_domain_count = True; // bool | Indicates if number of domains associated with the NS group should be returned.
$with_ns_count = True; // bool | Indicates if number of nameservers associated with the NS group should be returned.
$ns_group_pattern = 'ns_group_pattern_example'; // string | NS group name pattern. Wildcard (*) can be used.
$ns_name_pattern = 'ns_name_pattern_example'; // string | Nameserver name pattern. Wildcard (*) can be used.
$ns_ip_pattern = 'ns_ip_pattern_example'; // string | Nameserver IP address pattern. Wildcard (*) can be used.

try {
    $result = $apiInstance->listGroups($limit, $offset, $order_by, $with_domain_count, $with_ns_count, $ns_group_pattern, $ns_name_pattern, $ns_ip_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects in the output. | [optional] |
| **offset** | **int**| Used to retrieve all objects from a certain offset up to the limit. (default value: 0). | [optional] |
| **order_by** | **string**| The order by. | [optional] |
| **with_domain_count** | **bool**| Indicates if number of domains associated with the NS group should be returned. | [optional] |
| **with_ns_count** | **bool**| Indicates if number of nameservers associated with the NS group should be returned. | [optional] |
| **ns_group_pattern** | **string**| NS group name pattern. Wildcard (*) can be used. | [optional] |
| **ns_name_pattern** | **string**| Nameserver name pattern. Wildcard (*) can be used. | [optional] |
| **ns_ip_pattern** | **string**| Nameserver IP address pattern. Wildcard (*) can be used. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\NsGroupListGroupsResponse**](../Model/NsGroupListGroupsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($ns_group, $body): \Layer7\Openprovider\Model\NsGroupGroupBoolResponse
```

Update group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
$body = new \Layer7\Openprovider\Model\NsGroupUpdateGroupRequest(); // \Layer7\Openprovider\Model\NsGroupUpdateGroupRequest

try {
    $result = $apiInstance->updateGroup($ns_group, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |
| **body** | [**\Layer7\Openprovider\Model\NsGroupUpdateGroupRequest**](../Model/NsGroupUpdateGroupRequest.md)|  | |

### Return type

[**\Layer7\Openprovider\Model\NsGroupGroupBoolResponse**](../Model/NsGroupGroupBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
