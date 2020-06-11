<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('users_CRUD', function ($user) {
            return $user->isAdmin;
        });

        Gate::define('see_messages', function ($user) {
            return $user->isAdmin;
        });
        Gate::define('write_messages', function ($user) {
            return $user->isUser;
        });

        Gate::define('users_CRUD', function ($user) {
            return $user->isAdmin
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
        Gate::define('see_messages', function ($user) {
            return $user->isAdmin
                ? Response::allow()
                : Response::deny('You must be an admin to see received messages.');
        });
        Gate::define('see_messages', function ($user) {
            return $user->isAdmin
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
    }

}
