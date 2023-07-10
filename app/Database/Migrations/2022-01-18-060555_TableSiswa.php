<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'nik_siswa'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '20',
            ],
            'nama_siswa'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'slug_siswa'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'ayah_siswa'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'ibu_siswa'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'jekel_siswa'           => [
                'type'              => 'ENUM',
                'constraint'        => ['Pria', 'Wanita'],
            ],
            'tlp_siswa'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '20',
            ],
            'foto_siswa'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'pendidikan_siswa'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'pekerjaan_siswa'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'alamat_siswa'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'tmplahir_siswa'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '35',
            ],
            'tgllahir_siswa'        => [
                'type'              => 'DATE',
                'null'              => true,
            ],
            'created_at'            => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at'            => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('tbl_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_siswa');
    }
}