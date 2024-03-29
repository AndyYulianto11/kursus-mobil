<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'no_telepon',
        'tanggal_lahir',
        'alamat',
        'level'
    ];
}
