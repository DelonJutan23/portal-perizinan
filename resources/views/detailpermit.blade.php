@extends('layouts.sidebarlec')

@section('content')

<div class="content">
    <div class="d-flex">
        <div class="content mt-3 ml-2 mr-2" style="background: white; padding: 20px; border-radius: 10px;">

            <!-- Detail Perizinan -->
            <h4 class="text-center mb-4"><strong>Detail Perizinan</strong></h4>
            <p><strong>NIM:</strong> 220211060001</p>
            <p><strong>Nama:</strong> Cindy Aurellia Indiarto</p>
            <p><strong>Mata Kuliah:</strong> Keamanan Siber</p>
            <p><strong>Tanggal Izin:</strong> 12 Maret 2024</p>

            <!-- Alasan Perizinan -->
            <p><strong>Alasan Perizinan:</strong></p>
            <p class="text-muted">Saya merasa kurang sehat karena demam tinggi, sehingga tidak dapat menghadiri kelas pada tanggal yang telah dijadwalkan. Saya telah disarankan untuk beristirahat dan mengonsumsi obat agar segera pulih.</p>

            <!-- Berkas Pendukung -->
            <div class="mb-5">
                <a href="{{ asset('storage/supporting_files/example.pdf') }}" target="_blank" class="btn btn-outline-primary w-100 border-1">
                    Lihat Berkas Pendukung
                </a>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <div>
                    <a href="/matkul" class="btn btn-secondary">Kembali</a>
                </div>
                <div>
                    <!-- Tolak -->
                    <a href="/matkul"
                        class="btn btn-danger ms-2"
                        onclick="return confirm('Yakin ingin menolak perizinan ini?')">
                        Tolak
                    </a>
                    <!-- Setuju -->
                    <a href="/matkul"
                        class="btn btn-success"
                        onclick="return confirm('Yakin ingin menyetujui perizinan ini?')">
                        Setujui
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection