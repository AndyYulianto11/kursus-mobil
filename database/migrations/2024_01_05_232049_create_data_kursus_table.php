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
        Schema::create('data_kursus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paket')->constrained('data_pakets');
            $table->foreignId('id_user')->constrained('data_users');
            $table->foreignId('id_mobil')->constrained('data_mobils');
            $table->foreignId('id_perusahaan')->constrained('data_perusahaans');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->time('jam');
            $table->string('status');
            $table->string('rekomendasi_instruktur');
            $table->string('rekomendasi_transmisi_mobil');
            $table->string('rekomendasi_merk_mobil');
            $table->string('rekomendasi_plat_nomor_mobil');
            $table->string('rekomendasi_tipe_mobil');
            $table->date('rekomendasitanggal');
            $table->time('rekomendasi_jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kursus');
    }
};
