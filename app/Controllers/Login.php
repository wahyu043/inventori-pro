<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login | Inventori Pro';
        return view('login', $data);
    }

    public function auth()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // login dummy sementara
        if ($username === 'admin' && $password === '12345') {
            return redirect()->to('/')->with('success', 'Selamat datang, admin!');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }
}
