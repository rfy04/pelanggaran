<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('required')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('required'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mt-3">Formulir Isi Data Siswa</h1>
            <form action="/Pelanggaran/savedata" method="POST">

                <div class="row mb-3">
                    <label for="nis" class="col-sm-2 col-form-label">NIS Siswa*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nis" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" id="kelas" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="j_k" class="col-sm-2 col-form-label">Jenis Kelamin*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="j_k" id="j_k" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                </div>
                <!-- Fields for jenis_pelanggaran -->
                <div class="row mb-3">
                    <label for="id_j_pel" class="col-sm-2 col-form-label">ID Jenis Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_j_pel" id="id_j_pel" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="n_j_pel" class="col-sm-2 col-form-label">Jenis Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="n_j_pel" id="n_j_pel" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poin" class="col-sm-2 col-form-label">Poin Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="poin" id="poin" required>
                    </div>
                </div>

                <!-- Fields for pelanggaran -->
                <div class="row mb-3">
                    <label for="id_pel" class="col-sm-2 col-form-label">ID Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_pel" id="id_pel" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_pel" class="col-sm-2 col-form-label">Tanggal Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_pel" id="tgl_pel" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ket" class="col-sm-2 col-form-label">Keterangan Pelanggaran*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ket" id="ket" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/Pelanggaran/siswa" class="btn btn-danger">Batal</a>
                <?php if (session()->getFlashdata('required')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('required'); ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>