<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instruktur5 extends Seeder
{
    public function run()
    {
        $data = [
            'nik_instruktur'        => '3308040907900001',
            'slug_instruktur'       => 'hartono',
            'nama_instruktur'       => 'Hartono',
            'tlp_instruktur'        => '081353792024',
            'email_instruktur'      => 'hartono@kursusindera.com',
            'alamat_instruktur'     => 'Tempelan RT.009/RW.004, Sirahan, Salam, Kab. Magelang 56484',
            'foto_instruktur'       => 'pak-tono.png',
            'status_instruktur'     => 'Aktif',
            'tmplahir_instruktur'   => 'Magelang',
            'tgllahir_instruktur'   => '1990-07-09',
            'created_at'            => Time::now('Asia/Jakarta', 'id_ID'),
            'updated_at'            => Time::now('Asia/Jakarta', 'id_ID')
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO tbl_paket (slug_paket, nama_paket, harga_paket, jenis_paket, durasi_paket, ket_paket, created_at, updated_at) 
        // VALUES(:slug_paket:, :nama_paket:, :harga_paket:, :jenis_paket:, :durasi_paket:, :ket_paket:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        $this->db->table('tbl_instruktur')->insert($data);
    }
}