<?php

namespace Database\Seeders;

use App\Models\categoryEbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoryEbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categoryEbook = [
            [
                'nama_kategori_ebook' => 'Self-Care and Wellness',
            ],
            [
                'nama_kategori_ebook' => 'Relationship Building',
            ],
           
        ];
    
        foreach ($categoryEbook as $data) {
            categoryEbook::create($data);
        }
    }
}
