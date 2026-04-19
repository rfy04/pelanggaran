<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card text-bg-info mb-6" style="max-width: 30rem;" align="center">
                <div class="card-header">
                    <h1> Detail Siswa</h1>
                </div>
                <div class="card-body">
                    <?php
                    $nis = '';
                    $nama = '';
                    $kelas = '';
                    $j_k = '';
                    $alamat = '';
                    if ($siswa) :
                    ?>
                        <table class="table table-striped">
                            <tr>
                                <th>NIS : </th>
                                <td><?= htmlspecialchars($siswa[0]->nis) ?></td>
                            </tr>
                            <tr>
                                <th>Nama : </th>
                                <td><?= htmlspecialchars($siswa[0]->nama) ?></td>
                            </tr>
                            <tr>
                                <th>Kelas : </th>
                                <td><?= htmlspecialchars($siswa[0]->kelas) ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin : </th>
                                <td><?= htmlspecialchars($siswa[0]->j_k) ?></td>
                            </tr>
                            <tr>
                                <th>Alamat : </th>
                                <td><?= htmlspecialchars($siswa[0]->alamat) ?></td>
                            </tr>
                        </table>
                    <?php else : ?>
                        <p>No student data available.</p>
                    <?php endif; ?>
                </div>
                <h3 class="mt-4">Pelanggaran</h3>
                <?php if ($pelanggaran) : ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Pelanggaran</th>
                                <th>Tanggal Pelanggaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pelanggaran as $p) : ?>
                                <tr>
                                    <td><?= isset($p->id_pel) ? htmlspecialchars($p->id_pel) : ''; ?></td>
                                    <td><?= isset($p->tgl_pel) ? htmlspecialchars($p->tgl_pel) : ''; ?></td>
                                    <td><?= isset($p->ket) ? htmlspecialchars($p->ket) : ''; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>No violation data available.</p>
                <?php endif; ?>
                <a href="/Pelanggaran/editdata/<?=htmlspecialchars($siswa[0]->nis); ?>" class="btn btn-light">Edit Data</a><br>
                <a href="/Pelanggaran/delete/<?= htmlspecialchars($siswa[0]->nis); ?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin Data di Hapus');">Hapus Data</a><br>
                <a href="/Pelanggaran/siswa" class="btn btn-success">Kembali ke Daftar Siswa</a>
            </div>