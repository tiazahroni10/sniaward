<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenCapacityBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_capacity_building', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('master_dokumen_id');
            $table->string('nama_dokumen');
            $table->string('nama_file');
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
        Schema::dropIfExists('dokumen_capacity_building');
    }
}
