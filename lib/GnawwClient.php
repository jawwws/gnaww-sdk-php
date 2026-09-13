<?php

declare(strict_types=1);

namespace Jawwws\Gnaww;

use GuzzleHttp\Client;
use Jawwws\Gnaww\Api\InterpretationApi;
use Jawwws\Gnaww\Api\RecipesApi;
use Jawwws\Gnaww\ApiException;
use Jawwws\Gnaww\Configuration;
use Jawwws\Gnaww\Model\ContinueInterpretationRequestV02;
use Jawwws\Gnaww\Model\InterpretPrintRequirementRequest;
use Jawwws\Gnaww\Model\MatchRecipeRequest;
use Jawwws\Gnaww\Model\PublicInterpretationContinuationAnswer;
use Jawwws\Gnaww\Model\PublicMatchTargetRequest;
use Jawwws\Gnaww\Model\ResolveRecipeRequest;
use Jawwws\Gnaww\Model\SourceInput;

final class GnawwApiError extends \RuntimeException
{
    public function __construct(
        public readonly string $errorCode,
        string $message,
        public readonly int $status,
        public readonly ?string $requestId,
        public readonly ?string $correlationId,
        public readonly bool $retryable,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $status, $previous);
    }
}

final class GnawwResponse
{
    /**
     * @param mixed $data
     */
    public function __construct(
        public readonly mixed $data,
        public readonly int $status,
        public readonly ?string $requestId,
        public readonly ?string $correlationId,
    ) {
    }
}

final class GnawwClient
{
    private InterpretationApi $interpretation;
    private RecipesApi $recipes;

    public function __construct(
        string $apiKey,
        string $baseUrl = 'https://api.gnaww.io',
        ?string $workspaceId = null,
    ) {
        $config = (new Configuration())
            ->setHost(rtrim($baseUrl, '/'))
            ->setApiKey('GnawwApiKey', $apiKey);

        $headers = [
            'X-Gnaww-Source-Channel' => 'sdk',
            'X-Gnaww-Client-Id' => 'gnaww-php-sdk',
        ];
        if ($workspaceId !== null && $workspaceId !== '') {
            $headers['X-Gnaww-Workspace-Id'] = $workspaceId;
        }

        $http = new Client(['headers' => $headers]);
        $this->interpretation = new InterpretationApi($http, $config);
        $this->recipes = new RecipesApi($http, $config);
    }

    public function consume(string $requirement): mixed
    {
        return $this->consumeDetailed($requirement)->data;
    }

    public function consumeDetailed(string $requirement): GnawwResponse
    {
        $source = new SourceInput([
            'type' => 'natural_language',
            'raw_text' => $requirement,
        ]);
        $request = new InterpretPrintRequirementRequest([
            'source' => $source,
            'gjs_version' => '0.4',
        ]);

        return $this->call(
            fn (): array => $this->interpretation
                ->interpretPrintRequirementWithHttpInfo($request),
        );
    }

    /**
     * @param list<array{question_id: string, value: string}> $answers
     */
    public function continueRequirement(string $requirement, array $answers): mixed
    {
        return $this->continueRequirementDetailed($requirement, $answers)->data;
    }

    /**
     * @param list<array{question_id: string, value: string}> $answers
     */
    public function continueRequirementDetailed(
        string $requirement,
        array $answers,
    ): GnawwResponse {
        $source = new SourceInput([
            'type' => 'natural_language',
            'raw_text' => $requirement,
        ]);
        $clarifications = array_map(
            static fn (array $answer): PublicInterpretationContinuationAnswer =>
                new PublicInterpretationContinuationAnswer($answer),
            $answers,
        );
        $request = new ContinueInterpretationRequestV02([
            'source' => $source,
            'gjs_version' => '0.4',
            'answers' => $clarifications,
        ]);

        return $this->call(
            fn (): array => $this->interpretation
                ->continuePrintRequirementInterpretationWithHttpInfo($request),
        );
    }

    public function getRecipe(string $recipeId): mixed
    {
        return $this->getRecipeDetailed($recipeId)->data;
    }

    public function getRecipeDetailed(string $recipeId): GnawwResponse
    {
        return $this->call(
            fn (): array => $this->recipes->getRecipeWithHttpInfo($recipeId),
        );
    }

    /**
     * @param array<string, mixed> $gjs
     */
    public function resolveRecipe(array $gjs): mixed
    {
        return $this->resolveRecipeDetailed($gjs)->data;
    }

    /**
     * @param array<string, mixed> $gjs
     */
    public function resolveRecipeDetailed(array $gjs): GnawwResponse
    {
        $request = new ResolveRecipeRequest(['gjs' => $gjs]);

        return $this->call(
            fn (): array => $this->recipes->resolveRecipeWithHttpInfo($request),
        );
    }

    /**
     * @param array{source: string, producer_profile_id: string} $target
     */
    public function crunch(
        string $recipeId,
        int $quantity,
        array $target,
    ): mixed {
        return $this->crunchDetailed(
            $recipeId,
            $quantity,
            $target,
        )->data;
    }

    /**
     * @param array{source: string, producer_profile_id: string} $target
     */
    public function crunchDetailed(
        string $recipeId,
        int $quantity,
        array $target,
    ): GnawwResponse {
        $request = new MatchRecipeRequest([
            'quantity' => $quantity,
            'target' => new PublicMatchTargetRequest($target),
        ]);

        return $this->call(
            fn (): array => $this->recipes->matchRecipeWithHttpInfo(
                $recipeId,
                $request,
            ),
        );
    }

    /**
     * @param callable(): array{0: mixed, 1: int, 2: array<string, mixed>} $call
     */
    private function call(callable $call): GnawwResponse
    {
        try {
            [$data, $status, $headers] = $call();
        } catch (ApiException $exception) {
            throw $this->publicError($exception);
        }

        return new GnawwResponse(
            $data,
            $status,
            $this->header($headers, 'X-Request-Id'),
            $this->header($headers, 'X-Correlation-Id'),
        );
    }

    private function publicError(ApiException $exception): GnawwApiError
    {
        $decoded = null;
        $body = $exception->getResponseBody();
        if (is_string($body) && $body !== '') {
            $candidate = json_decode($body, true);
            if (is_array($candidate)) {
                $decoded = $candidate;
            }
        }

        $headers = $exception->getResponseHeaders() ?? [];
        $error = is_array($decoded['error'] ?? null)
            ? $decoded['error']
            : [];

        return new GnawwApiError(
            is_string($error['code'] ?? null)
                ? $error['code']
                : 'api_error',
            is_string($error['message'] ?? null)
                ? $error['message']
                : 'Gnaww rejected the developer API request.',
            is_int($error['status'] ?? null)
                ? $error['status']
                : $exception->getCode(),
            is_string($error['request_id'] ?? null)
                ? $error['request_id']
                : $this->header($headers, 'X-Request-Id'),
            is_string($error['correlation_id'] ?? null)
                ? $error['correlation_id']
                : $this->header($headers, 'X-Correlation-Id'),
            is_bool($error['retryable'] ?? null)
                ? $error['retryable']
                : false,
            $exception,
        );
    }

    /**
     * @param array<string, mixed> $headers
     */
    private function header(array $headers, string $name): ?string
    {
        foreach ($headers as $key => $value) {
            if (strcasecmp((string) $key, $name) !== 0) {
                continue;
            }

            if (is_string($value)) {
                return $value;
            }

            if (is_array($value) && isset($value[0]) && is_string($value[0])) {
                return $value[0];
            }
        }

        return null;
    }
}
