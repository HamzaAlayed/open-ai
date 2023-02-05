<?php

namespace Developh\OpenAI\Components;

use Developh\OpenAI\Client;
use JsonException;

class Completion extends Client
{
    private string $model;

    public function __construct()
    {
        parent::__construct();
        $this->model(config('open-ai.model'));
    }

    public function model(string $model): Completion
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @param string $prompt
     * @param int $maxTokens
     * @return array|object
     * @throws JsonException
     */
    public function text(string $prompt, int $maxTokens = 100): array|object
    {
        return $this->client->withBody(
            json_encode([
                'model' => $this->model,
                'prompt' => $prompt,
                'max_tokens' => $maxTokens,
                "temperature" => 0,
                "top_p" => 1,
                "n" => 1,
                "stream" => false,
                "logprobs" => null,
                "stop" => ["{}"]


            ], JSON_THROW_ON_ERROR),
            'application/json'
        )
            ->post(
                '/completions'
            )
            ->object();
    }
}
