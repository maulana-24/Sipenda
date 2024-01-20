<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->string('jns_kelamin');
            $table->string('agama');
            $table->string('tinggal_bersama');
            $table->string('anak_ke');
            $table->string('usia');
            $table->string('no_hp');

            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->date('tgllhr_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->date('tgllhr_ibu');
            $table->string('pendidikan_ibu');
            $table->string('perkerjaan_ibu');

            $table->string('tinggi_bdn');
            $table->string('berat_bdn');
            $table->string('jrk_tempuh');
            $table->string('jmlh_saudara');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
