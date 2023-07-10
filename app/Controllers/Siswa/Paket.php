<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\PaketModel;

class Paket extends BaseController
{
    protected $paketModel;
    public function __construct()
    {
        $this->paketModel = new PaketModel();
    }
    public function index()
    {
        // $paket = $this->paketModel->findAll();
        $data = [
            'title' => 'Pilih Paket - Kursus Mengemudi Indera',
            'paket' => $this->paketModel->getPaket()
        ];

        return view('siswa/paket/index', $data);
    }

    public function detail($slug_paket)
    {

        $data = [
            'title' => 'Detail Paket - Kursus Mengemudi Indera',
            'paket' => $this->paketModel->getPaket($slug_paket)
        ];

        if (empty($data['paket'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Paket ' . $slug_paket . ' tidak ditemukan.');
        }
        return view('siswa/paket/detail', $data);
    }
}