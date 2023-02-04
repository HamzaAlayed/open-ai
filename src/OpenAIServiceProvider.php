<?php

namespace Developh\OpenAI;

use Illuminate\Support\ServiceProvider;

class OpenAIServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        $configPath = __DIR__ . '/../config/open-ai.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('open-ai.php');
        } else {
            $publishPath = base_path('config/open-ai.php');
        }
    }

}
