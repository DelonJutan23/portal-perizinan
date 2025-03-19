@extends('layouts.sidebarlec')

@section('content')

<body>
    <div class="display: flex!important; justify-content-between align-items-center py-4 px-4">

        <!-- Navigasi Tabs -->
        <div class="container mt-4">
            <ul class="nav nav-pills d-inline-flex p-2 rounded-3" style="border-radius: 10px; background-color: #ffffff;">
                <li class="nav-item">
                    <button class="nav-link-bold border-0 shadow-none tab-btn" style="border-radius: 5px;"
                        data-href="/reqpermit"
                        onclick="setActive(this, '/reqpermit');">
                        Semua Permintaan
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link-bold border-0 shadow-none tab-btn" style="border-radius: 5px;"
                        data-href="/historylecturer"
                        onclick="setActive(this, '/historylecturer');">
                        Riwayat
                    </button>
                </li>
            </ul>
        </div>

        <!-- Pencarian dan Filter -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center p-3"
                style="overflow: hidden; border-radius: 8px;">
                <h4 class="fw-bold mb-0">Riwayat Perizinan</h4>
                <div class="d-flex align-items-center" style="gap: 12px;">
                    <!-- Input Pencarian -->
                    <div class="position-relative" style="width: 350px;">
                        <i class="fas fa-search position-absolute"
                            style="top: 50%; left: 10px; transform: translateY(-50%); font-size: 14px; color: black;"></i>
                        <input type="text" id="searchInput" class="form-control"
                            placeholder="Cari berdasarkan nama atau mata kuliah"
                            style="border-radius: 8px; border: 1px solid #000000; height: 40px; padding-left: 35px; background-color: transparent; color: #000000;">
                    </div>
                    <!-- Filter Status -->
                    <div class="position-relative" style="width: 125px;">
                        <select id="statusFilter" class="form-select"
                            style="border-radius: 8px; border: 1px solid #000000; width: 100%; height: 40px; color: #000000; background-image: none !important; box-shadow: none !important; -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 30px; padding-left: 20px; background-color: transparent;">
                            <option value="">Semua</option>
                            <option value="Approved">Disetujui</option>
                            <option value="Rejected">Ditolak</option>
                        </select>
                        <i class="fas fa-chevron-down position-absolute text-muted"
                            style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Riwayat Izin -->
        <div class="container my-4">
            <div class="table-responsive">
                <table class="table align-middle text-center table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Status</th>
                            <th>Berkas Pendukung</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>1</td>
                            <td>123456789012</td>
                            <td>Leonardo</td>
                            <td>Keamanan Siber</td>
                            <td><span class="badge bg-success text-light d-flex align-items-center justify-content-center" style="height: 30px; font-size: 12px;">Disetujui</span></td>
                            <td><button class="btn btn-primary btn-sm w-50" style="background-color: #205781; color: white; border: none;">Lihat</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>443322119012</td>
                            <td>Emily Brown</td>
                            <td>Pemrograman Web</td>
                            <td><span class="badge bg-danger text-light d-flex align-items-center justify-content-center" style="height: 30px; font-size: 12px;">Ditolak</span></td>
                            <td><button class="btn btn-primary btn-sm w-50" style="background-color: #205781; color: white; border: none;">Lihat</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>987654321012</td>
                            <td>Michael Smith</td>
                            <td>Ilmu Data</td>
                            <td><span class="badge bg-success text-light d-flex align-items-center justify-content-center" style="height: 30px; font-size: 12px;">Disetujui</span></td>
                            <td><button class="btn btn-primary btn-sm w-50" style="background-color: #205781; color: white; border: none;">Lihat</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>139293933999</td>
                            <td>Jackson Smith</td>
                            <td>Ilmu Data</td>
                            <td><span class="badge bg-danger text-light d-flex align-items-center justify-content-center" style="height: 30px; font-size: 12px;">Ditolak</span></td>
                            <td><button class="btn btn-primary btn-sm w-50" style="background-color: #205781; color: white; border: none;">Lihat</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Navigasi Halaman -->
        <div class="container mt-4">
            <div class="d-flex justify-content-end align-items-center p-1 rounded-2">
                <button id="prevPage" class="btn btn-link fs-6 text-dark px-2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span id="pageInfo" class="fs-6 mx-2">1</span>
                <button id="nextPage" class="btn btn-link fs-6 text-dark px-2">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Script Pencarian -->
        <script>
            document.getElementById("searchInput").addEventListener("input", function() {
                let filter = this.value.toLowerCase();
                let rows = document.querySelectorAll("#tableBody tr");
                rows.forEach((row, index) => {
                    let name = row.children[2].textContent.toLowerCase();
                    let course = row.children[3].textContent.toLowerCase();
                    if (name.includes(filter) || course.includes(filter)) {
                        row.style.display = "";
                        row.children[0].textContent = index + 1;
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        </script>

        <!-- Script Filter -->
        <script>
            document.getElementById("statusFilter").addEventListener("change", function() {
                let filter = this.value.toLowerCase();
                let rows = document.querySelectorAll("#tableBody tr");
                let counter = 1;

                rows.forEach(row => {
                    let statusText = row.children[4].querySelector("span").textContent.trim().toLowerCase();

                    if (filter === "" || (filter === "approved" && statusText === "disetujui") || (filter === "rejected" && statusText === "ditolak")) {
                        row.style.display = "";
                        row.children[0].textContent = counter++;
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        </script>

        <!-- Script Navigasi Tabs -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let currentURL = window.location.pathname;
                let activeTab = localStorage.getItem("activeTab") || currentURL;

                document.querySelectorAll('.nav-link-bold').forEach(btn => {
                    btn.style.backgroundColor = "#ffffff";
                    btn.style.color = "#000";
                });

                let activeButton = document.querySelector(`[data-href="${activeTab}"]`);
                if (activeButton) {
                    activeButton.style.backgroundColor = "#e0e0e0";
                    activeButton.style.color = "#000";
                }
            });

            function setActive(element, url) {
                localStorage.setItem("activeTab", url);
                window.location.href = url;
            }
        </script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

@endsection