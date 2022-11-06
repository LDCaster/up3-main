<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kontrak', function (Blueprint $table) {
            $table->id();

            $table->foreignId('nama_pengadaan')->nullable();
            $table->foreignId('nama_vendor')->nullable();
            $table->foreignId('nama_direktur')->nullable();
            $table->foreignId('jabatan')->nullable();
            $table->foreignId('alamat')->nullable();
            $table->foreignId('email')->nullable();
            $table->foreignId('no_telp')->nullable();
            $table->foreignId('nama_bank')->nullable();
            $table->foreignId('nama_cabang')->nullable();
            $table->foreignId('no_rekening')->nullable();
            $table->foreignId('no_notaris')->nullable();
            $table->foreignId('no_khs')->nullable();


            $table->string('no_kontrak')->nullable();
            $table->date('bulan_tahun_kr')->nullable();
            $table->date('tanggal_kr')->nullable();
            $table->string('no_prk')->nullable();
            $table->double('nilai_kontrak'); //fk table rab
            $table->string('terbilang')->nullable();
            $table->double('nilai_jamlak'); //fk table rab
            $table->string('terbilang_jamlak')->nullable();
            $table->date('hari')->nullable();
            $table->date('tanggal')->nullable();
            $table->date('bulan')->nullable();
            $table->date('tahun')->nullable();
            $table->string('wkt_durasi_kontrak')->nullable();
            $table->string('terbilang_wkt')->nullable();
            $table->foreignId('nama_direksi')->constrained('direksi_pekerjaan')->nullable();
            $table->foreignId('nama_pengawas')->constrained('direksi_pekerjaan')->nullable();
            $table->foreignId('nama_material')->constrained('data_material')->nullable();
            $table->foreignId('nama_variant')->constrained('data_variant')->nullable();
            $table->foreignId('nama_satuan')->constrained('data_satuan')->nullable();
            $table->bigInteger('volume');
            $table->string('no_type_test')->nullable();
            $table->string('no_spam')->nullable();

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
        Schema::dropIfExists('data_kontrak');
    }
};
