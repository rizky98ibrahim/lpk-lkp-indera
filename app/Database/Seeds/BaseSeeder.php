<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
        $this->call('PermissionsSeeder');
        $this->call('Admin1');
        $this->call('Admin2');
        $this->call('Admin3');
        $this->call('Admin4');
        $this->call('Admin5');
        $this->call('Instruktur1');
        $this->call('Instruktur2');
        $this->call('Instruktur3');
        $this->call('Instruktur4');
        $this->call('Instruktur5');
        $this->call('Kombinasi1');
        $this->call('Kombinasi2');
        $this->call('Kombinasi3');
        $this->call('Matic1');
        $this->call('Matic2');
        $this->call('Matic3');
        $this->call('Matic4');
        $this->call('Matic5');
        $this->call('Manual1');
        $this->call('Manual2');
        $this->call('Manual3');
        $this->call('Manual4');
        $this->call('Manual5');
        $this->call('Manual6');
    }
}