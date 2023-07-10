<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\SiswaModel;

class Daftar extends BaseController
{
    protected $userModel;
    protected $siswaModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->siswaModel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'title'         => 'Formulir Pendaftaran - Kursus Mengemudi Indera',
            'daftar'        => $this->userModel->getSiswa(),
            'validation'    => \Config\Services::validation()
        ];

        return view('siswa/daftar/index', $data);
    }

    public function save()
    {
        // Validasi Input Data
        if (!$this->validate([
            'nik_siswa' => [
                'label'         => 'NIK',
                'rules'         => 'required|is_unique[tbl_siswa.nik_siswa]',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ],
            ],
            'nama_siswa'    => [
                'label'         => 'Nama lengkap',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'ayah_siswa'         => [
                'label'         => 'Nama Ayah',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'ibu_siswa'          => [
                'label'         => 'Nama Ibu',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.',
                ],
            ],
            'jekel_siswa'     => [
                'label'         => 'Jenis kelamin',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'tlp_siswa'           => [
                'label'         => 'Nomor telepon',
                'rules'         => 'required|decimal|min_length[5]',
                'errors'        => [
                    'required'      => '{field} tidak boleh kosong.',
                    'decimal'       => 'Hanya bisa memasukan angka.',
                    'min_length'    => '{field} tidak sesuai, periksa kembali.',
                ],
            ],
            'pendidikan_siswa'        => [
                'label'         => 'Pendidikan',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'pekerjaan_siswa'         => [
                'label'         => 'Pekerjaan',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'alamat_siswa'            => [
                'label'         => 'Alamat',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'tmplahir_siswa'      => [
                'label'         => 'Tempat lahir',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'tgllahir_siswa'     => [
                'label'         => 'Tanggal lahir',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} tidak boleh kosong.'
                ],
            ],
            'foto_siswa'    => [
                'label'     => 'Foto Siswa',
                'rules'     => 'max_size[foto_siswa,5120]|is_image[foto_siswa]|mime_in[foto_siswa,image/png,image/jpg,image/jpeg]',
                'errors'    => [
                    'max_size'  => '{field} yang anda pilih terlalu besar (Max 2MB).',
                    'is_image'  => '{field} yang anda pilih bukan file gambar.',
                    'mime_in'   => '{field} yang anda pilih bukan file gambar.'
                ],
            ]
        ])) {
            return redirect()->to('/siswa/daftar/index')->withInput();
        }

        // Ambil File Foto Siswa
        $fileSiswa = $this->request->getFile('foto_siswa');
        // Cek File diupload atau tidak
        if ($fileSiswa->getError() == 4) {
            $namaSiswa = 'default.png';
        } else {
            // Generate Nama File Foto Siswa Random
            $namaSiswa = $fileSiswa->getRandomName();
            // Pindahkan file ke Folder (Public->Backend->Media->Siswa)
            $fileSiswa->move('backend/media/siswa', $namaSiswa);
        }

        $slug_siswa = url_title($this->request->getVar('nama_siswa'), '-', true);
        $this->siswaModel->save([
            'nama_siswa'        => $this->request->getVar('nama_siswa'),
            'slug_siswa'        => $slug_siswa,
            'nik_siswa'         => $this->request->getVar('nik_siswa'),
            'ayah_siswa'        => $this->request->getVar('ayah_siswa'),
            'ibu_siswa'         => $this->request->getVar('ibu_siswa'),
            'jekel_siswa'       => $this->request->getVar('jekel_siswa'),
            'tlp_siswa'         => $this->request->getVar('tlp_siswa'),
            'pendidikan_siswa'  => $this->request->getVar('pendidikan_siswa'),
            'pekerjaan_siswa'   => $this->request->getVar('pekerjaan_siswa'),
            'alamat_siswa'      => $this->request->getVar('alamat_siswa'),
            'tmplahir_siswa'    => $this->request->getVar('tmplahir_siswa'),
            'tgllahir_siswa'    => $this->request->getVar('tgllahir_siswa'),
            'foto_siswa'        => $namaSiswa,
        ]);

        session()->setFlashdata('pesan', 'Berhasil!');
        session()->setFlashdata('status_text', 'Data berhasil ditambahkan.');
        session()->setFlashdata('status_icon', 'success');
        return redirect()->to('/siswa/daftar/index');
    }
}