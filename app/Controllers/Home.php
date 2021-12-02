<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Galeri_model;

class home extends BaseController
{
	public function awal()
	{
		return view('awal');
	}
	public function lanjutkan()
	{
		return view('/awal/index');
	}

	public function Otomatis()
	{
		return view('/awal/otomatis');
	}

	public function Manual()
	{
		return view('/awal/manual');
	}
	// tampilan menu home //
	public function index()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'home/home'
		];
		echo view('layout/wrapper', $data);
	}
	//end tampilan menu home//

	//tampilan tab kalkulator//
	public function kalkulator()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'kalkulator/index'
		];
		echo view('layout/wrapper', $data);
	}

	public function akun()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'akun'
		];
		echo view('layout/wrapper', $data);
	}
	// end tampilan tab kalkulator//
	//tampilan tab kalkulator//
	public function pangan()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'home/kalkulator'
		];
		echo view('layout/wrapper', $data);
	}
	// end tampilan tab kalkulator//
	//tampilan tab kalkulator//
	public function horti()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'home/kalkulator'
		];
		echo view('layout/wrapper', $data);
	}
	// end tampilan tab kalkulator//
	//tampilan tab kalkulator//
	public function perkebunan()
	{
		$m_galeri		= new Galeri_model();
		$slider 		= $m_galeri->slider();

		$data = [
			'title'			=> 'Kontak Kami',
			'description'	=> 'Kontak Kami ',
			'keywords'		=> 'Kontak Kami ',
			'slider'		=> $slider,
			'content'		=> 'home/kalkulator'
		];
		echo view('layout/wrapper', $data);
	}
	// end tampilan tab kalkulator//
}
