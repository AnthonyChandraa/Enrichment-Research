<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student1_id = User::query()->where('email', '=', 'student1@email.com')->first()->id;
        $allrole1_id = User::query()->where('email', '=', 'allrole1@email.com')->first()->id;

        $cyber_security_id = Department::query()->where('name', '=', 'Cyber Security')->first()->id;
        $interior_design_id = Department::query()->where('name', '=', 'Interior Design')->first()->id;

        Student::query()->insert([
            [
               'id' => Str::uuid(),
               'user_id' => $student1_id,
               'nim' => '2412345678',
               'department_id' => $cyber_security_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $allrole1_id,
                'nim' => '2487654321',
                'department_id' => $interior_design_id,
                'created_at' => now()
            ]
        ]);
    }
}
