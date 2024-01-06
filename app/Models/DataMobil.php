<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'transmisi_mobil',
        'merk_mobil',
        'plat_nomor_mobil',
        'tipe_mobil',
        'foto_mobil'
    ];
}
