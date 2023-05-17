<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Account extends Facade
{
    //необходим для того чтобы не создавать обьект класса в контоллере
    public static function create($validated)
    {
    }

    protected static function getFacadeAccessor()
    {
        return 'account_service';
    }


}
