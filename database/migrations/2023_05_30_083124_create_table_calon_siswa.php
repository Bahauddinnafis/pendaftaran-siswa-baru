<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('foto');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->integer('umur');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('asal_sekolah');
            $table->integer('id_user');
            $table->integer('id_jurusan1')->nullable();
            $table->integer('id_jurusan2')->nullable();
            $table->integer('id_jadwal')->nullable();
            $table->integer('id_ruang')->nullable();
            $table->enum('status_pembayaran', ['1', '0'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calon_siswa', function (Blueprint $table) {
            //
        });
    }
}
