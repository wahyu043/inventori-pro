<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // panggil semua seeder yang kamu punya
        $this->call('UserSeeder');

        // panggil seeder barang
        $this->call('BarangSeeder');
        $this->call('BarangMasukSeeder');
        $this->call('BarangKeluarSeeder');
    }
}
