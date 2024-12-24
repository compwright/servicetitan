<?php
/**
 * WebBookingAttributionsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing Ads
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
 * WebBookingAttributionsApi Class Doc Comment
 *
 * @category Class
 * @package  CompWright\ServiceTitan
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebBookingAttributionsApi
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
        'webBookingAttributionsCreate' => [
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
     * Operation webBookingAttributionsCreate
     *
     * Attributes a web booking to a web session.
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest $marketing_ads_v2_create_web_booking_attribution_request marketing_ads_v2_create_web_booking_attribution_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webBookingAttributionsCreate'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webBookingAttributionsCreate($tenant, $marketing_ads_v2_create_web_booking_attribution_request = null, string $contentType = self::contentTypes['webBookingAttributionsCreate'][0])
    {
        $this->webBookingAttributionsCreateWithHttpInfo($tenant, $marketing_ads_v2_create_web_booking_attribution_request, $contentType);
    }

    /**
     * Operation webBookingAttributionsCreateWithHttpInfo
     *
     * Attributes a web booking to a web session.
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest $marketing_ads_v2_create_web_booking_attribution_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webBookingAttributionsCreate'] to see the possible values for this operation
     *
     * @throws \CompWright\ServiceTitan\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webBookingAttributionsCreateWithHttpInfo($tenant, $marketing_ads_v2_create_web_booking_attribution_request = null, string $contentType = self::contentTypes['webBookingAttributionsCreate'][0])
    {
        $request = $this->webBookingAttributionsCreateRequest($tenant, $marketing_ads_v2_create_web_booking_attribution_request, $contentType);

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
     * Operation webBookingAttributionsCreateAsync
     *
     * Attributes a web booking to a web session.
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest $marketing_ads_v2_create_web_booking_attribution_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webBookingAttributionsCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webBookingAttributionsCreateAsync($tenant, $marketing_ads_v2_create_web_booking_attribution_request = null, string $contentType = self::contentTypes['webBookingAttributionsCreate'][0])
    {
        return $this->webBookingAttributionsCreateAsyncWithHttpInfo($tenant, $marketing_ads_v2_create_web_booking_attribution_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webBookingAttributionsCreateAsyncWithHttpInfo
     *
     * Attributes a web booking to a web session.
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest $marketing_ads_v2_create_web_booking_attribution_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webBookingAttributionsCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webBookingAttributionsCreateAsyncWithHttpInfo($tenant, $marketing_ads_v2_create_web_booking_attribution_request = null, string $contentType = self::contentTypes['webBookingAttributionsCreate'][0])
    {
        $returnType = '';
        $request = $this->webBookingAttributionsCreateRequest($tenant, $marketing_ads_v2_create_web_booking_attribution_request, $contentType);

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
     * Create request for operation 'webBookingAttributionsCreate'
     *
     * @param  int $tenant Tenant ID (required)
     * @param  \CompWright\ServiceTitan\Model\MarketingAdsV2CreateWebBookingAttributionRequest $marketing_ads_v2_create_web_booking_attribution_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webBookingAttributionsCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webBookingAttributionsCreateRequest($tenant, $marketing_ads_v2_create_web_booking_attribution_request = null, string $contentType = self::contentTypes['webBookingAttributionsCreate'][0])
    {

        // verify the required parameter 'tenant' is set
        if ($tenant === null || (is_array($tenant) && count($tenant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tenant when calling webBookingAttributionsCreate'
            );
        }



        $resourcePath = '/marketingads/v2/tenant/{tenant}/web-booking-attributions';
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


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($marketing_ads_v2_create_web_booking_attribution_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($marketing_ads_v2_create_web_booking_attribution_request));
            } else {
                $httpBody = $marketing_ads_v2_create_web_booking_attribution_request;
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
            'POST',
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
