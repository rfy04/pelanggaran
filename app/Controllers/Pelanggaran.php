<?php
namespace App\Controllers;
use App\Models\TpelanggaranModel;
class Pelanggaran extends BaseController
{
    protected $Objek;
    public function __construct()
    {
        $this->Objek = new TpelanggaranModel();
    }
    public function index()
    {
        echo view('Layout/header');
        echo view('Pelanggaran/index');
        echo view('Layout/footer');
    }
    public function profile()
    {
        $data = [
            'title' => 'Profile Penulis'
        ];
        echo view('Layout/header', $data);
        echo view('Layout/profile');
        echo view('Layout/footer');
    }
    public function kontak()
    {
        echo view('Layout/header');
        echo view('Layout/kontak');
        echo view('Layout/footer');
    }
    public function savedata()
    {
           $siswaData = [
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'j_k' => $this->request->getVar('j_k'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $this->Objek->save($siswaData);
    $nis = $this->request->getVar('nis');
        $jenisPelanggaranData = [
            'id_j_pel' => $this->request->getVar('id_j_pel'),
            'n_j_pel' => $this->request->getVar('n_j_pel'),
            'poin' => $this->request->getVar('poin'),
        ];
        $this->Objek->saveJenisPelanggaran($jenisPelanggaranData);
        $pelanggaranData = [
            'id_pel' => $this->request->getVar('id_pel'),
            'tgl_pel' => $this->request->getVar('tgl_pel'),
            'ket' => $this->request->getVar('ket'),
            'nis' => $nis,
            'id_j_pel' => $this->request->getVar('id_j_pel'), // Include id_j_pel
        ];
        $this->Objek->savePelanggaran($pelanggaranData);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/Pelanggaran/siswa');
    }
    public function siswa()
    {
        $Objek = $this->Objek->findAll();
        $data = [
            'title' => 'Data Siswa',
            'objek' => $Objek
        ];
        echo view('Layout/header', $data);
        echo view('Pelanggaran/siswa');
        echo view('Layout/footer');
    }
    public function detail($nis)
    {
        $siswa = $this->Objek->getSiswa($nis);
        $pelanggaran = $this->Objek->lapRelasi($nis);
        $data = [
            'title' => 'Detail Data Siswa ' . $nis,
            'siswa' => $siswa,
            'pelanggaran' => $pelanggaran,
        ];
        echo view('Layout/header', $data);
        echo view('Pelanggaran/detail', $data);
        echo view('Layout/footer');
    }
    public function tambahdata()
    {
        session();
        $data = [
            'title' => 'Formulir Tambah Data Siswa',
            'validation' => \Config\Services::validation()
        ];
        echo view('Layout/header', $data);
        echo view('Pelanggaran/tambahdata');
        echo view('Layout/footer');
    }
    public function delete($nis)
    {
        $this->Objek->delete($nis);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/Pelanggaran/isidata');
    }
    public function editdata($nis)
    {
        $objek = $this->Objek->getobjek($nis);
        $data = [
            'title' => 'Edit Data Siswa ' . $objek['nis'],
            'objek' => $objek,
        ];
        echo view('Layout/header', $data);
        echo view('Pelanggaran/editdata');
        echo view('Layout/footer');
    }
    public function dataedit()
    {
        $this->Objek->save([
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'j_k' => $this->request->getVar('j_k'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Edit');
        return redirect()->to('/Pelanggaran/isidata');
    }
    public function tampilpel()
    {
        $ObjekModel = new \App\Models\TpelanggaranModel();
        $objek = $ObjekModel->getAllPelanggaran();
        $data = [
            'title' => 'Tampil Data',
            'objek' => $objek,
        ];
        echo view('Layout/header', $data);
        echo view('Pelanggaran/tampilpel', $data);
        echo view('Layout/footer');
    }
}
