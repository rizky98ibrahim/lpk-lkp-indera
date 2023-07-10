<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            return redirect()->to('admin/dashboard');
        } else if (in_groups('siswa')) {
            return redirect()->to('siswa/dashboard');
        } else {
            return redirect()->to('login');
        }
    }
}