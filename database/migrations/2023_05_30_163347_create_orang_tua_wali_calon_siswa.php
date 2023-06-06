<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuaWaliCalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tua_wali_calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->integer('penghasilan_ayah')->nullable();
            $table->integer('no_telp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->integer('penghasilan_ibu')->nullable();
            $table->integer('no_telp_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->integer('penghasilan_wali')->nullable();
            $table->integer('no_telp_wali')->nullable();
            $table->integer('id_calon_siswa');
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
        Schema::dropIfExists('orang_tua_wali_calon_siswa');
    }
}
