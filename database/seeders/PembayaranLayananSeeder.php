<?php

namespace Database\Seeders;

use App\Models\PembayaranLayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PembayaranLayanan::create([
            'voucher_id' => 1,
            'paket_professional_conseling_id' => 1,
            // 'paket_layanan_non_professional_id' => 1,
            // 'mentoring_id' => 1,
            'conseling_id' => 1,
            // 'profesional_conseling_id' => 1,
            'psikolog_id' => 1,
            // 'payment_method' => 'qris',
            'user_id' => 1,
            'sub_total' => '100000',
            'total_payment' => '1000000',
            'status' => 'UNPAID',
            'fee_transaksi' => '6000'
        ]);

        PembayaranLayanan::create([
            'voucher_id' => 2,
            'paket_layanan_non_professional_id' => 2,
            // 'mentoring_id' => 2,
            'conseling_id' => 2,
            // 'profesional_conseling_id' => 2,
            'psikolog_id' => 2,
            'user_id' => 2,
            'sub_total' => '200000',
            'total_payment' => '2000000',
            'status' => 'PAID',
            'fee_transaksi' => '6000'
        ]);
    }
}
