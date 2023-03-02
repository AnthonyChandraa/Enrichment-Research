<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Faculties' ID
        $business_id = Faculty::query()->where('name', '=', 'Business')->first()->id;
        $engineering_id = Faculty::query()->where('name', '=', 'Engineering')->first()->id;
        $humanities_id = Faculty::query()->where('name', '=', 'Humanities')->first()->id;
        $accounting_id = Faculty::query()->where('name', '=', 'Accounting')->first()->id;
        $computer_science_id = Faculty::query()->where('name', '=', 'Computer Science')->first()->id;
        $design_id = Faculty::query()->where('name', '=', 'Design')->first()->id;
        $information_systems_id = Faculty::query()->where('name', '=', 'Information Systems')->first()->id;

        Department::query()->insert([
            [
                'id' => Str::uuid(),
                'faculty_id' => $business_id,
                'name' => 'Digital Business',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $business_id,
                'name' => 'Business Management',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $business_id,
                'name' => 'Business Creation',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $business_id,
                'name' => 'International Business Management',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Biotechnology',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Industrial Engineering',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Food Technology',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Computer Engineering',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Civil Engineering',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $engineering_id,
                'name' => 'Architecture',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $humanities_id,
                'name' => 'International Relations',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $humanities_id,
                'name' => 'Psychology',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $humanities_id,
                'name' => 'English Literature',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $humanities_id,
                'name' => 'Law',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $humanities_id,
                'name' => 'Primary Teacher Education',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $accounting_id,
                'name' => 'Accounting',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $accounting_id,
                'name' => 'Taxation',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $accounting_id,
                'name' => 'Finance',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $computer_science_id,
                'name' => 'Computer Science',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $computer_science_id,
                'name' => 'Data Science',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $computer_science_id,
                'name' => 'Cyber Security',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $computer_science_id,
                'name' => 'Mobile Application Technology',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $computer_science_id,
                'name' => 'Game Application Technology',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $design_id,
                'name' => 'Visual Communication Design',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $design_id,
                'name' => 'Interior Design',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $design_id,
                'name' => 'Film',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $information_systems_id,
                'name' => 'Information Systems',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $information_systems_id,
                'name' => 'Business Analytics',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'faculty_id' => $information_systems_id,
                'name' => 'Business Information Technology',
                'created_at' => now()
            ],
        ]);
    }
}
