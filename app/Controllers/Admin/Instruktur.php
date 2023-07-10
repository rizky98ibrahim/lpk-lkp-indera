<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InstrukturModel;

class Instruktur extends BaseController
{
    protected $instrukturModel;
    public function __construct()
    {
        $this->instrukturModel = new InstrukturModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Instruktur - Kursus Mengemudi Indera',
            'instruktur' => $this->instrukturModel->getInstruktur()
        ];

        return view('admin/instruktur/index', $data);
    }

    public function detail($slug_instruktur)
    {

        $data = [
            'title' => 'Detail Instruktur - Kursus Mengemudi Indera',
            'instruktur' => $this->instrukturModel->getInstruktur($slug_instruktur)
        ];

        if (empty($data['instruktur'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama instruktur ' . $slug_instruktur . ' tidak ditemukan.');
        }
        return view('admin/instruktur/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Instruktur - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/instruktur/tambah', $data);
    }

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
                'label'  => 'Email instruktur',
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
            'foto_instruktur'    => [
                'label'     => 'Foto instruktur',
                'rules'     => 'max_size[foto_instruktur,5120]|is_image[foto_instruktur]|mime_in[foto_instruktur,image/png,image/jpg,image/jpeg]',
                'errors'    => [
                    'max_size'  => '{field} yang anda pilih terlalu besar (Max 2MB).',
                    'is_image'  => '{field} yang anda pilih bukan file gambar.',
                    'mime_in'   => '{field} yang anda pilih bukan file gambar.'
                ],
            ]
        ])) {
            return redirect()->to('admin/instruktur/create')->withInput();
        }

        // Ambil File Foto Instruktur
        $fileInstruktur = $this->request->getFile('foto_instruktur');
        // Cek File diupload atau tidak
        if ($fileInstruktur->getError() == 4) {
            $namaInstruktur = 'default.png';
        } else {
            // Generate Nama File Foto Instruktur Random
            $namaInstruktur = $fileInstruktur->getRandomName();
            // Pindahkan file ke Folder (Public->Backend->Media->Instruktur)
            $fileInstruktur->move('backend/media/instruktur', $namaInstruktur);
        }

        $slug_instruktur = url_title($this->request->getVar('nama_instruktur'), '-', true);
        $this->instrukturModel->save([
            'nama_instruktur'       => $this->request->getVar('nama_instruktur'),
            'slug_instruktur'       => $slug_instruktur,
            'nik_instruktur'        => $this->request->getVar('nik_instruktur'),
            'tlp_instruktur'        => $this->request->getVar('tlp_instruktur'),
            'email_instruktur'      => $this->request->getVar('email_instruktur'),
            'tmplahir_instruktur'   => $this->request->getVar('tmplahir_instruktur'),
            'tgllahir_instruktur'   => $this->request->getVar('tgllahir_instruktur'),
            'status_instruktur'     => $this->request->getVar('status_instruktur'),
            'alamat_instruktur'     => $this->request->getVar('alamat_instruktur'),
            'foto_instruktur'       => $namaInstruktur,
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil ditambahkan.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/instruktur');
    }

    public function delete($id_instruktur)
    {
        // Cari File Gambar berdasarkan ID
        $instruktur = $this->instrukturModel->find($id_instruktur);

        // Cek Jika File Gambar Default.png
        if ($instruktur['foto_instruktur'] != 'default.png') {
            // Hapus File Gambar
            unlink('backend/media/instruktur/' . $instruktur['foto_instruktur']);
        }

        $this->instrukturModel->delete($id_instruktur);
        session()->setFlashdata('pesan', 'Dihapus!');
        session()->setFlashdata('status_text', 'Data berhasil dihapus.');
        session()->setFlashdata('status_icon', 'warning');
        return redirect()->to('admin/instruktur');
    }

    public function edit($slug_instruktur)
    {
        $data = [
            'title' => 'Ubah Data Instruktur - Kursus Mengemudi Indera',
            'validation' => \Config\Services::validation(),
            'instruktur' => $this->instrukturModel->getInstruktur($slug_instruktur)
        ];
        return view('admin/instruktur/edit', $data);
    }

    public function update($id_instruktur)
    {
        // Cek Data Instruktur Lama
        $instrukturLama = $this->instrukturModel->getInstruktur($this->request->getVar('slug_instruktur'));
        if ($instrukturLama['nama_instruktur'] == $this->request->getVar('nama_instruktur')) {
            $rule_instruktur = 'required';
        } else {
            $rule_instruktur = 'required|is_unique[tbl_instruktur.nama_instruktur]';
        }
        // Cek Validasi
        if (!$this->validate([
            'nama_instruktur' => [
                'label' => 'Nama instruktur',
                'rules' => $rule_instruktur,
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
                'label'  => 'Email instruktur',
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
            'foto_instruktur'    => [
                'label'     => 'Foto instruktur',
                'rules'     => 'max_size[foto_instruktur,5120]|is_image[foto_instruktur]|mime_in[foto_instruktur,image/png,image/jpg,image/jpeg]',
                'errors'    => [
                    'max_size'  => '{field} yang anda pilih terlalu besar (Max 2MB).',
                    'is_image'  => '{field} yang anda pilih bukan file gambar.',
                    'mime_in'   => '{field} yang anda pilih bukan file gambar.'
                ],
            ]
        ])) {
            return redirect()->to('admin/instruktur/edit/' . $this->request->getVar('slug_instruktur'))->withInput();
        }


        // Cek Foto Instruktur diganti atau tidak

        // Ambil File Foto Instruktur
        $fileInstruktur = $this->request->getFile('foto_instruktur');
        // Cek File diupload atau tidak
        if ($fileInstruktur->getError() == 4) {
            $namaInstruktur = $this->request->getVar('fotoLama');
        } else {
            // Generate Nama File Foto Instruktur Random
            $namaInstruktur = $fileInstruktur->getRandomName();
            // Pindahkan file ke Folder (Instruktur)
            $fileInstruktur->move('backend/media/instruktur', $namaInstruktur);
            // Mengahapus file Foto Instruktur yang Lama
            unlink('backend/media/instruktur/' . $this->request->getVar('fotoLama'));
        }
        $slug_instruktur = url_title($this->request->getVar('nama_instruktur'), '-', true);
        $this->instrukturModel->save([
            'id_instruktur'         => $id_instruktur,
            'nama_instruktur'       => $this->request->getVar('nama_instruktur'),
            'slug_instruktur'       => $slug_instruktur,
            'nik_instruktur'        => $this->request->getVar('nik_instruktur'),
            'tlp_instruktur'        => $this->request->getVar('tlp_instruktur'),
            'email_instruktur'      => $this->request->getVar('email_instruktur'),
            'tmplahir_instruktur'   => $this->request->getVar('tmplahir_instruktur'),
            'tgllahir_instruktur'   => $this->request->getVar('tgllahir_instruktur'),
            'status_instruktur'     => $this->request->getVar('status_instruktur'),
            'alamat_instruktur'     => $this->request->getVar('alamat_instruktur'),
            'foto_instruktur'       => $namaInstruktur,
        ]);
        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil diperbarui.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('admin/instruktur');
    }
}