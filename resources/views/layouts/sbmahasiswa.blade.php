<html style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INSPIRE Portal</title>
    <link rel="icon" href="https://inspire.unsrat.ac.id/resources/img/logo-unsrat.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal INSPIRE Universitas Sam Ratulangi">
    <meta name="keywords" content="INSPIRE, UNSRAT, inspire, Universitas, Sam, Ratulangi, Universitas Sam Ratulangi, portal inspire, Portal Inspire UNSRAT">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/fonts/philosopher/philosopher.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/tik_unsrat.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/datatables.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/additional/layout.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/personal_page.css">
    <link rel="stylesheet" type="text/css" src="https://inspire.unsrat.ac.id/resources/additional/beranda.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fullcalendar-latest/lib/main.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <title>@yield('title', 'Sistem Perizinan')</title>
</head>

<body class="layout-navbar-fixed layout-fixed">

    <canvas id="container_fireworks" style="display: none;">
    </canvas>

    <span id="main_content">
        <div id="loading-container" style="display: none;">
            <div id="loading">
                <img alt="unsrat" id="loading-logo" src="https://inspire.unsrat.ac.id/resources/img/unsrat_mosaic.png">
                memuat ..
            </div>
        </div>
        <div id="alert_js"></div>
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <a href="/">
                        <li class="nav-item" rel="tooltip" title="" data-original-title="INSPIRE Kalender">
                            <span class="nav-link">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                        </li>
                    </a>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" id="notifikasi-inspire">
                            <i class="fa fa-flag"></i>
                            <span class="badge badge-warning navbar-badge">5</span>
                        </a>
                        <div class="dropdown-menu scrollable-menu dropdown-menu-lg dropdown-menu-right">
                            <div id="notifikasi-dropdown-header">
                            </div>
                            <div id="notifikasi-dropdown">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0 d-none d-sm-block" data-toggle="dropdown" href="#profile_dropdown">
                            <div class="image">
                                <object data="https://inspire.unsrat.ac.id/uploads/biodata/foto_profil/371804.jpg" type="image/jpg" width="22px">
                                    <img src="https://inspire.unsrat.ac.id/resources/img/user.png" class="img-circle" alt="User Image" width="22px">
                                </object>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-2 pr-3 d-none d-sm-block" data-toggle="dropdown" href="#" style="line-height: 1em;">
                            <small><span class="text-uppercase">DELON DYNES JUTAN</span></small><br>
                            <small>220211060071</small>
                        </a>
                        <a class="nav-link button pl-2 pr-3 d-block d-sm-none" data-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="profile_dropdown">
                            <span class="dropdown-item dropdown-header">
                                <object data="https://inspire.unsrat.ac.id/uploads/biodata/foto_profil/371804.jpg" type="image/jpg" style="width: 4cm; height: auto;">
                                    <img alt="foto profil" src="https://inspire.unsrat.ac.id/resources/img/user.png">
                                </object>
                            </span>
                            <a href="https://inspire.unsrat.ac.id/riwayat/riwayat" class="dropdown-item dropdown-footer text-bold text-uppercase">
                                Riwayat Login<i class="nav-icon fas fa-history ml-2"></i>
                            </a>
                            <a href="https://inspire.unsrat.ac.id/ubah_password/ubah_password" class="dropdown-item dropdown-footer text-bold text-uppercase">
                                Ubah Password<i class="nav-icon fas fa-unlock-alt ml-2"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#mdl-logout" class="dropdown-item dropdown-footer text-bold text-uppercase">
                                KELUAR<i class="nav-icon fas fa-sign-out-alt ml-2"></i>
                            </a>
                        </div>
                    </li>

                </ul>
            </nav>

            <aside class="main-sidebar sidebar-light-danger elevation-4">
                <a href="" class="brand-link bg-danger">
                    <img src="https://inspire.unsrat.ac.id/resources/img/logo-unsrat-mosaic.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                    <span class="brand-text font-weight-light" style="font-size: 15pt" id="navbar-title">INSPIRE</span>
                </a>
                <div class="wrapper">
                    <div class="sidebar">
                        <nav class="mt-4">
                            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column text-sm" data-widget="treeview" role="menu" data-accordion="true">
                                <li class="nav-item">
                                    <a href="/dbmahasiswa" class="nav-link active">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>Beranda</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            Biodata
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Biodata Saya</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Personal Page</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Ubah Data Pribadi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Ubah Data Orang Tua</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Ubah Data Keluarga</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Berkas Pendukung</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Rekening Bank</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-book-reader"></i>
                                        <p>
                                            Perkuliahan
                                            <i class="fas fa-angle-left right"></i>
                                            <span id="menu_perkuliahan" class="menu_perkuliahan badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Kampus Merdeka
                                                    <i class="right fas fa-angle-left"></i>
                                                    <span id="menu_kampus_merdeka" class="menu_kampus_merdeka badge badge-info right"></span>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Pendaftaran</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-notifid="menu_kampus_merdeka">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Komunikasi
                                                            <span class="badge_notif menu_perkuliahan menu_kampus_merdeka badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Jadwal</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>KRS</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/presensi" class="nav-link {{ request()->fullUrlIs(url('/presensi')) ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Presensi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/izinmahasiswa" class="nav-link {{ request()->fullUrlIs(url('/izinmahasiswa')) ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Izin Perkuliahan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Materi Kuliah</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Tugas Kuliah
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Tugas Individu</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Tugas Studi Kasus</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Tugas Proyek</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item" data-notifid="menu_forum_diskusi">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Forum Diskusi
                                                    <span class="badge_notif menu_perkuliahan badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ujian Akhir <br>Semester</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>EPOM</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>KHS</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Transkrip</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Bimbingan Khusus</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-book-open"></i>
                                        <p>
                                            E-Learning Unsrat
                                            <i class="fas fa-angle-left right"></i>
                                            <span id="menu_elearning" class="menu_elearning badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Unsrat@Learn</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Microsoft Education <i class="right fas fa-angle-left"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Microsoft Teams</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Teams Meeting</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Google Classroom</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-friends"></i>
                                        <p>
                                            Kemahasiswaan
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Beasiswa</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Prestasi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Kompetisi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Organisasi Mahasiswa <i class="right fas fa-angle-left"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Himpunan <br>Mahasiswa</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Unit Pelayanan <br>Kerohanian</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>UKM <i class="right fas fa-angle-left"></i></p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>UKM Fakultas</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>UKM UNSRAT</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Penyesuaian UKT</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Angsuran UKT</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Bantuan UKT</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-street-view"></i>
                                        <p>KKT <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Informasi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Pendaftaran</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pelaksanaan <i class="right fas fa-angle-left"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item has-treeview">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pelaporan KKT<i class="right fas fa-angle-left"></i></p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Laporan Harian KKT</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Laporan Akhir KKT</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="https://inspire.unsrat.ac.id/kkt/pembimbingan" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Pembimbingan KKT</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Presensi KKT</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-microscope"></i>
                                        <p>
                                            <i class="fas fa-angle-left right"></i>
                                            PKM Penelitian <br>Mahasiswa
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Informasi Proposal <br>Penelitian</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pengajuan Proposal <br>Penelitian</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Konfirmasi Proposal <br>Penelitian</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Capaian Luaran
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Laporan Kemajuan</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Laporan Akhir</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Artikel Ilmiah</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Produk Program</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Surat Tugas <br>Penelitian</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-comments"></i>
                                        <p>Bimbingan Akademik <i class="right fas fa-angle-left"></i>
                                            <span id="menu_bimbingan_akademik" class="menu_bimbingan_akademik badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" data-notifid="menu_komunikasi_mahasiswa">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Komunikasi Pembimbing
                                                    <span class="badge_notif menu_bimbingan_akademik badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-landmark"></i>
                                        <p>
                                            Praktik Lapangan/Magang
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Pembimbing
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pengajuan Magang</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pelaksanaan Magang</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Seminar
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pengajuan Seminar</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pelaksanaan Seminar</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>
                                            Skripsi / Tesis
                                            <i class="fas fa-angle-left right"></i>
                                            <span id="menu_skripsi" class="menu_skripsi badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Seminar Proposal</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Pembimbingan
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pengajuan</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item" data-notifid="menu_komunikasi_skripsi_mahasiswa">
                                                    <a href="#" class="nav-link">
                                                        <i class="nav-icon far fa-circle"></i>
                                                        <p>Pelaksanaan
                                                            <span class="badge_notif menu_skripsi badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class=" far fa-circle nav-icon"></i>
                                                        <p>Perubahan</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Seminar Hasil</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ujian Akhir</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-coffee"></i>
                                        <p>Mahasiswa Kewirausahaan</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-calendar-times"></i>
                                        <p>Cuti &amp; Pindah <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Cuti Akademik <i class="right fas fa-angle-left"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Data Cuti Saya</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Ambil Cuti</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pindah Prodi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pindah Keluar</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-check"></i>
                                        <p>Pengaktifan Kembali</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-graduate"></i>
                                        <p>
                                            Wisuda
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Info</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Kuesioner</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Berkas Umum</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Berkas Tugas Akhir</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Data Tugas Akhir</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Daftar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Validasi</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-bookmark"></i>
                                        <p>Perpustakaan <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Perpustakaan Unsrat</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" target="_blank">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>e-Library Unsrat</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Koleksi Daring</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Pengajuan Repository</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="#"></i>
                                        <p>
                                            Naskah Dinas
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                <p>Surat Edaran</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-syringe"></i>
                                        <p>Layanan Kesehatan <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Daftar Vaksinasi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle"></i>
                                                <p>Lapor Vaksinasi</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview" data-notifid="menu_konseling">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-heart"></i>
                                        <p>Konseling
                                            <span class="badge_notif menu_konseling badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-th-large"></i>
                                        <p>Layanan Lain <i class="right fas fa-angle-left"></i>
                                            <span id="menu_layanan_lain" class="menu_layanan_lain badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" data-notifid="menu_event_rapat">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-calendar-day"></i>
                                                <p>Event/Rapat</p>
                                                <span class="badge_notif menu_layanan_lain badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fas fa-user-plus nav-icon"></i>
                                                <p>Riwayat Registrasi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-money-bill-alt"></i>
                                                <p>Billing</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-calendar-alt"></i>
                                                <p>Kalender</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-envelope"></i>
                                                <p>Email Unsrat</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-wifi nav-icon"></i>
                                                <p>UNSRAT WiFi <i class="right fas fa-angle-left"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Status</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                                        <p>Ganti Password</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-bell"></i>
                                                <p>Notifikasi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-desktop"></i>
                                                <p>Daftar Tes Online</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-th-large"></i>
                                                <p>Pelatihan / Workshop</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cart-arrow-down"></i>
                                                <p>Peminjaman Fasilitas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-registered nav-icon"></i>
                                                <p>Pengajuan HAKI</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-crop-alt"></i>
                                                <p>Short Link</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-sticky-note"></i>
                                                <p>Survey Layanan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-info"></i>
                                        <p>Bantuan Pengguna <i class="right fas fa-angle-left"></i>
                                            <span id="menu_bantuan_pengguna" class="menu_bantuan_pengguna badge badge-info right"></span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item" data-notifid="menu_panduan_inspire">
                                            <a href="#" target="_blank" class="nav-link">
                                                <i class="nav-icon fas fa-book"></i>
                                                <p>Panduan Inspire
                                                    <span class="badge_notif menu_bantuan_pengguna badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview" data-notifid="menu_tiket_saya">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-question-circle"></i>
                                                <p>Helpdesk <i class="right fas fa-angle-left"></i>
                                                    <span id="menu_helpdesk" class="menu_helpdesk badge badge-info right"></span>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Pertanyaan</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-notifid="menu_tiket_saya">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Tiket Saya
                                                            <span class="badge_notif menu_bantuan_pengguna menu_helpdesk badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item" data-notifid="menu_panduan_inspire">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-bullhorn"></i>
                                                <p>eLapor
                                                    <span class="badge_notif menu_bantuan_pengguna badge badge-danger right" rel="tooltip" title="" data-original-title="Klik untuk detail notifikasi"></span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
            </aside>

            <!-- MAIN CONTENT -->
            <div class="content-wrapper" style="min-height: 760.03125px;">
                @yield('content')
            </div>
            <div id="sidebar-overlay"></div>
        </div>

        <footer class="main-footer text-sm">
            <strong>Copyright © 2025 UPT-TIK UNSRAT</strong> * All rights reserved. <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.70.7
            </div>
        </footer>

        <!-- button scroll to top -->
        <a id="back-to-top" href="#" class="btn btn-danger back-to-top" role="button" style="display: none;">
            <i class="fas fa-chevron-up"></i>
        </a>

        <!-- modal quick menu -->
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
                            <div class="row">
                                <div class="text-center">
                                    <!-- quick menu -->
                                    <a class="btn btn-app" href="#">
                                        <i class="fa fa-home"></i> Beranda
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-user"></i> Biodata
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-clock"></i> Jadwal Kuliah
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-list"></i> KRS
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-list"></i> KHS
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-list-alt"></i> Transkrip
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-book"></i> Skripsi
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-envelope"></i> Email Unsrat
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-wifi"></i> Hotspot WiFi
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-money-bill-alt"></i> Billing
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-book-reader"></i> Beasiswa
                                    </a>
                                    <a class="btn btn-app" href="#">
                                        <i class="fas fa-user-graduate"></i> Wisuda
                                    </a>
                                    <a class="btn btn-app" id="btn-app-logout" data-toggle="modal" data-target="#mdl-logout">
                                        <i class="fas fa-power-off"></i> Keluar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </span>

    <script>
        $(document).ready(function() {
            $('.nav-item.has-treeview > a').click(function(e) {
                e.preventDefault();
                var parent = $(this).parent();

                if (parent.hasClass('menu-open')) {
                    parent.removeClass('menu-open');
                    parent.find('> .nav-treeview').slideUp();
                } else {
                    $('.nav-item.has-treeview').removeClass('menu-open');
                    $('.nav-treeview').slideUp();

                    parent.addClass('menu-open');
                    parent.find('> .nav-treeview').slideDown();
                }
            });
        });
    </script>

    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WV2F029BHZ&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-K1MTZDKJT5&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-K1MTZDKJT5&amp;l=dataLayer&amp;cx=c&amp;gtm=457e53d0za200&amp;tag_exp=102308675~102482433~102587591~102717422~102788824~102813109~102814060~102825837~102879719"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WV2F029BHZ&amp;l=dataLayer&amp;cx=c&amp;gtm=457e53d0za200&amp;tag_exp=102308675~102482433~102587591~102717422~102788824~102813109~102814060~102825837~102879719"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/dist/js/adminlte.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/dist/js/demo.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/tik_class.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fullcalendar-latest/lib/main.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/jquery/jquery.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/popper/popper.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/usr_template.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/tik_function.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>

</html>