<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'permissions';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nim',
        'name',
        'permit_day',
        'course',
        'reason',
        'supporting_file'
    ];

    // Menonaktifkan timestamp jika tidak menggunakan kolom created_at dan updated_at
    public $timestamps = true;
}
