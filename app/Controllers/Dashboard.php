<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\BarangMasukModel;
use App\Models\BarangKeluarModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $barangModel = new BarangModel();
        $barangMasukModel = new BarangMasukModel();
        $barangKeluarModel = new BarangKeluarModel();

        // Statistik
        $totalBarang  = $barangModel->countAllResults();
        $totalMasuk   = $barangMasukModel->countAllResults();
        $totalKeluar  = $barangKeluarModel->countAllResults();

        // Data barang untuk tabel dashboard
        $items = $barangModel->findAll();

        return view('dashboard/index', [
            'title'        => 'Dashboard | Inventori Pro',
            'name'         => session()->get('name'),
            'role'         => session()->get('role'),
            'totalBarang'  => $totalBarang,
            'totalMasuk'   => $totalMasuk,
            'totalKeluar'  => $totalKeluar,
            'items'        => $items,
        ]);
    }
}
