<?php
/**
 * TransformApi
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
 * TransformApi Class Doc Comment
 *
 * @category Class
 * @package  Jawwws\Gnaww
 */
class TransformApi
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
        'transformPrintRequirement' => [
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
     * Operation transformPrintRequirement
     *
     * Transform
     *
     * @param  \Jawwws\Gnaww\Model\TransformRequest $transform_request transform_request (required)
     * @param  string|null $x_gnaww_workspace_id x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['transformPrintRequirement'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Jawwws\Gnaww\Model\TransformResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse
     */
    public function transformPrintRequirement($transform_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['transformPrintRequirement'][0])
    {
        list($response) = $this->transformPrintRequirementWithHttpInfo($transform_request, $x_gnaww_workspace_id, $contentType);
        return $response;
    }

    /**
     * Operation transformPrintRequirementWithHttpInfo
     *
     * Transform
     *
     * @param  \Jawwws\Gnaww\Model\TransformRequest $transform_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['transformPrintRequirement'] to see the possible values for this operation
     *
     * @throws \Jawwws\Gnaww\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Jawwws\Gnaww\Model\TransformResponse|\Jawwws\Gnaww\Model\MatchPrintDemandDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function transformPrintRequirementWithHttpInfo($transform_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['transformPrintRequirement'][0])
    {
        $request = $this->transformPrintRequirementRequest($transform_request, $x_gnaww_workspace_id, $contentType);

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
                        '\Jawwws\Gnaww\Model\TransformResponse',
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
                '\Jawwws\Gnaww\Model\TransformResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jawwws\Gnaww\Model\TransformResponse',
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
     * Operation transformPrintRequirementAsync
     *
     * Transform
     *
     * @param  \Jawwws\Gnaww\Model\TransformRequest $transform_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['transformPrintRequirement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function transformPrintRequirementAsync($transform_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['transformPrintRequirement'][0])
    {
        return $this->transformPrintRequirementAsyncWithHttpInfo($transform_request, $x_gnaww_workspace_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation transformPrintRequirementAsyncWithHttpInfo
     *
     * Transform
     *
     * @param  \Jawwws\Gnaww\Model\TransformRequest $transform_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['transformPrintRequirement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function transformPrintRequirementAsyncWithHttpInfo($transform_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['transformPrintRequirement'][0])
    {
        $returnType = '\Jawwws\Gnaww\Model\TransformResponse';
        $request = $this->transformPrintRequirementRequest($transform_request, $x_gnaww_workspace_id, $contentType);

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
     * Create request for operation 'transformPrintRequirement'
     *
     * @param  \Jawwws\Gnaww\Model\TransformRequest $transform_request (required)
     * @param  string|null $x_gnaww_workspace_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['transformPrintRequirement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function transformPrintRequirementRequest($transform_request, $x_gnaww_workspace_id = null, string $contentType = self::contentTypes['transformPrintRequirement'][0])
    {

        // verify the required parameter 'transform_request' is set
        if ($transform_request === null || (is_array($transform_request) && count($transform_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transform_request when calling transformPrintRequirement'
            );
        }



        $resourcePath = '/v1/transform';
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
        if (isset($transform_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($transform_request));
            } else {
                $httpBody = $transform_request;
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
