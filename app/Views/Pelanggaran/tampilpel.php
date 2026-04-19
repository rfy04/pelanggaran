<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Pelanggaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Tampil Data Pelanggaran</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>ID Jenis Pelanggaran</th>
                    <th>Nama Jenis Pelanggaran</th>
                    <th>Poin Pelanggaran</th>
                    <th>ID Pelanggaran</th>
                    <th>Tanggal Pelanggaran</th>
                    <th>Keterangan Pelanggaran</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objek as $data) : ?>
                    <tr>
                        <td><?= htmlspecialchars($data['nis']); ?></td>
                        <td><?= htmlspecialchars($data['nama']); ?></td>
                        <td><?= htmlspecialchars($data['kelas']); ?></td>
                        <td><?= htmlspecialchars($data['j_k']); ?></td>
                        <td><?= htmlspecialchars($data['alamat']); ?></td>
                        <td><?= htmlspecialchars($data['id_j_pel']); ?></td>
                        <td><?= htmlspecialchars($data['n_j_pel']); ?></td>
                        <td><?= htmlspecialchars($data['poin']); ?></td>
                        <td><?= htmlspecialchars($data['id_pel']); ?></td>
                        <td><?= htmlspecialchars($data['tgl_pel']); ?></td>
                        <td><?= htmlspecialchars($data['ket']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/Pelanggaran/siswa" class="btn btn-success">Kembali ke Daftar Siswa</a>
    </div>
</body>

</html>
