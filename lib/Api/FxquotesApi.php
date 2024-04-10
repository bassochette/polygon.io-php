<?php
/**
 * FxquotesApi
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
 * FxquotesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FxquotesApi
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
        'quotesFx' => [
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
     * Operation quotesFx
     *
     * Quotes (BBO)
     *
     * @param  string $fx_ticker The ticker symbol to get quotes for. (required)
     * @param  string $timestamp Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. (optional)
     * @param  string $timestamp_gte Range by timestamp. (optional)
     * @param  string $timestamp_gt Range by timestamp. (optional)
     * @param  string $timestamp_lte Range by timestamp. (optional)
     * @param  string $timestamp_lt Range by timestamp. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional, default to 'desc')
     * @param  int $limit Limit the number of results returned, default is 10 and max is 50000. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'timestamp')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quotesFx'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\QuotesFx200Response
     */
    public function quotesFx($fx_ticker, $timestamp = null, $timestamp_gte = null, $timestamp_gt = null, $timestamp_lte = null, $timestamp_lt = null, $order = 'desc', $limit = 10, $sort = 'timestamp', string $contentType = self::contentTypes['quotesFx'][0])
    {
        list($response) = $this->quotesFxWithHttpInfo($fx_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort, $contentType);
        return $response;
    }

    /**
     * Operation quotesFxWithHttpInfo
     *
     * Quotes (BBO)
     *
     * @param  string $fx_ticker The ticker symbol to get quotes for. (required)
     * @param  string $timestamp Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. (optional)
     * @param  string $timestamp_gte Range by timestamp. (optional)
     * @param  string $timestamp_gt Range by timestamp. (optional)
     * @param  string $timestamp_lte Range by timestamp. (optional)
     * @param  string $timestamp_lt Range by timestamp. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional, default to 'desc')
     * @param  int $limit Limit the number of results returned, default is 10 and max is 50000. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'timestamp')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quotesFx'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\QuotesFx200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function quotesFxWithHttpInfo($fx_ticker, $timestamp = null, $timestamp_gte = null, $timestamp_gt = null, $timestamp_lte = null, $timestamp_lt = null, $order = 'desc', $limit = 10, $sort = 'timestamp', string $contentType = self::contentTypes['quotesFx'][0])
    {
        $request = $this->quotesFxRequest($fx_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort, $contentType);

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
                    if ('\OpenAPI\Client\Model\QuotesFx200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\QuotesFx200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\QuotesFx200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\QuotesFx200Response';
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
                        '\OpenAPI\Client\Model\QuotesFx200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation quotesFxAsync
     *
     * Quotes (BBO)
     *
     * @param  string $fx_ticker The ticker symbol to get quotes for. (required)
     * @param  string $timestamp Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. (optional)
     * @param  string $timestamp_gte Range by timestamp. (optional)
     * @param  string $timestamp_gt Range by timestamp. (optional)
     * @param  string $timestamp_lte Range by timestamp. (optional)
     * @param  string $timestamp_lt Range by timestamp. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional, default to 'desc')
     * @param  int $limit Limit the number of results returned, default is 10 and max is 50000. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'timestamp')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quotesFx'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quotesFxAsync($fx_ticker, $timestamp = null, $timestamp_gte = null, $timestamp_gt = null, $timestamp_lte = null, $timestamp_lt = null, $order = 'desc', $limit = 10, $sort = 'timestamp', string $contentType = self::contentTypes['quotesFx'][0])
    {
        return $this->quotesFxAsyncWithHttpInfo($fx_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation quotesFxAsyncWithHttpInfo
     *
     * Quotes (BBO)
     *
     * @param  string $fx_ticker The ticker symbol to get quotes for. (required)
     * @param  string $timestamp Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. (optional)
     * @param  string $timestamp_gte Range by timestamp. (optional)
     * @param  string $timestamp_gt Range by timestamp. (optional)
     * @param  string $timestamp_lte Range by timestamp. (optional)
     * @param  string $timestamp_lt Range by timestamp. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional, default to 'desc')
     * @param  int $limit Limit the number of results returned, default is 10 and max is 50000. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'timestamp')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quotesFx'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quotesFxAsyncWithHttpInfo($fx_ticker, $timestamp = null, $timestamp_gte = null, $timestamp_gt = null, $timestamp_lte = null, $timestamp_lt = null, $order = 'desc', $limit = 10, $sort = 'timestamp', string $contentType = self::contentTypes['quotesFx'][0])
    {
        $returnType = '\OpenAPI\Client\Model\QuotesFx200Response';
        $request = $this->quotesFxRequest($fx_ticker, $timestamp, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt, $order, $limit, $sort, $contentType);

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
     * Create request for operation 'quotesFx'
     *
     * @param  string $fx_ticker The ticker symbol to get quotes for. (required)
     * @param  string $timestamp Query by timestamp. Either a date with the format YYYY-MM-DD or a nanosecond timestamp. (optional)
     * @param  string $timestamp_gte Range by timestamp. (optional)
     * @param  string $timestamp_gt Range by timestamp. (optional)
     * @param  string $timestamp_lte Range by timestamp. (optional)
     * @param  string $timestamp_lt Range by timestamp. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional, default to 'desc')
     * @param  int $limit Limit the number of results returned, default is 10 and max is 50000. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'timestamp')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quotesFx'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function quotesFxRequest($fx_ticker, $timestamp = null, $timestamp_gte = null, $timestamp_gt = null, $timestamp_lte = null, $timestamp_lt = null, $order = 'desc', $limit = 10, $sort = 'timestamp', string $contentType = self::contentTypes['quotesFx'][0])
    {

        // verify the required parameter 'fx_ticker' is set
        if ($fx_ticker === null || (is_array($fx_ticker) && count($fx_ticker) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fx_ticker when calling quotesFx'
            );
        }







        if ($limit !== null && $limit > 50000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FxquotesApi.quotesFx, must be smaller than or equal to 50000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FxquotesApi.quotesFx, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/v3/quotes/{fxTicker}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_gte,
            'timestamp.gte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_gt,
            'timestamp.gt', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_lte,
            'timestamp.lte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_lt,
            'timestamp.lt', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($fx_ticker !== null) {
            $resourcePath = str_replace(
                '{' . 'fxTicker' . '}',
                ObjectSerializer::toPathValue($fx_ticker),
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
