<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'surat_kuasa',
        'akta_notaris',
        'ktp_pimpinan',
        'surat_izin_tempat_usaha',
        'surat_izin_usaha_perdagangan',
        'tanda_daftar_perusahaan',
        'alamat_perusahaan',
        'status'
    ];
}