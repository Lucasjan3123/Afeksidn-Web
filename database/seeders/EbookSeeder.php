<?php

namespace Database\Seeders;

use App\Models\Ebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $ebook = [
            [
                'judul' => 'Membangun Hubungan yang Sehat: Panduan Praktis untuk Pasangan',
                "penulis"=>"Dr. Amanda Rodriguez",
                "tahun_terbit"=> 2022,
                "kategori_ebook_id"=> 2,
                "deskripsi" => "Text deskripsi",
                "harga" => "20.000",
                "format-file"=> "ebook.pdf",
                "cover_ebook" => "gambarEbook.png"

            ],
            [
                'judul' => 'Pentingnya Perawatan Diri dalam Hubungan: Kesehatan Mental dan Emosional',
                "penulis"=>"Dr. Sarah Wijaya",
                "tahun_terbit"=> 2019,
                "kategori_ebook_id"=> 1,
                "deskripsi" => "Text deskripsi 1",
                "harga" => "25.000",
                "format-file"=> "ebook1.pdf",
                "cover_ebook" => "gambarEbook1.png"

            ],
           
        ];
    
        foreach ($ebook as $data) {
            Ebook::create($data);
        }
    }
}
