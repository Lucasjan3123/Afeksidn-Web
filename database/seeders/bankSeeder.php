<?php

namespace Database\Seeders;

use App\Models\bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['bca', 'bri', 'bni', 'permata', 'mandiri', 'cimb','gopay', 'qris', 'shopeepay', 'indomaret', 'alfamart'];
        foreach ($data as $value) {
            bank::create([
                'bank' => $value,
            ]);
        }
    }
}
