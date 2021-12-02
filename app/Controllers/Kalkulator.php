<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Galeri_model;

// konten halaman isi kalkulator//

//tampilan tab kalkulator//


class kalkulator extends BaseController
{
    public function padi()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/padi'
        ];
        echo view('layout/wrapper', $data);
    }

    public function manual()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/manual'
        ];
        echo view('layout/wrapper', $data);
    }

    //tampilan tab kalkulator//
    public function otomatis()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/otomatis'
        ];
        echo view('layout/wrapper', $data);
    }

    public function bawang()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/bawangmerah'
        ];
        echo view('layout/wrapper', $data);
    }
    public function sawit()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/sawit'
        ];
        echo view('layout/wrapper', $data);
    }
    public function horti()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/otomatis/horti'
        ];
        echo view('layout/wrapper', $data);
    }
    public function pangan()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/otomatis/pangan'
        ];
        echo view('layout/wrapper', $data);
    }
    public function perkebunan()
    {
        $m_galeri        = new Galeri_model();
        $slider         = $m_galeri->slider();

        $data = [
            'title'            => 'Kontak Kami',
            'description'    => 'Kontak Kami ',
            'keywords'        => 'Kontak Kami ',
            'slider'        => $slider,
            'content'        => 'kalkulator/perkebunan'
        ];
        echo view('layout/wrapper', $data);
    }

    ///// AWAL ///////
    public function padi_awal()
    {
        return view('/awal/padi');
    }
    public function bawang_awal()
    {
        return view('/awal/bawangmerah');
    }
    public function sawit_awal()
    {
        return view('/awal/sawit');
    }
}
