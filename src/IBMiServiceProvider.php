<?php

namespace GuidoFaecke\IBMi;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class IBMiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        // The toolkit manager is used to resolve various connections, since multiple
        // connections might be managed.
        $this->app->singleton('ts', function ($app) {
            return new ToolkitServiceManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['ts'];
    }
}
