<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function showLogin()
    {
        return view('lpmahasiswa');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $mahasiswa = Mahasiswa::where('id_mahasiswa', $username)->first();

        if ($mahasiswa && $password === $mahasiswa->password) {
            return view('dbmahasiswa', ['mahasiswa' => $mahasiswa]);
        } else {
            return back()->with('error', 'Username atau Password salah!');
        }
    }
}

