<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;


class Admin4 extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '3308105408810004',
            'nama'          => 'Ari Winarsih',
            'email'         => 'winarsih@kursusindera.com',
            'username'      => 'winarsih',
            'telepon'       => '088216548258',
            'tempat_lahir'  => 'Magelang',
            'tanggal_lahir' => '1981-08-14',
            'alamat'        => 'Lingkungan Pasaranyar RT.001/RW.006, Sumberrejo, Mertoyudan, Kab. Magelang 56172',
            'password'      => 'kursusindera',
            'jenis_kelamin' => 'wanita',
            'avatar'        => 'adm-ari.jpg',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}