<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_payment_gateway',
        'id_kursus',
        'jumlah_tagihan',
        'no_transaksi',
        'waktu_transaksi',
        'jenis_pembayaran',
        'bank',
        'jumlah_bayar',
        'status_transaksi'
    ];

    protected $with = ['getPayment', 'getKursus'];

    public function getPayment()
    {
        return $this->belongsTo(DataPaymentGateway::class, 'id_payment_gateway');
    }

    public function getKursus()
    {
        return $this->belongsTo(DataKursus::class, 'id_kursus');
    }
}
