<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangKeluarSeeder extends Seeder
{
    public function run()
    {
        $path = WRITEPATH . 'dummy/DataTransaksi.sql';
        $file = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!$file) {
            echo "File tidak ditemukan!";
            return;
        }

        foreach ($file as $index => $line) {

            if ($index < 3) continue;

            $cols = str_getcsv($line, ',', "'");

            if (count($cols) < 8) continue;

            list($no, $tgl, $jenis, $kode, $jumlah, $nama, $faktur, $stok) = $cols;

            if (trim(strtolower($jenis)) !== 'keluar') continue;

            $tglFix = date('Y-m-d', strtotime(str_replace("'", "", $tgl)));

            $this->db->table('barang_keluar')->insert([
                'kode_barang'    => trim($kode),
                'nama_barang'    => trim($nama),
                'jumlah'         => (int) $jumlah,
                'tanggal_keluar' => $tglFix,
                'no_faktur'      => trim($faktur),
                'stok'           => (int) $stok,
            ]);
        }

        echo "BarangKeluarSeeder selesai!\n";
    }
}
