<?php
/**
 * ZoneRecordServiceApi
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

namespace Layer7\Openprovider\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Layer7\Openprovider\ApiException;
use Layer7\Openprovider\Configuration;
use Layer7\Openprovider\HeaderSelector;
use Layer7\Openprovider\ObjectSerializer;

/**
 * ZoneRecordServiceApi Class Doc Comment
 *
 * @package  Layer7\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZoneRecordServiceApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listZoneRecords' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation listZoneRecords
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int|null $zone_id DNS zone ID. (optional)
     * @param  int|null $limit How many records to retrieve (default: 100, max 500). (optional)
     * @param  int|null $offset From which record to retrieve (default: 0). (optional)
     * @param  string|null $order_by_type Sorting type (ASC/DESC). (optional)
     * @param  string|null $order_by_name Name of the field to sort results by. (optional)
     * @param  string|null $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $type DNS record type. (optional)
     * @param  int|null $prio DNS record priority. (optional)
     * @param  int|null $ttl DNS record TTL. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Layer7\Openprovider\Model\RecordListZoneRecordsResponse|\Layer7\Openprovider\Model\ErrorError
     */
    public function listZoneRecords(
        string $name,
        ?int $zone_id = null,
        ?int $limit = null,
        ?int $offset = null,
        ?string $order_by_type = null,
        ?string $order_by_name = null,
        ?string $record_name_pattern = null,
        ?string $value_pattern = null,
        ?string $type = null,
        ?int $prio = null,
        ?int $ttl = null,
        string $contentType = self::contentTypes['listZoneRecords'][0]
    ): \Layer7\Openprovider\Model\RecordListZoneRecordsResponse
    {
        list($response) = $this->listZoneRecordsWithHttpInfo($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $contentType);
        return $response;
    }

    /**
     * Operation listZoneRecordsWithHttpInfo
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int|null $zone_id DNS zone ID. (optional)
     * @param  int|null $limit How many records to retrieve (default: 100, max 500). (optional)
     * @param  int|null $offset From which record to retrieve (default: 0). (optional)
     * @param  string|null $order_by_type Sorting type (ASC/DESC). (optional)
     * @param  string|null $order_by_name Name of the field to sort results by. (optional)
     * @param  string|null $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $type DNS record type. (optional)
     * @param  int|null $prio DNS record priority. (optional)
     * @param  int|null $ttl DNS record TTL. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Layer7\Openprovider\Model\RecordListZoneRecordsResponse|\Layer7\Openprovider\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listZoneRecordsWithHttpInfo(
        string $name,
        ?int $zone_id = null,
        ?int $limit = null,
        ?int $offset = null,
        ?string $order_by_type = null,
        ?string $order_by_name = null,
        ?string $record_name_pattern = null,
        ?string $value_pattern = null,
        ?string $type = null,
        ?int $prio = null,
        ?int $ttl = null,
        string $contentType = self::contentTypes['listZoneRecords'][0]
    ): array
    {
        $request = $this->listZoneRecordsRequest($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\Layer7\Openprovider\Model\RecordListZoneRecordsResponse', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Layer7\Openprovider\Model\RecordListZoneRecordsResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Layer7\Openprovider\Model\RecordListZoneRecordsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if (in_array('\Layer7\Openprovider\Model\ErrorError', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Layer7\Openprovider\Model\ErrorError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Layer7\Openprovider\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Layer7\Openprovider\Model\RecordListZoneRecordsResponse';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Layer7\Openprovider\Model\RecordListZoneRecordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Layer7\Openprovider\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listZoneRecordsAsync
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int|null $zone_id DNS zone ID. (optional)
     * @param  int|null $limit How many records to retrieve (default: 100, max 500). (optional)
     * @param  int|null $offset From which record to retrieve (default: 0). (optional)
     * @param  string|null $order_by_type Sorting type (ASC/DESC). (optional)
     * @param  string|null $order_by_name Name of the field to sort results by. (optional)
     * @param  string|null $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $type DNS record type. (optional)
     * @param  int|null $prio DNS record priority. (optional)
     * @param  int|null $ttl DNS record TTL. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function listZoneRecordsAsync(
        string $name,
        ?int $zone_id = null,
        ?int $limit = null,
        ?int $offset = null,
        ?string $order_by_type = null,
        ?string $order_by_name = null,
        ?string $record_name_pattern = null,
        ?string $value_pattern = null,
        ?string $type = null,
        ?int $prio = null,
        ?int $ttl = null,
        string $contentType = self::contentTypes['listZoneRecords'][0]
    ): PromiseInterface
    {
        return $this->listZoneRecordsAsyncWithHttpInfo($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listZoneRecordsAsyncWithHttpInfo
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int|null $zone_id DNS zone ID. (optional)
     * @param  int|null $limit How many records to retrieve (default: 100, max 500). (optional)
     * @param  int|null $offset From which record to retrieve (default: 0). (optional)
     * @param  string|null $order_by_type Sorting type (ASC/DESC). (optional)
     * @param  string|null $order_by_name Name of the field to sort results by. (optional)
     * @param  string|null $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $type DNS record type. (optional)
     * @param  int|null $prio DNS record priority. (optional)
     * @param  int|null $ttl DNS record TTL. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function listZoneRecordsAsyncWithHttpInfo(
        $name,
        $zone_id = null,
        $limit = null,
        $offset = null,
        $order_by_type = null,
        $order_by_name = null,
        $record_name_pattern = null,
        $value_pattern = null,
        $type = null,
        $prio = null,
        $ttl = null,
        string $contentType = self::contentTypes['listZoneRecords'][0]
    ): PromiseInterface
    {
        $returnType = '\Layer7\Openprovider\Model\RecordListZoneRecordsResponse';
        $request = $this->listZoneRecordsRequest($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listZoneRecords'
     *
     * @param  string $name DNS record name (required)
     * @param  int|null $zone_id DNS zone ID. (optional)
     * @param  int|null $limit How many records to retrieve (default: 100, max 500). (optional)
     * @param  int|null $offset From which record to retrieve (default: 0). (optional)
     * @param  string|null $order_by_type Sorting type (ASC/DESC). (optional)
     * @param  string|null $order_by_name Name of the field to sort results by. (optional)
     * @param  string|null $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string|null $type DNS record type. (optional)
     * @param  int|null $prio DNS record priority. (optional)
     * @param  int|null $ttl DNS record TTL. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listZoneRecordsRequest(
        $name,
        $zone_id = null,
        $limit = null,
        $offset = null,
        $order_by_type = null,
        $order_by_name = null,
        $record_name_pattern = null,
        $value_pattern = null,
        $type = null,
        $prio = null,
        $ttl = null,
        string $contentType = self::contentTypes['listZoneRecords'][0]
    ): Request
    {

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling listZoneRecords'
            );
        }












        $resourcePath = '/v1beta/dns/zones/{name}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $zone_id,
            'zone_id', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_type,
            'order_by.type', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_name,
            'order_by.name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $record_name_pattern,
            'record_name_pattern', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value_pattern,
            'value_pattern', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $prio,
            'prio', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ttl,
            'ttl', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
