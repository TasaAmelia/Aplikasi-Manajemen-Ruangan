<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
            $table->increments('id_ruangan');
            $table->string('nama_ruangan');
            $table->integer('id_jenis_ruangan')->unsigned();
            $table->string('keterangan_ruangan');
            $table->timestamps();
        });

        Schema::table('ruangans', function($table) {
            $table->foreign('id_jenis_ruangan')->references('id_jenis_ruangan')->on('jenis_ruangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangans');
    }
}
