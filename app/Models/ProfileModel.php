<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $updatedField  = 'updated_at';
    protected $createdField  = 'created_at';
    protected $allowedFields = [
        'nik',
        'nama',
        'email',
        'avatar',
        'jenis_kelamin',
        'telepon',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'username',
        'password_hash',
        'reset_hash',
        'reset_at',
        'reset_expires',
        'activate_hash',
        'status',
        'status_message',
        'active',
        'force_pass_reset',
        'permissions',
        'deleted_at',
    ];

    public function getProfile($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}