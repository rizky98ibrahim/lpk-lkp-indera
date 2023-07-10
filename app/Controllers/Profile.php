<?php

namespace App\Controllers;

use App\Models\ProfileModel;


class Profile extends BaseController
{
    protected $profileModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }
    public function index()
    {
        $data = [
            'title'     => 'My Profile - Kursus Mengemudi Indera',
            'profile'   => $this->profileModel->findAll()
        ];
        return view('profile/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Detail Profile - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation(),
            'profile' => $this->profileModel->getProfile($id)
        ];
        return view('profile/edit', $data);
    }
}