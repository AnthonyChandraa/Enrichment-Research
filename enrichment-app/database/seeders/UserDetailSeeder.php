<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
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

        UserDetail::query()->insert([
           [
               'user_id' => $student1_id,
               'first_name' => 'Dummy',
               'last_name' => 'Student 1',
               'date_of_birth' => '2000-01-01',
               'bio' => 'This is a dummy student user created for development purposes.',
               'created_at' => now()
           ],
            [
                'user_id' => $lecturer1_id,
                'first_name' => 'Dummy',
                'last_name' => 'Lecturer 1',
                'date_of_birth' => '2000-01-01',
                'bio' => 'This is a dummy lecturer user created for development purposes.',
                'created_at' => now()
            ],
            [
                'user_id' => $admin1_id,
                'first_name' => 'Dummy',
                'last_name' => 'Admin 1',
                'date_of_birth' => '2000-01-01',
                'bio' => 'This is a dummy admin user created for development purposes.',
                'created_at' => now()
            ],
            [
                'user_id' => $allrole1_id,
                'first_name' => 'Dummy',
                'last_name' => 'Multi-Role 1',
                'date_of_birth' => '2000-01-01',
                'bio' => 'This is a dummy multi-role user created for development purposes.',
                'created_at' => now()
            ],
        ]);
    }
}
