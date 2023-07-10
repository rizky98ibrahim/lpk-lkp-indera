<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'admin',
                'description'   => 'Administrator'
            ],
            [
                'name'          => 'instruktur',
                'description'   => 'Instruktur'
            ],
            [
                'name'          => 'siswa',
                'description'   => 'Siswa'
            ]
        ];
        $this->db->table('auth_groups')->insertBatch($data);
    }
}