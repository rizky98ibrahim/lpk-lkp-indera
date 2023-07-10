<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;



class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswa = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Siswa - Kursus Mengemudi Indera',
            'siswa' => $this->siswa->getData()
        ];
        // d($data);
        return view('admin/siswa/index', $data);
    }
}