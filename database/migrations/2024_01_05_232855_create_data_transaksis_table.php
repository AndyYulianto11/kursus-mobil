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
        Schema::create('data_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_payment_gateway')->constrained('data_payment_gateways');
            $table->foreignId('id_kursus')->constrained('data_kursus');
            $table->string('jumlah_tagihan');
            $table->string('no_transaksi');
            $table->timestamps('waktu_transaksi');
            $table->string('jenis_pembayaran');
            $table->string('bank');
            $table->string('jumlah_bayar');
            $table->string("status_transaksi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_transaksis');
    }
};
