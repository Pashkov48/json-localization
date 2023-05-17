<?php

namespace App\Providers;

use App\Services\Account\AccountService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('account_service', AccountService::class);
    }

    public function boot(): void
    {
        //
    }
}
