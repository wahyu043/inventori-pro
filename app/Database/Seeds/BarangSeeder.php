<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'S-2292',
                'nama_barang' => 'Adidas Beckembaur',
                'satuan' => 'Set',
                'harga_beli' => 675000,
                'harga_jual' => 899000,
                'stok' => 88
            ],
            [
                'kode_barang' => 'H-2214',
                'nama_barang' => 'Aqua 250ml',
                'satuan' => 'Dus',
                'harga_beli' => 46000,
                'harga_jual' => 52000,
                'stok' => 107
            ],
            [
                'kode_barang' => 'A-2310',
                'nama_barang' => 'Aspirin',
                'satuan' => 'Strip',
                'harga_beli' => 1800,
                'harga_jual' => 2500,
                'stok' => 98
            ],
            [
                'kode_barang' => 'K-2244',
                'nama_barang' => 'Ayam',
                'satuan' => 'Ekor',
                'harga_beli' => 43000,
                'harga_jual' => 52000,
                'stok' => 103
            ],
            [
                'kode_barang' => 'F-2286',
                'nama_barang' => 'Baygon',
                'satuan' => 'Kaleng 250ml',
                'harga_beli' => 17000,
                'harga_jual' => 22000,
                'stok' => 100
            ],
            [
                'kode_barang' => 'B-5012',
                'nama_barang' => 'Blue Band',
                'satuan' => 'Kaleng 500gr',
                'harga_beli' => 17500,
                'harga_jual' => 21000,
                'stok' => 108
            ],
            [
                'kode_barang' => 'G-2208',
                'nama_barang' => 'Chetos',
                'satuan' => 'Dus',
                'harga_beli' => 23000,
                'harga_jual' => 25000,
                'stok' => 98
            ],
            [
                'kode_barang' => 'B-2196',
                'nama_barang' => 'Dancow',
                'satuan' => 'Kaleng 1Kg',
                'harga_beli' => 48500,
                'harga_jual' => 56000,
                'stok' => 114
            ],
            [
                'kode_barang' => 'A-4442',
                'nama_barang' => 'Decolgen',
                'satuan' => 'Strip',
                'harga_beli' => 2200,
                'harga_jual' => 2500,
                'stok' => 99
            ],
            [
                'kode_barang' => 'D-2304',
                'nama_barang' => 'Dunhill 20',
                'satuan' => 'Bungkus',
                'harga_beli' => 17600,
                'harga_jual' => 23000,
                'stok' => 101
            ],
        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
