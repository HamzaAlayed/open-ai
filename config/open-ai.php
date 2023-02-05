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
    | content-filter-alpha, text-davinci-002, text-davinci-003, code-cushman-001,
    | text-curie-001, text-babbage-001, text-ada-001
    |
    */
    'model' => env('OPENAI_GPT_MODEL', 'text-davinci-003'),

    /*
    |--------------------------------------------------------------------------
    | Temperature
    |--------------------------------------------------------------------------
    |
    | Set GPT-3 temperature  https://platform.openai.com/docs/api-reference/completions/create#completions/create-temperature
    | minimum is 0 and maximum is 1
    |
    */
    'temperature' => env('OPENAI_GPT_TEMPERATURE', 0),

    /*
    |--------------------------------------------------------------------------
    | length
    |--------------------------------------------------------------------------
    |
    | Set GPT-3 temperature  https://platform.openai.com/docs/models/1-use-a-low-temperature-when-extracting-data
    | minimum is 100 and maximum is depended on selected model for example text-davinci-003 max length is 4000
    |
    */
    'length' => env('OPENAI_GPT_LENGTH', 100),

    /*
    |--------------------------------------------------------------------------
    | Top P
    |--------------------------------------------------------------------------
    |
    | Set GPT-3 temperature  https://platform.openai.com/docs/api-reference/completions/create#completions/create-top_p
    | minimum is 0 and maximum is 1
    |
    */
    'top_p' => env('OPENAI_GPT_TOP_P', 0),
];
