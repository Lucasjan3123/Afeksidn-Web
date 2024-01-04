<?php

namespace Database\Seeders;

use App\Models\Konselor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KonselorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konselor::create([
            'user_id' => 1,
        ]);

    }
}