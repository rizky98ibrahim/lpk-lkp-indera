<?php

namespace App\Controllers\Admin;

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

        return view('admin/mobil/index', $data);
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
        return view('admin/mobil/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Mobil - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/mobil/tambah', $data);
    }

    public function save()
    {

        // Validasi Input Data
        if (!$this->validate([
            'nama_mobil' => [
                'label' => 'Nama mobil',
                'rules' => 'required|is_unique[tbl_mobil.nama_mobil]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'merek_mobil'   => [
                'label'     => 'Merek mobil',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'warna_mobil'   => [
                'label'     => 'Warna mobil',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'jenis_mobil'   => [
                'label'     => 'transmisi',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Silakan isi {field} terlebih dahulu.'
                ],
            ],
            'nopol_mobil'   => [
                'label'     => 'Nopol mobil',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'tahun_mobil'     => [
                'label'     => 'Tahun mobil',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'ket_mobil'     => [
                'label'     => 'Keterangan',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'foto_mobil'    => [
                'label'     => 'Foto mobil',
                'rules'     => 'max_size[foto_mobil,5120]|is_image[foto_mobil]|mime_in[foto_mobil,image/png,image/jpg,image/jpeg]',
                'errors'    => [
                    'max_size'  => '{field} yang anda pilih terlalu besar (Max 2MB).',
                    'is_image'  => '{field} yang anda pilih bukan file gambar.',
                    'mime_in'   => '{field} yang anda pilih bukan file gambar.'
                ],
            ]

        ])) {
            return redirect()->to('admin/mobil/create')->withInput();
        }


        // Ambil File Foto Mobil
        $fileMobil = $this->request->getFile('foto_mobil');
        // Cek File diupload atau tidak
        if ($fileMobil->getError() == 4) {
            $namaMobil = 'default.png';
        } else {
            // Generate Nama File Foto Mobil Random
            $namaMobil = $fileMobil->getRandomName();
            // Pindahkan file ke Folder (Mobil)
            $fileMobil->move('backend/media/mobil', $namaMobil);
        }

        $slug_mobil = url_title($this->request->getVar('nama_mobil'), '-', true);
        $this->mobilModel->save([
            'nama_mobil'    => $this->request->getVar('nama_mobil'),
            'slug_mobil'    => $slug_mobil,
            'merek_mobil'   => $this->request->getVar('merek_mobil'),
            'warna_mobil'   => $this->request->getVar('warna_mobil'),
            'jenis_mobil'   => $this->request->getVar('jenis_mobil'),
            'nopol_mobil'   => $this->request->getVar('nopol_mobil'),
            'ket_mobil'     => $this->request->getVar('ket_mobil'),
            'tahun_mobil'   => $this->request->getVar('tahun_mobil'),
            'foto_mobil'    => $namaMobil,
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil ditambahkan.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/mobil');
    }


    public function delete($id_mobil)
    {
        // Cari File Gambar berdasarkan ID
        $mobil = $this->mobilModel->find($id_mobil);

        // Cek Jika File Gambar Default.png
        if ($mobil['foto_mobil'] != 'default.png') {
            // Hapus File Gambar
            unlink('backend/media/mobil/' . $mobil['foto_mobil']);
        }
        $this->mobilModel->delete($id_mobil);
        session()->setFlashdata('pesan', 'Dihapus!');
        session()->setFlashdata('status_text', 'Data berhasil dihapus.');
        session()->setFlashdata('status_icon', 'warning');
        return redirect()->to('admin/mobil');
    }

    public function edit($slug_mobil)
    {
        $data = [
            'title' => 'Ubah Data Mobil - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation(),
            'mobil' => $this->mobilModel->getMobil($slug_mobil)
        ];
        return view('admin/mobil/edit', $data);
    }

    public function update($id_mobil)
    {

        // Cek Data Mobil
        $mobilLama = $this->mobilModel->getMobil($this->request->getVar('slug_mobil'));
        if ($mobilLama['nama_mobil'] == $this->request->getVar('nama_mobil')) {
            $rule_mobil = 'required';
        } else {
            $rule_mobil = 'required|is_unique[tbl_mobil.nama_mobil]';
        }
        // Cek Validasi
        if (!$this->validate([
            'nama_mobil' => [
                'label' => 'Nama mobil',
                'rules' => $rule_mobil,
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'merek_mobil' => [
                'label'  => 'Merek mobil',
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'warna_mobil' => [
                'label'  => 'Warna mobil',
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'jenis_mobil' => [
                'label'  => 'transmisi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silakan isi {field} terlebih dahulu.'
                ],
            ],
            'nopol_mobil' => [
                'label'  => 'Nopol mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'ket_mobil' => [
                'label'  => 'Keterangan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'tahun_mobil' => [
                'label'  => 'Tahun mobil',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ],
            ],
            'foto_mobil'    => [
                'label'     => 'Foto mobil',
                'rules'     => 'max_size[foto_mobil,5120]|is_image[foto_mobil]|mime_in[foto_mobil,image/png,image/jpg,image/jpeg]',
                'errors'    => [
                    'max_size'  => '{field} yang anda pilih terlalu besar (Max 2MB).',
                    'is_image'  => '{field} yang anda pilih bukan file gambar.',
                    'mime_in'   => '{field} yang anda pilih bukan file gambar.'
                ],
            ]
        ])) {
            return redirect()->to('admin/mobil/edit/' . $this->request->getVar('slug_mobil'))->withInput();
        }

        // Cek Foto Mobil diganti atau tidak

        // Ambil File Foto Mobil
        $fileMobil = $this->request->getFile('foto_mobil');
        // Cek File diupload atau tidak
        if ($fileMobil->getError() == 4) {
            $namaMobil = $this->request->getVar('fotoLama');
        } else {
            // Generate Nama File Foto Mobil Random
            $namaMobil = $fileMobil->getRandomName();
            // Pindahkan file ke Folder (Mobil)
            $fileMobil->move('backend/media/mobil', $namaMobil);
            // Mengahapus file Foto Mobil yang Lama
            unlink('backend/media/mobil/' . $this->request->getVar('fotoLama'));
        }

        $slug_mobil = url_title($this->request->getVar('nama_mobil'), '-', true);
        $this->mobilModel->save([
            'id_mobil'      => $id_mobil,
            'nama_mobil'    => $this->request->getVar('nama_mobil'),
            'slug_mobil'    => $slug_mobil,
            'merek_mobil'   => $this->request->getVar('merek_mobil'),
            'warna_mobil'   => $this->request->getVar('warna_mobil'),
            'jenis_mobil'   => $this->request->getVar('jenis_mobil'),
            'nopol_mobil'   => $this->request->getVar('nopol_mobil'),
            'tahun_mobil'   => $this->request->getVar('tahun_mobil'),
            'ket_mobil'     => $this->request->getVar('ket_mobil'),
            'foto_mobil'    => $namaMobil,
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil diperbarui.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/mobil');
    }
}