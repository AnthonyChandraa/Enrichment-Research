<?php

namespace Database\Seeders;

use App\Models\UserLinkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserLinkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLinkType::query()->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Reset Password',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Email Verification',
                'created_at' => now()
            ]
        ]);
    }
}
