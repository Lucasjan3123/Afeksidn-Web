<?php

namespace Database\Seeders;

use App\Models\Ecourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ecourse = [
            [
                'nama_course' => 'Membangun Hubungan yang Sehat: Panduan Praktis untuk Pasangan',
                "instruktur"=>"Dr. Sarah Relationship",
                "deskripsi"=> "teks deksripsi 1",
                "durasi"=> "4 minggu",
                "level" => "pemula",
                "harga" => "100.000",
                "link_akses"=> "link akses ecourse",
                "cover_ecourse" => "gambarEcourse.png"

            ],
            [
                'nama_course' => 'Effective Communication in Relationships',
                "instruktur"=>"Prof. Alex Communication",
                "deskripsi"=> "teks deksripsi 2",
                "durasi"=> "6 minggu",
                "level" => "menegah",
                "harga" => "150.000",
                "link_akses"=> "link akses ecourse1",
                "cover_ecourse" => "gambarEcourse1.png"

            ],
           
        ];
    
        foreach ($ecourse as $data) {
            Ecourse::create($data);
        }
    }
}
