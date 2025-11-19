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

        // Ambil model
        $barangModel = new BarangModel();
        $barangMasukModel = new BarangMasukModel();
        $barangKeluarModel = new BarangKeluarModel();

        // Data statistik
        $totalBarang  = $barangModel->countAllResults();
        $totalMasuk   = $barangMasukModel->countAllResults();
        $totalKeluar  = $barangKeluarModel->countAllResults();

        $data = [
            'title'        => 'Dashboard | Inventori Pro',
            'name'         => session()->get('name'),
            'role'         => session()->get('role'),
            'totalBarang'  => $totalBarang,
            'totalMasuk'   => $totalMasuk,
            'totalKeluar'  => $totalKeluar,
        ];

        return view('dashboard/index', $data);
    }
}
