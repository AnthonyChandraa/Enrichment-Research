<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            [
                'id' => Str::uuid(),
                'email' => 'student1@email.com',
                'password' => 'student123',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'admin1@email.com',
                'password' => 'admin123',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'lecturer1@email.com',
                'password' => 'lecturer123',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'allrole1@email.com',
                'password' => 'allrole123',
                'created_at' => now()
            ]
        ]);
    }
}
