<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Administrator',
                'access_level' => 1,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Lecturer',
                'access_level' => 2,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Student',
                'access_level' => 3,
                'created_at' => now()
            ],
        ]);
    }
}
