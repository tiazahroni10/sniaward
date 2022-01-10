<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\DokumenBerita;
use App\Models\DokumenCapacityBuilding;
use App\Models\DokumenEvaluator;
use App\Models\DokumenPeserta;
use App\Models\DokumenSniAward;
use App\Models\Evaluator;
use App\Models\Gambar;
use App\Models\HistoryLogin;
use App\Models\Kontak;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MasterProvinsi;
use App\Models\MasterPertanyaan;
use App\Models\MasterDokumen;
use App\Models\MasterSektorKategori;
use App\Models\MasterKotaKabupaten;
use App\Models\MasterSni;
use App\Models\Pekerjaan;
use App\Models\Pelatihan;
use App\Models\Pendidikan;
use App\Models\PertanyaanPeserta;
use App\Models\Peserta;
use App\Models\Sekretariat;
use App\Models\Sertifikat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        MasterProvinsi::factory(5)->create();
        MasterPertanyaan::factory(5)->create();
        MasterDokumen::factory(5)->create();
        MasterSektorKategori::factory(5)->create();
        MasterKotaKabupaten::factory(5)->create();
        MasterSni::factory(5)->create();
        HistoryLogin::factory(20)->create();
        // Peserta::factory(20)->create();
        Kontak::factory(20)->create();
        PertanyaanPeserta::factory(20)->create();
        DokumenPeserta::factory(20)->create();
        DokumenEvaluator::factory(20)->create();
        DokumenBerita::factory(20)->create();
        DokumenCapacityBuilding::factory(20)->create();
        DokumenSniAward::factory(20)->create();
        Evaluator::factory(20)->create();
        Pendidikan::factory(20)->create();
        Pekerjaan::factory(20)->create();
        Pelatihan::factory(20)->create();
        Sertifikat::factory(20)->create();
        Berita::factory(20)->create();
        Gambar::factory(20)->create();
        Sekretariat::factory(20)->create();



    }
}
