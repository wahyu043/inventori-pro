<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $data = [
            'title' => 'Dashboard | Inventori Pro',
            'name'  => session()->get('name'),
            'role'  => session()->get('role')
        ];

        return view('dashboard', $data);
    }
}
