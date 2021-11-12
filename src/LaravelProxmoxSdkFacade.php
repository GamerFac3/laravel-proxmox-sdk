<?php

namespace GamerFac3\LaravelProxmoxSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GamerFac3\LaravelProxmoxSdk\LaravelProxmoxSdk
 */
class LaravelProxmoxSdkFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-proxmox-sdk';
    }
}
