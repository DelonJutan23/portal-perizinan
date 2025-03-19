@extends('layouts.sidebarlec')

@section('content')

<body>
    <div class="display: flex!important; justify-content-between align-items-center py-4 px-4"></div>

    <!-- Navigasi Tabs -->
    <div class="container mt-0">
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

    <!-- Konten -->
    <div class="container tab-content mt-4">
        <div id="all" class="tab-pane fade show active">
            <div class="row">
                <!-- Bagian Permintaan Izin -->
                <div class="col-md-12">
                    <div class="p-4 rounded-2" style="background-color: #f9f9f9;">
                        <h5 class="fw-bold">Permintaan Izin</h5>
                        <table class="table table-bordered table-hover mt-4">
                            <thead class="text-center">
                                <tr style="background-color: transparent;">
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Mata Kuliah</th>
                                    <th>Tanggal Izin</th>
                                    <th>Detail</th>
                                    <th>Setujui/Tolak</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr style="background-color: #f9f9f9;">
                                    <td>1</td>
                                    <td>123456789012</td>
                                    <td>Leonardo Abrams</td>
                                    <td>Matematika</td>
                                    <td>2024-03-12</td>
                                    <td>
                                        <a href="/detailpermissionlecturer" class="btn btn-sm"
                                            style="background-color: #205781; color: white; border: none;">
                                            Lihat Detail
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 8px;">
                                            <button class="btn btn-outline-success btn-sm w-50"
                                                onclick="showConfirmation('Disetujui', 'Leonardo Abrams', 'Matematika')">
                                                Setujui
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm w-50"
                                                onclick="showConfirmation('Ditolak', 'Leonardo Abrams', 'Matematika')">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="background-color: #f9f9f9;">
                                    <td>2</td>
                                    <td>987654321098</td>
                                    <td>Alice Johnson</td>
                                    <td>Fisika</td>
                                    <td>2024-03-13</td>
                                    <td>
                                        <a href="/detailpermissionlecturer" class="btn btn-sm"
                                            style="background-color: #205781; color: white; border: none;">
                                            Lihat Detail
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 8px;">
                                            <button class="btn btn-outline-success btn-sm w-50"
                                                onclick="showConfirmation('Disetujui', 'Alice Johnson', 'Matematika')">
                                                Setujui
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm w-50"
                                                onclick="showConfirmation('Ditolak', 'Alice Johnson', 'Matematika')">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="background-color: #f9f9f9;">
                                    <td>3</td>
                                    <td>456123789456</td>
                                    <td>Michael Smith</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2024-03-14</td>
                                    <td>
                                        <a href="/detailpermissionlecturer" class="btn btn-sm"
                                            style="background-color: #205781; color: white; border: none;">
                                            Lihat Detail
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 8px;">
                                            <button class="btn btn-outline-success btn-sm w-50"
                                                onclick="showConfirmation('Disetujui', 'Michael Smith', 'Matematika')">
                                                Setujui
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm w-50"
                                                onclick="showConfirmation('Ditolak', 'Michael Smith', 'Matematika')">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="background-color: #f9f9f9;">
                                    <td>4</td>
                                    <td>123456789012</td>
                                    <td>Gracia Abrams</td>
                                    <td>Komputer</td>
                                    <td>2024-03-14</td>
                                    <td>
                                        <a href="/detailpermissionlecturer" class="btn btn-sm"
                                            style="background-color: #205781; color: white; border: none;">
                                            Lihat Detail
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 8px;">
                                            <button class="btn btn-outline-success btn-sm w-50"
                                                onclick="showConfirmation('Disetujui', 'Gracia Abrams', 'Matematika')">
                                                Setujui
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm w-50"
                                                onclick="showConfirmation('Ditolak', 'Gracia Abrams', 'Matematika')">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-Up Konfirmasi -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Konfirmasi</h5>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">
                        Apakah Anda yakin ingin <span id="actionType" class="fw-bold"></span>
                        permintaan izin dari <span id="studentName" class="fw-bold"></span>
                        untuk mata kuliah <span id="courseName" class="fw-bold"></span>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="cancelAction">Batal</button>
                    <button type="button" class="btn btn-success" id="confirmAction">Ya, Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Controls -->
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

    <!-- Script Pop-Up Konfirmasi -->
    <script>
        function showConfirmation(action, name, subject) {
            document.getElementById('actionType').innerText = action.toLowerCase();
            document.getElementById('studentName').innerText = name;
            document.getElementById('courseName').innerText = subject;

            let confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'), {
                keyboard: true
            });

            confirmModal.show();

            document.getElementById('confirmAction').onclick = function() {
                alert("Berhasil " + action.toLowerCase() + " permintaan izin dari " + name);
                confirmModal.hide();
            };

            document.getElementById('cancelAction').onclick = function() {
                confirmModal.hide();
            };
        }
    </script>

</body>

@endsection