<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => hash('sha256', '12345'),
                'name'     => 'Administrator',
                'role'     => 'admin'
            ],
            [
                'username' => 'user1',
                'password' => hash('sha256', '12345'),
                'name'     => 'Petugas Gudang',
                'role'     => 'user'
            ]
        ];

        // Insert ke tabel users
        $this->db->table('users')->insertBatch($data);
    }
}
