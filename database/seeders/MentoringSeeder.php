<?php

namespace Database\Seeders;

use App\Models\Mentoring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mentoringData = [
            [
                'namaMentoring' => 'Parenting Mentoring',
            ],
            [
                'namaMentoring' => 'Pre Marriage Mentoring',
            ],
            [
                'namaMentoring' => 'Self Growth Mentoring',
            ],
        ];
    
        foreach ($mentoringData as $data) {
            Mentoring::create($data);
        }
    }
}
