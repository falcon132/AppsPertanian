<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\HasilModel;

class tabel_excel extends BaseController
{
    public function index()
    {
        checklogin();
        $m_excel         = new HasilModel();
        $excel         = $m_excel->findAll();

        $data = [
            'title'            => 'Pengguna tidak login',
            'excel'        => $excel,
            'content'        => 'admin/excel/index'

        ];
        echo view('admin/layout/wrapper', $data);
    }
}
