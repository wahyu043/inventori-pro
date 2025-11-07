<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data['title'] = 'Beranda | Inventori Pro';
        return view('beranda', $data);
    }
}
