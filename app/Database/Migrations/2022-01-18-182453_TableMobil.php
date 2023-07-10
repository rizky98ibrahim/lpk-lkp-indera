<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableMobil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mobil'             => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'nama_mobil'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'slug_mobil'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'merek_mobil'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'warna_mobil'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'null'              => true,
            ],
            'jenis_mobil'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'null'              => true,
            ],
            'nopol_mobil'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'null'              => true,
            ],
            'tahun_mobil'         => [
                'type'              => 'DATE',
                'null'              => true,
            ],
            'foto_mobil'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => true,
            ],
            'ket_mobil'             => [
                'type'              => 'TEXT',
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
        $this->forge->addKey('id_mobil', true);
        $this->forge->createTable('tbl_mobil');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_mobil');
    }
}