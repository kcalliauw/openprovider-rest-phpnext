# Layer7\Openprovider\ZoneRecordServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listZoneRecords()**](ZoneRecordServiceApi.md#listZoneRecords) | **GET** /v1beta/dns/zones/{name}/records | List zone records |


## `listZoneRecords()`

```php
listZoneRecords($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl): \Layer7\Openprovider\Model\RecordListZoneRecordsResponse
```

List zone records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Layer7\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Layer7\Openprovider\Api\ZoneRecordServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | DNS record name
$zone_id = 56; // int | DNS zone ID.
$limit = 56; // int | How many records to retrieve (default: 100, max 500).
$offset = 56; // int | From which record to retrieve (default: 0).
$order_by_type = 'order_by_type_example'; // string | Sorting type (ASC/DESC).
$order_by_name = 'order_by_name_example'; // string | Name of the field to sort results by.
$record_name_pattern = 'record_name_pattern_example'; // string | DNS record name pattern. Wildcard (*) can be used.
$value_pattern = 'value_pattern_example'; // string | DNS record value pattern. Wildcard (*) can be used.
$type = 'type_example'; // string | DNS record type.
$prio = 56; // int | DNS record priority.
$ttl = 56; // int | DNS record TTL.

try {
    $result = $apiInstance->listZoneRecords($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneRecordServiceApi->listZoneRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| DNS record name | |
| **zone_id** | **int**| DNS zone ID. | [optional] |
| **limit** | **int**| How many records to retrieve (default: 100, max 500). | [optional] |
| **offset** | **int**| From which record to retrieve (default: 0). | [optional] |
| **order_by_type** | **string**| Sorting type (ASC/DESC). | [optional] |
| **order_by_name** | **string**| Name of the field to sort results by. | [optional] |
| **record_name_pattern** | **string**| DNS record name pattern. Wildcard (*) can be used. | [optional] |
| **value_pattern** | **string**| DNS record value pattern. Wildcard (*) can be used. | [optional] |
| **type** | **string**| DNS record type. | [optional] |
| **prio** | **int**| DNS record priority. | [optional] |
| **ttl** | **int**| DNS record TTL. | [optional] |

### Return type

[**\Layer7\Openprovider\Model\RecordListZoneRecordsResponse**](../Model/RecordListZoneRecordsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
