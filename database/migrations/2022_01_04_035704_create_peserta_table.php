<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('user_id');
            $table->foreignId('master_sni_id')->nullable(true);
            $table->foreignId('master_provinsi_id')->nullable(true);
            $table->foreignId('master_kota_kabupaten_id')->nullable(true);
            $table->foreignId('master_sektor_kategori_id')->nullable(true);
            $table->string('nama_organisasi',50)->nullable(false)->unique();
            $table->string('alamat_organisasi',50)->nullable(true);
            $table->string('alamat_pabrik',50)->nullable(true);
            $table->string('email_perusahaan',20)->nullable(true);
            $table->string('nomor_telepon',13)->nullable(true);
            $table->string('website',20)->nullable(true);
            $table->year('tahun_berdiri')->nullable(true);
            $table->string('status_kepemilikan',10)->nullable(true);
            $table->string('tipe_produk',50)->nullable(true);
            $table->decimal('kekayaan_organisasi',12,3)->nullable(true);
            $table->decimal('hasil_penjualan_organisasi',12,3)->nullable(true);
            $table->string('tipe_organisasi',10)->nullable(true);
            $table->string('gambar',10)->nullable(true);
            $table->boolean('flag_complated')->default(0)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
