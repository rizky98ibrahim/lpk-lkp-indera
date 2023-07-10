<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;


class Admin1 extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '3308106010010001',
            'nama'          => 'Diana Octa Anggraeni',
            'email'         => 'octa@kursusindera.com',
            'username'      => 'octa',
            'telepon'       => '085727473574',
            'tempat_lahir'  => 'Magelang',
            'tanggal_lahir' => '2001-10-20',
            'alamat'        => 'Lingkungan Wonokromo RT.005/RW.003, Sumberrejo, Mertoyudan, Kab. Magelang 56172',
            'password'      => 'kursusindera',
            'jenis_kelamin' => 'wanita',
            'avatar'        => 'adm-okta.jpg',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}