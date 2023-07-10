<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'manage-users',
                'description'   => 'Manage All Users'
            ],
            [
                'name'          => 'manage-profile',
                'description'   => 'Manage Users Profile'
            ],
        ];
        $this->db->table('auth_permissions')->insertBatch($data);
    }
}