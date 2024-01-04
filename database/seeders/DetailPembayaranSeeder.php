<?php

namespace Database\Seeders;

use App\Models\DetailPembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPembayaran::insert([
            'pembayaran_layanan_id' => 6,
            'tgl_konsultasi' => '2023-07-10',
            'jam_konsultasi' => '20.00',
            'detail_masalah' => 'di ghosting',
            'expired_date'  => '2023-10-10'
        ]);

        DetailPembayaran::insert([
            'pembayaran_layanan_id' => 7,
            'tgl_konsultasi' => '2023-07-10',
            'jam_konsultasi' => '20.00',
            'detail_masalah' => 'di selingkuhin',
            'expired_date'  => '2023-10-11'
        ]);
    }
}
