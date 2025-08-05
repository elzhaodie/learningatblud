<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnsurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unsurs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('penilaian_id')->nullable();
            // $table->foreign('penilaian_id')
            //         ->references('id')
            //         ->on('penilaians')
            //         ->onDelete('cascade');
            $table->string('indikator');
            $table->string('unsur');
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
        Schema::dropIfExists('unsurs');
    }
}
