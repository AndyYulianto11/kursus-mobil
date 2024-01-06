<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kursus',
        'nilai_keterampilan',
        'nilai_pengetahuan',
        'presensi',
        'nilai_akhir',
        'status'
    ];

    protected $with = ['getKursus'];

    public function getKursus()
    {
        return $this->belongsTo(DataKursus::class, 'id_kursus');
    }
}
