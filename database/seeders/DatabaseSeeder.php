<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\VoucherSeeder;
use Database\Seeders\EventCategorySeeder;
use Database\Seeders\EventTransactionSeeder;
use Database\Seeders\PaketLayananNonProfessionalSeeder;
use Database\Seeders\PaketLayananProfessionalKonselingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user
        $this->call(LayananNonProfessionalSeeder::class);
        $this->call(ProfesionalKonselingSeeder::class);
        $this->call(PaketLayananNonProfessionalSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PsikologSeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(EventTransactionSeeder::class);
        $this->call(MentoringSeeder::class);
        $this->call(ConselingSeeder::class);
        $this->call(VolunteersSeeder::class);
        $this->call(KonselorsSeeder::class);
        $this->call(EventMaterialSessionSeeder::class);
        $this->call(categoryEbookSeeder::class);
        $this->call(EbookSeeder::class);
        $this->call(EcourseSeeder::class);
        $this->call(InternshipSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(bankSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(PaketLayananProfessionalKonselingSeeder::class);
    }
}
