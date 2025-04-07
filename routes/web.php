<?php

use Illuminate\Support\Facades\Route;

// Landing Page

Route::get('/', function () {
    return view('lpmahasiswa');
});

Route::get('/lpdosen', function () {
    return view('lpdosen');
});

Route::get('/lpadmin', function () {
    return view('lpadmin');
});

// Mahasiswa

Route::get('/dbmahasiswa', function () {
    return view('dbmahasiswa');
});

Route::get('/izinmahasiswa', function () {
    return view('izinmahasiswa');
});

Route::get('/presensi', function () {
    return view('presensi');
});

// Dosen

Route::get('/dbdosen', function () {
    return view('dbdosen');
});

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

Route::get('/cruddosen', function () {
    return view('cruddosen');
});

Route::get('/crudmahasiswa', function () {
    return view('crudmahasiswa');
});

Route::get('/crudmatkul', function () {
    return view('crudmatkul');
});