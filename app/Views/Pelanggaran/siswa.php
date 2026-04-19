<div class="container">
    <div class="row">
        <div class="col"><br>
            <a href="/Pelanggaran/tambahdata" class="btn btn-primary">Tambahkan Siswa</a>
            <a href="/Pelanggaran/tampilpel" class="btn btn-primary">Laporan Pelanggaran</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ; ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error') ; ?>
                </div>
            <?php endif; ?>
            <h1> Daftar Siswa</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($objek as $r) : ?>
                        <tr class="table-striper">
                            <th scope="row"><?= $no++; ?></th>
                                <td><?= $r['nis']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['kelas']; ?></td>
                                <td><?= $r['j_k']; ?></td>
                                <td><?= $r['alamat']; ?></td>
                                <th scope="col">
                                <a class="btn btn-warning" href="detail/<?=$r['nis']; ?>" role="button">Detail</a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
