<?php

namespace App\Controllers\Admin;

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
            'title' => 'Data Paket - Kursus Mengemudi Indera',
            'paket' => $this->paketModel->getPaket()
        ];

        return view('admin/paket/index', $data);
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
        return view('admin/paket/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Paket - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation()
            // 'paket' => $this->paketModel->getPaket($slug_paket)
        ];
        return view('admin/paket/tambah', $data);
    }

    public function save()
    {

        // Validasi Input Data
        if (!$this->validate([
            'nama_paket' => [
                'label' => 'Nama paket',
                'rules' => 'required|is_unique[tbl_paket.nama_paket]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'harga_paket' => [
                'label'  => 'Harga paket',
                'rules' => 'required|decimal|min_length[5]',
                'errors' => [
                    'required'      => '{field} tidak boleh kosong.',
                    'decimal'       => 'Hanya bisa memasukan angka.',
                    'min_length'    => '{field} tidak sesuai, periksa kembali.',
                ],
            ],
            'jenis_paket' => [
                'label'  => 'transmisi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silakan pilih {field} terlebih dahulu.'
                ],
            ],
            'durasi_paket' => [
                'label'  => 'Durasi paket',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'ket_paket' => [
                'label'  => 'Keterangan',
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

        $slug_paket = url_title($this->request->getVar('nama_paket'), '-', true);
        $this->paketModel->save([
            'nama_paket'    => $this->request->getVar('nama_paket'),
            'slug_paket'    => $slug_paket,
            'harga_paket'   => $this->request->getVar('harga_paket'),
            'jenis_paket'   => $this->request->getVar('jenis_paket'),
            'harga_paket'   => $this->request->getVar('harga_paket'),
            'durasi_paket'  => $this->request->getVar('durasi_paket'),
            'ket_paket'     => $this->request->getVar('ket_paket'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil ditambahkan.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/paket');
    }

    public function delete($id_paket)
    {
        $this->paketModel->delete($id_paket);
        session()->setFlashdata('pesan', 'Dihapus!');
        session()->setFlashdata('status_text', 'Data berhasil dihapus.');
        session()->setFlashdata('status_icon', 'warning');
        return redirect()->to('admin/paket');
    }

    public function edit($slug_paket)
    {
        $data = [
            'title' => 'Ubah Data Paket - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation(),
            'paket' => $this->paketModel->getPaket($slug_paket)
        ];
        return view('admin/paket/edit', $data);
    }

    public function update($id_paket)
    {

        // Cek Data Paket
        $paketLama = $this->paketModel->getPaket($this->request->getVar('slug_paket'));
        if ($paketLama['nama_paket'] == $this->request->getVar('nama_paket')) {
            $rule_paket = 'required';
        } else {
            $rule_paket = 'required|is_unique[tbl_paket.nama_paket]';
        }
        // Cek Validasi
        if (!$this->validate([
            'nama_paket' => [
                'label' => 'Nama paket',
                'rules' => $rule_paket,
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'harga_paket' => [
                'label'  => 'Harga paket',
                'rules' => 'required|decimal|min_length[5]',
                'errors' => [
                    'required'      => '{field} tidak boleh kosong.',
                    'decimal'       => 'Hanya bisa memasukan angka.',
                    'min_length'    => '{field} tidak sesuai, periksa kembali.',
                ],
            ],
            'jenis_paket' => [
                'label'  => 'transmisi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silakan pilih {field} terlebih dahulu.'
                ],
            ],
            'durasi_paket' => [
                'label'  => 'Durasi paket',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'ket_paket' => [
                'label'  => 'Keterangan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            return redirect()->to('admin/paket/edit/' . $this->request->getVar('slug_paket'))->withInput();
            // return redirect()->to('admin/paket/create')->withInput()->with('validation', $validation) ;
        }

        $slug_paket = url_title($this->request->getVar('nama_paket'), '-', true);
        $this->paketModel->save([
            'id_paket'      => $id_paket,
            'nama_paket'    => $this->request->getVar('nama_paket'),
            'slug_paket'    => $slug_paket,
            'harga_paket'   => $this->request->getVar('harga_paket'),
            'jenis_paket'   => $this->request->getVar('jenis_paket'),
            'harga_paket'   => $this->request->getVar('harga_paket'),
            'durasi_paket'  => $this->request->getVar('durasi_paket'),
            'ket_paket'     => $this->request->getVar('ket_paket'),
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil diperbarui.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/paket');
    }
}