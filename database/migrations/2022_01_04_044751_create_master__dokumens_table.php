<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master__dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_dokumen',20)->nullable(false);
            $table->string('format_file',5)->nullable(false);
            $table->integer('maks_ukuran')->default(5)->nullable(false);
            $table->boolean('wajib')->default(true)->nullable(false);
            $table->string('deskripsi',30)->nullable();
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
        Schema::dropIfExists('master__dokumens');
    }
}
