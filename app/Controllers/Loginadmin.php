<?php

namespace App\Controllers;

use App\Models\User_model;

class loginadmin extends BaseController
{
    public function index()
    {
        return view('login/vw_login');
    }

    public function process()

    {
        $session = \Config\Services::session();
        $m_user         = new User_model();

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'username'     => 'required|min_length[3]',
                'password'  => 'required|min_length[3]',
            ]
        )) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $user = $m_user->where([
                'username' => $username,
            ])->first();
            // Proses login
            if ($user) {
                // Jika username password benar
                $this->session->set('username', $username);
                $this->session->set('id_user', $user['id_user']);
                $this->session->set('nama', $user['nama']);
                $this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
                return redirect()->to(base_url('admin/dasbor'));
            } else {
                // jika username password salah
                $this->session->setFlashdata('warning', 'Username atau password salah');
                return redirect()->to(base_url('loginadmin'));
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
        // End proses
    }
}
