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
        Schema::create('data_presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kursus')->constrained('data_kursus');
            $table->integer('pertemuan');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('status');
            $table->longText('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_presensis');
    }
};
