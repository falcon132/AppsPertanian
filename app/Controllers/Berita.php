<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Berita_model;
use App\Models\Kategori_model;

class Berita extends BaseController
{

	// index
	public function index()
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->home();

		$data = [
			'title'			=> 'Berita ',
			'description'	=> 'Berita ',
			'keywords'		=> 'Berita ',
			'berita'		=> $berita,
			'content'		=> 'berita/index'
		];
		echo view('layout/wrapper', $data);
	}

	// read
	public function read($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/read'
		];
		echo view('layout/wrapper', $data);
	}


	// kategori
	public function kategori($slug_kategori)
	{
		$m_berita		= new Berita_model();
		$m_kategori		= new Kategori_model();
		$kategori 		= $m_kategori->read($slug_kategori);
		$berita 		= $m_berita->kategori($kategori['id_kategori']);
		// Update hits
		$data = [
			'id_kategori'	=> $kategori['id_kategori'],
			'hits'			=> $kategori['hits'] + 1
		];
		$m_kategori->edit($data);
		// Update hits

		$data = [
			'title'			=> $kategori['nama_kategori'],
			'description'	=> $kategori['nama_kategori'],
			'keywords'		=> $kategori['nama_kategori'],
			'kategori'		=> $kategori,
			'berita'		=> $berita,
			'content'		=> 'berita/index'
		];
		echo view('layout/wrapper', $data);
	}
	// BAWANG // BAWANG // BAWANG // BAWANG //
	public function panduan_bawang($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/panduan_bawang'
		];
		echo view('layout/wrapper', $data);
	}

	public function solusi_bawang($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/solusi_bawang'
		];
		echo view('layout/wrapper', $data);
	}
	public function hama_bawang($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/hama_bawang'
		];
		echo view('layout/wrapper', $data);
	}
	// SAWIT // SAWIT // SAWIT // SAWIT //
	public function panduan_sawit($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/panduan_sawit'
		];
		echo view('layout/wrapper', $data);
	}

	public function solusi_sawit($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/solusi_sawit'
		];
		echo view('layout/wrapper', $data);
	}
	public function hama_sawit($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/hama_sawit'
		];
		echo view('layout/wrapper', $data);
	}
	// PADI // PADI // PADI // PADI //
	public function panduan_padi($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/panduan_padi'
		];
		echo view('layout/wrapper', $data);
	}

	public function solusi_padi($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/solusi_padi'
		];
		echo view('layout/wrapper', $data);
	}
	public function hama_padi($slug_berita)
	{
		$m_berita		= new Berita_model();
		$berita 		= $m_berita->read($slug_berita);

		// Update hits
		$data = [
			'id_berita'	=> $berita['id_berita'],
			'hits'		=> $berita['hits'] + 1
		];
		$m_berita->edit($data);
		// Update hits

		$data = [
			'title'			=> $berita['judul_berita'],
			'description'	=> $berita['judul_berita'],
			'keywords'		=> $berita['judul_berita'],
			'berita'		=> $berita,
			'content'		=> 'berita/hama_padi'
		];
		echo view('layout/wrapper', $data);
	}
}
