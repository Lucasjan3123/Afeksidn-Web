<?php

namespace Database\Seeders;

use App\Models\EventMaterialSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventMaterialSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                [
                    "title" => "How Equality Affect Dating Relationship",
                    "event" => 4,
                    "pembicara" => 2
                ],
                [
                    "title" => " Dating Violence and Its Intervention",
                    "event" => 4,
                    "pembicara" => 3
                ],
                [
                    "title" => "Love Yourself Before Loving Others",
                    "event" => 2,
                    "pembicara" => 1
                ],
                [
                    "title" => "The Downfall of a Healthy Relationship",
                    "event" => 5,
                    "pembicara" => 4
                ]
            ];


        for ($i=0; $i < 4 ; $i++) {
            EventMaterialSession::create([
                "title_sesi" => $data[$i]['title'],
                "event_id" => $data[$i]['event'],
                "pembicara_id" => $data[$i]["pembicara"],
            ]);
        }
    }
}