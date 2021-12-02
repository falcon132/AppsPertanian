<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Galeri_model;
use App\Models\Berita_model;

class Perkebunan extends BaseController
{
    public function index()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'home/perkebunan'
        ];
        echo view('layout/wrapper', $data);
    }
    // read
    public function read($slug_berita)
    {
        $m_berita        = new Berita_model();
        $berita         = $m_berita->read($slug_berita);

        // Update hits
        $data = [
            'id_berita'    => $berita['id_berita'],
            'hits'        => $berita['hits'] + 1
        ];
        $m_berita->edit($data);
        // Update hits

        $data = [
            'title'            => $berita['judul_berita'],
            'description'    => $berita['judul_berita'],
            'keywords'        => $berita['judul_berita'],
            'berita'        => $berita,
            'content'        => 'berita/read'
        ];
        echo view('layout/wrapper', $data);
    }
    // tampilan menu home //
    public function sawit()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'komoditas/perkebunan/sawit/index'
        ];
        echo view('layout/wrapper', $data);
    }
    public function panduan_sawit()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'komoditas/perkebunan/sawit/panduan'
        ];
        echo view('layout/wrapper', $data);
    }
    // end tampilan sub-menu perikanan pada tab home//
    public function hama_sawit()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'komoditas/perkebunan/sawit/hama'
        ];
        echo view('layout/wrapper', $data);
    }
    // end tampilan sub-menu perikanan pada tab home//
    public function solusi_sawit()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'komoditas/perkebunan/sawit/solusi'
        ];
        echo view('layout/wrapper', $data);
    }
}
