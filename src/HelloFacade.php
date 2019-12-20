<?php

namespace Kunaldodiya\Hello;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kunaldodiya\Hello\Skeleton\SkeletonClass
 */
class HelloFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hello';
    }
}
