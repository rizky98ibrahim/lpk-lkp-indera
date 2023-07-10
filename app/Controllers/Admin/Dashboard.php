<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard - Kursus Mengemudi Indera'
        ];

        return view('admin/dashboard', $data);
    }
}