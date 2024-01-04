<?php

namespace Database\Seeders;

use App\Models\PaketProfesionalConseling;
use App\Models\profresional_conseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketLayananProfessionalKonselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            [
                'nama_paket' => 'Paket A (Relationship Konseling)',
                'professional_conseling_id' => 1,
                'harga' => '100000'
            ],
            [
                'nama_paket' => 'Paket B (Relationship Konseling)',
                'professional_conseling_id' => 1,
                'harga' => '125000'
            ],
            [
                'nama_paket' => 'Paket A (Quality Gender)',
                'professional_conseling_id' => 2,
                'harga' => '75000'
            ],
            [
                'nama_paket' => 'Paket B (Quality Gender)',
                'professional_conseling_id' => 2,
                'harga' => '150000'
            ],
        ];
        foreach ($paket as $data) {
            PaketProfesionalConseling::create($data);
        }
    }
}
