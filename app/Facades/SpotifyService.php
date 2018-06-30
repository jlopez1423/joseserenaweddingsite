<?php

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class SpotifyService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Library\SpotifyService';
    }

}
