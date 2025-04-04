@extends('layouts.sidebar')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Presensi</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan : </h4>
        <p>Presensi mahasiswa merupakan fasilitas yang dapat digunakan untuk melihat status absensi mahasiswa selama semester berjalan.</p>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 offset-md-4">
            <form>
                <div class="form-group">
                    <label>
                        <h4>Masukkan kode presensi:</h4>
                    </label>
                    <input oninput="tik_check_length(10, $(this).attr('id'))" name="in_kode" id="in_kode" type="text" class="form-control tik_uppercase text-center" style="font-size: 3em; padding: 0.8em 0.2em 0.8em 0.2em;" autocomplete="off">
                    <button type="submit" class="btn btn-success mt-2 w-100">SUBMIT</button>
                    <button type="button" data-toggle="modal" data-target="#mdl-riwayat" class="btn_riwayat btn btn-info btn-xs w-100 mt-1"><i class="fas fa-eye mr-2"></i>LIHAT RIWAYAT</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Riwayat Kehadiran Semester Genap 2024/2025 </h3>
                </div>
                <div class="card-body">

                    <!-- Keamanan Siber -->
                    <p class="text-right">
                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#kelas-1" aria-expanded="false">
                            TIK3062 - KEAMANAN SIBER <br>
                            Kelas G
                        </button>
                    </p>
                    <!-- Pertemuan Keamanan Siber -->
                    <div class="collapse mb-4" id="kelas-1">
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>Pertemuan ke-1</h6>
                                <span class="badge-pill">Hadir</span>
                            </div>
                            <small></small>
                        </li>
                    </div>

                    <!-- Big Data -->
                    <p class="text-right">
                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#kelas-2" aria-expanded="false">
                            TIK3122 - BIG DATA <br>
                            Kelas B </button>
                    </p>
                    <!--Pertemuan Big Data -->
                    <div class="collapse mb-4" id="kelas-2">
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>Pertemuan ke-1</h6>
                                <span class="badge-pill">Sakit</span>
                            </div>
                            <small></small>
                        </li>
                    </div>

                    <!-- Pengembangan Aplikasi Web Berbasis Framework -->
                    <p class="text-right">
                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#kelas-3" aria-expanded="false">
                            TIK3192 - PENGEMBANGAN APLIKASI WEB BERBABIS FRAMEWORK<br>
                            Kelas B </button>
                    </p>
                    <!--Pertemuan Pengembangan Aplikasi Web Berbasis Framework -->
                    <div class="collapse mb-4" id="kelas-3">
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>Pertemuan ke-1</h6>
                                <span class="badge-pill">Izin</span>
                            </div>
                            <small></small>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection