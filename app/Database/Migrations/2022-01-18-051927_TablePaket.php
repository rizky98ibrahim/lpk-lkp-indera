<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePaket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_paket'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'slug_paket'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'nama_paket'            => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'harga_paket'           => [
                'type'              => 'DOUBLE',
                'null'              => true,
            ],
            'jenis_paket'           => [
                'type'              => 'ENUM',
                'constraint'        => ['Matic', 'Manual', 'Kombinasi'],
            ],
            'durasi_paket'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '25',
            ],
            'ket_paket'             => [
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
        $this->forge->addKey('id_paket', true);
        $this->forge->createTable('tbl_paket');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_paket');
    }
}