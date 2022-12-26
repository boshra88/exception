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
        'App\Model' => 'App\Policies\ModelPolicy',
         User::class=>PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
     public function boot()
{
    $this->registerPolicies();
    $this->registerUserPolicies();
}

public function registerUserPolicies()
{
    Gate::define('add-user', function ($user) {
        return $user->hasAccess('add-user');
    });
    Gate::define('remove-user', function ($user) {
        return $user->hasAccess('remove-user') ;
    });
    Gate::define('edit-user', function ($user) {
        return $user->hasAccess('edit-user');
    });
      Gate::define('view-user', function ($user) {
        return $user->hasAccess('view-user');
    });
     
}    
       





}
