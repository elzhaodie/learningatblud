<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bidang_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('daerah_id')->nullable();
            $table->string('opd_name');
            $table->string('password');
            $table->string('email');
            $table->string('alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opds');
    }
}
