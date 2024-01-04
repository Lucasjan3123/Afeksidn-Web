<?php

namespace Database\Seeders;

use App\Models\Conseling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $conselingData = [
            [
                'namaConseling' => 'Profresional Counseling',
            ],
            [
                'namaConseling' => 'Peers Counseling',
            ],
           
        ];
    
        foreach ($conselingData as $data) {
            Conseling::create($data);
        }
    }
}
