<?php

namespace Wavey\LaravelGravatar\Facades;

use Illuminate\Support\Facades\Facade;

class Gravatar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor() { return 'gravatar'; }
}
