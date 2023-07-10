<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembayaran - Kursus Mengemudi Indera'
        ];

        return view('siswa/pembayaran', $data);
    }
}