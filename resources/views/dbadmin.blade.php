@extends('layouts.sbadmin')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Manajemen Akun Pengguna</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan : </h4>
        <p>Halaman ini digunakan untuk mengelola data semua pengguna yang terdaftar dalam sistem. Super Admin dapat menambahkan pengguna baru, mengubah data pengguna, atau menghapus akun yang tidak aktif.</p>
    </div>

    <!-- Create -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#modalAddUser">
        <i class="fas fa-plus"></i> Tambah Pengguna
    </button>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered bg-light" style="border: 1px solid black;">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">#</th>
                    <th style="border: 1px solid black;">Id User</th>
                    <th style="border: 1px solid black;">Nama</th>
                    <th style="border: 1px solid black;">Email</th>
                    <th style="border: 1px solid black;">Prodi</th>
                    <th style="border: 1px solid black;">Angkatan</th>
                    <th style="border: 1px solid black;">Role</th>
                    <th style="border: 1px solid black;">Aksi</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                <!-- Data Pengguna (JavaScript) -->
            </tbody>
        </table>
    </div>

    <!-- Modal Add User -->
    <div class="modal fade" id="modalAddUser" tabindex="-1" aria-labelledby="modalAddUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formAddUser">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" placeholder="ID/Username" name="id_user" required>
                        <input type="text" class="form-control mb-2" placeholder="Nama Lengkap" name="nama" required>
                        <input type="email" class="form-control mb-2" placeholder="Email" name="email" required>
                        <input type="password" class="form-control mb-2" placeholder="Password" name="password" required>
                        <input type="text" class="form-control mb-2" placeholder="Program Studi/Fakultas (Opsional)" name="prodi">
                        <input type="number" class="form-control" placeholder="Tahun Masuk (Opsional)" name="angkatan" min="2000" max="2099">
                        
                        <!-- Dropdown for Role -->
                        <select class="form-control mt-2" name="role" required>
                            <option value="">Pilih Role</option>
                            <option value="superadmin">Super Admin</option>
                            <option value="admin">Admin</option>
                            <option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function () {
    // Load data pengguna saat halaman dimuat
    loadUserData();

    $('#formAddUser').on('submit', function (e) {
        e.preventDefault(); // Mencegah form untuk reload halaman

        var formData = new FormData(this);

        $.ajax({
            url: '/admin/user/tambah', // URL tujuan
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.success) {
                    alert(response.success);
                    $('#modalAddUser').modal('hide');
                    $('#formAddUser')[0].reset();
                    loadUserData(); // Reload data setelah penambahan
                }
            },
            error: function (error) {
                console.log(error);
                if(error.responseJSON && error.responseJSON.errors) {
                    // Tampilkan pesan error validasi
                    alert(error.responseJSON.message);
                } else {
                    alert('Terjadi kesalahan saat menambahkan pengguna.');
                }
            }
        });
    });

    // Fungsi untuk memuat data pengguna
    function loadUserData() {
        $.ajax({
            url: '/admin/user/data',
            method: 'GET',
            success: function(response) {
                $('#userTableBody').empty();
                response.data.forEach(function(user, index) {
                    var row = `
                        <tr>
                            <td style="border: 1px solid black;">${index + 1}</td>
                            <td style="border: 1px solid black;">${user.id_user}</td>
                            <td style="border: 1px solid black;">${user.nama}</td>
                            <td style="border: 1px solid black;">${user.email}</td>
                            <td style="border: 1px solid black;">${user.prodi || '-'}</td>
                            <td style="border: 1px solid black;">${user.angkatan || '-'}</td>
                            <td style="border: 1px solid black;">${user.role}</td>
                            <td style="border: 1px solid black;">
                                <button class="btn btn-sm btn-warning edit-user" data-id="${user.id}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger delete-user" data-id="${user.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                    $('#userTableBody').append(row);
                });
            },
            error: function(error) {
                console.log(error);
                alert('Gagal memuat data pengguna');
            }
        });
    }

    // Event untuk tombol edit dan delete bisa ditambahkan di sini
});
</script>
@endpush