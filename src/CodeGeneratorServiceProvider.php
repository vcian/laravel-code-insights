<?php

namespace Vcian\LaravelCodeInsights;

use Illuminate\Support\ServiceProvider;

/**
 * Class CodeGeneratorServiceProvider
 *
 * @package LaravelDoc
 */
class CodeGeneratorServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/Helpers/Helper.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-code-insights');

        //Publish
        $this->publishes([__DIR__ . '/../resources/assets' => public_path(config('code-insights.public.folder').'/assets')], 'public');
        $this->publishes([
            __DIR__.'/../config/code-insights.php' => config_path('code-insights.php'),
        ], 'code-insights-config');
    }
}
