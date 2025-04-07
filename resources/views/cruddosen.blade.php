@extends('layouts.sbadmin')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Manajemen Akun Dosen</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan:</h4>
        <p>Halaman ini digunakan oleh Super Admin untuk mengelola akun dosen. Anda dapat menambahkan, mengubah, dan menghapus data dosen.</p>
    </div>

    <!-- CREATE Button -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#modalAddDosen">
        <i class="fas fa-plus"></i> Tambah Dosen
    </button>

    <!-- Table -->
    <table class="table table-bordered bg-light" style="border: 1px solid black;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">#</th>
                <th style="border: 1px solid black;">NIP</th>
                <th style="border: 1px solid black;">Nama Dosen</th>
                <th style="border: 1px solid black;">Email</th>
                <th style="border: 1px solid black;">Jabatan</th>
                <th style="border: 1px solid black;">Aksi</th>
            </tr>
        </thead>
        <tbody id="dosenTableBody">
            <!-- Dosen list rendered here -->
        </tbody>
    </table>

    <!-- Modal: Tambah Dosen -->
    <div class="modal fade" id="modalAddDosen" tabindex="-1" aria-labelledby="modalAddDosenLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formAddDosen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Dosen</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" placeholder="NIP" id="addNip" required>
                        <input type="text" class="form-control mb-2" placeholder="Nama Dosen" id="addNama" required>
                        <input type="email" class="form-control mb-2" placeholder="Email" id="addEmail" required>
                        <input type="password" class="form-control mb-2" placeholder="Password" id="addPassword" required>
                        <input type="text" class="form-control" placeholder="Jabatan (Opsional)" id="addJabatan">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal: Edit Dosen -->
    <div class="modal fade" id="modalEditDosen" tabindex="-1" aria-labelledby="modalEditDosenLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formEditDosen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Dosen</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editIndex">
                        <input type="text" class="form-control mb-2" id="editNip" required>
                        <input type="text" class="form-control mb-2" id="editNama" required>
                        <input type="email" class="form-control mb-2" id="editEmail" required>
                        <input type="password" class="form-control mb-2" id="editPassword" required>
                        <input type="text" class="form-control" id="editJabatan">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JS CRUD Dosen -->
    <script>
        let dosenList = [
            {
                nip: "19800816",
                nama: "Dr. Andi M.",
                email: "andi@univ.ac.id",
                password: "rahasia123",
                jabatan: "Sekretaris Jurusan"
            }
        ];

        function renderDosen() {
            let html = "";
            dosenList.forEach((dosen, index) => {
                html += `
                    <tr>
                        <td style="border: 1px solid black;">${index + 1}</td>
                        <td style="border: 1px solid black;">${dosen.nip}</td>
                        <td style="border: 1px solid black;">${dosen.nama}</td>
                        <td style="border: 1px solid black;">${dosen.email}</td>
                        <td style="border: 1px solid black;">${dosen.jabatan || '-'}</td>
                        <td style="border: 1px solid black;">
                            <button class="btn btn-sm btn-warning" onclick="openEditDosen(${index})"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger" onclick="deleteDosen(${index})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                `;
            });
            document.getElementById("dosenTableBody").innerHTML = html;
        }

        // CREATE
        document.getElementById("formAddDosen").addEventListener("submit", function(e) {
            e.preventDefault();
            const newDosen = {
                nip: document.getElementById("addNip").value,
                nama: document.getElementById("addNama").value,
                email: document.getElementById("addEmail").value,
                password: document.getElementById("addPassword").value,
                jabatan: document.getElementById("addJabatan").value
            };
            dosenList.push(newDosen);
            $('#modalAddDosen').modal('hide');
            renderDosen();
            this.reset();
        });

        // READ + OPEN Modal EDIT
        function openEditDosen(index) {
            const d = dosenList[index];
            document.getElementById("editIndex").value = index;
            document.getElementById("editNip").value = d.nip;
            document.getElementById("editNama").value = d.nama;
            document.getElementById("editEmail").value = d.email;
            document.getElementById("editPassword").value = d.password;
            document.getElementById("editJabatan").value = d.jabatan;
            $('#modalEditDosen').modal('show');
        }

        // UPDATE
        document.getElementById("formEditDosen").addEventListener("submit", function(e) {
            e.preventDefault();
            const i = document.getElementById("editIndex").value;
            dosenList[i] = {
                nip: document.getElementById("editNip").value,
                nama: document.getElementById("editNama").value,
                email: document.getElementById("editEmail").value,
                password: document.getElementById("editPassword").value,
                jabatan: document.getElementById("editJabatan").value
            };
            $('#modalEditDosen').modal('hide');
            renderDosen();
        });

        // DELETE
        function deleteDosen(index) {
            if (confirm("Yakin ingin menghapus data dosen ini?")) {
                dosenList.splice(index, 1);
                renderDosen();
            }
        }

        // Initial render
        renderDosen();
    </script>

@endsection
