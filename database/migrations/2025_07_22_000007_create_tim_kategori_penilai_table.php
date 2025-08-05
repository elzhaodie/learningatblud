<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimKategoriPenilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timkategoripenilais', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tim_penilai_id')->nullable();
            $table->unsignedInteger('kategori_penilaian_id')->nullable();
            $table->unsignedInteger('opd_id')->nullable(); 
            $table->string('status_penilaian');
            $table->timestamp('tanggal_penilaian')->useCurrent();
            $table->integer('nilai');
            $table->text('analisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timkategoripenilais');
    }
}
