<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Data Karyawan</h1>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <table id="table2" class="table table-bordered table-hover display nowrap" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Departement</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody class="border-dark">

                            <?php foreach ($data['karyawan'] as $row) : ?>
                                <tr>
                                    <td><?= $row['nik']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>