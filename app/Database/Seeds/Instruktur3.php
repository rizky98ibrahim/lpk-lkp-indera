<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instruktur3 extends Seeder
{
    public function run()
    {
        $data = [
            'nik_instruktur'        => '3308092704870004',
            'slug_instruktur'       => 'muji-purwanto',
            'nama_instruktur'       => 'Muji Purwanto',
            'tlp_instruktur'        => '085866111077',
            'email_instruktur'      => 'muji@kursusindera.com',
            'alamat_instruktur'     => 'Randu Gunting RT.002/RW.001, Blondo, Mungkin, Kab. Magelang 56512',
            'foto_instruktur'       => 'pak-anto.png',
            'status_instruktur'     => 'Aktif',
            'tmplahir_instruktur'   => 'Magelang',
            'tgllahir_instruktur'   => '1987-04-27',
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