<?php
namespace App\Models;
use CodeIgniter\Model;
class TpelanggaranModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nis', 'nama', 'kelas', 'j_k', 'alamat'];
    public function getObjek($nis = false)
    {
        if ($nis === false) {
            return $this->findAll();
        }

        return $this->where(['nis' => $nis])->first();
    }
    public function lapRelasi($nis)
    {
        return $this->db->table('siswa')
            ->join('pelanggaran', 'siswa.nis = pelanggaran.nis')
            ->join('jenis_pelanggaran', 'pelanggaran.id_j_pel = jenis_pelanggaran.id_j_pel')
            ->where('siswa.nis', $nis)
            ->get()
            ->getResult();
    }
    public function getAllPelanggaran() {
        $query = $this->join('pelanggaran', 'pelanggaran.nis = siswa.nis')
            ->join('jenis_pelanggaran', 'jenis_pelanggaran.id_j_pel = pelanggaran.id_j_pel')
            ->findAll();

        return $query;
    }
    public function getSiswa($nis)
    {
        return $this->db->table('siswa')
            ->where('siswa.nis', $nis)
            ->get()
            ->getResult();
    }
        public function savePelanggaran($data)
    {
        return $this->db->table('pelanggaran')->insert($data);
    }
    public function saveJenisPelanggaran($data)
    {
        return $this->db->table('jenis_pelanggaran')->insert($data);
    }
}
