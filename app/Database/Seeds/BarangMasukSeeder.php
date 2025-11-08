<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangMasukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal_masuk' => '2016-01-01',
                'kode_barang' => 'S-2292',
                'nama_barang' => 'Adidas Beckembaur',
                'jumlah' => 100,
                'no_faktur' => 'M2016S-229201',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-01-01',
                'kode_barang' => 'H-2214',
                'nama_barang' => 'Aqua 250ml',
                'jumlah' => 100,
                'no_faktur' => 'M2016H-221401',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-01-01',
                'kode_barang' => 'A-2310',
                'nama_barang' => 'Aspirin',
                'jumlah' => 100,
                'no_faktur' => 'M2016A-231001',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-01-04',
                'kode_barang' => 'K-2244',
                'nama_barang' => 'Ayam',
                'jumlah' => 100,
                'no_faktur' => 'M2016K-224401',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-01-04',
                'kode_barang' => 'F-2286',
                'nama_barang' => 'Baygon',
                'jumlah' => 100,
                'no_faktur' => 'M2016F-228601',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-01-04',
                'kode_barang' => 'B-5012',
                'nama_barang' => 'Blue Band',
                'jumlah' => 100,
                'no_faktur' => 'M2016B-501201',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-02-03',
                'kode_barang' => 'G-2208',
                'nama_barang' => 'Chetos',
                'jumlah' => 100,
                'no_faktur' => 'M2016G-220802',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-02-03',
                'kode_barang' => 'B-2196',
                'nama_barang' => 'Dancow',
                'jumlah' => 100,
                'no_faktur' => 'M2016B-219602',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-02-03',
                'kode_barang' => 'A-4442',
                'nama_barang' => 'Decolgen',
                'jumlah' => 100,
                'no_faktur' => 'M2016A-444202',
                'stok' => 100,
            ],
            [
                'tanggal_masuk' => '2016-02-03',
                'kode_barang' => 'D-2304',
                'nama_barang' => 'Dunhill 20',
                'jumlah' => 100,
                'no_faktur' => 'M2016D-230402',
                'stok' => 100,
            ],
        ];

        $this->db->table('barang_masuk')->insertBatch($data);
    }
}
