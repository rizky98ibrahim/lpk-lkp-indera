<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'tbl_mobil';
    protected $primaryKey = 'id_mobil';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'slug_mobil',
        'nama_mobil',
        'merek_mobil',
        'warna_mobil',
        'jenis_mobil',
        'nopol_mobil',
        'tahun_mobil',
        'foto_mobil',
        'ket_mobil',
        'created_at',
        'updated_at'
    ];
    public function getMobil($slug_mobil = false)
    {
        if ($slug_mobil == false) {
            return $this->findAll();
        }
        return $this->where(['slug_mobil' => $slug_mobil])->first();
    }
}