<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\UserModel;



class Profil extends BaseController
{
    protected $siswaModel;
    protected $UserModel;
    public function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->user = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Profile Saya - Kursus Mengemudi Indera',
            'siswa' => $this->siswa->getSiswa()
        ];
        // d($data);
        return view('siswa/profil/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Profil - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation(),
            'profil' => $this->siswaModel->getProfil($id)
        ];
        return view('siswa/profil/edit', $data);
    }
}