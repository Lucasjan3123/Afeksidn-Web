<?php

namespace Database\Seeders;

use App\Models\Volunteer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VolunteersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Volunteer::create([
            'user_id' => 1,
        ]);

    }
}