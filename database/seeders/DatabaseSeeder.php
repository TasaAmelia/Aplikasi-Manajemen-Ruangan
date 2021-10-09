<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Admin;
use \App\Models\Gedung;
use \App\Models\Jenis_ruangan;
use \App\Models\Ruangan;
use \App\Models\Peminjaman;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'username_admin' => 'Isnaps',
            'password_admin' => 'admin',
            'usertype_admin' => 'Admin',
            'fullname_admin' => 'Isnap Kiswandi'
        ]);

        Admin::create([
            'username_admin' => 'Rizals',
            'password_admin' => 'superAdmin',
            'usertype_admin' => 'Super Admin',
            'fullname_admin' => 'Rizal Fakhri'
        ]);

        Gedung::create([
            'nama_gedung' => 'Gedung D',
            'keterangan_gedung' => 'Gedung untuk fakultas teknik'
        ]);

        Gedung::create([
            'nama_gedung' => 'Gedung Jajoesman',
            'keterangan_gedung' => 'Gedung untuk kelas dan tu'
        ]);

        Jenis_ruangan::create([
            'nama_jenis_ruangan' => 'Ruang Kelas',
            'id_gedung' => '1',
            'keterangan_jenis_ruangan' => 'Dipakai untuk aktivitas belajar mengajar'
        ]);

        Jenis_ruangan::create([
            'nama_jenis_ruangan' => 'Tata Usaha',
            'id_gedung' => '1',
            'keterangan_jenis_ruangan' => 'Dipakai untuk informasi akademik mahasiswa'
        ]);

        Ruangan::create([
            'nama_ruangan' => 'J305',
            'id_jenis_ruangan' => '1',
            'keterangan_ruangan' => 'Dipakai untuk kelas belajar mengajar'
        ]);

        Ruangan::create([
            'nama_ruangan' => 'J306',
            'id_jenis_ruangan' => '1',
            'keterangan_ruangan' => 'Dipakai untuk kelas belajar mengajar'
        ]);

        Peminjaman::create([
            'id_penanggung_jawab' => '1',
            'nama_penanggung_jawab' => 'Yanto Sudirman',
            'id_ruangan' => '1',
            'jenis_pinjaman' => 'Jangka Pendek',
            'tgl_admin_pinjam' => '1 oktober 2020',
            'tgl_awal_peminjaman' => '1 oktober 2020',
            'tgl_akhir_peminjaman' => '2 oktober 2020',
            'keterangan_peminjaman' => 'Untuk kelas pak blabla mengajar kelas A1 dan A2'
        ]);
    }
}
