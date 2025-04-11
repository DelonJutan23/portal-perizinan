<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'id_mahasiswa',
        'nama_mahasiswa',
        'email',
        'password',
        'prodi',
        'angkatan',
    ];

    protected $hidden = [
        'password',
    ];
}
