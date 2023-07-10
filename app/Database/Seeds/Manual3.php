<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class Manual3 extends Seeder
{
    public function run()
    {
        $data = [
            'slug_paket'    => 'manual-3',
            'nama_paket'    => 'Manual #3',
            'harga_paket'   => '600000',
            'jenis_paket'   => 'Manual',
            'durasi_paket'  => '6 Jam',
            'ket_paket'     => '3 x 2 Jam MT',
            'created_at'    => Time::now('Asia/Jakarta', 'id_ID'),
            'updated_at'    => Time::now('Asia/Jakarta', 'id_ID')
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO tbl_paket (slug_paket, nama_paket, harga_paket, jenis_paket, durasi_paket, ket_paket, created_at, updated_at) 
        // VALUES(:slug_paket:, :nama_paket:, :harga_paket:, :jenis_paket:, :durasi_paket:, :ket_paket:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        $this->db->table('tbl_paket')->insert($data);
    }
}