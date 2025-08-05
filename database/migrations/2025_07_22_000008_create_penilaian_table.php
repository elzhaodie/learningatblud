<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kategori_penilaian_id')->nullable();;
            // $table->foreign('kategori_penilaian_id')
            //         ->references('id')
            //         ->on('kategoripenilaians')
            //         ->onDelete('cascade');
            $table->string('penilaian_name');
            $table->integer('bobot');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaians');
    }
}
