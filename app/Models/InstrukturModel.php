<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrukturModel extends Model
{
    protected $table = 'tbl_instruktur';
    protected $primaryKey = 'id_instruktur';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'slug_instruktur',
        'nama_instruktur',
        'nik_instruktur',
        'tlp_instruktur',
        'email_instruktur',
        'tmplahir_instruktur',
        'tgllahir_instruktur',
        'status_instruktur',
        'foto_instruktur',
        'alamat_instruktur',
        'created_at',
        'updated_at',
    ];
    public function getInstruktur($slug_instruktur = false)
    {
        if ($slug_instruktur == false) {
            return $this->findAll();
        }
        return $this->where(['slug_instruktur' => $slug_instruktur])->first();
    }

    protected function insertUserstamp(array $data)
    {
        $user_id = session()->get('user_id');
        if (
            !empty($user_id) &&
            !array_key_exists('created_by', $data) && !array_key_exists('updated_by', $data)
        ) {
            $data['data']['created_by'] = $user_id;
            $data['data']['updated_by'] = $user_id;
        }
        return $data;
    }

    protected function updateUserstamp(array $data)
    {
        $user_id = session()->get('user_id');
        if (!empty($user_id) && !array_key_exists('updated_by', $data)) {
            $data['data']['updated_by'] = $user_id;
        }
        return $data;
    }
}