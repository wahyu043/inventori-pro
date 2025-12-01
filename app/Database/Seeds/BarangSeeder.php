<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [

            ['kode_barang' => 'S-2292', 'nama_barang' => 'Adidas Beckembaur', 'satuan' => 'pcs', 'harga_beli' => 161000, 'harga_jual' => 183000, 'stok' => 88],
            ['kode_barang' => 'S-3940', 'nama_barang' => 'Aqua 250ml', 'satuan' => 'pcs', 'harga_beli' => 1500, 'harga_jual' => 2000, 'stok' => 146],
            ['kode_barang' => 'S-1250', 'nama_barang' => 'Aspirin', 'satuan' => 'pcs', 'harga_beli' => 20000, 'harga_jual' => 22400, 'stok' => 184],
            ['kode_barang' => 'S-2134', 'nama_barang' => 'Ayam', 'satuan' => 'kg', 'harga_beli' => 70000, 'harga_jual' => 85000, 'stok' => 142],
            ['kode_barang' => 'S-1890', 'nama_barang' => 'Baygon', 'satuan' => 'pcs', 'harga_beli' => 21000, 'harga_jual' => 29000, 'stok' => 107],
            ['kode_barang' => 'S-3318', 'nama_barang' => 'Blue Band', 'satuan' => 'pcs', 'harga_beli' => 9000, 'harga_jual' => 11000, 'stok' => 141],
            ['kode_barang' => 'S-9948', 'nama_barang' => 'Chetos', 'satuan' => 'pcs', 'harga_beli' => 1500, 'harga_jual' => 3000, 'stok' => 154],
            ['kode_barang' => 'S-2201', 'nama_barang' => 'Dancow', 'satuan' => 'pcs', 'harga_beli' => 25000, 'harga_jual' => 30500, 'stok' => 197],
            ['kode_barang' => 'S-8254', 'nama_barang' => 'Decolgen', 'satuan' => 'pcs', 'harga_beli' => 2600, 'harga_jual' => 3200, 'stok' => 144],
            ['kode_barang' => 'S-9853', 'nama_barang' => 'Dunhill 20', 'satuan' => 'pcs', 'harga_beli' => 20000, 'harga_jual' => 24000, 'stok' => 176],

            ['kode_barang' => 'S-4322', 'nama_barang' => 'Gamis Batik', 'satuan' => 'pcs', 'harga_beli' => 55000, 'harga_jual' => 63000, 'stok' => 88],
            ['kode_barang' => 'S-9981', 'nama_barang' => 'Honda Mobilio', 'satuan' => 'pcs', 'harga_beli' => 197500000, 'harga_jual' => 219900000, 'stok' => 130],
            ['kode_barang' => 'S-5321', 'nama_barang' => 'Indomie Goreng', 'satuan' => 'pcs', 'harga_beli' => 2000, 'harga_jual' => 3500, 'stok' => 291],
            ['kode_barang' => 'S-8801', 'nama_barang' => 'Konidin', 'satuan' => 'pcs', 'harga_beli' => 2500, 'harga_jual' => 3000, 'stok' => 118],
            ['kode_barang' => 'S-1045', 'nama_barang' => 'Lactamil', 'satuan' => 'pcs', 'harga_beli' => 26000, 'harga_jual' => 34000, 'stok' => 140],

            ['kode_barang' => 'S-2022', 'nama_barang' => 'Mie Sedap', 'satuan' => 'pcs', 'harga_beli' => 2000, 'harga_jual' => 2900, 'stok' => 118],
            ['kode_barang' => 'S-4461', 'nama_barang' => 'Nike Air', 'satuan' => 'pcs', 'harga_beli' => 400000, 'harga_jual' => 520000, 'stok' => 167],
            ['kode_barang' => 'S-4423', 'nama_barang' => 'Paramex', 'satuan' => 'pcs', 'harga_beli' => 2300, 'harga_jual' => 2900, 'stok' => 142],
            ['kode_barang' => 'S-6850', 'nama_barang' => 'Potato', 'satuan' => 'pcs', 'harga_beli' => 1200, 'harga_jual' => 2500, 'stok' => 262],
            ['kode_barang' => 'S-1111', 'nama_barang' => 'Sampoerna Mild', 'satuan' => 'pcs', 'harga_beli' => 21000, 'harga_jual' => 27000, 'stok' => 142],

            ['kode_barang' => 'S-2202', 'nama_barang' => 'Sapi', 'satuan' => 'kg', 'harga_beli' => 95000, 'harga_jual' => 110000, 'stok' => 131],
            ['kode_barang' => 'S-5522', 'nama_barang' => 'Sony Vision LED 56', 'satuan' => 'pcs', 'harga_beli' => 4700000, 'harga_jual' => 5099000, 'stok' => 122],
            ['kode_barang' => 'S-6600', 'nama_barang' => 'Surya 16', 'satuan' => 'pcs', 'harga_beli' => 21000, 'harga_jual' => 27000, 'stok' => 122],
            ['kode_barang' => 'S-8011', 'nama_barang' => 'VIT 600ml', 'satuan' => 'pcs', 'harga_beli' => 2000, 'harga_jual' => 3500, 'stok' => 130],
            ['kode_barang' => 'S-5540', 'nama_barang' => 'Yamaha Vixion', 'satuan' => 'pcs', 'harga_beli' => 197500000, 'harga_jual' => 219900000, 'stok' => 118],

        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
