<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKursus extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paket',
        'id_user',
        'id_mobil',
        'id_perusahaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'jam',
        'status',
        'rekomendasi_instruktur',
        'rekomendasi_transmisi_mobil',
        'rekomendasi_merk_mobil',
        'rekomendasi_plat_nomer_mobil',
        'rekomendasi_tipe_mobil',
        'rekomendasi_tanggal',
        'rekomendasi_jam'
    ];

    protected $with = ['getUser', 'getMobil', 'getPerusahaan'];

    public function getUser()
    {
        return $this->belongsTo(DataUser::class, 'id_user');
    }

    public function getMobil()
    {
        return $this->belongsTo(DataMobil::class, 'id_mobil');
    }

    public function getPerusahaan()
    {
        return $this->belongsTo(DataPerusahaan::class, 'id_perusahaan');
    }
}
