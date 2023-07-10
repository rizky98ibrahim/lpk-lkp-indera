<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;


class Admin2 extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '6301014808780001',
            'nama'          => 'Sri Damaiyanti',
            'email'         => 'damaiyanti@kursusindera.com',
            'username'      => 'damaiyanti',
            'telepon'       => '081390358016',
            'tempat_lahir'  => 'Magelang',
            'tanggal_lahir' => '1978-08-08',
            'alamat'        => 'Lingkungan Santan RT.005/RW.002, Sumberrejo, Mertoyudan, Kab. Magelang 56172',
            'password'      => 'kursusindera',
            'jenis_kelamin' => 'wanita',
            'avatar'        => 'adm-damaiyanti.jpg',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}