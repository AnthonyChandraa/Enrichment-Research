<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\University;
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
        $BinaNusantaraUniversity_id = University::query()->where('name', '=', 'Bina Nusantara University')->first()->id;
        $ExternalUniversity_id = University::query()->where('name', '=', 'External University')->first()->id;

        Faculty::query()->insert([
            [
                'id' => Str::uuid(),
                'name' => 'Business',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Engineering',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Humanities',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Accounting',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Computer Science',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Design',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Information Systems',
                'university_id' => $BinaNusantaraUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Fakultas Bisnis',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Teknik',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Humaniora',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Akunting',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Informatika',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Desain',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Sistem Informasi',
                'university_id' => $ExternalUniversity_id,
                'created_at' => now()
            ],
        ]);
    }
}
