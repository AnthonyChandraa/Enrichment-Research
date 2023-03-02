<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::query()->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Business',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Engineering',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Humanities',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Accounting',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Computer Science',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Design',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Information Systems',
                'created_at' => now()
            ],
        ]);
    }
}
