<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login | Inventori Pro';
        return view('login', $data);
    }

    public function auth()
    {
        $session  = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $hash     = hash('sha256', $password);

        $user = $userModel->where('username', $username)->first();

        if ($user && $user['password'] === $hash) {
            $session->set([
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'name'      => $user['name'],
                'role'      => $user['role'],
                'logged_in' => true,
            ]);

            return redirect()->to('/dashboard')->with('success', 'Selamat datang, ' . $user['name'] . '!');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        $session = session();
        $session->setFlashdata('success', 'Anda telah logout.');
        $session->destroy();
        return redirect()->to('/login');
    }
}
