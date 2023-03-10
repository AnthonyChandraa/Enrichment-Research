<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user){
            $id = $user->id;
            $adminId = Role::query()->where('access_level', '=', 1)->first()->id;
            $isAdmin = UserRole::query()
                ->where('user_id', '=', $id)
                ->where('role_id', '=', $adminId)
                ->first();
            if($isAdmin!=null) return true;
            return false;
        });

        Gate::define('isLecturer', function ($user){
            $id = $user->id;
            $lecturerId = Role::query()->where('access_level', '=', 2)->first()->id;
            $isLecturer = UserRole::query()
                ->where('user_id', '=', $id)
                ->where('role_id', '=', $lecturerId)
                ->first();
            if($isLecturer!=null) return true;
            return false;
        });

        Gate::define('isStudent', function ($user){
            $id = $user->id;
            $studentId = Role::query()->where('access_level', '=', 2)->first()->id;
            $isStudent = UserRole::query()
                ->where('user_id', '=', $id)
                ->where('role_id', '=', $studentId)
                ->first();
            if($isStudent!=null) return true;
            return false;
        });
    }
}
