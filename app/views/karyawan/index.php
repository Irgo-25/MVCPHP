<body>
    <div class="container-fluid">
        <section class="content-header">
            <h1> Data Karyawan</h1>
            <div class="col text-right mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Karyawan
                </button>


            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table2" class="table table-bordered table-hover display nowrap" cellspacing="0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Departement</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Masuk</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="border-dark">
                                    <?php $No = 1; ?>
                                    <?php foreach ($data['karyawan'] as $row) : ?>
                                        <tr>
                                            <td><?= $No; ?></td>
                                            <td><?= $row['nik']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['umur']; ?></td>
                                            <td><?= $row['dept']; ?></td>
                                            <td><?= $row['jabatan']; ?></td>
                                            <td><?= $row['alamat']; ?></td>
                                            <td><?= $row['tanggal_masuk']; ?></td>
                                            <td style="text-align: center;">
                                                <!-- Tombol Edit -->
                                                <a href="<?= $row["nik"]; ?>" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip Content">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <!-- Tombol Hapus -->
                                                <a href="<?= BASEURL; ?>/Karyawan/Delete/<?= $row["nik"]; ?>" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip Content" onclick="alert('Apakah anda yakin ingin menghapusnya?')">
                                                    <i class=" fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $No++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Karyawan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL; ?>/Karyawan/Add" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="nik" id="floatingInput" placeholder="Masukan NIK">
                            <label for="floatingInput">Nomor Induk Karyawan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="Masukan Nama Lengkap">
                            <label for="floatingInput">Nama Karyawan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="umur" id="floatingNumber" placeholder="Umur">
                            <label for="floatingPassword">Umur</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="dept">
                                <option selected>---Pilih Department---</option>
                                <option value="Accounting">Accounting</option>
                                <option value="IT">IT</option>
                                <option value="GA">GA</option>
                                <option value="HRD">HRD</option>
                            </select>
                            <label for="floatingSelect">Departement</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jabatan">
                                <option selected>---Pilih Jabatan---</option>
                                <option value="Manajer">Manajer</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Staff">Staff</option>
                            </select>
                            <label for="floatingSelect">Jabatan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="alamat" id="floatingInput" placeholder="Masukan Alamat">
                            <label for="floatingInput">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="tanggal_masuk" id="floatingDate" placeholder="Masukan Tanggal Masuk">
                            <label for="floatingInput">Tanggal Masuk</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>