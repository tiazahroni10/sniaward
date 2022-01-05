<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluator', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->string('nama_lengkap',20)->nullable(false);
            $table->string('gelar_sebelum_nama',5);
            $table->string('gelar_setelah_nama',5);
            $table->string('status',5)->nullable(false);
            $table->datetime('tgl_lahir');
            $table->string('pekerjaan',20);
            $table->string('nama_instansi',20);
            $table->string('jenis_kelamin',1);
            $table->string('alamat',50);
            $table->foreignId('master_provinsi_id');
            $table->foreignId('master_kota_kabupaten_id');
            $table->string('nomor_telepon',13);
            $table->string('gambar',15);
            $table->string('npwp',15)->nullable(false);   
            $table->string('ktp',15)->nullable(false); 
            $table->string('cv',15)->nullable(false); 
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
        Schema::dropIfExists('evaluator');
    }
}
