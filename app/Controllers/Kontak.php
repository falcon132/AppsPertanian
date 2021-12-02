<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Galeri_model;

class Kontak extends BaseController
{
	// Kontak
	public function index()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'kontak/index'
		];
		echo view('layout/wrapper', $data);
	}
}
