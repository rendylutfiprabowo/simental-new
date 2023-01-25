<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AkunAdmin extends Seeder
{
    //role 1 = admin/finance
    //role 2 = obc
    //role 3 = ctb
    public function run()
    {
        $data = [
            'nama' => 'Finance Admin',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_BCRYPT),
            
        ];
        $this->db->table('admin')->insertBatch($data);
    }
}
