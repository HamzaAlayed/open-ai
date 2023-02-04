<?php
return [

    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    |
    | The default api base url
    |
    */

    'url' => env('OPENAI_API_URL', 'https://api.openai.com/v1'),

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | Your secret API keys https://platform.openai.com/account/api-keys
    |
    */

    'api' => env('OPENAI_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Organization
    |--------------------------------------------------------------------------
    |
    | Your Organization ID https://platform.openai.com/account/org-settings
    |
    */
    'organization' => env('OPENAI_ORGANIZATION'),
];
