<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'tbl_siswa';
    protected $primaryKey = 'id_siswa';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nik_siswa',
        'nama_siswa',
        'slug_siswa',
        'ayah_siswa',
        'ibu_siswa',
        'jekel_siswa',
        'tlp_siswa',
        'foto_siswa',
        'pendidikan_siswa',
        'pekerjaan_siswa',
        'alamat_siswa',
        'tmplahir_siswa',
        'tgllahir_siswa',
        'created_at',
        'updated_at'
    ];

    public function getSiswa()
    {
        $builder = $this->db->table('tbl_siswa');
        $builder->join('users', 'users.id_siswa = tbl_siswa.id_siswa');
        // $builder->join('users', 'users.alamat = tbl_siswa.alamat_siswa');
        $query = $builder->get();

        return $query->getResult();
    }

    public function getData($slug_siswa = false)
    {
        if ($slug_siswa == false) {
            return $this->findAll();
        }
        return $this->where(['slug_siswa' => $slug_siswa])->first();
    }
}