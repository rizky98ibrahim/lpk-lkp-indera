<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableInstruktur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_instruktur'         => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'nik_instruktur'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '22',
            ],
            'slug_instruktur'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'nama_instruktur'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'tlp_instruktur'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',
            ],
            'email_instruktur'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '30',
            ],
            'alamat_instruktur'     => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'foto_instruktur'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'status_instruktur'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',
            ],
            'tmplahir_instruktur'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',
            ],
            'tgllahir_instruktur'   => [
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
        $this->forge->addKey('id_instruktur', true);
        $this->forge->createTable('tbl_instruktur');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_instruktur');
    }
}