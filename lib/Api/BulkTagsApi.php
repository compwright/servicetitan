<?php
/**
 * BulkTagsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM
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
 * BulkTagsApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BulkTagsApi
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
     * Operation bulkTagsAddTags
     *
     * Add multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest $crm_v2_add_bulk_tags_request crm_v2_add_bulk_tags_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function bulkTagsAddTags($tenant, $crm_v2_add_bulk_tags_request = null)
    {
        $this->bulkTagsAddTagsWithHttpInfo($tenant, $crm_v2_add_bulk_tags_request);
    }

    /**
     * Operation bulkTagsAddTagsWithHttpInfo
     *
     * Add multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest $crm_v2_add_bulk_tags_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkTagsAddTagsWithHttpInfo($tenant, $crm_v2_add_bulk_tags_request = null)
    {
        $request = $this->bulkTagsAddTagsRequest($tenant, $crm_v2_add_bulk_tags_request);

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
                case 409:
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
     * Operation bulkTagsAddTagsAsync
     *
     * Add multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest $crm_v2_add_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkTagsAddTagsAsync($tenant, $crm_v2_add_bulk_tags_request = null)
    {
        return $this->bulkTagsAddTagsAsyncWithHttpInfo($tenant, $crm_v2_add_bulk_tags_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkTagsAddTagsAsyncWithHttpInfo
     *
     * Add multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest $crm_v2_add_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkTagsAddTagsAsyncWithHttpInfo($tenant, $crm_v2_add_bulk_tags_request = null)
    {
        $returnType = '';
        $request = $this->bulkTagsAddTagsRequest($tenant, $crm_v2_add_bulk_tags_request);

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
     * Create request for operation 'bulkTagsAddTags'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2AddBulkTagsRequest $crm_v2_add_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bulkTagsAddTagsRequest($tenant, $crm_v2_add_bulk_tags_request = null)
    {
        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling bulkTagsAddTags'
            );
        }

        $resourcePath = '/tenant/{tenant}/tags';
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
        if (isset($crm_v2_add_bulk_tags_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($crm_v2_add_bulk_tags_request));
            } else {
                $httpBody = $crm_v2_add_bulk_tags_request;
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bulkTagsRemoveTags
     *
     * Remove multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $crm_v2_remove_bulk_tags_request crm_v2_remove_bulk_tags_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function bulkTagsRemoveTags($tenant, $crm_v2_remove_bulk_tags_request = null)
    {
        $this->bulkTagsRemoveTagsWithHttpInfo($tenant, $crm_v2_remove_bulk_tags_request);
    }

    /**
     * Operation bulkTagsRemoveTagsWithHttpInfo
     *
     * Remove multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $crm_v2_remove_bulk_tags_request (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkTagsRemoveTagsWithHttpInfo($tenant, $crm_v2_remove_bulk_tags_request = null)
    {
        $request = $this->bulkTagsRemoveTagsRequest($tenant, $crm_v2_remove_bulk_tags_request);

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
                case 409:
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
     * Operation bulkTagsRemoveTagsAsync
     *
     * Remove multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $crm_v2_remove_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkTagsRemoveTagsAsync($tenant, $crm_v2_remove_bulk_tags_request = null)
    {
        return $this->bulkTagsRemoveTagsAsyncWithHttpInfo($tenant, $crm_v2_remove_bulk_tags_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkTagsRemoveTagsAsyncWithHttpInfo
     *
     * Remove multiple tags to more than 1 customer
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $crm_v2_remove_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkTagsRemoveTagsAsyncWithHttpInfo($tenant, $crm_v2_remove_bulk_tags_request = null)
    {
        $returnType = '';
        $request = $this->bulkTagsRemoveTagsRequest($tenant, $crm_v2_remove_bulk_tags_request);

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
     * Create request for operation 'bulkTagsRemoveTags'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\CrmV2RemoveBulkTagsRequest $crm_v2_remove_bulk_tags_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bulkTagsRemoveTagsRequest($tenant, $crm_v2_remove_bulk_tags_request = null)
    {
        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling bulkTagsRemoveTags'
            );
        }

        $resourcePath = '/tenant/{tenant}/tags';
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
        if (isset($crm_v2_remove_bulk_tags_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($crm_v2_remove_bulk_tags_request));
            } else {
                $httpBody = $crm_v2_remove_bulk_tags_request;
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
            'DELETE',
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
