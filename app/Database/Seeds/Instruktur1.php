<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instruktur1 extends Seeder
{
    public function run()
    {
        $data = [
            'nik_instruktur'        => '3308121004800007',
            'slug_instruktur'       => 'agip-setyo',
            'nama_instruktur'       => 'Agip Setyo Rahayu',
            'tlp_instruktur'        => '081212979078',
            'email_instruktur'      => 'agip@kursusindera.com',
            'alamat_instruktur'     => 'Sidoperno RT.004/RW.002, Wuwuharjo, Kajoran, Kab. Magelang 56163',
            'foto_instruktur'       => 'pak-agip.png',
            'status_instruktur'     => 'Aktif',
            'tmplahir_instruktur'   => 'Magelang',
            'tgllahir_instruktur'   => '1980-04-10',
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