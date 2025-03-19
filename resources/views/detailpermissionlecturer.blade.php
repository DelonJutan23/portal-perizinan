@extends('layouts.sidebarlec')

@section('content')

<body style="background-color: #ffffff;">
    <div class="d-flex justify-content-center py-2">
        <div class="container" style="max-width: 1128px; background: white; padding: 40px; border-radius: 10px; 
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); margin-top: 50px;">

            <!-- Detail Perizinan -->
            <p><strong>NIM:</strong> 123456789012</p>
            <p><strong>Nama:</strong> Leonardo Abrams</p>
            <p><strong>Mata Kuliah:</strong> Matematika</p>
            <p><strong>Tanggal Izin:</strong> 12 Maret 2024</p>
            <p><strong>Status:</strong> <span class="badge bg-warning">Pending</span></p>

            <!-- Alasan Perizinan -->
            <p><strong>Alasan Perizinan:</strong></p>
            <p class="text-muted">Saya merasa kurang sehat karena demam tinggi, sehingga tidak dapat menghadiri kelas pada tanggal yang telah dijadwalkan. Saya telah disarankan untuk beristirahat dan mengonsumsi obat agar segera pulih.</p>

            <!-- Berkas Pendukung -->
            <div class="mb-3">
                <a href="{{ asset('storage/supporting_files/example.pdf') }}" target="_blank" class="btn btn-outline-primary w-100 border-1">
                    Lihat Berkas Pendukung
                </a>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between mt-4">
                <a href="/reqpermit" class="btn btn-secondary">Kembali</a>
                <!-- <div>
                    <button class="btn btn-danger ms-2">Tolak</button>
                    <button class="btn btn-success">Setujui</button>
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection