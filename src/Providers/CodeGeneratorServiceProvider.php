<?php

namespace Vcian\LaravelCodeInsights\Providers;

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
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Helpers/Helper.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'laravel-doc');
        $this->publishes([
            __DIR__ . '/../Resources/assets' => public_path('laravel-doc/assets'),
        ], 'public');
    }
}

?>
