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
        Schema::create('data_nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kursus')->constrained('data_kursus');
            $table->integer('nilai_keterampilan');
            $table->integer('nilai_pengetahuan');
            $table->integer('presensi');
            $table->integer('nilai_akhir');
            $table->string('status');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_nilais');
    }
};
