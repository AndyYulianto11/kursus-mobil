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
        Schema::create('data_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('surat_kuasa');
            $table->string('akta_notaris');
            $table->string('ktp_pimpinan');
            $table->string('surat_izin_tempat_usaha');
            $table->string('surat_izin_usaha_perdagangan');
            $table->string('tanda_daftar_perusahaan');
            $table->longText('alamat_perusahaan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perusahaans');
    }
};
