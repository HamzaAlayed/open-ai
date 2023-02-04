<?php

namespace Developh\OpenAI;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Client
{

    protected PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::baseUrl(config('services.open_ai.url'))
            ->withToken(config('services.open_ai.api'))
            ->withHeaders([
                'OpenAI-Organization' => config('services.open_ai.organization'),
            ])
            ->asJson()
            ->contentType('application/json');
    }
}
