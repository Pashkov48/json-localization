<?php

namespace App\Providers;

use App\Http\Resources\Account\UserResource;
use App\Models\User;
use App\Services\Account\AccountService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('account_service', AccountService::class);
    }

    //убирает обертку data в ответе ресурса
    public function boot(): void
    {
        UserResource::withoutWrapping();
    }
}
