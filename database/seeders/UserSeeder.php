<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'nama' => 'Azura Syahreza',
            'jenisKelamin' => 'Laki-laki',
            'password' => 'Password123',
            'email' => 'azura@gmail.com',
            'umur' => 20,
            'no_whatsapp' => '081234335459'

        ],
        [
            'nama' => 'Alana Liora Gantari',
            'jenisKelamin' => 'Perempuan',
            'password' => 'Password456',
            'email' => 'alana@gmail.com',
            'umur' => 19,
            'no_whatsapp' => '081234335457'
        ]];

        for ($i=0; $i < 2 ; $i++) {
            User::create([
                "nama" => $data[$i]['nama'],
                "jenisKelamin" => $data[$i]['jenisKelamin'],
                "password" => $data[$i]["password"],
                "email" => $data[$i]["email"],
                "umur" => $data[$i]["umur"],
                "no_whatsapp" => $data[$i]["no_whatsapp"],
            ]);
        }
    }
}