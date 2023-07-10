<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;


class Admin3 extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '3308016207760002',
            'nama'          => 'Zumrotul Khasanah',
            'email'         => 'khasanah@kursusindera.com',
            'username'      => 'khasanah',
            'telepon'       => '081476669504',
            'tempat_lahir'  => 'Magelang',
            'tanggal_lahir' => '1976-07-22',
            'alamat'        => 'Plimbangan RT.001/RW.001, Banjarharjo, Salaman, Kab. Magelang 56162',
            'password'      => 'kursusindera',
            'jenis_kelamin' => 'wanita',
            'avatar'        => 'adm-ana.jpg',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}