<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUnsursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unsurs', function (Blueprint $table) {
             $table->foreign('penilaian_id')
                ->references('id')
                ->on('penilaians')
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
        Schema::table('unsurs', function (Blueprint $table) {
            $table->dropForeign(['penilaian_id']);
        });
    }
}
