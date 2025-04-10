@extends('layouts.sbdosen')

@section('content')

<!-- Main Content -->
<div class="content-header">
    <div class="container-fluid">
        <h1>Beranda</h1>
    </div>
</div>

<input type="hidden" id="user_session" value="220211060071">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <!-- Jumbotron: sapaan awal kepada user dan shortcut tombol penting -->
                <div class="jumbotron bg-white mb-3">
                    <h2 class="display-6">Halo, CLARK!</h2>
                    <p class="lead">Selamat datang di <strong style="font-size: 16pt;">PORTAL INSPIRE</strong> Universitas Sam Ratulangi.</p>
                    <button class="btn btn-primary mb-2 mb-md-0" style="color: white">
                        <i class="fas fa-globe"></i> Website Unsrat
                    </button>
                    <button class="btn btn-primary" style="color: white">
                        <i class="fas fa-globe"></i> Dashboard Unsrat
                    </button>
                </div>
            </div>

            <!-- Informasi status dosen -->
            <div class="col-md-6">
                <div class="alert alert-danger text-center">
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
                </div>
                <div class="callout callout-info">
                    <label>STATUS DOSEN :</label> Dosen Tetap <br>
                    <label>MATA KULIAH DIAJAR :</label> E-Bisnis, Sistem Informasi, Manajemen Data <br>
                    <label>STATUS PDDIKTI :</label> AKTIF <br>
                </div>

                <div class="callout callout-info">
                    <label>JUMLAH SKS DIAJAR</label> : 12 SKS <br>
                    <label>MAHASISWA BIMBINGAN</label> : 15 Mahasiswa <br>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-red text-center">
                        <h3 class="card-title text-uppercase w-100"><strong>PENGUMUMAN</strong></h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="direct-chat-messages" style="height: 12em;">
                            <!-- List pengumuman -->
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <a href="#" target="_blank" class="product-title text-danger text-capitalize">
                                        [RAPAT] Rapat Akademik - 15 Maret 2025
                                    </a>
                                    <span class="float-right">
                                        <small class="text-muted"><i class="fas fa-clock mr-1"></i>10 Maret 2025 15:03:05</small>
                                    </span><br>
                                    Ditujukan kepada: <span class="badge bg-success">SELURUH DOSEN</span>
                                    <p class="product-description">
                                        <small>Harap hadir dalam rapat akademik pada 18 Maret 2025 pukul 09:00 di Ruang Rapat Fakultas.</small>
                                    </p>
                                </li>
                                <li class="item">
                                    <a href="#" target="_blank" class="product-title text-danger text-capitalize">
                                        [RAPAT] Rapat Akademik - 09 Maret 2025
                                    </a>
                                    <span class="float-right">
                                        <small class="text-muted"><i class="fas fa-clock mr-1"></i>09 Maret 2025 09:13:05</small>
                                    </span><br>
                                    Ditujukan kepada: <span class="badge bg-success">SELURUH DOSEN</span>
                                    <p class="product-description">
                                        <small>Harap hadir dalam rapat akademik pada 10 Maret 2025 pukul 09:00 di Ruang Rapat Fakultas.</small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="uppercase" target="_blank">LIHAT SEMUA</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Integrasi Google Calendar untuk sinkronisasi jadwal -->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    <img src="https://inspire.unsrat.ac.id/resources/img/logo-inspire.png" width="130em" alt="inspire">
                    <img src="https://inspire.unsrat.ac.id/resources/img/gcalendar_logo.png" width="35em" alt="google calendar">
                    <br>
                    Lakukan integrasi INSPIRE anda dengan <i>Google Calendar</i>
                    <a href="https://inspire.unsrat.ac.id/kalender" style="color: #2196f3">di sini</a> untuk menampilkan kalender di beranda.
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol informasi menu -->
    <div class="box-body">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false">
                    <i class="fas fa-book mr-1"></i> Informasi Menu
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Tombol kembali -->
<a id="back-to-top" href="#" class="btn btn-danger back-to-top" role="button" style="display: none;">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- Modal Quick Menu -->
<div class="modal fade" id="modal-app-list">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100">Menu Cepat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Daftar fitur-fitur utama portal INSPIRE -->
                <div class="container-fluid text-center">
                    <a class="btn btn-app" href="/">
                        <i class="fa fa-home"></i> Beranda
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-user"></i> Biodata
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-clock"></i> Jadwal Kuliah
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-list"></i> KRS
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-list"></i> KHS
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-list-alt"></i> Transkrip
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-book"></i> Skripsi
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-envelope"></i> Email Unsrat
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-wifi"></i> Hotspot WiFi
                    </a>
                    <a class="btn btn-app" href="/">
                        <i class="fas fa-money-bill-alt"></i> Billing
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection