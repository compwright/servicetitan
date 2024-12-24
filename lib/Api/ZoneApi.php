<?php
/**
 * ZoneApi
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dispatch
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CompWright\ServiceTitan\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CompWright\ServiceTitan\ApiException;
use CompWright\ServiceTitan\Configuration;
use CompWright\ServiceTitan\HeaderSelector;
use CompWright\ServiceTitan\ObjectSerializer;

/**
 * ZoneApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZoneApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'zoneGet' => [
            'application/json',
        ],
        'zoneGetList' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
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
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation zoneGet
     *
     * Gets a specific zone
     *
     * @param  int $id Format - int64. (required)
     * @param  int $tenant Tenant ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGet'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    public function zoneGet($id, $tenant, string $contentType = self::contentTypes['zoneGet'][0])
    {
        list($response) = $this->zoneGetWithHttpInfo($id, $tenant, $contentType);
        return $response;
    }

    /**
     * Operation zoneGetWithHttpInfo
     *
     * Gets a specific zone
     *
     * @param  int $id Format - int64. (required)
     * @param  int $tenant Tenant ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGet'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \CompWright\ServiceTitan\Model\DispatchV2ZoneResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function zoneGetWithHttpInfo($id, $tenant, string $contentType = self::contentTypes['zoneGet'][0])
    {
        $request = $this->zoneGetRequest($id, $tenant, $contentType);

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
                    if ('\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\ApiErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\ApiErrorResponse', []),
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

            $returnType = '\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse';
            if ($returnType === '\SplFileObject') {
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
                        '\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\ApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\ApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation zoneGetAsync
     *
     * Gets a specific zone
     *
     * @param  int $id Format - int64. (required)
     * @param  int $tenant Tenant ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function zoneGetAsync($id, $tenant, string $contentType = self::contentTypes['zoneGet'][0])
    {
        return $this->zoneGetAsyncWithHttpInfo($id, $tenant, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation zoneGetAsyncWithHttpInfo
     *
     * Gets a specific zone
     *
     * @param  int $id Format - int64. (required)
     * @param  int $tenant Tenant ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function zoneGetAsyncWithHttpInfo($id, $tenant, string $contentType = self::contentTypes['zoneGet'][0])
    {
        $returnType = '\CompWright\ServiceTitan\Model\DispatchV2ZoneResponse';
        $request = $this->zoneGetRequest($id, $tenant, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'zoneGet'
     *
     * @param  int $id Format - int64. (required)
     * @param  int $tenant Tenant ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function zoneGetRequest($id, $tenant, string $contentType = self::contentTypes['zoneGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling zoneGet'
            );
        }

        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling zoneGet'
            );
        }


        $resourcePath = '/dispatch/v2/tenant/{tenant}/zones/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($tenant !== null) {
            $resourcePath = str_replace(
                '{' . 'tenant' . '}',
                ObjectSerializer::toPathValue($tenant),
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ST-App-Key');
        if ($apiKey !== null) {
            $headers['ST-App-Key'] = $apiKey;
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
     * Operation zoneGetList
     *
     * Gets a list of zones
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGetList'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    public function zoneGetList($tenant, $page = null, $page_size = null, $include_total = null, string $contentType = self::contentTypes['zoneGetList'][0])
    {
        list($response) = $this->zoneGetListWithHttpInfo($tenant, $page, $page_size, $include_total, $contentType);
        return $response;
    }

    /**
     * Operation zoneGetListWithHttpInfo
     *
     * Gets a list of zones
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGetList'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function zoneGetListWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, string $contentType = self::contentTypes['zoneGetList'][0])
    {
        $request = $this->zoneGetListRequest($tenant, $page, $page_size, $include_total, $contentType);

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
                    if ('\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\ApiErrorResponse', []),
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

            $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse';
            if ($returnType === '\SplFileObject') {
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
                        '\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\ApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation zoneGetListAsync
     *
     * Gets a list of zones
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function zoneGetListAsync($tenant, $page = null, $page_size = null, $include_total = null, string $contentType = self::contentTypes['zoneGetList'][0])
    {
        return $this->zoneGetListAsyncWithHttpInfo($tenant, $page, $page_size, $include_total, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation zoneGetListAsyncWithHttpInfo
     *
     * Gets a list of zones
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function zoneGetListAsyncWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, string $contentType = self::contentTypes['zoneGetList'][0])
    {
        $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfDispatchV2ZoneResponse';
        $request = $this->zoneGetListRequest($tenant, $page, $page_size, $include_total, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
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
     * Create request for operation 'zoneGetList'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['zoneGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function zoneGetListRequest($tenant, $page = null, $page_size = null, $include_total = null, string $contentType = self::contentTypes['zoneGetList'][0])
    {

        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling zoneGetList'
            );
        }





        $resourcePath = '/dispatch/v2/tenant/{tenant}/zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_total,
            'includeTotal', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($tenant !== null) {
            $resourcePath = str_replace(
                '{' . 'tenant' . '}',
                ObjectSerializer::toPathValue($tenant),
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ST-App-Key');
        if ($apiKey !== null) {
            $headers['ST-App-Key'] = $apiKey;
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
    protected function createHttpClientOption()
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