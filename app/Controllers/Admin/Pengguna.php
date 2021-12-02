<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        checklogin();
        $m_berita         = new PenggunaModel();
        $berita         = $m_berita->listing();

        $data = [
            'title'            => 'Pengguna',
            'berita'        => $berita,
            'content'        => 'admin/pengguna/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
