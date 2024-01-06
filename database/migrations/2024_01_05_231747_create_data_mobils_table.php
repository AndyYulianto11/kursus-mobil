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
        Schema::create('data_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('transmisi_mobil');
            $table->string('merk_mobil');
            $table->string('plat_nomor_mobil');
            $table->string('tipe_mobil');
            $table->string('foto_mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mobils');
    }
};
