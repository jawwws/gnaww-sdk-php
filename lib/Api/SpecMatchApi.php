<?php
/**
 * SpecMatchApi
 *
 * @category Class
 * @package  Jawwws\Gnaww
 */

/**
 * Gnaww Developer API
 *
 * Reviewed public print-intelligence contract for direct HTTP, CLI, SDK and MCP consumers. Capability fit is not price, live availability, producer acceptance or an order.
 *
 * The version of the OpenAPI document: 0.1
 */

/**
 */

namespace Jawwws\Gnaww\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Jawwws\Gnaww\ApiException;
use Jawwws\Gnaww\Configuration;
use Jawwws\Gnaww\FormDataProcessor;
use Jawwws\Gnaww\HeaderSelector;
use Jawwws\Gnaww\ObjectSerializer;

/**
 * SpecMatchApi Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 */
class SpecMatchApi
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
        'matchPrintDemand' => [
            'application/json',
        ],
        'matchPrintDemandUniverse' => [
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
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
     * Operation matchPrintDemand
     *
     * Match Print Demand
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandRequest $match_print_demand_request match_print_demand_request (required)
     * @param  string|null $x_gnaww_workspace_id x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemand'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Jawwws\Gnaww\Model\MatchPrintDemandResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse
     */
    public function matchPrintDemand($match_print_demand_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemand'][0])
    {
        list($response) = $this->matchPrintDemandWithHttpInfo($match_print_demand_request, $x_gnaww_workspace_id, $contentType);
        return $response;
    }

    /**
     * Operation matchPrintDemandWithHttpInfo
     *
     * Match Print Demand
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandRequest $match_print_demand_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemand'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Jawwws\Gnaww\Model\MatchPrintDemandResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function matchPrintDemandWithHttpInfo($match_print_demand_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemand'][0])
    {
        $request = $this->matchPrintDemandRequest($match_print_demand_request, $x_gnaww_workspace_id, $contentType);

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
                    return $this->handleResponseWithDataType(
                        '\Jawwws\Gnaww\Model\MatchPrintDemandResponse',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse',
                        $request,
                        $response,
                    );
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

            return $this->handleResponseWithDataType(
                '\Jawwws\Gnaww\Model\MatchPrintDemandResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jawwws\Gnaww\Model\MatchPrintDemandResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }


            throw $e;
        }
    }

    /**
     * Operation matchPrintDemandAsync
     *
     * Match Print Demand
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandRequest $match_print_demand_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemand'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function matchPrintDemandAsync($match_print_demand_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemand'][0])
    {
        return $this->matchPrintDemandAsyncWithHttpInfo($match_print_demand_request, $x_gnaww_workspace_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation matchPrintDemandAsyncWithHttpInfo
     *
     * Match Print Demand
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandRequest $match_print_demand_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemand'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function matchPrintDemandAsyncWithHttpInfo($match_print_demand_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemand'][0])
    {
        $returnType = '\Jawwws\Gnaww\Model\MatchPrintDemandResponse';
        $request = $this->matchPrintDemandRequest($match_print_demand_request, $x_gnaww_workspace_id, $contentType);

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
     * Create request for operation 'matchPrintDemand'
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandRequest $match_print_demand_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemand'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function matchPrintDemandRequest($match_print_demand_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemand'][0])
    {

        // verify the required parameter 'match_print_demand_request' is set
        if ($match_print_demand_request === null || (is_array($match_print_demand_request) && count($match_print_demand_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $match_print_demand_request when calling matchPrintDemand'
            );
        }



        $resourcePath = '/v1/matches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_gnaww_workspace_id !== null) {
            $headerParams['X-Gnaww-Workspace-Id'] = ObjectSerializer::toHeaderValue($x_gnaww_workspace_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($match_print_demand_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($match_print_demand_request));
            } else {
                $httpBody = $match_print_demand_request;
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Gnaww-API-Key');
        if ($apiKey !== null) {
            $headers['X-Gnaww-API-Key'] = $apiKey;
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
     * Operation matchPrintDemandUniverse
     *
     * Match Print Demand Universe
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandUniverseRequest $match_print_demand_universe_request match_print_demand_universe_request (required)
     * @param  string|null $x_gnaww_workspace_id x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemandUniverse'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse
     */
    public function matchPrintDemandUniverse($match_print_demand_universe_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemandUniverse'][0])
    {
        list($response) = $this->matchPrintDemandUniverseWithHttpInfo($match_print_demand_universe_request, $x_gnaww_workspace_id, $contentType);
        return $response;
    }

    /**
     * Operation matchPrintDemandUniverseWithHttpInfo
     *
     * Match Print Demand Universe
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandUniverseRequest $match_print_demand_universe_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemandUniverse'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function matchPrintDemandUniverseWithHttpInfo($match_print_demand_universe_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemandUniverse'][0])
    {
        $request = $this->matchPrintDemandUniverseRequest($match_print_demand_universe_request, $x_gnaww_workspace_id, $contentType);

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
                    return $this->handleResponseWithDataType(
                        '\Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse',
                        $request,
                        $response,
                    );
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

            return $this->handleResponseWithDataType(
                '\Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }


            throw $e;
        }
    }

    /**
     * Operation matchPrintDemandUniverseAsync
     *
     * Match Print Demand Universe
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandUniverseRequest $match_print_demand_universe_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemandUniverse'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function matchPrintDemandUniverseAsync($match_print_demand_universe_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemandUniverse'][0])
    {
        return $this->matchPrintDemandUniverseAsyncWithHttpInfo($match_print_demand_universe_request, $x_gnaww_workspace_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation matchPrintDemandUniverseAsyncWithHttpInfo
     *
     * Match Print Demand Universe
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandUniverseRequest $match_print_demand_universe_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemandUniverse'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function matchPrintDemandUniverseAsyncWithHttpInfo($match_print_demand_universe_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemandUniverse'][0])
    {
        $returnType = '\Jawwws\Gnaww\Model\MatchPrintDemandUniverseResponse';
        $request = $this->matchPrintDemandUniverseRequest($match_print_demand_universe_request, $x_gnaww_workspace_id, $contentType);

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
     * Create request for operation 'matchPrintDemandUniverse'
     *
     * @param  \Jawwws\Gnaww\Model\MatchPrintDemandUniverseRequest $match_print_demand_universe_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['matchPrintDemandUniverse'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function matchPrintDemandUniverseRequest($match_print_demand_universe_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['matchPrintDemandUniverse'][0])
    {

        // verify the required parameter 'match_print_demand_universe_request' is set
        if ($match_print_demand_universe_request === null || (is_array($match_print_demand_universe_request) && count($match_print_demand_universe_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $match_print_demand_universe_request when calling matchPrintDemandUniverse'
            );
        }



        $resourcePath = '/v1/matches/universe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_gnaww_workspace_id !== null) {
            $headerParams['X-Gnaww-Workspace-Id'] = ObjectSerializer::toHeaderValue($x_gnaww_workspace_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($match_print_demand_universe_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($match_print_demand_universe_request));
            } else {
                $httpBody = $match_print_demand_universe_request;
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Gnaww-API-Key');
        if ($apiKey !== null) {
            $headers['X-Gnaww-API-Key'] = $apiKey;
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

        if ($this->config->getCertFile()) {
            $options[RequestOptions::CERT] = $this->config->getCertFile();
        }

        if ($this->config->getKeyFile()) {
            $options[RequestOptions::SSL_KEY] = $this->config->getKeyFile();
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
