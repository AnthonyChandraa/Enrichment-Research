<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\University;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            UserDetailSeeder::class,
            UniversitySeeder::class,
            FacultySeeder::class,
            DepartmentSeeder::class,
            StudentSeeder::class,
            LecturerSeeder::class,
            UserLinkTypeSeeder::class
        ]);
    }
}
