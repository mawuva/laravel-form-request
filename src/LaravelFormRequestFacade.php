<?php

namespace Mawuekom\LaravelFormRequest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelFormRequest\Skeleton\SkeletonClass
 */
class LaravelFormRequestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-form-request';
    }
}
