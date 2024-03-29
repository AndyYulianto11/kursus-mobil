<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPresensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kursus',
        'pertemuan',
        'tanggal',
        'jam',
        'status',
        'lokasi'
    ];

    protected $with = ['getKursus'];

    public function getKursus()
    {
        return $this->belongsTo(DataKursus::class, 'id_kursus');
    }
}
