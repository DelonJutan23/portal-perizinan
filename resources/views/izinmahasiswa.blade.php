@extends('layouts.sbmahasiswa')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Izin Perkuliahan</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan : </h4>
        <p>Halaman ini digunakan untuk mengajukan izin perkuliahan apabila Anda tidak dapat hadir pada perkuliahan karena alasan tertentu.</p>
    </div>

    <div class="content">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card p-4 mt-2" style="background-color: #ffffff;">
                    <h3 class="fw-bold text-center mb-4">Isi Data Formulir Perizinan</h3>
                    <form id="permissionForm" onsubmit="return validateForm()">

                        <!-- NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM Anda" maxlength="12" required oninput="validateNIM(this)">
                            <small id="nimWarning" class="text-danger" style="display: none;">Hanya angka yang diperbolehkan.</small>
                        </div>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required oninput="validateName(this)">
                            <small id="nameWarning" class="text-danger" style="display: none;">Hanya huruf dan spasi yang diperbolehkan.</small>
                        </div>

                        <!-- Tanggal Izin -->
                        <div class="mb-3">
                            <label for="permit-day" class="form-label">Hari Izin</label>
                            <input type="date" class="form-control" id="permit-day" min="" required>
                        </div>

                        <!-- Mata Kuliah -->
                        <div class="mb-3 position-relative">
                            <label for="course" class="form-label">Mata Kuliah</label>
                            <div class="position-relative">
                                <select class="form-control form-select"
                                    id="course"
                                    required
                                    style="background-image: none !important; box-shadow: none !important;-webkit-appearance: none; -moz-appearance: none; appearance: none; background-color: transparent; padding-right: 35px;">
                                    <option value="" disabled selected>Pilih mata kuliah</option>
                                    <option value="keamanan siber">Keamanan Siber</option>
                                    <option value="big data">Big Data</option>
                                    <option value="web framework">Pengembangan Aplikasi Web Berbasis Framework</option>
                                </select>
                                <i class="fas fa-chevron-down position-absolute text-muted"
                                    style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;"></i>
                            </div>
                        </div>

                        <!-- Alasan Izin -->
                        <div class="mb-3">
                            <label for="reason" class="form-label">Alasan Izin</label>
                            <textarea class="form-control" id="reason" rows="3" required placeholder="Masukkan alasan Anda di sini..."></textarea>
                        </div>

                        <!-- Unggah Berkas Pendukung -->
                        <div class="mb-4">
                            <label for="supporting-file" class="form-label">Unggah Berkas Pendukung</label>
                            <input type="file" class="form-control" id="supporting-file" style="padding: 8px; height: 45px;">
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="d-flex justify-content-end mt-3">
                            <button type="button" class="btn btn-dark py-2 px-4 fw-bold" onclick="showConfirmation(event)">Kirim Permohonan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-Up Konfirmasi Pengiriman -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Konfirmasi Pengiriman</h5>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">
                        Apakah Anda yakin ingin mengirim permohonan izin atas nama <span id="studentName" class="fw-bold"></span>
                        untuk mata kuliah <span id="courseName" class="fw-bold"></span> pada tanggal <span id="permitDate" class="fw-bold"></span>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="cancelAction">Batal</button>
                    <button type="button" class="btn btn-success" id="confirmAction">Ya, Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Pop Up Konfirmasi -->
    <script>
        let confirmModal;

        function showConfirmation(event) {
            event.preventDefault();

            let name = document.getElementById("name").value;
            let course = document.getElementById("course").options[document.getElementById("course").selectedIndex].text;
            let permitDate = document.getElementById("permit-day").value;

            document.getElementById('studentName').innerText = name;
            document.getElementById('courseName').innerText = course;
            document.getElementById('permitDate').innerText = permitDate;

            confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
            confirmModal.show();
        }

        document.getElementById('confirmAction').onclick = function() {
            document.getElementById("permissionForm").submit();
        };

        document.getElementById('cancelAction').onclick = function() {
            confirmModal.hide();
        };
    </script>

    <!-- Script NIM -->
    <script>
        function validateNIM(input) {
            let warning = document.getElementById("nimWarning");
            let newValue = input.value.replace(/\D/g, '');
            warning.style.display = (input.value !== newValue) ? "block" : "none";
            input.value = newValue;
        }
    </script>

    <!-- Script Name -->
    <script>
        function validateName(input) {
            let warning = document.getElementById("nameWarning");
            let newValue = input.value.replace(/[^a-zA-Z\s]/g, '');
            warning.style.display = (input.value !== newValue) ? "block" : "none";
            input.value = newValue;
        }
    </script>

    <!-- Script Tanggal Izin -->
    <script>
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0'); // bulan dari 0
        const dd = String(today.getDate()).padStart(2, '0');
        const formattedToday = `${yyyy}-${mm}-${dd}`;
        document.getElementById('permit-day').setAttribute('min', formattedToday);
    </script>

    @endsection