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

    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
    <div style="background-color: #d4edda; padding: 10px; border: 1px solid #c3e6cb; color: #155724; border-radius: 4px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tampilkan error validasi -->
    @if ($errors->any())
    <div style="background-color: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; color: #721c24; border-radius: 4px; margin-bottom: 20px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="content">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card p-4 mt-2" style="background-color: #ffffff;">
                    <h3 class="fw-bold text-center mb-4">Isi Data Formulir Perizinan</h3>
                    <form id="permissionForm" method="POST" action="{{ url('/izinmahasiswa') }}" enctype="multipart/form-data" onsubmit="return validateForm(event)">
                        @csrf

                        <!-- Input NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim"
                                value="{{ Auth::user()->id_user }}" readonly>
                        </div>

                        <!-- Input Nama -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ Auth::user()->nama }}" readonly>
                        </div>

                        <!-- Input tanggal izin -->
                        <div class="mb-3">
                            <label for="permit-day" class="form-label">Hari Izin</label>
                            <input type="date" class="form-control" id="permit-day" name="permit_day" min="" required>
                        </div>

                        <!-- Mata kuliah -->
                        <div class="mb-3 position-relative">
                            <label for="course" class="form-label">Mata Kuliah</label>
                            <select class="form-control form-select" id="course" name="course" required>
                                <option value="" disabled selected>Pilih mata kuliah</option>
                                <option value="keamanan siber">Keamanan Siber</option>
                                <option value="big data">Big Data</option>
                                <option value="web framework">Pengembangan Aplikasi Web Berbasis Framework</option>
                            </select>
                        </div>

                        <!-- Alasan izin -->
                        <div class="mb-3">
                            <label for="reason" class="form-label">Alasan Izin</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" required placeholder="Masukkan alasan Anda di sini..."></textarea>
                        </div>

                        <!-- File pendukung -->
                        <div class="mb-4">
                            <label for="supporting-file" class="form-label">Unggah Berkas Pendukung</label>
                            <input type="file" class="form-control" id="supporting-file" name="supporting_file">
                        </div>

                        <!-- Tombol kirim -->
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-dark py-2 px-4 fw-bold">Kirim Permohonan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal konfirmasi pengiriman -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Konfirmasi Pengiriman</h5>
                    <button type="button" class="close text-dark border-0 bg-transparent" data-dismiss="modal" aria-label="Tutup" style="font-size: 1.5rem; line-height: 1;">
                        &times;
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">
                        Apakah Anda yakin ingin mengirim permohonan izin untuk mata kuliah <span id="courseName" class="fw-bold"></span> pada tanggal <span id="permitDate" class="fw-bold"></span>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="cancelAction">Batal</button>
                    <button type="button" class="btn btn-success" id="confirmAction">Ya, Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk konfirmasi -->
    <script>
        let confirmModal;

        function showConfirmation(event) {
            event.preventDefault();

            let name = document.getElementById("name").value;
            let course = document.getElementById("course").options[document.getElementById("course").selectedIndex].text;
            let permitDate = document.getElementById("permit-day").value;

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

    <!-- Script validasi NIM hanya angka -->
    <script>
        function validateNIM(input) {
            let warning = document.getElementById("nimWarning");
            let newValue = input.value.replace(/\D/g, '');
            warning.style.display = (input.value !== newValue) ? "block" : "none";
            input.value = newValue;
        }
    </script>

    <!-- Script validasi Nama hanya huruf dan spasi -->
    <script>
        function validateName(input) {
            let warning = document.getElementById("nameWarning");
            let newValue = input.value.replace(/[^a-zA-Z\s]/g, '');
            warning.style.display = (input.value !== newValue) ? "block" : "none";
            input.value = newValue;
        }
    </script>

    <!-- Mengatur tanggal (tidak bisa pilih tanggal kemarin) -->
    <script>
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const formattedToday = `${yyyy}-${mm}-${dd}`;
        document.getElementById('permit-day').setAttribute('min', formattedToday);
    </script>

    <!-- Validasi semua input sebelum submit -->
    <script>
        function validateForm() {
            const nim = document.getElementById("nim");
            const name = document.getElementById("name");
            const permitDate = document.getElementById("permit-day");
            const course = document.getElementById("course");
            const reason = document.getElementById("reason");

            if (!nim.value.trim()) {
                alert("Mohon isi NIM terlebih dahulu.");
                nim.focus();
                return false;
            }

            if (!name.value.trim()) {
                alert("Mohon isi Nama terlebih dahulu.");
                name.focus();
                return false;
            }

            if (!permitDate.value) {
                alert("Mohon pilih Tanggal Izin.");
                permitDate.focus();
                return false;
            }

            if (!course.value) {
                alert("Mohon pilih Mata Kuliah.");
                course.focus();
                return false;
            }

            if (!reason.value.trim()) {
                alert("Mohon isi Alasan Izin.");
                reason.focus();
                return false;
            }

            showConfirmation(event);
            return false;
        }
    </script>

    @endsection