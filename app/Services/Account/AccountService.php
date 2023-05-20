<?php

namespace App\Services\Account;

use App\Exceptions\Account\InvalidCredentialsException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class AccountService
{
    public function create(array $data)
    {
        return User::query()->create([
            'name' => Arr::get($data, 'name'),
            'email' => Arr::get($data, 'email'),
            'account_type' => Arr::get($data, 'accountType'),
            'company_name' => Arr::get($data, 'companyName'),
            'password' => Hash::make(
                Arr::get($data, 'password.value')
            )
        ]);
    }

    public function signIn(string $email, string $password): string
    {
        $user = User::query()
            ->where('email', $email)
            ->first();

        if (!empty(($user))) {
            if (Auth::attempt((['email' => $email, 'password' => $password]))) {
                return $user->createToken('api-token')->plainTextToken;
            }
        }

        throw new InvalidCredentialsException();
    }
}
