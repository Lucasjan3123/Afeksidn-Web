<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Voucher::create([
            'kode' => 'AFEKSI123',
            'nama_voucher' => 'AFEKSI AKHIR TAHUN',
            'jumlah_diskon' => 5000,
            'stok_voucher' => 5,
            'expired_date' =>  '2023-12-31'
        ]);
    }
}
