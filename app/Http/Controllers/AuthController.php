<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('landing');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt([
            'id_user' => $request->id_user,
            'password' => $request->password
        ])) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('dbadmin');
            } elseif ($user->role == 'dosen') {
                return redirect()->route('dbdosen');
            } elseif ($user->role == 'mahasiswa') {
                return redirect()->route('dbmahasiswa');
            }
        }

        return back()->withErrors([
            'id_user' => 'ID atau password tidak cocok.',
        ]);
    }
    // Log out
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
