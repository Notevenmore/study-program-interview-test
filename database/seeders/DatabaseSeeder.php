<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Faculty::create([
          'name' => 'Teknologi Industri'
        ]);
        Faculty::create([
          'name' => 'Sains dan Ilmu Komputer'
        ]);
        Faculty::create([
          'name' => 'Perencanaan dan Infrastruktur'
        ]);
        Faculty::create([
          'name' => 'Komunikasi dan Diplomasi'
        ]);
        Faculty::create([
          'name' => 'Teknologi Eksplorasi dan Produksi'
        ]);
        Faculty::create([
          'name' => 'Ekonomi dan Bisnis'
        ]);
    }
}
