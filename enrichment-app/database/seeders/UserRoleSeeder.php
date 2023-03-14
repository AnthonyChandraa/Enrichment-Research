<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student1_id = User::query()->where('email', '=', 'student1@email.com')->first()->id;
        $lecturer1_id = User::query()->where('email', '=', 'lecturer1@email.com')->first()->id;
        $admin1_id = User::query()->where('email', '=', 'admin1@email.com')->first()->id;
        $allrole1_id = User::query()->where('email', '=', 'allrole1@email.com')->first()->id;
        $external1_id = User::query()->where('email', '=', 'external1@email.com')->first()->id;

        $administrator_role_id = Role::query()->where('name', '=', 'Administrator')->first()->id;
        $lecturer_role_id = Role::query()->where('name', '=', 'Lecturer')->first()->id;
        $student_role_id =  Role::query()->where('name', '=', 'Student')->first()->id;
        $external_administrator_role_id = Role::query()->where('name', '=', 'External Administrator')->first()->id;

        UserRole::query()->insert([
           [
               'user_id' => $student1_id,
               'role_id' => $student_role_id,
               'created_at' => now()
           ],
            [
                'user_id' => $lecturer1_id,
                'role_id' => $lecturer_role_id,
                'created_at' => now()
            ],
            [
                'user_id' => $admin1_id,
                'role_id' => $administrator_role_id,
                'created_at' => now()
            ],
            [
                'user_id' => $allrole1_id,
                'role_id' => $student_role_id,
                'created_at' => now()
            ],
            [
                'user_id' => $allrole1_id,
                'role_id' => $lecturer_role_id,
                'created_at' => now()
            ],
            [
                'user_id' => $allrole1_id,
                'role_id' => $administrator_role_id,
                'created_at' => now()
            ],
            [
                'user_id' => $external1_id,
                'role_id' => $external_administrator_role_id,
                'created_id' => now()
            ]
        ]);
    }
}
