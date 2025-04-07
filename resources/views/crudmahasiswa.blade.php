@extends('layouts.sbadmin')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Manajemen Akun Mahasiswa</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan : </h4>
        <p>Halaman ini digunakan untuk mengelola data akun mahasiswa yang terdaftar dalam sistem. Super Admin dapat menambahkan mahasiswa baru, mengubah data mahasiswa, atau menghapus akun mahasiswa yang tidak aktif.</p>
    </div>

    <!-- CREATE Button -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#modalAddMahasiswa">
        <i class="fas fa-plus"></i> Tambah Mahasiswa
    </button>

    <!-- Table READ -->
    <table class="table table-bordered bg-light" style="border: 1px solid black;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">#</th>
                <th style="border: 1px solid black;">NIM</th>
                <th style="border: 1px solid black;">Nama Mahasiswa</th>
                <th style="border: 1px solid black;">Email</th>
                <th style="border: 1px solid black;">Program Studi</th>
                <th style="border: 1px solid black;">Angkatan</th>
                <th style="border: 1px solid black;">Aksi</th>
            </tr>
        </thead>
        <tbody id="mahasiswaTableBody">
            <!-- Data Mahasiswa -->
        </tbody>
    </table>

    <!-- Pop Up CREATE -->
    <div class="modal fade" id="modalAddMahasiswa" tabindex="-1" aria-labelledby="modalAddMahasiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formAddMahasiswa">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" placeholder="NIM" id="addIdMahasiswa" required>
                        <input type="text" class="form-control mb-2" placeholder="Nama Mahasiswa" id="addNamaMahasiswa" required>
                        <input type="email" class="form-control mb-2" placeholder="Email" id="addEmailMahasiswa" required>
                        <input type="password" class="form-control mb-2" placeholder="Password" id="addPasswordMahasiswa" required>
                        <input type="text" class="form-control mb-2" placeholder="Program Studi (Opsional)" id="addProdiMahasiswa">
                        <input type="number" class="form-control" placeholder="Angkatan (Opsional)" id="addAngkatanMahasiswa" min="2000" max="2099">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Pop Up UPDATE -->
    <div class="modal fade" id="modalEditMahasiswa" tabindex="-1" aria-labelledby="modalEditMahasiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formEditMahasiswa">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editIndexMahasiswa">
                        <input type="text" class="form-control mb-2" id="editIdMahasiswa" required>
                        <input type="text" class="form-control mb-2" id="editNamaMahasiswa" required>
                        <input type="email" class="form-control mb-2" id="editEmailMahasiswa" required>
                        <input type="password" class="form-control mb-2" id="editPasswordMahasiswa" required>
                        <input type="text" class="form-control mb-2" id="editProdiMahasiswa">
                        <input type="number" class="form-control" id="editAngkatanMahasiswa" min="2000" max="2099">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Script CRUD Mahasiswa -->
    <script>
        let mahasiswaList = [{
            id_mahasiswa: "210001001",
            nama_mahasiswa: "Budi Santoso",
            email: "budi@student.univ.com",
            password: "123456",
            prodi: "Teknik Informatika",
            angkatan: 2021
        }];

        function renderMahasiswa() {
            let html = "";
            mahasiswaList.forEach((mhs, index) => {
                html += `
                <tr>
                    <td style="border: 1px solid black;">${index + 1}</td>
                    <td style="border: 1px solid black;">${mhs.id_mahasiswa}</td>
                    <td style="border: 1px solid black;">${mhs.nama_mahasiswa}</td>
                    <td style="border: 1px solid black;">${mhs.email}</td>
                    <td style="border: 1px solid black;">${mhs.prodi || '-'}</td>
                    <td style="border: 1px solid black;">${mhs.angkatan || '-'}</td>
                    <td style="border: 1px solid black;">
                        <button class="btn btn-sm btn-warning" onclick="openEditMahasiswa(${index})"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteMahasiswa(${index})"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>`;
            });
            document.getElementById("mahasiswaTableBody").innerHTML = html;
        }

        // CREATE
        document.getElementById("formAddMahasiswa").addEventListener("submit", function(e) {
            e.preventDefault();
            const newMahasiswa = {
                id_mahasiswa: document.getElementById("addIdMahasiswa").value,
                nama_mahasiswa: document.getElementById("addNamaMahasiswa").value,
                email: document.getElementById("addEmailMahasiswa").value,
                password: document.getElementById("addPasswordMahasiswa").value,
                prodi: document.getElementById("addProdiMahasiswa").value,
                angkatan: document.getElementById("addAngkatanMahasiswa").value
            };
            mahasiswaList.push(newMahasiswa);
            $('#modalAddMahasiswa').modal('hide');
            renderMahasiswa();
            this.reset();
        });

        // OPEN EDIT MODAL
        function openEditMahasiswa(index) {
            const m = mahasiswaList[index];
            document.getElementById("editIndexMahasiswa").value = index;
            document.getElementById("editIdMahasiswa").value = m.id_mahasiswa;
            document.getElementById("editNamaMahasiswa").value = m.nama_mahasiswa;
            document.getElementById("editEmailMahasiswa").value = m.email;
            document.getElementById("editPasswordMahasiswa").value = m.password;
            document.getElementById("editProdiMahasiswa").value = m.prodi;
            document.getElementById("editAngkatanMahasiswa").value = m.angkatan;
            $('#modalEditMahasiswa').modal('show');
        }

        // UPDATE
        document.getElementById("formEditMahasiswa").addEventListener("submit", function(e) {
            e.preventDefault();
            const i = document.getElementById("editIndexMahasiswa").value;
            mahasiswaList[i] = {
                id_mahasiswa: document.getElementById("editIdMahasiswa").value,
                nama_mahasiswa: document.getElementById("editNamaMahasiswa").value,
                email: document.getElementById("editEmailMahasiswa").value,
                password: document.getElementById("editPasswordMahasiswa").value,
                prodi: document.getElementById("editProdiMahasiswa").value,
                angkatan: document.getElementById("editAngkatanMahasiswa").value
            };
            $('#modalEditMahasiswa').modal('hide');
            renderMahasiswa();
        });

        // DELETE
        function deleteMahasiswa(index) {
            if (confirm("Yakin ingin menghapus mahasiswa ini?")) {
                mahasiswaList.splice(index, 1);
                renderMahasiswa();
            }
        }

        // Init
        renderMahasiswa();
    </script>

@endsection
