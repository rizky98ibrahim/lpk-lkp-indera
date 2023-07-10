<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        $field = [
            'nama'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'after'             => 'id'
            ],
            'id_siswa'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'after'             => 'id'
            ],
            'nik'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '20',
                'after'             => 'id'
            ],
            'tanggal_lahir'         => [
                'type'              => 'DATE',
                'null'              => true,
                'after'             => 'email'
            ],
            'tempat_lahir'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '35',
                'after'             => 'email'
            ],
            'alamat'                => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'after'             => 'email'
            ],
            'telepon'               => [
                'type'              => 'VARCHAR',
                'constraint'        => '20',
                'after'             => 'email'
            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM',
                'constraint'        => ['pria', 'wanita'],
                'after'             => 'email'
            ],
            'avatar'                => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'default'           => 'default.png',
                'after'             => 'email'
            ],
        ];
        $this->forge->addColumn('users', $field);
    }

    public function down()
    {
        //
    }
}