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
            $table->foreignId('master_sni_id');
            $table->foreignId('master_provinsi_id');
            $table->foreignId('master_kota_kabupaten_id');
            $table->foreignId('master_sektor_kategori_id');
            $table->string('nama_organisasi',50)->nullable(false)->unique();
            $table->string('alamat_organisasi',50);
            $table->string('alamat_pabrik',50);
            $table->string('email_perusahaan',20);
            $table->string('nomor_telepon',13);
            $table->string('website',20);
            $table->year('tahun_berdiri');
            $table->string('status_kepemilikan',10);
            $table->string('tipe_produk',50);
            $table->decimal('kekayaan_organisasi',12,3);
            $table->decimal('hasil_penjualan_organisasi',12,3);
            $table->string('tipe_organisasi',10);
            $table->string('gambar',10);
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
