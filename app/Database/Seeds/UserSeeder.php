<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nik'           => '3275090606980020',
            'nama'          => 'Muhammad Rizky Ibrahim',
            'email'         => 'rizkyculture@gmail.com',
            'username'      => 'rizkyculture',
            'telepon'       => '085961412226',
            'tempat_lahir'  => 'Jakarta',
            'tanggal_lahir' => '1998-06-06',
            'alamat'        => 'Jl. Primadana VII Blok C8 No.28 RT.006/RW.010, Jatisari, Jatiasih, Kota Bekasi 17426',
            'password'      => '@Abang1998',
            'jenis_kelamin' => 'pria',
            'active'        => 1,

        ];

        $userModel  = model(UserModel::class);
        $user       = new User($data);
        $userModel->withgroup('admin');
        $userModel->save($user);
    }
}