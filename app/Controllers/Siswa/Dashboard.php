<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PaketModel;

class Dashboard extends BaseController
{
    protected $paketModel;
    public function __construct()
    {
        $this->paketModel = new PaketModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Siswa Dashboard - Kursus Mengemudi Indera'
        ];

        return view('siswa/dashboard', $data);
    }

    public function konfirmasi()
    {

        $data = [
            'title' => 'Konfirmasi Kursus - Kursus Mengemudi Indera',
            'paket' => $this->paketModel->getPaket()
        ];

        return view('siswa/whatsapp', $data);
    }
}