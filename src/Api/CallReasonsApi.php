<?php
/**
 * CallReasonsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Job Booking
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
 * CallReasonsApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CallReasonsApi
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
     * Operation callReasonsGet
     *
     * Gets a list of call reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  OneOfActiveQueryFilter $active What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    public function callReasonsGet($tenant, $page = null, $page_size = null, $include_total = null, $active = null)
    {
        list($response) = $this->callReasonsGetWithHttpInfo($tenant, $page, $page_size, $include_total, $active);
        return $response;
    }

    /**
     * Operation callReasonsGetWithHttpInfo
     *
     * Gets a list of call reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  OneOfActiveQueryFilter $active What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] (optional)
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse|\CompWright\ServiceTitan\Model\ApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function callReasonsGetWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, $active = null)
    {
        $request = $this->callReasonsGetRequest($tenant, $page, $page_size, $include_total, $active);

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
                case 200:
                    if ('\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
            }

            $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse',
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
     * Operation callReasonsGetAsync
     *
     * Gets a list of call reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  OneOfActiveQueryFilter $active What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callReasonsGetAsync($tenant, $page = null, $page_size = null, $include_total = null, $active = null)
    {
        return $this->callReasonsGetAsyncWithHttpInfo($tenant, $page, $page_size, $include_total, $active)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation callReasonsGetAsyncWithHttpInfo
     *
     * Gets a list of call reasons
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  OneOfActiveQueryFilter $active What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callReasonsGetAsyncWithHttpInfo($tenant, $page = null, $page_size = null, $include_total = null, $active = null)
    {
        $returnType = '\CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CallReasonResponse';
        $request = $this->callReasonsGetRequest($tenant, $page, $page_size, $include_total, $active);

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
     * Create request for operation 'callReasonsGet'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  int $page Format - int32. The logical number of page to return, starting from 1 (optional)
     * @param  int $page_size Format - int32. How many records to return (50 by default) (optional)
     * @param  bool $include_total Whether total count should be returned (optional)
     * @param  OneOfActiveQueryFilter $active What kind of items should be returned (only active items will be returned by default)\\ Values: [True, Any, False] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function callReasonsGetRequest($tenant, $page = null, $page_size = null, $include_total = null, $active = null)
    {
        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling callReasonsGet'
            );
        }

        $resourcePath = '/jbce/v2/tenant/{tenant}/call-reasons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['pageSize'] = $page_size;
            }
        }
        // query params
        if ($include_total !== null) {
            if('form' === 'form' && is_array($include_total)) {
                foreach($include_total as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['includeTotal'] = $include_total;
            }
        }
        // query params
        if ($active !== null) {
            if('form' === 'form' && is_array($active)) {
                foreach($active as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['active'] = $active;
            }
        }


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
                []
            );
        }

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
            'GET',
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
