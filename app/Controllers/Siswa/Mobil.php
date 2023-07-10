<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\MobilModel;

class Mobil extends BaseController
{
    protected $mobilModel;
    public function __construct()
    {
        $this->mobilModel = new MobilModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Mobil - Kursus Mengemudi Indera',
            'mobil' => $this->mobilModel->getMobil()
        ];

        return view('siswa/mobil/index', $data);
    }

    public function detail($slug_mobil)
    {

        $data = [
            'title' => 'Detail Mobil - Kursus Mengemudi Indera',
            'mobil' => $this->mobilModel->getMobil($slug_mobil)
        ];

        if (empty($data['mobil'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Mobil ' . $slug_mobil . ' tidak ditemukan.');
        }
        return view('siswa/mobil/detail', $data);
    }
}