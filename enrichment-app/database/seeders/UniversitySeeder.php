<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        University::query()->insert([
           [
               'id' => Str::uuid(),
               'name' => 'Bina Nusantara University'
           ],
            [
               'id' => Str::uuid(),
               'name' => 'External University'
            ]
        ]);
    }
}
