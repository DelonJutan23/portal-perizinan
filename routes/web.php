<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;

// Route untuk menampilkan halaman login
Route::get('/', [AuthController::class, 'showLoginForm']);

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk halaman dbmahasiswa (untuk mahasiswa)
Route::get('dbmahasiswa', function () {
    return view('dbmahasiswa');  // Sesuaikan dengan nama view Anda
})->name('dbmahasiswa');

// Route untuk halaman dbdosen (untuk dosen)
Route::get('dbdosen', function () {
    return view('dbdosen');  // Sesuaikan dengan nama view Anda
})->name('dbdosen');

// Route untuk halaman cruddosen (untuk admin)
Route::get('dbadmin', function () {
    return view('dbadmin');  // Sesuaikan dengan nama view Anda
})->name('dbadmin');

// Route untuk logout akun (mahasiswa, dosen, dan admin)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Menampilkan halaman pengajuan izin
Route::get('/izinmahasiswa', [PermissionController::class, 'create'])->name('izinmahasiswa');

// Menyimpan data formulir izin
Route::post('/izinmahasiswa', [PermissionController::class, 'store'])->name('izinmahasiswa.store');

// Mahasiswa
Route::get('/izinmahasiswa', function () {
    return view('izinmahasiswa');
});

Route::get('/presensi', function () {
    return view('presensi');
});

// Dosen
Route::get('/matakuliah', function () {
    return view('matakuliah');
});

Route::get('/historylecturer', function () {
    return view('historylecturer');
});

Route::get('/detailperizinan', function () {
    return view('detailperizinan');
});

// Admin

Route::get('/crudmatkul', function () {
    return view('crudmatkul');
});
