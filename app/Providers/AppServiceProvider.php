<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\{ Permission,  Profile, User};
use App\Observers\{PermissionObserver, ProfileObserver, UserObserver};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Permission::observe(PermissionObserver::class);
        Profile::observe(ProfileObserver::class);
        User::observe(UserObserver::class);

        /**
         * Use Bootstrap5 pagination style
         */
        Paginator::useBootstrapFive();
    }
}
