<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
                'password' => Hash::make('student123'),
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'admin1@email.com',
                'password' => Hash::make('admin123'),
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'lecturer1@email.com',
                'password' => Hash::make('lecturer123'),
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'email' => 'allrole1@email.com',
                'password' => Hash::make('allrole123'),
                'created_at' => now()
            ]
        ]);
    }
}
