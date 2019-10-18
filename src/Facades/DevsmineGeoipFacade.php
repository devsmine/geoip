<?php
namespace Devsmine\Geoip\Facades;

use Illuminate\Support\Facades\Facade;
  
class DevsmineGeoipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geoip';
    }
}