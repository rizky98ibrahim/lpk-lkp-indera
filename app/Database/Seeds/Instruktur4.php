<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Instruktur4 extends Seeder
{
    public function run()
    {
        $data = [
            'nik_instruktur'        => '3308012506950002',
            'slug_instruktur'       => 'agung-fendi',
            'nama_instruktur'       => 'Agung Fendi Ardana',
            'tlp_instruktur'        => '085877830969',
            'email_instruktur'      => 'fendi@kursusindera.com',
            'alamat_instruktur'     => 'Mlangen RT.014/RW.006, Menoreh, Salaman, Kab. Magelang 56162',
            'foto_instruktur'       => 'pak-fendi.png',
            'status_instruktur'     => 'Aktif',
            'tmplahir_instruktur'   => 'Magelang',
            'tgllahir_instruktur'   => '1995-06-25',
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