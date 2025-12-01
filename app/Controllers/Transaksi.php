<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use App\Models\BarangKeluarModel;

class Transaksi extends BaseController
{
    protected $barangMasukModel;
    protected $barangKeluarModel;

    public function __construct()
    {
        $this->barangMasukModel  = new BarangMasukModel();
        $this->barangKeluarModel = new BarangKeluarModel();
    }

    public function index()
    {
        // Ambil data dari dua tabel
        $masuk  = $this->barangMasukModel->findAll();
        $keluar = $this->barangKeluarModel->findAll();

        $transaksi = [];

        // Format barang masuk
        foreach ($masuk as $row) {
            $transaksi[] = [
                'tanggal'      => $row['tanggal_masuk'],
                'kode_barang'  => $row['kode_barang'],
                'nama_barang'  => $row['nama_barang'],
                'jumlah'       => $row['jumlah'],
                'jenis'        => 'Masuk',
                'user'         => '-', // BELUM ADA KOLUMNYA
            ];
        }

        // Format barang keluar
        foreach ($keluar as $row) {
            $transaksi[] = [
                'tanggal'      => $row['tanggal_keluar'],
                'kode_barang'  => $row['kode_barang'],
                'nama_barang'  => $row['nama_barang'],
                'jumlah'       => $row['jumlah'],
                'jenis'        => 'Keluar',
                'user'         => '-', // BELUM ADA KOLUMNYA
            ];
        }


        // Sort berdasarkan tanggal (terbaru → terlama)
        usort($transaksi, function ($a, $b) {
            return strtotime($b['tanggal']) - strtotime($a['tanggal']);
        });

        $data = [
            'title'     => 'Data Transaksi',
            'transaksi' => $transaksi
        ];

        return view('transaksi/index', $data);
    }
}
