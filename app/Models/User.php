<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Set primary key, jika tidak memakai 'id'
    protected $primaryKey = 'id_user';  
    public $incrementing = false;  // Karena 'id_user' bukan auto-increment
    protected $keyType = 'string';  // Menentukan tipe key (string, jika UUID)

    // Daftar atribut yang dapat diisi massal
    protected $fillable = [
        'id_user',
        'nama',
        'email',
        'prodi',
        'angkatan',
        'password',
        'role',
    ];

    // Daftar atribut yang tidak akan tampil dalam array/json
    protected $hidden = [
        'password',  // Untuk menyembunyikan password dari output JSON
        'remember_token', // Jika Anda menggunakan remember me token
    ];

    // Menambahkan mutator untuk enkripsi password saat input
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Fungsi ini mengembalikan identifier autentikasi, yang biasanya 'id'
    public function getAuthIdentifierName()
    {
        return 'id_user';
    }

    // Fungsi untuk mendapatkan identifier pengguna
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    // Fungsi untuk mendapatkan password yang telah dienkripsi
    public function getAuthPassword()
    {
        return $this->password;
    }
}
