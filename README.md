# OpenAI wrapper for Laravel

#### Environment variables

```dotenv
OPENAI_API_URL=https://api.openai.com/v1
```

Your secret API keys [OpenAI API Keys](https://platform.openai.com/account/api-keys)

```dotenv
OPENAI_API_KEY=SECRET_KEY
```

Your [Organization ID]( https://platform.openai.com/account/org-settings)

```dotenv
OPENAI_ORGANIZATION=ORGANIZATION-ID
```

#### Text basic completion

```php
OpenAI::textCompletion('Write this is a test');
```

#### Text advance completion

```php
OpenAI::model('text-davinci-003')
->temperature(0.25)
->topP(0)
->textCompletion('Write this is a test');
```
