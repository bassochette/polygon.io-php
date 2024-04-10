<?php
/**
 * ReferencetickersgetApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Polygon API
 *
 * The future of fintech.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ReferencetickersgetApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReferencetickersgetApi
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
        'getEvents' => [
            'application/json',
        ],
        'getTicker' => [
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
     * Operation getEvents
     *
     * Ticker Events
     *
     * @param  string $id Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) (required)
     * @param  string $types A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\GetEvents200Response
     */
    public function getEvents($id, $types = null, string $contentType = self::contentTypes['getEvents'][0])
    {
        list($response) = $this->getEventsWithHttpInfo($id, $types, $contentType);
        return $response;
    }

    /**
     * Operation getEventsWithHttpInfo
     *
     * Ticker Events
     *
     * @param  string $id Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) (required)
     * @param  string $types A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\GetEvents200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventsWithHttpInfo($id, $types = null, string $contentType = self::contentTypes['getEvents'][0])
    {
        $request = $this->getEventsRequest($id, $types, $contentType);

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
                    if ('\OpenAPI\Client\Model\GetEvents200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\GetEvents200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\GetEvents200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\GetEvents200Response';
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
                        '\OpenAPI\Client\Model\GetEvents200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventsAsync
     *
     * Ticker Events
     *
     * @param  string $id Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) (required)
     * @param  string $types A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventsAsync($id, $types = null, string $contentType = self::contentTypes['getEvents'][0])
    {
        return $this->getEventsAsyncWithHttpInfo($id, $types, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventsAsyncWithHttpInfo
     *
     * Ticker Events
     *
     * @param  string $id Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) (required)
     * @param  string $types A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventsAsyncWithHttpInfo($id, $types = null, string $contentType = self::contentTypes['getEvents'][0])
    {
        $returnType = '\OpenAPI\Client\Model\GetEvents200Response';
        $request = $this->getEventsRequest($id, $types, $contentType);

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
     * Create request for operation 'getEvents'
     *
     * @param  string $id Identifier of an asset. This can currently be a Ticker, CUSIP, or Composite FIGI. When given a ticker, we return events for the entity currently represented by that ticker. To find events for entities previously associated with a ticker, find the relevant identifier using the  [Ticker Details Endpoint](https://polygon.io/docs/stocks/get_v3_reference_tickers__ticker) (required)
     * @param  string $types A comma-separated list of the types of event to include. Currently ticker_change is the only supported event_type. Leave blank to return all supported event_types. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEventsRequest($id, $types = null, string $contentType = self::contentTypes['getEvents'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getEvents'
            );
        }



        $resourcePath = '/vX/reference/tickers/{id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
        $apiKey = $this->config->getApiKeyWithPrefix('apiKey');
        if ($apiKey !== null) {
            $queryParams['apiKey'] = $apiKey;
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
     * Operation getTicker
     *
     * Ticker Details v3
     *
     * @param  string $ticker The ticker symbol of the asset. (required)
     * @param  \DateTime $date Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTicker'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\GetTicker200Response
     */
    public function getTicker($ticker, $date = null, string $contentType = self::contentTypes['getTicker'][0])
    {
        list($response) = $this->getTickerWithHttpInfo($ticker, $date, $contentType);
        return $response;
    }

    /**
     * Operation getTickerWithHttpInfo
     *
     * Ticker Details v3
     *
     * @param  string $ticker The ticker symbol of the asset. (required)
     * @param  \DateTime $date Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTicker'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\GetTicker200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTickerWithHttpInfo($ticker, $date = null, string $contentType = self::contentTypes['getTicker'][0])
    {
        $request = $this->getTickerRequest($ticker, $date, $contentType);

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
                    if ('\OpenAPI\Client\Model\GetTicker200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\GetTicker200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\GetTicker200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\GetTicker200Response';
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
                        '\OpenAPI\Client\Model\GetTicker200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTickerAsync
     *
     * Ticker Details v3
     *
     * @param  string $ticker The ticker symbol of the asset. (required)
     * @param  \DateTime $date Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTicker'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickerAsync($ticker, $date = null, string $contentType = self::contentTypes['getTicker'][0])
    {
        return $this->getTickerAsyncWithHttpInfo($ticker, $date, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTickerAsyncWithHttpInfo
     *
     * Ticker Details v3
     *
     * @param  string $ticker The ticker symbol of the asset. (required)
     * @param  \DateTime $date Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTicker'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickerAsyncWithHttpInfo($ticker, $date = null, string $contentType = self::contentTypes['getTicker'][0])
    {
        $returnType = '\OpenAPI\Client\Model\GetTicker200Response';
        $request = $this->getTickerRequest($ticker, $date, $contentType);

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
     * Create request for operation 'getTicker'
     *
     * @param  string $ticker The ticker symbol of the asset. (required)
     * @param  \DateTime $date Specify a point in time to get information about the ticker available on that date. When retrieving information from SEC filings, we compare this date with the period of report date on the SEC filing.  For example, consider an SEC filing submitted by AAPL on 2019-07-31, with a period of report date ending on 2019-06-29. That means that the filing was submitted on 2019-07-31, but the filing was created based on information from 2019-06-29. If you were to query for AAPL details on 2019-06-29, the ticker details would include information from the SEC filing.  Defaults to the most recent available date. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTicker'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTickerRequest($ticker, $date = null, string $contentType = self::contentTypes['getTicker'][0])
    {

        // verify the required parameter 'ticker' is set
        if ($ticker === null || (is_array($ticker) && count($ticker) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ticker when calling getTicker'
            );
        }



        $resourcePath = '/v3/reference/tickers/{ticker}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date,
            'date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($ticker !== null) {
            $resourcePath = str_replace(
                '{' . 'ticker' . '}',
                ObjectSerializer::toPathValue($ticker),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/csv', ],
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
        $apiKey = $this->config->getApiKeyWithPrefix('apiKey');
        if ($apiKey !== null) {
            $queryParams['apiKey'] = $apiKey;
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
