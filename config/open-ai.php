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

    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    |
    | GPT-3 default model https://platform.openai.com/docs/models/gpt-3
    | text-davinci-003, text-curie-001, :q!, text-ada-001
    |
    */
    'model' => env('OPENAI_GPT_MODEL', 'text-davinci-003'),
];
