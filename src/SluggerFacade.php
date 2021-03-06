<?php

namespace Echoamirali\Slugger;

use Illuminate\Support\Facades\Facade;


class SluggerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slugger';
    }
}
