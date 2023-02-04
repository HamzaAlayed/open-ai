<?php

namespace Developh\OpenAI\Components;

use Developh\OpenAI\Client;
use JsonException;

class Completion extends Client
{

    /**
     * @param string $prompt
     * @param string $model
     * @param int $maxTokens
     * @return array|object
     * @throws JsonException
     */
    public function text(string $prompt, string $model = 'text-davinci-003', int $maxTokens = 100): array|object
    {
        return $this->client->withBody(
            json_encode([
                'model' => $model,
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
