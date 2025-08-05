<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTimKategoriPenilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('timkategoripenilais', function (Blueprint $table) {
            $table->foreign('tim_penilai_id')
                    ->references('id')
                    ->on('timpenilais')
                    ->onDelete('cascade');
            $table->foreign('kategori_penilaian_id')
                    ->references('id')
                    ->on('kategoripenilaians')
                    ->onDelete('cascade');
            $table->foreign('opd_id')
                    ->references('id')
                    ->on('opds')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timkategoripenilais', function (Blueprint $table) {
            $table->dropForeign(['tim_penilai_id']);
            $table->dropForeign(['kategori_penilaian_id']);
            $table->dropForeign(['opd_id']);
        });
    }
}
