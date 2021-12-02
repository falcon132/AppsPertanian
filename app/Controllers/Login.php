<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Konfigurasi_model;
use App\Models\User_model;
use App\Models\PenggunaModel;
use App\Models\updated_atModel;


class Login extends BaseController
{

	public function __construct()
	{
		helper('form');
	}

	// Homepage
	public function index()
	{
		$session = \Config\Services::session();
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_user 		= new User_model();
		$konfigurasi 	= $m_konfigurasi->listing();

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'username' 	=> 'required|min_length[3]',
				'password'  => 'required|min_length[3]',
			]
		)) {
			$username 	= $this->request->getPost('username');
			$password 	= $this->request->getPost('password');
			$user 		= $m_user->login($username, $password);
			// Proses login
			if ($user) {
				// Jika username password benar
				$this->session->set('username', $username);
				$this->session->set('id_user', $user['id_user']);
				$this->session->set('akses_level', $user['akses_level']);
				$this->session->set('nama', $user['nama']);
				$this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
				return redirect()->to(base_url('admin/dasbor'));
			} else {
				// jika username password salah
				$this->session->setFlashdata('warning', 'Username atau password salah');
				return redirect()->to(base_url('login'));
			}
		} else {
			// End validasi
			$data = [
				'title'			=> 'Login Administrator',
				'description'	=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
				'keywords'		=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
				'session'		=> $session
			];
			echo view('login/index', $data);
		}
		// End proses
	}

	// lupa
	public function lupa()
	{
		$session = \Config\Services::session();
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_user 		= new User_model();
		$konfigurasi 	= $m_konfigurasi->listing();

		$data = [
			'title'			=> 'Lupa Password',
			'description'	=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'session'		=> $session
		];
		echo view('login/lupa', $data);
	}

	// Logout
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url('login?logout=sukses'));
	}

	// user
	public function user()
	{
		return view('login');
	}
	public function process()
	{
		$users = new PenggunaModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$dataUser = $users->where([
			'username' => $username,
		])->first();
		if ($dataUser) {
			if (password_verify($password, $dataUser->password)) {
				session()->set([
					'username' => $dataUser->username,
					'name' => $dataUser->name,
					'nohp' => $dataUser->nohp,
					'lokasi' => $dataUser->lokasi,
					'komoditas' => $dataUser->komoditas,
					'usia' => $dataUser->usia,
					'logged_in' => TRUE
				]);
				return redirect()->to(base_url('home'));
			} else {
				session()->setFlashdata('error', 'Username & Password Salah');
				return redirect()->back();
			}
		} else {
			session()->setFlashdata('error', 'Username & Password Salah');
			return redirect()->back();
		}
	}
	function logout_user()
	{
		session()->destroy();
		return redirect()->to('/login/user');
	}
}
