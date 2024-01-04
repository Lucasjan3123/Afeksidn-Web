<?php

namespace Database\Seeders;

use App\Models\profresional_conseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionalKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Relationship Konseling', 'Quality Gender'];
        foreach ($data as $value) {
            profresional_conseling::create([
                'jenis_layanan' => 'KONSELING',
                'namaPengalaman' => $value
            ]);
        }
    }
}
