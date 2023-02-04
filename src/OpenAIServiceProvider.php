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
        $this->publishes([$configPath => $publishPath], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('openai', function ($app) {
            return new Component();
        });
        $configPath = __DIR__ . '/../config/open-ai.php';
        $this->mergeConfigFrom($configPath, 'open-ai');
    }

}
