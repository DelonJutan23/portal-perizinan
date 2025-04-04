<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/landingpagelec', function () {
    return view('landingpagelec');
});

Route::get('/dashboardstudent', function () {
    return view('dashboardstudent');
});

Route::get('/permitstudent', function () {
    return view('permitstudent');
});

Route::get('/dashboardlecturer', function () {
    return view('dashboardlecturer');
});

Route::get('/matkul', function () {
    return view('matkul');
});

Route::get('/historylecturer', function () {
    return view('historylecturer');
});

Route::get('/detailpermit', function () {
    return view('detailpermit');
});

Route::get('/presensi', function () {
    return view('presensi');
});