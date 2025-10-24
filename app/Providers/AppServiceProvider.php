<?php

namespace App\Providers;

use App\Repositories\Implementations\Account\AdminRepository;
use App\Repositories\Implementations\Role\RoleRepository;
use App\Repositories\Contracts\Account\IAdminRepository;
use App\Repositories\Contracts\Role\IRoleRepository;
use App\Services\Implementations\Account\AdminService;
use App\Services\Implementations\Role\RoleService;
use App\Services\Contracts\Account\IAdminService;
use App\Services\Contracts\Role\IRoleService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repositories binding
        $this->app->bind(IAdminRepository::class, AdminRepository::class);
        $this->app->bind(IRoleRepository::class, RoleRepository::class);

        // Services binding
        $this->app->bind(IAdminService::class, AdminService::class);
        $this->app->bind(IRoleService::class, RoleService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
