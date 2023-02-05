<?php

namespace Developh\OpenAI;

use Developh\OpenAI\Components\Completion;
use JsonException;

class Component
{
    private Completion $completion;

    public function __construct()
    {
        $this->completion = new Completion();
    }

    public function model(string $model): Component
    {
        $this->completion->model($model);

        return $this;
    }

    /**
     * @throws JsonException
     */
    public function textCompletion(string $prompt, int $maxTokens = 100): object|array
    {
        return $this->completion->text($prompt, $maxTokens);
    }

}
