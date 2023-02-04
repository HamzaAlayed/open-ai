<?php

namespace Developh\OpenAI;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Client
{

    protected PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::baseUrl(config('open-ai.url'))
            ->withToken(config('open-ai.api'))
            ->withHeaders([
                'OpenAI-Organization' => config('open-ai.organization'),
            ])
            ->asJson()
            ->contentType('application/json');
    }
}
