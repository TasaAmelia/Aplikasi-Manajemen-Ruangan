<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_ruangans', function (Blueprint $table) {
            $table->increments('id_jenis_ruangan');
            $table->String('nama_jenis_ruangan');
            $table->integer('id_gedung')->unsigned();
            $table->String('keterangan_jenis_ruangan');
            $table->timestamps();
        });

        Schema::table('jenis_ruangans', function($table) {
            $table->foreign('id_gedung')->references('id_gedung')->on('gedungs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_ruangans');
    }
}
