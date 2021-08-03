<?php

namespace Hanoivip\IapContract\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Need documents..
 * @author gameo
 *
 */
class IapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IapService';
    }
}
