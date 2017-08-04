<?php

namespace Vijityannapon\ApiResponse;

use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerApiResponse();
        $this->registerFacade();
    }

    /**
     * Register logs.
     *
     * @return void
     */
    protected function registerApiResponse()
    {
        $this->app->singleton('api-response', function($app)
        {

            
        });
    }
    /**
     * Register facade.
     *
     * @return void
     */
    protected function registerFacade()
    {
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('ApiResponse', 'Vijityannapon\ApiResponse\Facades\ApiResponse');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('api-response');
    }

}