<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\BarangMasukModel;

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

        // Data statistik
        $totalBarang  = $barangModel->countAllResults();
        $totalMasuk   = $barangMasukModel->countAllResults();

        $data = [
            'title'        => 'Dashboard | Inventori Pro',
            'name'         => session()->get('name'),
            'role'         => session()->get('role'),
            'totalBarang'  => $totalBarang,
            'totalMasuk'   => $totalMasuk,
        ];

        return view('dashboard/index', $data);
    }
}
