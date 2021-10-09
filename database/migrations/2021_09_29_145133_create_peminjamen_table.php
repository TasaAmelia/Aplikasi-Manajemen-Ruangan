<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->increments('id_peminjaman');
            $table->integer('id_penanggung_jawab');
            $table->string('nama_penanggung_jawab');
            $table->integer('id_ruangan')->unsigned();
            $table->string('jenis_pinjaman');
            $table->string('tgl_admin_pinjam');
            $table->string('tgl_awal_peminjaman');
            $table->string('tgl_akhir_peminjaman');
            $table->string('keterangan_peminjaman');
            $table->timestamps();
        });

        Schema::table('peminjamen', function($table) {
            $table->foreign('id_ruangan')->references('id_ruangan')->on('ruangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
}
