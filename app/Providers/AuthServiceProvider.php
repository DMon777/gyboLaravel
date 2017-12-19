<?php

namespace App\Providers;

use App\Trainers;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-class',function(Trainers $user){

            foreach ($user->roles as $role) {
                if( $role->name == "Admin") return true;
            }
            return false;

        });

        Gate::define('delete-class',function (Trainers $user) {
            foreach ($user->roles as $role) {
                if( $role->name == "Admin") return true;
            }


            return false;
        });

        Gate::define('update-trainer',function (Trainers $user,$trainer_id) {

            foreach ($user->roles as $role) {
                if( $role->name == "Admin") return true;
            }
            if($user->id == $trainer_id) {
                return true;
            }
            return false;

        });

        Gate::define('delete-trainer',function (Trainers $user) {

            foreach ($user->roles as $role) {
                if( $role->name == "Admin") return true;
            }

            return false;

        });


        //
    }
}
