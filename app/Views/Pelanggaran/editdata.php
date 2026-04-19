<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Formulir Edit Data Pelanggaran Siswa</h1>

            <form action="/Pelanggaran/editdata" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nis" class="col-sm-2 col-form-label">NIS Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nis" id="nis" value="<?= isset($objek['nis']) ? htmlspecialchars($objek['nis']) : ''; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= isset($objek['nama']) ? htmlspecialchars($objek['nama']) : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" id="kelas" value="<?= isset($objek['kelas']) ? htmlspecialchars($objek['kelas']) : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="j_k" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="j_k" id="j_k" value="<?= isset($objek['j_k']) ? htmlspecialchars($objek['j_k']) : ''; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= isset($objek['alamat']) ? htmlspecialchars($objek['alamat']) : ''; ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/Pelanggaran/siswa" class="btn btn-success">Kembali ke Daftar Siswa</a>
            </form>
        </div>
    </div>
</div>
