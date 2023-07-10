<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;


class UserList extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');
    }
    public function index()
    {
        $this->builder->select('users.id as userid, username, email, avatar, nama,nik,telepon,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,created_at,updated_at,name,description');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['title'] = 'Daftar Pengguna - Kursus Mengemudi Indera';
        $data['users'] = $query->getResult();

        return view('admin/users/userlist', $data);
    }

    public function detail($id = 0)
    {
        $this->builder->select('users.id as userid, username, email, avatar, nama,nik,telepon,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,created_at,updated_at,name,description');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();


        $data['title'] = 'Daftar Pengguna - Kursus Mengemudi Indera';
        $data['user'] = $query->getRow();

        // Kalau ID tidak ada -> redirect ke Halaman Userlist
        if (empty($data['user'])) {
            return redirect()->to('admin/userlist');
        }

        return view('admin/users/detail', $data);
    }
}