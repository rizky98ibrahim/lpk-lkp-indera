<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instruktur2 extends Seeder
{
    public function run()
    {
        $data = [
            'nik_instruktur'        => '3308102310910001',
            'slug_instruktur'       => 'ambar-rohani',
            'nama_instruktur'       => 'Ambar Rohani',
            'tlp_instruktur'        => '085866111088',
            'email_instruktur'      => 'ambar@kursusindera.com',
            'alamat_instruktur'     => 'Lingkungan Santan RT.005/RW.002, Sumberrejo, Mertoyudan, Kab. Magelang 56172',
            'foto_instruktur'       => 'pak-ambar.png',
            'status_instruktur'     => 'Aktif',
            'tmplahir_instruktur'   => 'Magelang',
            'tgllahir_instruktur'   => '1991-10-23',
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