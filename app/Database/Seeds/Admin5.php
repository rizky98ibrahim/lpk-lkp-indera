<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;


class Admin5 extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '3308084811690002',
            'nama'          => 'Novita Hermani',
            'email'         => 'novita@kursusindera.com',
            'username'      => 'novita',
            'telepon'       => '082137136565',
            'tempat_lahir'  => 'Magelang',
            'tanggal_lahir' => '1969-11-08',
            'alamat'        => 'Ketaron RT.002/RW.008, Tamanagung, Muntilan, Kab. Magelang 56413',
            'password'      => 'kursusindera',
            'jenis_kelamin' => 'wanita',
            'avatar'        => 'adm-novita.jpg',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}