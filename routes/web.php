<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
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

Route::get('/reqpermit', function () {
    return view('reqpermit');
});

Route::get('/historylecturer', function () {
    return view('historylecturer');
});

Route::get('/detailpermissionlecturer', function () {
    return view('detailpermissionlecturer');
});