<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MasterProvinsi;
use App\Models\MasterPertanyaan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        MasterProvinsi::factory(10)->create();
        MasterPertanyaan::factory(10)->create();
    }
}
