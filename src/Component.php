<?php

namespace Developh\OpenAI;

use Developh\OpenAI\Components\Completion;
use JsonException;

class Component
{

    /**
     * @throws JsonException
     */
    public function textCompletion(string $prompt, string $model = 'text-davinci-003', int $maxTokens = 100): object|array
    {
        return (new Completion())->text($prompt, $model, $maxTokens);
    }

}
