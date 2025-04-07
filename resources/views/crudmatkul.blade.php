@extends('layouts.sbadmin')

@section('content')

<!-- Header -->
<div class="content-header">
    <h1>Manajemen Mata Kuliah</h1>
</div>

<!-- Main Content -->
<div class="content">
    <div class="callout callout-info">
        <h4>Keterangan : </h4>
        <p>Halaman ini digunakan untuk mengelola data mata kuliah. Super Admin dapat menambahkan, mengedit, dan menghapus mata kuliah yang tersedia dalam sistem. Dosen pengampu dapat dipilih dari daftar dosen yang sudah terdaftar.</p>
    </div>

    <!-- CREATE Button -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#modalAddMatkul">
        <i class="fas fa-plus"></i> Tambah Mata Kuliah
    </button>

    <!-- Table READ -->
    <table class="table table-bordered bg-light" style="border: 1px solid black;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">#</th>
                <th style="border: 1px solid black;">Nama Mata Kuliah</th>
                <th style="border: 1px solid black;">Kode</th>
                <th style="border: 1px solid black;">Dosen Pengampu</th>
                <th style="border: 1px solid black;">Aksi</th>
            </tr>
        </thead>
        <tbody id="matkulTableBody">
            <!-- Mata Kuliah -->
        </tbody>
    </table>

    <!-- Pop Up CREATE -->
    <div class="modal fade" id="modalAddMatkul" tabindex="-1" aria-labelledby="modalAddMatkulLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formAddMatkul">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Mata Kuliah</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" placeholder="Nama Mata Kuliah" id="addNamaMatkul" required>
                        <input type="text" class="form-control mb-2" placeholder="Kode Mata Kuliah" id="addKodeMatkul" required>
                        <input list="dosenList" class="form-control mb-2" placeholder="Dosen Pengampu" id="addDosenPengampu" required>
                        <datalist id="dosenList">
                            <option value="Dosen A">
                            <option value="Dosen B">
                            <option value="Dosen C">
                        </datalist>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Pop Up UPDATE -->
    <div class="modal fade" id="modalEditMatkul" tabindex="-1" aria-labelledby="modalEditMatkulLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formEditMatkul">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Mata Kuliah</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editIndexMatkul">
                        <input type="text" class="form-control mb-2" id="editNamaMatkul" required>
                        <input type="text" class="form-control mb-2" id="editKodeMatkul" required>
                        <input list="dosenList" class="form-control mb-2" placeholder="Dosen Pengampu" id="editDosenPengampu" required>
                            <datalist id="dosenList">
                            <option value="Dosen A">
                            <option value="Dosen B">
                            <option value="Dosen C">
                        </datalist>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Script CRUD Mata Kuliah -->
    <script>
        // Data dummy dosen untuk pilihan
        const dosenList = [{
                id_dosen: "D001",
                nama_dosen: "Dr. Ahmad Fauzi"
            },
            {
                id_dosen: "D002",
                nama_dosen: "Siti Lestari, M.Kom"
            }
        ];

        // Data Mata Kuliah Dummy
        let matkulList = [{
            id_matkul: 1,
            nama_matkul: "Pemrograman Web",
            kode_matkul: "IF304",
            dosen_pengampu: "D001"
        }];

        function getDosenNameById(id) {
            const dosen = dosenList.find(d => d.id_dosen === id);
            return dosen ? dosen.nama_dosen : '-';
        }

        function populateDosenSelect(selectId) {
            const select = document.getElementById(selectId);
            select.innerHTML = '<option value="">Pilih Dosen Pengampu</option>';
            dosenList.forEach(d => {
                const opt = document.createElement("option");
                opt.value = d.id_dosen;
                opt.textContent = d.nama_dosen;
                select.appendChild(opt);
            });
        }

        function renderMatkul() {
            let html = "";
            matkulList.forEach((m, index) => {
                html += `
        <tr>
            <td style="border: 1px solid black;">${index + 1}</td>
            <td style="border: 1px solid black;">${m.nama_matkul}</td>
            <td style="border: 1px solid black;">${m.kode_matkul}</td>
            <td style="border: 1px solid black;">${getDosenNameById(m.dosen_pengampu)}</td>
            <td style="border: 1px solid black;">
                <button class="btn btn-sm btn-warning" onclick="openEditMatkul(${index})"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger" onclick="deleteMatkul(${index})"><i class="fas fa-trash"></i></button>
            </td>
        </tr>`;
            });
            document.getElementById("matkulTableBody").innerHTML = html;
        }


        // CREATE
        document.getElementById("formAddMatkul").addEventListener("submit", function(e) {
            e.preventDefault();
            const newMatkul = {
                id_matkul: matkulList.length + 1,
                nama_matkul: document.getElementById("addNamaMatkul").value,
                kode_matkul: document.getElementById("addKodeMatkul").value,
                dosen_pengampu: document.getElementById("addDosenPengampu").value
            };
            matkulList.push(newMatkul);
            $('#modalAddMatkul').modal('hide');
            renderMatkul();
            this.reset();
        });

        // OPEN EDIT
        function openEditMatkul(index) {
            const m = matkulList[index];
            document.getElementById("editIndexMatkul").value = index;
            document.getElementById("editNamaMatkul").value = m.nama_matkul;
            document.getElementById("editKodeMatkul").value = m.kode_matkul;
            document.getElementById("editDosenPengampu").value = m.dosen_pengampu;
            $('#modalEditMatkul').modal('show');
        }

        // UPDATE
        document.getElementById("formEditMatkul").addEventListener("submit", function(e) {
            e.preventDefault();
            const i = document.getElementById("editIndexMatkul").value;
            matkulList[i] = {
                id_matkul: matkulList[i].id_matkul,
                nama_matkul: document.getElementById("editNamaMatkul").value,
                kode_matkul: document.getElementById("editKodeMatkul").value,
                dosen_pengampu: document.getElementById("editDosenPengampu").value
            };
            $('#modalEditMatkul').modal('hide');
            renderMatkul();
        });

        // DELETE
        function deleteMatkul(index) {
            if (confirm("Yakin ingin menghapus mata kuliah ini?")) {
                matkulList.splice(index, 1);
                renderMatkul();
            }
        }

        // Init
        populateDosenSelect("addDosenPengampu");
        populateDosenSelect("editDosenPengampu");
        renderMatkul();
    </script>

    @endsection