<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'ket_transaksi'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'slug_transaksi'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => true,
            ],
            'id_siswa'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'null'              => true,

            ],
            'id_paket'              => [
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
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('tbl_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_transaksi');
    }
}