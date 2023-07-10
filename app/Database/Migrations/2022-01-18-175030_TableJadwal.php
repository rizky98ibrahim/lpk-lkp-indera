<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableJadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwal'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'nama_jadwal'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'slug_jadwal'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'tgl_jadwal'            => [
                'type'              => 'DATE',
                'null'              => true,
            ],
            'id_siswa'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'null'              => true,

            ],
            'id_instruktur'         => [
                'type'              => 'INT',
                'constraint'        => 11,
                'null'              => true,

            ],
            'id_mobil'         => [
                'type'              => 'INT',
                'constraint'        => 11,
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
        $this->forge->addKey('id_jadwal', true);
        $this->forge->createTable('tbl_jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_jadwal');
    }
}