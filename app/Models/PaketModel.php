<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'tbl_paket';
    protected $primaryKey = 'id_paket';
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';
    protected $createdField  = 'created_at';
    protected $allowedFields = [
        'slug_paket',
        'nama_paket',
        'durasi_paket',
        'jenis_paket',
        'harga_paket',
        'ket_paket',
        'created_at',
        'updated_at'
    ];

    public function getPaket($slug_paket = false)
    {
        if ($slug_paket == false) {
            return $this->findAll();
        }
        return $this->where(['slug_paket' => $slug_paket])->first();
    }
}