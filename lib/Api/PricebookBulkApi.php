<?php
/**
 * PricebookBulkApi
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pricebook
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: Jonathon Hill, CompWright Enterprises LLC (https://compwright.com)
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CompWright\ServiceTitan\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CompWright\ServiceTitan\ApiException;
use CompWright\ServiceTitan\Configuration;
use CompWright\ServiceTitan\HeaderSelector;
use CompWright\ServiceTitan\ObjectSerializer;

/**
 * PricebookBulkApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PricebookBulkApi
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
        $this->config = $config ?: new Configuration();
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
     * Operation pricebookBulkCreate
     *
     * PricebookBulk_Create
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest $pricebook_v2_pricebook_bulk_create_request pricebook_v2_pricebook_bulk_create_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CompWright\ServiceTitan\Model\ApiErrorResponse|\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse
     */
    public function pricebookBulkCreate($tenant, $pricebook_v2_pricebook_bulk_create_request = null)
    {
        list($response) = $this->pricebookBulkCreateWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_create_request);
        return $response;
    }

    /**
     * Operation pricebookBulkCreateWithHttpInfo
     *
     * PricebookBulk_Create
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest $pricebook_v2_pricebook_bulk_create_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CompWright\ServiceTitan\Model\ApiErrorResponse|\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pricebookBulkCreateWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_create_request = null)
    {
        $request = $this->pricebookBulkCreateRequest($tenant, $pricebook_v2_pricebook_bulk_create_request);

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

            switch($statusCode) {
                case 400:
                    if ('\CompWright\ServiceTitan\Model\ApiErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\ApiErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 201:
                    if ('\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\ApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation pricebookBulkCreateAsync
     *
     * PricebookBulk_Create
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest $pricebook_v2_pricebook_bulk_create_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricebookBulkCreateAsync($tenant, $pricebook_v2_pricebook_bulk_create_request = null)
    {
        return $this->pricebookBulkCreateAsyncWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_create_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pricebookBulkCreateAsyncWithHttpInfo
     *
     * PricebookBulk_Create
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest $pricebook_v2_pricebook_bulk_create_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricebookBulkCreateAsyncWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_create_request = null)
    {
        $returnType = '\CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse';
        $request = $this->pricebookBulkCreateRequest($tenant, $pricebook_v2_pricebook_bulk_create_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'pricebookBulkCreate'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest $pricebook_v2_pricebook_bulk_create_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function pricebookBulkCreateRequest($tenant, $pricebook_v2_pricebook_bulk_create_request = null)
    {
        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling pricebookBulkCreate'
            );
        }

        $resourcePath = '/tenant/{tenant}/pricebook';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tenant !== null) {
            $resourcePath = str_replace(
                '{' . 'tenant' . '}',
                ObjectSerializer::toPathValue($tenant),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($pricebook_v2_pricebook_bulk_create_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($pricebook_v2_pricebook_bulk_create_request));
            } else {
                $httpBody = $pricebook_v2_pricebook_bulk_create_request;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ST-App-Key');
        if ($apiKey !== null) {
            $headers['ST-App-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('servicetitanapplicationkey');
        if ($apiKey !== null) {
            $queryParams['servicetitanapplicationkey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation pricebookBulkUpdate
     *
     * PricebookBulk_Update
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest $pricebook_v2_pricebook_bulk_update_request pricebook_v2_pricebook_bulk_update_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function pricebookBulkUpdate($tenant, $pricebook_v2_pricebook_bulk_update_request = null)
    {
        $this->pricebookBulkUpdateWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_update_request);
    }

    /**
     * Operation pricebookBulkUpdateWithHttpInfo
     *
     * PricebookBulk_Update
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest $pricebook_v2_pricebook_bulk_update_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function pricebookBulkUpdateWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_update_request = null)
    {
        $request = $this->pricebookBulkUpdateRequest($tenant, $pricebook_v2_pricebook_bulk_update_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation pricebookBulkUpdateAsync
     *
     * PricebookBulk_Update
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest $pricebook_v2_pricebook_bulk_update_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricebookBulkUpdateAsync($tenant, $pricebook_v2_pricebook_bulk_update_request = null)
    {
        return $this->pricebookBulkUpdateAsyncWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_update_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pricebookBulkUpdateAsyncWithHttpInfo
     *
     * PricebookBulk_Update
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest $pricebook_v2_pricebook_bulk_update_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricebookBulkUpdateAsyncWithHttpInfo($tenant, $pricebook_v2_pricebook_bulk_update_request = null)
    {
        $returnType = '';
        $request = $this->pricebookBulkUpdateRequest($tenant, $pricebook_v2_pricebook_bulk_update_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'pricebookBulkUpdate'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest $pricebook_v2_pricebook_bulk_update_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function pricebookBulkUpdateRequest($tenant, $pricebook_v2_pricebook_bulk_update_request = null)
    {
        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling pricebookBulkUpdate'
            );
        }

        $resourcePath = '/tenant/{tenant}/pricebook';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tenant !== null) {
            $resourcePath = str_replace(
                '{' . 'tenant' . '}',
                ObjectSerializer::toPathValue($tenant),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($pricebook_v2_pricebook_bulk_update_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($pricebook_v2_pricebook_bulk_update_request));
            } else {
                $httpBody = $pricebook_v2_pricebook_bulk_update_request;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ST-App-Key');
        if ($apiKey !== null) {
            $headers['ST-App-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('servicetitanapplicationkey');
        if ($apiKey !== null) {
            $queryParams['servicetitanapplicationkey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
