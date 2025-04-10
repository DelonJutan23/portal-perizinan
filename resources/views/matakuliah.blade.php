@extends('layouts.sbdosen')

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

        <!-- Keamanan Siber -->
        <div class="d-flex justify-content-center mt-3 mb-3">
            <!-- Tombol collapsible untuk membuka daftar pertemuan -->
            <div class="btn btn-primary" style="width: 98%;" data-bs-toggle="collapse" data-bs-target="#KeamananSiberCollapse">
                TIK3062 - KEAMANAN SIBER <br>
                Kelas G
            </div>
        </div>

        <!-- Detail Kehadiran -->
        <div class="collapse" id="KeamananSiberCollapse">
            <div class="card-body">
                <!-- Pertemuan ke-1 sampai 16 -->
                <ul class="list-group">
                    @for($i = 1; $i <= 16; $i++)
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex justify-content-between align-items-start flex-column flex-sm-row">
                            <h6>Pertemuan ke-{{ $i }}</h6>
                            <div class="d-flex flex-column flex-md-row flex-wrap">
                                <!-- Tombol daftar mahasiswa -->
                                <button class="btn btn-outline-secondary mb-2 mb-md-0 mr-md-2" data-bs-toggle="modal" data-bs-target="#daftarMahasiswaModal{{ $i }}" onclick="showDaftarMahasiswa('{{ $i }}');">
                                    Daftar Mahasiswa
                                </button>
                                <!-- Tombol generate kode presensi -->
                                <button class="btn btn-outline-secondary mb-2 mb-md-0 mr-md-2" data-bs-toggle="modal" data-bs-target="#generateKodeModal{{ $i }}" onclick="generateKodePresensi('{{ $i }}')">
                                    Generate Kode
                                </button>
                                <!-- Tombol izin perkuliahan -->
                                <button class="btn btn-outline-secondary mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#izinPerkuliahanModal">
                                    Izin Perkuliahan
                                </button>
                            </div>
                        </div>
                        </li>
                        @endfor
                </ul>

                <!-- Modal Daftar Mahasiswa -->
                @for($i = 1; $i <= 16; $i++)
                    <div class="modal fade" id="daftarMahasiswaModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="daftarMahasiswaModalLabel{{ $i }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="daftarMahasiswaModalLabel{{ $i }}">Daftar Mahasiswa Pertemuan ke-{{ $i }}</h5>
                                <button type="button" class="close text-dark border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Tutup">
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Tabel daftar mahasiswa -->
                                <div class="table-responsive">
                                    <table id="tableMahasiswa{{ $i }}" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data dari JavaScript -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor

            <!-- Modal Generate Kode Presensi -->
            @for($i = 1; $i <= 16; $i++)
                <div class="modal fade" id="generateKodeModal{{ $i }}" tabindex="-1" aria-labelledby="generateKodeModalLabel{{ $i }}" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="generateKodeModalLabel{{ $i }}">Kode Presensi Pertemuan ke-{{ $i }}</h5>
                            <button type="button" class="close text-dark border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Tutup">
                                &times;
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <!-- Kode unik presensi -->
                            <h1 id="kodePresensi{{ $i }}">[Kode Muncul]</h1>
                            <p>Kode ini digunakan untuk presensi pada pertemuan ke-{{ $i }}.</p>
                            <!-- Tanggal & waktu -->
                            <p id="createdAt{{ $i }}"></p>
                            <p id="expiredAt{{ $i }}"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
        </div>
        @endfor

        <!-- Modal Izin Perkuliahan -->
        <div class="modal fade" id="izinPerkuliahanModal" tabindex="-1" aria-labelledby="izinPerkuliahanModalLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="izinPerkuliahanModalLabel">Daftar Mahasiswa yang Izin</h5>
                        <button type="button" class="close text-dark border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Tutup">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabel mahasiswa yang mengajukan izin -->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
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
                                    <!-- Data dari JavaScript -->
                                </tbody>
                            </table>
                        </div>
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
</div>

<!-- Pengembangan Aplikasi Web Berbasis Framework -->
<div class="d-flex justify-content-center mb-3">
    <div class="btn btn-primary" style="width: 98%;">
        TIK3192 - PENGEMBANGAN APLIKASI WEB BERBABIS FRAMEWORK<br>
        Kelas B
    </div>
</div>
</div>
</div>

<!-- Script daftar mahasiswa -->
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

    // Fungsi untuk memuat data mahasiswa ke dalam modal
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

<!-- Script kode presensi -->
<script>
    function generateKodePresensi(pertemuanId) {
        // Generate kode acak sebagai kode
        let kode = Math.random().toString(36).substring(2, 10).toUpperCase();
        document.getElementById("kodePresensi" + pertemuanId).innerText = kode;

        // Waktu dibuat
        let createdAt = new Date();
        document.getElementById("createdAt" + pertemuanId).innerText = "Tanggal dibuat: " + createdAt.toLocaleString("id-ID");

        // Waktu kadaluarsa (5 menit)
        let expiredTime = new Date(createdAt.getTime() + 5 * 60 * 1000);
        document.getElementById("expiredAt" + pertemuanId).innerText = "Berlaku sampai: " + expiredTime.toLocaleString("id-ID");
    }
</script>

<!-- Script Pop Up Izin Perkuliahan -->
<script>
    // Daftar mahasiswa yang mengajukan izin perkuliahan, berisi objek dengan data nama, NIM, dan alasan
    const daftarMahasiswaIzin = [{
            id: 1,
            nama: "Cindy Aurellia Indiarto",
            nim: "220211060001"
        },
        {
            id: 2,
            nama: "Lefry Ariyo Mandang",
            nim: "220211060014"
        },
        {
            id: 3,
            nama: "Savior Podung",
            nim: "220211060076"
        }
    ];

    // Fungsi untuk memuat data izin mahasiswa ke dalam tabel HTML
    function loadIzinMahasiswa() {
        const izinList = document.getElementById("izinMahasiswaList");
        izinList.innerHTML = "";

        // Looping untuk setiap mahasiswa dalam daftar izin
        daftarMahasiswaIzin.forEach((mahasiswa, index) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${mahasiswa.nama}</td>
                <td>${mahasiswa.nim}</td>
                <td>
                    <a href="detailperizinan?id=${mahasiswa.id}" class="btn btn-primary btn-sm">Lihat Detail</a>
                </td>
                <td>
                    <div class="d-flex flex-column flex-md-row gap-1">
                        <a href="/matakuliah" class="btn btn-danger btn-sm mb-2 mb-md-0 mr-md-2" onclick="return confirm('Yakin ingin menolak perizinan ini?')">Tolak</a>
                        <a href="/matakuliah" class="btn btn-success btn-sm mb-2 mb-md-0" onclick="return confirm('Yakin ingin menyetujui perizinan ini?')">Setujui</a>
                    </div>
                </td>
            `;
            izinList.appendChild(row);
        });
    }

    // Event listener untuk menjalankan fungsi loadIzinMahasiswa saat modal izinPerkuliahan ditampilkan
    document.getElementById("izinPerkuliahanModal").addEventListener("show.bs.modal", loadIzinMahasiswa);
</script>

@endsection