<?php
/**
 * JobCancelReasonsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Job Planning and Management
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
 * JobCancelReasonsApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobCancelReasonsApi
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
        'jobCancelReasonsGetList' => [
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
     * Operation jobCancelReasonsGetList
     *
     * Gets a list of job cancel reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $active What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['jobCancelReasonsGetList'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    public function jobCancelReasonsGetList($tenant, $page = null, $page_size = null, $include_total = null, $active = null, string $contentType = self::contentTypes['jobCancelReasonsGetList'][0])
    {
        list($response) = $this->jobCancelReasonsGetListWithHttpInfo($tenant, $page, $page_size, $include_total, $active, $contentType);
        return $response;
    }

    /**
     * Operation jobCancelReasonsGetListWithHttpInfo
     *
     * Gets a list of job cancel reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $active What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['jobCancelReasonsGetList'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function jobCancelReasonsGetListWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, $active = null, string $contentType = self::contentTypes['jobCancelReasonsGetList'][0])
    {
        $request = $this->jobCancelReasonsGetListRequest($tenant, $page, $page_size, $include_total, $active, $contentType);

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
                    if ('\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse', []),
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

            $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse';
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
                        '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse',
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
     * Operation jobCancelReasonsGetListAsync
     *
     * Gets a list of job cancel reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $active What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['jobCancelReasonsGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function jobCancelReasonsGetListAsync($tenant, $page = null, $page_size = null, $include_total = null, $active = null, string $contentType = self::contentTypes['jobCancelReasonsGetList'][0])
    {
        return $this->jobCancelReasonsGetListAsyncWithHttpInfo($tenant, $page, $page_size, $include_total, $active, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation jobCancelReasonsGetListAsyncWithHttpInfo
     *
     * Gets a list of job cancel reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $active What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['jobCancelReasonsGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function jobCancelReasonsGetListAsyncWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, $active = null, string $contentType = self::contentTypes['jobCancelReasonsGetList'][0])
    {
        $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse';
        $request = $this->jobCancelReasonsGetListRequest($tenant, $page, $page_size, $include_total, $active, $contentType);

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
     * Create request for operation 'jobCancelReasonsGetList'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  string $active What kind of items should be returned (active and inactive items will be returned by default)\\ Values: [True, Any, False] (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['jobCancelReasonsGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function jobCancelReasonsGetListRequest($tenant, $page = null, $page_size = null, $include_total = null, $active = null, string $contentType = self::contentTypes['jobCancelReasonsGetList'][0])
    {

        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling jobCancelReasonsGetList'
            );
        }






        $resourcePath = '/jpm/v2/tenant/{tenant}/job-cancel-reasons';
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'string', // openApiType
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
