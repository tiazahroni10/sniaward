<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenugasanSeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penugasan_se', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('admin_id')->nullable()->constrained('users');
            $table->foreignId('evaluator_id')->nullable()->constrained('users');
            $table->foreignId('peserta_id')->nullable()->constrained('users');
            $table->string('kategori',50)->nullable();
            $table->string('judul',100)->nullable();
            $table->date('mulai')->nullable();
            $table->date('hingga')->nullable();
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
        Schema::dropIfExists('penugasan_se');
    }
}
