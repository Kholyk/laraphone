<?php

namespace Kholyk\Laraphone;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kholyk\Laraphone\Laraphone
 */
class LaraphoneFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraphone';
    }
}
