<?php

namespace Developh\OpenAI\Exceptions;

use Exception;
use Throwable;

class OpenAIException extends Exception
{
    public function __construct(string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, 406, $previous);
    }
}
