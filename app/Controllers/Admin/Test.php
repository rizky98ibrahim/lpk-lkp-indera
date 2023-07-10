<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MobilModel;
use App\Models\InstrukturModel;

class Mobil extends BaseController
{
    public function save()
    {

        // Validasi Input Data
        if (!$this->validate([
            'nama_instruktur' => [
                'label' => 'Nama instruktur',
                'rules' => 'required|is_unique[tbl_instruktur.nama_instruktur]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'nik_instruktur' => [
                'label'  => 'Harga instruktur',
                'rules' => 'required|decimal|min_length[5]',
                'errors' => [
                    'required'      => '{field} tidak boleh kosong.',
                    'decimal'       => 'Hanya bisa memasukan angka.',
                    'min_length'    => '{field} tidak sesuai, periksa kembali.',
                ],
            ],
            'tlp_instruktur' => [
                'label'  => 'Telepon instruktur',
                'rules' => 'required|decimal|min_length[5]',
                'errors' => [
                    'required'      => '{field} tidak boleh kosong.',
                    'decimal'       => 'Hanya bisa memasukan angka.',
                    'min_length'    => '{field} tidak sesuai, periksa kembali.',
                ],
            ],
            'email_instruktur' => [
                'label'  => 'transmisi',
                'rules' => 'required|valid_email',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.',
                    'valid_email'  => '{field} belum lengkap, periksa lagi.'
                ],
            ],
            'tmplahir_instruktur' => [
                'label' => 'Tempat lahir',
                'rules' => 'required',
                'errors'    => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'tgllahir_instruktur' => [
                'label' => 'Tanggal lahir',
                'rules' => 'required',
                'errors'    => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'status_instruktur' => [
                'label' => 'Status instruktur',
                'rules' => 'required',
                'errors'    => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'alamat_instruktur' => [
                'label'  => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            return redirect()->to('admin/paket/create')->withInput();
            // return redirect()->to('admin/paket/create')->withInput()->with('validation', $validation) ;
        }

        $slug_instruktur = url_title($this->request->getVar('nama_instruktur'), '-', true);
        $this->instrukturModel->save([
            'nik_instruktur'    => $this->request->getVar('nik_instruktur'),
            'slug_instruktur'    => $slug_instruktur,
            'nik_instruktur'   => $this->request->getVar('nik_instruktur'),
            'tlp_instruktur'   => $this->request->getVar('tlp_instruktur'),
            'email_instruktur'   => $this->request->getVar('email_instruktur'),
            'tmplahir_instruktur'   => $this->request->getVar('tmplahir_instruktur'),
            'tgllahir_instruktur'   => $this->request->getVar('tgllahir_instruktur'),
            'status_instruktur'  => $this->request->getVar('status_instruktur'),
            'alamat_instruktur'     => $this->request->getVar('alamat_instruktur'),
            'updated_at'    => $this->request->getVar('updated_at'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil ditambahkan.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/instruktur');
    }
}