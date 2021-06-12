<?php

namespace Mawuekom\FormRequest;

use Illuminate\Routing\Redirector;
use Illuminate\Support\ServiceProvider;
use Mawuekom\FormRequest\Http\FormRequest;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

/**
 * Class FormRequestServiceProvider
 * 
 * @package Mawuekom\FormRequest
 */
class FormRequestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot()
    {
        $this->app->afterResolving(ValidatesWhenResolved::class, function ($resolved) {
            $resolved->validateResolved();
        });

        $this->app->resolving(FormRequest::class, function ($request, $app) {
            $request = FormRequest::createFrom($app['request'], $request);

            $request->setContainer($app)->setRedirector($app->make(Redirector::class));
        });
    }

    /**
     * Register the application services.
     * 
     * @return void
     */
    public function register()
    {
        
    }
}
