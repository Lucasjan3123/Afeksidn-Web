<?php

namespace Database\Seeders;

use App\Models\EventTransaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('Y-m-d');
        $data = [
            [
                1,
                2,
                'CAM-T92652681',
                NULL,
                NULL,
                NULL,
                $date,
                'FREE'
            ],
            [
                1,
                1,
                'WEB-T72517734',
                'Alfamart',
                152000,
                2000,
                $date,
                'UNPAID'
            ]
        ];

        for ($i=0; $i < 2 ; $i++) { 
            EventTransaction::create([
                'user_id' => $data[$i][0],
                'event_id' => $data[$i][1],
                'ref_transaction_event' => $data[$i][2],
                'payment_method' => $data[$i][3],
                'total_payment' => $data[$i][4],
                'fee_transaction' => $data[$i][5],
                'date_order' => $data[$i][6],
                'status' => $data[$i][7]
            ]);
        }
    }
}
