<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul_artikel' => 'Kenali gejala kanker',
                'slug' => 'kenali-gejala-kanker',
                'topik' => 'KESEHATAN',
                'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa quibusdam similique quasi ad, maxime cupiditate cumque veniam ullam repudiandae optio, molestiae quam doloremque deleniti adipisci. Praesentium, illo! Quasi, beatae.',
            ],
            [
                'judul_artikel' => 'Hubungan tanpa status',
                'slug' => 'hubungan-tanpa-status',
                'topik' => 'RELATIONSHIP',
                'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa quibusdam similique quasi ad, maxime cupiditate cumque veniam ullam repudiandae optio, molestiae quam doloremque deleniti adipisci. Praesentium, illo! Quasi, beatae.'
            ],
            [
                'judul_artikel' => 'Belajar itu penting',
                'slug' => 'belajar-itu-penting',
                'topik' => 'PENDIDIKAN',
                'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa quibusdam similique quasi ad, maxime cupiditate cumque veniam ullam repudiandae optio, molestiae quam doloremque deleniti adipisci. Praesentium, illo! Quasi, beatae.'
            ],
            [
                'judul_artikel' => 'Hukum di Indonesia',
                'slug' => 'hukum-di-indonesia',
                'topik' => 'KESETARAAN',
                'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa quibusdam similique quasi ad, maxime cupiditate cumque veniam ullam repudiandae optio, molestiae quam doloremque deleniti adipisci. Praesentium, illo! Quasi, beatae.'
            ],
            [
                'judul_artikel' => 'Keluarga cemara',
                'slug' => 'keluarga-cemara',
                'topik' => 'FAMILY ISSUE',
                'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa quibusdam similique quasi ad, maxime cupiditate cumque veniam ullam repudiandae optio, molestiae quam doloremque deleniti adipisci. Praesentium, illo! Quasi, beatae.'
            ]
        ];
        // Artikel::insert($data);
        foreach ($data as $d) {
            Artikel::create($d);
        }
    }
}
