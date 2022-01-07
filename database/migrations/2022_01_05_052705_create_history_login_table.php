<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_login', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('user_id');
            $table->timestamp('login_terakhir')->default(now());
            $table->timestamp('logout_terakhir')->default(now());
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('history_login');
    }
}
