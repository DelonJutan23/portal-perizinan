<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // Fungsi untuk menampilkan halaman pengajuan izin
    public function create()
    {
        return view('izinmahasiswa'); // pastikan nama view sesuai dengan file Blade
    }

    // Fungsi untuk menyimpan data formulir izin
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nim' => 'required|max:12',
            'name' => 'required',
            'permit_day' => 'required|date',
            'course' => 'required',
            'reason' => 'required',
            'supporting_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Proses upload file jika ada
        $filePath = null;
        if ($request->hasFile('supporting_file')) {
            $filePath = $request->file('supporting_file')->store('public/permissions');
        }

        // Menyimpan data ke database
        Permission::create([
            'nim' => $validated['nim'],
            'name' => $validated['name'],
            'permit_day' => $validated['permit_day'],
            'course' => $validated['course'],
            'reason' => $validated['reason'],
            'supporting_file' => $filePath,
        ]);

        // Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->route('izinmahasiswa.store')->with('success', 'Permohonan izin berhasil dikirim');
    }
}
