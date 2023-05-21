<?php

namespace App\Facades;

use App\Services\Account\AccountService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Models\User create(array $data)
 *@method static string signIn(string $email, string $password)
 *
 * @see AccountService
 */
class Account extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'account_service';
    }


}
