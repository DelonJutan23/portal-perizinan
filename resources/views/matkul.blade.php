@extends('layouts.sidebarlec')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Mata Kuliah</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan:</h4>
        <p>Halaman ini digunakan untuk melihat kehadiran mahasiswa pada setiap mata kuliah yang diambil, serta status perizinan yang telah diajukan oleh mahasiswa terkait ketidakhadiran mereka.</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Kehadiran Semester Genap 2024/2025
            </h3>
        </div>

        <!-- Keamanan Siber-->
        <div class="d-flex justify-content-center mt-3 mb-3">
            <div class="btn btn-primary" style="width: 98%;" data-bs-toggle="collapse" data-bs-target="#KeamananSiberCollapse">
                TIK3062 - KEAMANAN SIBER <br>
                Kelas G
            </div>
            </button>
        </div>

        <!-- Detail Keamanan Siber -->
        <div class="collapse" id="KeamananSiberCollapse">
            <div class="card-body">
                <!-- Pertemuan 1 - 16 -->
                <ul class="list-group">
                    @for($i = 1; $i <= 16; $i++)
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <h6>Pertemuan ke-{{ $i }}</h6>
                            <div class="d-flex">
                                <!-- Daftar Mahasiswa -->
                                <button class="btn btn-outline-secondary" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#daftarMahasiswaModal{{ $i }}" onclick="showDaftarMahasiswa('{{ $i }}');">Daftar Mahasiswa</button>
                                <!-- Generate Kode -->
                                <button class="btn btn-outline-secondary" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#generateKodeModal{{ $i }}" onclick="generateKodePresensi('{{ $i }}')">Generate Kode</button>
                                <!-- Izin Perkuliahan -->
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#izinPerkuliahanModal">Izin Perkuliahan</button>
                            </div>
                        </div>
                        </li>
                        @endfor
                </ul>

                <!-- Pop Up Daftar Mahasiswa-->
                @for($i = 1; $i <= 16; $i++)
                    <div class="modal fade" id="daftarMahasiswaModal{{ $i }}" tabindex="-1" aria-labelledby="daftarMahasiswaModalLabel{{ $i }}" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 60%; width: auto;">
                        <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="daftarMahasiswaModalLabel{{ $i }}">Daftar Mahasiswa Pertemuan ke-{{ $i }}</h5>
                            </div>
                            <div class="modal-body">
                                <!-- Tabel Daftar mahasiswa -->
                                <table id="tableMahasiswa{{ $i }}" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Status Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data mahasiswa (JavaScript) -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor

            <!-- Pop Up Presensi -->
            @for($i = 1; $i <= 16; $i++)
                <div class="modal fade" id="generateKodeModal{{ $i }}" tabindex="-1" aria-labelledby="generateKodeModalLabel{{ $i }}" aria-hidden="true">
                <div class="modal-dialog" style="max-width: 500px; width: 100%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="generateKodeModalLabel{{ $i }}">Kode Presensi Pertemuan ke-{{ $i }}</h5>
                        </div>
                        <div class="modal-body text-center">
                            <!-- Kode Presensi -->
                            <h1 id="kodePresensi{{ $i }}" style="font-weight: bold; margin-top: 20px; margin-bottom: 20px;">[Kode Muncul]</h1>
                            <p>Kode ini digunakan untuk presensi pada pertemuan ke-{{ $i }}. Silakan salin dan gunakan.</p>
                            <!-- Tanggal dibuat -->
                            <p id="createdAt{{ $i }}"></p>
                            <!-- Waktu Kedaluwarsa Kode -->
                            <p id="expiredAt{{ $i }}"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
        </div>
        @endfor

        <!-- Pop Up Izin Mahasiswa -->
        <div class="modal fade" id="izinPerkuliahanModal" tabindex="-1" aria-labelledby="izinPerkuliahanModalLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="izinPerkuliahanModalLabel">Daftar Mahasiswa yang Izin</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="izinMahasiswaList">
                                <!-- Data mahasiswa (JavaScript) -->
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Big Data -->
<div class="d-flex justify-content-center mb-3">
    <div class="btn btn-primary" style="width: 98%;">
        TIK3122 - BIG DATA <br>
        Kelas B
    </div>
    </button>
</div>

<!-- Pengembangan Aplikasi Web Berbasis Framework -->
<div class="d-flex justify-content-center mb-3">
    <div class="btn btn-primary" style="width: 98%;">
        TIK3192 - PENGEMBANGAN APLIKASI WEB BERBABIS FRAMEWORK<br>
        Kelas B
    </div>
    </button>
</div>
</div>
</div>

<!-- Script Pop Up Daftar Mahasiswa -->
<script>
    const mahasiswaData = [{
            nama: "Cindy Aurellia Indiarto",
            nim: "220211060001",
            status: "Hadir"
        },
        {
            nama: "Lefry Ariyo Mandang",
            nim: "220211060014",
            status: "Sakit"
        },
        {
            nama: "Savior Podung",
            nim: "220211060076",
            status: "Izin"
        },
        {
            nama: "Delon Dynes Jutan",
            nim: "220211060071",
            status: "Tidak Hadir"
        }
    ];

    function showDaftarMahasiswa(index) {
        const tableBody = document.querySelector(`#tableMahasiswa${index} tbody`);
        tableBody.innerHTML = '';

        mahasiswaData.forEach((mahasiswa, idx) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${idx + 1}</td>
                <td>${mahasiswa.nama}</td>
                <td>${mahasiswa.nim}</td>
                <td>${mahasiswa.status}</td> 
            `;
            tableBody.appendChild(row);
        });
    }
</script>

<!-- Script Pop Up Kode Presensi -->
<script>
    function generateKodePresensi(pertemuanId) {
        let kode = Math.random().toString(36).substring(2, 10).toUpperCase();
        document.getElementById("kodePresensi" + pertemuanId).innerText = kode;

        let createdAt = new Date();
        let createdAtString = createdAt.toLocaleString("id-ID", {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById("createdAt" + pertemuanId).innerText = "Tanggal dibuat: " + createdAtString;

        let expiredTime = new Date(new Date().getTime() + 5 * 60 * 1000);
        let expiredAtString = expiredTime.toLocaleString("id-ID", {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById("expiredAt" + pertemuanId).innerText = "Kode berlaku hingga: " + expiredAtString;

        setTimeout(function() {
            document.getElementById("kodePresensi" + pertemuanId).innerText = "Kode telah kedaluwarsa";
            document.getElementById("expiredAt" + pertemuanId).innerText = "Kode ini sudah tidak berlaku.";
        }, 5 * 60 * 1000);
    }
</script>

<!-- Script Pop Up Izin Perkuliahan -->
<script>
    let daftarMahasiswaIzin = [{
            id: 1,
            nama: "Cindy Aurellia Indiarto",
            nim: "220211060001",
            alasan: "Sakit demam tinggi"
        },
        {
            id: 2,
            nama: "Lefry Ariyo Mandang",
            nim: "220211060014",
            alasan: "Ada urusan keluarga mendesak"
        },
        {
            id: 3,
            nama: "Savior Podung",
            nim: "220211060076",
            alasan: "Mengikuti lomba akademik"
        }
    ];

    function loadIzinMahasiswa() {
        let izinList = document.getElementById("izinMahasiswaList");
        izinList.innerHTML = "";

        daftarMahasiswaIzin.forEach((mahasiswa, index) => {
            let row = document.createElement("tr");

            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${mahasiswa.nama}</td>
                <td>${mahasiswa.nim}</td>
                <td>
                    <a href="detailpermit?id=${mahasiswa.id}" class="btn btn-primary btn-sm">Lihat Detail</a>
                </td>
                <td>
                    <a href="/matkul"
                        class="btn btn-danger ms-2"
                        onclick="return confirm('Yakin ingin menolak perizinan ini?')">
                        Tolak
                    </a>
                    <a href="/matkul"
                        class="btn btn-success"
                        onclick="return confirm('Yakin ingin menyetujui perizinan ini?')">
                        Setujui
                    </a>
                </td>
            `;

            izinList.appendChild(row);
        });
    }

    document.getElementById("izinPerkuliahanModal").addEventListener("show.bs.modal", loadIzinMahasiswa);
</script>

@endsection