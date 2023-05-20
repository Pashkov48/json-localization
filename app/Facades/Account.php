<?php

namespace App\Facades;

use App\Services\Account\AccountService;
use Illuminate\Support\Facades\Facade;

class Account extends Facade
{

    /**
     * @method static \App\Models\User create(array $data)
     *@method static string signIn(string $email, string $password)
     *
     * @see AccountService
     */
    protected static function getFacadeAccessor(): string
    {
        return 'account_service';
    }


}
