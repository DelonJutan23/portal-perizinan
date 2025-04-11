@extends('layouts.sbmahasiswa')

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
                <div class="jumbotron bg-white mb-3">
                    <h2 class="display-6">Halo, DELON !</h2>
                    <p class="lead">
                        Selamat datang di <span style="font-weight: bold; font-size: 16pt;">PORTAL INSPIRE</span> Universitas Sam Ratulangi.
                    </p>
                    <button class="btn btn-primary mb-2 mb-md-0" style="color: white">
                        <i class="fas fa-globe"></i> Website Unsrat
                    </button>
                    <button class="btn btn-primary" style="color: white;">
                        <i class="fas fa-globe"></i> Dashboard Unsrat
                    </button>
                </div>
            </div>

            <!-- Informasi studi mahasiswa -->
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible text-center">
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian !</h5>
                </div>
                <div class="callout callout-info">
                    <label>MASA STUDI :</label> 6 Semester <br>
                    <label>SISA MASA STUDI MAKS. :</label> 8 Semester <br>
                    <label>STATUS PDDIKTI :</label> AKTIF <br>
                </div>
                <div class="callout callout-info">
                    <label>IPK :</label> 3.95 <br>
                    <label>SKS Lulus :</label> 109
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
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <!-- List pengumuman -->
                                <li class="item">
                                    <div>
                                        <a href="#" target="_blank" class="product-title text-red text-capitalize">
                                            [E-BISNIS] Kode absensi, 10...
                                        </a>
                                        <span class="float-right">
                                            <small class="text-muted">
                                                <i class="fas fa-clock mr-1"></i>10 Maret 2025 15:03:05
                                            </small>
                                        </span>
                                        <br>Oleh:
                                        <label class="badge badge-success">DOSEN MATAKULIAH</label>
                                        Ir. SUMENGE TANGKAWAROUW GODION KAUNANG MT, Ph.D
                                        <span class="product-description">
                                            <small>136IUW23136IUW23</small>
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div>
                                        <a href="#" target="_blank" class="product-title text-red text-capitalize">
                                            [E-BISNIS] Kode absensi, 14...
                                        </a>
                                        <span class="float-right">
                                            <small class="text-muted">
                                                <i class="fas fa-clock mr-1"></i>09 Maret 2025 12:03:05
                                            </small>
                                        </span>
                                        <br>Oleh:
                                        <label class="badge badge-success">DOSEN MATAKULIAH</label>
                                        Ir. SUMENGE TANGKAWAROUW GODION KAUNANG MT, Ph.D
                                        <span class="product-description">
                                            <small>146IUW23146IUW23</small>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/" class="uppercase" target="_blank">LIHAT SEMUA</a>
                        <!-- Tombol pengumuman lengkap -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Integrasi Google Calendar untuk sinkronisasi jadwal -->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    <img alt="inspire" width="130em" src="https://inspire.unsrat.ac.id/resources/img/logo-inspire.png">
                    <img alt="google calendar" width="35em" src="https://inspire.unsrat.ac.id/resources/img/gcalendar_logo.png">
                    <br>
                    Lakukan integrasi INSPIRE anda dengan <i>Google Calendar</i>
                    <a href="https://inspire.unsrat.ac.id/kalender" style="color: #2196f3">disini</a><br>
                    untuk menampilkan kalender di beranda.
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol informasi menu -->
    <div class="box-body">
        <div class="row">
            <div class="col-12 text-right">
                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-book mr-1"></i> Informasi Menu
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Overlay sidebar jika terbuka -->
<div id="sidebar-overlay"></div>

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
                <div class="container-fluid">
                    <div class="row text-center">
                        <!-- Daftar fitur-fitur utama portal INSPIRE -->
                        <a class="btn btn-app" href="/"><i class="fa fa-home"></i> Beranda</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-user"></i> Biodata</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-clock"></i> Jadwal Kuliah</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-list"></i> KRS</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-list"></i> KHS</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-list-alt"></i> Transkrip</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-book"></i> Skripsi</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-envelope"></i> Email Unsrat</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-wifi"></i> Hotspot WiFi</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-money-bill-alt"></i> Billing</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-book-reader"></i> Beasiswa</a>
                        <a class="btn btn-app" href="/"><i class="fas fa-user-graduate"></i> Wisuda</a>
                        <<a href="/lpmahasiswa" class="nav-link">
                            <i class="fas fa-power-off"></i> Keluar
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Interaksi untuk menu sidebar collapse
    $(document).ready(function() {
        $('.nav-item.has-treeview > a').click(function(e) {
            e.preventDefault();
            $(this).parent().toggleClass('menu-open').find('> .nav-treeview').slideToggle();
        });
    });
</script>

@endsection