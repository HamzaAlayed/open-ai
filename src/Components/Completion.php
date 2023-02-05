<?php

namespace Developh\OpenAI\Components;

use Developh\OpenAI\Client;
use JsonException;

class Completion extends Client
{
    private string $model;
    private float $temperature;
    private int $length;
    private float $topP;

    public function __construct()
    {
        parent::__construct();
        $this->model(config('open-ai.model'));
        $this->temperature(config('open-ai.temperature'));
    }

    public function model(string $model): Completion
    {
        $this->model = $model;
        return $this;
    }

    public function temperature(float $temperature): Completion
    {
        $this->temperature = $temperature;
        return $this;
    }

    public function length(int $length): Completion
    {
        $this->length = $length;
        return $this;
    }

    public function topP(float $topP): Completion
    {
        $this->topP = $topP;
        return $this;
    }

    /**
     * @param string $prompt
     * @return array|object
     * @throws JsonException
     */
    public function text(string $prompt): array|object
    {
        return $this->client->withBody(
            json_encode([
                'model' => $this->model,
                'prompt' => $prompt,
                'max_tokens' => $this->length,
                "temperature" => $this->temperature,
                "top_p" => $this->topP,
                "n" => 1,
                "stream" => false,
                "logprobs" => null,
                "stop" => [""]


            ], JSON_THROW_ON_ERROR),
            'application/json'
        )
            ->post(
                '/completions'
            )
            ->object();
    }
}
